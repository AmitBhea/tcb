<?php
// created: 2013-12-03 12:34:00
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_OPPORTUNITY_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'account_name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Accounts',
    'width' => '10%',
    'target_record_key' => 'account_id',
    'target_module' => 'Accounts',
    'default' => true,
  ),
  'bhea_council_memberships_opportunities_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
    'id' => 'BHEA_COUNCC535ERSHIPS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Council_Memberships',
    'target_record_key' => 'bhea_councc535erships_ida',
  ),
  'bhea_events_opportunities_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_OPPORTUNITIES_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_opportunities_1bhea_events_ida',
  ),
  'lead_source' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_LEAD_SOURCE',
    'width' => '10%',
    'default' => true,
  ),
  'probability' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_PROBABILITY',
    'width' => '10%',
    'default' => true,
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'vname' => 'LBL_LIST_SALES_STAGE',
    'width' => '10%',
    'default' => true,
  ),
  'date_closed' => 
  array (
    'name' => 'date_closed',
    'vname' => 'LBL_LIST_DATE_CLOSED',
    'width' => '10%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);