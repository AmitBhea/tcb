<?php
$clientCache['RevenueLineItems']['base']['view'] = array (
  'subpanel-list' => 
  array (
    'meta' => 
    array (
      'favorite' => true,
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
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 'status',
            3 => 'quantity',
            4 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            5 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            6 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            7 => 'date_entered',
          ),
        ),
      ),
      'selection' => 
      array (
        'type' => 'multi',
        'actions' => 
        array (
          0 => 
          array (
            'name' => 'quote_button',
            'type' => 'button',
            'label' => 'LBL_GENERATE_QUOTE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massquote:fire',
            ),
            'acl_action' => 'massquote',
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
            'icon' => 'icon-pencil',
            'label' => 'LBL_EDIT_BUTTON',
            'event' => 'list:editrow:fire',
            'acl_action' => 'edit',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
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
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
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
          'event' => 'button:cancel_button:click',
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
              'acl_action' => 'create',
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
              'type' => 'badge',
              'name' => 'badge',
              'readonly' => true,
              'related_fields' => 
              array (
                0 => 'quote_id',
              ),
            ),
            4 => 
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
              'required' => true,
            ),
            1 => 
            array (
              'name' => 'spacer',
              'span' => 6,
              'readonly' => true,
            ),
            2 => 'account_name',
            3 => 'status',
            4 => 'quantity',
            5 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            6 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            7 => 
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
            8 => 
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
            9 => 
            array (
              'name' => 'discount_rate_percent',
              'readonly' => true,
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
            0 => 'serial_number',
            1 => 'contact_name',
            2 => 'asset_number',
            3 => 'date_purchased',
            4 => 
            array (
              'name' => 'book_value',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'book_value',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'convertToBase' => true,
              'showTransactionalAmount' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            5 => 'date_support_starts',
            6 => 'book_value_date',
            7 => 'date_support_expires',
            8 => 'website',
            9 => 'tax_class',
            10 => 'manufacturer_name',
            11 => 'weight',
            12 => 'mft_part_num',
            13 => 
            array (
              'name' => 'category_name',
              'type' => 'productCategoriesRelate',
              'label' => 'LBL_CATEGORY',
              'readonly' => true,
            ),
            14 => 'vendor_part_num',
            15 => 'product_type',
            16 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            17 => 'support_name',
            18 => 'support_contact',
            19 => 'support_description',
            20 => 'support_term',
            21 => 
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
            22 => 
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
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'RevenueLineItemsRecordView_read_only_fields',
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
({extendsFrom:\'RecordView\',initialize:function(options){app.view.invokeParent(this,{type:\'view\',name:\'record\',method:\'initialize\',args:[options]});this._parsePanelFields(this.meta.panels);},cancelClicked:function(){var changedAttributes=this.model.changedAttributes(this.model.getSyncedAttributes());this.model.set(changedAttributes);app.view.invokeParent(this,{type:\'view\',name:\'record\',method:\'cancelClicked\'});},getCustomSaveOptions:function(options){var origSuccess=options.success;return{success:_.bind(function(){if(_.isFunction(origSuccess)){origSuccess();}
if(!_.isEmpty(this.model.get(\'quote_id\'))){app.alert.show(\'save_rli_quote_notice\',{level:\'info\',messages:app.lang.get(\'SAVE_RLI_QUOTE_NOTICE\',\'RevenueLineItems\'),autoClose:true});}},this)};},initButtons:function(){app.view.invokeParent(this,{type:\'view\',name:\'record\',method:\'initButtons\'});if(this.model.has(\'quote_id\')&&!_.isEmpty(this.model.get(\'quote_id\'))&&!_.isUndefined(this.buttons[\'convert_to_quote_button\'])){this.buttons[\'convert_to_quote_button\'].setDisabled(true);}},bindDataChange:function(){this.model.on(\'duplicate:before\',this._handleDuplicateBefore,this);app.view.invokeParent(this,{type:\'view\',name:\'record\',method:\'bindDataChange\'});},_handleDuplicateBefore:function(new_model){new_model.unset(\'quote_id\');new_model.unset(\'quote_name\');},delegateButtonEvents:function(){this.context.on(\'button:convert_to_quote:click\',this.convertToQuote,this);app.view.invokeParent(this,{type:\'view\',name:\'record\',method:\'delegateButtonEvents\'});},convertToQuote:function(e){if(_.isEmpty(this.model.get(\'product_template_id\'))&&!_.isEmpty(this.model.get(\'category_id\'))){app.alert.show(\'invalid_items\',{level:\'error\',autoClose:false,title:app.lang.get(\'LBL_ALERT_TITLE_ERROR\',this.module)+\':\',messages:[app.lang.get(\'LBL_CONVERT_INVALID_RLI_PRODUCT\',this.module)]});return;}
var alert=app.alert.show(\'info_quote\',{level:\'info\',autoClose:false,closeable:false,title:app.lang.get("LBL_CONVERT_TO_QUOTE_INFO",this.module)+":",messages:[app.lang.get("LBL_CONVERT_TO_QUOTE_INFO_MESSAGE",this.module)]});alert.$el.find(\'a.close\').remove();var url=app.api.buildURL(this.model.module,\'quote\',{id:this.model.id});var callbacks={\'success\':_.bind(function(resp){app.alert.dismiss(\'info_quote\');app.router.navigate(app.bwc.buildRoute(\'Quotes\',resp.id,\'EditView\',{return_module:this.model.module,return_id:this.model.id}),{trigger:true});},this),\'error\':_.bind(function(){app.alert.dismiss(\'info_quote\');app.alert.show(\'error_xhr\',{level:\'error\',autoClose:true,title:app.lang.get("LBL_CONVERT_TO_QUOTE_ERROR",this.module)+":",messages:[app.lang.get("LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE",this.module)]});},this)};app.api.call("create",url,null,callbacks);},_parsePanelFields:function(panels){_.each(panels,function(panel){if(!app.metadata.getModule("Forecasts","config").is_setup){_.every(panel.fields,function(field,index){if(field.name==\'commit_stage\'){panel.fields[index]={\'name\':\'spacer\',\'span\':6,\'readonly\':true};return false;}
return true;},this);}else{_.each(panel.fields,function(field){if(field.name=="commit_stage"){field.options=app.metadata.getModule("Forecasts","config").buckets_dom;}},this);}},this);}})',
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
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'sortable' => false,
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'status',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'quantity',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'date_entered',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
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
({extendsFrom:\'CreateView\',initialize:function(options){app.view.invokeParent(this,{type:\'view\',name:\'create\',method:\'initialize\',args:[options]});this._parsePanelFields(this.meta.panels);},_parsePanelFields:function(panels){_.each(panels,function(panel){if(!app.metadata.getModule("Forecasts","config").is_setup){_.every(panel.fields,function(field,index){if(field.name==\'commit_stage\'){panel.fields[index]={\'name\':\'spacer\',\'span\':6,\'readonly\':true};return false;}
return true;},this);}else{_.each(panel.fields,function(field){if(field.name=="commit_stage"){field.options=app.metadata.getModule("Forecasts","config").buckets_dom;}},this);}},this);}})',
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
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        24 => 
        array (
          'name' => 'RevenueLineItemsCreate-actionsView_read_only_fields',
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
  'recordlist' => 
  array (
    'meta' => 
    array (
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
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
({extendsFrom:\'RecordlistView\',initialize:function(options){app.view.invokeParent(this,{type:\'view\',name:\'recordlist\',method:\'initialize\',args:[options]});this.layout.on("list:record:deleted",function(deletedModel){this.deleteCommitWarning(deletedModel);},this);},parseFields:function(){var catalog=app.view.invokeParent(this,{type:\'view\',name:\'recordlist\',method:\'parseFields\'});_.each(catalog,function(group,i){catalog[i]=_.filter(group,function(fieldMeta){var leave=true;if(app.metadata.getModule("Forecasts","config").is_setup){if(fieldMeta.name.indexOf(\'_case\')!=-1){var field=\'show_worksheet_\'+fieldMeta.name.replace(\'_case\',\'\');leave=(app.metadata.getModule("Forecasts","config")[field]==1);}}else{leave=!(fieldMeta.name=="commit_stage");}
return leave;});});return catalog;},deleteCommitWarning:function(deletedModel){var message=null;if(deletedModel.get("commit_stage")=="include"){message=app.lang.get("WARNING_DELETED_RECORD_RECOMMIT","RevenueLineItems");app.alert.show("included_list_delete_warning",{level:"warning",messages:message,onLinkClick:function(){app.alert.dismissAll();}});}
return message;},})',
    ),
  ),
  'massupdate' => 
  array (
    'templates' => 
    array (
      'invalid_link' => '{{!
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
<a href="#RevenueLineItems/{{id}}" title="{{name}}">{{name}}</a><br />
',
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
({extendsFrom:\'MassupdateView\',initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'DisableMassdelete\');app.view.invokeParent(this,{type:\'view\',name:\'massupdate\',method:\'initialize\',args:[options]});},delegateListFireEvents:function(){this.layout.on("list:massquote:fire",this.massQuote,this);this.layout.on("list:records:deleted",this.deleteCommitWarning,this);app.view.invokeParent(this,{type:\'view\',name:\'massupdate\',method:\'delegateListFireEvents\'});},deleteCommitWarning:function(lastSelectedModels){var message=null;if(!_.isUndefined(_.find(lastSelectedModels,function(model){if(model.get("commit_stage")=="include"){return true;}
return false;}))){message=app.lang.get("WARNING_DELETED_RECORD_LIST_RECOMMIT","RevenueLineItems");app.alert.show("included_list_delete_warning",{level:"warning",messages:message,onLinkClick:function(){app.alert.dismissAll();}});}
return message;},massQuote:function(){this.hideAll();var massQuote=this.context.get("mass_collection"),options={},callbacks={};var invalidItems=massQuote.filter(function(model){if(_.isEmpty(model.get(\'product_template_id\'))&&!_.isEmpty(model.get(\'category_id\'))){return true;}else if(!_.isEmpty(model.get(\'quote_id\'))){return true;}
return false;},this);if(!_.isEmpty(invalidItems)){var messages=[app.lang.get("LBL_CONVERT_INVALID_RLI",this.module)],messageTpl=app.template.getView(\'massupdate.invalid_link\',this.module);;_.each(invalidItems,function(item){messages.push(messageTpl(item.attributes));});app.alert.show(\'invalid_items\',{level:\'warning\',autoClose:false,title:app.lang.get("LBL_ALERT_TITLE_WARNING",this.module)+":",messages:messages,onLinkClick:function(){app.alert.dismiss(\'invalid_items\');}});return;}
if(massQuote){var alert=app.alert.show(\'info_quote\',{level:\'info\',autoClose:false,closeable:false,title:app.lang.get("LBL_CONVERT_TO_QUOTE_INFO",this.module)+":",messages:[app.lang.get("LBL_CONVERT_TO_QUOTE_INFO_MESSAGE",this.module)]});alert.$el.find(\'a.close\').remove();var url=app.api.buildURL(this.context.get(\'module\'),\'multi-quote\');options.success=_.bind(function(model,data,options){app.alert.dismiss(\'info_quote\');app.router.navigate(app.bwc.buildRoute(\'Quotes\',data.id,\'EditView\',{return_module:this.context.parent.get(\'module\'),return_id:this.context.parent.get(\'model\').get(\'id\')}),{trigger:true});},this);options.error=_.bind(function(){app.alert.dismiss(\'info_quote\');app.alert.show(\'error_xhr\',{level:\'error\',autoClose:true,title:app.lang.get("LBL_CONVERT_TO_QUOTE_ERROR",this.context.module)+":",messages:[app.lang.get("LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE",this.context.module)]});},this);var data={\'records\':massQuote.pluck(\'id\'),\'opportunity_id\':this.context.parent.get(\'model\').get(\'id\'),\'account_id\':this.context.parent.get(\'model\').get(\'account_id\')};callbacks=app.data.getSyncCallbacks(\'create\',massQuote,options);app.api.call("create",url,data,callbacks);}}})',
    ),
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
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
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
  'filter-rows' => 
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
({extendsFrom:\'FilterRowsView\',getFilterableFields:function(moduleName){var fields=app.view.invokeParent(this,{type:\'view\',name:\'filter-rows\',method:\'getFilterableFields\',args:[moduleName]})
if(app.metadata.getModule("Forecasts","config").is_setup!=1){delete fields[\'commit_stage\'];}else{_.each(fields,function(field,key,list){if(key.indexOf(\'_case\')!=-1){var fld=\'show_worksheet_\'+key.replace(\'_case\',\'\');if(app.metadata.getModule("Forecasts","config")[fld]!=1){delete list[key];}}});}
return fields;}})',
    ),
    'meta' => 
    array (
      'meta' => 
      array (
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
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
({extendsFrom:\'PanelTopView\',initialize:function(options){app.view.invokeParent(this,{type:\'view\',name:\'panel-top\',method:\'initialize\',args:[options]});if(this.parentModule=="Accounts"){this.meta.buttons=_.filter(this.meta.buttons,function(item){if(item.type!="actiondropdown"){return true;}
return false;});}},createRelatedClicked:function(event){app.alert.dismiss(\'opp-rli-create\');app.view.invokeParent(this,{type:\'view\',name:\'panel-top\',method:\'createRelatedClicked\',args:[event]});}})',
    ),
  ),
  'subpanel-for-opportunities' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
      'favorite' => true,
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
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 'status',
            3 => 'quantity',
            4 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'showTransactionalAmount' => true,
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            5 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'showTransactionalAmount' => true,
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            6 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'currency_id',
                1 => 'base_rate',
              ),
              'showTransactionalAmount' => true,
              'convertToBase' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            7 => 'date_entered',
          ),
        ),
      ),
      'selection' => 
      array (
        'type' => 'multi',
        'actions' => 
        array (
          0 => 
          array (
            'name' => 'quote_button',
            'type' => 'button',
            'label' => 'LBL_GENERATE_QUOTE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massquote:fire',
            ),
            'acl_action' => 'massquote',
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
            'icon' => 'icon-pencil',
            'label' => 'LBL_EDIT_BUTTON',
            'event' => 'list:editrow:fire',
            'acl_action' => 'edit',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'account_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'related($opportunities, "account_id")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'discount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
                'value' => 'ifElse(isNumeric($discount_amount),ifElse(equal($discount_amount,0),0,multiply(divide($discount_amount,ifElse(equal(add($discount_amount,$total_amount), 0), $discount_amount, add($discount_amount,$total_amount))),100)),0)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          'name' => 'discount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'divide($discount_price,$base_rate)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
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
        8 => 
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
        9 => 
        array (
          'name' => 'best_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'best_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        10 => 
        array (
          'name' => 'likely_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'likely_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        11 => 
        array (
          'name' => 'worst_case',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'total_amount',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'worst_case',
                'value' => '$total_amount',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        12 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        13 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        14 => 
        array (
          'name' => 'readOnlyaccount_id',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunities',
            1 => 'opportunity_id',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'account_id',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        15 => 
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
        16 => 
        array (
          'name' => 'readOnlydiscount_rate_percent',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_amount',
            1 => 'discount_amount',
            2 => 'discount_amount',
            3 => 'discount_amount',
            4 => 'total_amount',
            5 => 'discount_amount',
            6 => 'discount_amount',
            7 => 'total_amount',
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
        17 => 
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
        18 => 
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
        19 => 
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
        20 => 
        array (
          'name' => 'readOnlydiscount_usdollar',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'discount_price',
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
                'target' => 'discount_usdollar',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        21 => 
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
        22 => 
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
        23 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
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
  '_hash' => '5bf6ac8efc6f7d67a2ddf51f35368035',
);

