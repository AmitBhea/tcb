<?php
// created: 2013-12-03 12:03:37
$viewdefs['Opportunities']['base']['view']['subpanel-for-accounts'] = array (
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
          'name' => 'name',
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_LIST_SALES_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_LIST_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'actual_close_date_c',
          'label' => 'LBL_ACTUAL_CLOSE_DATE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'bhea_council_memberships_opportunities_1_name',
          'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNCC535ERSHIPS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'amount_usdollar',
          'label' => 'LBL_AMOUNT_USDOLLAR',
          'enabled' => true,
          'readonly' => true,
          'currency_format' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'amount',
          'type' => 'currency',
          'label' => 'LBL_LIKELY',
          'related_fields' => 
          array (
            0 => 'amount',
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
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        8 => 
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