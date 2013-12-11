<?php
$clientCache['ForecastWorksheets']['base']['view'] = array (
  'list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'commit_stage',
              'label' => 'LBL_FORECAST',
              'enabled' => true,
              'default' => true,
              'click_to_edit' => true,
            ),
            1 => 
            array (
              'name' => 'parent_name',
              'label' => 'LBL_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
                2 => 'parent_deleted',
                3 => 'name',
              ),
              'id' => 'PARENT_ID',
              'link' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'account_id',
              ),
              'id' => 'ACCOUNT_ID',
              'link' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'date_closed',
              'label' => 'LBL_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'date_closed_timestamp',
              ),
              'click_to_edit' => true,
            ),
            4 => 
            array (
              'name' => 'sales_stage',
              'label' => 'LBL_SALES_STAGE',
              'enabled' => true,
              'default' => true,
              'click_to_edit' => true,
            ),
            5 => 
            array (
              'name' => 'probability',
              'label' => 'LBL_OW_PROBABILITY',
              'enabled' => true,
              'default' => true,
              'align' => 'right',
              'click_to_edit' => true,
            ),
            6 => 
            array (
              'name' => 'likely_case',
              'label' => 'LBL_LIKELY',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
                2 => 'best_case',
                3 => 'worst_case',
              ),
              'align' => 'right',
              'currency_format' => true,
              'click_to_edit' => true,
              'convertToBase' => true,
              'showTransactionalAmount' => true,
            ),
            7 => 
            array (
              'name' => 'best_case',
              'label' => 'LBL_BEST',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'base_rate',
                1 => 'currency_id',
              ),
              'align' => 'right',
              'currency_format' => true,
              'click_to_edit' => true,
              'convertToBase' => true,
              'showTransactionalAmount' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'list-bottom' => 
  array (
    'templates' => 
    array (
      'list-bottom' => '{{!
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

 **** NOTE ****
 This file is left empty to suppress this showing up on the forecast module
}}
',
    ),
  ),
  'recordlist' => 
  array (
    'templates' => 
    array (
      'noresults' => '{{!
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
<tr>
    <td class="tcenter" colspan="{{this._fields.visible.length}}">{{str "LBL_LISTVIEW_NO_RECORDS"}}</td>
    <td>&nbsp;</td>
</tr>
',
      'totals' => '{{!
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
<tfoot>
<tr id="forecastsWorksheetTotalsOverallTotals">
    {{#each this.leftColumns}}
        <td>&nbsp;</td>
    {{/each}}
    <td colspan=\'{{before_colspan}}\'>{{str "LBL_TOTAL" "Forecasts"}}</td>

    {{#if this.totals.worst_case_display}}
        <td class="tright">
            {{#if this.totals.worst_case_access}}
                {{formatCurrency this.totals.overall_worst}}
            {{else}}
                {{{this.noAccessDataErrorTemplate}}}
            {{/if}}
        </td>
    {{/if}}

    {{#if this.totals.likely_case_display}}
        <td class="tright">
            {{#if this.totals.likely_case_access}}
                {{formatCurrency this.totals.overall_amount}}
            {{else}}
                {{{this.noAccessDataErrorTemplate}}}
            {{/if}}
        </td>
    {{/if}}

    {{#if this.totals.best_case_display}}
        <td class="tright">
            {{#if this.totals.best_case_access}}
                {{formatCurrency this.totals.overall_best}}
            {{else}}
                {{{this.noAccessDataErrorTemplate}}}
            {{/if}}
        </td>
    {{/if}}
    {{#if this.after_colspan}}
         <td colspan=\'{{after_colspan}}\'>&nbsp;</td>
    {{/if}}
    {{#each this.rightColumns}}
        <td>&nbsp;</td>
    {{/each}}
</tr>
</tfoot>


',
    ),
    'meta' => 
    array (
      'css_class' => 'forecast-worksheet',
      'favorite' => false,
      'selection' => 
      array (
      ),
      'rowactions' => 
      array (
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'css_class' => 'btn',
            'tooltip' => 'LBL_PREVIEW',
            'event' => 'list:preview:fire',
            'icon' => 'icon-eye-open',
            'acl_action' => 'view',
          ),
        ),
      ),
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
({extendsFrom:\'RecordlistView\',worksheetType:\'sales_rep\',totals:{},before_colspan:0,after_colspan:0,selectedUser:{},canEdit:true,filters:[],filteredCollection:new Backbone.Collection(),selectedTimeperiod:\'\',navigationMessage:\'\',routeNavigationMessage:\'\',displayNavigationMessage:false,hasCheckedForDraftRecords:false,previewModel:undefined,previewVisible:false,isCollectionSyncing:false,noAccessDataErrorTemplate:undefined,initialize:function(options){this.plugins=_.clone(this.plugins);this.plugins.push(\'CteTabbing\',\'DirtyCollection\');app.view.invokeParent(this,{type:\'view\',name:\'recordlist\',method:\'initialize\',args:[options]});this.template=app.template.getView(\'flex-list\',this.module);this.selectedUser=this.context.get(\'selectedUser\')||this.context.parent.get(\'selectedUser\')||app.user.toJSON();this.selectedTimeperiod=this.context.get(\'selectedTimePeriod\')||this.context.parent.get(\'selectedTimePeriod\')||\'\';this.context.set(\'skipFetch\',!(this.selectedUser.showOpps||!this.selectedUser.isManager));this.filters=this.context.get(\'selectedRanges\')||this.context.parent.get(\'selectedRanges\');this.collection.sync=_.bind(this.sync,this);this.noAccessDataErrorTemplate=app.template.getField(\'base\',\'noaccess\')(this);},_dispose:function(){if(!_.isUndefined(this.context.parent)&&!_.isNull(this.context.parent)){this.context.parent.off(null,null,this);}
app.routing.offBefore(\'route\',this.beforeRouteHandler,this);$(window).off("beforeunload."+this.worksheetType);app.view.invokeParent(this,{type:\'view\',name:\'recordlist\',method:\'_dispose\'});},bindDataChange:function(){if(!_.isUndefined(this.context.parent)&&!_.isUndefined(this.context.parent.get(\'model\'))){if(this.context.parent.get(\'model\').module==\'Forecasts\'){this.context.parent.on(\'button:export_button:click\',function(){if(this.layout.isVisible()){this.exportCallback();}},this);this.before(\'render\',function(){return this.beforeRenderCallback()},this);this.on(\'render\',function(){this.renderCallback();if(this.previewVisible){this.decorateRow(this.previewModel);}},this);this.on(\'list:toggle:column\',function(column,isVisible,columnMeta){this.calculateTotals();},this);this.context.parent.on(\'forecasts:worksheet:totals\',function(totals,type){if(type==this.worksheetType&&this.layout.isVisible()){var tpl=app.template.getView(\'recordlist.totals\',this.module);this.$el.find(\'tfoot\').remove();this.$el.find(\'tbody\').after(tpl(this));}},this);this.context.parent.on(\'change:selectedTimePeriod\',function(model,changed){this.updateSelectedTimeperiod(changed);},this);this.context.parent.on(\'change:selectedUser\',function(model,changed){this.updateSelectedUser(changed)},this);this.context.parent.on(\'button:save_draft_button:click\',function(){if(this.layout.isVisible()){this.context.parent.once(\'forecasts:worksheet:saved\',function(){this.setNavigationMessage(false,\'\',\'\');this.cleanUpDirtyModels();this.refreshData();this.collection.once(\'reset\',function(){this.context.parent.trigger(\'forecasts:worksheet:needs_commit\',this.worksheetType);},this);},this);this.saveWorksheet(true);}},this);this.context.parent.on(\'button:commit_button:click\',function(){if(this.layout.isVisible()){this.context.parent.once(\'forecasts:worksheet:saved\',function(){this.context.parent.trigger(\'forecasts:worksheet:commit\',this.selectedUser,this.worksheetType,this.getCommitTotals())},this);this.saveWorksheet(false);}},this);this.context.parent.on(\'change:currentForecastCommitDate\',function(context,changed){if(this.layout.isVisible()){this.checkForDraftRows(changed);}},this);this.collection.on(\'data:sync:start\',function(){this.isCollectionSyncing=true;},this);this.collection.on(\'data:sync:complete\',function(){this.isCollectionSyncing=false;},this);this.collection.on(\'reset\',function(){this.setNavigationMessage(false,\'\',\'\');this.cleanUpDirtyModels();var ctx=this.context.parent||this.context
ctx.trigger(\'forecasts:worksheet:is_dirty\',this.worksheetType,false);this.checkForDraftRows(ctx.get(\'currentForecastCommitDate\'));this.filterCollection();},this);this.collection.on(\'change:commit_stage\',function(model){if(!_.isEmpty(this.filters)&&_.indexOf(this.filters,model.get(\'commit_stage\'))===-1){this.filterCollection();if(!this.disposed){this.render();}}else{this.$el.find(\'tr[name=\'+model.module+\'_\'+model.id+\']\').attr(\'data-forecast\',model.get(\'commit_stage\'));}},this);this.context.parent.on(\'change:selectedRanges\',function(model,changed){this.filters=changed;this.once(\'render\',function(){app.alert.dismiss(\'worksheet_filtering\');});this.filterCollection();if(!this.disposed)this.render();},this);this.context.parent.on(\'forecasts:worksheet:committed\',function(){if(this.layout.isVisible()){this.setNavigationMessage(false,\'\',\'\');this.cleanUpDirtyModels();var ctx=this.context.parent||this.context;ctx.trigger(\'forecasts:worksheet:is_dirty\',this.worksheetType,false);if(this.selectedUser.isManager&&app.metadata.getModule(\'Forecasts\',\'config\').show_forecasts_commit_warnings==1){this.collection.once(\'reset\',function(){this.setNavigationMessage(true,\'LBL_WORKSHEET_COMMIT_ALERT\',\'LBL_WORKSHEET_COMMIT_ALERT\');},this)}
this.refreshData();}},this);this.context.parent.on(\'forecasts:worksheet:is_dirty\',function(worksheetType,is_dirty){if(this.worksheetType==worksheetType){if(is_dirty){this.setNavigationMessage(true,\'LBL_WORKSHEET_SAVE_CONFIRM\',\'LBL_WORKSHEET_SAVE_CONFIRM_UNLOAD\');}else{this.setNavigationMessage(false,\'\',\'\');}}},this);app.routing.before(\'route\',this.beforeRouteHandler,{},this);$(window).bind("beforeunload."+this.worksheetType,_.bind(function(){var ret=this.showNavigationMessage(\'window\');if(_.isString(ret)){return ret;}},this));}}
this.collection.on(\'reset change\',function(){this.calculateTotals();},this);if(!_.isUndefined(this.dirtyModels)){this.dirtyModels.on(\'add\',function(){if(this.canEdit){var ctx=this.context.parent||this.context;ctx.trigger(\'forecasts:worksheet:is_dirty\',this.worksheetType,true);}},this);}
this.layout.on(\'hide\',function(){this.totals={};},this);app.view.invokeParent(this,{type:\'view\',name:\'recordlist\',method:\'bindDataChange\'});},beforeRouteHandler:function(){var ret=this.showNavigationMessage(\'router\');this.processNavigationMessageReturn(ret);},unbindData:function(){app.events.off(null,null,this);app.view.invokeParent(this,{type:\'view\',name:\'recordlist\',method:\'unbindData\'});},showNavigationMessage:function(type){if(this.layout.isVisible()){var canEdit=this.dirtyCanEdit||this.canEdit;if(canEdit&&this.displayNavigationMessage){if(type==\'window\'){if(!_.isEmpty(this.routeNavigationMessage)){return app.lang.get(this.routeNavigationMessage,\'Forecasts\');}
return false;}
if(this.navigationMessage==\'LBL_WORKSHEET_COMMIT_ALERT\'){alert(app.lang.get(this.navigationMessage,\'Forecasts\'));return true;}else{var ret=confirm(app.lang.get(this.navigationMessage,\'Forecasts\').split("<br>"));return{\'message\':this.navigationMessage,\'run_action\':ret};}}
return true;}
return true;},setNavigationMessage:function(display,reload_label,route_label){this.displayNavigationMessage=display;this.navigationMessage=reload_label;this.routeNavigationMessage=route_label;},exportCallback:function(){var url=\'index.php?module=Forecasts&action=ExportWorksheet\';url+=\'&user_id=\'+this.selectedUser.id;url+=\'&timeperiod_id=\'+this.selectedTimeperiod;if(this.canEdit&&this.isDirty()){if(confirm(app.lang.get("LBL_WORKSHEET_EXPORT_CONFIRM","Forecasts"))){this.runExport(url);}}else{this.runExport(url);}},runExport:function(url){var dlFrame=$("#forecastsDlFrame");if(dlFrame.length==0){dlFrame=$("<iframe>");dlFrame.attr("id","forecastsDlFrame");dlFrame.css("display","none");$("body").append(dlFrame);}
dlFrame.attr("src",url);},beforeRenderCallback:function(){var showOpps=(_.isUndefined(this.selectedUser.showOpps))?false:this.selectedUser.showOpps,isManager=(_.isUndefined(this.selectedUser.isManager))?true:this.selectedUser.isManager;if(!(showOpps||!isManager)&&this.layout.isVisible()){this.layout.hide();}else if((showOpps||!isManager)&&!this.layout.isVisible()){this.layout.once(\'show\',this.calculateTotals,this);this.layout.show();}
this.leftColumns=[];return(showOpps||!isManager);},renderCallback:function(){var user=this.selectedUser||this.context.parent.get(\'selectedUser\')||app.user.toJSON()
if(user.showOpps||!user.isManager){if(!this.layout.isVisible()){this.layout.show();}
if(this.filteredCollection.length==0){var tpl=app.template.getView(\'recordlist.noresults\',this.module);this.$el.find(\'tbody\').html(tpl(this));}
if(!_.isEmpty(this.totals)&&this.layout.isVisible()){var tpl=app.template.getView(\'recordlist.totals\',this.module);this.$el.find(\'tbody\').after(tpl(this));}
var sales_stage_width=this.$el.find(\'td[data-field-name="sales_stage"] span.isEditable\').width();var sales_stage_outerwidth=this.$el.find(\'td[data-field-name="sales_stage"] span.isEditable\').outerWidth();this.$el.find(\'td[data-field-name="sales_stage"] span.isEditable\').width(sales_stage_width+20);this.$el.find(\'td[data-field-name="sales_stage"] span.isEditable\').parent("td").css("min-width",sales_stage_outerwidth+26+"px");this.setRowActionButtonStates();this.adjustCurrencyColumnWidths();}else{if(this.layout.isVisible()){this.layout.hide();}}},updateSelectedUser:function(changed){var doFetch=false;if(this.selectedUser.id!=changed.id){doFetch=(changed.showOpps||!changed.isManager);}
if(!doFetch&&(changed.showOpps||!changed.isManager)){doFetch=true;}
if(this.displayNavigationMessage){this.dirtyUser=this.selectedUser;this.dirtyCanEdit=this.canEdit;}
this.selectedUser=changed;this.canEdit=(this.selectedUser.id==app.user.get(\'id\'));this.hasCheckedForDraftRecords=false;if(doFetch){this.refreshData();}else{if((!this.selectedUser.showOpps&&this.selectedUser.isManager)&&this.layout.isVisible()){if(this.displayNavigationMessage&&this.dirtyUser.id==this.selectedUser.id){this.processNavigationMessageReturn(this.showNavigationMessage(\'rep_to_manager\'));}else if(this.displayNavigationMessage){this.processNavigationMessageReturn(this.showNavigationMessage(\'user_switch\'));}
this.cleanUpDirtyModels();this.layout.hide();}}},updateSelectedTimeperiod:function(changed){if(this.displayNavigationMessage){this.dirtyTimeperiod=this.selectedTimeperiod;}
this.selectedTimeperiod=changed;this.hasCheckedForDraftRecords=false;if(this.layout.isVisible()){this.refreshData();}},checkForDraftRows:function(lastCommitDate){if(this.layout.isVisible()&&this.canEdit&&this.hasCheckedForDraftRecords===false&&!_.isEmpty(this.collection.models)&&this.isCollectionSyncing===false){this.hasCheckedForDraftRecords=true;if(_.isUndefined(lastCommitDate)){this.context.parent.trigger(\'forecasts:worksheet:needs_commit\',this.worksheetType);}else{this.collection.find(function(item){if(item.get(\'date_modified\')>lastCommitDate){this.context.parent.trigger(\'forecasts:worksheet:needs_commit\',this.worksheetType);return true;}
return false;},this);}}else if(this.layout.isVisible()===false&&this.canEdit&&this.hasCheckedForDraftRecords===false){this.layout.once(\'show\',function(){this.checkForDraftRows(lastCommitDate);},this);}else if(this.isCollectionSyncing===true){this.collection.once(\'data:sync:complete\',function(){this.checkForDraftRows(lastCommitDate);},this);}},setRowActionButtonStates:function(){_.each(this.fields,function(field){if(field.def.event===\'list:preview:fire\'){field.setDisabled((field.model.get(\'parent_deleted\')=="1"));field.render();}});},filterCollection:function(){this.filteredCollection.reset();if(_.isEmpty(this.filters)){this.filteredCollection.add(this.collection.models);}else{this.collection.each(function(model){if(_.indexOf(this.filters,model.get(\'commit_stage\'))!==-1){this.filteredCollection.add(model);}},this);}},saveWorksheet:function(isDraft){var totalToSave=0;if(this.layout.isVisible()){var saveCount=0,ctx=this.context.parent||this.context;if(this.isDirty()){totalToSave=this.dirtyModels.length;this.dirtyModels.each(function(model){model.set({"draft":(isDraft&&isDraft==true)?1:0,"timeperiod_id":this.dirtyTimeperiod||this.selectedTimeperiod,"current_user":this.dirtyUser.id||this.selectedUser.id},{silent:true});model.save({},{success:_.bind(function(){saveCount++;if(this.previewVisible){var previewId=this.previewModel.get(\'parent_id\')||this.previewModel.get(\'id\');if(model.get(\'parent_id\')==previewId){var previewCollection=new Backbone.Collection();this.filteredCollection.each(function(model){if(model.get(\'parent_deleted\')!=="1"){previewCollection.add(model);}},this);app.events.trigger("preview:render",model,previewCollection,true,model.get(\'id\'),true);}}
if(totalToSave===saveCount){if(isDraft){app.alert.show(\'success\',{level:\'success\',autoClose:true,title:app.lang.get("LBL_FORECASTS_WIZARD_SUCCESS_TITLE","Forecasts")+":",messages:[app.lang.get("LBL_FORECASTS_WORKSHEET_SAVE_DRAFT_SUCCESS","Forecasts")]});}
ctx.trigger(\'forecasts:worksheet:saved\',totalToSave,this.worksheetType,isDraft);}},this),silent:true,alerts:{\'success\':false}});},this);this.cleanUpDirtyModels();}else{if(isDraft){app.alert.show(\'success\',{level:\'success\',autoClose:true,title:app.lang.get("LBL_FORECASTS_WIZARD_SUCCESS_TITLE","Forecasts")+":",messages:[app.lang.get("LBL_FORECASTS_WORKSHEET_SAVE_DRAFT_SUCCESS","Forecasts")]});}
ctx.trigger(\'forecasts:worksheet:saved\',totalToSave,this.worksheetType,isDraft);}}
return totalToSave},calculateTotals:function(){if(this.layout.isVisible()){this.totals=this.getCommitTotals();var calcFields=[\'worst_case\',\'best_case\',\'likely_case\'],fields=_.filter(this._fields.visible,function(field){if(_.contains(calcFields,field.name)){this.totals[field.name+\'_access\']=app.acl.hasAccess(\'read\',this.module,app.user.get(\'id\'),field.name);this.totals[field.name+\'_display\']=true;return true;}
return false;},this);for(var x=0;x<this._fields.visible.length;x++){var f=this._fields.visible[x];if(_.contains(calcFields,f.name)){break;}}
this.before_colspan=x;this.after_colspan=(this._fields.visible.length-(x+fields.length));var ctx=this.context.parent||this.context;ctx.trigger(\'forecasts:worksheet:totals\',this.totals,this.worksheetType);}},displayLoadingMessage:function(){app.alert.show(\'workshet_loading\',{level:\'process\',title:app.lang.getAppString(\'LBL_LOADING\')});this.collection.once(\'reset\',function(){app.alert.dismiss(\'workshet_loading\');},this);},refreshData:function(){var ret=this.showNavigationMessage(\'forecast\');if(this.processNavigationMessageReturn(ret)){this.displayLoadingMessage();this.collection.fetch();}},processNavigationMessageReturn:function(message_result){if(_.isObject(message_result)&&message_result.run_action===true){if(message_result.message==\'LBL_WORKSHEET_SAVE_CONFIRM\'){this.context.parent.once(\'forecasts:worksheet:saved\',function(){if(this.layout.isVisible()){this.displayLoadingMessage();this.collection.fetch();}},this);this.saveWorksheet(true);}
return false}
return true;},sync:function(method,model,options){var callbacks,url;options=options||{};options.params=options.params||{};if(!_.isUndefined(this.selectedUser.id)){options.params.user_id=this.selectedUser.id;}
if(!_.isEmpty(this.selectedTimeperiod)){options.params.timeperiod_id=this.selectedTimeperiod;}
options.limit=1000;options=app.data.parseOptionsForSync(method,model,options);if(!_.isUndefined(options.params.order_by)&&options.params.order_by.indexOf(\'parent_name\')===0){options.params.order_by=options.params.order_by.replace(\'parent_\',\'\');}
options.success=_.bind(function(model,data,options){if(!this.disposed){this.collection.reset(data);}},this);callbacks=app.data.getSyncCallbacks(method,model,options);this.collection.trigger("data:sync:start",method,model,options);url=app.api.buildURL("ForecastWorksheets",null,null,options.params);app.api.call("read",url,null,callbacks);},getCommitTotals:function(){var includedAmount=0,includedBest=0,includedWorst=0,overallAmount=0,overallBest=0,overallWorst=0,includedCount=0,lostCount=0,lostAmount=0,lostBest=0,lostWorst=0,wonCount=0,wonAmount=0,wonBest=0,wonWorst=0,includedClosedCount=0,includedClosedAmount=0,cfg=app.metadata.getModule(\'Forecasts\',\'config\');var sales_stage_won_setting=cfg.sales_stage_won||[],sales_stage_lost_setting=cfg.sales_stage_lost||[];var commit_stages_in_included_total=[\'include\'];if(cfg.forecast_ranges==\'show_custom_buckets\'){commit_stages_in_included_total=cfg.commit_stages_included;}
this.collection.each(function(model){var won=_.include(sales_stage_won_setting,model.get(\'sales_stage\')),lost=_.include(sales_stage_lost_setting,model.get(\'sales_stage\')),amount=parseFloat(model.get(\'likely_case\')),commit_stage=model.get(\'commit_stage\'),best=parseFloat(model.get(\'best_case\')),base_rate=parseFloat(model.get(\'base_rate\')),worst=parseFloat(model.get(\'worst_case\')),worst_base=app.currency.convertWithRate(worst,base_rate),amount_base=app.currency.convertWithRate(amount,base_rate),best_base=app.currency.convertWithRate(best,base_rate);if(won&&_.include(commit_stages_in_included_total,commit_stage)){wonAmount=app.math.add(wonAmount,amount_base);wonBest=app.math.add(wonBest,best_base);wonWorst=app.math.add(wonWorst,worst_base);wonCount++;}else if(lost){lostAmount=app.math.add(lostAmount,amount_base);lostBest=app.math.add(lostBest,best_base);lostWorst=app.math.add(lostWorst,worst_base);lostCount++;}
if(_.include(commit_stages_in_included_total,commit_stage)){includedAmount+=amount_base;includedBest+=best_base;includedWorst+=worst_base;includedCount++;if(won){includedClosedCount++;includedClosedAmount=app.math.add(amount_base,includedClosedAmount);}}
overallAmount+=amount_base;overallBest+=best_base;overallWorst+=worst_base;},this);return{\'likely_case\':includedAmount,\'best_case\':includedBest,\'worst_case\':includedWorst,\'overall_amount\':overallAmount,\'overall_best\':overallBest,\'overall_worst\':overallWorst,\'timeperiod_id\':this.dirtyTimeperiod||this.selectedTimeperiod,\'lost_count\':lostCount,\'lost_amount\':lostAmount,\'won_count\':wonCount,\'won_amount\':wonAmount,\'included_opp_count\':includedCount,\'total_opp_count\':this.collection.length,\'closed_count\':includedClosedCount,\'closed_amount\':includedClosedAmount};},addPreviewEvents:function(){this.context.on("list:preview:fire",function(model){var previewCollection=new Backbone.Collection();this.filteredCollection.each(function(model){if(model.get(\'parent_deleted\')!=="1"){previewCollection.add(model);}},this);if(_.isUndefined(this.previewModel)||model.get(\'id\')!=this.previewModel.get(\'id\')){this.previewModel=model;app.events.trigger("preview:render",model,previewCollection,true);}else{this.decorateRow();app.events.trigger(\'preview:close\');}},this);app.events.on("list:preview:decorate",this.decorateRow,this);if(this.layout){this.layout.on("list:sort:fire",function(){app.events.trigger("preview:close");},this);}
app.events.on(\'preview:render\',function(model){this.previewModel=model;this.previewVisible=true;},this);app.events.on(\'preview:close\',function(){this.previewVisible=false;this.previewModel=undefined;},this);},adjustCurrencyColumnWidths:function(){if(this.collection.length==0){return;}
_.each(this._fields.visible,function(field){if(field.type===\'currency\'){var converted=this.$el.find(\'span[data-name^="\'+field.name+\'"] .converted\'),original=this.$el.find(\'span[data-name^="\'+field.name+\'"] label.original\'),widths=converted.map(function(){return $(this).width();}).get(),labelWidths=original.map(function(){return $(this).width();}).get();converted.width(_.max(widths)+5);original.width(_.max(labelWidths));var parentTds=this.$el.find(\'span[data-name^="\'+field.name+\'"]\'),parentWidth=_.max(parentTds.map(function(){return $(this).outerWidth();}).get()),finalTDWidth=parentWidth+20;this.$el.find(\'th[data-fieldname^="\'+field.name+\'"]\').width(finalTDWidth).css(\'maxWidth\',finalTDWidth+\'px\').css(\'minWidth\',finalTDWidth+\'px\');}},this);}})',
    ),
  ),
  'filter' => 
  array (
    'templates' => 
    array (
      'filter' => '{{!
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
<form class="form-search-related" action="">
    <div class="control-group">
        <div class="filter controls controls=two btn-group-fit">
            <div class="filter-view search">
                <input id="{{cid}}" class="select2 search-filter" type="hidden">
            </div>
        </div>
    </div>
</form>
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
({events:{\'keydown .select2-input\':\'disableSelect2KeyPress\'},disableSelect2KeyPress:function(event){event.preventDefault();},initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.selectedUser={id:app.user.get(\'id\'),isManager:app.user.get(\'isManager\'),showOpps:false};},bindDomChange:function(){},_render:function(){app.view.View.prototype._render.call(this);this.node=this.$el.find("#"+this.cid);this._setUpFilters();return this;},_setUpFilters:function(){var ctx=this.context.parent||this.context,selectedRanges=ctx.has("selectedRanges")?ctx.get("selectedRanges"):app.defaultSelections.ranges;this.node.select2({data:this._getRangeFilters(),initSelection:function(element,callback){callback(_.filter(this.data,function(obj){return _.contains(this,obj.id);},$(element.val().split(","))));},multiple:true,placeholder:app.lang.get("LBL_MODULE_FILTER"),dropdownCss:{width:"auto"},containerCssClass:"select2-choices-pills-close",containerCss:"border: none",formatSelection:this.formatCustomSelection,dropdownCssClass:"search-filter-dropdown",escapeMarkup:function(m){return m;},width:\'100%\'});this.node.select2("val",selectedRanges);this.node.change({context:ctx},function(event){app.alert.show(\'worksheet_filtering\',{level:\'process\',title:app.lang.getAppString(\'LBL_LOADING\')});_.delay(function(){event.data.context.set("selectedRanges",event.val);},25);});},formatCustomSelection:function(item){return\'<span class="select2-choice-type">\'+app.lang.get("LBL_FILTER")+\'</span><a class="select2-choice-filter" rel="\'+item.id+\'" href="javascript:void(0)">\'+item.text+\'</a>\';},_getRangeFilters:function(){var options=app.metadata.getModule(\'Forecasts\',\'config\').buckets_dom||\'commit_stage_binary_dom\';return _.map(app.lang.getAppListStrings(options),function(value,key){return{id:key,text:value};});}})',
    ),
  ),
  'flex-list' => 
  array (
    'templates' => 
    array (
      'flex-list' => '{{!
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
}}
{{#each meta.panels}}
<div class="flex-list-view-content">
<table class="table table-striped dataTable">
    <thead>
    <tr>
        {{#each ../leftColumns}}
        <th data-fieldname="{{name}}">
            <span>
                {{field ../../this template="list-header"}}
            </span>
        </th>
        {{/each}}
        {{#each ../_fields.visible}}
            <th {{#if this.width}}width="{{this.width}}" {{/if}}class="{{#isSortable ../../module this}}sorting{{#eq ../../../orderBy.field name}}_{{../../../../orderBy.direction}}{{/eq}} orderBy{{name}}{{/isSortable}}"
                data-fieldname="{{name}}" data-orderby="{{orderBy}}">
                <span>
                    {{str label ../../module}}
                </span>
            </th>
        {{/each}}
        {{#each ../rightColumns}}
            {{#if isColumnDropdown}}
            <th class="nosort morecol">
                <div class="dropdown">
                    <button class="btn btn-link btn-invisible" data-toggle="dropdown" data-action="fields-toggle">. . .</button>
                    <ul class="dropdown-menu left carettop">
                    {{#each ../../../_fields.options}}
                        <li>
                            <button class="btn btn-link btn-invisible{{#if selected}} active{{/if}}" data-field-toggle="{{name}}">
                                {{#if selected}}<i class="icon icon-ok"></i> {{/if}}{{str label ../../../../module}}
                            </button>
                        </li>
                    {{/each}}
                    </ul>
                </div>
            </th>
            {{else}}
            <th data-fieldname="{{name}}">
                <span>
                    {{field ../../this template="list-header"}}
                </span>
            </th>
            {{/if}}
        {{/each}}
    </tr>
    <tr class="alert alert-warning hide">
        <td class="container"{{#if ../this.colSpan}} colspan="{{../../this.colSpan}}"{{/if}}></td>
    </tr>
    </thead>
    <tbody>
    {{#each ../filteredCollection.models}}
    <tr name="{{module}}_{{attributes.id}}" class="single" data-forecast="{{attributes.commit_stage}}">
        {{#each ../../leftColumns}}
        <td>
             {{field ../../../this model=../this template=../../../this.viewName}}
        </td>
        {{/each}}
        {{#each ../../_fields.visible}}
            <td class="{{#if this.align}} {{this.align}}{{/if}}{{#if click_to_edit}} editableColumn{{/if}}" data-field-name="{{name}}">
              {{field ../../../this model=../this template=../../../this.viewName}}
            </td>
        {{/each}}
        {{#each ../../rightColumns}}
        <td>
             {{field ../../../this model=../this template=../../../this.viewName}}
        </td>
        {{/each}}
    </tr>
    {{/each}}
    </tbody>
</table>
</div>
{{/each}}
',
    ),
  ),
  'subpanel-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
          ),
        ),
      ),
      'orderBy' => 
      array (
        'field' => 'date_modified',
        'direction' => 'desc',
      ),
    ),
  ),
  'record' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_RECORD_HEADER',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'width' => 42,
              'height' => 42,
              'dismiss_label' => true,
              'readonly' => true,
            ),
            1 => 'name',
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
              'readonly' => true,
              'dismiss_label' => true,
            ),
            3 => 
            array (
              'name' => 'follow',
              'label' => 'LBL_FOLLOW',
              'type' => 'follow',
              'readonly' => true,
              'dismiss_label' => true,
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'assigned_user_name',
            1 => 'team_name',
          ),
        ),
      ),
    ),
  ),
  'massupdate' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'Update',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
        1 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-invisible cancel_button',
          'icon' => 'icon-remove',
          'primary' => false,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => '6b1ceb2349dc2438a8398515941012fd',
);

