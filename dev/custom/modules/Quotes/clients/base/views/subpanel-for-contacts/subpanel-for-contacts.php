<?php
// created: 2013-12-03 12:41:31
$viewdefs['Quotes']['base']['view']['subpanel-for-contacts'] = array (
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
          'label' => 'LBL_LIST_QUOTE_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'account_name',
          'sortable' => false,
        ),
        2 => 
        array (
          'name' => 'order_stage',
          'label' => 'LBL_ORDER_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'quote_stage',
          'label' => 'LBL_QUOTE_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'shipper_name',
          'label' => 'LBL_SHIPPING_PROVIDER',
          'enabled' => true,
          'id' => 'SHIPPER_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'deal_tot_usdollar',
          'label' => 'LBL_DEAL_TOT_USDOLLAR',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'enabled' => true,
          'default' => true,
          'name' => 'total_usdollar',
        ),
        7 => 
        array (
          'name' => 'date_quote_expected_closed',
          'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        9 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        10 => 
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
);