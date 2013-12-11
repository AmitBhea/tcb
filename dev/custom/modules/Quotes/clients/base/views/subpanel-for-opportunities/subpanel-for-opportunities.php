<?php
// created: 2013-12-03 13:07:41
$viewdefs['Quotes']['base']['view']['subpanel-for-opportunities'] = array (
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
          'name' => 'quote_num',
          'label' => 'LBL_QUOTE_NUM',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'quote_type',
          'label' => 'LBL_QUOTE_TYPE',
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
          'name' => 'order_stage',
          'label' => 'LBL_ORDER_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'enabled' => true,
          'default' => true,
          'name' => 'total_usdollar',
        ),
        6 => 
        array (
          'name' => 'date_quote_expected_closed',
          'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
          'enabled' => true,
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
  'type' => 'subpanel-list',
);