<?php
$clientCache['Prospects']['base']['view'] = array (
  'convert-results' => 
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
({extendsFrom:\'ConvertResultsView\',populateResults:function(){if(!_.isEmpty(this.model.get(\'lead_id\'))){var leads=app.data.createBean(\'Leads\',{id:this.model.get(\'lead_id\')});leads.fetch({success:_.bind(this.populateLeadCallback,this),error:function(){app.logger.error.log("error");}});}},populateLeadCallback:function(leadModel){var rowTitle;this.associatedModels.reset();rowTitle=app.lang.get(\'LBL_CONVERTED_LEAD\',this.module);leadModel.set(\'row_title\',rowTitle);this.associatedModels.push(leadModel);app.view.View.prototype.render.call(this);}})',
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
              'name' => 'full_name',
              'type' => 'fullname',
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
              'link' => true,
              'css_class' => 'full-name',
              'width' => 49,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_TITLE',
              'enabled' => true,
              'default' => true,
              'name' => 'title',
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_EMAIL_ADDRESS',
              'enabled' => true,
              'default' => true,
              'name' => 'email',
              'sortable' => false,
            ),
            3 => 
            array (
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
              'name' => 'phone_work',
            ),
          ),
        ),
      ),
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
              'type' => 'divider',
            ),
            3 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:convert_button:click',
              'name' => 'convert_button',
              'label' => 'LBL_CONVERT_BUTTON_LABEL',
              'acl_action' => 'edit',
            ),
            4 => 
            array (
              'type' => 'manage-subscription',
              'name' => 'manage_subscription_button',
              'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
            ),
            5 => 
            array (
              'type' => 'vcard',
              'name' => 'vcard_button',
              'label' => 'LBL_VCARD_DOWNLOAD',
              'acl_action' => 'edit',
            ),
            6 => 
            array (
              'type' => 'divider',
            ),
            7 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:find_duplicates_button:click',
              'name' => 'find_duplicates_button',
              'label' => 'LBL_DUP_MERGE',
              'acl_action' => 'edit',
            ),
            8 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:duplicate_button:click',
              'name' => 'duplicate_button',
              'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
              'acl_module' => 'Prospects',
            ),
            9 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:audit_button:click',
              'name' => 'audit_button',
              'label' => 'LNK_VIEW_CHANGE_LOG',
              'acl_action' => 'view',
            ),
            10 => 
            array (
              'type' => 'divider',
            ),
            11 => 
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
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
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
            ),
            1 => 
            array (
              'name' => 'full_name',
              'type' => 'fullname',
              'label' => 'LBL_NAME',
              'dismiss_label' => true,
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
            ),
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
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
          'columns' => 2,
          'labels' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'account_name',
            1 => 'title',
            2 => 'email',
            3 => 'department',
            4 => 'phone_mobile',
            5 => 'do_not_call',
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'hide' => true,
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'fieldset_address',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_PRIMARY_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'primary_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
                ),
                1 => 
                array (
                  'name' => 'primary_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
                ),
                2 => 
                array (
                  'name' => 'primary_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
                ),
                3 => 
                array (
                  'name' => 'primary_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                ),
                4 => 
                array (
                  'name' => 'primary_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                ),
              ),
            ),
            1 => 
            array (
              'name' => 'fieldset_altaddress',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_ALT_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'alt_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_STREET',
                ),
                1 => 
                array (
                  'name' => 'alt_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_CITY',
                ),
                2 => 
                array (
                  'name' => 'alt_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_STATE',
                ),
                3 => 
                array (
                  'name' => 'alt_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_POSTAL_CODE',
                ),
                4 => 
                array (
                  'name' => 'alt_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_COUNTRY',
                ),
                5 => 
                array (
                  'name' => 'copy',
                  'label' => 'NTC_COPY_PRIMARY_ADDRESS',
                  'type' => 'copy',
                  'mapping' => 
                  array (
                    'primary_address_street' => 'alt_address_street',
                    'primary_address_city' => 'alt_address_city',
                    'primary_address_state' => 'alt_address_state',
                    'primary_address_postalcode' => 'alt_address_postalcode',
                    'primary_address_country' => 'alt_address_country',
                  ),
                ),
              ),
            ),
            2 => 'phone_work',
            3 => 'assigned_user_name',
            4 => 'twitter',
            5 => 
            array (
              'name' => 'description',
              'span' => 12,
              'related_fields' => 
              array (
                0 => 'lead_id',
              ),
            ),
            6 => 
            array (
              'name' => 'date_modified_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_MODIFIED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_modified',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'modified_by_name',
                ),
              ),
            ),
            7 => 'team_name',
            8 => 
            array (
              'name' => 'date_entered_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_ENTERED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_entered',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'created_by_name',
                ),
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
({extendsFrom:\'RecordView\',delegateButtonEvents:function(){this.context.on(\'button:convert_button:click\',this.convertProspectClicked,this);app.view.invokeParent(this,{type:\'view\',name:\'record\',method:\'delegateButtonEvents\'});},convertProspectClicked:function(){var prefill=app.data.createBean(\'Leads\');prefill.copy(this.model);app.drawer.open({layout:\'create-actions\',context:{create:true,model:prefill,module:\'Leads\',prospect_id:this.model.get(\'id\')}},_.bind(function(context,model){if(model&&model.id&&!this.disposed){this.model.fetch();}},this));}})',
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
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'type' => 'fullname',
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
              'link' => true,
              'css_class' => 'full-name',
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'title',
              'label' => 'LBL_LIST_TITLE',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL_ADDRESS',
              'sortable' => false,
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'recordlist' => 
  array (
    'meta' => 
    array (
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
            'name' => 'addtolist_button',
            'type' => 'button',
            'label' => 'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massaddtolist:fire',
            ),
            'acl_module' => 'ProspectLists',
            'acl_action' => 'edit',
          ),
          3 => 
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
          4 => 
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
    ),
  ),
  'headerpane' => 
  array (
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
          'name' => 'import_vcard_button',
          'type' => 'button',
          'label' => 'LBL_IMPORT_VCARD',
          'css_class' => 'btn-primary',
          'acl_action' => 'create',
          'events' => 
          array (
            'click' => 'function(e){
                    app.drawer.open({
                            layout : "vcard-import",
                            context: {
                                create: true
                            }
                        });
                    }',
          ),
        ),
        2 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
    ),
  ),
  'twitter' => 
  array (
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'name' => 'LBL_TWITTER_NAME',
          'description' => 'LBL_TWITTER_DESCRIPTION',
          'config' => 
          array (
            'limit' => '20',
          ),
          'preview' => 
          array (
            'title' => 'LBL_TWITTER_MY_ACCOUNT',
            'twitter' => 'sugarcrm',
            'limit' => '3',
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
            'label' => 'LBL_TWITTER_DISPLAY_ROWS',
            'type' => 'enum',
            'options' => 
            array (
              5 => 5,
              10 => 10,
              15 => 15,
              20 => 20,
              50 => 50,
            ),
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
  '_hash' => 'f07c6681e0dd00ab5b69987a08f8b318',
);

