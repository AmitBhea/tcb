<?php
$clientCache['Cases']['base']['view'] = array (
  'subpanel-for-accounts' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
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
              'label' => 'LBL_LIST_NUMBER',
              'enabled' => true,
              'default' => true,
              'name' => 'case_number',
            ),
            1 => 
            array (
              'name' => 'work_log',
              'label' => 'LBL_WORK_LOG',
              'enabled' => true,
              'sortable' => false,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'system_id',
              'label' => 'LBL_SYSTEM_ID',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_PRIORITY',
              'enabled' => true,
              'default' => true,
              'name' => 'priority',
            ),
            5 => 
            array (
              'label' => 'LBL_LIST_DATE_CREATED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_entered',
            ),
            6 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'readonly' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-contacts' => 
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
              'label' => 'LBL_LIST_NUMBER',
              'enabled' => true,
              'default' => true,
              'name' => 'case_number',
            ),
            1 => 
            array (
              'name' => 'system_id',
              'label' => 'LBL_SYSTEM_ID',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'work_log',
              'label' => 'LBL_WORK_LOG',
              'enabled' => true,
              'sortable' => false,
              'default' => true,
            ),
            3 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            5 => 
            array (
              'label' => 'LBL_LIST_DATE_CREATED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_entered',
            ),
            6 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'readonly' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
    ),
  ),
  'subpanel-for-documents' => 
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
              'label' => 'LBL_LIST_NUMBER',
              'enabled' => true,
              'default' => true,
              'name' => 'case_number',
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            2 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            3 => 
            array (
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DATE_CREATED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_entered',
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
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
              'label' => 'LBL_LIST_NUMBER',
              'enabled' => true,
              'default' => true,
              'name' => 'case_number',
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            2 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            3 => 
            array (
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DATE_CREATED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_entered',
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
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
              'type' => 'rowaction',
              'route' => '#bwc/index.php?module=KBDocuments&action=EditView',
              'name' => 'create_kbdocument_button',
              'label' => 'LBL_CREATE_KB_DOCUMENT',
              'acl_module' => 'KBDocuments',
              'acl_action' => 'create',
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
              'acl_module' => 'Bugs',
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
            0 => 
            array (
              'name' => 'case_number',
              'readonly' => true,
            ),
            1 => 'priority',
            2 => 'account_name',
            3 => 'portal_viewable',
            4 => 
            array (
              'name' => 'resolution',
              'nl2br' => true,
              'span' => 12,
            ),
            5 => 'status',
            6 => 'assigned_user_name',
            7 => 
            array (
              'name' => 'description',
              'nl2br' => true,
              'span' => 12,
            ),
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
            0 => 'type',
            1 => 
            array (
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
              'name' => 'case_number',
              'label' => 'LBL_LIST_NUMBER',
              'width' => 5,
              'default' => true,
              'enabled' => true,
              'readonly' => true,
            ),
            1 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_SUBJECT',
              'width' => 25,
              'link' => true,
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'width' => 20,
              'module' => 'Accounts',
              'id' => 'ACCOUNT_ID',
              'ACLTag' => 'ACCOUNT',
              'related_fields' => 
              array (
                0 => 'account_id',
              ),
              'link' => true,
              'default' => true,
              'enabled' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'priority',
              'label' => 'LBL_LIST_PRIORITY',
              'width' => 10,
              'default' => true,
              'enabled' => true,
            ),
            4 => 
            array (
              'name' => 'status',
              'label' => 'LBL_STATUS',
              'width' => 10,
              'default' => true,
              'enabled' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => 10,
              'id' => 'ASSIGNED_USER_ID',
              'default' => true,
              'enabled' => true,
              'sortable' => false,
            ),
            6 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'width' => 10,
              'default' => true,
              'enabled' => true,
              'readonly' => true,
            ),
            7 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_LIST_TEAM',
              'width' => 10,
              'default' => false,
              'enabled' => true,
              'sortable' => false,
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
  '_hash' => '8b1e151d6dd9ab883df60daafece749e',
);

