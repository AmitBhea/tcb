<?php
// created: 2013-12-03 12:55:13
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'sponsorship_fee' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_SPONSORSHIP_FEE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'side_panels' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_SIDE_PANELS',
    'width' => '10%',
  ),
  'mailers' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_MAILERS',
    'width' => '10%',
  ),
  'main_backdrop' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_MAIN_BACKDROP',
    'width' => '10%',
  ),
  'website' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_WEBSITE ',
    'width' => '10%',
  ),
  'bhea_sessions_bhea_sponsorship_types_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SESSIONS_TITLE',
    'id' => 'BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1BHEA_SESSIONS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Sessions',
    'target_record_key' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
  ),
  'bhea_events_bhea_sponsorship_types_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);