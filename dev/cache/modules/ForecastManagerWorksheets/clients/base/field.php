<?php
$clientCache['ForecastManagerWorksheets']['base']['field'] = array (
  'userLink' => 
  array (
    'templates' => 
    array (
      'list' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<div class="ellipsis_inline" data-placement="right"
     title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}">
    <a href="javascript:void(0)" class="worksheetManagerLink" data-uid="{{uid}}">{{{value}}}</a>
</div>
',
    ),
    'controller' => 
    array (
      'base' => '/*
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
({events:{\'click a.worksheetManagerLink\':\'linkClicked\'},plugins:[\'EllipsisInline\'],uid:\'\',initialize:function(options){this.uid=this.model.get(\'user_id\');app.view.Field.prototype.initialize.call(this,options);return this;},format:function(value){var su=this.context.get(\'selectedUser\')||this.context.parent.get(\'selectedUser\')||app.user.toJSON();if(value==su.full_name){var hb=Handlebars.compile("{{str key module context}}");value=hb({\'key\':\'LBL_MY_OPPS_RLI\',\'module\':this.module,\'context\':su});}
return value;},linkClicked:function(event){var uid=$(event.target).data(\'uid\');var selectedUser={id:\'\',user_name:\'\',full_name:\'\',first_name:\'\',last_name:\'\',isManager:false,showOpps:false,reportees:[]};var options={dataType:\'json\',success:_.bind(function(data){selectedUser.id=data.id;selectedUser.user_name=data.user_name;selectedUser.full_name=data.full_name;selectedUser.first_name=data.first_name;selectedUser.last_name=data.last_name;selectedUser.isManager=data.isManager;var su=this.context.get(\'selectedUser\')||this.context.parent.get(\'selectedUser\')||app.user.toJSON();selectedUser.showOpps=(su.id==data.id);app.utils.getSelectedUsersReportees(selectedUser,this.context.parent);},this)};myURL=app.api.buildURL(\'Forecasts\',\'user/\'+uid);app.api.call(\'read\',myURL,null,options);}})',
    ),
  ),
  'rowactions' => 
  array (
    'controller' => 
    array (
      'base' => '/*
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
({extendsFrom:\'RowactionsField\',initialize:function(options){app.view.invokeParent(this,{type:\'field\',name:\'rowactions\',method:\'initialize\',args:[options]});this.setPlaceholder=_.throttle(this.customSetPlaceholder,100);},getPlaceholder:function(){var placeholder=app.view.Field.prototype.getPlaceholder.call(this),$container=$(placeholder.toString()),$caret=$(\'<a class="btn dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="icon-caret-down"></i></a>\'),$dropdown=$(\'<ul class="dropdown-menu"></ul>\');if(this.def.primary){$caret.addClass(\'btn-primary\');}
_.each(this.def.buttons,function(fieldDef,index,list){var field=app.view.createField({def:fieldDef,view:this.view,viewName:this.options.viewName,model:this.model});this.fields.push(field);field.on(\'show hide\',this.setPlaceholder,this);field.parent=this;if(index==0){$container.append(field.getPlaceholder().toString());}else{if(index==1){$container.addClass(\'actions btn-group\');if(list.length>2){$container.append($caret).append($dropdown);}}
if(list.length>2){$dropdown.append(\'<li>\'+field.getPlaceholder().toString()+\'</li>\');}else{$container.append(field.getPlaceholder().toString());}}},this);return new Handlebars.SafeString($container.get(0).outerHTML);},customSetPlaceholder:function(){if(this.$el){var index=0;_.each(this.fields,function(field,idx,list){var fieldPlaceholder=this.$("span[sfuuid=\'"+field.sfId+"\']");if(field.isHidden){fieldPlaceholder.toggleClass(\'hide\',true);this.$el.append(fieldPlaceholder);}else{fieldPlaceholder.toggleClass(\'hide\',false);if(index==0||list.length==2){field.getFieldElement().addClass("btn");if(this.def.primary){field.getFieldElement().addClass("btn-primary");}
if(index==0){this.$el.prepend(fieldPlaceholder);}else{this.$el.append(fieldPlaceholder);}}else{field.getFieldElement().removeClass("btn btn-primary");this.$(".dropdown-menu").append($(\'<li>\').html(fieldPlaceholder));}
index++;}},this);if(index<=1){this.$(".dropdown-toggle").hide();this.$el.removeClass(\'btn-group\');}else{this.$(".dropdown-toggle").show();this.$el.addClass(\'btn-group\');}
this.$(".dropdown-menu").children("li").each(function(index,el){if($(el).html()===\'\'){$(el).remove();}});}}})',
    ),
  ),
  'currency' => 
  array (
    'controller' => 
    array (
      'base' => '/*
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
({extendsFrom:\'CurrencyField\',initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'ClickToEdit\');app.view.invokeParent(this,{type:\'field\',name:\'currency\',method:\'initialize\',args:[options]});}})',
    ),
    'templates' => 
    array (
      'edit' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<div class="controls">
    <span class="error-tooltip hide" rel="tooltip" data-container="body">
        <i class="icon-exclamation-sign"></i>
    </span>
</div>
<input type="text" value="{{value}}" class="input-small tright" maxlength="26">
<span sfuuid="{{currencySfId}}" class="hide"></span>
',
    ),
  ),
  'commithistory' => 
  array (
    'templates' => 
    array (
      'log' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
{{{commit}}}<br />
{{timeago commit_date "LBL_COMMITTED_TIME_RELATIVE"}}
',
      'list' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
{{str "LBL_LOADING_COMMIT_HISTORY" "Forecasts"}}
',
    ),
    'controller' => 
    array (
      'base' => '/*
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
({initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.on(\'render\',function(){this.loadData();},this);},loadData:function(){var ctx=this.context.parent||this.context,su=ctx.get(\'selectedUser\')||app.user.toJSON(),isManager=this.model.get(\'isManager\'),showOpps=(su.id==this.model.get(\'user_id\'))?1:0,forecastType=app.utils.getForecastType(isManager,showOpps),args_filter=[],options={};args_filter.push({"user_id":this.model.get(\'user_id\')});args_filter.push({"forecast_type":forecastType});var url={"url":app.api.buildURL(\'Forecasts\',\'filter\'),"filters":{"filter":args_filter}};options.success=_.bind(function(data){this.buildLog(data);},this);app.api.call(\'create\',url.url,url.filters,options,{context:this});},buildLog:function(data){data=data.records;var ctx=this.context.parent||this.context,forecastCommitDate=ctx.get(\'currentForecastCommitDate\'),commitDate=new Date(forecastCommitDate),newestModel=new Backbone.Model(_.first(data)),otherModels=_.last(data,data.length-1),oldestModel={},displayCommitDate=newestModel.get(\'date_modified\');for(var i=0;i<otherModels.length;i++){if(new Date(otherModels[i].date_modified)<=commitDate){oldestModel=new Backbone.Model(otherModels[i]);displayCommitDate=oldestModel.get(\'date_modified\');break;}}
var tpl=app.template.getField(this.type,\'log\',this.module);this.$el.html(tpl({commit:app.utils.createHistoryLog(oldestModel,newestModel).text,commit_date:displayCommitDate}));this.$el.find("span.relativetime").timeago({logger:SUGAR.App.logger,date:SUGAR.App.date,lang:SUGAR.App.lang,template:SUGAR.App.template});},_render:function(){this.$el=this.view.$el.find(\'span[sfuuid="\'+this.sfId+\'"]\');app.view.Field.prototype._render.call(this);}})',
    ),
  ),
  '_hash' => '4a8dedb1c66ad56b33b50c08fc02bc98',
);

