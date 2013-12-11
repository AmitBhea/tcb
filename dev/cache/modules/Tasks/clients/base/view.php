<?php
$clientCache['Tasks']['base']['view'] = array (
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
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            2 => 
            array (
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT',
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
            ),
            3 => 
            array (
              'target_record_key' => 'parent_id',
              'label' => 'LBL_LIST_RELATED_TO',
              'enabled' => true,
              'default' => true,
              'name' => 'parent_name',
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
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
              'primary' => true,
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
              'type' => 'closebutton',
              'name' => 'record-close-new',
              'label' => 'LBL_CLOSE_AND_CREATE_BUTTON_TITLE',
              'acl_action' => 'edit',
            ),
            6 => 
            array (
              'type' => 'closebutton',
              'name' => 'record-close',
              'label' => 'LBL_CLOSE_BUTTON_TITLE',
              'acl_action' => 'edit',
            ),
            7 => 
            array (
              'type' => 'divider',
            ),
            8 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:find_duplicates_button:click',
              'name' => 'find_duplicates_button',
              'label' => 'LBL_DUP_MERGE',
              'acl_action' => 'edit',
            ),
            9 => 
            array (
              'type' => 'rowaction',
              'name' => 'duplicate_button',
              'event' => 'button:duplicate_button:click',
              'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
              'acl_module' => 'Tasks',
            ),
            10 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:audit_button:click',
              'name' => 'audit_button',
              'label' => 'LNK_VIEW_CHANGE_LOG',
              'acl_action' => 'view',
            ),
            11 => 
            array (
              'type' => 'divider',
            ),
            12 => 
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
              'readonly' => true,
            ),
            1 => 'name',
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
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'date_start',
            1 => 'priority',
            2 => 'date_due',
            3 => 'status',
            4 => 'assigned_user_name',
            5 => 'parent_name',
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'hide' => true,
          'columns' => 2,
          'labelsOnTop' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            1 => 
            array (
              'name' => 'contact_name',
              'span' => 12,
            ),
            2 => 
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
            3 => 'team_name',
            4 => 
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
({setupDuplicateFields:function(prefill){var duplicateBlackList=["id","status"];_.each(duplicateBlackList,function(field){if(field&&prefill.has(field)){prefill.unset(field);}});}})',
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
              'width' => 40,
              'link' => true,
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'contact_name',
              'width' => '20',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'id' => 'CONTACT_ID',
              'module' => 'Contacts',
              'enabled' => true,
              'default' => true,
              'ACLTag' => 'CONTACT',
              'related_fields' => 
              array (
                0 => 'contact_id',
              ),
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'parent_name',
              'width' => '20',
              'label' => 'LBL_LIST_RELATED_TO',
              'dynamic_module' => 'PARENT_TYPE',
              'id' => 'PARENT_ID',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'sortable' => false,
              'ACLTag' => 'PARENT',
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
              ),
            ),
            3 => 
            array (
              'name' => 'date_due',
              'width' => '15',
              'label' => 'LBL_LIST_DUE_DATE',
              'link' => false,
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'team_name',
              'width' => '2',
              'label' => 'LBL_LIST_TEAM',
              'enabled' => true,
              'default' => false,
              'sortable' => false,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '2',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            6 => 
            array (
              'name' => 'date_start',
              'width' => '5',
              'label' => 'LBL_LIST_START_DATE',
              'link' => false,
              'enabled' => true,
              'default' => false,
            ),
            7 => 
            array (
              'name' => 'status',
              'width' => '10',
              'label' => 'LBL_LIST_STATUS',
              'link' => false,
              'enabled' => true,
              'default' => false,
            ),
            8 => 
            array (
              'name' => 'date_entered',
              'width' => '10',
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
          1 => 
          array (
            'type' => 'rowaction',
            'name' => 'edit_button',
            'icon' => 'icon-pencil',
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
            'type' => 'closebutton',
            'name' => 'record-close',
            'label' => 'LBL_CLOSE_BUTTON_TITLE',
            'acl_action' => 'edit',
          ),
          4 => 
          array (
            'type' => 'rowaction',
            'icon' => 'icon-trash',
            'event' => 'list:deleterow:fire',
            'label' => 'LBL_DELETE_BUTTON',
            'acl_action' => 'delete',
          ),
        ),
      ),
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
      'duplicateCheck' => false,
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'header' => true,
          'fields' => 
          array (
            0 => 'name',
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'date_start',
            1 => 'priority',
            2 => 'date_due',
            3 => 'status',
            4 => 'assigned_user_name',
            5 => 'parent_name',
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'hide' => true,
          'columns' => 2,
          'labelsOnTop' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            1 => 'contact_name',
            2 => 
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
                  'display_default' => 'today',
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
            3 => 'team_name',
            4 => 
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
                  'display_default' => 'today',
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
  '_hash' => '65f9a0453cfce577172b8b506db7d9cf',
);

