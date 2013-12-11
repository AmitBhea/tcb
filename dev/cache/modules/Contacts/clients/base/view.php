<?php
$clientCache['Contacts']['base']['view'] = array (
  'subpanel-for-contracts' => 
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
              'sortable' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-cases' => 
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
              'sortable' => false,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
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
              'type' => 'manage-subscription',
              'name' => 'manage_subscription_button',
              'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
              'showOn' => 'view',
              'value' => 'edit',
            ),
            6 => 
            array (
              'type' => 'vcard',
              'name' => 'vcard_button',
              'label' => 'LBL_VCARD_DOWNLOAD',
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
              'name' => 'find_duplicates',
              'label' => 'LBL_DUP_MERGE',
              'acl_action' => 'edit',
            ),
            9 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:duplicate_button:click',
              'name' => 'duplicate_button',
              'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
              'acl_module' => 'Contacts',
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
            ),
            1 => 
            array (
              'name' => 'full_name',
              'label' => 'LBL_NAME',
              'dismiss_label' => true,
              'type' => 'fullname',
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
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'familiar_name_c',
              'label' => 'LBL_FAMILIAR_NAME',
            ),
            1 => 'title',
            2 => 
            array (
              'name' => 'contacts_id_c',
              'label' => 'LBL_CONTACTS_ID',
              'span' => 6,
            ),
            3 => 
            array (
              'span' => 6,
            ),
            4 => 'department',
            5 => 'account_name',
            6 => 'phone_work',
            7 => 'phone_mobile',
            8 => 'phone_fax',
            9 => 
            array (
              'name' => 'type_c',
              'studio' => 'visible',
              'label' => 'LBL_TYPE',
            ),
            10 => 
            array (
              'name' => 'status_c',
              'studio' => 'visible',
              'label' => 'LBL_STATUS',
            ),
            11 => 
            array (
              'name' => 'job_function_c',
              'label' => 'LBL_JOB_FUNCTION',
            ),
            12 => 
            array (
              'name' => 'first_activity_c',
              'label' => 'LBL_FIRST_ACTIVITY',
            ),
            13 => 
            array (
              'name' => 'last_activity_c',
              'label' => 'LBL_LAST_ACTIVITY',
            ),
            14 => 
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
            15 => 
            array (
              'name' => 'fieldset_alt_address',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_ALT_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'alt_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_ALT_ADDRESS_STREET',
                ),
                1 => 
                array (
                  'name' => 'alt_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_ALT_ADDRESS_CITY',
                ),
                2 => 
                array (
                  'name' => 'alt_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_ALT_ADDRESS_STATE',
                ),
                3 => 
                array (
                  'name' => 'alt_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_ALT_ADDRESS_POSTALCODE',
                ),
                4 => 
                array (
                  'name' => 'alt_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_ALT_ADDRESS_COUNTRY',
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
            16 => 
            array (
              'name' => 'email',
              'span' => 6,
            ),
            17 => 
            array (
              'span' => 6,
            ),
            18 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
          ),
        ),
        2 => 
        array (
          'columns' => 2,
          'name' => 'panel_hidden',
          'hide' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'lead_source',
            1 => 
            array (
              'name' => 'campaign_name',
            ),
            2 => 'assigned_user_name',
            3 => 'team_name',
            4 => 
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
            5 => 
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
            6 => 
            array (
              'name' => 'language_c',
              'studio' => 'visible',
              'label' => 'LBL_LANGUAGE',
            ),
            7 => 
            array (
              'name' => 'leads_contacts_1_name',
              'label' => 'LBL_LEADS_CONTACTS_1_FROM_LEADS_TITLE',
            ),
            8 => 'report_to_name',
            9 => 
            array (
              'name' => 'comm_preference_c',
              'studio' => 'visible',
              'label' => 'LBL_COMM_PREFERENCE',
            ),
            10 => 
            array (
              'name' => 'username_c',
              'label' => 'LBL_USERNAME',
            ),
            11 => 
            array (
              'name' => 'password_c',
              'label' => 'LBL_PASSWORD',
            ),
            12 => 'sync_contact',
            13 => 
            array (
              'name' => 'do_not_call',
              'span' => 6,
            ),
            14 => 
            array (
              'span' => 6,
            ),
            15 => 
            array (
              'span' => 6,
            ),
            16 => 
            array (
              'span' => 6,
            ),
            17 => 
            array (
              'span' => 6,
            ),
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'useTabs' => false,
        'tabDefs' => 
        array (
          'LBL_RECORD_BODY' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_RECORD_SHOWMORE' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
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
              'width' => '10%',
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'contacts_id_c',
              'label' => 'LBL_CONTACTS_ID',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
              'width' => '10%',
            ),
            3 => 
            array (
              'name' => 'status_c',
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'type_c',
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'opportunity_role',
              'label' => 'LBL_OPPORTUNITY_ROLE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'username_c',
              'label' => 'LBL_USERNAME',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'phone_work',
              'enabled' => true,
              'default' => true,
              'width' => '10%',
            ),
            8 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '10%',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            9 => 
            array (
              'name' => 'date_entered',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
              'width' => '10%',
            ),
            10 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'readonly' => true,
              'width' => '10%',
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-bhea_sessions' => 
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
              'sortable' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'phone_mobile',
              'label' => 'LBL_MOBILE_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'title',
              'label' => 'LBL_TITLE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'department',
              'label' => 'LBL_DEPARTMENT',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            6 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'primary_address_street',
              'label' => 'LBL_PRIMARY_ADDRESS_STREET',
              'enabled' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'primary_address_street_2',
              'label' => 'LBL_PRIMARY_ADDRESS_STREET_2',
              'enabled' => true,
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'primary_address_street_3',
              'label' => 'LBL_PRIMARY_ADDRESS_STREET_3',
              'enabled' => true,
              'default' => true,
            ),
            10 => 
            array (
              'name' => 'primary_address_city',
              'label' => 'LBL_PRIMARY_ADDRESS_CITY',
              'enabled' => true,
              'default' => true,
            ),
            11 => 
            array (
              'name' => 'primary_address_state',
              'label' => 'LBL_PRIMARY_ADDRESS_STATE',
              'enabled' => true,
              'default' => true,
            ),
            12 => 
            array (
              'name' => 'primary_address_country',
              'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
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
              'name' => 'name',
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
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
            2 => 
            array (
              'name' => 'title',
              'label' => 'LBL_TITLE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'first_activity_c',
              'label' => 'LBL_FIRST_ACTIVITY',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'last_activity_c',
              'label' => 'LBL_LAST_ACTIVITY',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'status_c',
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'primary_address_city',
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'primary_address_state',
              'label' => 'LBL_LIST_STATE',
              'enabled' => true,
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-meetings' => 
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
              'sortable' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
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
              'sortable' => false,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'opportunity_role',
              'label' => 'LBL_OPPORTUNITY_ROLE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'department',
              'label' => 'LBL_DEPARTMENT',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'first_activity_c',
              'label' => 'LBL_FIRST_ACTIVITY',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'last_activity_c',
              'label' => 'LBL_LAST_ACTIVITY',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            7 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'readonly' => true,
              'default' => true,
            ),
            9 => 
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
    ),
  ),
  'subpanel-for-opportunities' => 
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
              'sortable' => false,
            ),
            1 => 
            array (
              'name' => 'type_c',
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'status_c',
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'contacts_id_c',
              'label' => 'LBL_CONTACTS_ID',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'username_c',
              'label' => 'LBL_USERNAME',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'opportunity_role',
              'label' => 'LBL_LIST_CONTACT_ROLE',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            7 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-documents' => 
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
              'sortable' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-leads' => 
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
              'name' => 'contacts_id_c',
              'label' => 'LBL_CONTACTS_ID',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
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
              'sortable' => true,
            ),
            2 => 
            array (
              'name' => 'phone_mobile',
              'label' => 'LBL_MOBILE_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'type_c',
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'job_function_c',
              'label' => 'LBL_JOB_FUNCTION',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'status_c',
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'title',
              'label' => 'LBL_TITLE',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            8 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
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
              'sortable' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
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
          'acl_action' => 'import',
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
  '_hash' => 'eda8596463601dfa3e2ebe5eb76f7064',
);

