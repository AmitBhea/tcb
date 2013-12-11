<?php
// created: 2013-12-03 12:56:16
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
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
  'bhea_speakers_bhea_sessions_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SPEAKERS_TITLE',
    'id' => 'BHEA_SPEAKERS_BHEA_SESSIONS_1BHEA_SPEAKERS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Speakers',
    'target_record_key' => 'bhea_speakers_bhea_sessions_1bhea_speakers_ida',
  ),
  'bhea_sessions_bhea_sponsor_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
    'id' => 'BHEA_SESSIONS_BHEA_SPONSOR_1BHEA_SPONSOR_IDB',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Sponsor',
    'target_record_key' => 'bhea_sessions_bhea_sponsor_1bhea_sponsor_idb',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);