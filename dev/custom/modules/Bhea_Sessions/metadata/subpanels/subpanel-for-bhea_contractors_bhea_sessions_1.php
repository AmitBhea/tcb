<?php
// created: 2013-12-04 10:36:36
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'venue' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_VENUE',
    'width' => '10%',
    'default' => true,
  ),
  'begin_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_BEGIN_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'end_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'capacity' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_CAPACITY',
    'width' => '10%',
    'default' => true,
  ),
  'capacity_expected' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_CAPACITY_EXPECTED',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_events_bhea_sessions_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_SESSIONS_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  ),
  'bhea_contractors_bhea_sessions_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_BHEA_CONTRACTORS_TITLE',
    'id' => 'BHEA_CONTRACTORS_BHEA_SESSIONS_1BHEA_CONTRACTORS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Contractors',
    'target_record_key' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
  ),
  'bhea_sponsor_bhea_sessions_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SPONSOR_TITLE',
    'id' => 'BHEA_SPONSOR_BHEA_SESSIONS_1BHEA_SPONSOR_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Sponsor',
    'target_record_key' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
  ),
  'bhea_sponsorship_bhea_sessions_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_BHEA_SPONSORSHIP_TITLE',
    'id' => 'BHEA_SPONSORSHIP_BHEA_SESSIONS_1BHEA_SPONSORSHIP_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Sponsorship',
    'target_record_key' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
  ),
  'bhea_sessions_bhea_sponsorship_types_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
    'id' => 'BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1BHEA_SPONSORSHIP_TYPES_IDB',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'bhea_Sponsorship_Types',
    'target_record_key' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);