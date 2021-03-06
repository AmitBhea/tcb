<?php
$module_name = 'Bhea_Orders';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
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
                'name' => 'order_id',
                'label' => 'LBL_ORDER_ID',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              2 => 
              array (
                'name' => 'order_date',
                'label' => 'LBL_ORDER_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'payment_received',
                'label' => 'LBL_PAYMENT_RECEIVED',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'order_execution_date',
                'label' => 'LBL_ORDER_EXECUTION_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'value',
                'label' => 'LBL_VALUE',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'ship_to_address',
                'label' => 'LBL_SHIP_TO_ADDRESS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'ship_to_address_city',
                'label' => 'LBL_SHIP_TO_ADDRESS_CITY',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'ship_to_address_state',
                'label' => 'LBL_SHIP_TO_ADDRESS_STATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'ship_to_address_country',
                'label' => 'LBL_SHIP_TO_ADDRESS_COUNTRY',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'ship_to_address_postalcode',
                'label' => 'LBL_SHIP_TO_ADDRESS_POSTALCODE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'accounts_bhea_orders_1_name',
                'label' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'ACCOUNTS_BHEA_ORDERS_1ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              14 => 
              array (
                'name' => 'bhea_orders_bhea_invoices_1_name',
                'label' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE',
                'enabled' => true,
                'id' => 'BHEA_ORDERS_BHEA_INVOICES_1BHEA_INVOICES_IDB',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              15 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              16 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
              ),
              17 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
