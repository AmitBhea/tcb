<?php
$clientCache['Forecasts']['base']['view'] = array (
  'info' => 
  array (
    'meta' => 
    array (
      'type' => 'info',
      'timeperiod' => 
      array (
        0 => 
        array (
          'name' => 'selectedTimePeriod',
          'label' => 'LBL_TIMEPERIOD_NAME',
          'type' => 'enum',
          'css_class' => 'forecastsTimeperiod',
          'dropdown_class' => 'topline-timeperiod-dropdown',
          'dropdown_width' => 'auto',
          'view' => 'edit',
          'default' => true,
          'enabled' => true,
        ),
      ),
      'last_commit' => 
      array (
        0 => 
        array (
          'name' => 'lastCommitDate',
          'type' => 'lastcommit',
          'datapoints' => 
          array (
            0 => 'worst_case',
            1 => 'likely_case',
            2 => 'best_case',
          ),
        ),
      ),
      'commitlog' => 
      array (
        0 => 
        array (
          'name' => 'commitLog',
          'type' => 'commitlog',
        ),
      ),
      'datapoints' => 
      array (
        0 => 
        array (
          'name' => 'quota',
          'label' => 'LBL_QUOTA',
          'type' => 'quotapoint',
        ),
        1 => 
        array (
          'name' => 'worst_case',
          'label' => 'LBL_WORST',
          'type' => 'datapoint',
        ),
        2 => 
        array (
          'name' => 'likely_case',
          'label' => 'LBL_LIKELY',
          'type' => 'datapoint',
        ),
        3 => 
        array (
          'name' => 'best_case',
          'label' => 'LBL_BEST',
          'type' => 'datapoint',
        ),
      ),
    ),
    'templates' => 
    array (
      'info' => '{{!
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
<div class="row-fluid topline">
    <div class="span4">
        {{#if this.meta.timeperiod}}
            {{#each this.meta.timeperiod}}
                <strong>{{str "LBL_IN_FORECAST" "Forecasts"}}</strong>
                <label for="date_filter" class="control-label">{{str this.label "Forecasts"}}</label>
                <div class="controls">
                    {{field ../this model=../this.model}}
                </div>
            {{/each}}
        {{/if}}
    </div>
    <div class="hr hide"></div>
    <div class="span8 datapoints">
        <div class="pull-right">
            {{#each this.meta.datapoints}}
                {{field ../this model=../this.model}}
            {{/each}}
        </div>
    </div>
</div>
{{#if this.meta.last_commit}}
    {{#each this.meta.last_commit}}
        {{field ../this model=../this.model}}
    {{/each}}
{{/if}}
{{#if this.meta.commitlog}}
    {{#each this.meta.commitlog}}
        {{field ../this model=../this.model}}
    {{/each}}
{{/if}}
',
    ),
  ),
  'tutorial' => 
  array (
    'meta' => 
    array (
      'records' => 
      array (
        'intro' => 'LBL_TOUR_FORECAST_INTRO',
        'version' => 1,
        'content' => 
        array (
          0 => 
          array (
            'name' => '.topline [for="date_filter"]',
            'text' => 'LBL_TOUR_FORECASTS_TIMEPERIODS',
            'full' => true,
            'horizAdj' => -15,
            'vertAdj' => -15,
          ),
          1 => 
          array (
            'name' => '.topline .last-commit',
            'text' => 'LBL_TOUR_FORECASTS_COMMITS',
            'full' => true,
            'horizAdj' => -20,
            'vertAdj' => -20,
          ),
          2 => 
          array (
            'name' => '.editableColumn',
            'text' => 'LBL_TOUR_FORECASTS_INLINEEDIT',
            'full' => true,
          ),
          3 => 
          array (
            'name' => '.dashlets .forecast-details',
            'text' => 'LBL_TOUR_FORECASTS_PROGRESS',
            'full' => true,
            'horizAdj' => -1,
            'vertAdj' => -5,
          ),
          4 => 
          array (
            'name' => '.dashlets .forecasts-chart-wrapper',
            'text' => 'LBL_TOUR_FORECASTS_CHART',
            'full' => true,
            'horizAdj' => -1,
            'vertAdj' => -5,
          ),
        ),
      ),
    ),
  ),
  'forecastsHowto' => 
  array (
    'meta' => 
    array (
    ),
    'templates' => 
    array (
      'forecastsHowto' => '{{!
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

<div class="howto">
    <h3 id="howtoTitle">{{title}}</h3>
    <p id="howtoText">{{{text}}}</p>
</div>
',
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({howtoData:{},bindDataChange:function(){this.context.on(\'change:howtoData\',function(ctx,howtoData){this.howtoData=howtoData;this._render();},this);},_render:function(){this.$el.html(this.template(this.howtoData))}})',
    ),
  ),
  'preview' => 
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
({extendsFrom:\'PreviewView\',originalModel:undefined,closePreview:function(){this.originalModel=undefined;app.view.invokeParent(this,{type:\'view\',name:\'preview\',method:\'closePreview\'});},_renderPreview:function(model,collection,fetch,previewId,dontClose){var self=this;dontClose=dontClose||false;if(app.drawer&&!app.drawer.isActive(this.$el)){return;}
if(!dontClose&&this.originalModel&&model&&(this.originalModel.get("id")==model.get("id")&&previewId==this.previewId)){app.events.trigger("list:preview:decorate",false);app.events.trigger(\'preview:close\');return;}
if(model){this.meta=app.metadata.getView(model.get(\'parent_type\')||model.get(\'_module\'),\'record\')||{};this.meta=this._previewifyMetadata(this.meta);}
if(fetch){var mdl=app.data.createBean(model.get(\'parent_type\'),{\'id\':model.get(\'parent_id\')});this.originalModel=model;mdl.fetch({showAlerts:true,success:function(model){self.renderPreview(model,collection);}});}else{this.renderPreview(model,collection);}
this.previewId=previewId;},showPreviousNextBtnGroup:function(){if(!this.model||!this.layout||!this.collection){return;}
var collection=this.collection;if(!collection.size()){this.layout.hideNextPrevious=true;}
var model=this.originalModel||this.model;var recordIndex=collection.indexOf(collection.get(model.id));this.layout.previous=collection.models[recordIndex-1]?collection.models[recordIndex-1]:undefined;this.layout.next=collection.models[recordIndex+1]?collection.models[recordIndex+1]:undefined;this.layout.hideNextPrevious=_.isUndefined(this.layout.previous)&&_.isUndefined(this.layout.next);this.layout.trigger("preview:pagination:update");},renderPreview:function(model,newCollection){if(newCollection){this.collection.reset(newCollection.models);}
if(model){this.model=app.data.createBean(model.module,model.toJSON());this.render();if(this.previewModule&&this.previewModule==="Activities"){this.layout.hideNextPrevious=true;this.layout.trigger("preview:pagination:update");}
app.events.trigger("preview:open",this);app.events.trigger("list:preview:decorate",this.originalModel,this);if(!this.$el.is(":visible")){this.context.trigger("openSidebar",this);}}},switchPreview:function(data,index,id,module){var self=this,currModule=module||this.model.module,currID=id||this.model.get("postId")||this.model.get("id"),currIndex=index||_.indexOf(this.collection.models,this.collection.get(this.originalModel.get(\'id\')));if(this.switching||this.collection.models.length<2){return;}
this.switching=true;if(data.direction==="left"&&(currID===_.first(this.collection.models).get("parent_id"))||data.direction==="right"&&(currID===_.last(this.collection.models).get("parent_id"))){this.switching=false;return;}
else{data.direction==="left"?currIndex-=1:currIndex+=1;if(_.isUndefined(this.collection.models[currIndex].get("target_id"))&&this.collection.models[currIndex].get("activity_data")){currID=this.collection.models[currIndex].id;this.switching=false;this.switchPreview(data,currIndex,currID,currModule);}else{var targetModule=this.collection.models[currIndex].get("target_module")||currModule;this.model=app.data.createBean(targetModule);if(_.isUndefined(this.collection.models[currIndex].get("target_id"))){this.model.set("id",this.collection.models[currIndex].get("parent_id"));}else{this.model.set("postId",this.collection.models[currIndex].get("id"));this.model.set("id",this.collection.models[currIndex].get("target_id"));}
this.originalModel=this.collection.models[currIndex];this.model.fetch({showAlerts:true,success:function(model){model.set("_module",targetModule);self.model=null;app.events.trigger("preview:render",model,null,false);self.switching=false;}});}}}})',
    ),
  ),
  'forecastsConfigVariables' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_FORECASTS_CONFIG_BREADCRUMB_VARIABLES',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'sales_stage_lost',
              'label' => 'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_LOST_STAGE',
              'type' => 'enum',
              'multi' => true,
              'options' => 'sales_stage_dom',
              'default' => false,
              'enabled' => true,
              'view' => 'forecastsFilter',
            ),
            1 => 
            array (
              'name' => 'sales_stage_won',
              'label' => 'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_WON_STAGE',
              'type' => 'enum',
              'multi' => true,
              'options' => 'sales_stage_dom',
              'default' => false,
              'enabled' => true,
              'view' => 'forecastsFilter',
            ),
          ),
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({events:{\'click .resetLink\':\'onResetLinkClicked\'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);},onResetLinkClicked:function(evt){evt.preventDefault();evt.stopImmediatePropagation();},_renderField:function(field){if(field.def.multi){field=this._setUpMultiselectField(field);}
app.view.View.prototype._renderField.call(this,field);field.$el.find(\'.chzn-container\').css("width","100%");field.$el.find(\'.chzn-drop\').css("width","100%");},_setUpMultiselectField:function(field){field.def.value=this.model.get(field.name);field.events=_.extend({"change select":"_updateSelections"},field.events);field.bindDomChange=function(){};field._updateSelections=function(event,input){var fieldValue=this.model.get(this.name);var id;if(_.has(input,"selected")){id=input.selected;if(!_.contains(fieldValue,id)){fieldValue=_.union(fieldValue,id);}}else if(_.has(input,"deselected")){id=input.deselected;if(_.contains(fieldValue,id)){fieldValue=_.without(fieldValue,id);}}
this.def.value=fieldValue;this.model.set(this.name,fieldValue);};return field;}})',
    ),
    'templates' => 
    array (
      'forecastsConfigVariables' => '{{!
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

<div class="accordion-heading">
    <a id=\'forecastsConfigVariablesTitle\' class="accordion-toggle" data-help-id="forecastsConfigVariables" data-toggle="collapse" data-parent="#forecast-config-accordion" href="#forecastsConfigVariablesCollapse"></a>
</div>
<div id="forecastsConfigVariablesCollapse" class="accordion-body collapse">
    <div class="accordion-inner">
        {{#each meta.panels}}
            <p>{{str "LBL_FORECASTS_CONFIG_VARIABLES_DESC" "Forecasts"}}</p>
            {{#each fields}}
                <label for="{{name}}">{{str label "Forecasts"}}</label>
                {{field ../../this model=../../model}}
            {{/each}}
        {{/each}}
    </div>
</div>
',
    ),
  ),
  'forecastsConfigWorksheetColumns' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_FORECASTS_CONFIG_BREADCRUMB_RANGES',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'commit_stage',
              'label' => 'LBL_FORECASTS_CONFIG_TITLE_RANGES',
              'locked' => true,
            ),
            1 => 
            array (
              'name' => 'parent_name',
              'label' => 'LBL_NAME',
              'label_module' => 'Opportunities',
              'locked' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'label_module' => 'RevenueLineItems',
            ),
            3 => 
            array (
              'name' => 'date_closed',
              'label' => 'LBL_DATE_CLOSED',
              'label_module' => 'RevenueLineItems',
            ),
            4 => 
            array (
              'name' => 'sales_stage',
              'label' => 'LBL_SALES_STAGE',
              'label_module' => 'Products',
            ),
            5 => 
            array (
              'name' => 'probability',
              'label' => 'LBL_OW_PROBABILITY',
            ),
            6 => 
            array (
              'name' => 'worst_case',
              'label' => 'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST',
              'locked' => true,
            ),
            7 => 
            array (
              'name' => 'likely_case',
              'label' => 'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY',
              'locked' => true,
            ),
            8 => 
            array (
              'name' => 'best_case',
              'label' => 'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST',
              'locked' => true,
            ),
            9 => 
            array (
              'name' => 'product_type',
              'label' => 'LBL_TYPE',
              'label_module' => 'RevenueLineItems',
            ),
            10 => 
            array (
              'name' => 'lead_source',
              'label' => 'LBL_LEAD_SOURCE',
              'label_module' => 'Contacts',
            ),
            11 => 
            array (
              'name' => 'campaign_name',
              'label' => 'LBL_CAMPAIGN',
            ),
            12 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
            ),
            13 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAMS',
            ),
            14 => 
            array (
              'name' => 'next_step',
              'label' => 'LBL_NEXT_STEP',
              'label_module' => 'RevenueLineItems',
            ),
            15 => 
            array (
              'name' => 'description',
              'label' => 'LBL_DESCRIPTION',
              'label_module' => 'RevenueLineItems',
            ),
          ),
        ),
      ),
    ),
    'templates' => 
    array (
      'forecastsConfigWorksheetColumns' => '{{!
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

<div class="accordion-heading">
    <a id=\'forecastsConfigWorksheetColumnsTitle\' class="accordion-toggle" data-help-id="forecastsConfigWorksheetColumns" data-toggle="collapse" data-parent="#forecast-config-accordion" href="#forecastsConfigWorksheetColumnsCollapse"></a>
</div>
<div id="forecastsConfigWorksheetColumnsCollapse" class="accordion-body collapse">
    <div class="accordion-inner">
        <p>{{str \'LBL_FORECASTS_CONFIG_WORKSHEET_TEXT\' \'Forecasts\'}}:</p>
        <div class="record-cell">
            <div id="wkstColumnsSelect"></div>
        </div>
    </div>
</div>
',
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({titleSelectedValues:\'\',titleViewNameTitle:\'\',toggleTitleTpl:{},wkstColumnsSelect2:{},selectedOptions:[],allOptions:[],likelyFieldObj:{},bestFieldObj:{},worstFieldObj:{},events:{\'click .resetLink\':\'onResetLinkClicked\'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.titleViewNameTitle=app.lang.get(\'LBL_FORECASTS_CONFIG_TITLE_WORKSHEET_COLUMNS\',\'Forecasts\');this.toggleTitleTpl=app.template.getView(\'forecastsConfigHelpers.toggleTitle\',\'Forecasts\');this.allOptions=[];this.selectedOptions=[];var config=app.metadata.getModule(\'Forecasts\',\'config\'),cfgFields=config.worksheet_columns,index=0;_.each(options.meta.panels[0].fields,function(field){var labelModule=(!_.isUndefined(field.label_module))?field.label_module:\'Forecasts\',obj={id:field.name,text:app.lang.get(field.label,labelModule),index:index,locked:field.locked||false},cField=_.find(cfgFields,function(cfgField){return cfgField==field.name;},this),addFieldToFullList=true;if(field.name==\'best_case\'){this.bestFieldObj=obj;addFieldToFullList=(config.show_worksheet_best===1)}else if(field.name==\'likely_case\'){this.likelyFieldObj=obj;addFieldToFullList=(config.show_worksheet_likely===1)}else if(field.name==\'worst_case\'){this.worstFieldObj=obj;addFieldToFullList=(config.show_worksheet_worst===1)}
if(addFieldToFullList){this.allOptions.push(obj);}
if(!_.isUndefined(cField)){this.selectedOptions.push(obj);}
index++;},this);},onResetLinkClicked:function(evt){evt.preventDefault();evt.stopImmediatePropagation();},bindDataChange:function(){if(this.model){this.model.on(\'change:columns\',function(model){var arr=[],cfgFields=this.model.get(\'worksheet_columns\'),metaFields=this.meta.panels[0].fields;_.each(metaFields,function(metaField){_.each(cfgFields,function(field){if(metaField.name==field){var labelModule=metaField.label_module||\'Forecasts\';arr.push(app.lang.get(metaField.label,labelModule));}},this);},this);this.titleSelectedValues=arr.join(\', \');this.titleSelectedValues=this.titleSelectedValues.slice(0,50)+"...";this.updateTitle();},this);this.model.trigger(\'change:columns\',this.model);this.model.on(\'change:scenarios\',function(model){if(this.model.get(\'show_worksheet_best\')){this.addOption(this.bestFieldObj);}else{this.removeOption(this.bestFieldObj);}
if(this.model.get(\'show_worksheet_likely\')){this.addOption(this.likelyFieldObj);}else{this.removeOption(this.likelyFieldObj);}
if(this.model.get(\'show_worksheet_worst\')){this.addOption(this.worstFieldObj);}else{this.removeOption(this.worstFieldObj);}
this._render();var arr=[];_.each(this.selectedOptions,function(field){arr.push(field.id);},this);this.setModelValue(arr);},this);}},addOption:function(fieldObj){if(!_.contains(this.allOptions,fieldObj)){this.allOptions.splice(fieldObj.index,0,fieldObj);this.selectedOptions.splice(fieldObj.index,0,fieldObj);}},removeOption:function(fieldObj){this.allOptions=_.without(this.allOptions,fieldObj);this.selectedOptions=_.without(this.selectedOptions,fieldObj);},updateTitle:function(){var tplVars={title:this.titleViewNameTitle,selectedValues:this.titleSelectedValues,viewName:\'forecastsConfigWorksheetColumns\'};this.$el.find(\'#\'+this.name+\'Title\').html(this.toggleTitleTpl(tplVars));},_render:function(){app.view.View.prototype._render.call(this);this.$el.addClass(\'accordion-group\');this.updateTitle();this.wkstColumnsSelect2=this.$el.find(\'#wkstColumnsSelect\').select2({data:this.allOptions,multiple:true,containerCssClass:"select2-choices-pills-close",initSelection:_.bind(function(element,callback){callback(this.selectedOptions);},this)});this.wkstColumnsSelect2.select2(\'val\',this.selectedOptions);this.wkstColumnsSelect2.on(\'change\',_.bind(this.handleColumnModelChange,this));},handleColumnModelChange:function(evt){if(!_.isUndefined(evt.added)){this.selectedOptions.push(evt.added);}
if(!_.isUndefined(evt.removed)){this.selectedOptions=_.without(this.selectedOptions,evt.removed);}
this.setModelValue(evt.val);},setModelValue:function(value){this.model.set(\'worksheet_columns\',value);this.model.trigger(\'change:columns\',this.model);},_dispose:function(){this.wkstColumnsSelect2.off();this.wkstColumnsSelect2.select2(\'destroy\');this.wkstColumnsSelect2=null;app.view.Component.prototype._dispose.call(this);}})',
    ),
  ),
  'forecastsConfigHelpers' => 
  array (
    'templates' => 
    array (
      'toggleTitle' => '{{!
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

<span>
    <strong>{{title}}:</strong> {{message}} {{selectedValues}}
</span>
',
    ),
  ),
  'list-headerpane' => 
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
({extendsFrom:\'HeaderpaneView\',initialize:function(options){app.view.invokeParent(this,{type:\'view\',name:\'headerpane\',method:\'initialize\',args:[options]});this.on(\'render\',function(){this.getField(\'save_draft_button\').setDisabled();this.getField(\'save_draft_button\').$el.addClass(\'btn-group\');this.getField(\'commit_button\').setDisabled();},this);},bindDataChange:function(){this.context.on(\'change:selectedUser\',function(model,changed){this.title=changed.full_name;if(!this.disposed)this.render();},this);this.context.on(\'button:print_button:click\',function(){window.print();},this);this.context.on(\'forecasts:worksheet:is_dirty\',function(worksheet_type,is_dirty){this.getField(\'save_draft_button\').setDisabled(!is_dirty);this.getField(\'commit_button\').setDisabled(!is_dirty);},this);this.context.on(\'button:commit_button:click button:save_draft_button:click\',function(){this.getField(\'save_draft_button\').setDisabled(true);this.getField(\'commit_button\').setDisabled(true);},this);this.context.on(\'forecasts:worksheet:saved\',function(totalSaved,worksheet_type,wasDraft){if(wasDraft===true){this.getField(\'commit_button\').setDisabled(false);}},this);this.context.on(\'forecasts:worksheet:needs_commit\',function(worksheet_type){this.getField(\'commit_button\').setDisabled(false);},this);app.view.invokeParent(this,{type:\'view\',name:\'headerpane\',method:\'bindDataChange\'});},_renderHtml:function(){var user=this.context.get(\'selectedUser\')||app.user.toJSON();this.title=this.title||user.full_name;app.view.invokeParent(this,{type:\'view\',name:\'headerpane\',method:\'_renderHtml\'});}})',
    ),
    'meta' => 
    array (
      'tree' => 
      array (
        0 => 
        array (
          'type' => 'reportingUsers',
          'acl_action' => 'is_manager',
        ),
      ),
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'save_draft_button',
          'events' => 
          array (
            'click' => 'button:save_draft_button:click',
          ),
          'type' => 'button',
          'label' => 'LBL_SAVE_DRAFT',
          'acl_action' => 'current_user',
        ),
        1 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'main_dropdown',
          'primary' => true,
          'buttons' => 
          array (
            0 => 
            array (
              'name' => 'commit_button',
              'type' => 'button',
              'label' => 'LBL_QC_COMMIT_BUTTON',
              'events' => 
              array (
                'click' => 'button:commit_button:click',
              ),
              'tooltip' => 'LBL_COMMIT_TOOLTIP',
              'css_class' => 'btn-primary',
              'icon' => 'icon-upload',
              'acl_action' => 'current_user',
              'primary' => true,
            ),
            1 => 
            array (
              'name' => 'assign_quota',
              'type' => 'assignquota',
              'label' => 'LBL_ASSIGN_QUOTA_BUTTON',
              'events' => 
              array (
                'click' => 'button:assign_quota:click',
              ),
              'acl_action' => 'manager_current_user',
            ),
            2 => 
            array (
              'name' => 'export_button',
              'type' => 'rowaction',
              'label' => 'LBL_EXPORT_CSV',
              'event' => 'button:export_button:click',
            ),
            3 => 
            array (
              'name' => 'settings_button',
              'type' => 'rowaction',
              'label' => 'LBL_FORECAST_SETTINGS',
              'acl_action' => 'developer',
              'route' => 
              array (
                'action' => 'config',
              ),
              'events' => 
              array (
                'click' => 'button:settings_button:click',
              ),
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
    ),
    'templates' => 
    array (
      'list-headerpane' => '{{!
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
<div class="headerpane">
    <h1>
        <div class="record-cell">
            <span class="module-title pull-left">{{title}}</span>
            {{#if meta.tree}}
                {{#each meta.tree}}
                    {{field ../this}}
                {{/each}}
            {{/if}}
        </div>
        <div class="btn-toolbar pull-right dropdown">
            {{#each meta.buttons}}
                {{field ../this}}
            {{/each}}
        </div>
    </h1>
</div>
',
    ),
  ),
  'forecastsConfigHeaderButtons' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
        ),
        1 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'main_dropdown',
          'primary' => true,
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_button',
              'label' => 'LBL_SAVE_BUTTON_LABEL',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({events:{\'click a[name="cancel_button"]\':\'onButtonClicked\',\'click a[name="save_button"]\':\'onButtonClicked\'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);var model=this.context.get(\'model\');model.url=app.api.buildURL("Forecasts","config");model.sync=function(method,model,options){this.trigger("data:sync:start",method,model,options);var url=_.isFunction(model.url)?model.url():model.url;return app.api.call(method,url,model,options);};model.fetch=function(options){options=options?_.clone(options):{};if(options.parse===void 0)options.parse=true;var model=this;var success=options.success;options.success=function(resp){if(!model.set(model.parse(resp,options),options))return false;if(success)success(model,resp,options);model.trigger(\'sync\',model,resp,options);};var error=options.error;options.error=function(resp){if(error)error(model,resp,options);model.trigger(\'error\',model,resp,options);};return this.sync(\'read\',this,options);};model.save=function(key,val,options){var attrs,method,xhr,attributes=this.attributes;if(key==null||typeof key===\'object\'){attrs=key;options=val;}else{(attrs={})[key]=val;}
if(attrs&&(!options||!options.wait)&&!this.set(attrs,options))return false;options=_.extend({validate:true},options);if(!this._validate(attrs,options))return false;if(attrs&&options.wait){this.attributes=_.extend({},attributes,attrs);}
if(options.parse===void 0)options.parse=true;var model=this;var success=options.success;options.success=function(resp){model.attributes=attributes;var serverAttrs=model.parse(resp,options);if(options.wait)serverAttrs=_.extend(attrs||{},serverAttrs);if(_.isObject(serverAttrs)&&!model.set(serverAttrs,options)){return false;}
if(success)success(model,resp,options);model.trigger(\'sync\',model,resp,options);};method=this.isNew()?\'create\':(options.patch?\'patch\':\'update\');if(method===\'patch\')options.attrs=attrs;xhr=this.sync(method,this,options);if(attrs&&options.wait)this.attributes=attributes;return xhr;}
this.context.set({model:model});},onButtonClicked:function(evt){var btnName=$(evt.target).attr(\'name\').slice(0,-7);switch(btnName){case\'cancel\':this.cancelConfig();break;case\'save\':this.saveConfig();break;}},saveConfig:function(){var firstTime=false;this.context.get(\'model\').set({is_setup:true,show_forecasts_commit_warnings:true});if(this.context.get(\'model\').get(\'first_time\')!=undefined){this.context.get(\'model\').unset(\'first_time\');firstTime=true;}
var mdl=this.context.get(\'model\');if(mdl.get(\'forecast_ranges\')=="show_custom_buckets"){var ranges=mdl.get(\'show_custom_buckets_ranges\'),commitStages=[];mdl.unset(\'commit_stages_included\');_.each(ranges,function(range,key){if(range.in_included_total){commitStages.push(key)}
delete range.in_included_total;},this);mdl.set({commit_stages_included:commitStages,show_custom_buckets_ranges:ranges});}
this.context.get(\'model\').save({},{success:_.bind(function(model){if(app.drawer&&!firstTime){this.showSavedConfirmation();app.drawer.close(this.context,this.context.get(\'model\'));}else{app.drawer.close(this.context,this.context.get(\'model\'));if(app.controller.context.get("module")=="Forecasts"){this.showSavedConfirmation(function(){window.location=\'#Forecasts\';window.location.reload();});}else{this.showSavedConfirmation();}}},this)});},showSavedConfirmation:function(onClose){onClose=onClose||function(){};var alert=app.alert.show(\'forecasts_config_success\',{level:\'success\',title:app.lang.get(\'LBL_FORECASTS_CONFIG_TITLE_FORECAST_SETTINGS\',\'Forecasts\')+\':\',messages:app.lang.get(\'LBL_FORECASTS_CONFIG_SETTINGS_SAVED\',\'Forecasts\'),autoClose:true,onAutoClose:_.bind(function(){alert.getCloseSelector().off();onClose();})});alert.getCloseSelector().on(\'click\',onClose);},cancelConfig:function(){if(app.drawer){app.drawer.close(this.context,this.context.get(\'model\'));}
if(this.context.get(\'model\').get(\'is_setup\')==0){if(app.controller.context.get(\'module\')==\'Forecasts\'){app.router.goBack();}}}})',
    ),
    'templates' => 
    array (
      'forecastsConfigHeaderButtons' => '{{!
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

<div class="headerpane">
    <h1>
        <div class="record-cell">
            <span class="module-title">{{str \'LBL_FORECASTS_CONFIG_TITLE_FORECAST_SETTINGS\' \'Forecasts\'}}</span>
        </div>
        <div class="btn-toolbar pull-right dropdown">
            {{#each meta.buttons}}
                {{field ../this}}
            {{/each}}
        </div>
    </h1>
</div>
',
    ),
  ),
  'forecasts-chart' => 
  array (
    'templates' => 
    array (
      'forecasts-chart' => '{{!
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
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span4 groupByOptions">
            {{#with dashletConfig.group_by}}
                {{field ../this model=../this.values}}
            {{/with}}
        </div>
        <div class="span3">
            {{#with dashletConfig.dataset}}
                {{field ../this model=../this.values}}
            {{/with}}
        </div>
    </div>
</div>
{{#with dashletConfig.chart}}
    {{field ../this model=../this.values}}
{{/with}}

',
    ),
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'name' => 'LBL_DASHLET_FORECASTS_CHART',
          'description' => 'LBL_DASHLET_FORECASTS_DESC',
          'config' => 
          array (
          ),
          'preview' => 
          array (
          ),
          'filter' => 
          array (
            'module' => 
            array (
              0 => 'Forecasts',
            ),
          ),
        ),
      ),
      'chart' => 
      array (
        'name' => 'paretoChart',
        'label' => 'Pareto Chart',
        'type' => 'forecast-pareto-chart',
      ),
      'timeperiod' => 
      array (
        0 => 
        array (
          'name' => 'selectedTimePeriod',
          'label' => 'TimePeriod',
          'type' => 'enum',
          'default' => true,
          'enabled' => true,
          'view' => 'edit',
        ),
      ),
      'group_by' => 
      array (
        'name' => 'group_by',
        'label' => 'LBL_DASHLET_FORECASTS_GROUPBY',
        'type' => 'enum',
        'searchBarThreshold' => 5,
        'default' => true,
        'enabled' => true,
        'view' => 'edit',
        'options' => 'forecasts_chart_options_group',
      ),
      'dataset' => 
      array (
        'name' => 'dataset',
        'label' => 'LBL_DASHLET_FORECASTS_DATASET',
        'type' => 'enum',
        'searchBarThreshold' => 5,
        'default' => true,
        'enabled' => true,
        'view' => 'edit',
        'options' => 'forecasts_options_dataset',
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
({plugins:[\'Dashlet\'],values:new Backbone.Model(),className:\'forecasts-chart-wrapper\',initOptions:null,forecastManagerWorksheetContext:undefined,forecastWorksheetContext:undefined,initialize:function(options){this.values.clear({silent:true});this.once(\'init\',this.findWorksheetContexts,this);this.once(\'render\',function(){this.parseCollectionForData();},this);app.view.View.prototype.initialize.call(this,options);if(!this.meta.config){var ctx=this.context.parent,user=ctx.get(\'selectedUser\')||app.user.toJSON();this.values.set({user_id:user.id,display_manager:user.is_manager,ranges:ctx.get(\'selectedRanges\')||[\'include\'],timeperiod_id:ctx.get(\'selectedTimePeriod\'),dataset:\'likely\',group_by:\'forecast\',no_data:true});}},initDashlet:function(){var fieldOptions,cfg=app.metadata.getModule(\'Forecasts\',\'config\');fieldOptions=app.lang.getAppListStrings(this.dashletConfig.dataset.options);this.dashletConfig.dataset.options={};if(cfg.show_worksheet_worst&&app.acl.hasAccess(\'view\',\'ForecastWorksheets\',app.user.get(\'id\'),\'worst_case\')){this.dashletConfig.dataset.options[\'worst\']=fieldOptions[\'worst\'];}
if(cfg.show_worksheet_likely){this.dashletConfig.dataset.options[\'likely\']=fieldOptions[\'likely\'];}
if(cfg.show_worksheet_best&&app.acl.hasAccess(\'view\',\'ForecastWorksheets\',app.user.get(\'id\'),\'best_case\')){this.dashletConfig.dataset.options[\'best\']=fieldOptions[\'best\'];}},findWorksheetContexts:function(){_.filter(this.context.parent.children,function(item){if(item.get(\'module\')==\'ForecastWorksheets\'){this.forecastWorksheetContext=item;return true;}else if(item.get(\'module\')==\'ForecastManagerWorksheets\'){this.forecastManagerWorksheetContext=item;return true;}
return false;},this);var collection;if(this.forecastWorksheetContext){collection=this.forecastWorksheetContext.get(\'collection\');if(collection){collection.on(\'change\',this.repWorksheetChanged,this);collection.on(\'reset\',function(collection){this.parseCollectionForData(collection);},this);}}
if(this.forecastManagerWorksheetContext){collection=this.forecastManagerWorksheetContext.get(\'collection\');if(collection){collection.on(\'change\',this.mgrWorksheetChanged,this);collection.on(\'reset\',function(collection){this.parseCollectionForData(collection);},this);}}},parseCollectionForData:function(collection){var field=this.getField(\'paretoChart\');if(field&&!field.hasServerData()){field.once(\'chart:pareto:rendered\',this.parseCollectionForData,this);return;}
if(this.values.get(\'display_manager\')){this.parseManagerWorksheet(collection||this.forecastManagerWorksheetContext.get(\'collection\'));}else{this.parseRepWorksheet(collection||this.forecastWorksheetContext.get(\'collection\'));}},parseRepWorksheet:function(collection){var field=this.getField(\'paretoChart\');if(field){var serverData=field.getServerData();serverData.data=collection.map(function(item){var i={id:item.get(\'id\'),forecast:item.get(\'commit_stage\'),probability:item.get(\'probability\'),sales_stage:item.get(\'sales_stage\'),likely:app.currency.convertWithRate(item.get(\'likely_case\'),item.get(\'base_rate\')),date_closed_timestamp:parseInt(item.get(\'date_closed_timestamp\'))};if(!_.isUndefined(this.dashletConfig.dataset.options[\'best\'])){i.best=app.currency.convertWithRate(item.get(\'best_case\'),item.get(\'base_rate\'));}
if(!_.isUndefined(this.dashletConfig.dataset.options[\'worst\'])){i.worst=app.currency.convertWithRate(item.get(\'worst_case\'),item.get(\'base_rate\'));}
return i;},this);field.setServerData(serverData,true);}},parseManagerWorksheet:function(collection){var field=this.getField(\'paretoChart\');if(field){var serverData=field.getServerData();serverData.data=collection.map(function(item){var i={id:item.get(\'id\'),user_id:item.get(\'user_id\'),name:item.get(\'name\'),likely:app.currency.convertWithRate(item.get(\'likely_case\'),item.get(\'base_rate\')),likely_adjusted:app.currency.convertWithRate(item.get(\'likely_case_adjusted\'),item.get(\'base_rate\')),quota:app.currency.convertWithRate(item.get(\'quota\'),item.get(\'base_rate\'))};if(!_.isUndefined(this.dashletConfig.dataset.options[\'best\'])){i.best=app.currency.convertWithRate(item.get(\'likely_case\'),item.get(\'base_rate\'));i.best_adjusted=app.currency.convertWithRate(item.get(\'likely_case_adjusted\'),item.get(\'base_rate\'));}
if(!_.isUndefined(this.dashletConfig.dataset.options[\'worst\'])){i.worst=app.currency.convertWithRate(item.get(\'likely_case\'),item.get(\'base_rate\'));i.worst_adjusted=app.currency.convertWithRate(item.get(\'likely_case_adjusted\'),item.get(\'base_rate\'));}
return i;},this);serverData.quota=_.reduce(serverData.data,function(memo,item){return memo+item.quota;},0);field.setServerData(serverData);}},repWorksheetChanged:function(model){var changed=model.changed,changedField=_.keys(changed),field=this.getField(\'paretoChart\'),serverData=field.getServerData();if(changedField.length==1&&changedField[0]==\'date_closed\'){changedField.push(\'date_closed_timestamp\');changed.date_closed_timestamp=Math.round(+app.date.parse(changed.date_closed).getTime()/ 1000);model.set(\'date_closed_timestamp\',changed.date_closed_timestamp,{silent:true});}
if(_.contains(changedField,\'likely_case\')){changed.likely=app.currency.convertWithRate(changed.likely_case,model.get(\'base_rate\'));delete changed.likely_case;}
if(_.contains(changedField,\'best_case\')){changed.best=app.currency.convertWithRate(changed.best_case,model.get(\'base_rate\'));delete changed.best_case;}
if(_.contains(changedField,\'worst_case\')){changed.worst=app.currency.convertWithRate(changed.worst_case,model.get(\'base_rate\'));delete changed.worst_case;}
if(_.contains(changedField,\'commit_stage\')){changed.forecast=changed.commit_stage;delete changed.commit_stage;}
_.find(serverData.data,function(record,i,list){if(model.get(\'id\')==record.id){list[i]=_.extend({},record,changed);return true;}
return false;});field.setServerData(serverData,_.contains(changedField,\'probability\'));},mgrWorksheetChanged:function(model){var fieldsChanged=_.keys(model.changed),changed=model.changed,field=this.getField(\'paretoChart\');if(field){var serverData=field.getServerData();if(_.contains(fieldsChanged,\'quota\')){var q=parseInt(serverData.quota,10);q=app.math.add(app.math.sub(q,model.previous(\'quota\')),model.get(\'quota\'));serverData.quota=q;}else{var f=_.first(fieldsChanged),fieldChartName=f.replace(\'_case\',\'\');_.find(serverData.data,function(record,i,list){if(model.get(\'user_id\')==record.user_id){list[i][fieldChartName]=changed[f];return true;}
return false;});}
field.setServerData(serverData);}},loadData:function(options){var field=this.getField(\'paretoChart\');if(!_.isUndefined(field)){field.once(\'chart:pareto:rendered\',this.parseCollectionForData,this);field.renderChart(options);}},toggleRepOptionsVisibility:function(){this.$el.find(\'div.groupByOptions\').toggleClass(\'hide\',this.values.get(\'display_manager\')===true);},bindDataChange:function(){var meta=this.meta||this.initOptions.meta;if(meta.config){return;}
this.on(\'render\',function(){var f=this.getField(\'paretoChart\'),dt=this.layout.getComponent(\'dashlet-toolbar\');if(dt){f.before(\'chart:pareto:render\',function(){this.$("[data-action=loading]").removeClass(this.cssIconDefault).addClass(this.cssIconRefresh)},{},dt);f.on(\'chart:pareto:rendered\',function(){this.$("[data-action=loading]").removeClass(this.cssIconRefresh).addClass(this.cssIconDefault)},dt);}
this.toggleRepOptionsVisibility();this.parseCollectionForData();},this);var ctx=this.context.parent;ctx.on(\'change:selectedUser\',function(context,user){this.values.set({user_id:user.id,display_manager:(user.showOpps===false&&user.isManager===true)});this.toggleRepOptionsVisibility();},this);ctx.on(\'change:selectedTimePeriod\',function(context,timePeriod){this.values.set({timeperiod_id:timePeriod});},this);ctx.on(\'change:selectedRanges\',function(context,value){this.values.set({ranges:value});},this);},unbindData:function(){var ctx=this.context.parent;if(ctx){ctx.off(null,null,this);}
if(this.forecastManagerWorksheetContext&&this.forecastManagerWorksheetContext.get(\'collection\')){this.forecastManagerWorksheetContext.get(\'collection\').off(null,null,this);}
if(this.forecastWorksheetContext&&this.forecastWorksheetContext.get(\'collection\')){this.forecastWorksheetContext.get(\'collection\').off(null,null,this);}
if(this.context)this.context.off(null,null,this);if(this.values)this.values.off(null,null,this);app.view.View.prototype.unbindData.call(this);}})',
    ),
  ),
  'forecast-pipeline' => 
  array (
    'templates' => 
    array (
      'forecast-pipeline' => '{{!
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
{{#if forecastSetup}}
<div class="dashlet-options">
    <div class="row-fluid">
      <div class="span8">{{#each dashletConfig.timeperiod}}
                {{field ../this model=../this.settings template="edit"}}
            {{/each}}</div>
      <div class="span4">
        <div class="btn-group pull-right dashlet-group" data-toggle="buttons-radio">
          <button class="btn active" rel="tooltip" data-placement="bottom" data-type="self" title="{{{str "LBL_DASHLET_MY_PIPELINE" this.model.module this.context}}}"><i class="icon-user"></i></button>
          <button class="btn" rel="tooltip" data-placement="bottom" data-type="team" title="{{{str "LBL_DASHLET_MY_TEAMS_PIPELINE" this.model.module this.context}}}"><i class="icon-group"></i></button>
        </div>
      </div>
    </div>
  </div>
<div class="opportunity-pipeline-wrapper">
    <div class="nv-chart nv-funnelChart">
        <svg id="{{cid}}"></svg>
    </div>
    <div class="block-footer hide">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
</div>
{{else}}
<div class="opportunity-pipeline-wrapper">
    {{#if forecastAdmin}}
        {{{str "LBL_DASHLET_FORECAST_NOT_SETUP_ADMIN" this.model.module this.context}}}
    {{else}}
        {{{str "LBL_DASHLET_FORECAST_NOT_SETUP" this.model.module this.context}}}
    {{/if}}
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
({results:{},chart:{},plugins:[\'Dashlet\',\'Tooltip\'],forecastSetup:0,forecastAdmin:false,state:"open",preview_open:false,events:{\'click button.btn\':\'handleTypeButtonClick\'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.forecastSetup=app.metadata.getModule(\'Forecasts\',\'config\').is_setup;this.forecastAdmin=(_.isUndefined(app.user.getAcls()[\'Forecasts\'].admin));},initDashlet:function(view){this.settings.set({\'display_type\':\'self\'},{silent:true});if(this.forecastSetup){app.api.call(\'GET\',app.api.buildURL(\'TimePeriods/current\'),null,{success:_.bind(function(o){this.settings.set({\'selectedTimePeriod\':o.id},{silent:true});this.layout.loadData();},this),complete:view.options?view.options.complete:null});}
this.chart=nv.models.funnelChart().showTitle(false).tooltips(false).colorData(\'class\',{step:2}).fmtValueLabel(function(d){return d.label;});},handleTypeButtonClick:function(e){var $el=$(e.currentTarget),displayType=$el.data(\'type\');if(this.settings.get(\'display_type\')!==displayType){this.settings.set({\'display_type\':displayType});}},bindDataChange:function(){this.settings.on(\'change\',function(model){if(this.state==\'open\'&&!this.preview_open){this.loadData({});}},this);app.events.on(\'preview:open\',function(){this.preview_open=true;},this);app.events.on(\'preview:close\',function(){this.preview_open=false;},this);app.events.on(\'app:toggle:sidebar\',function(state){this.state=state;if(this.state==\'open\'&&!this.preview_open){this.chart.update();}},this);},render:function(){app.view.invokeParent(this,{type:\'view\',name:\'view\',method:\'render\'});if(this.chart&&!_.isEmpty(this.results)){this.renderChart();}},renderChart:function(){if(this.state!=\'open\'||this.preview_open){return;}
if(this.disposed){return;}
if(!_.isEmpty(this.chart)){nv.utils.windowUnResize(this.chart.update);this.$("svg#"+this.cid).children().remove();}
if(this.results.data.length>0){this.$(\'.nv-chart\').toggleClass(\'hide\',false);this.$(\'.block-footer\').toggleClass(\'hide\',true);d3.select(\'svg#\'+this.cid).datum(this.results).transition().duration(500).call(this.chart);nv.utils.windowResize(this.chart.update);this.resizeOnPrint(this.chart);}else{this.$(\'.nv-chart\').toggleClass(\'hide\',true);this.$(\'.block-footer\').toggleClass(\'hide\',false);}},loadData:function(options){var timePeriod=this.settings.get(\'selectedTimePeriod\');if(!timePeriod){return;}
var url_base=\'Opportunities/chart/pipeline\';if(this.settings.has(\'selectedTimePeriod\')){url_base+=\'/\'+timePeriod;if(this.settings.has(\'display_type\')){url_base+=\'/\'+this.settings.get(\'display_type\');}
var url=app.api.buildURL(url_base);app.api.call(\'GET\',url,null,{success:_.bind(function(o){this.results={};this.results=o;this.renderChart();},this),complete:options?options.complete:null});}},resizeOnPrint:function(chart){var resizeChart=function(){chart.delay(0);chart.update();chart.delay(300);};if(window.matchMedia){var mediaQueryList=window.matchMedia(\'print\');mediaQueryList.addListener(function(mql){if(mql.matches){resizeChart();}});}else if(window.attachEvent){window.attachEvent("onbeforeprint",resizeChart);}else{window.onbeforeprint=resizeChart;}
window.onafterprint=resizeChart;}})',
    ),
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'name' => 'LBL_DASHLET_PIPELINE_CHART_NAME',
          'description' => 'LBL_DASHLET_PIPELINE_CHART_DESC',
          'config' => 
          array (
            'module' => 'Forecasts',
          ),
          'preview' => 
          array (
            'module' => 'Forecasts',
          ),
          'filter' => 
          array (
            'module' => 
            array (
              0 => 'Home',
              1 => 'Accounts',
              2 => 'Opportunities',
              3 => 'RevenueLineItems',
            ),
            'view' => 
            array (
              0 => 'record',
              1 => 'records',
            ),
          ),
        ),
      ),
      'timeperiod' => 
      array (
        0 => 
        array (
          'name' => 'selectedTimePeriod',
          'label' => 'TimePeriod',
          'type' => 'enum',
        ),
      ),
    ),
  ),
  'forecastsConfigForecastBy' => 
  array (
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({titleSelectedValues:\'\',titleViewNameTitle:\'\',optionsLang:{},toggleTitleTpl:{},events:{\'click .resetLink\':\'onResetLinkClicked\'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.titleViewNameTitle=app.lang.get(\'LBL_FORECASTS_CONFIG_TITLE_FORECAST_BY\',\'Forecasts\');this.optionsLang=app.lang.getAppListStrings(\'forecasts_config_worksheet_layout_forecast_by_options_dom\');this.toggleTitleTpl=app.template.getView(\'forecastsConfigHelpers.toggleTitle\',\'Forecasts\');},onResetLinkClicked:function(evt){evt.preventDefault();evt.stopImmediatePropagation();},bindDataChange:function(){if(this.model){this.model.on(\'change:forecast_by\',function(){this.titleSelectedValues=this.optionsLang[this.model.get(\'forecast_by\')];this.updateTitle();},this);}},updateTitle:function(){var tplVars={title:this.titleViewNameTitle,selectedValues:this.titleSelectedValues,viewName:\'forecastsConfigForecastBy\'};this.$el.find(\'#\'+this.name+\'Title\').html(this.toggleTitleTpl(tplVars));},_render:function(){app.view.View.prototype._render.call(this);this.$el.addClass(\'accordion-group\');this.updateTitle();}})',
    ),
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_FORECASTS_CONFIG_BREADCRUMB_WORKSHEET_LAYOUT',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'forecast_by',
              'type' => 'radioenum',
              'label' => '',
              'view' => 'edit',
              'options' => 'forecasts_config_worksheet_layout_forecast_by_options_dom',
              'default' => false,
              'enabled' => true,
            ),
          ),
        ),
      ),
    ),
    'templates' => 
    array (
      'forecastsConfigForecastBy' => '{{!
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

<div class="accordion-heading">
    <a id=\'forecastsConfigForecastByTitle\' class="accordion-toggle" data-help-id="forecastsConfigForecastBy" data-toggle="collapse" data-parent="#forecast-config-accordion" href="#forecastsConfigForecastByCollapse"></a>
</div>
<div id="forecastsConfigForecastByCollapse" class="accordion-body collapse">
    <div class="accordion-inner">
        {{#each meta.panels}}
            {{#each fields}}
                <label for="{{name}}">{{str label "Forecasts"}}</label>
                {{field ../../this model=../../model}}
            {{/each}}
        {{/each}}
    </div>
</div>
',
    ),
  ),
  'forecastsConfigScenarios' => 
  array (
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({titleSelectedValues:\'\',titleViewNameTitle:\'\',toggleTitleTpl:{},scenarioOptions:[],selectedOptions:[],defaultOption:{},defaultSelect2:{},optionsSelect2:{},defaultForecastedAmountKey:\'show_worksheet_likely\',events:{\'click .resetLink\':\'onResetLinkClicked\'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.titleViewNameTitle=app.lang.get(\'LBL_FORECASTS_CONFIG_TITLE_SCENARIOS\',\'Forecasts\');this.selectedOptions=[];this.defaultOption={};this.scenarioOptions=[];_.each(options.meta.panels[0].fields,function(field){var obj={id:field.name,text:app.lang.get(field.label,\'Forecasts\')}
if(field.name==this.defaultForecastedAmountKey){obj[\'locked\']=true;this.defaultOption=obj;}else{this.scenarioOptions.push(obj);}
if(this.context.get(\'model\').get(field.name)==1&&!obj.locked){this.selectedOptions.push(obj);}},this);this.toggleTitleTpl=app.template.getView(\'forecastsConfigHelpers.toggleTitle\',\'Forecasts\');},onResetLinkClicked:function(evt){evt.preventDefault();evt.stopImmediatePropagation();},bindDataChange:function(){if(this.model){this.model.on(\'change:scenarios\',function(model){var arr=[];if(model.get(\'show_worksheet_likely\')){arr.push(app.lang.get(\'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY\',\'Forecasts\'));}
if(model.get(\'show_worksheet_best\')){arr.push(app.lang.get(\'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST\',\'Forecasts\'));}
if(model.get(\'show_worksheet_worst\')){arr.push(app.lang.get(\'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST\',\'Forecasts\'));}
this.titleSelectedValues=arr.join(\', \');this.updateTitle();},this);this.model.trigger(\'change:scenarios\',this.model);}},updateTitle:function(){var tplVars={title:this.titleViewNameTitle,selectedValues:this.titleSelectedValues,viewName:\'forecastsConfigScenarios\'};this.$el.find(\'#\'+this.name+\'Title\').html(this.toggleTitleTpl(tplVars));},_render:function(){app.view.View.prototype._render.call(this);this.$el.addClass(\'accordion-group\');this.updateTitle();this.defaultSelect2=this.$el.find(\'#scenariosLocked\').select2({data:this.defaultOption,multiple:true,dropdownCss:{width:\'auto\'},dropdownCssClass:\'search-related-dropdown\',containerCss:"border: none",containerCssClass:\'select2-choices-pills-close select2-container-disabled\',escapeMarkup:function(m){return m;},initSelection:_.bind(function(element,callback){callback(this.defaultOption);},this)});this.$el.find(\'.select2-container-disabled\').width(\'auto\');this.$el.find(\'.select2-search-field\').css(\'display\',\'none\');this.defaultSelect2.select2(\'val\',this.defaultOption);this.defaultSelect2.select2(\'disable\');this.optionsSelect2=this.$el.find(\'#scenariosSelect\').select2({data:this.scenarioOptions,multiple:true,dropdownCss:{width:"auto"},width:"90%",containerCss:"border: none",containerCssClass:"select2-choices-pills-close",escapeMarkup:function(m){return m;},initSelection:_.bind(function(element,callback){callback(this.selectedOptions);},this)});this.optionsSelect2.select2(\'val\',this.selectedOptions);this.optionsSelect2.on(\'change\',_.bind(this.handleScenarioModelChange,this));},handleScenarioModelChange:function(evt){var changedEnabled=[],changedDisabled=[],allOptions=[];_.each($(evt.target).val().split(\',\'),function(option){changedEnabled.push(option);this.model.set(option,true,{silent:true});},this);_.each(this.scenarioOptions,function(option){allOptions.push(option.id);},this);changedDisabled=_.difference(allOptions,changedEnabled);_.each(changedDisabled,function(option){this.model.set(option,false,{silent:true});},this);this.model.trigger(\'change:scenarios\',this.model);},formatCustomSelection:function(item){return\'<a class="select2-choice-filter" rel="\'+item.id+\'" href="javascript:void(0)">\'+item.text+\'</a>\';},_dispose:function(){this.defaultSelect2.off();this.defaultSelect2.select2(\'destroy\');this.defaultSelect2=null;this.optionsSelect2.off();this.optionsSelect2.select2(\'destroy\');this.optionsSelect2=null;app.view.Component.prototype._dispose.call(this);}})',
    ),
    'templates' => 
    array (
      'forecastsConfigScenarios' => '{{!
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

<div class="accordion-heading">
    <a id=\'forecastsConfigScenariosTitle\' class="accordion-toggle" data-help-id="forecastsConfigScenarios" data-toggle="collapse" data-parent="#forecast-config-accordion" href="#forecastsConfigScenariosCollapse"></a>
</div>
<div id="forecastsConfigScenariosCollapse" class="accordion-body collapse">
    <div class="accordion-inner">
        <p>{{str "LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS" "Forecasts"}}</p>
        <p><em>{{str "LBL_FORECASTS_CONFIG_WORKSHEET_LIKELY_INFO" "Forecasts"}}</em></p>
        <form class="form-search-related" action="">
            <div class="control-group">
                <div class="filter controls controls=two btn-group-fit">
                    <div class="filter-view search">
                        <input id="scenariosLocked" class="select2" type="hidden">
                        <input id="scenariosSelect" class="select2" type="hidden">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
',
    ),
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_FORECASTS_CONFIG_BREADCRUMB_SCENARIOS',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'show_worksheet_likely',
              'type' => 'bool',
              'label' => 'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY',
              'default' => false,
              'enabled' => true,
              'view' => 'detail',
            ),
            1 => 
            array (
              'name' => 'show_worksheet_best',
              'type' => 'bool',
              'label' => 'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST',
              'default' => false,
              'enabled' => true,
              'view' => 'forecastsWorksheet',
            ),
            2 => 
            array (
              'name' => 'show_worksheet_worst',
              'type' => 'bool',
              'label' => 'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST',
              'default' => false,
              'enabled' => true,
              'view' => 'forecastsWorksheet',
            ),
          ),
        ),
      ),
    ),
  ),
  'forecastsConfigRanges' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_FORECASTS_CONFIG_BREADCRUMB_RANGES',
          'fields' => 
          array (
            'forecast_ranges' => 
            array (
              'name' => 'forecast_ranges',
              'type' => 'radioenum',
              'label' => 'LBL_FORECASTS_CONFIG_RANGES_OPTIONS',
              'view' => 'edit',
              'options' => 'forecasts_config_ranges_options_dom',
              'default' => false,
              'enabled' => true,
            ),
            'category_ranges' => 
            array (
              'include' => 
              array (
                'name' => 'include',
                'type' => 'range',
                'view' => 'edit',
                'sliderType' => 'connected',
                'minRange' => 0,
                'maxRange' => 100,
                'default' => true,
                'enabled' => true,
              ),
              'upside' => 
              array (
                'name' => 'upside',
                'type' => 'range',
                'view' => 'edit',
                'sliderType' => 'connected',
                'minRange' => 0,
                'maxRange' => 100,
                'default' => true,
                'enabled' => true,
              ),
            ),
            'buckets_dom' => 
            array (
              'name' => 'buckets_dom',
              'options' => 
              array (
                'show_binary' => 'commit_stage_binary_dom',
                'show_buckets' => 'commit_stage_dom',
              ),
            ),
          ),
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({label:\'\',forecastRangesField:{},bucketsDomField:{},categoryRangesField:{},selection:\'\',fieldRanges:{},disableRanges:false,titleSelectedRange:\'\',titleSelectedValues:\'\',titleViewNameTitle:\'\',toggleTitleTpl:{},fieldsMeta:{},includedCommitStages:[],events:{\'click #btnAddCustomRange a\':\'addCustomRange\',\'click #btnAddCustomRangeWithoutProbability a\':\'addCustomRange\',\'click .addCustomRange\':\'addCustomRange\',\'click .removeCustomRange\':\'removeCustomRange\',\'keyup input[type=text]\':\'updateCustomRangeLabel\',\'change input[type=checkbox]\':\'updateCustomRangeIncludeInTotal\',\'click .resetLink\':\'onResetLinkClicked\'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.titleViewNameTitle=app.lang.get(\'LBL_FORECASTS_CONFIG_TITLE_RANGES\',\'Forecasts\');this.label=_.first(this.meta.panels).label;this.fieldsMeta=_.first(this.meta.panels).fields;this.forecastRangesField=this.fieldsMeta.forecast_ranges;this.bucketsDomField=this.fieldsMeta.buckets_dom;this.categoryRangesField=this.fieldsMeta.category_ranges;this.model.set($.extend(true,{},app.metadata.getModule(\'Forecasts\',\'config\')));this.updateTitleValues(this.model);this.forecastByModule=app.lang.getAppListStrings(\'moduleList\')[this.model.get(\'forecast_by\')];this.includedCommitStages=this.model.get(\'commit_stages_included\'),this.forecastRangesField.value=this.model.get(\'forecast_ranges\');this.bucketsDomField.value=this.model.get(\'buckets_dom\');this.toggleTitleTpl=app.template.getView(\'forecastsConfigHelpers.toggleTitle\',\'Forecasts\');},onResetLinkClicked:function(evt){evt.preventDefault();evt.stopImmediatePropagation();},bindDataChange:function(){if(this.model){this.model.on(\'change\',function(model){this.updateTitleValues(model);},this);}},updateTitleValues:function(model){if(_.isUndefined(model)){model=this.model;}
var forecastRanges=model.get(\'forecast_ranges\'),rangeObjs=model.get(forecastRanges+\'_ranges\'),tmpObj={},str=\'\';_.each(rangeObjs,function(vals){tmpObj[vals.min]=vals.max;});_.each(tmpObj,function(max,min){str+=min+"% - "+max+"%, ";});str=str.slice(0,str.length-2);this.titleSelectedValues=str;this.titleSelectedRange=app.lang.getAppListStrings(\'forecasts_config_ranges_options_dom\')[forecastRanges];if(_.isFunction(this.toggleTitleTpl)){this.updateTitle();}},updateTitle:function(){var tplVars={title:this.titleViewNameTitle,message:this.titleSelectedRange,selectedValues:this.titleSelectedValues,viewName:\'forecastsConfigRanges\'};this.$el.find(\'#\'+this.name+\'Title\').html(this.toggleTitleTpl(tplVars));},_render:function(){this.disableRanges=this.model.get(\'has_commits\');this.selection=this.model.get(\'forecast_ranges\');app.view.View.prototype._render.call(this);this.$el.addClass(\'accordion-group\');this._addForecastRangesSelectionHandler();this.updateTitle();return this;},_addForecastRangesSelectionHandler:function(){var elements=this.$el.find(\':radio[name="\'+this.forecastRangesField.name+\'"]\');_.each(elements,function(el){$(el).change({view:this},this.selectionHandler);if($(el).prop(\'checked\')){$(el).triggerHandler("change");}},this);},selectionHandler:function(event){var view=event.data.view,oldValue,bucket_dom,hideElement,showElement;oldValue=view.selection;view.selection=this.value;bucket_dom=view.bucketsDomField.options[this.value];hideElement=view.$el.find(\'#\'+oldValue+\'_ranges\');showElement=view.$el.find(\'#\'+this.value+\'_ranges\');if(showElement.children().length==0){this.value==\'show_custom_buckets\'?view._customSelectionHandler(this,showElement):view._selectionHandler(this,showElement);view.connectSliders.call(view,this.value,view.fieldRanges);}
if(hideElement){hideElement.toggleClass(\'hide\',true);}
if(showElement){showElement.toggleClass(\'hide\',false);}
view.model.set(this.name,this.value);view.model.set(view.bucketsDomField.name,bucket_dom);},_selectionHandler:function(element,showElement){var bucket_dom=this.bucketsDomField.options[element.value];this.fieldRanges[element.value]={};showElement.append(\'<p>\'+app.lang.get(\'LBL_FORECASTS_CONFIG_\'+element.value.toUpperCase()+\'_RANGES_DESCRIPTION\',\'Forecasts\',this)+\'</p>\');_.each(app.lang.getAppListStrings(bucket_dom),function(label,key){if(key!=\'exclude\'){var rangeField,model=new Backbone.Model(),fieldSettings;model.set(key,this.view.model.get(this.category+\'_ranges\')[key]);fieldSettings={view:this.view,def:this.view.fieldsMeta.category_ranges[key],viewName:\'edit\',context:this.view.context,module:this.view.module,model:model,meta:app.metadata.getField(\'range\')};rangeField=app.view.createField(fieldSettings);this.showElement.append(\'<b>\'+label+\':</b>\').append(rangeField.el);rangeField.render();this.view.fieldRanges[this.category][key]=rangeField;rangeField.sliderDoneDelegate=function(category,key,view){return function(value){this.view.updateRangeSettings(category,key,value);};}(this.category,key,this.view);}},{view:this,showElement:showElement,category:element.value});showElement.append($(\'<p>\'+app.lang.get("LBL_FORECASTS_CONFIG_RANGES_EXCLUDE_INFO","Forecasts")+\'</p>\'));},_customSelectionHandler:function(element,showElement){var bucket_dom=this.bucketsDomField.options[element.value],bucket_dom_options=[],rangeField,_ranges;this.fieldRanges[element.value]={};showElement.append(\'<p>\'+app.lang.get(\'LBL_FORECASTS_CONFIG_\'+element.value.toUpperCase()+\'_RANGES_DESCRIPTION\',\'Forecasts\',this)+\'</p>\');if(!this.model.has(element.value+\'_ranges\')){this.model.set(element.value+\'_ranges\',{});}
_.each(app.lang.getAppListStrings(bucket_dom),function(label,key){if(_.isUndefined(this.view.model.get(this.category+\'_ranges\')[key])){_ranges=this.view.model.get(this.category+\'_ranges\');_ranges[key]={min:0,max:100,in_included_total:false};this.view.model.set(this.category+\'_ranges\',_ranges);}else{_ranges=this.view.model.get(this.category+\'_ranges\');_ranges[key].in_included_total=(_.contains(this.view.includedCommitStages,key));this.view.model.set(this.category+\'_ranges\',_ranges);}
bucket_dom_options.push([key,label]);},{view:this,category:element.value});this.model.set(element.value+\'_options\',bucket_dom_options);this.model.on(\'change:\'+element.value+\'_options\',function(event){this.view.validateCustomRangeLabels(this.category);},{view:this,category:element.value});this._renderCustomRangesLayout(showElement,element.value);_.each(app.lang.getAppListStrings(bucket_dom),function(label,key){rangeField=this.view._renderCustomRange(key,label,showElement,element.value);this.view.fieldRanges[element.value][key]=rangeField;},{view:this,showElement:showElement,category:element.value});if(this._getLastCustomRangeIndex(element.value,\'custom\')){this.$el.find(\'#btnAddCustomRange\').hide();}
if(this._getLastCustomRangeIndex(element.value,\'custom_without_probability\')){this.$el.find(\'#btnAddCustomRangeWithoutProbability\').hide();}},_renderCustomRangesLayout:function(showElement,category){var template=\'<p><b>{{str "LBL_FORECASTS_RANGES_BASED_TITLE" "Forecasts"}}</b></p>\'+\'<div id="plhCustomProbabilityRanges">\'+\'   <div id="plhCustomDefault"></div>\'+\'   <p><b>{{str "LBL_FORECASTS_CUSTOM_BASED_TITLE" "Forecasts"}}</b></p>\'+\'   <div id="plhCustom"></div>\'+\'   <div id="plhExclude">\'+\'       <div class="btn-group" id="btnAddCustomRange"><a class="btn" href="javascript:void(0)" data-type="custom" data-category="{{category}}"><i class="icon-plus"></i></a></div>\'+\'   </div>\'+\'</div>\'+\'<p><b>{{str "LBL_FORECASTS_CUSTOM_NO_BASED_TITLE" "Forecasts"}}</b></p>\'+\'<div id="plhCustomWithoutProbability">\'+\'   <div class="btn-group" id="btnAddCustomRangeWithoutProbability"><a class="btn" href="javascript:void(0)" data-type="custom_without_probability" data-category="{{category}}"><i class="icon-plus"></i></a></div>\'+\'</div>\';showElement.append(Handlebars.compile(template)({category:category}));},_renderCustomRange:function(key,label,showElement,category){var customType=key,customIndex=0,isExclude=false,currentPlh=showElement,rangeField,model=new Backbone.Model(),fieldSettings,lastCustomRange;if(key.substring(0,26)==\'custom_without_probability\'){customType=\'custom_without_probability\';customIndex=key.substring(27);currentPlh=this.$el.find(\'#plhCustomWithoutProbability\');}else if(key.substring(0,6)==\'custom\'){customType=\'custom\';customIndex=key.substring(7);currentPlh=this.$el.find(\'#plhCustom\');}else if(key.substring(0,7)==\'exclude\'){customType=\'custom_default\';currentPlh=this.$el.find(\'#plhExclude\');isExclude=true;}else{customType=\'custom_default\';currentPlh=this.$el.find(\'#plhCustomDefault\');}
model.set(key,this.model.get(category+\'_ranges\')[key]);var fieldDef=this.fieldsMeta.category_ranges[key]||this.fieldsMeta.category_ranges[customType];fieldSettings={view:this,def:_.clone(fieldDef),viewName:\'forecastsCustomRange\',context:this.context,module:this.module,model:model,meta:app.metadata.getField(\'range\')};fieldSettings.def.name=key;fieldSettings.def.view=\'forecastsCustomRange\';fieldSettings.def.enabled=true;rangeField=app.view.createField(fieldSettings);currentPlh.append(rangeField.el);rangeField.label=label;rangeField.customType=customType;rangeField.customIndex=customIndex;rangeField.isExclude=isExclude;rangeField.in_included_total=(_.contains(this.includedCommitStages,key));rangeField.category=category;rangeField.render();rangeField.$el.find(rangeField.fieldTag).noUiSlider(\'enable\');lastCustomRange=this._getLastCustomRange(category,rangeField.customType);if(!_.isUndefined(lastCustomRange)){lastCustomRange.$el.find(\'.addCustomRange\').parent().hide();}
_.isEmpty(rangeField.label)?rangeField.$el.find(\'.control-group\').addClass(\'error\'):rangeField.$el.find(\'.control-group\').removeClass(\'error\');rangeField.sliderDoneDelegate=function(category,key,view){return function(value){this.view.updateRangeSettings(category,key,value);};}(category,key,this);return rangeField;},_getLastCustomRangeIndex:function(category,customType){var lastCustomRangeIndex=0;if(this.fieldRanges[category]){_.each(this.fieldRanges[category],function(range){if(range.customType==customType&&range.customIndex>lastCustomRangeIndex){lastCustomRangeIndex=range.customIndex;}},this);}
return lastCustomRangeIndex;},_getLastCustomRange:function(category,customType){if(this.fieldRanges[category]&&!_.isEmpty(this.fieldRanges[category])){var lastCustomRange=undefined;_.each(this.fieldRanges[category],function(range){if(range.customType==customType&&(_.isUndefined(lastCustomRange)||range.customIndex>lastCustomRange.customIndex)){lastCustomRange=range;}},this);if(_.isUndefined(lastCustomRange)){if(customType==\'custom\'){lastCustomRange=this.fieldRanges[category].upside||this.fieldRanges[category].include;}else{lastCustomRange=this.fieldRanges[category].exclude;}}}
return lastCustomRange;},addCustomRange:function(event){var view=this,category=$(event.currentTarget).data(\'category\')||null,customType=$(event.currentTarget).data(\'type\')||null,ranges=view.model.get(category+\'_ranges\'),bucket_dom_options=view.model.get(category+\'_options\'),showElement=(customType==\'custom\')?view.$el.find(\'#plhCustom\'):view.$el.find(\'#plhCustomWithoutProbability\'),label=app.lang.get(\'LBL_FORECASTS_CUSTOM_RANGES_DEFAULT_NAME\',\'Forecasts\'),key,rangeField,lastCustomRange,lastCustomRangeIndex,lastOptionIndex;if(_.isNull(category)||_.isNull(customType)||_.isUndefined(ranges)&&_.isUndefined(bucket_dom_options)){return false;}
lastCustomRange=view._getLastCustomRange(category,customType);lastCustomRangeIndex=view._getLastCustomRangeIndex(category,customType);lastCustomRangeIndex++;key=customType+\'_\'+lastCustomRangeIndex;if(customType!=\'custom\'){ranges[key]={min:0,max:0,in_included_total:false};}else if(ranges.exclude.max-ranges.exclude.min>3){ranges[key]={min:parseInt(ranges.exclude.max,10)-1,max:parseInt(ranges.exclude.max,10),in_included_total:false};ranges.exclude.max=parseInt(ranges.exclude.max,10)-2;if(!_.isUndefined(view.fieldRanges[category].exclude.$el)){view.fieldRanges[category].exclude.$el.find(view.fieldRanges[category].exclude.fieldTag).noUiSlider(\'move\',{handle:\'upper\',to:ranges.exclude.max});}}else if(ranges[lastCustomRange.name].max-ranges[lastCustomRange.name].min>3){ranges[key]={min:parseInt(ranges[lastCustomRange.name].min,10),max:parseInt(ranges[lastCustomRange.name].min,10)+1,in_included_total:false};ranges[lastCustomRange.name].min=parseInt(ranges[lastCustomRange.name].min,10)+2;if(!_.isUndefined(lastCustomRange.$el)){lastCustomRange.$el.find(lastCustomRange.fieldTag).noUiSlider(\'move\',{handle:\'lower\',to:ranges[lastCustomRange.name].min});}}else{ranges[key]={min:parseInt(ranges[lastCustomRange.name].min,10)-2,max:parseInt(ranges[lastCustomRange.name].min,10)-1,in_included_total:false};}
view.model.unset(category+\'_ranges\',{silent:true});view.model.set(category+\'_ranges\',ranges);rangeField=view._renderCustomRange(key,label,showElement,category);if(!_.isUndefined(rangeField)&&!_.isNull(rangeField)){view.fieldRanges[category][key]=rangeField;}
_.each(bucket_dom_options,function(item,key){if(item[0]==this.value){lastOptionIndex=key;}},{value:lastCustomRange.name});bucket_dom_options.splice(lastOptionIndex+1,0,[key,label]);view.model.unset(category+\'_options\',{silent:true});view.model.set(category+\'_options\',bucket_dom_options);if(customType==\'custom\'){view.$el.find(\'#btnAddCustomRange\').hide();view.connectSliders.call(view,category,view.fieldRanges);}else{view.$el.find(\'#btnAddCustomRangeWithoutProbability\').hide();_.each(view.fieldRanges[category],function(item){if(item.customType==this.key&&item.customIndex<this.index&&!_.isUndefined(item.$el)){item.$el.find(\'.addCustomRange\').parent().hide();}},this);}},removeCustomRange:function(event){var view=this,category=$(event.currentTarget).data(\'category\')||null,fieldKey=$(event.currentTarget).data(\'key\')||null,ranges=view.model.get(category+\'_ranges\'),bucket_dom_options=view.model.get(category+\'_options\'),range,previousCustomRange,lastCustomRangeIndex,lastCustomRange,optionIndex;if(_.isNull(category)||_.isNull(fieldKey)||_.isUndefined(view.fieldRanges[category])||_.isUndefined(view.fieldRanges[category][fieldKey])||_.isUndefined(ranges)||_.isUndefined(bucket_dom_options))
{return false;}
range=view.fieldRanges[category][fieldKey];if(_.indexOf([\'include\',\'upside\',\'exclude\'],range.name)!=-1){return false;}
if(range.customType==\'custom\'){_.each(this.fieldRanges[category],function(item){if(item.customType==\'custom\'&&item.customIndex<range.customIndex){previousCustomRange=item;}},this);if(_.isUndefined(previousCustomRange)){previousCustomRange=!_.isUndefined(view.fieldRanges[category].upside)?view.fieldRanges[category].upside:view.fieldRanges[category].include;}
ranges[previousCustomRange.name].min=+ranges[range.name].min;if(!_.isUndefined(previousCustomRange.$el)){previousCustomRange.$el.find(previousCustomRange.fieldTag).noUiSlider(\'move\',{handle:\'lower\',to:ranges[previousCustomRange.name].min});}}
view.fieldRanges[category][range.name].remove();delete ranges[range.name];delete view.fieldRanges[category][range.name];_.each(bucket_dom_options,function(item,key){if(item[0]==this.value){optionIndex=key;}},{value:range.name});bucket_dom_options.splice(optionIndex,1);view.model.unset(category+\'_options\',{silent:true});view.model.set(category+\'_options\',bucket_dom_options);view.model.unset(category+\'_ranges\',{silent:true});view.model.set(category+\'_ranges\',ranges);lastCustomRangeIndex=view._getLastCustomRangeIndex(category,range.customType);if(range.customType==\'custom\'){if(lastCustomRangeIndex==0){view.$el.find(\'#btnAddCustomRange\').show();}
view.connectSliders.call(view,category,view.fieldRanges);}else{if(lastCustomRangeIndex==0){view.$el.find(\'#btnAddCustomRangeWithoutProbability\').show();}}
lastCustomRange=view._getLastCustomRange(category,range.customType);if(!_.isUndefined(lastCustomRange.$el)){lastCustomRange.$el.find(\'.addCustomRange\').parent().show();}},updateCustomRangeLabel:function(event){var view=this,category=$(event.target).data(\'category\')||null,fieldKey=$(event.target).data(\'key\')||null,bucket_dom_options=view.model.get(category+\'_options\'),optionIndex;if(!_.isNull(category)&&!_.isNull(fieldKey)&&!_.isUndefined(bucket_dom_options)){_.each(bucket_dom_options,function(item,key){if(item[0]==this.value){optionIndex=key;}},{value:fieldKey});bucket_dom_options[optionIndex][1]=$(event.target).val();view.model.unset(category+\'_options\',{silent:true});view.model.set(category+\'_options\',bucket_dom_options);}},validateCustomRangeLabels:function(category){_.each(this.model.get(category+\'_options\'),function(item,key){if(_.isEmpty(item[1])){this.view.fieldRanges[category][item[0]].$el.find(\'.control-group\').addClass(\'error\');this.view.layout.$el.find(\'[name=save_button]\').addClass(\'disabled\');}else{this.view.fieldRanges[category][item[0]].$el.find(\'.control-group\').removeClass(\'error\')}},{view:this});},updateCustomRangeIncludeInTotal:function(event){var view=this,category=$(event.target).data(\'category\')||null,fieldKey=$(event.target).data(\'key\')||null,ranges;if(!_.isNull(category)&&!_.isNull(fieldKey))
{ranges=view.model.get(category+\'_ranges\');if(!_.isUndefined(ranges)&&!_.isUndefined(ranges[fieldKey]))
{if(fieldKey!==\'exclude\'&&fieldKey.indexOf(\'custom_without_probability\')==-1){ranges[fieldKey].in_included_total=$(event.target).is(\':checked\');}else{ranges[fieldKey].in_included_total=false;}
view.model.unset(category+\'_ranges\',{silent:true});view.model.set(category+\'_ranges\',ranges);}}},updateRangeSettings:function(category,range,value){var catRange=category+\'_ranges\',setting=this.model.get(catRange);if(category==\'show_custom_buckets\'){value.in_included_total=setting[range].in_included_total||false;}
setting[range]=value;this.model.unset(catRange,{silent:true});this.model.set(catRange,setting);},connectSliders:function(ranges,sliders){var rangeSliders=sliders[ranges];if(ranges==\'show_binary\'){rangeSliders.include.sliderChangeDelegate=function(value){rangeSliders.include.$el.find(rangeSliders.include.fieldTag).noUiSlider(\'move\',{handle:\'upper\',to:rangeSliders.include.def.maxRange});this.view.setExcludeValueForLastSlider(value,ranges,rangeSliders.include);};}else if(ranges==\'show_buckets\'){rangeSliders.include.sliderChangeDelegate=function(value){rangeSliders.include.$el.find(rangeSliders.include.fieldTag).noUiSlider(\'move\',{handle:\'upper\',to:rangeSliders.include.def.maxRange});rangeSliders.upside.$el.find(rangeSliders.upside.fieldTag).noUiSlider(\'move\',{handle:\'upper\',to:value.min-1});if(value.min<=rangeSliders.upside.$el.find(rangeSliders.upside.fieldTag).noUiSlider(\'value\')[0]+1){rangeSliders.upside.$el.find(rangeSliders.upside.fieldTag).noUiSlider(\'move\',{handle:\'lower\',to:value.min-2});}};rangeSliders.upside.sliderChangeDelegate=function(value){rangeSliders.include.$el.find(rangeSliders.include.fieldTag).noUiSlider(\'move\',{handle:\'lower\',to:value.max+1});this.view.setExcludeValueForLastSlider(value,ranges,rangeSliders.upside);};}else if(ranges==\'show_custom_buckets\'){var i,max,customSliders=_.sortBy(_.filter(rangeSliders,function(item){return item.customType==\'custom\'}),function(item){return parseInt(item.customIndex,10);}),probabilitySliders=_.union(rangeSliders.include,rangeSliders.upside,customSliders,rangeSliders.exclude);if(probabilitySliders.length){for(i=0,max=probabilitySliders.length;i<max;i++){probabilitySliders[i].connectedSlider=(!_.isUndefined(probabilitySliders[i+1]))?probabilitySliders[i+1]:null;probabilitySliders[i].connectedToSlider=(!_.isUndefined(probabilitySliders[i-1]))?probabilitySliders[i-1]:null;probabilitySliders[i].sliderChangeDelegate=function(value,populateEvent){if(this.name==\'include\'){this.$el.find(this.fieldTag).noUiSlider(\'move\',{handle:\'upper\',to:this.def.maxRange});}else if(this.name==\'exclude\'){this.$el.find(this.fieldTag).noUiSlider(\'move\',{handle:\'lower\',to:this.def.minRange});}
if(!_.isUndefined(this.connectedSlider)&&!_.isNull(this.connectedSlider)){this.connectedSlider.$el.find(this.connectedSlider.fieldTag).noUiSlider(\'move\',{handle:\'upper\',to:value.min-1});if(value.min<=this.connectedSlider.$el.find(this.connectedSlider.fieldTag).noUiSlider(\'value\')[0]+1){this.connectedSlider.$el.find(this.connectedSlider.fieldTag).noUiSlider(\'move\',{handle:\'lower\',to:value.min-2});}
if(_.isUndefined(populateEvent)||populateEvent==\'down\'){this.connectedSlider.sliderChangeDelegate.call(this.connectedSlider,{min:this.connectedSlider.$el.find(this.connectedSlider.fieldTag).noUiSlider(\'value\')[0],max:this.connectedSlider.$el.find(this.connectedSlider.fieldTag).noUiSlider(\'value\')[1]},\'down\');}}
if(!_.isUndefined(this.connectedToSlider)&&!_.isNull(this.connectedToSlider)){this.connectedToSlider.$el.find(this.connectedToSlider.fieldTag).noUiSlider(\'move\',{handle:\'lower\',to:value.max+1});if(value.max>=this.connectedToSlider.$el.find(this.connectedToSlider.fieldTag).noUiSlider(\'value\')[1]-1){this.connectedToSlider.$el.find(this.connectedToSlider.fieldTag).noUiSlider(\'move\',{handle:\'upper\',to:value.max+2});}
if(_.isUndefined(populateEvent)||populateEvent==\'up\'){this.connectedToSlider.sliderChangeDelegate.call(this.connectedToSlider,{min:this.connectedToSlider.$el.find(this.connectedToSlider.fieldTag).noUiSlider(\'value\')[0],max:this.connectedToSlider.$el.find(this.connectedToSlider.fieldTag).noUiSlider(\'value\')[1]},\'up\');}}};}}}},setExcludeValueForLastSlider:function(value,ranges,slider){var excludeRange={min:0,max:100},settingName=ranges+\'_ranges\',setting=this.model.get(settingName);excludeRange.max=value.min-1;excludeRange.min=slider.def.minRange;setting.exclude=excludeRange;this.model.set(settingName,setting);}})',
    ),
    'templates' => 
    array (
      'forecastsConfigRanges' => '{{!
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

<div class="accordion-heading">
    <a id=\'forecastsConfigRangesTitle\' class="accordion-toggle" data-help-id="forecastsConfigRanges" data-toggle="collapse" data-parent="#forecast-config-accordion" href="#forecastsConfigRangesCollapse"></a>
</div>
<div id="forecastsConfigRangesCollapse" class="accordion-body collapse">
    <div class="accordion-inner">
        <!--TODO-sfa remove this once the ability to map buckets when they get changed is implemented (SFA-215).-->
        <p><em>{{str "LBL_FORECASTS_CONFIG_RANGES_SETUP_NOTICE" "Forecasts"}}</em></p>
        <p>{{str "LBL_FORECASTS_CONFIG_RANGES_OPTIONS" "Forecasts" this}}</p>
        {{#with forecastRangesField}}
            {{#eachOptions options}}
                <fieldset class="{{{key}}}Fields">
                    <p>
                        <input type="radio" name="{{../name}}" value="{{{key}}}" {{#eq key ../value}}checked{{/eq}} {{#if ../../disableRanges}}disabled="true"{{/if}}>
                        <b>{{value}}</b>
                    </p>

                    <div id="{{{key}}}_ranges" class="options {{#notEq key ../value}}hide{{/notEq}}"></div>

                </fieldset>

            {{/eachOptions}}
        {{/with}}
    </div>
</div>
',
    ),
  ),
  'forecastsConfigTimeperiods' => 
  array (
    'templates' => 
    array (
      'forecastsConfigTimeperiods' => '{{!
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

<div class="accordion-heading">
    <a id=\'forecastsConfigTimeperiodsTitle\' class="accordion-toggle" data-help-id="forecastsConfigTimeperiods" data-toggle="collapse" data-parent="#forecast-config-accordion" href="#forecastsConfigTimeperiodsCollapse"></a>
</div>
<div id="forecastsConfigTimeperiodsCollapse" class="accordion-body collapse">
    <div class="accordion-inner">
        {{#each meta.panels}}
            <p>{{str "LBL_FORECASTS_CONFIG_TIMEPERIOD_DESC" "Forecasts"}}</p>
            <ol>
                {{#each fields}}
                    <li>
                        <p>{{{str label "Forecasts"}}}</p>
                        <p>{{field ../../this model=../../model}}<p>
                    </li>
                {{/each}}
            </ol>
        {{/each}}
    </div>
</div>
',
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({titleSelectedValues:\'\',titleViewNameTitle:\'\',titleMessage:\'\',toggleTitleTpl:{},events:{\'click .resetLink\':\'onResetLinkClicked\'},initialize:function(options){app.view.View.prototype.initialize.call(this,options);this.titleViewNameTitle=app.lang.get(\'LBL_FORECASTS_CONFIG_TITLE_TIMEPERIODS\',\'Forecasts\');this.titleMessage=app.lang.get(\'LBL_FORECASTS_CONFIG_TITLE_MESSAGE_TIMEPERIODS\',\'Forecasts\');this.toggleTitleTpl=app.template.getView(\'forecastsConfigHelpers.toggleTitle\',\'Forecasts\');},onResetLinkClicked:function(evt){evt.preventDefault();evt.stopImmediatePropagation();},bindDataChange:function(){if(this.model){this.model.on(\'change\',function(model){if(_.isUndefined(model)){model=this.model;}
if(model.changed[\'timeperiod_start_date\']){var tmpD=new Date(new Date(model.changed[\'timeperiod_start_date\']))
tmpD=new Date(tmpD.getTime()+(tmpD.getTimezoneOffset()*60000));this.titleSelectedValues=app.date.format(tmpD,app.user.getPreference(\'datepref\'));this.updateTitle();}},this);}},updateTitle:function(){var tplVars={title:this.titleViewNameTitle,message:this.titleMessage,selectedValues:this.titleSelectedValues,viewName:\'forecastsConfigTimeperiods\'};this.$el.find(\'#\'+this.name+\'Title\').html(this.toggleTitleTpl(tplVars));},_renderField:function(field){field=this._setUpTimeperiodConfigField(field);if(this.model.get(\'is_setup\')){field.options.def.view=\'detail\';}
app.view.View.prototype._renderField.call(this,field);},_render:function(){app.view.View.prototype._render.call(this);this.$el.addClass(\'accordion-group\');this.updateTitle();},_setUpTimeperiodConfigField:function(field){switch(field.name){case"timeperiod_shown_forward":case"timeperiod_shown_backward":return this._setUpTimeperiodShowField(field);case"timeperiod_interval":return this._setUpTimeperiodIntervalBind(field);default:return field;}},_setUpTimeperiodShowField:function(field){field.events=_.extend({"change input":"_updateSelection"},field.events);field.bindDomChange=function(){};field._updateSelection=function(event){var value=$(event.currentTarget).val();this.def.value=value;this.model.set(this.name,value);};this.model.set(field.name,this.model.get(field.name).toString(),{silent:true});field.def.value=this.model.get(field.name)||1;return field;},_setUpTimeperiodIntervalBind:function(field){field.def.value=this.model.get(field.name);field.events=_.extend({"change input":"_updateIntervals"},field.events);field.bindDomChange=function(){};if(typeof(field.def.options)==\'string\'){field.def.options=app.lang.getAppListStrings(field.def.options);}
field._updateIntervals=function(event){var selected_interval=$(event.currentTarget).val();this.def.value=selected_interval;this.model.set(this.name,selected_interval);this.model.set(\'timeperiod_leaf_interval\',selected_interval==\'Annual\'?\'Quarter\':\'Month\');}
return field;}})',
    ),
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_FORECASTS_CONFIG_BREADCRUMB_TIMEPERIODS',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'timeperiod_interval',
              'type' => 'enum',
              'options' => 'forecasts_timeperiod_options_dom',
              'searchBarThreshold' => 5,
              'label' => 'LBL_FORECASTS_CONFIG_TIMEPERIOD',
              'default' => false,
              'enabled' => true,
              'view' => 'edit',
            ),
            1 => 
            array (
              'name' => 'timeperiod_start_date',
              'type' => 'date',
              'label' => 'LBL_FORECASTS_CONFIG_START_DATE',
              'default' => false,
              'enabled' => true,
              'view' => 'edit',
            ),
            2 => 
            array (
              'name' => 'timeperiod_shown_forward',
              'type' => 'enum',
              'options' => 
              array (
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
              ),
              'searchBarThreshold' => 5,
              'label' => 'LBL_FORECASTS_CONFIG_TIMEPERIODS_FORWARD',
              'default' => false,
              'enabled' => true,
              'view' => 'edit',
            ),
            3 => 
            array (
              'name' => 'timeperiod_shown_backward',
              'type' => 'enum',
              'options' => 
              array (
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
              ),
              'searchBarThreshold' => 5,
              'label' => 'LBL_FORECASTS_CONFIG_TIMEPERIODS_BACKWARD',
              'default' => false,
              'enabled' => true,
              'view' => 'edit',
            ),
          ),
        ),
      ),
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
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => 9,
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => 9,
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            3 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
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
  '_hash' => '40d5e5bdfcbead5c35eed3f2e6f82b18',
);

