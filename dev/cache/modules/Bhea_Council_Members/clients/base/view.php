<?php
$clientCache['Bhea_Council_Members']['base']['view'] = array (
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
              'type' => 'rowaction',
              'event' => 'button:duplicate_button:click',
              'name' => 'duplicate_button',
              'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
              'acl_module' => 'Bhea_Council_Members',
            ),
            3 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:delete_button:click',
              'name' => 'delete_button',
              'label' => 'LBL_DELETE_BUTTON_LABEL',
              'acl_action' => 'delete',
            ),
            4 => 
            array (
              'type' => 'vcard',
              'name' => 'vcard_button',
              'label' => 'LBL_VCARD_DOWNLOAD',
              'acl_action' => 'edit',
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
            0 => 
            array (
              'name' => 'familiar_name',
              'label' => 'LBL_FAMILIAR_NAME',
            ),
            1 => 
            array (
              'name' => 'account',
              'studio' => 'visible',
              'label' => 'LBL_ACCOUNT',
            ),
            2 => 'phone_work',
            3 => 'phone_mobile',
            4 => 'title',
            5 => 'department',
            6 => 
            array (
              'name' => 'member_from',
              'label' => 'LBL_MEMBER_FROM',
            ),
            7 => 
            array (
              'name' => 'member_till',
              'label' => 'LBL_MEMBER_TILL',
            ),
            8 => 
            array (
              'name' => 'membership_status',
              'studio' => 'visible',
              'label' => 'LBL_MEMBERSHIP_STATUS',
              'span' => 12,
            ),
            9 => 
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
            10 => 
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
            11 => 
            array (
              'name' => 'bhea_councils_bhea_council_members_1_name',
              'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCILS_TITLE',
            ),
            12 => 
            array (
              'name' => 'bhea_council_members_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
            ),
            13 => 
            array (
              'name' => 'accounts_bhea_council_members_1_name',
            ),
          ),
        ),
        2 => 
        array (
          'columns' => 2,
          'name' => 'panel_hidden',
          'label' => 'LBL_SHOW_MORE',
          'hide' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'assigned_user_name',
            1 => 
            array (
              'name' => 'team_name',
              'studio' => 
              array (
                'portallistview' => false,
                'portalrecordview' => false,
              ),
              'label' => 'LBL_TEAMS',
            ),
            2 => 'date_entered',
            3 => 
            array (
              'name' => 'created_by_name',
              'readonly' => true,
              'label' => 'LBL_CREATED',
            ),
            4 => 'date_modified',
            5 => 
            array (
              'name' => 'modified_by_name',
              'readonly' => true,
              'label' => 'LBL_MODIFIED_NAME',
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
          'LBL_SHOW_MORE' => 
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
          'label' => 'LBL_PANEL_DEFAULT',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => true,
              'enabled' => true,
              'link' => true,
              'related_fields' => 
              array (
                0 => 'first_name',
                1 => 'last_name',
                2 => 'salutation',
              ),
              'width' => '10%',
            ),
            1 => 
            array (
              'name' => 'account',
              'label' => 'LBL_ACCOUNT',
              'enabled' => true,
              'id' => 'ACCOUNT_ID_C',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'bhea_council_members_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNC1877ERSHIPS_IDB',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'bhea_councils_bhea_council_members_1_name',
              'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCILS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1BHEA_COUNCILS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'membership_status',
              'label' => 'LBL_MEMBERSHIP_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'member_till',
              'label' => 'LBL_MEMBER_TILL',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'phone_work',
              'width' => '10%',
              'label' => 'LBL_OFFICE_PHONE',
              'default' => true,
              'enabled' => true,
            ),
            7 => 
            array (
              'name' => 'email',
              'width' => '10%',
              'label' => 'LBL_EMAIL_ADDRESS',
              'link' => true,
              'default' => true,
              'enabled' => true,
            ),
            8 => 
            array (
              'name' => 'date_entered',
              'width' => '10%',
              'label' => 'LBL_DATE_ENTERED',
              'default' => true,
              'enabled' => true,
              'readonly' => true,
            ),
            9 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'readonly' => true,
              'width' => '10%',
              'default' => true,
            ),
            10 => 
            array (
              'name' => 'do_not_call',
              'width' => '10%',
              'label' => 'LBL_DO_NOT_CALL',
              'default' => false,
              'enabled' => true,
            ),
            11 => 
            array (
              'name' => 'phone_home',
              'width' => '10%',
              'label' => 'LBL_HOME_PHONE',
              'default' => false,
              'enabled' => true,
            ),
            12 => 
            array (
              'name' => 'phone_mobile',
              'width' => '10%',
              'label' => 'LBL_MOBILE_PHONE',
              'default' => false,
              'enabled' => true,
            ),
            13 => 
            array (
              'name' => 'phone_other',
              'width' => '10%',
              'label' => 'LBL_WORK_PHONE',
              'default' => false,
              'enabled' => true,
            ),
            14 => 
            array (
              'name' => 'phone_fax',
              'width' => '10%',
              'label' => 'LBL_FAX_PHONE',
              'default' => false,
              'enabled' => true,
            ),
            15 => 
            array (
              'name' => 'member_from',
              'label' => 'LBL_MEMBER_FROM',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            16 => 
            array (
              'name' => 'address_street',
              'width' => '10%',
              'label' => 'LBL_PRIMARY_ADDRESS_STREET',
              'default' => false,
              'enabled' => true,
            ),
            17 => 
            array (
              'name' => 'address_city',
              'width' => '10%',
              'label' => 'LBL_PRIMARY_ADDRESS_CITY',
              'default' => false,
              'enabled' => true,
            ),
            18 => 
            array (
              'name' => 'address_state',
              'width' => '10%',
              'label' => 'LBL_PRIMARY_ADDRESS_STATE',
              'default' => false,
              'enabled' => true,
            ),
            19 => 
            array (
              'name' => 'address_postalcode',
              'width' => '10%',
              'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
              'default' => false,
              'enabled' => true,
            ),
            20 => 
            array (
              'name' => 'created_by_name',
              'width' => '10%',
              'label' => 'LBL_CREATED',
              'default' => false,
              'enabled' => true,
              'readonly' => true,
            ),
            21 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => '10%',
              'default' => false,
              'enabled' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-bhea_councils' => 
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
              'type' => 'fieldset',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'first_name',
                  'link' => true,
                ),
                1 => 
                array (
                  'name' => 'last_name',
                  'link' => true,
                ),
              ),
              'css_class' => 'full-name',
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            1 => 
            array (
              'name' => 'account',
              'label' => 'LBL_ACCOUNT',
              'enabled' => true,
              'id' => 'ACCOUNT_ID_C',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'bhea_council_members_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNC1877ERSHIPS_IDB',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'bhea_councils_bhea_council_members_1_name',
              'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCILS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1BHEA_COUNCILS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'membership_status',
              'label' => 'LBL_MEMBERSHIP_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'member_till',
              'label' => 'LBL_MEMBER_TILL',
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
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
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
      'type' => 'subpanel-list',
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
              'type' => 'fieldset',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'first_name',
                  'link' => true,
                ),
                1 => 
                array (
                  'name' => 'last_name',
                  'link' => true,
                ),
              ),
              'css_class' => 'full-name',
              'width' => 49,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            1 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
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
  '_hash' => 'bd7f9648206733658966eab0ffa97c22',
);

