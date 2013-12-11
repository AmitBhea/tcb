<?php
// created: 2013-12-03 13:07:41
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_QUOTE_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'quote_num' => 
  array (
    'type' => 'int',
    'readonly' => true,
    'vname' => 'LBL_QUOTE_NUM',
    'width' => '10%',
    'default' => true,
  ),
  'quote_type' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_QUOTE_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'quote_stage' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_QUOTE_STAGE',
    'width' => '10%',
    'default' => true,
  ),
  'order_stage' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_ORDER_STAGE',
    'width' => '10%',
    'default' => true,
  ),
  'total_usdollar' => 
  array (
    'vname' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'width' => '10%',
    'default' => true,
  ),
  'date_quote_expected_closed' => 
  array (
    'name' => 'date_quote_expected_closed',
    'vname' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => '10%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);