<?php
// created: 2013-12-03 12:01:02
$viewdefs['Quotes']['base']['view']['subpanel-for-accounts'] = array (
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
          'label' => 'LBL_LIST_QUOTE_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'opportunity_name',
          'label' => 'LBL_OPPORTUNITY_NAME',
          'enabled' => true,
          'id' => 'OPPORTUNITY_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'shipper_name',
          'label' => 'LBL_SHIPPING_PROVIDER',
          'enabled' => true,
          'id' => 'SHIPPER_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'order_stage',
          'label' => 'LBL_ORDER_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'quote_stage',
          'label' => 'LBL_QUOTE_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'original_po_date',
          'label' => 'LBL_ORIGINAL_PO_DATE',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'discount',
          'label' => 'LBL_DISCOUNT_TOTAL',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
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
          'name' => 'date_quote_closed',
          'label' => 'LBL_DATE_QUOTE_CLOSED',
          'enabled' => true,
          'default' => true,
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
);