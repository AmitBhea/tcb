<?php
$module_name = 'Bhea_Council_Members';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
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
  ),
);
