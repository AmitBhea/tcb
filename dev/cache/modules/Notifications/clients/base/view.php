<?php
$clientCache['Notifications']['base']['view'] = array (
  'raw' => 
  array (
    'templates' => 
    array (
      'raw' => '{{!
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
    <h4>
        <span class="module-subtitle">{{str ../meta.label ../module}}</span>
    </h4>
    {{#if ../collection.length}}
        <ul class="notification-list">
            {{#each ../../collection.models}}
                <li name="{{module}}_{{attributes.id}}"
                    class="single tr-{{attributes.severity}}">
                    {{#each ../fields}}
                        {{field ../../../../this model=../this template="detail"}}
                    {{/each}}
                </li>
            {{/each}}
        </ul>
    {{else}}
        <div class="block-footer">
            {{#if ../../collection.dataFetched}}
                {{str "LBL_LISTVIEW_NO_RECORDS"}}
            {{else}}
                {{str "LBL_LOADING"}}
            {{/if}}
        </div>
    {{/if}}
{{/each}}
',
    ),
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
              'name' => 'severity',
              'type' => 'severity',
              'css_class' => 'level',
            ),
            1 => 
            array (
              'name' => 'name',
              'css_class' => 'name',
            ),
            2 => 
            array (
              'name' => 'date_entered',
              'css_class' => 'pull-right date',
            ),
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
({plugins:[\'Timeago\'],events:{\'click span.name\':\'toggleName\'},initialize:function(options){var meta=app.metadata.getView(options.module,\'raw\')||{};options.meta=_.extend({},meta,options.meta||{});this._super(\'initialize\',[options]);this._initCollection();},_initCollection:function(){this.collection.options={params:{order_by:\'date_entered:desc\'}};this.collection.filterDef=[];this.collection.filterDef.push({\'$owner\':\'\'});if(_.isUndefined(this.meta.filter_type)){return this;}
var startDate=new Date();startDate.setHours(0,0,0);startDate.toISOString();var endDate=new Date();endDate.setHours(23,59,59);endDate.toISOString();var defaultFilters={today:{date_entered:{$dateBetween:[startDate,endDate]}},recent:{date_entered:{$lt:startDate}}};this.collection.filterDef.push(defaultFilters[this.meta.filter_type]);return this;},bindDataChange:function(){if(this.collection){this.collection.on(\'reset\',function(){this.render();},this);}},toggleName:function(e){this.$(e.currentTarget).toggleClass(\'expanded\');}})',
    ),
  ),
  'list-headerpane' => 
  array (
    'meta' => 
    array (
      'type' => 'headerpane',
      'title' => 'LBL_MODULE_NAME',
      'buttons' => 
      array (
        0 => 
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
  '_hash' => '3bd92567d659a2e652fbcb0671ef2cf4',
);

