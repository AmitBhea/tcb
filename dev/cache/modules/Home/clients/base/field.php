<?php
$clientCache['Home']['base']['field'] = array (
  'dashboardtitle' => 
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
<div class="dropdown">
<a class="dropdown-toggle btn btn-invisible btn-link" data-toggle="dropdown" href="javascript:void(0);">{{value}} <i class="icon-caret-down"></i></a>
<ul class="dropdown-menu">
    {{#if dashboards}}
        {{#each this.dashboards.models}}
            <li><a href="javascript:void(0);" data-id="{{getFieldValue this "id"}}">{{getFieldValue this "name"}}</a></li>
        {{/each}}
    {{else}}
        <li>
            <div class="alert-process">
                <strong>{{str "LBL_PORTAL_LOADING"}}</strong>
                <div class="loading">
                    <span class="l1"></span><span class="l2"></span><span class="l3"></span>
                </div>
            </div>
        </li>
    {{/if}}
</ul>
</div>
',
      'options' => '{{!
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
{{#eq this.length 0}}
    <li><a href="javascript:void(0);" class="disabled"><em>{{str "LBL_DASHBOARD_NO_RECORDS" this.module}}</em></a></li>
{{/eq}}
{{#notEq this.length 0}}
    {{#each this.models}}
        <li><a href="javascript:void(0);" data-id="{{getFieldValue this "id"}}">{{getFieldValue this "name"}}</a></li>
    {{/each}}
{{/notEq}}
',
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
<input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width">
<p class="help-block"></p>
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
({events:{\'click .dropdown-toggle\':\'toggleClicked\',\'click a[data-id]\':\'navigateClicked\'},dashboards:null,toggleClicked:function(evt){var self=this;if(!_.isEmpty(this.dashboards)){return;}
this.collection.fetch({silent:true,success:function(collection){var pattern=/^(LBL|TPL|NTC|MSG)_(_|[a-zA-Z0-9])*$/;collection.remove(self.model,{silent:true});_.each(collection.models,function(model){if(pattern.test(model.get(\'name\'))){model.set(\'name\',app.lang.get(model.get(\'name\'),collection.module||null));}});self.dashboards=collection;var optionTemplate=app.template.getField(self.type,"options",self.module);self.$(".dropdown-menu").html(optionTemplate(collection));}});},navigateClicked:function(evt){var id=$(evt.currentTarget).data("id");this.navigate(id);},navigate:function(id){this.view.layout.navigateLayout(id);},format:function(value){var module=this.context.parent?this.context.parent.get("module"):this.context.get("module"),pattern=/^(LBL|TPL|NTC|MSG)_(_|[a-zA-Z0-9])*$/;return pattern.test(value)?app.lang.get(value,module):value;},_loadTemplate:function(){app.view.Field.prototype._loadTemplate.call(this);if(this.context&&this.context.get(\'model\')&&this.context.get(\'model\').dashboardModule===\'Home\'){this.template=app.template.getField(\'base\',this.tplName)||this.template;}},setMaxWidth:function(width){this.$el.css({\'max-width\':width});},getCellPadding:function(){var padding=0,$cell=this.$(\'.dropdown-toggle\');if(!_.isEmpty($cell)){padding=parseInt($cell.css(\'padding-left\'),10)+parseInt($cell.css(\'padding-right\'),10);}
return padding;}})',
    ),
  ),
  'layoutsizer' => 
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
({spanMin:2,spanTotal:12,spanStep:1,format:function(value){var metadata=this.model.get("metadata");return(metadata&&metadata.components)?metadata.components.length-1:0;},_loadTemplate:function(){app.view.Field.prototype._loadTemplate.call(this);if(this.action!==\'edit\'){this.template=app.template.empty;}},_render:function(){app.view.Field.prototype._render.call(this);if(this.action===\'edit\'&&this.value>0){var self=this,metadata=this.model.get("metadata");this.$(\'#layoutwidth\').empty().noUiSlider(\'init\',{knobs:this.value,scale:[0,this.spanTotal],step:this.spanStep,connect:false,end:function(type){if(type!==\'move\'){var values=$(this).noUiSlider(\'value\');self.setValue(values);}}}).append(function(){var html="",segments=(self.spanTotal / self.spanStep)+1,segmentWidth=$(this).width()/(segments-1),acum=0;_.times(segments,function(i){acum=(segmentWidth*i)-2;html+="<div class=\'ticks\' style=\'left:"+acum+"px\'></div>";},this);return html;});this.setSliderPosition(metadata);}else{this.$(\'.noUiSliderEnds\').hide();}},setSliderPosition:function(metadata){var divider=0;_.each(_.pluck(metadata.components,\'width\'),function(span,index){if(index>=this.value)return;divider=divider+parseInt(span,10);this.$(\'#layoutwidth\').noUiSlider(\'move\',{handle:index,to:divider});},this);},setValue:function(value){var metadata=this.model.get("metadata"),divider=0;_.each(metadata.components,function(component,index){if(index==metadata.components.length-1){component.width=this.spanTotal-divider;if(component.width<this.spanMin){var adjustment=this.spanMin-component.width;for(var i=index-1;i>=0;i--){metadata.components[i].width-=adjustment;if(metadata.components[i].width<this.spanMin){adjustment=this.spanMin-metadata.components[i].width;metadata.components[i].width=this.spanMin;}else{adjustment=0;}}
component.width=this.spanMin;}}else{component.width=value[index]-divider;if(component.width<this.spanMin){component.width=this.spanMin;}
divider+=component.width;}},this);this.setSliderPosition(metadata);this.model.set("metadata",metadata,{silent:true});this.model.trigger("change:layout");},bindDataChange:function(){if(this.model){this.model.on("change:metadata",this.render,this);}},bindDomChange:function(){}})',
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
<div class="noUiSliderEnds" style="margin:12px;">
<div id="layoutwidth" class="noUiSlider"></div>
</div>
',
    ),
  ),
  'layoutbutton' => 
  array (
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
<div class="btn-group" data-toggle="buttons-radio">
    <button class="btn layout{{#eq value 1}} active{{/eq}}" rel="tooltip" title="{{str "LBL_DASHBOARD_1_COLUMN_LAYOUT" module}}" data-placement="bottom" data-value="1"><i class="icon-list-alt"></i></button>
    <button class="btn layout{{#eq value 2}} active{{/eq}}" rel="tooltip" title="{{str "LBL_DASHBOARD_2_COLUMN_LAYOUT" module}}" data-placement="bottom" data-value="2"><i class="icon-columns"></i></button>
    <button class="btn layout{{#eq value 3}} active{{/eq}}" rel="tooltip" title="{{str "LBL_DASHBOARD_3_COLUMN_LAYOUT" module}}" data-placement="bottom" data-value="3"><i class="icon-table"></i></button>
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
({events:{\'click .btn.layout\':\'layoutClicked\'},plugins:[\'Tooltip\'],extendsFrom:\'ButtonField\',getFieldElement:function(){return this.$el;},_render:function(){var buttonField=app.view._getController({type:\'field\',name:\'button\',platform:app.config.platform});buttonField.prototype._render.call(this);},_loadTemplate:function(){app.view.Field.prototype._loadTemplate.call(this);if(this.action!==\'edit\'||(this.model.maxColumns<=1)){this.template=app.template.empty;}},format:function(value){var metadata=this.model.get("metadata");if(metadata){return(metadata.components)?metadata.components.length:1;}
return value;},layoutClicked:function(evt){var value=$(evt.currentTarget).data(\'value\');this.setLayout(value);},setLayout:function(value){var span=12 / value;if(this.value){if(value===this.value){return;}
var setComponent=function(){var metadata=this.model.get("metadata");_.each(metadata.components,function(component){component.width=span;},this);if(metadata.components.length>value){_.times(metadata.components.length-value,function(index){metadata.components[value-1].rows=metadata.components[value-1].rows.concat(metadata.components[value+index].rows);},this);metadata.components.splice(value);}else{_.times(value-metadata.components.length,function(index){metadata.components.push({rows:[],width:span});},this);}
this.model.set("metadata",app.utils.deepCopy(metadata),{silent:true});this.model.trigger("change:metadata");};if(value!==this.value){app.alert.show(\'resize_confirmation\',{level:\'confirmation\',messages:app.lang.get(\'LBL_DASHBOARD_LAYOUT_CONFIRM\',this.module),onConfirm:_.bind(setComponent,this),onCancel:_.bind(this.render,this)});}else{setComponent.call(this);}}else{var metadata={components:[]};_.times(value,function(index){metadata.components.push({rows:[],width:span});},this);this.model.set("metadata",app.utils.deepCopy(metadata),{silent:true});this.model.trigger("change:metadata");}},bindDomChange:function(){},bindDataChange:function(){if(this.model){this.model.on("change:metadata",this.render,this);if(this.model.isNew()){this.setLayout(1);this.model.changed={};}}}})',
    ),
  ),
  '_hash' => '7d2aa8f3531e5693a650a964821637a2',
);

