<?php
// created: 2013-12-03 12:50:28
$viewdefs['Campaigns']['base']['view']['subpanel-for-bhea_events'] = array (
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
          'label' => 'LBL_LIST_CAMPAIGN_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'status',
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'start_date',
          'label' => 'LBL_START_DATE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'end_date',
          'label' => 'LBL_END_DATE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'expected_revenue',
          'label' => 'LBL_CAMPAIGN_EXPECTED_REVENUE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'bhea_events_campaigns_1_name',
          'label' => 'LBL_BHEA_EVENTS_CAMPAIGNS_1_FROM_BHEA_EVENTS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_CAMPAIGNS_1BHEA_EVENTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);