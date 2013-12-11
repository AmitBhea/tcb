<?php
$clientCache['Products']['base']['view'] = array (
  'subpanel-for-products' => 
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
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => 'true',
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
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
              'sortable' => false,
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DATE_PURCHASED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_purchased',
            ),
            5 => 
            array (
              'label' => 'LBL_LIST_DISCOUNT_PRICE',
              'enabled' => true,
              'default' => true,
              'name' => 'discount_price',
            ),
            6 => 
            array (
              'label' => 'LBL_LIST_SUPPORT_EXPIRES',
              'enabled' => true,
              'default' => true,
              'name' => 'date_support_expires',
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'subtract(multiply(ifElse(isNumeric($discount_price), $discount_price, 0), ifElse(isNumeric($quantity), $quantity, 1)), ifElse(isNumeric($discount_amount), $discount_amount, 0))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_price), ifElse(equal($discount_price, 0), 0, multiply(divide($discount_amount, $discount_price), 100)), 0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'divide($discount_amount,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'divide($deal_calc,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'divide($cost_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'divide($list_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'divide($book_value,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'true',
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
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => 'true',
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
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
              'sortable' => false,
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DATE_PURCHASED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_purchased',
            ),
            5 => 
            array (
              'label' => 'LBL_LIST_DISCOUNT_PRICE',
              'enabled' => true,
              'default' => true,
              'name' => 'discount_price',
            ),
            6 => 
            array (
              'label' => 'LBL_LIST_SUPPORT_EXPIRES',
              'enabled' => true,
              'default' => true,
              'name' => 'date_support_expires',
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'subtract(multiply(ifElse(isNumeric($discount_price), $discount_price, 0), ifElse(isNumeric($quantity), $quantity, 1)), ifElse(isNumeric($discount_amount), $discount_amount, 0))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_price), ifElse(equal($discount_price, 0), 0, multiply(divide($discount_amount, $discount_price), 100)), 0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'divide($discount_amount,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'divide($deal_calc,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'divide($cost_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'divide($list_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'divide($book_value,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'true',
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
  'list-headerpane' => 
  array (
    'meta' => 
    array (
      'title' => 'LBL_MODULE_NAME',
      'type' => 'headerpane',
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'subtract(multiply(ifElse(isNumeric($discount_price), $discount_price, 0), ifElse(isNumeric($quantity), $quantity, 1)), ifElse(isNumeric($discount_amount), $discount_amount, 0))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_price), ifElse(equal($discount_price, 0), 0, multiply(divide($discount_amount, $discount_price), 100)), 0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'divide($discount_amount,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'divide($deal_calc,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'divide($cost_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'divide($list_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'divide($book_value,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'true',
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
              'event' => 'button:find_duplicates_button:click',
              'name' => 'find_duplicates_button',
              'label' => 'LBL_DUP_MERGE',
              'acl_action' => 'edit',
            ),
            4 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:duplicate_button:click',
              'name' => 'duplicate_button',
              'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
              'acl_module' => 'Products',
            ),
            5 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:audit_button:click',
              'name' => 'audit_button',
              'label' => 'LNK_VIEW_CHANGE_LOG',
              'acl_action' => 'view',
            ),
            6 => 
            array (
              'type' => 'divider',
            ),
            7 => 
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
            1 => 
            array (
              'name' => 'name',
              'required' => true,
              'label' => 'LBL_MODULE_NAME_SINGULAR',
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
            0 => 
            array (
              'name' => 'product_template_name',
              'label' => 'LBL_PRODUCT_TEMPLATE',
            ),
            1 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_ACCOUNT_NAME',
              'related_fields' => 
              array (
                0 => 'account_id',
              ),
            ),
            2 => 
            array (
              'name' => 'quote_name',
              'label' => 'LBL_QUOTE_NAME',
              'related_fields' => 
              array (
                0 => 'quote_id',
              ),
            ),
            3 => 
            array (
              'name' => 'status',
              'label' => 'LBL_STATUS',
            ),
            4 => 'quantity',
            5 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'discount_price',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            6 => 
            array (
              'name' => 'cost_price',
              'readonly' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'cost_price',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            7 => 
            array (
              'name' => 'list_price',
              'readonly' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'list_price',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            8 => 'mft_part_num',
            9 => 
            array (
              'name' => 'discount_amount',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'discount_amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
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
              'name' => 'description',
              'span' => 12,
            ),
            3 => 
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'subtract(multiply(ifElse(isNumeric($discount_price), $discount_price, 0), ifElse(isNumeric($quantity), $quantity, 1)), ifElse(isNumeric($discount_amount), $discount_amount, 0))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_price), ifElse(equal($discount_price, 0), 0, multiply(divide($discount_amount, $discount_price), 100)), 0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'divide($discount_amount,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'divide($deal_calc,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'divide($cost_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'divide($list_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'divide($book_value,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'ProductsRecordView_read_only_fields',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'product_template_name',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'category_name',
                'label' => 'category_name_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_price',
                'label' => 'discount_price_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            2 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'tax_class',
                'label' => 'tax_class_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            3 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'mft_part_num',
                'label' => 'mft_part_num_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            4 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'weight',
                'label' => 'weight_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
          ),
          'notActions' => 
          array (
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
({extendsFrom:\'RecordView\',delegateButtonEvents:function(){this.context.on(\'button:convert_to_quote:click\',this.convertToQuote,this);app.view.invokeParent(this,{type:\'view\',name:\'record\',method:\'delegateButtonEvents\'});}})',
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
              'readonly' => true,
              'link' => true,
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_ACCOUNT_NAME',
              'related_fields' => 
              array (
                0 => 'account_id',
              ),
            ),
            2 => 
            array (
              'name' => 'status',
              'label' => 'LBL_STATUS',
            ),
            3 => 
            array (
              'name' => 'quote_name',
              'link' => true,
              'label' => 'LBL_ASSOCIATED_QUOTE',
              'related_fields' => 
              array (
                0 => 'quote_id',
              ),
              'enabled' => true,
              'default' => true,
            ),
            4 => 'quantity',
            5 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'discount_price',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            6 => 
            array (
              'name' => 'cost_price',
              'readonly' => true,
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'cost_price',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            7 => 
            array (
              'name' => 'discount_amount',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'discount_amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            8 => 
            array (
              'name' => 'assigned_user_name',
              'sortable' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'subtract(multiply(ifElse(isNumeric($discount_price), $discount_price, 0), ifElse(isNumeric($quantity), $quantity, 1)), ifElse(isNumeric($discount_amount), $discount_amount, 0))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_price), ifElse(equal($discount_price, 0), 0, multiply(divide($discount_amount, $discount_price), 100)), 0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'divide($discount_amount,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'divide($deal_calc,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'divide($cost_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'divide($list_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'divide($book_value,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'true',
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
  'create-actions' => 
  array (
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
({extendsFrom:\'CreateView\'})',
    ),
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'subtract(multiply(ifElse(isNumeric($discount_price), $discount_price, 0), ifElse(isNumeric($quantity), $quantity, 1)), ifElse(isNumeric($discount_amount), $discount_amount, 0))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_price), ifElse(equal($discount_price, 0), 0, multiply(divide($discount_amount, $discount_price), 100)), 0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'divide($discount_amount,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'divide($deal_calc,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'divide($cost_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'divide($list_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'divide($book_value,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'ProductsCreate-actionsView_read_only_fields',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'product_template_name',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'category_name',
                'label' => 'category_name_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            1 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_price',
                'label' => 'discount_price_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            2 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'tax_class',
                'label' => 'tax_class_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            3 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'mft_part_num',
                'label' => 'mft_part_num_label',
                'value' => 'not(equal($product_template_name,""))',
              ),
            ),
            4 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'weight',
                'label' => 'weight_label',
                'value' => 'not(equal($product_template_name,""))',
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
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => 'true',
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
              'label' => 'LBL_LIST_CONTACT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
              'sortable' => false,
            ),
            3 => 
            array (
              'label' => 'LBL_LIST_DATE_PURCHASED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_purchased',
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_DISCOUNT_PRICE',
              'enabled' => true,
              'default' => true,
              'name' => 'discount_price',
            ),
            5 => 
            array (
              'label' => 'LBL_LIST_SUPPORT_EXPIRES',
              'enabled' => true,
              'default' => true,
              'name' => 'date_support_expires',
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'subtract(multiply(ifElse(isNumeric($discount_price), $discount_price, 0), ifElse(isNumeric($quantity), $quantity, 1)), ifElse(isNumeric($discount_amount), $discount_amount, 0))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_price), ifElse(equal($discount_price, 0), 0, multiply(divide($discount_amount, $discount_price), 100)), 0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'divide($discount_amount,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'divide($deal_calc,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'divide($cost_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'divide($list_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'divide($book_value,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'true',
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
          'name' => 'total_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'subtract(multiply(ifElse(isNumeric($discount_price), $discount_price, 0), ifElse(isNumeric($quantity), $quantity, 1)), ifElse(isNumeric($discount_amount), $discount_amount, 0))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'ifElse(isNumeric($discount_price), ifElse(equal($discount_price, 0), 0, multiply(divide($discount_amount, $discount_price), 100)), 0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'discount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'divide($discount_amount,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'deal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'divide($deal_calc,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'cost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'divide($cost_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'list_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'divide($list_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'book_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'divide($book_value,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'readOnlytotal_amount',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'quantity',
            3 => 'quantity',
            4 => 'discount_amount',
            5 => 'discount_amount',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'total_amount',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        8 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
            1 => 'discount_price',
            2 => 'discount_amount',
            3 => 'discount_price',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_rate_percent',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        9 => 
        array (
          'name' => 'readOnlydiscount_amount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'discount_amount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'readOnlydeal_calc_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'deal_calc',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'deal_calc_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'readOnlycost_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'cost_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'cost_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'readOnlylist_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'list_price',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'list_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'readOnlybook_value_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'book_value',
            1 => 'base_rate',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'book_value_usdollar',
                'value' => 'true',
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
  '_hash' => '3e012cc43ac5772fb9c6b4ec864764e7',
);

