<?php
// created: 2013-12-05 18:36:20
$metadata = array (
  'fields' => 
  array (
    'avatar' => 
    array (
      'templates' => 
      array (
        'module-icon' => '{{!
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
}}
<span class="label label-module label-{{module}}" rel="tooltip" title="{{moduleIconToolTip module}}" data-placement="right">
    {{moduleIconLabel module}}
</span>
',
      ),
    ),
    'email' => 
    array (
      'templates' => 
      array (
        'list-disabled' => '{{!
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
<input type="text" name="{{name}}" value="{{value}}"{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width" disabled>
<p class="help-block"></p>
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
{{#each value}}
{{#if primary_address}}
{{#if ../hasAnchor}}
    <div class="ellipsis_inline" title="{{../email_address}}" data-placement="bottom">
        <a {{#if ../../../useSugarEmailClient}}class="composeEmail" {{/if}}href="{{#if ../../../useSugarEmailClient}}javascript:void(0);{{else}}mailto:{{../../email_address}}{{/if}}">{{../email_address}}</a>
    </div>
{{else}}
    <del>{{../email_address}}</del>
{{/if}}
{{/if}}
{{/each}}
',
        'noaccess' => '{{!
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
<span class="label">{{str "LBL_NO_FIELD_ACCESS" this.module}}</span>
',
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
{{#each value}}
<div class="control-group email">
    {{#if hasAnchor}}
	    <a title="{{email_address}}{{#notEq flagLabel \'\'}}, {{flagLabel}}{{/notEq}}" data-placement="bottom" class="ellipsis_inline{{#if ../../useSugarEmailClient}} composeEmail{{/if}}" href="{{#if ../../useSugarEmailClient}}javascript:void(0);{{else}}mailto:{{email_address}}{{/if}}">{{email_address}}</a>
    {{else}}
	    {{#eq flagClass \'invalid\'}}
		    <del title="{{email_address}}, {{flagLabel}}" data-placement="bottom" class="ellipsis_inline">{{email_address}}</del>
	    {{else}}
	        <span title="{{email_address}}, {{flagLabel}}" data-placement="bottom" class="ellipsis_inline">{{email_address}}</span>
	    {{/eq}}
    {{/if}}
</div>
{{/each}}
',
        'list-edit' => '{{!
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
{{#each value}}
{{#if primary_address}}
<input type="text" name="{{../../name}}" value="{{../email_address}}"{{#if ../../def.len}} maxlength="{{../../def.len}}"{{/if}}{{#if ../../def.placeholder}} placeholder="{{str ../../../def.placeholder ../../../model.module}}"{{/if}} class="inherit-width">
{{/if}}
{{/each}}
<p class="help-block"></p>
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
{{#each value}}
<div class="control-group email">
   <input type="text" class="existingAddress" {{#if ../def.len}} maxlength="{{../../def.len}}"{{/if}} placeholder="{{str "LBL_EMAIL_TITLE"}}" value="{{email_address}}">
   <div class="btn-toolbar prevent-mousedown">
      <div class="btn-group" data-toggle="buttons-checkbox">
         <button type="button" class="{{#if primary_address}}active {{/if}}is_primary btn btn-edit" data-emailproperty="primary_address" rel="tooltip" title="{{str "LBL_EMAIL_PRIMARY"}}"><i class="icon-star"></i></button>
         <button type="button" class="{{#if opt_out}}active {{/if}}btn btn-edit" data-emailproperty="opt_out" rel="tooltip" title="{{str "LBL_EMAIL_OPT_OUT"}}"><i class="icon-ban-circle"></i></button>
         <button type="button" class="{{#if invalid_email}}active {{/if}}btn btn-edit" rel="tooltip" data-emailproperty="invalid_email" title="{{str "LBL_EMAIL_INVALID"}}"><i class="icon-exclamation-sign"></i></button>
      </div>
      <div class="btn-group prevent-mousedown">
          <a href="javascript:void(0)" class="btn removeEmail" rel="tooltip" title="{{str "LBL_REMOVE"}}"><i class="icon-minus"></i></a>
      </div>
   </div>
</div>
{{/each}}
<div class="control-group email">
    <input type="text" class="newEmail input-append" placeholder="{{str "LBL_EMAIL_ADD"}}">
    <div class="btn-toolbar prevent-mousedown">
       <div class="btn-group">
          <a href="javascript:void(0)" class="btn addEmail" rel="tooltip" title="{{str "LBL_EMAIL_ADD"}}"><i class="icon-plus"></i></a>
       </div>
    </div>
</div>
',
        'disabled' => '{{!
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
{{#each value}}
    <div class="control-group email row-fluid" data-emailaddress="{{email_address}}">
        <div class="span6">
            <div class="input-append">
                <div class="row-fluid">
                    <input type="text" class="span12 existingAddress" data-id="{{email_address}}" value="{{email_address}}" disabled>
                </div>
            </div>
        </div>
        <div class="span6 btn-toolbar">
            <div class="btn-group" data-parentEmail="{{email_address}}">
                <button type="button" class="{{#if primary_address}}active {{/if}}is_primary btn" disabled><i class="icon-star"></i></button>
                <button type="button" class="{{#if opt_out}}active {{/if}}btn" disabled><i class="icon-ban-circle"></i></button>
                <button type="button" class="{{#if invalid_email}}active {{/if}}btn" disabled><i class="icon-exclamation-sign"></i></button>
            </div>
        </div>
    </div>
{{/each}}
<div class="control-group email row-fluid">
    <div class="span6 pull-left">
        <div class="input-append">
            <div class="row-fluid">
                <input type="text" class="span12 newEmail input-append" placeholder="{{str "LBL_EMAIL_ADD"}}" disabled>
            </div>
        </div>
    </div>
</div>
',
      ),
    ),
    'parent' => 
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
<div class="ellipsis_inline" data-placement="bottom"
     title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}">
    {{# if href}}<a href="{{href}}">{{value}}</a>{{else}}{{value}}{{/if}}
</div>
',
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
{{#eq value hiddenValue}}
{{value}}
{{/eq}}
{{#notEq value hiddenValue}}
{{#if href}}<a href="{{href}}">{{value}}</a>{{else}}{{value}}{{/if}}
{{/notEq}}
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
{{#each selectOptions}}
<option value="{{getFieldValue this "id"}}" {{#eq @index 0}}selected="selected"{{/eq}}>{{getFieldValue this "name"}}</option>
{{/each}}
{{#eq selectOptions.length 0}}
<option data-empty="true">{{str "MSG_LIST_VIEW_NO_RESULTS_BASIC"}}</option>
{{/eq}}
<option data-searchmore="true" value="{{str "LBL_SEARCH_FOR_MORE"}}" class="more">{{str "LBL_SEARCH_FOR_MORE"}}</option>',
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
<div class="span5">
    <select class="select2 inherit-width" name="parent_type">
        {{#eachOptions def.options}}
        <option value="{{{this.key}}}" {{#eq this.key ../def.module}}selected{{/eq}}>{{this.value}}</option>
        {{/eachOptions}}
    </select>
</div>
<div class="span7">
    <input type="hidden" name="{{name}}" class="select2 select2-parent inherit-width" value="{{value}}" data-id="{{getFieldValue this.model "parent_id"}}">
</div>
',
      ),
    ),
    'actionmenu' => 
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
<input type="checkbox" name="check" {{#if selected}}checked{{/if}}>',
        'list-header' => '{{!
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
<div class="btn-group">
    <div rel="tooltip" title="{{str "LBL_LISTVIEW_ACTIONS"}}" class="btn checkall"><input type="checkbox" name="check" class="toggle-all" {{#if selected}}checked{{/if}}></div>
    <a class="btn dropdown-toggle {{#unless action_enabled}}disabled{{/unless}}" data-toggle="dropdown" href="javascript:void(0);"><span class="icon-caret-down"></span></a>
    {{actionPlaceHolder}}
</div>
',
      ),
    ),
    'phone' => 
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
<div class="ellipsis_inline" data-placement="bottom" title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}" >
    {{#if skypeValue}}<a href="callto:{{skypeValue}}">{{value}}</a>{{else}}{{value}}{{/if}}
</div>',
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
{{#if value}}
<div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
    {{#if skypeValue}}
        <a href="callto:{{skypeValue}}">{{value}}</a>
    {{else}}{{value}}{{/if}}
</div>
{{/if}}',
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
    ),
    'enum' => 
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
{{#if this.def.isMultiSelect}}
    {{#if value}}
        <div class="ellipsis_inline" data-placement="bottom"
             title="{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}">
            {{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}
        </div>
    {{/if}}
{{else}}
    {{#if value}}
        {{#eachOptions items}}
            {{#eq this.key ../value}}
                <div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
                    {{value}}
                </div>
            {{/eq}}
        {{/eachOptions}}
    {{/if}}
{{/if}}
',
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
{{#if this.def.isMultiSelect}}
    {{#if value}}
        <div class="ellipsis_inline" data-placement="bottom" title="{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}">{{#each value}}{{#eachOptions ../items}}{{#eq key ../this}}{{#notEq @index 0}}, {{/notEq}}{{value}}{{/eq}}{{/eachOptions}}{{/each}}</div>
    {{/if}}
{{else}}
    {{#if value}}
        {{#eachOptions items}}
            {{#eq this.key ../value}}
                <div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
                    {{value}}
                </div>
            {{/eq}}
        {{/eachOptions}}
    {{/if}}
{{/if}}
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
<input type="hidden" name="{{name}}">
<p class="help-block"></p>
',
        'disabled' => '{{!
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
<input type="hidden" name="{{name}}" disabled="disabled">
<p class="help-block"></p>
',
      ),
    ),
    'unlink-action' => 
    array (
    ),
    'vcard' => 
    array (
    ),
    'date' => 
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
{{#if dateValue}}
<div class="ellipsis_inline" data-placement="bottom" title="{{dateValue}}">
    {{dateValue}}
</div>
{{/if}}',
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
{{dateValue}}

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
<div class="input-append date" rel="datepicker">
    <input type="text" class="datepicker" value="{{dateValue}}" rel="datepicker">
    <span class="add-on"><i class="icon-calendar"></i></span>
	<p class="help-block"></p>
</div>

',
      ),
    ),
    'sidebartoggle' => 
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
<a class="btn btn-invisible btn-link drawerTrig" href="javascript:void(0);" rel="tooltip" title="{{str \'LBL_DASHLET_TOGGLE\' this.module}}" data-placement="left"><i class="icon-double-angle-right"></i></a>
',
      ),
    ),
    'listeditable' => 
    array (
    ),
    'url' => 
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
{{#if value}}
    <a class="ellipsis_inline" data-placement="bottom" title="{{value}}" {{#if def.link_target}}target="{{def.link_target}}"{{/if}} href="{{value}}">{{value}}</a>
{{/if}}
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
<input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.placeholder}} placeholder=\'{{str def.placeholder this.model.module}}\'{{/if}} class="input-large">
<p class="help-block"></p>
',
      ),
    ),
    'rowactions' => 
    array (
      'templates' => 
      array (
        'list-header' => '{{!
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
{{str label module}}
',
      ),
    ),
    'manage-subscription' => 
    array (
    ),
    'change-my-password' => 
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
{{#each value}}*{{/each}}
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

{{#if showPasswordFields}}
    <input type="password" name="current_password" value="{{currentPassword}}" placeholder="{{str "LBL_CURRENT_PASSWORD" module}}" class="inherit-width">
    <input type="password" name="new_password" value="{{newPassword}}" placeholder="{{str "LBL_NEW_PASSWORD1" module}}" class="inherit-width">
    <input type="password" name="confirm_password" value="{{confirmPassword}}" placeholder="{{str "LBL_NEW_PASSWORD2" module}}" class="inherit-width">
    <p class="help-block"></p>
{{else}}
    <a class="togglePasswordFields" href="javascript:void(0)">{{str "LBL_CHANGE_PASSWORD"}}</a>
{{/if}}
',
      ),
    ),
    'navelement' => 
    array (
      'templates' => 
      array (
        'default' => '{{!
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
<a href="{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}
{{else}}javascript:void(0){{/if}}" name="{{def.name}}" class="{{def.class}} {{#eq name "show_more_button_forward"}}{{#eq ../collection.next_offset "-1"}}hide{{/eq}}{{/eq}}{{#eq name "show_more_button_back"}}{{#eq ../collection.page "1"}}hide{{/eq}}{{/eq}}">
{{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{label}}</a>
',
      ),
    ),
    'forecast-pareto-chart' => 
    array (
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

<div id="{{cid}}_chart" class="nv-chart nv-pareto"></div>
<div class="block-footer hide">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
',
      ),
    ),
    'currency' => 
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
<div class="currency-field">
{{#if transactionValue}}
    <label class="original">{{transactionValue}}</label><div class="converted">{{value}}</div>
{{else}}
    {{value}}
{{/if}}
</div>
',
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
<div class="currency-field">
{{#if transactionValue}}
    <label class="original">{{transactionValue}}</label><div class="converted">{{value}}</div>
{{else}}
    {{value}}
{{/if}}
</div>
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
{{#if hideCurrencyDropdown}}
    <input type="text" name="{{name}}" value="{{value}}" class="input-large">
{{else}}
    <div class="row-fluid">
        <div class="span8"><input type="text" name="{{name}}" value="{{value}}" class="input-large"></div>
        <div class="span4"><span sfuuid="{{currencySfId}}" class="currency"></span><p class="help-block"></p></div>
    </div>
{{/if}}
',
        'disabled' => '{{!
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
<div class="row-fluid">
<div class="span9"><input type="text" name="{{name}}" value="{{value}}" class="input-large" disabled></div>
<div class="span3"><span sfuuid="{{currencySfId}}"></span><p class="help-block"></p></div>
</div>
',
      ),
    ),
    'html' => 
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
<span class="htmlareafield">{{#if value}}{{{value}}}{{else}}{{{def.default_value}}}{{/if}}</span>
',
      ),
    ),
    'teamset' => 
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
{{value}}',
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
{{#each value}}
<div class="control-group teamset">
     {{name}} {{#if primary}}<label>({{str "LBL_COLLECTION_PRIMARY"}})</label>{{/if}}
</div>
{{/each}}',
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
{{#each selectOptions}}
    <option value="{{getFieldValue this "id"}}" {{#eq @index 0}}selected="selected"{{/eq}}>{{getFieldValue this "name"}}</option>
{{/each}}
{{#eq selectOptions.length 0}}
    <option data-empty="true">{{str "MSG_LIST_VIEW_NO_RESULTS_BASIC"}}</option>
{{/eq}}
<option data-searchmore="true" value="{{str "LBL_SEARCH_FOR_MORE"}}" class="more">{{str "LBL_SEARCH_FOR_MORE"}}</option>',
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
{{#each value}}
    <div class="control-group">
        <div class="controls controls-three btn-fit">
            <input type="hidden" name="{{../name}}" class="select2 inherit-width" value="{{name}}" data-id="{{id}}" data-index="{{@index}}">
            <button type="button" class="btn third {{#if primary}}active{{/if}}" name="primary" data-index="{{@index}}" rel="tooltip" title="{{str "LBL_TEAM_PRIMARY"}}"><i class="icon-star"></i></button>
        {{#if remove_button}}
            <button type="button" class="btn second" name="remove" data-index="{{@index}}" rel="tooltip" title="{{str "LBL_TEAM_REMOVE"}}"><i class="icon-minus"></i></button>
        {{/if}}
        {{#if add_button}}
            <button type="button" class="btn first" name="add" data-index="{{@index}}" rel="tooltip" title="{{str "LBL_TEAM_ADD"}}"><i class="icon-plus"></i></button>
        {{/if}}
        </div>
    </div>
{{/each}}
<p class="help-block"></p>
',
      ),
    ),
    'float' => 
    array (
    ),
    'chart' => 
    array (
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
<div id="d3_{{cid}}" class="nv-chart"></div>
<div class="block-footer hide">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
',
      ),
    ),
    'shareaction' => 
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
<a class="rowaction" {{#if def.href}}href="{{def.href}}"{{else}}data-event="true" href="javascript:void(0);"{{/if}}
{{#if def.tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str def.tooltip module}}"
{{/if}}
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{str label}}</a>
',
      ),
    ),
    'change-password' => 
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
{{#each value}}*{{/each}}
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
    <input type="password" name="current_password" value="{{value}}" class="inherit-width" disabled>
{{#if showPasswordFields}}
    <input type="password" name="new_password" value="{{newPassword}}" placeholder="{{str "LBL_NEW_PASSWORD1" module}}" class="inherit-width">
    <input type="password" name="confirm_password" value="{{confirmPassword}}" placeholder="{{str "LBL_NEW_PASSWORD2" module}}" class="inherit-width">
    <p class="help-block"></p>
{{else}}
    <a class="togglePasswordFields" href="javascript:void(0)">{{str "LBL_CHANGE_PASSWORD"}}</a>
{{/if}}
',
      ),
    ),
    'int' => 
    array (
    ),
    'overdue-badge' => 
    array (
      'templates' => 
      array (
        'detail' => '{{!--
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
--}}
{{#if this.model.attributes.overdue}}
    <span class="label label-important">{{str "LBL_OVERDUE" this.module}}</span>
{{/if}}
',
      ),
    ),
    'label' => 
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
{{str def.default_value}}',
      ),
    ),
    'datetimecombo' => 
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
{{#if dateValue}}
    {{#if timeValue}}
        <div class="ellipsis_inline" data-placement="bottom" title="{{dateValue}} {{timeValue}}">
            {{dateValue}} {{timeValue}}
        </div>
    {{/if}}
{{/if}}
',
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
{{dateValue}} {{timeValue}}
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
<div class="input-append date" rel="datepicker">
    <input type="text" class="datepicker" value="{{dateValue}}" rel="datepicker">
    <span class="add-on"><i class="icon-calendar"></i></span>
    <input type="text" class="ui-timepicker-input" value="{{timeValue}}" rel="timepicker" autocomplete="off">
    <span class="add-on"><i class="icon-time"></i></span>
</div>
',
      ),
    ),
    'sticky-rowaction' => 
    array (
    ),
    'fieldset-with-labels' => 
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
{{#with def}}
    {{#each fields}}
        <span class="record-cell" data-name="{{name}}" data-type="{{type}}">
            {{#unless ../dismiss_label}}
            <div class="record-label" data-name="{{name}}">{{str label ../../../module}}</div>
            {{/unless}}
            <span data-fieldname="{{name}}">
                {{field ../../view model=../../model template=../../options.viewName}}
            </span>
        </span>
    {{/each}}
{{/with}}
',
        'preview' => '{{!
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
{{#with def}}
    {{#each fields}}
        <span class="record-cell" data-name="{{name}}" data-type="{{type}}">
            <span data-fieldname="{{name}}">
                {{field ../../view model=../../model template=../../options.viewName}}
            </span>
        </span>
    {{/each}}
{{/with}}
',
      ),
    ),
    'editablelistbutton' => 
    array (
    ),
    'actiondropdown' => 
    array (
    ),
    'follow' => 
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
<a href="javascript:void(0);" class="rowaction" data-event="{{def.event}}" name="{{def.name}}">{{label}}</a>
',
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
{{#if model.id}}
    <a href="javascript:void(0);" class="label{{#if value}} label-success{{/if}}" data-hover="true" data-event="list:follow:fire">{{label}}</a>
{{/if}}
',
      ),
    ),
    'fieldset' => 
    array (
    ),
    'selection' => 
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
<input name="{{name}}" id="{{name}}_{{this.model.id}}" class="selection" type="radio">
',
      ),
    ),
    'name' => 
    array (
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
{{#if value}}
<div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
    {{#if def.link}}<a href="{{#if def.events}}javascript:void(0);{{else}}{{href}}{{/if}}">{{value}}</a>{{else}}{{value}}{{/if}}
</div>
{{/if}}

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
    ),
    'pdfaction' => 
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
<a class="rowaction" href="javascript:void(0);"
   data-action="link"
    {{#if def.tooltip}}
   rel="tooltip"
   data-container="body"
   data-placement="bottom"
   data-original-title="{{str def.tooltip module}}"
    {{/if}}
   name="{{name}}">
    {{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{str label}}</a>
{{#if fetchCalled}}
    {{#if templateCollection.length}}
        <ul class="dropdown-inset">
            {{#each templateCollection.models}}
                <li>
                    <a href="javascript:void(0);" data-action="{{../../../def.action}}" data-id="{{attributes.id}}">{{attributes.name}}</a>
                </li>
            {{/each}}
        </ul>
    {{else}}
        <ul class="dropdown-inset">
            <li>
                {{#if templateCollection.dataFetched}}
                    <a href="javascript:void(0);" class="disabled"><em>{{str "LBL_NO_PDF_TEMPLATE" this.module}}</em></a>
                {{else}}
                    <div class="alert-process">
                        <strong>{{str "LBL_PORTAL_LOADING"}}</strong>
                        <div class="loading">
                            <span class="l1"></span><span class="l2"></span><span class="l3"></span>
                        </div>
                    </div>
                {{/if}}
            </li>
        </ul>
    {{/if}}
{{/if}}
',
      ),
    ),
    'bool' => 
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
<input type="checkbox" class="checkbox"{{#if value}} checked{{/if}} disabled>',
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
<input type="checkbox" class="checkbox"{{#if value}} checked{{/if}} disabled>',
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
{{#if def.text}}
    <label><input type="checkbox" class="checkbox"{{#if value}} checked{{/if}}> {{str def.text this.module}}</label>
{{else}}
    <input type="checkbox" class="checkbox"{{#if value}} checked{{/if}}>
{{/if}}',
      ),
    ),
    'email-text' => 
    array (
    ),
    'range' => 
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
<div class="noUiSliderEnds">
    <div class="rangeSlider noUiSlider"></div>
</div>',
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
<div class="noUiSliderEnds">
    <div class="rangeSlider noUiSlider"></div>
</div>',
      ),
    ),
    'actionslink' => 
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
<div class="btn-group hide" data-toggle="buttons-checkbox">
    <a href="#{{buildRoute model=model}}" class="btn btn-mini"><i class="icon-list-alt"></i></a>
    <a href="#{{buildRoute model=model action="edit"}}" class="btn btn-mini"><i class="icon-pencil"></i></a>
    <a href="#{{buildRoute model=model action="delete"}}" class="btn btn-mini"><i class="icon-trash"></i></a>
</div>',
      ),
    ),
    'htmleditable_tinymce' => 
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
<iframe class="htmleditable" frameborder="0"></iframe>
',
        'default' => '{{!
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
<iframe class="htmleditable {{#if this.options.def.span}}span{{this.options.def.span}}{{/if}}" frameborder="0"></iframe>
',
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
<iframe class="htmleditable {{#if this.options.def.span}}span{{this.options.def.span}}{{/if}}" frameborder="0"></iframe>
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
<textarea class="htmleditable"></textarea>
',
      ),
    ),
    'textarea' => 
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
<div class="ellipsis_inline" data-placement="bottom" title="{{value}}">{{value}}</div>
',
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
{{nl2br value}}{{#if isTooLong}}<a href="javascript:void(0)" class="show-more-text"></a>{{/if}}
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
        <textarea rows="{{def.rows}}" cols="{{def.cols}}" name="{{name}}"
                  class="input-xlarge wide tleft">{{value}}</textarea>
        <p class="help-block"></p>
',
      ),
    ),
    'fullname' => 
    array (
      'templates' => 
      array (
        'record-detail' => '{{!
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
<span class="record-cell" data-name="{{name}}" data-type="{{type}}">
    {{#unless def.dismiss_label}}
        <div class="record-label" data-name="{{name}}">{{str label ../module}}</div>
    {{/unless}}
    <span class="ellipsis_inline" rel="tooltip" title="{{value}}" data-placement="bottom" data-fieldname="{{name}}">
        {{value}}
    </span>
</span>
',
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
<div class="ellipsis_inline"{{#if value}} data-placement="bottom" title="{{value}}"{{/if}}>
    {{#if def.link}}<a href="#{{buildRoute model=model}}">{{value}}</a>{{else}}{{value}}{{/if}}
</div>
',
        'recordlist-edit' => '{{!
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
{{#with def}}
    {{#each fields}}
        <span class="edit-cell" data-name="{{name}}" data-type="{{type}}">
            {{field ../../view model=../../model template=../../options.viewName parent=../../this}}
        </span>
    {{/each}}
{{/with}}
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
{{#with def}}
    {{#each fields}}
        <span class="record-cell" data-name="{{name}}" data-type="{{type}}">
            {{#unless dismiss_label}}
                <div class="record-label" data-name="{{name}}">{{str label ../../../module}}</div>
            {{/unless}}
            <span data-fieldname="{{name}}">
                {{field ../../view model=../../model template=../../options.viewName parent=../../this}}
            </span>
        </span>
    {{/each}}
{{/with}}
',
      ),
    ),
    'relate' => 
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
<div class="ellipsis_inline" data-placement="bottom" data-container="body"
     title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}">
    {{# if href}}
        <a href="{{href}}">{{value}}</a>
    {{else}}
        {{value}}
    {{/if}}
</div>
',
        'noaccess' => '{{!
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
<span class="label">{{str "LBL_NO_FIELD_ACCESS" this.module}}</span>
',
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
{{#if href}}<a class="ellipsis_inline" data-placement="bottom" title="{{value}}" href="{{href}}">{{value}}</a>{{else}}{{value}}{{/if}}
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
{{#each selectOptions}}
    <option value="{{getFieldValue this "id"}}" {{#eq @index 0}}selected="selected"{{/eq}}>{{getFieldValue this "name"}}</option>
{{/each}}
{{#eq selectOptions.length 0}}
    <option data-empty="true">{{str "MSG_LIST_VIEW_NO_RESULTS_BASIC"}}</option>
{{/eq}}
<option data-searchmore="true" value="{{str "LBL_SEARCH_FOR_MORE"}}" class="more">{{str "LBL_SEARCH_FOR_MORE"}}</option>',
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
<input type="hidden" name="{{name}}" class="select2 inherit-width" value="{{value}}" data-id="{{getFieldValue this.model this.def.id_name}}">
',
      ),
    ),
    'hr' => 
    array (
      'templates' => 
      array (
        'default' => '{{!
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
<hr>
',
      ),
    ),
    'file' => 
    array (
      'templates' => 
      array (
        'merge-duplicates-edit' => '{{!
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
}}
{{#if value}}
    {{#with value}}
        <div class="ellipsis_inline"
             data-placement="bottom"
             data-container="body"
             data-original-title="{{name}}">
            {{name}}
        </div>
    {{/with}}
{{/if}}
',
        'list' => '{{!
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
{{#if value}}
    {{#with value}}
        {{#notEq mimeType \'image\'}}
            <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="javascript:void(0);" data-url="{{url}}" data-action="download">{{name}}</a>
        {{/notEq}}
        {{#eq mimeType \'image\'}}
            <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="{{url}}" target="_blank">{{name}}</a>
        {{/eq}}
    {{/with}}
{{/if}}
',
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
{{#each value}}
    {{#eq mimeType \'image\'}}
        <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="{{url}}" target="_blank">{{name}}</a>
    {{/eq}}
    {{#notEq mimeType \'image\'}}
        <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="javascript:void(0);" data-url="{{url}}" data-action="download">{{name}}</a>
    {{/notEq}}
{{/each}}
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
{{#if value.length}}
    {{#each value}}
        <div class="row-fluid file-field">
            {{#eq mimeType \'image\'}}
                <a class="span10 ellipsis_inline" data-placement="bottom" title="{{name}}" href="{{url}}" target="_blank">{{name}}</a>
            {{/eq}}
            {{#notEq mimeType \'image\'}}
                <a class="span10 ellipsis_inline" data-placement="bottom" title="{{name}}" href="javascript:void(0);" data-url="{{url}}" data-action="download">{{name}}</a>
            {{/notEq}}
            <button class="btn icon-remove-sign" data-action="delete"></button>
        </div>
    {{/each}}
{{else}}
    <input type="file" name="{{name}}" />
{{/if}}
<p class="help-block"></p>
',
        'merge-duplicates-list' => '{{!
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
}}
{{#if value}}
    {{#with value}}
        <div class="ellipsis_inline"
             data-placement="bottom"
             data-container="body"
             data-original-title="{{name}}">
            {{name}}
        </div>
    {{/with}}
{{/if}}
',
      ),
    ),
    'copy' => 
    array (
      'templates' => 
      array (
        'detail' => '',
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
{{#if def.sync}}
<label><input type="checkbox"{{#if value}} checked{{/if}}/>{{label}}</label>
{{else}}
<button type="button" class="btn">{{label}}</button>
{{/if}}
<p class="help-block"></p>
',
        'disabled' => '{{!
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
{{#if def.sync}}
    <label><input type="checkbox"{{#if value}} checked{{/if}} disabled="disabled"/>{{label}}</label>
{{else}}
    <button type="button" class="btn" disabled="disabled">{{label}}</button>
{{/if}}
<p class="help-block"></p>
',
      ),
    ),
    'iframe' => 
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
{{#if value}}<iframe src="{{value}}" height="{{def.height}}" width="100%"></iframe>{{/if}}
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
{{#if def.gen}}
    {{! Render nothing since URL is generated }}
{{else}}
<input type="text" name="{{name}}" value="{{value}}"{{#if def.len}} maxlength="{{def.len}}"{{/if}}{{#if def.placeholder}} placeholder=\'{{str def.placeholder this.model.module}}\'{{/if}} class="input-large">
<p class="help-block"></p>
{{/if}}',
      ),
    ),
    'base' => 
    array (
      'templates' => 
      array (
        'table' => '{{!
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
{{#if def.link}}<a href="#{{href}}">{{value}}</a>{{else}}{{value}}{{/if}}
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
<div class="ellipsis_inline" data-placement="bottom" title="{{#unless value}}{{#if def.placeholder}}{{str def.placeholder this.model.module}}{{/if}}{{/unless}}{{value}}" >
    {{#if def.link}}<a href="{{#if def.events}}javascript:void(0);{{else}}{{href}}{{/if}}">{{value}}</a>{{else}}{{value}}{{/if}}
    </div>',
        'noaccess' => '{{!
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
<span class="label">{{str "LBL_NO_FIELD_ACCESS" this.module}}</span>
{{#if def.link}}
    <a href="{{href}}"
       class="btn btn-invisible btn-link"
       rel="tooltip"
       data-placement="bottom"
       title="{{str \'LBL_FOLLOW_LINK\' this.module}}">
        <i class="icon-link"></i>
    </a>
{{/if}}
',
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
{{#if value}}
<div class="ellipsis_inline" data-placement="bottom" title="{{value}}">
    {{value}}
</div>
{{/if}}',
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
        'nodata' => '{{!
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
{{str "LBL_NO_DATA" this.model.module}}
',
        'modal' => '{{!
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
<input type="text" class="center" value="{{value}}" placeholder="{{label}}">
<p class="help-block"></p>
',
        'disabled' => '{{!
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
        <input type="text" name="{{name}}" value="{{value}}"{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}} class="inherit-width" disabled>
        <p class="help-block"></p>
',
        'list-header' => '{{!
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
{{str label module}}',
      ),
    ),
    'favorite' => 
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
<i class="icon-favorite{{#if value}} active{{/if}}" rel="tooltip" title="{{str \'LBL_FAVORITE\' this.module}}"></i>
',
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
<i class="icon-favorite{{#if value}} active{{/if}}" rel="tooltip" title="{{str \'LBL_FAVORITE\' this.module}}" data-placement="bottom"></i>
',
        'edit' => '',
      ),
    ),
    'sugar-cube' => 
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
<svg class="sugar-cube{{#if spin}} icon-spin{{/if}}" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512">
    <g class="sides">
        <path class="sc-top" d="M272.24,175c-10.35,4.079-27.267,4.079-37.579,0L48.178,101.127c-10.326-4.093-10.326-10.782,0-14.877 l186.483-73.841c10.312-4.097,27.229-4.097,37.579,0L458.712,86.25c10.325,4.096,10.325,10.784,0,14.877L272.24,175z"></path>
        <path class="sc-left" d="M243.068,477.624c0,11.132-8.449,16.852-18.79,12.792L37.797,416.574 c-10.327-4.096-18.789-16.508-18.789-27.649V129.978c0-11.091,8.462-16.847,18.789-12.759l186.482,73.863 c10.34,4.074,18.79,16.518,18.79,27.646V477.624z"></path>
        <path class="sc-right" d="M263.78,477.55c0,11.132,8.46,16.841,18.812,12.783l186.465-73.851c10.336-4.099,18.79-16.547,18.79-27.642 V129.918c0-11.119-8.454-16.885-18.79-12.784l-186.465,73.836c-10.352,4.103-18.812,16.551-18.812,27.646V477.55z"></path>
    </g>
</svg>
',
      ),
    ),
    'radioenum' => 
    array (
      'templates' => 
      array (
        'list' => '{{!
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
}}
{{#eachOptions items}}
{{#has this.key ../value}}{{value}}{{/has}}
{{/eachOptions}}
',
        'detail' => '{{!
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
}}
{{#eachOptions items}}
{{#has this.key ../value}}{{value}}{{/has}}
{{/eachOptions}}
',
        'list-edit' => '{{!
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
<input type="hidden" name="{{name}}">
<p class="help-block"></p>
',
        'edit' => '{{!
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
}}
        {{#eachOptions items}}
        <p><label><input type="radio" name="{{../name}}" value="{{key}}" {{#eq key ../value}}checked{{/eq}}> {{value}}</label></p>
        {{/eachOptions}}
        <p class="help-block"></p>
',
      ),
    ),
    'button' => 
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
<a class="btn{{#if def.primary}} btn-primary{{/if}}"
   href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"

   {{#if def.tooltip}}
      rel="tooltip"
      data-placement="bottom"
      title="{{str def.tooltip module}}"
   {{/if}}

   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>

',
        'list-bottom' => '{{!
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
<a class="btn{{#if def.primary}} btn-primary{{/if}}"
   href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>
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
<a class="btn{{#if def.primary}} btn-primary{{/if}}"
   href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>
',
        'modal' => '{{!
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
<a class="btn{{#if def.primary}} btn-primary{{/if}}"
   href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>
',
        'modal-header' => '{{!
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
<a href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}"
   title="{{def.label}}">
{{#if def.icon}}<i class="{{def.icon}} icon-sm"></i> {{/if}}{{label}}</a>
',
        'list-header' => '{{!
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
<a href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i> {{/if}}{{label}}</a>
',
      ),
    ),
    'badge' => 
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
{{#if this.model.id}}
{{#eq this.model.attributes.quote_id ""}}<span class="label">{{str "LBL_NOT_QUOTED" this.module}}</span>{{/eq}}
{{#notEq this.model.attributes.quote_id ""}}<span class="label label-success">{{str "LBL_QUOTED" this.module}}</span>{{/notEq}}
{{/if}}
',
      ),
    ),
    'dashletaction' => 
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
<a href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
{{#if def.action}}
   data-dashletaction="{{def.action}}"
{{/if}}
    {{#if def.tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str def.tooltip module}}"
    {{/if}}
   name="{{name}}">
    {{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{str label}}</a>
',
      ),
    ),
    'password' => 
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
<input type="password" class="input-xlarge" id="" value="{{value}}" disabled>',
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
<input type="password" name="{{name}}" value="{{value}}"{{#if def.placeholder}} placeholder="{{str def.placeholder this.model.module}}"{{/if}}>
<p class="help-block"></p>
',
      ),
    ),
    'quickcreate' => 
    array (
      'templates' => 
      array (
        'quickcreate' => '{{!
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
<a class="actionLink" data-module="{{def.module}}" data-layout="{{def.layout}}" {{#if def.href}}href="{{def.href}}"{{else}}data-event="true" href="javascript:void(0);"{{/if}}>{{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{label}}</a>
',
      ),
    ),
    'invitation-actions' => 
    array (
      'templates' => 
      array (
        'edit' => '{{!--
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
--}}
<div class="btn-group" data-record-id="{{getFieldValue this.model \'id\'}}" data-toggle="buttons-radio">
    <button type="button" class="{{#eq value \'accept\'}}active {{/eq}}btn" data-action="accept"
            rel="tooltip" data-container="body"
            data-original-title="{{getDDLabel \'accept\' def.options}}"><i class="icon-ok-sign"></i></button>
    <button type="button" class="{{#eq value \'tentative\'}}active {{/eq}}btn" data-action="tentative"
            rel="tooltip" data-container="body"
            data-original-title="{{getDDLabel \'tentative\' def.options}}"><i class="icon-question-sign"></i></button>
    <button type="button" class="{{#eq value \'decline\'}}active {{/eq}}btn" data-action="decline"
            rel="tooltip" data-container="body"
            data-original-title="{{getDDLabel \'decline\' def.options}}"><i class="icon-ban-circle"></i></button>
</div>
',
      ),
    ),
    'attachments' => 
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
<input type="hidden" class="attachments select2 select2-choices-pills-close" value="">
<input type="file" name="email_attachment" class="fileinput hidden">
',
      ),
    ),
    'rowaction' => 
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
<a class="rowaction" href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
{{#if def.event}}
   data-event="{{def.event}}"
{{/if}}
{{#if def.tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str def.tooltip module}}"
{{/if}}
   name="{{name}}">
    {{#if def.tooltip}}
        {{#if def.icon}}
            <i class="{{def.icon}}"></i>
        {{/if}}
    {{/if}}
    {{str label}}
</a>
',
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
<a class="rowaction" href="{{#if fullRoute}}#{{fullRoute}}{{else}}{{#if def.route}}#{{buildRoute context=context model=model action=def.route.action}}{{else}}javascript:void(0);{{/if}}{{/if}}"
{{#if def.event}}
   data-event="{{def.event}}"
{{/if}}
{{#if def.tooltip}}
   rel="tooltip"
   data-placement="bottom"
   title="{{str def.tooltip module}}"
{{/if}}
   name="{{name}}">
{{#if def.icon}}<i class="{{def.icon}}"></i>{{/if}}{{str label}}</a>
',
      ),
    ),
    'link-action' => 
    array (
    ),
    'image' => 
    array (
      'templates' => 
      array (
        'list' => '{{!
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
}}
<div class="image_field image_detail hide">
    <div class="image_preview">
        <img src="{{value}}" />
    </div>
</div>
',
        'detail' => '{{!
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
}}
<div class="image_field image_detail hide">
    <div class="image_preview">
        <img src="{{value}}" />
    </div>
</div>
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
<div class="image_field image_edit hide">
    <label>
        <span class="image_input"><input type="file" name="{{name}}"></span>
        <span class="image_btn image_btn_label">{{str "LBL_EDIT_BUTTON"}}</span>
        <span class="image_preview">{{#if value}}<img src="{{value}}">{{else}}<i class="icon-plus"></i>{{/if}}</span>
    </label>
</div>
<p class="help-block"></p>',
      ),
    ),
    '_hash' => 'c88835f95adfde260e6fd5747a8cf0ae',
  ),
  'views' => 
  array (
    'wizard-page' => 
    array (
      'templates' => 
      array (
        'wizard-page' => '{{!
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
{{> wizard-page.header }}
        <!-- Hack: Adding .record here since .record .record-cell contain styles we need :( -->
        <div class="modal-body record">
            {{#each meta.panels}}
                {{#each grid}}
                    <div class="row-fluid {{../name}}{{#if ../hide}} hide{{/if}}">
                        {{#each this}}
                            <div class="span{{span}} record-cell{{#if cell_css_class}} {{cell_css_class}}{{/if}}" data-type="{{type}}" data-name="{{name}}">
                                <div class="record-label" data-type="{{type}}" data-name="{{name}}">{{#if label}}{{str label module}}{{/if}}</div>
                                <span class="normal{{#if css}} {{css}}{{/if}}" data-fieldname="{{name}}">
                                    {{field ../../../this model=../../../model template="edit"}}
                                </span>
                            </div>
                        {{/each}}
                    </div>
                {{/each}}
            {{/each}}
        </div>
{{> wizard-page.footer }}
',
        'header' => '{{!
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
<div class="welcome">
    <div class="thumbnail modal">
        <div class="modal-header modal-header-firstlogin">
            <div class="row-fluid">
                <div class="span1">
                    <span class="pull-left step-circle">
                        {{#if wizardCompleted}}<i class="icon-ok-sign"></i>{{/if}}
                        {{#unless wizardCompleted}}<span>{{progress.page}}</span>{{/unless}}
                    </span>
                </div>
                <div class="span6 firstlogin-title">
                    <h3>{{str meta.title module}}</h3>
                    <span>{{str meta.message module}}</span>
                </div>
                <div class="span5 progress-section">
                    <span>{{str "LBL_SETUP_PROGRESS" module}}</span>
                    <div class="progress progress-success">
                        <div class="bar" style="width: {{percentComplete}}%;"></div>
                    </div>
                </div>
            </div>
        </div>
    {{! This is a partial, the close for the .modal div is in the footer partial}}
',
        'footer' => '{{!
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

{{! This is a partial, open tags for last 2 divs are in header}}
        <div class="modal-footer">
            {{#each meta.buttons}}
                {{field ../this model=../model template="edit"}}
            {{/each}}
        </div>
    </div>
</div>

',
      ),
    ),
    'activitystream' => 
    array (
      'templates' => 
      array (
        'richEmbed' => '{{!
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
{{{html}}}
',
        'comment' => '{{!
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
<li class="comment">
    <a href="#{{buildRoute module=\'Users\' id=created_by}}" id="avatar-comment-{{id}}" class="pull-left avatar" rel="tooltip" data-placement="right" title="{{created_by_name}}">
        {{#if picture_url}}
            <img src="{{picture_url}}" alt="{{created_by_name}}">
        {{else}}
            <i class="icon-user"></i>
        {{/if}}
    </a>
    <p>
        <span class="tagged">{{{str "TPL_COMMENT" "Activities" data}}}</span>
        <br />
        <date class="date"><a href="#{{buildRoute module=\'Users\' id=created_by}}">{{created_by_name}}</a> {{timeago date_modified "LBL_TIME_RELATIVE_ACTIVITIES"}}</date>
    </p>
</li>
',
        'activitystream' => '{{!
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
{{#eq model.attributes.activity_type "post"}}
    <a href="#{{buildRoute module=\'Users\' id=model.attributes.created_by}}" id="avatar-post-{{model.attributes.id}}" class="pull-left avatar" rel="tooltip" data-title="{{model.attributes.created_by_name}}" data-placement="right">
        {{#if model.attributes.picture_url}}
            <img src="{{model.attributes.picture_url}}" alt="{{model.attributes.created_by_name}}">
        {{else}}
            <i class="icon-user" alt="{{model.attributes.created_by_name}}"></i>
        {{/if}}
    </a>
{{else}}
    <div class="label label-module label-{{model.attributes.display_parent_type}} pull-left" rel="tooltip" data-placement="right" title="{{moduleIconToolTip model.attributes.display_parent_type}}">
        {{moduleIconLabel model.attributes.display_parent_type}}
    </div>
{{/eq}}
<p>
    {{#if tpl}}
        <div><span class="tagged">{{{str tpl "Activities" model.attributes.data}}}</span></div>
    {{/if}}
    {{#if embeds}}
        <div class="embed">
            {{#each embeds}}
                <div>{{{this}}}</div>
            {{/each}}
        </div>
    {{/if}}
</p>
<span class="details">
    <a href="#{{buildRoute module="Employees" id=this.attributes.created_by}}">{{model.attributes.created_by_name}}</a> <date class="date"> {{timeago model.attributes.date_entered "LBL_TIME_RELATIVE_ACTIVITIES"}}
    </date>
</span>
<ul class="comments">
    {{#if model.attributes.comment_count}}
        {{#each model.attributes.comments.models}}
            {{#with attributes}}
                {{{subViewTemplate "activitystream.comment" this}}}
            {{/with}}
        {{/each}}
        {{#if remaining_comments}}
            <li class="comment more-comments">
                <a class="more">
                    {{str more_tpl "Activities" remaining_comments}}
                </a>
            </li>
        {{/if}}
    {{/if}}
    {{#unless readonly}}
        <li class="comment reply-area hide">
            <div class="reply-input">
                <div data-placeholder="{{str "LBL_ACTIVITYSTREAM_COMMENT_PLACEHOLDER"}}" class="reply taggable" contenteditable="true"></div>
                <button class="btn btn-primary reply-btn">{{str "LBL_EMAIL_REPLY"}}</button>
            </div>
        </li>
    {{/unless}}
</ul>
{{#unless readonly}}
    <div class="actions btn-group">
        <a class="btn btn-mini comment-btn" rel="tooltip" title="{{str \'LBL_COMMENT\'}}">
            <i class="icon-comment"></i>
        </a>
        <a class="btn btn-mini preview-btn {{#unless preview.enabled}}disabled{{/unless}}" rel="tooltip" title="{{str preview.label}}" data-module="{{model.attributes.display_parent_type}}" data-id="{{model.attributes.display_parent_id}}">
            <i class="icon-eye-open"></i>
        </a>
    </div>
{{/unless}}
',
        'imageEmbed' => '{{!
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
<img src="{{src}}" />
',
        'videoEmbed' => '{{!
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
{{{html}}}
',
      ),
    ),
    'dashletconfiguration-edit' => 
    array (
      'templates' => 
      array (
        'dashletconfiguration-edit' => '{{!
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
<div>
    {{#if model.isNotEmpty}}
        <div class="record">
            {{#each meta.panels}}
                {{#unless header}}
                    {{#if ../labelsOnTop}}
                        {{#each grid}}
                            <div class="row-fluid {{../name}}{{#if ../hide}} hide{{/if}}">
                                {{#each this}}
                                    <div class="span{{span}} record-cell{{#if cell_css_class}} {{cell_css_class}}{{/if}}" data-type="{{type}}" data-name="{{name}}">
                                        {{#if ../../labels}}
                                            {{#unless dismiss_label}}
                                                <div class="record-label" data-name="{{name}}">{{#if label}}{{str label ../../../../../../../../module}}{{/if}}</div>
                                            {{/unless}}
                                        {{/if}}
                                        {{#if name}}
                                            <span class="normal{{#if css}} {{css}}{{/if}} index{{index}}" data-fieldname="{{name}}" data-index="{{index}}">
                                                {{field ../../../../../../this model=../../../../../../settings template=../../../../../../action}}
                                            </span>
                                        {{/if}}
                                        {{#unless ../../../../../../createMode}}
                                            {{#notHas name ../../../../../../../noEditFields}}
                                                <span class="record-edit-link-wrapper" data-name="{{name}}">
                                                    <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                                </span>
                                            {{/notHas}}
                                        {{/unless}}
                                    </div>
                                {{/each}}
                            </div>
                        {{/each}}
                    {{else}}
                        <div class="form-horizontal">
                            <fieldset class="card2">
                                {{#each grid}}
                                    <div class="row-fluid control-group {{../name}}{{#if ../hide}} hide{{/if}}">
                                        {{#each this}}
                                            {{#if ../../labels}}
                                                {{#unless dismiss_label}}
                                                    <div class="control-label span{{labelSpan}} {{label_css_class}}">
                                                        <div class="control-label-background span{{labelSpan}}">
                                                            <label class="tright record-label" data-name="{{name}}">{{str label ../../../../../../../module}}</label>
                                                        </div>
                                                    </div>
                                                {{/unless}}
                                            {{/if}}
                                            <div class="controls span{{span}} record-cell {{cell_css_class}}" data-type="{{type}}" data-name="{{name}}">
                                                {{#if name}}
                                                    <span class="normal{{#if css}} {{css}}{{/if}} index{{index}}" data-fieldname="{{name}}" data-index="{{index}}">
                                                        {{field ../../../../../../this model=../../../../../../settings template=../../../../../../action}}
                                                    </span>
                                                {{/if}}
                                                {{#unless ../../../../../../createMode}}
                                                    {{#notHas name ../../../../../../../noEditFields}}
                                                        <span class="record-edit-link-wrapper" data-name="{{name}}">
                                                            <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                                        </span>
                                                    {{/notHas}}
                                                {{/unless}}
                                            </div>
                                        {{/each}}
                                    </div>
                                {{/each}}
                            </fieldset>
                        </div>
                    {{/if}}
                {{/unless}}
            {{/each}}
        </div>
    {{/if}}
</div>
',
      ),
    ),
    'active-tasks' => 
    array (
      'templates' => 
      array (
        'records' => '{{!
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
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed">
            {{#each collection.models}}
                <li>
                    <p>
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar42" data-title="{{getFieldValue this "assigned_user_name"}}">
                                <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                            </a>
                        {{else}}
                            <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
                        {{/if}}
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                    {{#if ../overdueBadge}}
                        {{#with ../../overdueBadge}}
                            {{field ../../../this model=../../this template=\'detail\'}}
                        {{/with}}
                    {{/if}}
                    <span class="details">
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">
                                {{getFieldValue this "assigned_user_name"}}
                            </a>
                        {{else}}
                            {{str "LBL_UNASSIGNED" this.module}}
                        {{/if}}
                        &#44;&nbsp;
                        <date class="date">{{timeago attributes.record_date "TPL_TABBED_DASHLET_TIME_RELATIVE"}}</date>
                     </span>
                </li>
            {{/each}}
            {{#notEq ../collection.next_offset "-1"}}
                <li><a class="more" data-action="show-more">{{str "LBL_SHOW_MORE_MODULE" this.module}}</a></li>
            {{/notEq}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_ACTIVE_TASKS_DASHLET',
            'description' => 'LBL_ACTIVE_TASKS_DASHLET_DESCRIPTION',
            'config' => 
            array (
              'limit' => 10,
              'visibility' => 'user',
            ),
            'preview' => 
            array (
              'limit' => 10,
              'visibility' => 'user',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Bugs',
                2 => 'Cases',
                3 => 'Contacts',
                4 => 'Home',
                5 => 'Leads',
                6 => 'Opportunities',
                7 => 'Prospects',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'no_default_action' => true,
              'icon' => 'icon-plus',
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'module' => 'Tasks',
                    'link' => 'tasks',
                  ),
                  'label' => 'LBL_CREATE_TASK',
                  'acl_action' => 'create',
                  'acl_module' => 'Tasks',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'tasks_visibility_options',
              ),
              1 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'tasks_limit_options',
              ),
            ),
          ),
        ),
        'tabs' => 
        array (
          0 => 
          array (
            'active' => true,
            'filters' => 
            array (
              'status' => 
              array (
                '$not_in' => 
                array (
                  0 => 'Completed',
                  1 => 'Deferred',
                ),
              ),
              'date_due' => 
              array (
                '$lte' => 'today',
              ),
            ),
            'label' => 'LBL_ACTIVE_TASKS_DASHLET_DUE_NOW',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_due:asc',
            'record_date' => 'date_due',
            'overdue_badge' => 
            array (
              'name' => 'date_due',
              'type' => 'overdue-badge',
            ),
          ),
          1 => 
          array (
            'filters' => 
            array (
              'status' => 
              array (
                '$not_in' => 
                array (
                  0 => 'Completed',
                  1 => 'Deferred',
                ),
              ),
              'date_due' => 
              array (
                '$gt' => 'today',
              ),
            ),
            'label' => 'LBL_ACTIVE_TASKS_DASHLET_UPCOMING',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_due:asc',
            'record_date' => 'date_due',
          ),
          2 => 
          array (
            'filters' => 
            array (
              'status' => 
              array (
                '$not_in' => 
                array (
                  0 => 'Completed',
                  1 => 'Deferred',
                ),
              ),
              'date_due' => 
              array (
                '$is_null' => '',
              ),
            ),
            'label' => 'LBL_ACTIVE_TASKS_DASHLET_TODO',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_entered:asc',
          ),
        ),
      ),
    ),
    'tutorial' => 
    array (
      'templates' => 
      array (
        'tutorial' => '{{!
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
<div id="tutorial" style="display:none">
    <div id="mask" class="mask"></div>
    <div id="tutorial-content"></div>
    <div id="tutorial-controls">
        <div class="btn-group">
            <a title="Back" href="#" class="btn btn-inverse back-btn disabled" track="click:tutorial_back"><i class=" icon-chevron-left"></i></a>
            <a title="Done" href="#" class="btn btn-inverse done-btn" track="click:tutorial_done"><span>{{str "LBL_DONE_BUTTON_LABEL"}}</span></a>
            <a title="Next" href="#" class="btn btn-inverse next-btn" track="click:tutorial_forward"><i class=" icon-chevron-right"></i></a>
        </div>
    </div>
</div>',
      ),
      'meta' => 
      array (
        'records' => 
        array (
          'version' => 1,
          'intro' => 'LBL_TOUR_LIST_INTRO',
          'content' => 
          array (
            0 => 
            array (
              'name' => '.drawerTrig',
              'text' => 'LBL_TOUR_LIST_INT_TOGGLE',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            1 => 
            array (
              'name' => '.choice-related',
              'text' => 'LBL_TOUR_LIST_FILTER1',
              'full' => true,
              'vertAdj' => -15,
            ),
            2 => 
            array (
              'name' => '.choice-filter',
              'text' => 'LBL_TOUR_LIST_FILTER2',
              'full' => true,
              'vertAdj' => -15,
            ),
            3 => 
            array (
              'name' => '.filter-view .search-name',
              'text' => 'LBL_TOUR_LIST_FILTER_SEARCH',
              'full' => true,
              'vertAdj' => -15,
            ),
            4 => 
            array (
              'name' => '[data-view="activitystream"]',
              'text' => 'LBL_TOUR_LIST_ACTIVTYSTREAMLIST_TOGGLE',
              'full' => true,
              'horizAdj' => 5,
              'vertAdj' => -10,
            ),
            5 => 
            array (
              'name' => '[data-event="list:preview:fire"]',
              'text' => 'LBL_TOUR_LIST_FILTER_PREVIEW',
              'full' => true,
              'vertAdj' => -15,
            ),
          ),
        ),
        'record' => 
        array (
          'version' => 1,
          'intro' => 'LBL_TOUR_RECORD_INTRO',
          'content' => 
          array (
            0 => 
            array (
              'name' => '[data-fieldname="first_name"]',
              'text' => 'LBL_TOUR_RECORD_INLINEEDIT',
              'full' => true,
              'horizAdj' => -15,
              'vertAdj' => -13,
            ),
            1 => 
            array (
              'name' => '[data-fieldname="name"]',
              'text' => 'LBL_TOUR_RECORD_INLINEEDIT',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            2 => 
            array (
              'name' => '[name="edit_button"]',
              'text' => 'LBL_TOUR_RECORD_ACTIONS',
              'full' => true,
              'horizAdj' => -1,
              'vertAdj' => -13,
            ),
            3 => 
            array (
              'name' => '.record .record-cell',
              'text' => 'LBL_TOUR_RECORD_INLINEEDITRECORD',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            4 => 
            array (
              'name' => '.show-hide-toggle',
              'text' => 'LBL_TOUR_RECORD_SHOWMORE',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            5 => 
            array (
              'name' => '[data-view="subpanel"]',
              'text' => 'LBL_TOUR_RECORD_TOGGLEACTIVITIES',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            6 => 
            array (
              'name' => '.preview-headerbar .dropdown-toggle',
              'text' => 'LBL_TOUR_RECORD_DASHBOARDNAME',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            7 => 
            array (
              'name' => '.preview-headerbar .btn-toolbar',
              'text' => 'LBL_TOUR_RECORD_DASHBOARDACTIONS',
              'full' => true,
              'horizAdj' => -11,
              'vertAdj' => -13,
            ),
            8 => 
            array (
              'name' => '.dashlet-cell .icon-cog',
              'text' => 'LBL_TOUR_RECORD_DASHLETCOG',
              'full' => true,
              'horizAdj' => -18,
              'vertAdj' => -18,
            ),
          ),
        ),
      ),
    ),
    'interactionschart' => 
    array (
      'templates' => 
      array (
        'interactionschart' => '{{!
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
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span8">
            {{#each this.meta.filter_duration}}
                {{field ../this model=../this.model template="edit"}}
            {{/each}}
        </div>
        <div class="span4">
            <div data-toggle="buttons-radio" class="btn-group pull-right dashlet-group">
                <button class="btn interactions-chart {{#eq params.list "my"}}active{{/eq}}" value="my"><i class="icon-user"></i></button>
                <button class="btn interactions-chart {{#eq params.list "all"}}active{{/eq}}" value="all"><i class="icon-group"></i></button>
            </div>
        </div>
    </div>
</div>
<div>
    <svg></svg>
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'Interactions Chart',
            'description' => 'Displays Account interactions on chart.',
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
                0 => 'Documents',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'filter_duration',
                'label' => 'Filter',
                'type' => 'enum',
                'options' => 'interactions_options',
              ),
            ),
          ),
        ),
        'ui' => 
        array (
          'colors' => 
          array (
            'default' => '#085f94',
            'calls' => '#cce8f6',
            'emailsSent' => '#0092d1',
            'emailsRecv' => '#085f94',
            'meetings' => '#0d3d66',
          ),
        ),
        'filter_duration' => 
        array (
          0 => 
          array (
            'name' => 'filter_duration',
            'label' => 'Filter',
            'type' => 'enum',
            'options' => 'interactions_options',
          ),
        ),
      ),
    ),
    'dupecheck-filter-dropdown' => 
    array (
      'meta' => 
      array (
        'template' => 'filter-filter-dropdown',
      ),
    ),
    'modal-header' => 
    array (
      'templates' => 
      array (
        'modal-header' => '{{!
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
<div class="modal-header header">
    <div class="buttons pull-right">
        <a href="javascript:void(0);" class="close" title="{{str "LBL_CLOSE_BUTTON_LABEL"}}"><i class="icon-remove icon-sm"></i></a>
        {{#each buttons}}
        {{field ../this}}
        {{/each}}
    </div>
    <h3 class="title">{{str title module}}</h3>
</div>',
      ),
    ),
    'filter-module-dropdown' => 
    array (
      'templates' => 
      array (
        'filter-module-dropdown' => '{{!
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
<input type="hidden" class="select2 related-filter">
<div class="choice-related"></div>
',
        'result-partial' => '{{!
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
<div><span class="select2-match"></span>{{str this "Filters"}}</div>',
        'selection-partial' => '{{!
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
<span class="select2-choice-type">{{{this}}}</span>',
      ),
    ),
    'bubblechart' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME',
            'description' => 'LBL_TOP10_OPPORTUNITIES_CHART_DESC',
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
                0 => 'Home',
                1 => 'Accounts',
                2 => 'Contacts',
                3 => 'Leads',
                4 => 'Opportunities',
                5 => 'RevenueLineItems',
              ),
              'view' => 
              array (
                0 => 'record',
                1 => 'records',
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'filter_duration',
                'label' => 'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS',
                'type' => 'enum',
                'options' => 'top10_opportunities_duration_options',
                'enum_width' => 'auto',
              ),
              1 => 
              array (
                'name' => 'filter_assigned',
                'label' => 'LBL_TOP10_OPPORTUNITIES_DEFAULT_DATASET',
                'type' => 'enum',
                'options' => 'top10_opportunities_filter_assigned_options',
                'enum_width' => 'auto',
              ),
            ),
          ),
        ),
        'filter_duration' => 
        array (
          0 => 
          array (
            'name' => 'filter_duration',
            'label' => 'LBL_TOP10_OPPORTUNITIES_FILTER_DURATIONS',
            'type' => 'enum',
            'options' => 'top10_opportunities_duration_options',
            'enum_width' => 'auto',
          ),
        ),
      ),
      'templates' => 
      array (
        'tooltiptemplate' => '{{!
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
<p>Assigned: <b>{{assigned_user_name}}</b></p>
<p>Amount: <b>{{amount}}</b></p>
<p>Close Date: <b>{{close_date}}</b></p>
<p>Probability: <b>{{probability}}%</b></p>
<p>Account: <b>{{account_name}}</b></p>
',
        'bubblechart' => '{{!
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
        <div class="span8">
            {{#each dashletConfig.filter_duration}}
                {{field ../this model=../this.settings template="edit"}}
            {{/each}}
        </div>
        <div class="span4">
            <div data-toggle="buttons-radio" class="btn-group pull-right dashlet-group">
                <button class="btn toggle-control {{#eq this.filterAssigned "my"}}active{{/eq}}" value="my" rel="tooltip" data-placement="bottom" title="{{str "LBL_TOP10_OPPORTUNITIES_MY_OPP"}}">
                    <i class="icon-user"></i>
                </button>
                <button class="btn toggle-control {{#eq this.filterAssigned "group"}}active{{/eq}}" value="group" rel="tooltip" data-placement="bottom" title="{{str "LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP"}}">
                    <i class="icon-group"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="nv-chart nv-chart-bubble">
    <svg id="{{cid}}"></svg>
</div>
<div class="block-footer hide">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
',
      ),
    ),
    'dropdown-menu' => 
    array (
      'templates' => 
      array (
        'dropdown-menu' => '{{!
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
{{#each data.records}}
    <li>
        <span>{{str "LBL_MODULE_NAME" module}}: </span><a href="#{{module}}/{{id}}"><strong>{{name}}</strong></a>
    </li>
{{/each}}
{{#eq data.records.length "0"}}
    <li>
        <a href="#search/{{term}}">{{str "LNK_SEARCH_NO_RESULTS"}}</a>
    {{#each data.module_list}}
        <a href="#{{this}}/create">{{str "LNK_CREATE_WHEN_EMPTY" this}}</a>
    {{/each}}
    </li>
{{else}}
    <li>
        <a href="#search/{{term}}">{{str "LNK_SEARCH_FTS_VIEW_ALL"}}</a>
    </li>
{{/eq}}
',
      ),
    ),
    'passwordmodal' => 
    array (
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'value' => 'save',
            'css_class' => 'btn-primary save-profile',
          ),
          1 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'value' => 'cancel',
            'css_class' => 'btn-invisible btn-link',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'current_password',
                'type' => 'password',
                'label' => 'LBL_OLD_PASSWORD',
                'displayParams' => 
                array (
                  'colspan' => 2,
                ),
              ),
              1 => 
              array (
                'name' => 'new_password',
                'type' => 'password',
                'label' => 'LBL_NEW_PASSWORD',
                'displayParams' => 
                array (
                  'colspan' => 2,
                ),
              ),
              2 => 
              array (
                'name' => 'confirm_password',
                'type' => 'password',
                'label' => 'LBL_NEW_PASSWORD2',
                'displayParams' => 
                array (
                  'colspan' => 2,
                ),
              ),
            ),
          ),
        ),
      ),
      'templates' => 
      array (
        'passwordmodal' => '{{!
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
<div class="modal hide">
    <div class="modal-header">
        <a class="close" data-dismiss="modal"><i class="icon-remove"></i></a>
        <h3>{{str "LBL_PASSWORD_CHANGE_FORM_TITLE" context.attributes.module}}</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="POST">
            <fieldset>
                {{#each meta.panels}}
                {{#each fields}}
                <div class="row-fluid control-group">
                    <div class="span4">{{str label ../../context.attributes.module}}</div>
                    <div class="span6">{{field ../../this}}</div>
                </div>
                {{/each}}
                {{/each}}
            </fieldset>
        </form>
    </div>
    <div class="modal-footer">
        {{#each meta.buttons}}
        {{field ../this}}
        {{/each}}
    </div>
</div>
',
      ),
    ),
    'subnavedit' => 
    array (
      'meta' => 
      array (
        'type' => 'subnav',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'value' => 'cancel',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'value' => 'save',
            'css_class' => 'btn-primary',
          ),
        ),
        'label' => 'LBL_EDIT_BUTTON',
      ),
    ),
    'activitystream-bottom' => 
    array (
      'meta' => 
      array (
        'template' => 'list-bottom',
        'showMoreLabel' => 'LBL_ACTIVTY_STREAM_SHOW_MORE',
      ),
    ),
    'massaddtolist-progress' => 
    array (
      'meta' => 
      array (
        'template' => 'massupdate-progress',
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'btn-stop',
            'css_class' => 'btn-primary',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
          ),
        ),
      ),
    ),
    'modal-confirm' => 
    array (
      'templates' => 
      array (
        'modal-confirm' => '{{!
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
<div class="container-fluid">
    <form>
        {{str message module}}
    </form>
</div>
<div class="modal-footer">
    {{#each meta.buttons}}
    {{field ../this}}
    {{/each}}
</div>',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'ok_button',
            'type' => 'button',
            'css_class' => 'btn-primary pull-right',
            'label' => 'LBL_EMAIL_OK',
            'primary' => true,
          ),
          1 => 
          array (
            'name' => 'close_button',
            'type' => 'button',
            'css_class' => 'btn-invisible btn-link',
            'label' => 'LBL_EMAIL_CANCEL',
            'primary' => false,
          ),
        ),
      ),
    ),
    'planned-activities' => 
    array (
      'templates' => 
      array (
        'records' => '{{!
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
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed">
            {{#each collection.models}}
                <li>
                    <p>
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar42" data-title="{{getFieldValue this "assigned_user_name"}}">
                                <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                            </a>
                        {{else}}
                            <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
                        {{/if}}
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                    {{#if ../overdueBadge}}
                        {{#with ../../overdueBadge}}
                            {{field ../../../this model=../../this template=\'detail\'}}
                        {{/with}}
                    {{/if}}
                    <span class="details">
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">
                                {{getFieldValue this "assigned_user_name"}}
                            </a>
                        {{else}}
                            {{str "LBL_UNASSIGNED" this.module}}
                        {{/if}}
                        &#44;&nbsp;
                        <date class="date">{{timeago attributes.record_date "TPL_TABBED_DASHLET_TIME_RELATIVE"}}</date>
                    </span>
                    {{#if attributes.invitation}}
                        <div class="pull-right">
                            {{#with ../../invitationActions}}
                                {{field ../../../this model=../attributes.invitation template=\'edit\'}}
                            {{/with}}
                        </div>
                    {{/if}}
                </li>
            {{/each}}
            {{#notEq ../collection.next_offset "-1"}}
                <li><a class="more" data-action="show-more">{{str "LBL_SHOW_MORE_MODULE" this.module}}</a></li>
            {{/notEq}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
        'toolbar' => '{{!
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
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="btn-group dashlet-group" data-toggle="buttons-radio">
            <button class="btn{{#eq settings.attributes.date "today"}} active{{/eq}}" value="today" data-action="date-switcher">{{str "LBL_PLANNED_ACTIVITIES_DASHLET_TODAY_BUTTON_LABEL" this.module}}</button>
            <button class="btn{{#eq settings.attributes.date "future"}} active{{/eq}}" value="future" data-action="date-switcher">{{str "LBL_PLANNED_ACTIVITIES_DASHLET_FUTURE_BUTTON_LABEL" this.module}}</button>
        </div>
        <div class="btn-group pull-right dashlet-group" data-toggle="buttons-radio">
            <button class="btn{{#eq settings.attributes.visibility "user"}} active{{/eq}}" value="user" data-action="visibility-switcher" rel="tooltip" data-container="body" data-placement="bottom" title="{{str "LBL_PLANNED_ACTIVITIES_DASHLET_USER_BUTTON_LABEL" this.module}}"><i class="icon-user"></i></button>
            <button class="btn{{#eq settings.attributes.visibility "group"}} active{{/eq}}" value="group" data-action="visibility-switcher" rel="tooltip" data-container="body" data-placement="bottom" title="{{str "LBL_PLANNED_ACTIVITIES_DASHLET_GROUP_BUTTON_LABEL" this.module}}"><i class="icon-group"></i></button>
        </div>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_PLANNED_ACTIVITIES_DASHLET',
            'description' => 'LBL_PLANNED_ACTIVITIES_DASHLET_DESCRIPTION',
            'config' => 
            array (
              'limit' => '10',
              'date' => 'today',
              'visibility' => 'user',
            ),
            'preview' => 
            array (
              'limit' => '10',
              'date' => 'today',
              'visibility' => 'user',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Bugs',
                2 => 'Cases',
                3 => 'Contacts',
                4 => 'Home',
                5 => 'Leads',
                6 => 'Opportunities',
                7 => 'Prospects',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'no_default_action' => true,
              'icon' => 'icon-plus',
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'link' => 'meetings',
                    'module' => 'Meetings',
                  ),
                  'label' => 'LBL_SCHEDULE_MEETING',
                  'acl_action' => 'create',
                  'acl_module' => 'Meetings',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'link' => 'calls',
                    'module' => 'Calls',
                  ),
                  'label' => 'LBL_SCHEDULE_CALL',
                  'acl_action' => 'create',
                  'acl_module' => 'Calls',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'date',
                'label' => 'LBL_DASHLET_CONFIGURE_FILTERS',
                'type' => 'enum',
                'options' => 'planned_activities_filter_options',
              ),
              1 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'planned_activities_visibility_options',
              ),
              2 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'planned_activities_limit_options',
              ),
            ),
          ),
        ),
        'tabs' => 
        array (
          0 => 
          array (
            'active' => true,
            'filter_applied_to' => 'date_start',
            'filters' => 
            array (
              'status' => 
              array (
                '$not_equals' => 'Held',
              ),
            ),
            'link' => 'meetings',
            'module' => 'Meetings',
            'order_by' => 'date_start:asc',
            'record_date' => 'date_start',
            'include_child_items' => true,
            'invitation_actions' => 
            array (
              'name' => 'accept_status_users',
              'type' => 'invitation-actions',
            ),
            'overdue_badge' => 
            array (
              'name' => 'date_start',
              'type' => 'overdue-badge',
            ),
          ),
          1 => 
          array (
            'filter_applied_to' => 'date_start',
            'filters' => 
            array (
              'status' => 
              array (
                '$not_equals' => 'Held',
              ),
            ),
            'link' => 'calls',
            'module' => 'Calls',
            'order_by' => 'date_start:asc',
            'record_date' => 'date_start',
            'include_child_items' => true,
            'invitation_actions' => 
            array (
              'name' => 'accept_status_users',
              'type' => 'invitation-actions',
            ),
            'overdue_badge' => 
            array (
              'name' => 'date_start',
              'type' => 'overdue-badge',
            ),
          ),
        ),
      ),
    ),
    'themerollerpreview' => 
    array (
    ),
    'subdetail' => 
    array (
      'templates' => 
      array (
        'subdetail' => '{{!
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
<div class="tab-content span5" id="folded">
{{#each meta.panels}}
<div class="tab-pane active">
    <div class="block">
        <a href="javascript:void(0)" data-toggle="tab" class="actions closeSubdetail"><i class="icon-remove"></i></a>
        <h4><span class="label label-{{../module}}">{{str "LBL_MODULE_NAME_SINGULAR" ../module}}</span> {{../model.attributes.name}}</h4>
        <br>

        <div class="card2">
            {{#each fields}}
            <div class="row-fluid">
                <div class="span2">{{str  this.label ../../this.model.module}}</div>
                <div class="span10" name="{{this.name}}">
                    {{field ../../this}}
                </div>
            </div>
            {{/each}}
        </div>
    </div>
</div>
{{/each}}
</div>',
      ),
    ),
    'audit-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'title' => 'LBL_AUDIT_TITLE',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'close_button',
            'type' => 'button',
            'label' => 'LBL_CLOSE_BUTTON_TITLE',
            'css_class' => 'btn-invisible btn-link',
          ),
        ),
      ),
    ),
    'raw' => 
    array (
    ),
    'baseeditmodal' => 
    array (
    ),
    'subnav' => 
    array (
      'templates' => 
      array (
        'subnav' => '{{!
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
<div class="subnav">
  <div class="btn-toolbar pull-right">
    <div class="btn-group">
    {{#each subnavModel.attributes.meta.buttons}}
      {{field ../this}}
    {{/each}}
    </div>
  </div>
  <div class="btn-toolbar">
    <h1>{{subnavModel.attributes.title}}</h1>
  </div>
</div>
',
      ),
    ),
    'dupecheck-list' => 
    array (
      'meta' => 
      array (
        'template' => 'list',
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
    ),
    'preview' => 
    array (
      'templates' => 
      array (
        'preview' => '{{!
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
<div class="block preview-data">
{{#each meta.panels}}
{{#each fields}}
    <div class="row-fluid{{#if ../hide}}{{#if ../../../hidePanel}} hide{{/if}} panel_hidden{{/if}}">
        <div class="span5">{{str  this.label ../../this.model.module}}</div>
        <div class="span7" name="{{this.name}}">
            {{field ../../this model=../../model template="detail"}}
        </div>
    </div>
{{/each}}
{{/each}}
    <div class="row-fluid">
        <div class="{{#unless hiddenPanelExists}} hide{{/unless}} span5 show-hide-toggle">
            <button class="btn-link btn-invisible more{{#if hideMoreButton}} hide{{/if}}"
                    data-moreless="more"
                    data-target=".panel_hidden">{{str "LBL_SHOW_MORE"}} <i class="icon-chevron-down"></i></button>
            <button class="btn-link btn-invisible less{{#if hideLessButton}} hide{{/if}}"
                    data-moreless="less"
                    data-target=".panel_hidden">{{str "LBL_SHOW_LESS"}} <i class="icon-chevron-up"></i></button>
        </div>
    </div>
</div>
',
      ),
    ),
    'convert-results' => 
    array (
      'templates' => 
      array (
        'convert-results' => '{{!
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
{{#if associatedModels.length}}
<table class="table dataTable converted-results">
        <tbody role="alert" aria-live="polite" aria-relevant="all">
            {{#each associatedModels.models}}
            <tr name="{{module}}_{{attributes.id}}" class="single">
                <td>
                    <div>{{attributes.row_title}}: <a href="#{{buildRoute model=this}}">{{attributes.name}}</a></div>
                </td>
                <td class="preview-list-cell">
                    <a class="preview-list-item btn pull-right" rel="tooltip" data-placement="bottom" title="{{str "LBL_PREVIEW"}}" data-module="{{module}}" data-id="{{attributes.id}}">
                        <i class="icon-eye-open"></i>
                    </a>
                </td>
            </tr>
            {{/each}}
        </tbody>
</table>
{{/if}}
',
      ),
    ),
    'casessummary' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_CASE_SUMMARY_CHART',
            'description' => 'LBL_CASE_SUMMARY_CHART_DESC',
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
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
          ),
        ),
      ),
      'templates' => 
      array (
        'casessummary' => '{{!
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
{{#if total}}
<div class="tabbable tabs-full {{tabClass}}">
    <ul id="tab" class="nav nav-tabs">
        <li class="active"><a href="#tab-chart" data-toggle="tab">Summary<br><span class="label count nv-fill00">{{total}}</span></a></li>
        {{#each tabData}}
            <li><a href="#tab-{{index}}" data-toggle="tab">{{status}}<br><span class="label count {{cssClass}}">{{models.length}}</span></a></li>
        {{/each}}
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="tab-chart">
            <div id="casesSummaryPie" class="nv-chart nv-chart-cases">
                <svg id="{{cid}}"></svg>
            </div>
        </div>
        {{#each tabData}}
            <div class="tab-pane fade" id="tab-{{index}}">
                <ul class="listed">
                {{#each models}}
                    <li><span data-model-id="{{getFieldValue this "id"}}" class="favTarget"></span>&nbsp;<a href="#{{buildRoute model=this}}">{{attributes.name}}</a></li>
                {{/each}}
                </ul>
            </div>
        {{/each}}
    </div>
</div>
{{/if}}
{{#eq total 0}}
    <div class="block-footer">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
{{/eq}}
',
      ),
    ),
    'language-actions' => 
    array (
      'templates' => 
      array (
        'language-actions' => '{{!
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
{{#unless isAuthenticated}}
<div class="btn-group dropdown" id="languageList">
        <a href="javascript:void(0)" title="{{str "LBL_LANGUAGE"}}" class="btn btn-invisible dropdown-toggle" data-toggle="dropdown"><i class="icon-globe"></i>
            {{str "LBL_LANGUAGE"}}</a>
        <ul class="dropdown-menu bottom-up">
            {{#each languageList}}
            <li><a data-lang-key="{{key}}" href="javascript:void(0)">{{#eq ../currentLang key}}<strong>{{value}}</strong>{{else}}{{value}}{{/eq}}</a></li>
            {{/each}}
        </ul>
</div>
{{/unless}}
',
      ),
    ),
    'similar-opportunities' => 
    array (
      'templates' => 
      array (
        'similar-opportunities' => '{{!
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
<div class="block thumbnail widget">
    <div class="influencers-widget">
        <h4>Similar Opportunities</h4>
        <div class="influencers-wrapper">
            <ul class="influencers-list">
                {{#if this.collections.length}}
                    {{#each this.collections}}
                        <li class="influencers-item">
                            <a href="#Users/{{this.assigned_user_id}}" class="avatar avatar42 pull-left">
                                <img src="{{this.picture_url}}" alt="{{this.assigned_user_name}}">
                            </a>
                            <a href="#Users/{{this.assigned_user_id}}">{{this.assigned_user_name}}</a>
                            <br>
                            <a href="#Opportunities/{{this.id}}">{{this.name}}</a> with <a href="#Accounts/{{this.account_id}}">{{this.account_name}}</a> for {{this.amount}}
                        </li>
                    {{/each}}
                {{else}}
                    <li class="influencers-item"><em>No similar opportunities found.</em></li>
                {{/if}}
            </ul>
        </div>
    </div>
</div>
',
      ),
    ),
    'filter-quicksearch' => 
    array (
      'templates' => 
      array (
        'filter-quicksearch' => '',
      ),
    ),
    'agenda' => 
    array (
      'templates' => 
      array (
        'agenda' => '{{!
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
<div class="block thumbnail">
     <h4>Agenda:</h4>
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <h5>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Today ({{collections.today.length}})
                    </a>
                </h5>
              </div>
              <div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
                <div class="accordion-inner">
                    <ul class="unstyled">
                         {{#if collections.today.length}}
                              {{#each collections.today.models}}
                                   <li><a href="#{{buildRoute model=this}}">{{this.attributes.name}} {{this.attributes.date_start}}</a>
                              {{/each}}
                         {{else}}
                              <em>No meetings found.</em>
                         {{/if}}
                    </ul>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <h5>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      Tomorrow ({{collections.tomorrow.length}})
                    </a>
                </h5>
              </div>
              <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                <div class="accordion-inner">
                    <ul class="unstyled">
                         {{#if collections.tomorrow.length}}
                              {{#each collections.tomorrow.models}}
                                   <li><a href="#{{buildRoute model=this}}">{{this.attributes.name}} {{this.attributes.date_start}}</a>
                              {{/each}}
                         {{else}}
                              <em>No meetings found.</em>
                         {{/if}}
                    </ul>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <h5>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      Upcoming ({{collections.upcoming.length}})
                    </a>
                </h5>
              </div>
              <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                <div class="accordion-inner">
                    <ul class="unstyled">
                         {{#if collections.upcoming.length}}
                              {{#each collections.upcoming.models}}
                                   <li><a href="#{{buildRoute model=this}}">{{this.attributes.name}} {{this.attributes.date_start}}</a>
                              {{/each}}
                         {{else}}
                              <em>No meetings found.</em>
                         {{/if}}
                    </ul>
                </div>
              </div>
            </div>
          </div>
</div>
',
      ),
    ),
    'saved-reports-chart' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_DASHLET_SAVED_REPORTS_CHART',
            'description' => 'LBL_DASHLET_SAVED_REPORTS_CHART_DESC',
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
        'dashlet_config_panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'saved_report_id',
                'label' => 'Select a Report',
                'type' => 'enum',
                'options' => '',
              ),
              1 => 
              array (
                'name' => 'auto_refresh',
                'label' => 'Auto Refresh',
                'type' => 'enum',
                'options' => 'sugar7_dashlet_reports_auto_refresh_options',
              ),
            ),
          ),
        ),
        'chart' => 
        array (
          'name' => 'chart',
          'label' => 'Chart',
          'type' => 'chart',
          'view' => 'detail',
        ),
      ),
      'templates' => 
      array (
        'saved-reports-chart' => '{{!
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
{{#with dashletConfig.chart}}
    {{field ../this model=../this.reportData template=detail}}
{{/with}}
',
      ),
    ),
    'activitystream-omnibar' => 
    array (
      'templates' => 
      array (
        'activitystream-omnibar' => '{{!
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
<a href="#Users/{{user_id}}" class="avatar avatar42 pull-left" rel="tooltip" title="{{full_name}}" data-placement="right">
    {{#if picture_url}}
        <img src="{{picture_url}}" alt="{{full_name}}">
    {{else}}
        <i class="icon-user icon-3x"></i>
    {{/if}}
</a>
<div class="inputwrapper">
    <div contenteditable="true" class="sayit attachable taggable" data-placeholder="{{str "LBL_ACTIVITYSTREAM_POST_PLACEHOLDER"}}" />
    <div class="inputactions">
        <button class="pull-right btn btn-primary addPost disabled">{{str \'LBL_SUBMIT_BUTTON_LABEL\'}}</button>
    </div>
</div>
',
      ),
    ),
    'leaderboard' => 
    array (
      'templates' => 
      array (
        'leaderboard' => '{{!
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
{{#if results}}
<div class="block thumbnail">
  <h4>{{results.properties.title}}</h4>
  <div id="{{guid}}"><svg></svg></div>
</div>
{{/if}}
',
      ),
    ),
    'dashlet-row-empty' => 
    array (
      'templates' => 
      array (
        'dashlet-row-empty' => '{{!
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
<div class="add-row empty">
    <p>{{str "LBL_DASHBOARD_ADD_ROW" module}}</p>
    <p class="options">
        {{#each columnOptions}}
        <a class="add-dashlet" data-value="{{index}}"><small>{{label}}</small></a>
        {{/each}}
    </p>
</div>
',
      ),
    ),
    'error' => 
    array (
      'templates' => 
      array (
        'error' => '{{!
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
  <div class="dark_cube tcenter">
      <h1>{{str model.attributes.type}}</h1>
      <hr class="invisible">
      <p>{{str model.attributes.title}}</p>
      <p>{{str model.attributes.message}}</p>
  </div>
',
      ),
    ),
    'profileactions' => 
    array (
      'templates' => 
      array (
        'profileactions' => '{{!
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
<ul class="nav megamenu" id="userList">
    <li class="dropdown" id="userActions">
        <div class="btn-group">
            <a data-toggle="dropdown" href="javascript:void(0)" role="button" class="btn btn-invisible btn-link dropdown-toggle" rel="tooltip" data-placement="bottom" title="{{userName}}">
                {{#if pictureUrl}}
                    <img src="{{pictureUrl}}" alt="{{userName}}" class="avatar">
                {{else}}
                    <i class="icon-user icon-3X"></i>
                {{/if}}
                <i class="icon-caret-down"></i>
            </a>
            <div class="dropdown-menu scroll pull-right">
                <ul role="menu">
                    <li class="profileactions-profile"><a href="#{{buildRoute module=\'Users\' action=\'detail\' id=userId}}">
                        {{#if pictureUrl}}<img src="{{pictureUrl}}" alt="{{userName}}" class="avatar">{{else}}<i class="icon-user"></i>{{/if}}{{str "LBL_PROFILE"}}</a>
                    </li>
                    <li class="profileactions-employees"><a href="#{{buildRoute module=\'Employees\'}}"><i class="icon-group"></i>{{str "LBL_EMPLOYEES"}}</a></li>
                    {{#if showAdmin}}
                        <li class="administration"><a href="#{{buildRoute module=\'Administration\'}}"><i class="icon-cogs"></i>{{str "LBL_ADMIN"}}</a></li>
                    {{/if}}
                    <li class="profileactions-about"><a href="#{{buildRoute action=\'about\'}}"><i class="icon-info-sign"></i>{{str "LNK_ABOUT"}}</a></li>
                    <li class="profileactions-logout"><a href="#logout/?clear=1"><i class="icon-signout"></i>{{str "LBL_LOGOUT"}}</a></li>
                </ul>
            </div>
        </div>
    </li>
</ul>
',
      ),
    ),
    'merge-duplicates-progress' => 
    array (
      'templates' => 
      array (
        'merge-duplicates-progress' => '{{!
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product (\'Company\') that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (\'MSA\'), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
}}
<div class="modal progress-modal">
    <div class="modal-header header">
        <h3 data-holder="title">{{str \'TPL_MASSUPDATE_TITLE\' this.module this}}</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="offset1 span10">
                <div class="progress-label">
                    <span data-holder="message"></span>
                    <span data-holder="estimate"></span>
                </div>
                <div class="progress progress-info progress-striped active" data-holder="bar">
                    <div class="bar" data-holder="progressbar"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        {{#each meta.buttons}}
            {{field ../this model=../model}}
        {{/each}}
    </div>
</div>
<div class="modal-backdrop"></div>
',
      ),
    ),
    'influencers' => 
    array (
      'templates' => 
      array (
        'influencers' => '{{!
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
<div class="block thumbnail widget">
    <div class="influencers-widget">
        <h4>Influencers</h4>
        <div class="influencers-wrapper">
            <ul class="influencers-list">
                {{#if this.collections.length}}
                    {{#each this.collections}}
                        <li class="influencers-item">
                            <a href="#Users/{{this.id}}" class="avatar avatar42 pull-left">
                                <img src="{{this.picture_url}}" alt="{{this.full_name}}">
                            </a>
                            <a href="#Users/{{this.id}}">{{this.full_name}}</a>
                            <br>
                            <span class="influencers-stat">{{this.calls}} {{#eq this.calls "1"}}{{str "LBL_CALL"}}{{else}}{{str "LBL_CALLS"}}{{/eq}}</span>
                            <span class="influencers-stat">0 {{str "LBL_EMAILS"}}</span>
                            <span class="influencers-stat">{{this.meetings}} {{#eq this.meetings "1"}}{{str "LBL_MEETING"}}{{else}}{{str "LBL_MEETINGS"}}{{/eq}}</span>
                        </li>
                    {{/each}}
                {{else}}
                    <li class="influencers-item"><em>No influencers found.</em></li>
                {{/if}}
            </ul>
        </div>
    </div>
</div>
',
      ),
    ),
    'audit-footer' => 
    array (
      'templates' => 
      array (
        'audit-footer' => '{{!
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
}}
<div class="inline-drawer">
    <article class="inline-drawer-header row-fluid">
        <div class="span12">
            {{#if auditedFields}}
                {{str "LBL_AUDITED_FIELDS" this.module}}
                {{arrayJoin auditedFields ", "}}
            {{else}}
                {{str "LBL_NO_AUDITED_FIELDS_TEXT" this.module}}
            {{/if}}
        </div>
    </article>
</div>
',
      ),
    ),
    'vcard-import-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'title' => 'LBL_IMPORT_VCARD',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'vcard_cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'vcard_finish_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_BUTTON_LABEL',
            'acl_action' => 'create',
            'css_class' => 'btn-primary',
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'subpanel-list' => 
    array (
      'meta' => 
      array (
        'favorite' => true,
        'rowactions' => 
        array (
          'css_class' => 'pull-right',
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
              'allow_bwc' => false,
            ),
            1 => 
            array (
              'type' => 'rowaction',
              'name' => 'edit_button',
              'icon' => 'icon-pencil',
              'label' => 'LBL_EDIT_BUTTON',
              'event' => 'list:editrow:fire',
              'acl_action' => 'edit',
              'allow_bwc' => false,
            ),
            2 => 
            array (
              'type' => 'unlink-action',
              'icon' => 'icon-trash',
              'label' => 'LBL_UNLINK_BUTTON',
            ),
          ),
        ),
        'last_state' => 
        array (
          'id' => 'subpanel-list',
        ),
      ),
    ),
    'property-table' => 
    array (
      'templates' => 
      array (
        'property-table' => '{{!
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
<table class="table table-condensed">
    <tbody>
    {{#each meta.panels}}
        {{#each fields}}
            {{#notEq name "name"}}
                <tr>
                    <td>
                        <dl>
                            <dt>{{str  this.label ../../../this.model.module}}</dt>
                            <dd>{{field ../../../this}}</dd>
                        </dl>
                    </td>
                </tr>
            {{/notEq}}
        {{/each}}
    {{/each}}
    </tbody>
</table>
',
      ),
    ),
    'list-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'title' => 'LBL_MODULE_NAME',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'acl_action' => 'create',
            'route' => 
            array (
              'action' => 'create',
            ),
          ),
          1 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'news' => 
    array (
      'templates' => 
      array (
        'news' => '{{!
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
{{#if responseData.results}}
{{#each responseData.results}}
    <div class="news-article">
        <h5><a href="{{this.unescapedUrl}}">{{{this.titleNoFormatting}}}</a>
        </h5> ({{{this.publisher}}})
        <p>{{{this.content}}}</p>
    </div>
{{/each}}
{{else}}
    <div class="block-footer">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
{{/if}}
',
        'dashlet-config' => '{{!
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
<div class="record">
    {{#each dashletConfig.config.fields}}
        <div class="row-fluid panel_body">
            <div class="record-cell">
                <div class="record-label">{{str label}}</div>
                {{field ../this model=../this.settings template=../this.action}}
            </div>
        </div>
    {{/each}}
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_DASHLET_NEWS_NAME',
            'description' => 'LBL_DASHLET_NEWS_DESCRIPTION',
            'config' => 
            array (
              'limit' => '3',
            ),
            'preview' => 
            array (
              'limit' => '3',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'config' => 
        array (
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'limit',
              'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
              'type' => 'enum',
              'searchBarThreshold' => -1,
              'options' => 
              array (
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => 8,
              ),
            ),
          ),
        ),
      ),
    ),
    'user-locale-wizard-page' => 
    array (
      'meta' => 
      array (
        'title' => 'LBL_WIZ_USER_LOCALE_TITLE',
        'message' => 'LBL_SETUP_USER_LOCALE_INFO',
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'timezone',
                'type' => 'enum',
                'label' => 'LBL_WIZ_TIMEZONE',
                'required' => true,
              ),
              1 => 
              array (
                'name' => 'timepref',
                'type' => 'enum',
                'label' => 'LBL_WIZ_TIMEFORMAT',
                'required' => true,
              ),
              2 => 
              array (
                'name' => 'datepref',
                'type' => 'enum',
                'label' => 'LBL_WIZ_DATE_FORMAT',
                'required' => true,
              ),
              3 => 
              array (
                'name' => 'default_locale_name_format',
                'type' => 'enum',
                'label' => 'LBL_WIZ_NAME_FORMAT',
                'required' => true,
                'separator' => '|',
              ),
            ),
          ),
        ),
      ),
    ),
    'audit' => 
    array (
      'meta' => 
      array (
        'template' => 'filtered-list',
        'panels' => 
        array (
          0 => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'fieldtype',
                'name' => 'field_name',
                'label' => 'LBL_FIELD_NAME',
                'sortable' => true,
                'filter' => 'startsWith',
              ),
              1 => 
              array (
                'type' => 'base',
                'name' => 'before',
                'label' => 'LBL_OLD_NAME',
                'sortable' => false,
                'filter' => 'contains',
              ),
              2 => 
              array (
                'type' => 'base',
                'name' => 'after',
                'label' => 'LBL_NEW_VALUE',
                'sortable' => false,
                'filter' => 'contains',
              ),
              3 => 
              array (
                'type' => 'base',
                'name' => 'created_by_username',
                'label' => 'LBL_CREATED_BY',
                'sortable' => true,
              ),
              4 => 
              array (
                'type' => 'datetimecombo',
                'name' => 'date_created',
                'label' => 'LBL_LIST_DATE',
                'options' => 'date_range_search_dom',
                'sortable' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'dashlet-cell-empty' => 
    array (
      'templates' => 
      array (
        'drop' => '{{!
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
<div class="widget empty" data-action="droppable">
    <p>{{str "LBL_DASHLET_DROP_HERE"}}</p>
    <div class="add-dashlet"><strong><i class="icon-download-alt"></i></strong></div>
</div>
',
        'empty' => '{{!
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
<div class="empty" style="background: transparent; border:transparent 3px solid; cursor:default;">
    <p>&nbsp;</p>
    <div class="add-dashlet"><strong>&nbsp;</strong></div>
</div>
',
        'dashlet-cell-empty' => '{{!
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
<div class="widget empty" data-action="addDashlet">
    <p>{{str "LBL_DASHLET_ADD" module}}</p>
    <div class="add-dashlet"><strong><i class="icon-plus"></i></strong></div>
</div>
',
      ),
    ),
    'logout' => 
    array (
      'meta' => 
      array (
        'action' => 'edit',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'login_button',
            'type' => 'button',
            'label' => 'LBL_LOGIN_BUTTON_LABEL',
            'primary' => true,
          ),
          1 => 
          array (
            'name' => 'login_form_button',
            'type' => 'button',
            'label' => 'LBL_LOGIN_FORM_LABEL',
          ),
        ),
      ),
      'templates' => 
      array (
        'logout' => '{{!
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
<div class="welcome">
    <div class="thumbnail login">
        <div class="tcenter">
            <h2 class="brand" style="background-image: url({{logoUrl}});">SugarCRM</h2>
        </div>
        <form name=\'{{name}}\' class="tcenter">
        	<p>{{str "LBL_LOGGED_OUT"}}
        	</p>
        	<p>&nbsp;</p>
            <p class="wide">
                    <a class="btn btn-block btn-primary" name="login_button" 
                       title="{{str "LBL_LOGIN_BUTTON_LABEL"}}">{{str "LBL_LOGIN_BUTTON_LABEL"}}</a>
			</p>
            <p class="wide">
                    <a class="btn btn-link btn-invisible" name="login_form_button" 
                       title="{{str "LBL_LOGIN_FORM_LABEL"}}">{{str "LBL_LOGIN_FORM_LABEL"}}</a>
			</p>
        </form>
    </div>
</div>
',
      ),
    ),
    'editmodal' => 
    array (
      'templates' => 
      array (
        'editmodal' => '{{!
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
<div class="modal hide">
    <div class="modal-header">
        <a class="close" data-dismiss="modal"><i class="icon-remove"></i></a>
        <h3>{{str "LBL_NEW_FORM_TITLE" module}}</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" enctype="multipart/form-data" method="POST">
            <fieldset>
                {{#each meta.panels}}
                {{#each fields}}
                <div class="row-fluid control-group">
                <label class="span2">{{str this.label ../../this.model.module}}</label>
                <div class="span10">{{field ../../this model=../../context.attributes.createModel template="edit"}}</div>
                </div>
                {{/each}}
                {{/each}}
            </fieldset>
        </form>
    </div>
    <div class="modal-footer">
        {{#each meta.buttons}}
        {{field ../this model=../createModel}}
        {{/each}}
    </div>
</div>
',
      ),
    ),
    'dupecheck-list-select' => 
    array (
      'meta' => 
      array (
        'template' => 'list',
        'selection' => 
        array (
          'type' => 'single',
          'label' => 'LBL_LINK_SELECT',
        ),
      ),
    ),
    'globalsearch' => 
    array (
      'templates' => 
      array (
        'result' => '{{!
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
{{#if data.records}}
    {{#each data.records}}
    <li>
        <a href="{{link}}">
            <span class="label label-module-mini label-{{module}}" title="{{str "LBL_MODULE_NAME" module}}">{{moduleIconLabel module}}</span> {{name}}{{#if field_name}}, {{field_name}}: {{field_value}}{{/if}}
        </a>
    </li>
    {{/each}}
    {{#notEq data.next_offset "-1"}}
        <li>
            <a href="#bwc/index.php?module=Home&append_wildcard=true&action=spot&full=true&q={{term}}&m={{data.module_list}}">{{str "LNK_SEARCH_FTS_VIEW_ALL"}}</a>
        </li>
    {{/notEq}}
{{else}}
    <li>
    {{str "LNK_SEARCH_NO_RESULTS"}}
    </li>
{{/if}}
',
        'globalsearch' => '{{!
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
<form class="navbar-search">
    <input type="text" class="search-query" placeholder="{{str "LBL_SEARCH"}}" data-provide="typeahead" data-items="5">
    <div class="advanced">
        <div class="btn-toolbar pull-right">
            <div class="btn-group">
                <a class="btn btn-link btn-invisible advanced dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="icon-caret-down"></i></a>
                <div class="dropdown-menu pull-right scroll-child">
                    <div class="globalsearch-adv-wrap">
                        <ul class="globalsearch-adv reset-width" role="menu" data-advanced="options">
                            <li><label class="active"><input data-action="select-module" data-module="all" type="checkbox" checked="checked"> {{str "LBL_SEARCH_ALL_MODULES"}}</label></li>
                            {{#each searchModules}}
                            <li><label><input data-action="select-module" data-module="{{this}}" type="checkbox"> {{str "LBL_MODULE_NAME" this}}</label></li>
                            {{/each}}
                        </ul>
                    </div>
                </div>
                <a class="btn btn-inverse" data-action="search" href="javascript:void(0);"><i class="icon icon-search"></i></a>
            </div>
        </div>
    </div>
</form>
<div class="typeahead-wrapper"></div>
',
      ),
    ),
    'notifications' => 
    array (
      'templates' => 
      array (
        'notifications' => '{{!
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
<ul class="nav megamenu">
    <li class="dropdown notification-list">
        <div class="btn-group">
            <button class="btn {{#if this.collection.length}}btn-danger{{else}}btn-inverse{{/if}} dropdown-toggle"
                    data-toggle="dropdown"
                    rel="tooltip"
                    title="{{str "LBL_NOTIFICATIONS"}}"
                    data-placement="bottom">
                {{this.collection.length}}
                {{#if this.collection.next_offset}}{{#notEq this.collection.next_offset "-1"}}+{{/notEq}}{{/if}}
            </button>
            <div class="dropdown-menu scroll pull-right">
                <ul role="menu">
                    {{#each this.collection.models}}
                        <li><a class="row-fluid"
                               href="#{{buildRoute model=this action="detail"}}"><span
                                class="span8 ellipsis_inline"
                                title="{{this.attributes.name}}"
                                data-placement="bottom"><span
                                class="label {{this.attributes.severityCss}}">{{this.attributes.severityLabel}}</span>{{this.attributes.name}}</span>
                            <time class="span4 pull-right">{{timeago this.attributes.date_entered "{{relativetime}}"}}</time>
                        </a></li>
                    {{/each}}
                    <li><a class="row-fluid" href="#{{module}}"><span class="span12">{{str "LBL_SHOW_NOTIFICATIONS" module}}</span></a></li>
                </ul>
            </div>
        </div>
    </li>
</ul>
',
        'notifications-alert' => '{{!
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
{{title}}
{{getFieldValue model \'name\'}}
{{str "MSG_JS_ALERT_MTG_REMINDER_START"}} {{dateStart}}
{{#eq module "Calls"}}{{#if description}}{{str "MSG_JS_ALERT_MTG_REMINDER_DESC"}}{{description}}{{/if}}{{str "MSG_JS_ALERT_MTG_REMINDER_CALL_MSG"}}{{/eq}}
{{#eq module "Meetings"}}{{#if location}}{{str "MSG_JS_ALERT_MTG_REMINDER_LOC"}}{{location}}{{/if}}{{str "MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG"}}{{/eq}}
',
      ),
      'meta' => 
      array (
        'remindersFilterDef' => 
        array (
          'reminder_time' => 
          array (
            '$gte' => 0,
          ),
          'status' => 
          array (
            '$equals' => 'Planned',
          ),
          'accept_status_users' => 
          array (
            '$not_equals' => 'decline',
          ),
        ),
        'remindersLimit' => 100,
      ),
    ),
    'merge-duplicates-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'title' => 'LBL_MERGE_DUPLICATES',
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
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'results' => 
    array (
      'templates' => 
      array (
        'results' => '{{!
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
    <div class="row-fluid">
        <div class="span7">
            <div class="block filtered tabbable tabs-left">
                <ul class="nav nav-tabs results">
                    {{#each collection.models}}
                    <li class="search">
                        <span class="label label-{{module}}">{{str "LBL_MODULE_NAME_SINGULAR" module}}</span>
                        <p><a href="#{{buildRoute module=module id=id}}">{{attributes.name}}</a></p>
                        <div class="actions">
                           <a href="javascript:void(0);" rel="tooltip" data-container="body" data-title="{{str "LBL_PREVIEW"}}"><i class="icon-eye-open"></i></a>
                        </div>
                    </li>
                    {{/each}}
                </ul>
                {{#notEq collection.next_offset "-1"}}
                    {{#each meta.buttons}}
                        {{field ../this model=../model}}
                    {{/each}}
                {{/notEq}}
            </div>
        </div>
    </div>
',
      ),
    ),
    'record' => 
    array (
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => '',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'last_state' => 
        array (
          'id' => 'record_view',
          'defaults' => 
          array (
            'show_more' => 'more',
          ),
        ),
      ),
      'templates' => 
      array (
        'record' => '{{!
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
}}
<div>
    {{#if model.isNotEmpty}}
        {{#if enableHeaderPane}}
        <div class="headerpane">
            <h1>
            {{#each meta.panels}}
                {{#if header}}
                    {{#each grid}}
                        {{#each this}}
                            <span class="record-cell" data-type="{{type}}" data-name="{{name}}">
                                {{#if ../../this.labels}}
                                    {{#unless dismiss_label}}
                                        <div class="record-label" data-name="{{name}}">{{str label ../../../../../../this.model.module}}</div>
                                    {{/unless}}
                                {{/if}}
                                <span class="index{{index}}" data-fieldname="{{name}}" data-index="{{index}}">
                                    {{field ../../../../this model=../../../../this.model template=../../../../this.action}}
                                </span>
                                {{#unless ../../../../createMode}}
                                    {{#notHas name ../../../../../noEditFields}}
                                        <span class="record-edit-link-wrapper" data-name="{{name}}">
                                            <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                        </span>
                                    {{/notHas}}
                                {{/unless}}
                            </span>
                        {{/each}}
                    {{/each}}
                {{/if}}
            {{/each}}
            {{#if enableHeaderButtons}}
            <div class="btn-toolbar pull-right">
                {{#unless createMode}}
                {{#if showPrevNextBtnGroup}}
                <div class="btn-group btn-group-previous-next">
                    <button class="btn btn-invisible previous-row{{#unless showPrevious}} disabled{{/unless}}" data-action="scroll" data-action-type="prev" data-id="{{getFieldValue model "id"}}">
                        <i class="icon-chevron-left"></i>
                    </button>
                    <button class="btn btn-invisible next-row{{#unless showNext}} disabled{{/unless}}" data-action="scroll" data-action-type="next" data-id="{{getFieldValue model "id"}}">
                        <i class="icon-chevron-right"></i>
                    </button>
                </div>
                {{/if}}
                {{/unless}}
                {{#each meta.buttons}}
                    {{field ../this}}
                {{/each}}
            </div>
            {{/if}}
            </h1>
        </div>
        {{/if}}
        <div class="record">
            {{#each meta.panels}}
                {{#unless header}}
                    {{#if ../labelsOnTop}}
                        {{#each grid}}
                        <div class="row-fluid {{../name}}{{#if ../hide}}{{#if ../../../../../hidePanel}} hide{{/if}}{{/if}}">
                            {{#each this}}
                            <div class="span{{span}} record-cell{{#if cell_css_class}} {{cell_css_class}}{{/if}}" data-type="{{type}}" data-name="{{name}}">
                                {{#if ../../labels}}
                                    {{#unless dismiss_label}}
                                    <div class="record-label" data-name="{{name}}">{{#if label}}{{str label ../../../../../../../../module}}{{/if}}</div>
                                    {{/unless}}
                                {{/if}}
                                {{#if name}}
                                <span class="normal{{#if css}} {{css}}{{/if}} index{{index}}" data-fieldname="{{name}}" data-index="{{index}}">
                                    {{field ../../../../../../this model=../../../../../../model template=../../../../../../action}}
                                </span>
                                {{/if}}
                                {{#unless ../../../../../../createMode}}
                                    {{#notHas name ../../../../../../../noEditFields}}
                                    <span class="record-edit-link-wrapper" data-name="{{name}}">
                                        <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                    </span>
                                    {{/notHas}}
                                {{/unless}}
                            </div>
                            {{/each}}
                        </div>
                        {{/each}}
                    {{else}}
                    <div class="form-horizontal">
                        <fieldset class="card2">
                            {{#each grid}}
                            <div class="row-fluid control-group {{../name}}{{#if ../hide}} hide{{/if}}">
                                {{#each this}}
                                    {{#if ../../labels}}
                                        {{#unless dismiss_label}}
                                        <div class="control-label span{{labelSpan}} {{label_css_class}}">
                                            <div class="control-label-background span{{labelSpan}}">
                                                <label class="tright record-label" data-name="{{name}}">{{str label ../../../../../../../module}}</label>
                                            </div>
                                        </div>
                                        {{/unless}}
                                    {{/if}}
                                    <div class="controls span{{span}} record-cell {{cell_css_class}}" data-type="{{type}}" data-name="{{name}}">
                                        {{#if name}}
                                        <span class="normal{{#if css}} {{css}}{{/if}} index{{index}}" data-fieldname="{{name}}" data-index="{{index}}">
                                            {{field ../../../../../../this model=../../../../../../model template=../../../../../../action}}
                                        </span>
                                        {{/if}}
                                        {{#unless ../../../../../../createMode}}
                                            {{#notHas name ../../../../../../../noEditFields}}
                                            <span class="record-edit-link-wrapper" data-name="{{name}}">
                                                <a class="record-edit-link btn btn-invisible" data-type="{{type}}" data-name="{{name}}"><i class="icon-pencil"></i></a>
                                            </span>
                                            {{/notHas}}
                                        {{/unless}}
                                    </div>
                                {{/each}}
                            </div>
                            {{/each}}
                        </fieldset>
                    </div>
                    {{/if}}
                {{/unless}}
            {{/each}}
        </div>
        <div class="row-fluid{{#unless hiddenPanelExists}} hide{{/unless}} show-hide-toggle">
            <div class="record-cell">
                <button class="btn-link btn-invisible more{{#if hideMoreButton}} hide{{/if}}"
                        data-moreless="more"
                        data-target=".panel_hidden">{{str "LBL_SHOW_MORE"}} <i class="icon-chevron-down"></i></button>
                <button class="btn-link btn-invisible less{{#if hideLessButton}} hide{{/if}}"
                        data-moreless="less"
                        data-target=".panel_hidden">{{str "LBL_SHOW_LESS"}} <i class="icon-chevron-up"></i></button>
            </div>
        </div>
    {{/if}}
</div>
',
      ),
    ),
    'modulelist' => 
    array (
      'templates' => 
      array (
        'singlemenuPartial' => '{{!
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
<li class="dropdown" data-module="{{name}}" data-menuindex="{{menuIndex}}">
    <a  class="moreLink hide" href="#{{name}}" data-route="#{{name}}">{{label}}</a>
    <div class="btn-group">
        <a  class="btn btn-invisible btn-link routeLink" href="#{{name}}" data-route="#{{name}}">{{label}}</a>
        {{#if menu}}
            <a data-toggle="dropdown" role="button" href="javascript: void(0);" class="btn btn-invisible btn-link dropdown-toggle"><b class="icon-caret-down"></b></a>
            <div class="dropdown-menu scroll">
                <ul role="menu">
                    {{#each menu}}
                        <li><a class="actionLink" tabindex="-1" href="{{#if event}}javascript:void(0);{{else}}{{route}}{{/if}}" data-{{#if event}}event="{{event}}"{{else}}route="{{route}}"{{/if}}>{{#if icon}}<i class="{{icon}}"></i>{{/if}}{{str label ../name}}</a></li>
                    {{/each}}
                    <div class="recentContainer hide"></div>
                    <div class="favoritesContainer hide"></div>
                </ul>
            </div>
        {{/if}}
    </div>
</li>
',
        'favorites' => '{{!
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
{{#each models}}
    <li>
        <a tabindex="-1" class="favoriteLink actionLink" href="#{{buildRoute model=this}}" data-route="#{{buildRoute model=this}}">
            <i class="icon-favorite active"></i>{{getFieldValue this "name"}}
        </a>
    </li>
{{/each}}
',
        'modulelist' => '{{!
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
<ul class="nav megamenu" id="module_list">
    {{#each module_list}}
        {{#eq name \'Home\'}}
        <li class="dropdown home" data-module="Home">
            <div class="btn-group" title="{{str "LBL_TABGROUP_HOME"}}">
                <a class="cube btn btn-invisible btn-link" href="#Home" data-route="#Home"></a>
            {{#if menu}}
                <a data-toggle="dropdown" role="button" href="javascript: void(0);" class="btn btn-invisible btn-link dropdown-toggle"><b class="icon-caret-down"></b></a>
                <div class="dropdown-menu scroll">
                    <ul role="menu">
                        {{#each menu}}
                            <li><a tabindex="-1" href="{{route}}" data-route="{{route}}">{{#if icon}}<i class="{{icon}}"></i>{{/if}}{{str label ../name}}</a></li>
                        {{/each}}
                        <div class="dashboardContainer "></div>
                    </ul>
                </div>
            {{/if}}
            </div>
        </li>
        {{/eq}}
        {{#notEq name \'Home\'}}
        <li class="dropdown" data-module="{{name}}" data-menuindex="{{menuIndex}}">
            <a  class="moreLink hide" href="#{{name}}" data-route="#{{name}}">{{label}}</a>
            <div class="btn-group">
                <a  class="btn btn-invisible btn-link routeLink" href="#{{name}}" data-route="#{{name}}">{{label}}</a>
                {{#if menu}}
                    <a data-toggle="dropdown" role="button" href="javascript: void(0);" class="btn btn-invisible btn-link dropdown-toggle"><i class="icon-caret-down"></i></a>
                    <div class="dropdown-menu scroll">
                        <ul role="menu">
                            {{#each menu}}
                                <li><a class="actionLink" tabindex="-1" href="{{#if event}}javascript:void(0);{{else}}{{route}}{{/if}}" data-navbar-menu-item="{{this.label}}" data-{{#if event}}event="{{event}}"{{else}}route="{{route}}"{{/if}}>{{#if icon}}<i class="{{icon}}"></i>{{/if}}{{str label ../name}}</a></li>
                            {{/each}}
                            <div class="recentContainer hide"></div>
                            <div class="favoritesContainer hide"></div>
                        </ul>
                    </div>
                {{/if}}
            </div>
        </li>
        {{/notEq}}
    {{/each}}
    <li class="dropdown more">
        <div class="btn-group">
            <a href="javascript:void(0)" role="button" data-toggle="dropdown" class="btn btn-invisible btn-link dropdown-toggle" id="moreDrop"><b title="{{str "LBL_LINK_MORE"}}" class="icon-chevron-down"></b></a>
            <div class="dropdown-menu scroll"role="menu">
            <ul class="more-drop-container">
            </ul>
            </div>
        </div>
    </li>
</ul>
',
      ),
    ),
    'vcard-import' => 
    array (
      'meta' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'vcard_import',
                'type' => 'file',
                'view' => 'edit',
              ),
            ),
          ),
        ),
      ),
      'templates' => 
      array (
        'vcard-import' => '{{!
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
{{#each meta.panels}}
    <p><b>{{str "LBL_IMPORT_VCARDTEXT" ../module}}</b></p>
    {{#each fields}}
    <div class="span10 controls">
        {{field ../../this}}
    </div>
    {{/each}}
{{/each}}
',
      ),
    ),
    'detail' => 
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
   {{#each meta.panels}}
    <div class="card2">
        {{#each fields}}
            {{#notEq name "name"}}
            <div class="row-fluid">
                <div class="span2">{{str  this.label ../../../this.model.module}}</div>
                <div class="span10" name="{{this.name}}">
                {{field ../../../this}}
                </div>
                </div>
            {{/notEq}}
        {{/each}}
                <span class="extend">
                  <div class="row-fluid">
                      <a href="javascript:void(0)" class="more hide">{{str "LBL_SHOW_MORE"}} <i class="icon-chevron-down"></i></a>
                      <a href="javascript:void(0)" class="less hide">{{str "LBL_SHOW_LESS"}} <i class="icon-chevron-up"></i></a>
                  </div>
                </span>
        {{else}}
        {{#if model.dataFetched}}{{str "LBL_DETAILVIEW_NO_RECORDS"}}{{else}}{{str "LBL_LOADING"}}{{/if}}
    </div>
    {{/each}}
',
      ),
    ),
    'treemap' => 
    array (
      'templates' => 
      array (
        'treemap' => '{{!
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
<div class="block thumbnail">
  <h4>Opportunities closing this month</h4>
  <div class="opportunities-treemap"><svg></svg></div>
</div>
',
      ),
    ),
    'massupdate-progress' => 
    array (
      'templates' => 
      array (
        'massupdate-progress' => '{{!
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
<div class="modal progress-modal">
    <div class="modal-header header">
        <button type="button" data-action="stop" class="close">&times;</button>
        <h3 data-holder="title">{{str \'TPL_MASSUPDATE_TITLE\' this.module this}}</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="offset1 span10">
                <div class="progress-label">
                    <span data-holder="message"></span>
                    <span data-holder="estimate"></span>
                </div>
                <div class="progress progress-info progress-striped active" data-holder="bar">
                    <div class="bar" data-holder="progressbar"></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            {{#each meta.buttons}}
                {{field ../this model=../model}}
            {{/each}}
        </div>
    </div>
</div>
<div class="modal-backdrop"></div>
',
      ),
    ),
    'dashletselect' => 
    array (
      'meta' => 
      array (
        'template' => 'filtered-list',
        'panels' => 
        array (
          0 => 
          array (
            'fields' => 
            array (
              0 => 
              array (
                'label' => 'LBL_DASHLET_CONFIGURE_TITLE',
                'name' => 'title',
                'type' => 'text',
                'filter' => 'startsWith',
                'sortable' => true,
              ),
              1 => 
              array (
                'label' => 'LBL_DESCRIPTION',
                'name' => 'description',
                'type' => 'text',
                'filter' => 'contains',
                'sortable' => true,
              ),
              2 => 
              array (
                'type' => 'rowaction',
                'name' => 'select_and_edit',
                'label' => 'LBL_LISTVIEW_SELECT_AND_EDIT',
                'event' => 'dashletlist:select-and-edit',
                'css_class' => 'btn-invisible btn-link',
                'width' => '10%',
                'sortable' => false,
              ),
              3 => 
              array (
                'type' => 'rowaction',
                'tooltip' => 'LBL_PREVIEW',
                'event' => 'dashletlist:preview:fire',
                'css_class' => 'btn',
                'icon' => 'icon-eye-open',
                'width' => '7%',
                'sortable' => false,
              ),
            ),
          ),
        ),
      ),
    ),
    'list' => 
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
{{#each meta.panels}}
<table class="table table-striped dataTable">
    <thead>
    <tr>
        {{#each fields}}
            <th {{#if this.width}}width="{{this.width}}" {{/if}}class="{{#isSortable ../../module this}}sorting{{#eq ../../../orderBy.field name}}_{{../../../../orderBy.direction}}{{/eq}} orderBy{{name}}{{/isSortable}}"
                 data-fieldname="{{name}}" data-orderby="{{orderBy}}">
                 <span>
                    {{str label ../../module}}
                 </span>
            </th>
        {{/each}}
    </tr>
    </thead>
    <tbody>
    {{#each ../collection.models}}
    <tr name="{{module}}_{{attributes.id}}" class="single">
        {{#each ../fields}}
            <td{{#if this.align}} class="{{this.align}}"{{/if}}>
              {{field ../../../this model=../this template=../../../this.viewName}}
            </td>
        {{/each}}
    </tr>
    {{/each}}
    </tbody>
</table>
{{/each}}
',
      ),
    ),
    'link-moduleselect' => 
    array (
      'templates' => 
      array (
        'link-moduleselect' => '{{!
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
<div class="filter-options extend">
    <article class="filter-header clearfix">
        <div class="row-fluid">
            <div class="controls filter-field span3">
                <label for="relationship">{{str "LBL_RELATIONSHIP"}}</label>
            </div>
            <div class="controls filter-value span7">
                <select class="select2" id="relationship">
                    <option></option>
                    {{#eachOptions this.linkModules}}
                        <option value="{{key}}">{{str value.label ../this.module}}</option>
                    {{/eachOptions}}
                </select>
            </div>
        </div>
    </article>
</div>
',
      ),
    ),
    'dashablelist' => 
    array (
      'templates' => 
      array (
        'dashablelist' => '{{!
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
    <table class="table table-striped dataTable">
        <thead>
            <tr>
                {{#each fields}}
                    <th class="{{#isSortable ../../module this}}sorting sorting_{{#eq ../../../collection.orderBy.field name}}{{../../../../orderBy.direction}}{{/eq}} orderBy{{name}}{{/isSortable}}" data-fieldname="{{name}}" data-orderby="{{orderBy}}">
                        <span>{{str label ../../module}}</span>
                    </th>
                {{/each}}
            </tr>
        </thead>
        <tbody>
            {{#each ../collection.models}}
                <tr class="single">
                    {{#each ../fields}}
                        <td>{{field ../../../this model=../this template=../../../this.viewName}}</td>
                    {{/each}}
                </tr>
            {{/each}}
        </tbody>
    </table>
{{/each}}
{{#unless collection.length}}
    <div class="block-footer">
        {{#if collection.dataFetched}}
            {{str "LBL_NO_DATA_AVAILABLE"}}
        {{else}}
            {{str "LBL_LOADING"}}
        {{/if}}
    </div>
{{/unless}}
',
      ),
      'meta' => 
      array (
        'template' => 'list',
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_DASHLET_LISTVIEW_NAME',
            'description' => 'LBL_DASHLET_LISTVIEW_DESCRIPTION',
            'config' => 
            array (
            ),
            'preview' => 
            array (
              'module' => 'Accounts',
              'label' => 'LBL_MODULE_NAME',
              'display_columns' => 
              array (
                0 => 'name',
                1 => 'phone_office',
                2 => 'billing_address_country',
              ),
              'my_items' => '0',
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'dashlet_settings',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'module',
                'label' => 'LBL_MODULE',
                'type' => 'enum',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'display_columns',
                'label' => 'LBL_COLUMNS',
                'type' => 'enum',
                'isMultiSelect' => true,
                'ordered' => true,
                'span' => 12,
                'hasBlank' => true,
                'options' => 
                array (
                  '' => '',
                ),
              ),
              2 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'dashlet_limit_options',
              ),
              3 => 
              array (
                'name' => 'auto_refresh',
                'label' => 'Auto Refresh',
                'type' => 'enum',
                'options' => 'sugar7_dashlet_auto_refresh_options',
              ),
              4 => 
              array (
                'name' => 'my_items',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'list_visibility_options',
              ),
              5 => 
              array (
                'name' => 'favorites',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_FAVORITES_ONLY',
                'type' => 'enum',
                'options' => 'list_visibility_options',
              ),
            ),
          ),
        ),
      ),
    ),
    'filter-actions' => 
    array (
      'templates' => 
      array (
        'filter-actions' => '{{!
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
<div class="row-fluid">
    <div class="controls span6">
        <input type="text" class="inherit-width" placeholder="{{str \'LBL_FILTER_NEW_NAME\' \'Filters\'}}…">
    </div>
    <div class="span6">
        <div class="pull-right">
            <a class="btn btn-link btn-invisible hide delete_button">{{str "LBL_DELETE"}}</a>
            <a class="btn btn-primary disabled save_button">{{str "LBL_SAVE_BUTTON_LABEL"}}</a>
            <a class="btn btn-invisible btn-dark filter-close"><i class="icon-remove"></i></a>
        </div>
    </div>
</div>
',
      ),
    ),
    'user-wizard-page' => 
    array (
      'meta' => 
      array (
        'title' => 'LBL_WIZ_USER_PROFILE_TITLE',
        'message' => 'LBL_SETUP_USER_INFO',
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'first_name',
                'label' => 'LBL_WIZ_FIRST_NAME',
              ),
              1 => 
              array (
                'name' => 'last_name',
                'label' => 'LBL_WIZ_LAST_NAME',
                'required' => true,
              ),
              2 => 
              array (
                'name' => 'email',
                'type' => 'email-text',
                'label' => 'LBL_WIZ_EMAIL',
                'required' => true,
              ),
              3 => 
              array (
                'name' => 'phone_work',
                'type' => 'phone',
                'label' => 'LBL_LIST_PHONE',
              ),
            ),
          ),
        ),
      ),
    ),
    'create-actions' => 
    array (
      'meta' => 
      array (
        'template' => 'record',
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
            'name' => 'restore_button',
            'type' => 'button',
            'label' => 'LBL_RESTORE',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'select',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'switch_on_click' => true,
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'name' => 'save_button',
                'label' => 'LBL_SAVE_BUTTON_LABEL',
              ),
              1 => 
              array (
                'type' => 'rowaction',
                'name' => 'save_view_button',
                'label' => 'LBL_SAVE_AND_VIEW',
                'showOn' => 'create',
              ),
              2 => 
              array (
                'type' => 'rowaction',
                'name' => 'save_create_button',
                'label' => 'LBL_SAVE_AND_CREATE_ANOTHER',
                'showOn' => 'create',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'orgchart' => 
    array (
      'templates' => 
      array (
        'orgchart' => '{{!
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
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span4">
            <div class="dropdown" data-control="org-jstree-dropdown">
                <button class="dropdown-toggle btn" data-toggle="dropdown">
                  <span class="jstree-label"></span>
                  <i class="icon-caret-down"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <div data-control="org-jstree" class="jstree-sugar jstree jstree-0 jstree-focused"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="span8">
            <div class="dashlet-group pull-right">
                <button class="btn toggle-control" rel="tooltip" data-control="orientation" title="{{str "LBL_ORG_CHART_TOOLTIP_TOGGLE"}}"><i class="icon-arrow-down"></i></button>
                <button class="btn toggle-control" rel="tooltip" data-control="show-all-nodes" title="{{str "LBL_ORG_CHART_TOOLTIP_NODES"}}"><i class="icon-sitemap"></i></button>
                <button class="btn toggle-control" rel="tooltip" data-control="zoom-to-fit" title="{{str "LBL_ORG_CHART_TOOLTIP_ZOOM"}}"><i class="icon-fullscreen"></i></button>
            </div>
            <div class="btn-slider pull-right">
                <div class="noUiSliderEnds">
                    <i class="zoom-control icon-minus-sign" data-control="zoom-out"></i>
                    <div class="noUiSlider"></div>
                    <i class="zoom-control icon-plus-sign" data-control="zoom-in"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nv-chart nv-chart-texture nv-chart-org">
    <svg id="{{cid}}"></svg>
</div>
',
        'orgchartnode' => '{{!
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
<img src="{{img}}" class="rep-avatar" width="32" height="32">
<div class="rep-name">
    <a href="{{url}}">{{full_name}}</a>
</div>
<div class="rep-title">{{title}}</div>',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_ORG_CHART',
            'description' => 'LBL_ORG_CHART_DESC',
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
                0 => 'Leads',
              ),
              'view' => 'records',
            ),
          ),
          1 => 
          array (
            'name' => 'LBL_ORG_CHART',
            'description' => 'LBL_ORG_CHART_DESC',
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
                0 => 'Home',
              ),
              'view' => 'record',
            ),
          ),
        ),
      ),
    ),
    'inactive-tasks' => 
    array (
      'templates' => 
      array (
        'records' => '{{!
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
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed">
            {{#each collection.models}}
                <li>
                    <p>
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar42" data-title="{{getFieldValue this "assigned_user_name"}}">
                                <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                            </a>
                        {{else}}
                            <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
                        {{/if}}
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                    <span class="details">
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">
                                {{getFieldValue this "assigned_user_name"}}
                            </a>
                        {{else}}
                            {{str "LBL_UNASSIGNED" this.module}}
                        {{/if}}
                        &#44;&nbsp;
                        <date class="date">{{timeago attributes.record_date "TPL_INACTIVE_TASKS_DASHLET_TIME_RELATIVE"}}</date>
                     </span>
                </li>
            {{/each}}
            {{#notEq ../collection.next_offset "-1"}}
                <li><a class="more" data-action="show-more">{{str "LBL_SHOW_MORE_MODULE" this.module}}</a></li>
            {{/notEq}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_INACTIVE_TASKS_DASHLET',
            'description' => 'LBL_INACTIVE_TASKS_DASHLET_DESCRIPTION',
            'config' => 
            array (
              'limit' => 10,
              'visibility' => 'user',
            ),
            'preview' => 
            array (
              'limit' => 10,
              'visibility' => 'user',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Bugs',
                2 => 'Cases',
                3 => 'Contacts',
                4 => 'Home',
                5 => 'Leads',
                6 => 'Opportunities',
                7 => 'Prospects',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'no_default_action' => true,
              'icon' => 'icon-plus',
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'module' => 'Tasks',
                    'link' => 'tasks',
                  ),
                  'label' => 'LBL_CREATE_TASK',
                  'acl_action' => 'create',
                  'acl_module' => 'Tasks',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'tasks_visibility_options',
              ),
              1 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'tasks_limit_options',
              ),
            ),
          ),
        ),
        'tabs' => 
        array (
          0 => 
          array (
            'active' => true,
            'filters' => 
            array (
              'status' => 
              array (
                '$equals' => 'Deferred',
              ),
            ),
            'label' => 'LBL_INACTIVE_TASKS_DASHLET_DEFERRED',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_modified:desc',
            'record_date' => 'date_modified',
          ),
          1 => 
          array (
            'filters' => 
            array (
              'status' => 
              array (
                '$equals' => 'Completed',
              ),
            ),
            'label' => 'LBL_INACTIVE_TASKS_DASHLET_COMPLETED',
            'link' => 'tasks',
            'module' => 'Tasks',
            'order_by' => 'date_modified:desc',
            'record_date' => 'date_modified',
          ),
        ),
      ),
    ),
    'bwc' => 
    array (
    ),
    'massaddtolist' => 
    array (
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_NEW_TARGET_LIST',
            'acl_action' => 'create',
            'acl_module' => 'ProspectLists',
            'css_class' => 'btn-link btn-invisible',
          ),
          1 => 
          array (
            'name' => 'update_button',
            'type' => 'button',
            'label' => 'LBL_UPDATE',
            'acl_action' => 'edit',
            'acl_module' => 'ProspectLists',
            'css_class' => 'btn-primary',
            'primary' => true,
          ),
          2 => 
          array (
            'type' => 'button',
            'value' => 'cancel',
            'css_class' => 'btn-invisible cancel_button',
            'icon' => 'icon-remove',
            'primary' => false,
          ),
        ),
      ),
      'templates' => 
      array (
        'massaddtolist' => '{{!
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
<form class="form-search {{#unless visible}}hide{{/unless}}">
<div class="mu extend">
    <article class="filter-header">
        <div class="row-fluid">
            <div class="controls span6">
                <strong>{{str "LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL"}}</strong>
            </div>
            <div class="pull-right">
                {{#each meta.buttons}}
                {{field ../this}}
                {{/each}}
            </div>
        </div>
    </article>
    <article class="filter-body clearfix">
        <div class="row-fluid">
            <div class="controls filter-value span7">
                {{#with this.addToListField}}
                    {{field ../this template="edit"}}
                {{/with}}
            </div>
        </div>
    </article>
</div>
</form>
',
      ),
    ),
    'list-bottom' => 
    array (
      'templates' => 
      array (
        'list-bottom' => '{{!
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
{{#if collection.length}}
    {{#notEq collection.next_offset "-1"}}
    <button data-action="show-more" class="btn btn-link more padded">{{showMoreLabel}}</button>
    {{/notEq}}
{{else}}
    <div class="block-footer">
        {{#if collection.dataFetched}}
            {{#if context.attributes.isCreateEnabled}}
                <a href="#{{buildRoute context=context model=model action="create"}}" title="{{str "LNK_CREATE" module}}">
                    {{str "LBL_LISTVIEW_NO_RECORDS"}} {{str "LNK_CREATE_WHEN_EMPTY" module}}
                </a>
            {{else}}
                {{str "LBL_LISTVIEW_NO_RECORDS"}}
            {{/if}}
        {{/if}}
    </div>
{{/if}}
',
      ),
    ),
    'recordlist' => 
    array (
      'meta' => 
      array (
        'favorite' => true,
        'selection' => 
        array (
          'type' => 'multi',
          'actions' => 
          array (
            0 => 
            array (
              'name' => 'edit_button',
              'type' => 'button',
              'label' => 'LBL_MASS_UPDATE',
              'primary' => true,
              'events' => 
              array (
                'click' => 'list:massupdate:fire',
              ),
              'acl_action' => 'massupdate',
            ),
            1 => 
            array (
              'name' => 'merge_button',
              'type' => 'button',
              'label' => 'LBL_MERGE',
              'primary' => true,
              'events' => 
              array (
                'click' => 'list:mergeduplicates:fire',
              ),
              'acl_action' => 'edit',
            ),
            2 => 
            array (
              'name' => 'delete_button',
              'type' => 'button',
              'label' => 'LBL_DELETE',
              'acl_action' => 'delete',
              'primary' => true,
              'events' => 
              array (
                'click' => 'list:massdelete:fire',
              ),
            ),
            3 => 
            array (
              'name' => 'export_button',
              'type' => 'button',
              'label' => 'LBL_EXPORT',
              'acl_action' => 'export',
              'primary' => true,
              'events' => 
              array (
                'click' => 'list:massexport:fire',
              ),
            ),
          ),
        ),
        'rowactions' => 
        array (
          'css_class' => 'pull-right',
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
            1 => 
            array (
              'type' => 'rowaction',
              'name' => 'edit_button',
              'label' => 'LBL_EDIT_BUTTON',
              'event' => 'list:editrow:fire',
              'acl_action' => 'edit',
            ),
            2 => 
            array (
              'type' => 'follow',
              'name' => 'follow_button',
              'event' => 'list:follow:fire',
              'acl_action' => 'view',
            ),
            3 => 
            array (
              'type' => 'rowaction',
              'event' => 'list:deleterow:fire',
              'label' => 'LBL_DELETE_BUTTON',
              'acl_action' => 'delete',
            ),
          ),
        ),
        'last_state' => 
        array (
          'id' => 'record-list',
        ),
      ),
    ),
    'baseedit' => 
    array (
    ),
    'forecastdetails' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_DASHLET_FORECAST_NAME',
            'description' => 'LBL_DASHLET_FORECASTS_DETAILS_DESC',
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
                0 => 'Home',
                1 => 'Forecasts',
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
      'templates' => 
      array (
        'forecastdetails' => '{{!
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
{{#if isForecastSetup}}
    {{#if forecastsConfigOK}}
        {{#if showTimeperiod}}
            <div class="dashlet-options">
                <div class="row-fluid">
                    <div class="span4">
                        {{#each dashletConfig.timeperiod}}
                            {{field ../this model=../this.model template="edit"}}
                        {{/each}}
                    </div>
                </div>
            </div>
        {{/if}}
        <div class="forecast-details"></div>
    {{else}}
        <div class="opportunity-pipeline-wrapper">
            {{{str "LBL_FORECASTS_MISSING_SALES_STAGE_VALUES" \'Forecasts\'}}}
        </div>
    {{/if}}
{{else}}
    <div class="opportunity-pipeline-wrapper">
        {{#if isForecastAdmin}}
            {{{str "LBL_DASHLET_FORECAST_NOT_SETUP_ADMIN" \'Forecasts\'}}}
        {{else}}
            {{{str "LBL_DASHLET_FORECAST_NOT_SETUP" \'Forecasts\'}}}
        {{/if}}
    </div>
{{/if}}
',
        'sub-details' => '{{!
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
<div class="row-fluid">
    <span class="span6">
        {{quota_label}}
    </span>
    <span class="span6 tright">
        {{quota_amount_str}}
    </span>
</div>

<div class="row-fluid">
    <span class="span6">
        {{str "LBL_CLOSED" "Forecasts"}}
    </span>
    <span class="span6 tright">
        {{closed_amount_str}}
    </span>
</div>

<div class="row-fluid deficitRow">
    <span class="span6">
        {{deficit_label}}
    </span>
    <span class="span6 tright">
        {{deficit_amount_str}}
    </span>
</div>

<div class="row-fluid">
    {{#if show_details_worst}}
        {{{worst_details}}}
    {{/if}}

    {{#if show_details_likely}}
        {{{likely_details}}}
    {{/if}}

    {{#if show_details_best}}
        {{{best_details}}}
    {{/if}}
</div>
',
        'details-msg' => '{{!
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
<div class="span{{spanCSS}} tcenter">
    <div id="forecast_details_{{case}}_numbers" class="ellipsis_inline" title="{{labelAmount}}" data-placement="bottom">
        <span class="forecast_details_label">
            {{label}}
        </span>

        <br>

        <span class="forecast_details_amount">
            {{{amount}}}
        </span>

    </div>

    <div id="forecast_details_{{case}}_feedback" class="ellipsis_inline" title="{{{feedbackLn1}}} {{{feedbackLn2}}}" data-placement="bottom">
        <span class="forecast_details_feedback">
            {{{feedbackLn1}}}
            <br>
            {{{feedbackLn2}}}
        </span>
    </div>
</div>
',
      ),
    ),
    'tabbed-dashlet' => 
    array (
      'templates' => 
      array (
        'records' => '{{!
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
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed">
            {{#each collection.models}}
                <li>
                    <p>
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                </li>
            {{/each}}
            {{#notEq ../collection.next_offset "-1"}}
                <li><a class="more" data-action="show-more">{{str "LBL_SHOW_MORE_MODULE" this.module}}</a></li>
            {{/notEq}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
        'toolbar' => '{{!
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
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span8">
            {{#each dashletConfig.filter}}
                {{field ../this model=../settings template="edit"}}
            {{/each}}
        </div>
        <div class="span4">
            <div class="btn-group pull-right dashlet-group" data-toggle="buttons-radio">
                <button class="btn{{#eq settings.attributes.visibility "user"}} active{{/eq}}" value="user" data-action="visibility-switcher rel="tooltip" data-container="body" data-placement="bottom" title="{{str "TPL_TABBED_DASHLET_USER_BUTTON_LABEL" this.module}}"><i class="icon-user"></i></button>
                <button class="btn{{#eq settings.attributes.visibility "group"}} active{{/eq}}" value="group" data-action="visibility-switcher" rel="tooltip" data-container="body" data-placement="bottom" title="{{str "TPL_TABBED_DASHLET_GROUP_BUTTON_LABEL" this.module}}"><i class="icon-group"></i></button>
            </div>
        </div>
    </div>
</div>
',
        'tabbed-dashlet' => '{{!
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
{{{toolbarHtml}}}
<div class="dashlet-unordered-list">
    <div class="dashlet-tabs tab{{tabs.length}}">
        {{{tabsHtml}}}
    </div>
    <div class="tab-content">
        {{{recordsHtml}}}
    </div>
</div>
',
        'tabs' => '{{!
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
<div class="dashlet-tabs-row">
    {{#each this.tabs}}
        <div class="dashlet-tab{{#eq ../settings.attributes.activeTab @index}} active{{/eq}}">
            <a data-toggle="tab" data-action="tab-switcher" data-index="{{@index}}">
                <span class="count">{{#if collection.dataFetched}}{{../collection.length}}{{#notEq ../collection.next_offset "-1"}}+{{/notEq}}{{else}}-{{/if}}</span>
                {{#if label}}
                    {{str label module}}
                {{else}}
                    {{#eq collection.length "1"}}
                        {{#if labels.singular}}{{str labels.singular module}}{{else}}{{str "LBL_MODULE_NAME_SINGULAR" module}}{{/if}}
                    {{else}}
                        {{#if labels.plural}}{{str labels.plural module}}{{else}}{{str "LBL_MODULE_NAME" module}}{{/if}}
                    {{/eq}}
                {{/if}}
            </a>
        </div>
    {{/each}}
</div>
',
      ),
    ),
    'selection-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'close',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'events' => 
            array (
              'click' => 'selection:closedrawer:fire',
            ),
            'css_class' => 'btn-invisible btn-link',
          ),
          1 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_BUTTON_LABEL',
            'acl_action' => 'create',
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'massupdate' => 
    array (
      'templates' => 
      array (
        'massupdate' => '{{!
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
<form class="form-search {{#unless visible}}hide{{/unless}}">
<div class="mu extend">
    <article class="filter-header">
        <div class="row-fluid">
            <div class="controls span6">
                <strong>{{str "LBL_MASS_UPDATE"}}</strong>
            </div>
            <div class="pull-right">
                {{#each meta.buttons}}
                {{field ../this}}
                {{/each}}
            </div>
        </div>
    </article>
    {{#each fieldValues}}
    <article class="filter-body clearfix">
        <div class="row-fluid">
            <div class="controls filter-field span3">
                <select class="select2 mu_attribute inherit-width" data-index="{{@index}}">
                    {{#if name}}
                    <option value="{{name}}" selected>{{str label ../../this.model.module}}</option>
                    {{else}}
                    <option value="{{../../defaultOption.name}}" selected>{{str ../../defaultOption.label ../../this.model.module}}</option>
                    {{/if}}
                    {{#each ../fieldOptions}}
                    <option value="{{name}}" {{#eq name ../name}}selected{{/eq}}>{{str label ../../this.model.module}}</option>
                    {{/each}}
                </select>
            </div>
            <div class="controls filter-value span7">
                <span name="fieldPlaceHolder" index="{{@index}}">
                </span>
            </div>
            <div class="controls filter-actions span2">
                <a href="javascript:void(0);" class="btn btn-invisible add pull-right {{#eq ../fieldOptions.length 0}}disabled{{/eq}}"><i class="icon-plus"></i></a>
                {{#notEq ../fieldValues.length 1}}
                <a href="javascript:void(0);" class="remove pull-right" data-index="{{@index}}"><i class="btn btn-invisible icon-minus"></i></a>
                {{/notEq}}
            </div>
        </div>
    </article>
    {{/each}}
    <div id="fieldPlaceHolders" class="hide">
        {{#each meta.panels}}
        {{#each fields}}
        {{field ../../this template="edit"}}
        {{/each}}
        {{/each}}
    </div>
</div>
</form>
',
      ),
    ),
    'alert' => 
    array (
      'templates' => 
      array (
        'error' => '{{!
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
<div class="alert {{alertClass}} alert-block">
    <a class="close">x</a>
    {{#if title}}<strong>{{title}}</strong>{{/if}}
    {{#each messages}}{{{this}}}{{/each}}
</div>
',
        'process' => '{{!
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
<div class="alert {{alertClass}}">
    <strong>{{title}}</strong>
    <div class="loading">
        <span class="l1"></span><span class="l2"></span><span class="l3"></span>
    </div>
</div>
',
        'confirmation' => '{{!
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
<div class="alert {{alertClass}} alert-block">
    {{#if title}}<strong>{{title}}</strong>{{/if}}
    {{#each messages}}{{{this}}}{{/each}}
    <a class="btn-link cancel" data-action="cancel">{{str \'LBL_CANCEL_BUTTON_LABEL\'}}</a> {{#if cancelContLabel}}{{str cancelContLabel}}{{else}}{{str \'LBL_CANCEL_BUTTON_LABEL_CONT\'}}{{/if}}
    <a class="btn-link confirm" data-action="confirm">{{str \'LBL_CONFIRM_BUTTON_LABEL\'}}</a> {{#if confirmContLabel}}{{str confirmContLabel}}{{else}}{{str \'LBL_CONFIRM_BUTTON_LABEL_CONT\'}}{{/if}}
</div>
',
      ),
    ),
    'access-denied' => 
    array (
      'templates' => 
      array (
        'access-denied' => '{{!
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
<div class="error-message">
    <h1>{{str \'ERR_NO_VIEW_ACCESS_TITLE\'}}</h1>
    <p>{{str \'ERR_NO_VIEW_ACCESS_REASON\'}}</p>
    <p>{{str \'ERR_NO_VIEW_ACCESS_ACTION\'}}</p>
</div>
{{{subFieldTemplate \'sugar-cube\' \'detail\' cubeOptions}}}
',
      ),
    ),
    'history' => 
    array (
      'templates' => 
      array (
        'records' => '{{!
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
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed">
            {{#each collection.models}}
                <li>
                    <p>
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar42" data-title="{{getFieldValue this "assigned_user_name"}}">
                                <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                            </a>
                        {{else}}
                            <span class="icon-stack pull-left">
                                <i class="icon-user icon-stack-base"></i>
                                <i class="icon-question-sign icon-light"></i>
                            </span>
                        {{/if}}
                        <a href="#{{buildRoute model=this action="detail"}}">{{getFieldValue this "name"}}</a>
                    </p>
                    <span class="details">
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">
                                {{getFieldValue this "assigned_user_name"}}
                            </a>
                        {{else}}
                            {{str "LBL_UNASSIGNED" this.module}}
                        {{/if}}
                        &#44;&nbsp;
                        <date class="date">{{timeago attributes.record_date "TPL_TABBED_DASHLET_TIME_RELATIVE"}}</date>
                     </span>
                </li>
            {{/each}}
            {{#notEq ../collection.next_offset "-1"}}
                <li><a class="more" data-action="show-more">{{str "LBL_SHOW_MORE_MODULE" this.module}}</a></li>
            {{/notEq}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
      ),
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_HISTORY_DASHLET',
            'description' => 'LBL_HISTORY_DASHLET_DESCRIPTION',
            'config' => 
            array (
              'limit' => '10',
              'filter' => '7',
              'visibility' => 'user',
            ),
            'preview' => 
            array (
              'limit' => '10',
              'filter' => '7',
              'visibility' => 'user',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Bugs',
                2 => 'Cases',
                3 => 'Contacts',
                4 => 'Home',
                5 => 'Leads',
                6 => 'Opportunities',
                7 => 'Prospects',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'no_default_action' => true,
              'icon' => 'icon-plus',
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'link' => 'meetings',
                    'module' => 'Meetings',
                  ),
                  'label' => 'LBL_SCHEDULE_MEETING',
                  'acl_action' => 'create',
                  'acl_module' => 'Meetings',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'createRecord',
                  'params' => 
                  array (
                    'link' => 'calls',
                    'module' => 'Calls',
                  ),
                  'label' => 'LBL_SCHEDULE_CALL',
                  'acl_action' => 'create',
                  'acl_module' => 'Calls',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'filter',
                'label' => 'LBL_DASHLET_CONFIGURE_FILTERS',
                'type' => 'enum',
                'options' => 'history_filter_options',
              ),
              1 => 
              array (
                'name' => 'visibility',
                'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
                'type' => 'enum',
                'options' => 'history_visibility_options',
              ),
              2 => 
              array (
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'history_limit_options',
              ),
            ),
          ),
        ),
        'filter' => 
        array (
          0 => 
          array (
            'name' => 'filter',
            'label' => 'LBL_FILTER',
            'type' => 'enum',
            'options' => 'history_filter_options',
          ),
        ),
        'tabs' => 
        array (
          0 => 
          array (
            'active' => true,
            'filter_applied_to' => 'date_start',
            'filters' => 
            array (
              'status' => 
              array (
                '$equals' => 'Held',
              ),
            ),
            'link' => 'meetings',
            'module' => 'Meetings',
            'order_by' => 'date_start:desc',
            'record_date' => 'date_start',
            'include_child_items' => true,
          ),
          1 => 
          array (
            'filter_applied_to' => 'date_entered',
            'filters' => 
            array (
              'type' => 
              array (
                '$in' => 
                array (
                  0 => 'out',
                  1 => 'inbound',
                  2 => 'archived',
                ),
              ),
            ),
            'labels' => 
            array (
              'singular' => 'LBL_HISTORY_DASHLET_EMAIL_SINGULAR',
              'plural' => 'LBL_HISTORY_DASHLET_EMAIL_PLURAL',
            ),
            'link' => 'archived_emails',
            'module' => 'Emails',
            'order_by' => 'date_entered:desc',
          ),
          2 => 
          array (
            'filter_applied_to' => 'date_start',
            'filters' => 
            array (
              'status' => 
              array (
                '$equals' => 'Held',
              ),
            ),
            'link' => 'calls',
            'module' => 'Calls',
            'order_by' => 'date_start:desc',
            'record_date' => 'date_start',
            'include_child_items' => true,
          ),
        ),
      ),
    ),
    'dashlet-toolbar' => 
    array (
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'dashletaction',
            'css_class' => 'dashlet-toggle btn btn-invisible minify',
            'icon' => 'icon-chevron-up',
            'action' => 'toggleMinify',
            'tooltip' => 'LBL_DASHLET_MINIMIZE',
          ),
          1 => 
          array (
            'dropdown_buttons' => 
            array (
              0 => 
              array (
                'type' => 'dashletaction',
                'action' => 'editClicked',
                'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
              ),
              1 => 
              array (
                'type' => 'dashletaction',
                'action' => 'refreshClicked',
                'label' => 'LBL_DASHLET_REFRESH_LABEL',
              ),
              2 => 
              array (
                'type' => 'dashletaction',
                'action' => 'removeClicked',
                'label' => 'LBL_DASHLET_REMOVE_LABEL',
              ),
            ),
          ),
        ),
      ),
      'templates' => 
      array (
        'dashlet-toolbar' => '{{!
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
<div class="btn-toolbar pull-right">
{{#each meta.buttons}}
    {{#if type}}
        {{field ../../this model=../../this.model}}
    {{else}}
        {{#if dropdown_buttons}}
            <a data-toggle="dropdown" rel="tooltip" title="{{str "LBL_DASHLET_CONFIGURE"}}" class="dropdown-toggle btn btn-invisible" data-placement="bottom"><i data-action="loading" class="icon-cog"></i></a>
            <ul class="dropdown-menu left">
                <div>
                    {{#each dropdown_buttons}}
                        <li>{{field ../../../../this model=../../../../this.model}}</li>
                    {{/each}}
                </div>
            </ul>
        {{/if}}
    {{/if}}
{{/each}}
</div>
<h4 data-toggle="widget">{{meta.label}}</h4>
',
      ),
    ),
    'edit' => 
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
<form name=\'{{name}}\'>
    <div class="card2">
        {{#each meta.panels}}
        {{#each fields}}
        <div class="row-fluid control-group">
            <div class="span2">{{str  this.label ../../this.model.module}}</div>
            <div class="span10 controls">
            {{field ../../this}}
            <p class="help-block"></p>
            </div>
        </div>
        {{/each}}
        {{/each}}
        <div class="form-actions">
            {{#each meta.buttons}}
            {{field ../this}}
            {{/each}}
        </div>
    </div>
</form>
',
      ),
    ),
    'headerpane' => 
    array (
      'templates' => 
      array (
        'headerpane' => '{{!
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
            <span class="module-title">{{title}}</span>
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
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_CREATE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'acl_action' => 'create',
            'route' => 
            array (
              'action' => 'create',
            ),
          ),
          1 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'filtered-list' => 
    array (
      'templates' => 
      array (
        'filtered-list' => '{{!
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
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
    <table class="table dataTable table-striped">
        <thead>
        <tr>
            {{#each fields}}
                <th {{#if this.width}}width="{{this.width}}" {{/if}}class="{{#isSortable ../../module this}}sorting{{#eq ../../../orderBy.field name}}_{{{../../../../orderBy.direction}}}{{/eq}} orderBy{{name}}{{/isSortable}}"
                        data-fieldname="{{name}}" data-orderby="{{orderBy}}">
                    {{str label ../../module}}
                </th>
            {{/each}}
        </tr>
        </thead>
        <tbody>
            {{#if ../filteredCollection.length}}
                {{#each ../../filteredCollection}}
                <tr name="{{module}}_{{attributes.id}}" class="single">
                    {{#each ../../fields}}
                        <td>{{field ../../../../this model=../this template=../../../../this.action}}</td>
                    {{/each}}
                </tr>
                {{/each}}
            {{/if}}
        </tbody>
    </table>
    {{#if ../collection.dataFetched}}
        {{#unless ../../filteredCollection.length}}
            <div class="block-footer">
                <em>{{str "LBL_LISTVIEW_NO_RECORDS" this.module}}</em>
            </div>
        {{/unless}}
    {{else}}
        <div class="block-footer">
            {{str "LBL_LOADING" this.module}}
        </div>
    {{/if}}
{{/each}}
',
      ),
    ),
    'dashletconfiguration-headerpane' => 
    array (
      'templates' => 
      array (
        'dashletconfiguration-headerpane' => '{{!
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
        {{#each meta.panels}}
            {{#each fields}}
                <span class="record-cell">
                    {{field ../../this model=../../this.model template="edit"}}
                </span>
            {{/each}}
        {{/each}}
        <div class="btn-toolbar pull-right dropdown">
            {{#each meta.buttons}}
                {{field ../this model=../this.model template="detail"}}
            {{/each}}
        </div>
    </h1>
</div>
',
      ),
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
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'header',
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'base',
                'name' => 'label',
                'placeholder' => 'LBL_NAME',
              ),
            ),
          ),
        ),
      ),
    ),
    'dashletselect-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'title' => 'LBL_DASHLET_ADD',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
          ),
        ),
      ),
    ),
    'preview-header' => 
    array (
      'templates' => 
      array (
        'preview-header' => '{{!
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
<h1>{{str "LBL_PREVIEW"}}</h1>
<div class="btn-toolbar pull-right">
    <div class="btn-group">
        {{#unless layout.hideNextPrevious}}
        <a class="btn btn-invisible{{#unless layout.previous}} disabled{{/unless}}" data-direction="left"><i class="icon-chevron-left"></i></a>
        <a class="btn btn-invisible{{#unless layout.next}} disabled{{/unless}}" data-direction="right"><i class="icon-chevron-right"></i></a>
        {{/unless}}
    </div>
    <div class="btn-group">
        <a class="btn btn-invisible closeSubdetail" data-toggle="tab"><i class="icon-remove"></i></a>
    </div>
</div>
',
      ),
    ),
    'filter-rows' => 
    array (
      'templates' => 
      array (
        'filter-row-partial' => '{{!
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
<article class="filter-body">
    <div class="row-fluid">
        <div class="filter-field controls span3"></div>
        <div class="filter-operator hide controls span3"></div>
        <div class="filter-value hide controls span4"></div>
        <div class="filter-actions span2">
            <a class="removeme btn btn-invisible btn-dark"><i class="icon-minus"></i></a>
            <a class="addme btn btn-invisible btn-dark"><i class="icon-plus"></i></a>
        </div>
    </div>
</article>
',
        'filter-rows' => '',
      ),
    ),
    'create' => 
    array (
      'meta' => 
      array (
        'template' => 'record',
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
            'name' => 'restore_button',
            'type' => 'button',
            'label' => 'LBL_RESTORE',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'select',
          ),
          2 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'primary' => true,
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'subnavdetail' => 
    array (
      'meta' => 
      array (
        'type' => 'subnav',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'edit_button',
            'type' => 'button',
            'label' => 'LBL_EDIT_BUTTON_LABEL',
            'value' => 'edit',
            'css_class' => 'btn-primary',
          ),
        ),
        'field' => 'name',
      ),
    ),
    'opportunity-metrics' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_DASHLET_OPPORTUNITY_NAME',
            'description' => 'LBL_DASHLET_OPPORTUNITY_DESCRIPTION',
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
              ),
              'view' => 'record',
            ),
            'config' => 
            array (
            ),
            'preview' => 
            array (
            ),
          ),
        ),
      ),
      'templates' => 
      array (
        'opportunity-metrics' => '{{!
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
{{#if total}}
<div class="opportunity-metrics-wrapper">
    <div class="nv-chart nv-chart-donut">
        <svg id="{{cid}}"></svg>
    </div>
    {{#eachOptions metricsCollection}}
        <div class="opportunity-metric">
            <span class="label {{value.cssClass}}">{{value.count}}</span>
            <div class="deal-amount-metric {{key}}">{{value.formattedAmount}}</div>
            <div class="opportunity-metric-description">{{value.stageLabel}}</div>
        </div>
    {{/eachOptions}}
</div>
{{/if}}
{{#eq total 0}}
    <div class="block-footer">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
{{/eq}}
',
      ),
    ),
    'find-duplicates-headerpane' => 
    array (
      'meta' => 
      array (
        'template' => 'headerpane',
        'title' => 'LBL_DUP_MERGE',
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
            'name' => 'merge_duplicates_button',
            'type' => 'button',
            'label' => 'LBL_MERGE_DUPLICATES',
            'css_class' => 'btn-primary disabled',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'forecast-pareto' => 
    array (
      'templates' => 
      array (
        'no-access' => '{{!
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
<div class="forecasts-chart-wrapper">
{{#if isForecastAdmin}}
    {{{str "LBL_DASHLET_FORECAST_NOT_SETUP_ADMIN" \'Forecasts\'}}}
{{else}}
    {{{str "LBL_DASHLET_FORECAST_NOT_SETUP" \'Forecasts\'}}}
{{/if}}
</div>
',
        'forecast-pareto' => '{{!
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
        {{#if displayTimeperiodPivot}}
        <div class="span3">
            {{#each dashletConfig.timeperiod}}
                {{field ../this model=../this.values template="edit"}}
            {{/each}}
        </div>
        {{/if}}
        <div class="span3 groupByOptions">
            {{#with dashletConfig.group_by}}
                {{field ../this model=../this.values}}
            {{/with}}
        </div>
        <div class="span3">
            {{#with dashletConfig.dataset}}
                {{field ../this model=../this.values}}
            {{/with}}
        </div>
        {{#if isManager}}
        <div id="{{cid}}-mgr-toggle" class="span3">
            <div class="btn-group pull-right dashlet-group" data-toggle="buttons-radio">
                <button class="btn" rel="tooltip" data-type="self" title="{{{str "LBL_DASHLET_MY_FORECAST" \'Forecasts\'}}}" data-placement="bottom"><i class="icon-user"></i></button>
                <button class="btn active" rel="tooltip" data-type="team" title="{{{str "LBL_DASHLET_MY_TEAMS_FORECAST" \'Forecasts\'}}}" data-placement="bottom"><i class="icon-group"></i></button>
            </div>
        </div>
        {{/if}}
    </div>
</div>
{{#with dashletConfig.chart}}
    {{field ../this model=../this.values template=detail}}
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
                0 => 'Home',
                1 => 'Opportunities',
                2 => 'RevenueLineItems',
              ),
              'view' => 
              array (
                0 => 'record',
              ),
            ),
          ),
        ),
        'chart' => 
        array (
          'name' => 'paretoChart',
          'label' => 'Pareto Chart',
          'type' => 'forecast-pareto-chart',
          'view' => 'detail',
        ),
        'timeperiod' => 
        array (
          0 => 
          array (
            'module' => 'Forecasts',
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
    ),
    'footer-actions' => 
    array (
      'templates' => 
      array (
        'footer-actions' => '{{!
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
{{#if isAuthenticated}}
    <div class="btn-group">
        <a id="tour" title="{{str "LBL_TOUR"}}" class="btn btn-invisible"><i class="icon-road"></i> {{str "LNK_TOUR"}}</a>
        <a id="feedback" class="btn btn-invisible"><i class="icon-comment"></i> {{str "LBL_FEEDBACK"}}</a>
        <a id="help" class="btn btn-invisible"><i class="icon-exclamation-sign"></i> {{str "LBL_HELP"}}</a>
        <a id="support" class="btn btn-invisible"><i class="icon-question-sign"></i> {{str "LBL_SUPPORT"}}</a>
    </div>
{{/if}}

',
      ),
    ),
    'login' => 
    array (
      'templates' => 
      array (
        'login' => '{{!
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
<div class="welcome">
    <div class="thumbnail login">
        <div class="tcenter">
            <h2 class="brand" style="background-image: url({{logoUrl}});">SugarCRM</h2>
        </div>
        <form name=\'{{name}}\' class="tcenter">
            {{#each meta.panels}}
                {{#each fields}}
                <div class="control-group">{{field ../../this model=../../model}}</div>
                {{/each}}
                <p class="help-block">
                    {{#if ../showPasswordReset}}
                        <a href="#forgotpassword" class="btn btn-link btn-invisible" rel="popoverTop" data-content="{{str "LBL_LOGIN_FORGOTPASSWORD"}}"
                       title="{{str "LBL_LOGIN_FORGOTPASSWORD_TITLE"}}">{{str "LBL_LOGIN_FORGOT_PASSWORD"}}</a>
                    {{/if}}
                </p>
            {{/each}}
            <div class="login-footer">
                {{#each meta.buttons}}
                {{field ../this model=../model}}
                {{/each}}
            </div>
        </form>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'action' => 'edit',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'login_button',
            'type' => 'button',
            'label' => 'LBL_LOGIN_BUTTON_LABEL',
            'primary' => true,
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'username',
                'type' => 'text',
                'placeholder' => 'LBL_LIST_USER_NAME',
                'no_required_placeholder' => true,
                'required' => true,
              ),
              1 => 
              array (
                'name' => 'password',
                'type' => 'password',
                'placeholder' => 'LBL_PASSWORD',
                'no_required_placeholder' => true,
                'required' => true,
              ),
            ),
          ),
        ),
      ),
    ),
    'filtered-search' => 
    array (
      'templates' => 
      array (
        'filtered-search' => '{{!
/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
}}
<div class="inline-drawer">
    <article class="inline-drawer-header row-fluid">
        <div class="span12">
            <input type="text"
                   data-searchfield="true"
                   placeholder="{{str \'LBL_SEARCH_BY\' this.module}}"
                   class="span4 search"
                   value="{{searchTerm}}">
        </div>
    </article>
</div>
',
      ),
    ),
    'recommended-experts' => 
    array (
      'templates' => 
      array (
        'recommended-experts' => '{{!
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
<div class="block thumbnail">
    <h4>Recommended Experts</h4>
    <div class="recommended-experts-input-wrapper">
        <input class="span9 job-title" type="text" data-provide="typeahead" placeholder="Type a job title">
        <button class="btn btn-primary find-experts">Find Experts</button>
    </div>
    <div class="recommended-experts-list">
        {{#if this.collection.length}}
        {{#eq this.collection.length "1"}}
        <em class="recommended-experts-result-text">1 expert found with the "{{this.jobTitle}}" job title:</em>
        {{else}}
        <em class="recommended-experts-result-text">{{this.collection.length}} experts found with the "{{this.jobTitle}}" job title:</em>
        {{/eq}}
        {{#each this.collection.models}}
        <article class="{{this.attributes.guid}}">
            <a class="recommended-experts-link" href="#Users/{{this.attributes.id}}">
                <div class="recommended-experts-cell">
                    <img src="{{this.attributes.picture_url}}" alt="{{this.attributes.full_name}}">
                </div>
                <div class="recommended-experts-cell">
                    <h6>{{str "LBL_CONTACT"}} {{str "LBL_INFOINLINE"}}</h6>
                    <span><i class="icon-user"></i> {{this.attributes.full_name}}</span>
                    <span><i class="icon-envelope-alt"></i> {{this.attributes.email1}}</span>
                </div>
                <div class="recommended-experts-cell">
                    <span><i class="icon-briefcase"></i> {{this.attributes.title}}</span>
                    <span><i class="icon-phone"></i> {{this.attributes.phone_work}}</span>
                </div>
            </a>
        </article>
        {{/each}}
        {{else}}
            {{#if jobTitle}}
                <em>No experts found with the "{{this.jobTitle}}" job title.</em>
            {{/if}}
        {{/if}}
    </div>
</div>
',
      ),
    ),
    'filter-filter-dropdown' => 
    array (
      'templates' => 
      array (
        'filter-filter-dropdown' => '{{!
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
<input type="hidden" class="select2 search-filter" data-placeholder=\'{{str "LBL_FILTER"}}\'>
<div class="choice-filter"></div>
',
        'result-partial' => '{{!
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
<div><span class="select2-match"></span>{{this}}</div>
',
        'selection-partial' => '{{!
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
<span class="select2-choice-type">{{{label}}}{{#if enabled}}<i class="icon-caret-down"></i>{{/if}}</span>
',
      ),
    ),
    'selection-list' => 
    array (
    ),
    'create-nodupecheck' => 
    array (
      'meta' => 
      array (
        'template' => 'record',
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
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'primary' => true,
          ),
          2 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
    'dupecheck-header' => 
    array (
      'templates' => 
      array (
        'dupecheck-header' => '{{!
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
<div class="want_filter highlight">
    <span class="duplicate_count"></span>
    {{!future: there will be a way to switch to a filter view here to perform your own search}}
</div>

',
      ),
    ),
    'dupecheck-list-edit' => 
    array (
      'meta' => 
      array (
        'template' => 'list',
        'selection' => 
        array (
        ),
      ),
    ),
    'share' => 
    array (
      'templates' => 
      array (
        'body' => '{{!
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
{{!--
Use body-html.hbs to add html tags. Keep this one clean.

Since this will be used as a value, we won\'t make it output safe.
Don\'t use this directly on your html output!
--}}{{{str "TPL_RECORD_SHARE_BODY" module this}}}

{{{url}}}
',
        'body-html' => '{{!
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
{{!--
Define this empty to fallback to the body.hbs (that that doesn\'t use html tags).

Since this will be used as a value, we won\'t make it output safe.
Don\'t use this directly on your html output!
--}}<p>{{{str "TPL_RECORD_SHARE_BODY" module this}}}</p>
<a href="{{{url}}}">{{{url}}}</a>
',
        'subject' => '{{!
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
{{!
Since this will be used as a value, we won\'t make it output safe.
Don\'t use this directly on your html output!
}}{{{str "TPL_RECORD_SHARE_SUBJECT" module this}}}
',
      ),
    ),
    'panel-top' => 
    array (
      'templates' => 
      array (
        'panel-top' => '{{!
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
<div class="label label-module-sm label-{{module}} pull-left">{{moduleIconLabel module}}</div> <h4 class="pull-left">{{str layout.label parentModule}}</h4>
<div class="subpanel-controls btn-toolbar pull-right">
    {{#each meta.buttons}}
        {{field ../this}}
    {{/each}}
</div>
',
      ),
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'css_class' => 'btn-invisible',
            'icon' => 'icon-chevron-up',
            'tooltip' => 'LBL_TOGGLE_VISIBILITY',
          ),
          1 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'panel_dropdown',
            'css_class' => 'pull-right',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'sticky-rowaction',
                'icon' => 'icon-plus',
                'name' => 'create_button',
                'label' => ' ',
                'acl_action' => 'create',
                'tooltip' => 'LBL_CREATE_BUTTON_LABEL',
              ),
              1 => 
              array (
                'type' => 'link-action',
                'name' => 'select_button',
                'label' => 'LBL_ASSOC_RELATED_RECORD',
              ),
            ),
          ),
        ),
      ),
    ),
    'dupecheck-list-multiselect' => 
    array (
      'meta' => 
      array (
        'template' => 'list',
        'selection' => 
        array (
          'type' => 'multi',
          'label' => 'LBL_LINK_SELECT',
        ),
      ),
    ),
    'quickcreate' => 
    array (
      'templates' => 
      array (
        'quickcreate' => '{{!
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
<ul class="nav megamenu" >
    <li class="dropdown" id="createList">
        <div class="btn-group">
            <a data-toggle="dropdown" href="javascript:void(0);" role="button" class="btn btn-invisible btn-link dropdown-toggle" rel="tooltip" data-placement="left" title="{{str "LBL_QUICK_CREATE_TITLE"}}"><i class="icon-plus icon-md"></i></a>
            <div class="dropdown-menu scroll pull-right">
                <ul role="menu">
                    {{#each createMenuItems}}
                        <li>{{field ../this model=model template=../this.action}}</li>
                    {{/each}}
                </ul>
            </div>
        </div>
    </li>
</ul>
',
      ),
    ),
    'dashboard-headerpane' => 
    array (
      'meta' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'actiondropdown',
            'buttons' => 
            array (
              0 => 
              array (
                'name' => 'add_button',
                'type' => 'rowaction',
                'label' => 'LBL_CREATE_BUTTON_LABEL',
                'css_class' => 'btn',
              ),
              1 => 
              array (
                'name' => 'edit_button',
                'type' => 'rowaction',
                'label' => 'LBL_EDIT_BUTTON',
              ),
              2 => 
              array (
                'name' => 'collapse_button',
                'type' => 'rowaction',
                'label' => 'LBL_DASHLET_MINIMIZE_ALL',
              ),
              3 => 
              array (
                'name' => 'expand_button',
                'type' => 'rowaction',
                'label' => 'LBL_DASHLET_MAXIMIZE_ALL',
              ),
            ),
            'showOn' => 'view',
          ),
          1 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
          ),
          2 => 
          array (
            'name' => 'delete_button',
            'type' => 'button',
            'label' => 'LBL_DELETE_BUTTON_LABEL',
            'css_class' => 'btn-danger',
            'showOn' => 'edit',
          ),
          3 => 
          array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'showOn' => 'edit',
          ),
          4 => 
          array (
            'name' => 'create_cancel_button',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'create',
          ),
          5 => 
          array (
            'name' => 'create_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'showOn' => 'create',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'header',
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'dashboardtitle',
                'name' => 'name',
                'placeholder' => 'LBL_DASHBOARD_TITLE',
              ),
              1 => 
              array (
                'type' => 'layoutbutton',
                'name' => 'layout',
              ),
            ),
          ),
        ),
      ),
      'templates' => 
      array (
        'dashboard-headerpane' => '{{!
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
        {{#each meta.panels}}
            {{#each fields}}
                <span class="record-cell" data-type="{{type}}" data-name="{{name}}">
                    {{field ../../this model=../../this.model template=../../this.action}}
                </span>
            {{/each}}
        {{/each}}
        <div class="btn-toolbar">
            {{#each meta.buttons}}
                {{field ../this model=../this.model template="detail"}}
            {{/each}}
        </div>
    </h1>
</div>
',
      ),
    ),
    'merge-duplicates' => 
    array (
      'templates' => 
      array (
        'merge-duplicates' => '{{!
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
<h4 class="merge-interface-header">
    <span class="record-name" data-container="primary-title"></span>
    <button class="btn btn-link btn-invisible pull-right"
            rel="tooltip" data-placement="bottom" data-toggle="proto"
            data-mode="preview" title="{{str \'LBL_PREVIEW\'}}">
        <i class="icon-eye-open"></i>
    </button>
</h4>
<div class="record record-merge-interface">
    <div class="merge-interface row-fluid">
        <div class="label-div">
            <div class="col pull-left">
                {{#each meta.panels}}
                    {{#if hide}}
                        <div class="extra hide">
                            {{#each fields}}
                                <div class="merge-row merge-row-field-{{type}}">
                                    <label class="ellipsis_inline"
                                           title="{{str label ../../../module}}"
                                           data-placement="right">
                                        {{str label ../../../module}}
                                    </label>
                                </div>
                            {{/each}}
                        </div>
                    {{else}}
                        {{#each fields}}
                            <div class="merge-row merge-row-field-{{type}}">
                                <label class="ellipsis_inline"
                                       title="{{str label ../../../module}}"
                                       data-placement="right">
                                    {{str label ../../../module}}
                                </label>
                            </div>
                        {{/each}}
                    {{/if}}
                {{/each}}
                <div>
                    <button data-action="more" class="more show_extra btn btn-link btn-invisible">
                        {{str "LBL_SHOW_MORE"}} <i class="icon-chevron-down"></i>
                    </button>
                    <button data-action="less" class="less show_extra btn btn-link btn-invisible hide">
                        {{str "LBL_SHOW_LESS"}} <i class="icon-chevron-up"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="rows-div fluid-div" data-container="merge-container">
            <div class="row-div-cnt">
                {{#each collection.models}}
                    <div class="col" data-record-id="{{id}}" >
                        <div class="primary-lbl" data-container="primary-label">
                            {{#eq id ../primaryRecord.id}}
                                <span>{{str "LBL_COLLECTION_PRIMARY"}}</span>
                            {{/eq}}
                        </div>
                        <div class="box">
                            {{#each ../meta.panels}}
                                {{#if hide}}
                                    <div class="extra hide">
                                        {{#each fields}}
                                            <div class="merge-row control-group merge-row-field-{{type}}">
                                                <div class="controls">
                                                    <input type="radio" name="copy_{{name}}" class="copy"
                                                           data-action="copy"
                                                           data-field-name="{{name}}"
                                                           data-record-id="{{../../../id}}" />
                                                    <label>{{field ../../../../this model=../../../this}}</label>
                                                </div>
                                            </div>
                                        {{/each}}
                                    </div>
                                {{else}}
                                    {{#each fields}}
                                        <div class="merge-row control-group merge-row-field-{{type}}">
                                            <div class="controls">
                                                <input type="radio" name="copy_{{name}}" class="copy"
                                                       data-action="copy"
                                                       data-field-name="{{name}}"
                                                       data-record-id="{{../../../id}}" />
                                                <label>{{field ../../../../this model=../../../this}}</label>
                                            </div>
                                        </div>
                                    {{/each}}
                                {{/if}}
                            {{/each}}
                        </div>
                    </div>
                {{/each}}
            </div>
        </div>
    </div>
</div>
',
      ),
    ),
    'forgotpassword' => 
    array (
      'templates' => 
      array (
        'forgotpassword' => '{{!
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
<div class="welcome">
    <div class="thumbnail signup">
        <div class="tcenter">
            <h2 class="brand" style="background-image: url({{logoUrl}});">SugarCRM</h2>
        </div>
        <form name=\'{{name}}\' class="tcenter">
            {{#if _showResult}}
                <div class="alert alert-{{#if _showSuccess}}success{{else}}error{{/if}} tleft">
                    <p>{{str resultLabel}}</p>
                </div>
            {{/if}}
                {{#each meta.panels}}
                    {{#each fields}}
                    <div class="control-group">{{field ../../this model=../../model template="edit"}}</div>
                    {{/each}}
                {{/each}}
            <div class="signup-footer">
                {{#each meta.buttons}}
                   {{field ../this model=../model template="edit"}}
                {{/each}}
            </div>
        </form>
    </div>
</div>
',
      ),
      'meta' => 
      array (
        'action' => 'list',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'forgotPassword_button',
            'type' => 'button',
            'label' => 'LBL_REQUEST_PASSWORD',
            'primary' => true,
          ),
          1 => 
          array (
            'name' => 'cancel_button',
            'type' => 'button',
            'label' => 'LBL_LOGIN_BUTTON_LABEL',
            'css_class' => 'pull-left',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'username',
                'type' => 'varchar',
                'placeholder' => 'LBL_LIST_USER_NAME',
                'required' => true,
              ),
              1 => 
              array (
                'name' => 'email',
                'type' => 'email',
                'placeholder' => 'LBL_EMAIL_BUTTON',
                'required' => true,
              ),
              2 => 
              array (
                'name' => 'first_name',
                'type' => 'text',
                'css_class' => 'hp',
                'placeholder' => 'LBL_HONEYPOT',
              ),
            ),
          ),
        ),
      ),
    ),
    'attachments' => 
    array (
      'meta' => 
      array (
        'dashlets' => 
        array (
          0 => 
          array (
            'name' => 'LBL_DASHLET_ATTACHMENTS_NAME',
            'description' => 'LBL_DASHLET_ATTACHMENTS_DESCRIPTION',
            'config' => 
            array (
              'auto_refresh' => '0',
              'module' => 'Notes',
              'link' => 'notes',
            ),
            'preview' => 
            array (
              'module' => 'Notes',
              'link' => 'notes',
            ),
            'filter' => 
            array (
              'module' => 
              array (
                0 => 'Accounts',
                1 => 'Contacts',
                2 => 'Opportunities',
                3 => 'Leads',
                4 => 'Bugs',
                5 => 'Cases',
              ),
              'view' => 'record',
            ),
          ),
        ),
        'custom_toolbar' => 
        array (
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'actiondropdown',
              'icon' => 'icon-plus',
              'no_default_action' => true,
              'buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'css_class' => '',
                  'label' => 'LBL_CREATE_RELATED_RECORD',
                  'action' => 'openCreateDrawer',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'css_class' => '',
                  'label' => 'LBL_ASSOC_RELATED_RECORD',
                  'action' => 'openSelectDrawer',
                ),
              ),
            ),
            1 => 
            array (
              'dropdown_buttons' => 
              array (
                0 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'editClicked',
                  'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                ),
                1 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'refreshClicked',
                  'label' => 'LBL_DASHLET_REFRESH_LABEL',
                ),
                2 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'toggleClicked',
                  'label' => 'LBL_DASHLET_MINIMIZE',
                  'event' => 'minimize',
                ),
                3 => 
                array (
                  'type' => 'dashletaction',
                  'action' => 'removeClicked',
                  'label' => 'LBL_DASHLET_REMOVE_LABEL',
                ),
              ),
            ),
          ),
        ),
        'rowactions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'icon' => 'icon-unlink',
            'css_class' => 'btn',
            'event' => 'attachment:unlinkrow:fire',
            'tooltip' => 'LBL_UNLINK_BUTTON',
            'acl_action' => 'edit',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_body',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'limit',
                'label' => 'Display Rows',
                'type' => 'enum',
                'options' => 
                array (
                  5 => 5,
                  10 => 10,
                  15 => 15,
                  20 => 20,
                ),
              ),
              1 => 
              array (
                'name' => 'auto_refresh',
                'label' => 'Auto Refresh',
                'type' => 'enum',
                'options' => 'sugar7_dashlet_auto_refresh_options',
              ),
            ),
          ),
        ),
        'supportedImageExtensions' => 
        array (
          'image/jpeg' => 'JPG',
          'image/gif' => 'GIF',
          'image/png' => 'PNG',
        ),
        'defaultType' => 'txt',
      ),
      'templates' => 
      array (
        'svg-icon' => '{{!
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
<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="28" height="33" id="filetype-svg2">
	<g id="layer1">
		<path d="m 1,1 19,0 7,7 0,24 -26,0 z" id="rect2985" style="fill:#ececec;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4" />
		<path d="m 20,1 0,7 7,0 z" style="fill:#cccccc;stroke:#000000;stroke-width:1px;stroke-linecap:square;stroke-linejoin:round;" />
	</g>
</svg>',
        'attachments' => '{{!
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
{{#if this.collection.length}}
    <ul class="unstyled listed">
    {{#each this.collection.models}}
        <li>
            {{#if attributes.filename}}
                <span class="filetype-thumbnail pull-left" data-mime="{{attributes.file_mime_type}}"></span>
            {{else}}
                <div class="label label-module-sm label-{{../module}} pull-left">{{moduleIconLabel ../module}}</div>
            {{/if}}
            <div class="actions pull-right">
                {{#each ../../dashletConfig.rowactions}}
                    {{field ../../../this model=../this}}
                {{/each}}
            </div>
            <p>
                <a href="#{{buildRoute model=this}}">{{getFieldValue this "name"}}</a>
            </p>
            <date class="date">
                <a href="#{{buildRoute module="Employees" id=this.attributes.assigned_user_id action="detail"}}">{{this.attributes.assigned_user_name}}</a>&#44;
                {{timeago this.attributes.date_entered}}
            </date>
        </li>
    {{/each}}
    {{#notEq this.collection.next_offset "-1"}}
        <li>
            <button name="show_more_button" class="btn-invisible more">{{str "LBL_SHOW_MORE_MODULE" this.module}}</button>
        </li>
    {{/notEq}}
    </ul>
{{else}}
    <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
{{/if}}
',
      ),
    ),
    'link-headerpane' => 
    array (
      'meta' => 
      array (
        'create' => 
        array (
          'title' => 'LBL_CREATE_LINK_RECORD',
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
              'name' => 'create_button',
              'type' => 'button',
              'label' => 'LBL_CREATE_BUTTON_LABEL',
              'css_class' => 'btn-primary',
            ),
            2 => 
            array (
              'name' => 'sidebar_toggle',
              'type' => 'sidebartoggle',
            ),
          ),
        ),
        'select' => 
        array (
          'title' => 'LBL_ASSOC_RELATED_RECORD',
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
              'name' => 'select_button',
              'type' => 'button',
              'label' => 'LBL_LINK_BUTTON',
              'css_class' => 'btn-primary',
            ),
            2 => 
            array (
              'name' => 'sidebar_toggle',
              'type' => 'sidebartoggle',
            ),
          ),
        ),
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
            <th class="{{#isSortable ../../module this}}sorting{{#eq ../../../orderBy.field name}}_{{../../../../orderBy.direction}}{{/eq}} orderBy{{name}}{{/isSortable}}"
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
                    <button class="btn btn-invisible" data-toggle="dropdown" rel="tooltip" title="{{str "LBL_COLUMNS"}}" data-placement="bottom" data-action="fields-toggle"><i class="icon-ellipsis-horizontal"></i></button>
                    <ul class="dropdown-menu left">
                    {{#each ../../../_fields.options}}
                        <li>
                            <button class="{{#if selected}}active{{/if}}" data-field-toggle="{{name}}">
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
    {{#each ../collection.models}}
    <tr name="{{module}}_{{attributes.id}}" class="single">
        {{#each ../../leftColumns}}
        <td>
             {{field ../../../this model=../this template=../../../this.viewName}}
        </td>
        {{/each}}
        {{#each ../../_fields.visible}}
            <td{{#if this.align}} class="{{this.align}}"{{/if}} {{#if this.maxWidth}}style="max-width:{{this.maxWidth}}" {{/if}}data-type="{{type}}">
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
    'funnel' => 
    array (
      'templates' => 
      array (
        'funnel' => '{{!
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
<div class="block thumbnail">
  <h4>Opportunities closing this month</h4>
  <div id="{{guid}}" class="opportunities-funnel"><svg style="max-height:450px;"></svg></div>
</div>
',
      ),
    ),
    'setup-complete-wizard-page' => 
    array (
      'templates' => 
      array (
        'setup-complete-wizard-page' => '{{!
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
{{> wizard-page.header }}
<div class="modal-body">

{{#eq wizardName "admin"}}
    <ul class="thumbnails row-fluid">
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=Administration&action=Locale&view=default"><i class="icon-globe"></i>{{str "LBL_WIZ_SYSTEM_LOCALE_SETTINGS" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=EmailMan&action=config"><i class="icon-envelope"></i>{{str "LBL_WIZ_EMAIL_SETTINGS" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=Configurator&action=EditView"><i class="icon-cogs"></i>{{str "LBL_WIZ_APPLICATION_SETTINGS" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=Users&action=index"><i class="icon-plus-sign-alt"></i>{{str "LBL_WIZ_CREATE_USERS" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=Import&action=step1&import_module=Administration"><i class="icon-upload"></i>{{str "LBL_WIZ_IMPORT_DATA" module}}</a>
        </li>
        <li class="span2">
            <a class="thumbnail" href="#bwc/index.php?module=ModuleBuilder&action=index&type=studio"><i class="icon-wrench"></i>{{str "LBL_WIZ_CONFIGURE_APPLICATION" module}}</a>
        </li>
    </ul>
{{/eq}}
    <ul class="thumbnails row-fluid">
        <li class="span3">
            <a class="thumbnail" target="_blank" href="http://support.sugarcrm.com/03_Training"><i class="icon-info-sign"></i>{{str "LBL_WIZ_SUGAR_TRAINING" module}}</a>
        </li>
        <li class="span3">
            <a class="thumbnail" target="_blank" href="http://support.sugarcrm.com/02_Documentation"><i class="icon-book"></i>{{str "LBL_WIZ_DOCUMENTATION" module}}</a>
        </li>
        <li class="span3">
            <a class="thumbnail" target="_blank" href="http://support.sugarcrm.com/04_Find_Answers/02KB"><i class="icon-briefcase"></i>{{str "LBL_WIZ_KNOWLEDGE_BASE" module}}</a>
        </li>
        <li class="span3">
            <a class="thumbnail" target="_blank" href="http://forums.sugarcrm.com/"><i class="icon-comments-alt"></i>{{str "LBL_WIZ_FORUMS" module}}</a>
        </li>
    </ul>
</div>
{{> wizard-page.footer }}
',
      ),
      'meta' => 
      array (
        'title' => 'LBL_WIZ_COMPLETE_TITLE',
        'message' => 'LBL_SETUP_COMPLETE_INFO',
      ),
    ),
    '_hash' => '196a4bcf8016bbe089d37bcb0fd6d58c',
  ),
  'layouts' => 
  array (
    'activitystream' => 
    array (
      'templates' => 
      array (
        'activitystream' => '{{!
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
<ul class="activitystream-list results"></ul>
',
      ),
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'activitystream-omnibar',
          ),
          1 => 
          array (
            'view' => 'activitystream-bottom',
          ),
        ),
        'type' => 'activitystream',
        'span' => 12,
      ),
    ),
    'subpanels' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
        ),
        'type' => 'subpanels',
        'span' => 12,
      ),
    ),
    'tabbed-layout' => 
    array (
      'templates' => 
      array (
        'tabbed-layout' => '{{!
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
<div class="tabbable">
    <ul class="nav nav-tabs related-tabs{{#if options.meta.notabs}} hide{{/if}}">
    </ul>
    <div class="tab-content">
    </div>
</div>',
      ),
    ),
    'subpanel' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'panel-top',
          ),
          1 => 
          array (
            'view' => 'subpanel-list',
          ),
          2 => 
          array (
            'view' => 'list-bottom',
          ),
        ),
        'span' => 12,
        'last_state' => 
        array (
          'id' => 'subpanel',
        ),
      ),
    ),
    'create-dupecheck' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'dupecheck-header',
          ),
          1 => 
          array (
            'name' => 'dupecheck-list',
            'view' => 'dupecheck-list',
            'primary' => true,
          ),
        ),
        'type' => 'dupecheck',
        'span' => 12,
      ),
    ),
    'footer' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          'type' => 'simple',
          0 => 
          array (
            'view' => 'language-actions',
          ),
          1 => 
          array (
            'view' => 'reminders',
          ),
          2 => 
          array (
            'view' => 'footer-actions',
          ),
        ),
      ),
      'templates' => 
      array (
        'footer' => '{{!
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
<footer>
    <div class="table-row">
        <div class="table-cell">
            <a href="" class="logo" style="background-image: url({{logoUrl}});">SugarCRM</a>
            <div class="copyright">
                {{{str "LBL_SUGAR7_COPYRIGHT"}}}
            </div>
        </div>
        <div class="table-cell">
            <div class="btn-toolbar pull-right">
            </div>
        </div>
    </div>
</footer>
',
      ),
    ),
    'togglepanel' => 
    array (
      'templates' => 
      array (
        'togglepanel' => '{{!
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
<div class="search-filter">
    <form class="form-search-related">
        <div class="control-group">
            <div class="filter controls controls-two btn-group-fit">
                <div class="toggle-actions actions">
                    <div class="btn-group" data-toggle="buttons-radio">
                        {{#each toggles}}
                            <a type="button" class="btn {{#eq ../options.meta.default toggle}}active{{/eq}}" data-view="{{toggle}}" data-mode="view" rel="tooltip" title="{{str title}}"><i class="{{class}}"></i></a>
                        {{/each}}
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="main-content">
</div>
',
      ),
    ),
    'preview' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'preview-header',
          ),
          1 => 
          array (
            'view' => 'preview',
          ),
          2 => 
          array (
            'layout' => 'preview-activitystream',
            'context' => 
            array (
              'module' => 'Activities',
              'forceNew' => true,
            ),
          ),
        ),
        'type' => 'preview',
        'span' => 12,
      ),
    ),
    'dashletconfiguration' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'dashletconfiguration-headerpane',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'dashlet-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'dashletconfiguration',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'error' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'error',
          ),
        ),
      ),
    ),
    'modal' => 
    array (
    ),
    'search' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'subnavdetail',
          ),
          1 => 
          array (
            'layout' => 
            array (
              'type' => 'columns',
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'type' => 'leftside',
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'results',
                      ),
                    ),
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'type' => 'rightside',
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'preview',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'newrecord' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'record',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'new-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'list-sidebar' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
        ),
        'type' => 'simple',
        'span' => 12,
      ),
    ),
    'dashboard' => 
    array (
    ),
    'audit' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'audit-headerpane',
                      ),
                      1 => 
                      array (
                        'view' => 'filtered-search',
                      ),
                      2 => 
                      array (
                        'view' => 'audit',
                      ),
                      3 => 
                      array (
                        'view' => 'audit-footer',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'audit-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'logout' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'logout',
          ),
        ),
      ),
    ),
    'dashlet-preview' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'preview-header',
          ),
        ),
        'type' => 'preview',
        'span' => 12,
      ),
    ),
    'link-selection' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'selection-headerpane',
                      ),
                      1 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'filterpanel',
                          'span' => 12,
                          'availableToggles' => 
                          array (
                          ),
                          'components' => 
                          array (
                            0 => 
                            array (
                              'layout' => 'filter',
                              'targetEl' => '.filter',
                              'position' => 'prepend',
                              'context' => 
                              array (
                                'layoutName' => 'records',
                              ),
                            ),
                            1 => 
                            array (
                              'view' => 'filter-actions',
                              'targetEl' => '.filter-options',
                            ),
                            2 => 
                            array (
                              'view' => 'filter-rows',
                              'targetEl' => '.filter-options',
                            ),
                            3 => 
                            array (
                              'view' => 'selection-list',
                            ),
                            4 => 
                            array (
                              'view' => 'list-bottom',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'link-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'record' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'record',
                        'primary' => true,
                      ),
                      1 => 
                      array (
                        'layout' => 'extra-info',
                      ),
                      2 => 
                      array (
                        'layout' => 
                        array (
                          'name' => 'filterpanel',
                          'span' => 12,
                          'last_state' => 
                          array (
                            'id' => 'record-filterpanel',
                            'defaults' => 
                            array (
                              'toggle-view' => 'subpanels',
                            ),
                          ),
                          'availableToggles' => 
                          array (
                            0 => 
                            array (
                              'name' => 'subpanels',
                              'icon' => 'icon-table',
                              'label' => 'LBL_DATA_VIEW',
                            ),
                            1 => 
                            array (
                              'name' => 'list',
                              'icon' => 'icon-table',
                              'label' => 'LBL_LISTVIEW',
                            ),
                            2 => 
                            array (
                              'name' => 'activitystream',
                              'icon' => 'icon-th-list',
                              'label' => 'LBL_ACTIVITY_STREAM',
                            ),
                          ),
                          'components' => 
                          array (
                            0 => 
                            array (
                              'layout' => 'filter',
                              'targetEl' => '.filter',
                              'position' => 'prepend',
                            ),
                            1 => 
                            array (
                              'view' => 'filter-actions',
                              'targetEl' => '.filter-options',
                            ),
                            2 => 
                            array (
                              'view' => 'filter-rows',
                              'targetEl' => '.filter-options',
                            ),
                            3 => 
                            array (
                              'layout' => 'activitystream',
                              'context' => 
                              array (
                                'module' => 'Activities',
                              ),
                            ),
                            4 => 
                            array (
                              'layout' => 'subpanels',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'dashboard',
                          'last_state' => 
                          array (
                            'id' => 'last-visit',
                          ),
                        ),
                        'context' => 
                        array (
                          'forceNew' => true,
                          'module' => 'Home',
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'vcard-import' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'vcard-import-headerpane',
                      ),
                      1 => 
                      array (
                        'view' => 'vcard-import',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'dashlet-cell' => 
    array (
    ),
    'detail' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'subnavdetail',
          ),
          1 => 
          array (
            'layout' => 
            array (
              'type' => 'fluid',
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'type' => 'simple',
                    'span' => 7,
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'detail',
                      ),
                      1 => 
                      array (
                        'view' => 'activity',
                        'context' => 
                        array (
                          'link' => 'notes',
                        ),
                      ),
                      2 => 
                      array (
                        'view' => 'editmodal',
                        'context' => 
                        array (
                          'link' => 'notes',
                        ),
                      ),
                    ),
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'type' => 'simple',
                    'span' => 5,
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'subdetail',
                        'context' => 
                        array (
                          'link' => 'notes',
                        ),
                      ),
                      1 => 
                      array (
                        'view' => 'subdetail',
                        'context' => 
                        array (
                          'link' => 'contacts',
                        ),
                      ),
                      2 => 
                      array (
                        'view' => 'subdetail',
                        'context' => 
                        array (
                          'link' => 'accounts',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'wizard' => 
    array (
    ),
    'default' => 
    array (
      'templates' => 
      array (
        'default' => '{{!
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
<div class="main-pane"></div>
<div class="side sidebar-content">
    <div class="side-pane active"></div>
    <div class="dashboard-pane"></div>
    <div class="preview-pane"></div>
</div>
',
      ),
    ),
    'dashletselect' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'filtered-search',
                      ),
                      1 => 
                      array (
                        'view' => 'dashletselect-headerpane',
                      ),
                      2 => 
                      array (
                        'view' => 'dashletselect',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'dashlet-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'dashlet-preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'dashletselect',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'list' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'massupdate',
          ),
          1 => 
          array (
            'view' => 'massaddtolist',
          ),
          2 => 
          array (
            'view' => 'recordlist',
            'primary' => true,
          ),
          3 => 
          array (
            'view' => 'list-bottom',
          ),
        ),
        'type' => 'simple',
        'name' => 'list',
        'span' => 12,
      ),
    ),
    'dupecheck-filter' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'dupecheck-filter-dropdown',
          ),
          1 => 
          array (
            'view' => 'filter-quicksearch',
          ),
        ),
        'type' => 'dupecheck-filter',
        'span' => 12,
      ),
    ),
    'create-actions' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'create-actions',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'find-duplicates' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'find-duplicates-headerpane',
                      ),
                      1 => 
                      array (
                        'layout' => 'dupecheck',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'bwc' => 
    array (
      'meta' => 
      array (
        'type' => 'bwc',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'bwc',
          ),
        ),
      ),
    ),
    'drawer' => 
    array (
      'templates' => 
      array (
        'expand' => '{{!
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
<div class="drawer-tab"><a href="javascript:void(0);" class="btn" rel="tooltip" title="{{str \'LBL_TOGGLE_DRAWER\'}}"><i class="icon-chevron-up"></i></a></div>
',
      ),
    ),
    'panel' => 
    array (
      'templates' => 
      array (
        'panel' => '{{!
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
<ul class="nav results">
    <li class="subpanel clearfix"></li>
</ul>
',
      ),
    ),
    'first-login-wizard' => 
    array (
      'meta' => 
      array (
        'type' => 'wizard',
        'buttons' => 
        array (
          0 => 
          array (
            'name' => 'previous_button',
            'type' => 'button',
            'label' => 'LBL_BACK',
            'css_class' => 'btn-link btn-invisible',
          ),
          1 => 
          array (
            'name' => 'next_button',
            'type' => 'button',
            'label' => 'LNK_LIST_NEXT',
            'primary' => true,
          ),
          2 => 
          array (
            'name' => 'start_sugar_button',
            'type' => 'button',
            'label' => 'LBL_WIZ_START_SUGAR',
            'primary' => true,
          ),
        ),
        'components' => 
        array (
          0 => 
          array (
            'view' => 'user-wizard-page',
          ),
          1 => 
          array (
            'view' => 'user-locale-wizard-page',
          ),
          2 => 
          array (
            'view' => 'setup-complete-wizard-page',
          ),
        ),
      ),
    ),
    'access-denied' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'access-denied',
          ),
        ),
      ),
    ),
    'edit' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'subnavedit',
          ),
          1 => 
          array (
            'layout' => 
            array (
              'type' => 'fluid',
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'type' => 'simple',
                    'span' => 11,
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'edit',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'dashlet' => 
    array (
      'templates' => 
      array (
        'dashlet' => '{{!
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
<div class="thumbnail widget" data-action="droppable">
    {{#if meta.preview}}
        <h4 data-toggle="widget">{{meta.label}}</h4>
    {{else}}
        <div data-dashlet="toolbar"></div>
    {{/if}}
    <div data-dashlet="widget" class="widget-content"></div>
    <div class="swappable-dashlet icon-download-alt"></div>
</div>
',
      ),
    ),
    'dupecheck' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'type' => 'filterpanel',
              'span' => 12,
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 'dupecheck-filter',
                  'name' => 'filter',
                  'targetEl' => '.filter',
                  'position' => 'prepend',
                  'components' => 
                  array (
                    0 => 
                    array (
                      'view' => 'filter-quicksearch',
                    ),
                  ),
                ),
                1 => 
                array (
                  'view' => 'filter-actions',
                  'targetEl' => '.filter-options',
                ),
                2 => 
                array (
                  'view' => 'filter-rows',
                  'targetEl' => '.filter-options',
                ),
              ),
            ),
            'name' => 'filterpanel',
          ),
          1 => 
          array (
            'name' => 'dupecheck-list',
            'view' => 'dupecheck-list',
            'primary' => true,
          ),
          2 => 
          array (
            'view' => 'list-bottom',
          ),
        ),
        'type' => 'dupecheck',
        'span' => 12,
      ),
    ),
    'filter' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'filter-module-dropdown',
          ),
          1 => 
          array (
            'view' => 'filter-filter-dropdown',
          ),
          2 => 
          array (
            'view' => 'filter-quicksearch',
          ),
        ),
        'type' => 'filter',
        'span' => 12,
        'last_state' => 
        array (
          'id' => 'filter',
        ),
      ),
    ),
    'header' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'modulelist',
          ),
          1 => 
          array (
            'view' => 'globalsearch',
          ),
          2 => 
          array (
            'view' => 'notifications',
          ),
          3 => 
          array (
            'view' => 'profileactions',
          ),
          4 => 
          array (
            'view' => 'quickcreate',
          ),
        ),
        'last_state' => 
        array (
          'id' => 'app-header',
          'defaults' => 
          array (
            'last-home' => 'dashboard',
          ),
        ),
      ),
      'templates' => 
      array (
        'header' => '{{!
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
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="nav-collapse">
        </div>
    </div>
</div>
',
      ),
    ),
    'create' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'create',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'dashlet-main' => 
    array (
    ),
    'fluid' => 
    array (
    ),
    'login' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'login',
          ),
        ),
      ),
    ),
    'filterpanel' => 
    array (
      'templates' => 
      array (
        'filterpanel' => '{{!
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
<div class="search-filter">
    <form class="form-search-related">
        <div class="control-group">
            <div class="filter controls controls-two btn-group-fit">
                <div class="toggle-actions actions">
                    <div class="btn-group" data-toggle="buttons-radio">
                        {{#each toggles}}
                                <a type="button" class="btn {{#if disabled}}disabled{{/if}}" {{#if disabled}}disabled{{/if}} data-view="{{toggle}}" data-mode="view" rel="tooltip" title="{{str title}}"><i class="{{class}}"></i></a>
                         {{/each}}
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-options extend hide">
        </div>
    </form>
</div>
<div class="main-content">
</div>
',
      ),
    ),
    'toggle' => 
    array (
    ),
    'selection-list' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'selection-headerpane',
                      ),
                      1 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'filterpanel',
                          'span' => 12,
                          'availableToggles' => 
                          array (
                          ),
                          'components' => 
                          array (
                            0 => 
                            array (
                              'layout' => 'filter',
                              'targetEl' => '.filter',
                              'position' => 'prepend',
                              'context' => 
                              array (
                                'layoutName' => 'records',
                              ),
                            ),
                            1 => 
                            array (
                              'view' => 'filter-actions',
                              'targetEl' => '.filter-options',
                            ),
                            2 => 
                            array (
                              'view' => 'filter-rows',
                              'targetEl' => '.filter-options',
                            ),
                            3 => 
                            array (
                              'view' => 'selection-list',
                            ),
                            4 => 
                            array (
                              'view' => 'list-bottom',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'selection-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'selection-list',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'create-nodupecheck' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'create-nodupecheck',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'records' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'list-headerpane',
                      ),
                      1 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'filterpanel',
                          'span' => 12,
                          'last_state' => 
                          array (
                            'id' => 'list-filterpanel',
                            'defaults' => 
                            array (
                              'toggle-view' => 'list',
                            ),
                          ),
                          'availableToggles' => 
                          array (
                            0 => 
                            array (
                              'name' => 'list',
                              'icon' => 'icon-table',
                              'label' => 'LBL_LISTVIEW',
                            ),
                            1 => 
                            array (
                              'name' => 'activitystream',
                              'icon' => 'icon-th-list',
                              'label' => 'LBL_ACTIVITY_STREAM',
                            ),
                          ),
                          'components' => 
                          array (
                            0 => 
                            array (
                              'layout' => 'filter',
                              'targetEl' => '.filter',
                              'position' => 'prepend',
                            ),
                            1 => 
                            array (
                              'view' => 'filter-actions',
                              'targetEl' => '.filter-options',
                            ),
                            2 => 
                            array (
                              'view' => 'filter-rows',
                              'targetEl' => '.filter-options',
                            ),
                            3 => 
                            array (
                              'layout' => 'activitystream',
                              'context' => 
                              array (
                                'module' => 'Activities',
                              ),
                            ),
                            4 => 
                            array (
                              'layout' => 'list',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'list-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'dashboard',
                          'last_state' => 
                          array (
                            'id' => 'last-visit',
                          ),
                        ),
                        'context' => 
                        array (
                          'forceNew' => true,
                          'module' => 'Home',
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'activities' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'list-headerpane',
                      ),
                      1 => 
                      array (
                        'layout' => 
                        array (
                          'type' => 'filterpanel',
                          'span' => 12,
                          'availableToggles' => 
                          array (
                            0 => 
                            array (
                              'name' => 'activitystream',
                              'icon' => 'icon-th-list',
                              'label' => 'LBL_ACTIVITY_STREAM',
                            ),
                          ),
                          'components' => 
                          array (
                            0 => 
                            array (
                              'layout' => 'filter',
                              'targetEl' => '.filter',
                              'position' => 'prepend',
                            ),
                            1 => 
                            array (
                              'view' => 'filter-actions',
                              'targetEl' => '.filter-options',
                            ),
                            2 => 
                            array (
                              'view' => 'filter-rows',
                              'targetEl' => '.filter-options',
                            ),
                            3 => 
                            array (
                              'layout' => 'activitystream',
                              'context' => 
                              array (
                                'module' => 'Activities',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'list-sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'dashboard',
                        'context' => 
                        array (
                          'forceNew' => true,
                          'module' => 'Home',
                        ),
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'merge-duplicates' => 
    array (
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'layout' => 
            array (
              'components' => 
              array (
                0 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'view' => 'merge-duplicates-headerpane',
                      ),
                      1 => 
                      array (
                        'view' => 'merge-duplicates',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'main-pane',
                    'span' => 8,
                  ),
                ),
                1 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'sidebar',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'side-pane',
                    'span' => 4,
                  ),
                ),
                2 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                    ),
                    'type' => 'simple',
                    'name' => 'dashboard-pane',
                    'span' => 4,
                  ),
                ),
                3 => 
                array (
                  'layout' => 
                  array (
                    'components' => 
                    array (
                      0 => 
                      array (
                        'layout' => 'preview',
                      ),
                    ),
                    'type' => 'simple',
                    'name' => 'preview-pane',
                    'span' => 8,
                  ),
                ),
              ),
              'type' => 'default',
              'name' => 'sidebar',
              'span' => 12,
            ),
          ),
        ),
        'type' => 'simple',
        'name' => 'base',
        'span' => 12,
      ),
    ),
    'forgotpassword' => 
    array (
      'meta' => 
      array (
        'type' => 'simple',
        'components' => 
        array (
          0 => 
          array (
            'view' => 'forgotpassword',
          ),
        ),
      ),
    ),
    'dashlet-row' => 
    array (
      'templates' => 
      array (
        'header' => '{{!
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
<a data-toggle="dropdown" class="btn btn-invisible btn-link hide" rel="tooltip" title="{{str "LBL_DASHLET_CONFIGURE"}}" data-placement="bottom"><i class="icon-cog"></i></a>
<ul class="dropdown-menu left">
    <div>
        <li><a class="remove-row">{{str "LBL_DASHLET_REMOVE_LABEL"}}</a></li>
    </div>
</ul>
<a class="move btn btn-invisible btn-link hide" rel="tooltip" title="{{str "LBL_DASHLET_MOVE"}}" data-container="body" data-placement="bottom"><i class="icon-resize-vertical"></i></a>
',
      ),
    ),
    'preview-activitystream' => 
    array (
      'templates' => 
      array (
        'preview-activitystream' => '{{!
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
<ul class="activitystream-list results"></ul>
',
      ),
      'meta' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'view' => 'activitystream-bottom',
          ),
        ),
        'type' => 'preview-activitystream',
        'span' => 12,
      ),
    ),
    '_hash' => 'de93c790af3fd0c573000fa51bbb5b66',
  ),
  'labels' => 
  array (
    'en_us' => 'cache/api/metadata/lang_en_us_base_public.json?v=1386246418',
    'bg_BG' => 'cache/api/metadata/lang_bg_BG_base_public.json?v=1386246418',
    'cs_CZ' => 'cache/api/metadata/lang_cs_CZ_base_public.json?v=1386246418',
    'da_DK' => 'cache/api/metadata/lang_da_DK_base_public.json?v=1386246418',
    'de_DE' => 'cache/api/metadata/lang_de_DE_base_public.json?v=1386246418',
    'el_EL' => 'cache/api/metadata/lang_el_EL_base_public.json?v=1386246418',
    'es_ES' => 'cache/api/metadata/lang_es_ES_base_public.json?v=1386246418',
    'fr_FR' => 'cache/api/metadata/lang_fr_FR_base_public.json?v=1386246418',
    'he_IL' => 'cache/api/metadata/lang_he_IL_base_public.json?v=1386246418',
    'hu_HU' => 'cache/api/metadata/lang_hu_HU_base_public.json?v=1386246418',
    'it_it' => 'cache/api/metadata/lang_it_it_base_public.json?v=1386246418',
    'lt_LT' => 'cache/api/metadata/lang_lt_LT_base_public.json?v=1386246418',
    'ja_JP' => 'cache/api/metadata/lang_ja_JP_base_public.json?v=1386246418',
    'ko_KR' => 'cache/api/metadata/lang_ko_KR_base_public.json?v=1386246418',
    'lv_LV' => 'cache/api/metadata/lang_lv_LV_base_public.json?v=1386246418',
    'nb_NO' => 'cache/api/metadata/lang_nb_NO_base_public.json?v=1386246418',
    'nl_NL' => 'cache/api/metadata/lang_nl_NL_base_public.json?v=1386246418',
    'pl_PL' => 'cache/api/metadata/lang_pl_PL_base_public.json?v=1386246418',
    'pt_PT' => 'cache/api/metadata/lang_pt_PT_base_public.json?v=1386246418',
    'ro_RO' => 'cache/api/metadata/lang_ro_RO_base_public.json?v=1386246419',
    'ru_RU' => 'cache/api/metadata/lang_ru_RU_base_public.json?v=1386246419',
    'sv_SE' => 'cache/api/metadata/lang_sv_SE_base_public.json?v=1386246419',
    'tr_TR' => 'cache/api/metadata/lang_tr_TR_base_public.json?v=1386246419',
    'zh_CN' => 'cache/api/metadata/lang_zh_CN_base_public.json?v=1386246419',
    'pt_BR' => 'cache/api/metadata/lang_pt_BR_base_public.json?v=1386246419',
    'ca_ES' => 'cache/api/metadata/lang_ca_ES_base_public.json?v=1386246419',
    'en_UK' => 'cache/api/metadata/lang_en_UK_base_public.json?v=1386246419',
    'sr_RS' => 'cache/api/metadata/lang_sr_RS_base_public.json?v=1386246419',
    'sk_SK' => 'cache/api/metadata/lang_sk_SK_base_public.json?v=1386246419',
    'sq_AL' => 'cache/api/metadata/lang_sq_AL_base_public.json?v=1386246419',
    'et_EE' => 'cache/api/metadata/lang_et_EE_base_public.json?v=1386246419',
    'default' => 'en_us',
  ),
  'modules' => 
  array (
    'Login' => 
    array (
      'fields' => 
      array (
      ),
    ),
  ),
  'config' => 
  array (
    'maxQueryResult' => 20,
    'maxSubpanelResult' => 5,
    'honeypot_on' => true,
    'forgotpasswordON' => true,
  ),
  'jssource' => 'cache/javascript/base/components_a712e7388f2f43f815502b161e09be63.js',
  '_override_values' => 
  array (
    0 => 'fields',
    5 => 'config',
  ),
  'logo_url' => 'themes/default/images/company_logo.png?v=gd2Ig--TjYEGWzaF0U0zmA',
  '_hash' => '00d301827840925ce82d4db97564d660',
);