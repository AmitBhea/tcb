<?php
$clientCache['Accounts']['base']['view'] = array (
  'subpanel-for-campaigns' => 
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
              'default' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'name' => 'name',
              'link' => true,
              'type' => 'name',
            ),
            1 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'name' => 'billing_address_city',
            ),
            2 => 
            array (
              'type' => 'varchar',
              'default' => true,
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'name' => 'billing_address_country',
            ),
            3 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'name' => 'phone_office',
              'type' => 'phone',
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
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
              'name' => 'company_id_c',
              'label' => 'LBL_COMPANY_ID',
            ),
            1 => 
            array (
              'name' => 'company_alias_c',
              'label' => 'LBL_COMPANY_ALIAS',
            ),
            2 => 'account_type',
            3 => 'website',
            4 => 
            array (
              'name' => 'legal_status_c',
              'studio' => 'visible',
              'label' => 'LBL_LEGAL_STATUS',
            ),
            5 => 
            array (
              'name' => 'classification_c',
              'studio' => 'visible',
              'label' => 'LBL_CLASSIFICATION',
            ),
            6 => 'phone_office',
            7 => 'email',
            8 => 
            array (
              'name' => 'fieldset_address',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_BILLING_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'billing_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_BILLING_ADDRESS_STREET',
                ),
                1 => 
                array (
                  'name' => 'billing_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_BILLING_ADDRESS_CITY',
                ),
                2 => 
                array (
                  'name' => 'billing_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_BILLING_ADDRESS_STATE',
                ),
                3 => 
                array (
                  'name' => 'billing_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_BILLING_ADDRESS_POSTALCODE',
                ),
                4 => 
                array (
                  'name' => 'billing_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_BILLING_ADDRESS_COUNTRY',
                ),
              ),
            ),
            9 => 
            array (
              'name' => 'fieldset_shipping_address',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_SHIPPING_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'shipping_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_SHIPPING_ADDRESS_STREET',
                ),
                1 => 
                array (
                  'name' => 'shipping_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_SHIPPING_ADDRESS_CITY',
                ),
                2 => 
                array (
                  'name' => 'shipping_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_SHIPPING_ADDRESS_STATE',
                ),
                3 => 
                array (
                  'name' => 'shipping_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
                ),
                4 => 
                array (
                  'name' => 'shipping_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                ),
                5 => 
                array (
                  'name' => 'copy',
                  'label' => 'NTC_COPY_BILLING_ADDRESS',
                  'type' => 'copy',
                  'mapping' => 
                  array (
                    'billing_address_street' => 'shipping_address_street',
                    'billing_address_city' => 'shipping_address_city',
                    'billing_address_state' => 'shipping_address_state',
                    'billing_address_postalcode' => 'shipping_address_postalcode',
                    'billing_address_country' => 'shipping_address_country',
                  ),
                ),
              ),
            ),
            10 => 
            array (
              'name' => 'description',
            ),
            11 => 'industry',
            12 => 
            array (
              'name' => 'renewal_date_c',
              'label' => 'LBL_RENEWAL_DATE',
            ),
            13 => 
            array (
              'name' => 'subs_amt_c',
              'label' => 'LBL_SUBS_AMT',
            ),
            14 => 
            array (
              'name' => 'mem_start_date_c',
              'label' => 'LBL_MEM_START_DATE',
            ),
            15 => 
            array (
              'name' => 'mem_status_c',
              'studio' => 'visible',
              'label' => 'LBL_MEM_STATUS',
            ),
            16 => 
            array (
              'name' => 'mem_end_date_c',
              'label' => 'LBL_MEM_END_DATE',
            ),
            17 => 
            array (
              'name' => 'request_quit_c',
              'label' => 'LBL_REQUEST_QUIT',
            ),
            18 => 
            array (
              'name' => 'usage_overview_c',
              'studio' => 'visible',
              'label' => 'LBL_USAGE_OVERVIEW',
            ),
            19 => 
            array (
              'name' => 'prod_serv_c',
              'studio' => 'visible',
              'label' => 'LBL_PROD_SERV',
            ),
            20 => 
            array (
              'name' => 'quit_reason_c',
              'studio' => 'visible',
              'label' => 'LBL_QUIT_REASON',
            ),
            21 => 
            array (
              'name' => 'quit_date_c',
              'label' => 'LBL_QUIT_DATE',
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
            0 => 'assigned_user_name',
            1 => 'team_name',
            2 => 
            array (
              'name' => 'phone_alternate',
              'label' => 'LBL_OTHER_PHONE',
            ),
            3 => 'phone_fax',
            4 => 'twitter',
            5 => 
            array (
              'name' => 'vat_number_c',
              'label' => 'LBL_VAT_NUMBER',
            ),
            6 => 
            array (
              'name' => 'fiscal_end_c',
              'label' => 'LBL_FISCAL_END',
            ),
            7 => 'ownership',
            8 => 'rating',
            9 => 'parent_name',
            10 => 'ticker_symbol',
            11 => 
            array (
              'name' => 'duns_c',
              'label' => 'LBL_DUNS',
            ),
            12 => 'annual_revenue',
            13 => 'employees',
            14 => 
            array (
              'name' => 'global_rating_c',
              'label' => 'LBL_GLOBAL_RATING',
            ),
            15 => 
            array (
              'name' => 'forbes_rating_c',
              'label' => 'LBL_FORBES_RATING',
            ),
            16 => 'campaign_name',
            17 => 
            array (
              'name' => 'territory_id_c',
              'label' => 'LBL_TERRITORY_ID',
            ),
            18 => 
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
              'span' => 12,
            ),
            19 => 
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
              'span' => 12,
            ),
            20 => 'sic_code',
            21 => 
            array (
              'name' => 'last_fiscal_c',
              'label' => 'LBL_LAST_FISCAL',
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-bugs' => 
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
              'default' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'name' => 'name',
              'link' => true,
              'type' => 'name',
            ),
            1 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'name' => 'billing_address_city',
            ),
            2 => 
            array (
              'type' => 'varchar',
              'default' => true,
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'name' => 'billing_address_country',
            ),
            3 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'name' => 'phone_office',
              'type' => 'phone',
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
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
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'width' => '20%',
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'mem_status_c',
              'label' => 'LBL_MEM_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'mem_start_date_c',
              'label' => 'LBL_MEM_START_DATE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'subs_amt_c',
              'label' => 'LBL_SUBS_AMT',
              'enabled' => true,
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'phone_office',
              'width' => '10%',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'renewal_date_c',
              'label' => 'LBL_RENEWAL_DATE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'billing_address_city',
              'width' => '13%',
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'email',
              'width' => '15%',
              'label' => 'LBL_EMAIL_ADDRESS',
              'sortable' => false,
              'enabled' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'assigned_user_name',
              'width' => '10%',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'sortable' => false,
              'enabled' => true,
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'date_entered',
              'type' => 'datetime',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'width' => '13%',
              'default' => false,
              'readonly' => true,
            ),
            10 => 
            array (
              'name' => 'linkedin',
              'label' => 'LBL_LINKEDIN',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            11 => 
            array (
              'name' => 'prod_serv_c',
              'label' => 'LBL_PROD_SERV',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => false,
            ),
            12 => 
            array (
              'name' => 'company_alias_c',
              'label' => 'LBL_COMPANY_ALIAS',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            13 => 
            array (
              'name' => 'usage_overview_c',
              'label' => 'LBL_USAGE_OVERVIEW',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => false,
            ),
            14 => 
            array (
              'name' => 'billing_address_country',
              'width' => '13%',
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'default' => false,
            ),
            15 => 
            array (
              'name' => 'legal_status_c',
              'label' => 'LBL_LEGAL_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            16 => 
            array (
              'name' => 'googleplus',
              'label' => 'LBL_GOOGLEPLUS',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            17 => 
            array (
              'name' => 'company_id_c',
              'label' => 'LBL_COMPANY_ID',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            18 => 
            array (
              'name' => 'facebook',
              'label' => 'LBL_FACEBOOK',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-emails' => 
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
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'default' => true,
              'enabled' => true,
              'name' => 'name',
              'link' => true,
              'type' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_CITY',
              'default' => true,
              'enabled' => true,
              'name' => 'billing_address_city',
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_PHONE',
              'default' => true,
              'enabled' => true,
              'name' => 'phone_office',
              'type' => 'phone',
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-prospectlists' => 
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
              'label' => 'LBL_LIST_NAME',
              'default' => true,
              'enabled' => true,
              'name' => 'name',
              'link' => true,
              'type' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_PHONE',
              'default' => true,
              'enabled' => true,
              'name' => 'phone_office',
              'type' => 'phone',
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_EMAIL',
              'default' => true,
              'enabled' => true,
              'name' => 'email',
              'type' => 'email',
            ),
            3 => 
            array (
              'label' => 'LBL_ASSIGNED_TO',
              'default' => true,
              'enabled' => true,
              'name' => 'assigned_user_name',
              'type' => 'relate',
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
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
              'default' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'name' => 'name',
              'link' => true,
              'type' => 'name',
            ),
            1 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'name' => 'billing_address_city',
            ),
            2 => 
            array (
              'type' => 'varchar',
              'default' => true,
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'name' => 'billing_address_country',
            ),
            3 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'name' => 'phone_office',
              'type' => 'phone',
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
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
              'default' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_CITY',
              'enabled' => true,
              'name' => 'billing_address_city',
            ),
            2 => 
            array (
              'type' => 'varchar',
              'default' => true,
              'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              'enabled' => true,
              'name' => 'billing_address_country',
            ),
            3 => 
            array (
              'default' => true,
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'name' => 'phone_office',
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'detail' => 
  array (
    'meta' => 
    array (
      'templateMeta' => 
      array (
        'maxColumns' => '1',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
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
              'displayParams' => 
              array (
                'required' => true,
                'wireless_edit_only' => true,
              ),
            ),
            1 => 'phone_office',
            2 => 
            array (
              'name' => 'website',
              'displayParams' => 
              array (
                'type' => 'link',
              ),
            ),
            3 => 'email1',
            4 => 'billing_address_street',
            5 => 'billing_address_city',
            6 => 'billing_address_state',
            7 => 'billing_address_postalcode',
            8 => 'billing_address_country',
            9 => 'assigned_user_name',
            10 => 'team_name',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
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
          2 => 
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'edit' => 
  array (
    'meta' => 
    array (
      'templateMeta' => 
      array (
        'maxColumns' => '1',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
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
              'displayParams' => 
              array (
                'required' => true,
                'wireless_edit_only' => true,
              ),
            ),
            1 => 'phone_office',
            2 => 
            array (
              'name' => 'website',
              'displayParams' => 
              array (
                'type' => 'link',
              ),
            ),
            3 => 'email1',
            4 => 'billing_address_street',
            5 => 'billing_address_city',
            6 => 'billing_address_state',
            7 => 'billing_address_postalcode',
            8 => 'billing_address_country',
            9 => 'assigned_user_name',
            10 => 'team_name',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'renewal_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'renewal_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'mem_end_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_end_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'quit_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_date_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'subs_amt_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'subs_amt_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'mem_start_date_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_start_date_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'prod_serv_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'prod_serv_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'mem_status_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'account_type',
            1 => 'account_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'mem_status_c',
                'value' => 'or(equal($account_type,"member"),equal($account_type,"past_member"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'quit_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'request_quit_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'quit_reason_c',
                'value' => 'not(equal($request_quit_c,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => 'f4a0abcb1b8962fa22eda42b60d3eb24',
);

