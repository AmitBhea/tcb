/*
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
     */
({id:'searchForm',preTag:'<strong>',postTag:'</strong>',plugins:['Dropdown'],searchModules:[],events:{'click .typeahead a':'clearSearch','click [data-action=search]':'showResults','click [data-advanced=options]':'persistMenu','click [data-action="select-module"]':'selectModule'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);app.events.on('app:sync:complete',this.populateModules,this);},selectModule:function(event){var module=this.$(event.currentTarget).data('module'),searchAll=this.$('input:checkbox[data-module="all"]'),searchAllLabel=searchAll.closest('label'),checkedModules=this.$('input:checkbox:checked[data-module!="all"]');if(module==='all'){searchAll.attr('checked',true);searchAllLabel.addClass('active');checkedModules.removeAttr('checked');checkedModules.closest('label').removeClass('active');}else{var currentTarget=this.$(event.currentTarget),currentTargetLabel=currentTarget.closest('label');currentTarget.attr('checked')?currentTargetLabel.addClass('active'):currentTargetLabel.removeClass('active');if(checkedModules.length){searchAll.removeAttr('checked');searchAllLabel.removeClass('active');}
else{searchAll.attr('checked',true);searchAllLabel.addClass('active');}}
event.stopPropagation();},populateModules:function(){if(this.disposed){return;}
this.searchModules=[];var modules=app.metadata.getModules()||{};this.searchModules=this.populateSearchableModules({modules:modules,acl:app.acl,checkFtsEnabled:true,checkGlobalSearchEnabled:true});this.render();},populateSearchableModules:function(options){var modules=options.modules,moduleNames=options.moduleNames||null,acl=options.acl,searchModules=[];_.each(modules,function(meta,module){var goodToAdd=true;if(moduleNames&&!_.contains(moduleNames,module)){goodToAdd=false;}
if(goodToAdd&&acl.hasAccess.call(acl,'view',module)){if(options.checkGlobalSearchEnabled&&!meta.globalSearchEnabled){goodToAdd=false;}
if(goodToAdd&&options.checkFtsEnabled&&!meta.ftsEnabled){goodToAdd=false;}
if(goodToAdd){searchModules.push(module);}}},this);return searchModules;},_renderHtml:function(){if(!app.api.isAuthenticated()||app.config.appStatus=='offline')return;app.view.View.prototype._renderHtml.call(this);var self=this,menuTemplate=app.template.getView(this.name+'.result');this.$('.search-query').searchahead({request:function(term){self.fireSearchRequest.call(self,term,this);},compiler:menuTemplate,throttleMillis:(app.config.requiredElapsed||500),throttle:function(callback,millis){if(!self.debounceFunction){self.debounceFunction=_.debounce(function(){callback();},millis||500);}
self.debounceFunction();},onEnterFn:function(hrefOrTerm,isHref){if(isHref&&this.$menu.is(':visible')){app.router.navigate(hrefOrTerm,{trigger:true});}else{var term=$.trim(self.$('.search-query').attr('value'));if(!_.isEmpty(term)){self.fireSearchRequest.call(self,term,this);}}}});this.$('.navbar-search').submit(function(){return false;});},_escapeSearchResults:function(html){var highlightedSpanRe=/<strong>.*?<\/strong>/g,higlightSpanTagsRe=/(<strong>)|(<\/strong>)/g,escape=Handlebars.Utils.escapeExpression,result=escape(html),highlightedSpan=html.match(highlightedSpanRe),highlightedContent,self=this;_.each(highlightedSpan,function(part){highlightedContent=part.replace(higlightSpanTagsRe,'');highlightedContent=escape(highlightedContent);result=result.replace(escape(part),self.preTag+highlightedContent+self.postTag);});return new Handlebars.SafeString(result);},_getSearchModuleNames:function(){if(this.$('input:checkbox[data-module="all"]').attr('checked')){return[];}
else{var searchModuleNames=[],checkedModules=this.$('input:checkbox:checked[data-module!="all"]');_.each(checkedModules,function(val,index){searchModuleNames.push(val.getAttribute('data-module'));},this);return searchModuleNames;}},fireSearchRequest:function(term,plugin){var searchModuleNames=this._getSearchModuleNames(),moduleList=searchModuleNames.join(','),self=this,maxNum=app.config&&app.config.maxSearchQueryResult?app.config.maxSearchQueryResult:5,params={q:term,fields:'name, id',module_list:moduleList,max_num:maxNum};app.api.search(params,{success:function(data){var formattedRecords=[];_.each(data.records,function(record){if(!record.id){return;}
var formattedRecord={id:record.id,name:record.name,module:record._module,link:'#'+app.router.buildRoute(record._module,record.id)};if((record._search.highlighted)){_.each(record._search.highlighted,function(val,key){var safeString=self._escapeSearchResults(val.text);if(key!=='name'){formattedRecord.field_name=app.lang.get(val.label,val.module);formattedRecord.field_value=safeString;}else{formattedRecord.name=safeString;}});}
formattedRecords.push(formattedRecord);});plugin.provide({next_offset:data.next_offset,records:formattedRecords,module_list:moduleList});},error:function(error){app.error.handleHttpError(error,plugin);app.logger.error("Failed to fetch search results in search ahead. "+error);}});},showResults:function(evt){var $searchBox=this.$('[data-provide=typeahead]');if(!$searchBox.is(':visible')){this.$el.addClass('active');$('body').on('click.globalsearch.data-api',_.bind(function(event){if(!$.contains(this.el,event.target)){this.$el.removeClass('active');$('body').off('click.globalsearch.data-api');}},this));$searchBox.focus();return;}
var e=jQuery.Event('keyup',{keyCode:$.ui.keyCode.ENTER});$searchBox.focus();$searchBox.trigger(e);},clearSearch:function(){this.$('.search-query').val('');},persistMenu:function(e){e.stopPropagation();},unbind:function(){$('body').off('click.globalsearch.data-api');this._super('unbind');}})