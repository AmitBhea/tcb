<?php
$clientCache['Forecasts']['base']['field'] = array (
  'assignquota' => 
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
({extendsFrom:\'RowactionField\',disableButton:true,initialize:function(options){app.view.invokeParent(this,{type:\'field\',name:\'rowaction\',method:\'initialize\',args:[options]});this.type=\'rowaction\';},bindDataChange:function(){this.context.on(\'forecasts:worksheet:quota_changed\',function(){this.disableButton=false;if(!this.disposed){this.render();}},this);this.context.on(\'forecasts:worksheet:committed\',function(){this.disableButton=true;if(!this.disposed){this.render();}},this);this.context.on(\'forecasts:assign_quota\',this.assignQuota,this);},_render:function(){app.view.invokeParent(this,{type:\'field\',name:\'rowaction\',method:\'_render\'});this.setDisabled(this.disableButton);},hasAccess:function(){var su=(this.context.get(\'selectedUser\'))||app.user.toJSON(),isManager=su.isManager||false,showOpps=su.showOpps||false;return(su.id===app.user.get(\'id\')&&isManager&&showOpps===false);},assignQuota:function(worksheetType,selectedUser,selectedTimeperiod){app.api.call(\'create\',app.api.buildURL(\'ForecastManagerWorksheets/assignQuota\'),{\'user_id\':selectedUser.id,\'timeperiod_id\':selectedTimeperiod},{success:_.bind(function(o){app.alert.dismiss(\'saving_quota\');app.alert.show(\'success\',{level:\'success\',autoClose:true,title:app.lang.get("LBL_FORECASTS_WIZARD_SUCCESS_TITLE","Forecasts")+":",messages:[app.lang.get(\'LBL_QUOTA_ASSIGNED\',\'Forecasts\')]});this.disableButton=true;this.context.trigger(\'forecasts:quota_assigned\');if(!this.disposed){this.render();}},this)});}})',
    ),
  ),
  'lastcommit' => 
  array (
    'templates' => 
    array (
      'detail' => '{{!
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
<div class=\'row-fluid last-commit\'>
    <div class="span8 datapoints">
        <div class="pull-right">
            {{#each this.data_points}}
                <div class="datapoint pull-left">
                    {{#if this.value}}
                        {{formatCurrency this.value}}
                    {{else}}
                        {{{this.error}}}
                    {{/if}}
                </div>
            {{/each}}
        </div>
    </div>
    <div class="hr hide"></div>
    <div class="span4 commit-date">
        {{#if this.commit_date}}{{timeago commit_date "LBL_COMMITTED_TIME_RELATIVE"}}&nbsp;<i id="show_hide_history_log"
                                                                                              class="icon-caret-down icon-sm"></i>{{/if}}
    </div>
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
({commit_date:undefined,data_points:[],points:[],events:{\'click\':\'triggerHistoryLog\'},initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.points=[];this.data_points=[];_.each(options.def.datapoints,function(point){if(app.utils.getColumnVisFromKeyMap(point,\'forecastsWorksheet\')){this.points.push(point);}},this);this.on(\'render\',function(){if(!_.isUndefined(this.commit_date)){this.$el.find("span.relativetime").timeago({logger:SUGAR.App.logger,date:SUGAR.App.date,lang:SUGAR.App.lang,template:SUGAR.App.template});}},this);},triggerHistoryLog:function(){this.$el.find(\'i\').toggleClass(\'icon-caret-down icon-caret-up\');this.context.trigger(\'forecast:commit_log:trigger\');},bindDataChange:function(){this.collection.on(\'reset\',function(){this.data_points=[];var model=_.first(this.collection.models)
if(!_.isUndefined(model)){this.commit_date=model.get(\'date_modified\');this.data_points=this.processDataPoints(model);}else{this.commit_date=undefined;}
if(!this.disposed)this.render();},this);},processDataPoints:function(model){var points=[],noAccessTemplate=app.template.getField(\'base\',\'noaccess\')(this);_.each(this.points,function(point){var point_data={};if(app.acl.hasAccess(\'read\',\'ForecastWorksheets\',app.user.get(\'id\'),point)){point_data.value=model.get(point)}else{point_data.error=noAccessTemplate;}
points.push(point_data);},this);return points;}})',
    ),
  ),
  'quotapoint' => 
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
({quotaAmount:undefined,selectedUser:undefined,selectedTimePeriod:undefined,userCurrencyID:undefined,resizeDetectTimer:undefined,initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.quotaAmount=0.00;this.selectedUser=this.context.get(\'selectedUser\');this.selectedTimePeriod=this.context.get(\'selectedTimePeriod\');this.userCurrencyID=app.user.getPreference(\'currency_id\');$(window).on(\'resize.datapoints\',_.bind(this.resize,this));this.on(\'render\',function(){this.resize();return true;},this);},bindDataChange:function(){this.context.on(\'change:selectedUser\',function(ctx,user){this.selectedUser=user;this.loadData({});},this);this.context.on(\'change:selectedTimePeriod\',function(ctx,timePeriod){this.selectedTimePeriod=timePeriod;this.loadData({});},this);this.loadData();},toggleTotalsListeners:function(isTopLevelManager){if(isTopLevelManager){this.hasListenerAdded=true;this.context.on(\'forecasts:worksheet:totals\',function(totals){var quota=0.00;if(_.has(totals,\'quota\')){quota=app.currency.formatAmountLocale(totals.quota,this.userCurrencyID);}else{quota=this.quotaAmount;}
this.quotaAmount=quota;if(!this.disposed){this.render();}},this);if(!this.selectedUser.showOpps){var collection=app.utils.getSubpanelCollection(this.context,\'ForecastManagerWorksheets\'),quota=0.00;_.each(collection.models,function(model){quota=app.math.add(quota,model.get(\'quota\'));},this);this.quotaAmount=app.currency.formatAmountLocale(quota,this.userCurrencyID);this.render();}}else if(this.hasListenerAdded){this.hasListenerAdded=false;this.context.off(\'forecasts:worksheet:totals\',null,this);}},getQuotasURL:function(){var method=(this.selectedUser.isManager&&this.selectedUser.showOpps)?\'direct\':\'rollup\',url=\'Forecasts/\'+this.selectedTimePeriod+\'/quotas/\'+method+\'/\'+this.selectedUser.id;return app.api.buildURL(url,\'read\');},loadData:function(options){var url=this.getQuotasURL(),cb={context:this,success:this.handleQuotaData,complete:options?options.complete:null};app.api.call(\'read\',url,null,null,cb);},handleQuotaData:function(quotaData){this.quotaAmount=quotaData.formatted_amount;this.toggleTotalsListeners(quotaData.isTopLevelManager);if(!this.disposed){this.render();}},adjustDatapointLayout:function(){if(this.view.$el){var thisView$El=this.view.$el,parentMarginLeft=thisView$El.find(".topline .datapoints").css("margin-left"),parentMarginRight=thisView$El.find(".topline .datapoints").css("margin-right"),timePeriodWidth=thisView$El.find(".topline .span4").outerWidth(true),toplineWidth=thisView$El.find(".topline ").width(),collection=thisView$El.find(".topline div.pull-right").children("span"),collectionWidth=parseInt(parentMarginLeft)+parseInt(parentMarginRight);collection.each(function(index){collectionWidth+=$(this).children("div.datapoint").outerWidth(true);});if((collectionWidth+timePeriodWidth)>toplineWidth){thisView$El.find(".topline div.hr").show();thisView$El.find(".info .last-commit").find("div.hr").show();thisView$El.find(".topline .datapoints").removeClass("span8").addClass("span12");thisView$El.find(".info .last-commit .datapoints").removeClass("span8").addClass("span12");thisView$El.find(".info .last-commit .commit-date").removeClass("span4").addClass("span12");}else{thisView$El.find(".topline div.hr").hide();thisView$El.find(".info .last-commit").find("div.hr").hide();thisView$El.find(".topline .datapoints").removeClass("span12").addClass("span8");thisView$El.find(".info .last-commit .datapoints").removeClass("span12").addClass("span8");thisView$El.find(".info .last-commit .commit-date").removeClass("span12").addClass("span4");var lastCommitHeight=thisView$El.find(".info .last-commit .commit-date").height();thisView$El.find(".info .last-commit .datapoints div.datapoint").height(lastCommitHeight);}
var index=this.$el.index()+1,width=this.$el.find("div.datapoint").outerWidth(),datapointLength=thisView$El.find(".info .last-commit .datapoints div.datapoint").length,sel=thisView$El.find(\'.last-commit .datapoints div.datapoint:nth-child(\'+index+\')\');if(datapointLength>2&&index<=2||datapointLength==2&&index==1){$(sel).width(width-18);}else{$(sel).width(width);}}},resize:function(){if(this.resizeDetectTimer){clearTimeout(this.resizeDetectTimer);}
this.resizeDetectTimer=setTimeout(_.bind(function(){this.adjustDatapointLayout();},this),250);}})',
    ),
    'templates' => 
    array (
      'detail' => '{{!
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
<div class="datapoint pull-left">
    {{label}}
    <br>
    <h2 id="{{name}}">{{quotaAmount}}</h2>
</div>
',
    ),
  ),
  'commitlog' => 
  array (
    'templates' => 
    array (
      'detail' => '{{!
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
{{#if commitLog.length}}
    <div class="row-fluid">
        <div class="span12">
            <div class="extend results" id="history_log_results">
                {{#each commitLog}}
                    <article>
                        {{this.text}}
                        <br>
                        <date>{{this.text2}}</date>
                    </article>
                {{/each}}
            </div>
        </div>
    </div>
{{/if}}
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
({commitLog:[],previousDateEntered:\'\',initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.on(\'show\',function(){if(!this.disposed){this.render();}},this);},bindDataChange:function(){this.collection.on(\'reset\',function(){this.hide();this.buildCommitLog();},this);this.context.on(\'forecast:commit_log:trigger\',function(){if(!this.isVisible()){this.show();}else{this.hide();}},this);},buildCommitLog:function(){this.commitLog=[];if(_.isEmpty(this.collection.models)){return;}
var previousModel=_.first(this.collection.models);var dateEntered=new Date(Date.parse(previousModel.get(\'date_modified\')));if(dateEntered==\'Invalid Date\'){dateEntered=previousModel.get(\'date_modified\');}
this.previousDateEntered=app.date.format(dateEntered,app.user.getPreference(\'datepref\')+\' \'+app.user.getPreference(\'timepref\'));var loopPreviousModel=\'\';var models=_.clone(this.collection.models).reverse();_.each(models,function(model){this.commitLog.push(app.utils.createHistoryLog(loopPreviousModel,model));loopPreviousModel=model;},this);this.commitLog.reverse();}})',
    ),
  ),
  'range' => 
  array (
    'templates' => 
    array (
      'forecastsCustomRange' => '{{!
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
{{#eq customType \'custom_default\'}}
    <div id="{{name}}" class="clearfix">
        <div class="control-group pull-left checkbox">
            <input type="checkbox" {{#if isExclude}}
                disabled="disabled"
            {{else}}
               value="1" {{#if in_included_total}}checked="true"{{/if}} name="in_included_total_{{def.name}}" data-key="{{def.name}}" data-category="{{category}}"
            {{/if}}>
            <input type="text" placeholder="{{str "LBL_FORECASTS_CONFIG_RANGES_ENTER_RANGE" module}}" class="span12" value="{{label}}" data-key="{{def.name}}" data-category="{{category}}">
        </div>
        <div class="noUiSliderEnds pull-right">
            <div class="rangeSlider noUiSlider"></div>
        </div>
    </div>
{{/eq}}

{{#notEq customType \'custom_default\'}}
    <div id="{{name}}" class="clearfix">
        <div class="checkbox pull-left">
            <input type="checkbox"
                {{#eq customType \'custom_without_probability\'}}
                disabled="disabled"
               {{/eq}}
                {{#eq customType \'custom\'}}
                    value="1" {{#if in_included_total}}checked="true"{{/if}} name="in_included_total_{{def.name}}" data-key="{{def.name}}" data-category="{{category}}"
                {{/eq}}
            >
            <input type="text" placeholder="{{str "LBL_FORECASTS_CONFIG_RANGES_ENTER_RANGE" module}}" class="span12" value="{{label}}" data-key="{{def.name}}" data-category="{{category}}">
        </div>
        <div class="btn-group">
            <a class="btn removeCustomRange" href="javascript:void(0)" data-key="{{def.name}}" data-category="{{category}}">
                <i class="icon-minus"></i>
            </a>
        </div>
        <div class="btn-group">
            <a class="btn addCustomRange" href="javascript:void(0)" data-type="{{customType}}" data-category="{{category}}">
                <i class="icon-plus"></i>
            </a>
        </div>
        {{#eq customType \'custom\'}}
        <div class="noUiSliderEnds pull-right">
            <div class="rangeSlider noUiSlider"></div>
        </div>
        {{/eq}}
    </div>
{{/notEq}}
',
    ),
  ),
  'reportingUsers' => 
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
({jsTree:{},reporteesEndpoint:\'\',currentTreeUrl:\'\',currentRootId:\'\',selectedUser:{},initHasSelected:false,initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.reporteesEndpoint=app.api.buildURL("Forecasts/reportees")+\'/\';this.selectedUser=this.context.get(\'selectedUser\')||app.user.toJSON();this.currentTreeUrl=this.reporteesEndpoint+this.selectedUser.id;this.currentRootId=this.selectedUser.id;},_dispose:function(){if(app.user.get(\'isManager\')&&!_.isEmpty(this.jsTree)){this.jsTree.off();}
app.view.Field.prototype._dispose.call(this);},render:function(){if(app.user.get(\'isManager\')){app.view.Field.prototype.render.call(this);}},unbindData:function(){app.view.Field.prototype.unbindData.call(this);},checkRender:function(context,selectedUser){this.selectedUser=selectedUser;if(selectedUser.showOpps){var nodeId=(selectedUser.isManager?\'jstree_node_myopps_\':\'jstree_node_\')+selectedUser.user_name;this.selectJSTreeNode(nodeId)}else if(this.currentRootId!=selectedUser.id){if(selectedUser.isManager){this.currentRootId=selectedUser.id;this.currentTreeUrl=this.reporteesEndpoint+selectedUser.id;this.rendered=false;if(!this.disposed){this.render();}}else{var nodeId=\'jstree_node_\'+selectedUser.user_name;if(this.jsTree.jstree(\'get_selected\').attr(\'id\')!=nodeId){this.selectJSTreeNode(nodeId)}}}},selectJSTreeNode:function(nodeId){this.jsTree.jstree(\'deselect_all\');this.jsTree.jstree(\'select_node\',\'#\'+nodeId);},_recursiveReplaceHTMLChars:function(data,ctx){_.each(data,function(entry,index){if(entry.data){data[index].data=(function(value){return value.replace(/&amp;/gi,\'&\').replace(/&lt;/gi,\'<\').replace(/&gt;/gi,\'>\').replace(/&#039;/gi,\'\\\'\').replace(/&quot;/gi,\'"\');})(entry.data);if(entry.children){_.each(entry.children,function(childEntry,index2){entry.children[index2]=ctx._recursiveReplaceHTMLChars([childEntry]);if(childEntry.attr.rel=="my_opportunities"){childEntry.data=app.utils.formatString(app.lang.get(\'LBL_MY_OPPS_RLI\',\'Forecasts\'),[childEntry.data]);}},this);}}},this);return data;},_render:function(ctx,options){app.view.Field.prototype._render.call(this,ctx,options);var options={};options.success=_.bind(function(data){this.createTree(data);},this);app.api.call(\'read\',this.currentTreeUrl,null,options);},createTree:function(data){if(!_.isArray(data)){data=[data];}
var treeData=this._recursiveReplaceHTMLChars(data,this),selectedUser=this.context.get(\'selectedUser\'),nodeId=(selectedUser.isManager&&selectedUser.showOpps?\'jstree_node_myopps_\':\'jstree_node_\')+selectedUser.user_name;treeData.ctx=this.context;this.jsTree=$(".jstree-sugar").jstree({"plugins":["json_data","ui","crrm","types","themes"],"json_data":{"data":treeData},"ui":{"initially_select":[nodeId]},"types":{"types":{"types":{"parent_link":{},"manager":{},"my_opportunities":{},"rep":{},"root":{}}}}}).on("reselect.jstree",_.bind(function(){this.initHasSelected=true;},this)).on("select_node.jstree",_.bind(function(event,data){if(this.initHasSelected){var jsData=data.inst.get_json(),nodeType=jsData[0].attr.rel,userData=jsData[0].metadata,showOpps=false;if(nodeType=="my_opportunities"||nodeType=="rep"){showOpps=true}
var selectedUser={\'id\':userData.id,\'user_name\':userData.user_name,\'full_name\':userData.full_name,\'first_name\':userData.first_name,\'last_name\':userData.last_name,\'isManager\':(nodeType!=\'rep\'),\'showOpps\':showOpps,\'reportees\':[]};app.utils.getSelectedUsersReportees(selectedUser,treeData.ctx);}},this));if(treeData){var rootId=-1;if(treeData.length==1){rootId=treeData[0].metadata.id;}else if(treeData.length==2){rootId=treeData[1].metadata.id;}
this.currentRootId=rootId;}
this.$el.find(\'#people\').addClass("jstree-sugar");}})',
    ),
    'templates' => 
    array (
      'detail' => '{{!
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
<div class="btn-toolbar pull-left" id="forecastsTree">
    <div class="btn-group">
        <a class="dropdown-toggle btn btn-invisible" data-toggle="dropdown" href="#">
            <i class="icon-caret-down"></i>
        </a>
        <ul class="dropdown-menu carettop">
            <li>
                <div id="people" class="jstree-sugar" id="forecasts-jstree"></div>
            </li>
        </ul>
    </div>
</div>
',
    ),
  ),
  'button' => 
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
({extendsFrom:\'ButtonField\',hasAccess:function(){if(this.def.acl_action==\'current_user\'){var su=(this.context.get(\'selectedUser\'))||app.user.toJSON();return(su.id===app.user.get(\'id\'))}else{return app.view.invokeParent(this,{type:\'field\',name:\'button\',method:\'hasAccess\'});}}})',
    ),
  ),
  'datapoint' => 
  array (
    'templates' => 
    array (
      'detail' => '{{!
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
<div class="datapoint pull-left">
    {{this.label}}<br>
    {{#if this.hasDataAccess}}
        <h2 id="{{this.name}}">{{formatCurrency this.total}}{{#if this.arrow}}<span class="icon-sm committed_arrow{{this.arrow}}"></span>{{/if}}</h2>
    {{else}}
        {{{this.noDataAccessTemplate}}}
    {{/if}}
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
({previous_type:\'\',arrow:\'\',initial_total:\'\',total:0,last_commit:undefined,hasAccess:true,hasDataAccess:true,noDataAccessTemplate:undefined,total_field:\'\',initialize:function(options){app.view.Field.prototype.initialize.call(this,options);this.total_field=this.total_field||this.name;this.hasAccess=app.utils.getColumnVisFromKeyMap(this.name,\'forecastsWorksheet\');this.hasDataAccess=app.acl.hasAccess(\'read\',\'ForecastWorksheets\',app.user.get(\'id\'),this.name);if(this.hasDataAccess===false){this.noDataAccessTemplate=app.template.getField(\'base\',\'noaccess\')(this);}
this.before(\'render\',function(){if(!this.hasAccess){return false;}
this.arrow=app.utils.getArrowIconColorClass(this.total,this.initial_total);return true;},this);$(window).on(\'resize.datapoints\',_.bind(this.resize,this));this.on(\'render\',function(){if(!this.hasAccess){return false;}
this.resize();return true;},this);},_dispose:function(){$(window).off(\'resize.datapoints\');app.view.Field.prototype._dispose.call(this);},getPlaceholder:function(){if(this.hasAccess){return app.view.Field.prototype.getPlaceholder.call(this);}
return\'\';},adjustDatapointLayout:function(){if(this.hasAccess){var parentMarginLeft=this.view.$el.find(".topline .datapoints").css("margin-left");var parentMarginRight=this.view.$el.find(".topline .datapoints").css("margin-right");var timePeriodWidth=this.view.$el.find(".topline .span4").outerWidth(true);var toplineWidth=this.view.$el.find(".topline ").width();var collection=this.view.$el.find(".topline div.pull-right").children("span");var collectionWidth=parseInt(parentMarginLeft)+parseInt(parentMarginRight);collection.each(function(index){collectionWidth+=$(this).children("div.datapoint").outerWidth(true);});if((collectionWidth+timePeriodWidth)>toplineWidth){this.view.$el.find(".topline div.hr").show();this.view.$el.find(".info .last-commit").find("div.hr").show();this.view.$el.find(".topline .datapoints").removeClass("span8").addClass("span12");this.view.$el.find(".info .last-commit .datapoints").removeClass("span8").addClass("span12");this.view.$el.find(".info .last-commit .commit-date").removeClass("span4").addClass("span12");}else{this.view.$el.find(".topline div.hr").hide();this.view.$el.find(".info .last-commit").find("div.hr").hide();this.view.$el.find(".topline .datapoints").removeClass("span12").addClass("span8");this.view.$el.find(".info .last-commit .datapoints").removeClass("span12").addClass("span8");this.view.$el.find(".info .last-commit .commit-date").removeClass("span12").addClass("span4");var lastCommitHeight=this.view.$el.find(".info .last-commit .commit-date").height();this.view.$el.find(".info .last-commit .datapoints div.datapoint").height(lastCommitHeight);}
var index=this.$el.index();var width=this.$el.find("div.datapoint").outerWidth();var datapointLength=this.view.$el.find(".info .last-commit .datapoints div.datapoint").length;var sel=this.view.$el.find(\'.last-commit .datapoints div.datapoint:nth-child(\'+index+\')\');if(datapointLength>2&&index<=2||datapointLength==2&&index==1){$(sel).width(width-8);}else{$(sel).width(width);}}},resize:function(){var self=this;if(self.resizeDetectTimer){clearTimeout(this.resizeDetectTimer);}
self.resizeDetectTimer=setTimeout(function(){self.adjustDatapointLayout();},250);},bindDataChange:function(){if(!this.hasAccess){return;}
this.context.on(\'change:selectedUser change:selectedTimePeriod\',function(){this.last_commit=undefined;this.initial_total=0;this.total=0;this.arrow=\'\';},this);this.collection.on(\'reset\',function(){var model=_.first(this.collection.models)
if(!_.isUndefined(model)){this.last_commit=app.math.round(model.get(this.total_field),2);this.initial_total=app.math.round(model.get(this.total_field),2);}else{this.last_commit=undefined;this.initial_total=0;this.total=0;this.arrow=\'\';}
if(!this.disposed)this.render();},this);this.context.on(\'forecasts:worksheet:totals\',function(totals,type){var field=this.total_field;if(type=="manager"){field=field.split(\'_\')[0]+\'_adjusted\'}
this.total=totals[field];this.previous_type=type;if(!this.disposed)this.render();},this);}})',
    ),
  ),
  '_hash' => '70756a9dbd38ee759e0ff8a0b3ff98d8',
);

