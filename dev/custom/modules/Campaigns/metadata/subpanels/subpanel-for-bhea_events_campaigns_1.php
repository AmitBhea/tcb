<?php
// created: 2013-12-03 12:50:28
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_CAMPAIGN_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'name' => 'status',
    'vname' => 'LBL_LIST_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'start_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'end_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'expected_revenue' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_CAMPAIGN_EXPECTED_REVENUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'bhea_events_campaigns_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_CAMPAIGNS_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_CAMPAIGNS_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_campaigns_1bhea_events_ida',
  ),
);