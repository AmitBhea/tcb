<?php
// created: 2013-12-03 12:34:00
$viewdefs['Opportunities']['base']['view']['subpanel-for-contacts'] = array (
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
          'related_fields' => 
          array (
            0 => 'sales_status',
            1 => 'closed_revenue_line_items',
          ),
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
          'name' => 'bhea_council_memberships_opportunities_1_name',
          'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNCC535ERSHIPS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'bhea_events_opportunities_1_name',
          'label' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_BHEA_EVENTS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_OPPORTUNITIES_1BHEA_EVENTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'lead_source',
          'label' => 'LBL_LEAD_SOURCE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'probability',
          'label' => 'LBL_PROBABILITY',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_LIST_SALES_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_LIST_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);