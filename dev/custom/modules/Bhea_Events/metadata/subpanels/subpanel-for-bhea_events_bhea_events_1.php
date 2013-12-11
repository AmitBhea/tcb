<?php
// created: 2013-12-03 12:56:08
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
  'seminar_status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_SEMINAR_STATUS ',
    'width' => '10%',
    'default' => true,
  ),
  'conference_status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CONFERENCE_STATUS',
    'width' => '10%',
  ),
  'conference_fees' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_CONFERENCE_FEES ',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'no_of_sessions' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_NO_OF_SESSIONS ',
    'width' => '10%',
    'default' => true,
  ),
  'begin_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_BEGIN_DATE ',
    'width' => '10%',
    'default' => true,
  ),
  'end_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_END_DATE ',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_events_bhea_events_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_EVENTS_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_events_1bhea_events_ida',
  ),
  'bhea_events_bhea_hotels_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_HOTELS_1_FROM_BHEA_HOTELS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_HOTELS_1BHEA_HOTELS_IDB',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Hotels',
    'target_record_key' => 'bhea_events_bhea_hotels_1bhea_hotels_idb',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);