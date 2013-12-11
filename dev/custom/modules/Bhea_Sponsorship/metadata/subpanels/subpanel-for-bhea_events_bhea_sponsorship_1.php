<?php
// created: 2013-12-03 12:46:25
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'value' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS ',
    'width' => '10%',
  ),
  'sponsorship_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_SPONSORSHIP_TYPE ',
    'width' => '10%',
    'default' => true,
  ),
  'sponsorship_tenure_starts' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_SPONSORSHIP_TENURE_STARTS',
    'width' => '10%',
    'default' => true,
  ),
  'sponsorship_tenure_ends' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_SPONSORSHIP_TENURE_ENDS',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_events_bhea_sponsorship_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_SPONSORSHIP_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  ),
  'bhea_sessions_bhea_sponsorship_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SESSIONS_TITLE',
    'id' => 'BHEA_SESSIONS_BHEA_SPONSORSHIP_1BHEA_SESSIONS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Sessions',
    'target_record_key' => 'bhea_sessions_bhea_sponsorship_1bhea_sessions_ida',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);