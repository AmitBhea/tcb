<?php
$clientCache['ProductTemplates']['base']['view'] = array (
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
            1 => 
            array (
              'name' => 'name',
              'required' => true,
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
            0 => 'status',
            1 => 
            array (
              'name' => 'website',
              'type' => 'url',
            ),
            2 => 'date_available',
            3 => 'tax_class',
            4 => 'qty_in_stock',
            5 => 'category_name',
            6 => 'manufacturer_name',
            7 => 'mft_part_num',
            8 => 'vendor_part_num',
            9 => 'weight',
            10 => 'type_name',
            11 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'cost_usdollar',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            12 => 'cost_usdollar',
            13 => 'date_cost_price',
            14 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'discount_usdollar',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            15 => 'discount_usdollar',
            16 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'list_usdollar',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            17 => 'list_usdollar',
            18 => 'pricing_formula',
            19 => 'pricing_factor',
            20 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            21 => 'support_name',
            22 => 'support_description',
            23 => 'support_contact',
            24 => 'support_term',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
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
        1 => 
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
        2 => 
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
        3 => 
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
        4 => 
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
        5 => 
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
      ),
    ),
  ),
  'list' => 
  array (
    'meta' => 
    array (
      'favorites' => false,
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'link' => true,
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'type_name',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'category_name',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'status',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'qty_in_stock',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'cost_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'cost_usdollar',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'list_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'list_usdollar',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'discount_price',
              'type' => 'currency',
              'related_fields' => 
              array (
                0 => 'discount_usdollar',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
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
        1 => 
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
        2 => 
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
        3 => 
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
        4 => 
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
        5 => 
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
      'dependencies' => 
      array (
        0 => 
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
        1 => 
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
        2 => 
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
        3 => 
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
        4 => 
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
        5 => 
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
        1 => 
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
        2 => 
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
        3 => 
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
        4 => 
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
        5 => 
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
      ),
    ),
  ),
  '_hash' => '8fcadec0aeadcdd186af14c74404f55c',
);

