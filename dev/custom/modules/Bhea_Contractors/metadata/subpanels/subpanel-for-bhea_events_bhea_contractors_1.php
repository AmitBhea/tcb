<?php
// created: 2013-12-03 12:44:50
$subpanel_layout['list_fields'] = array (
  'full_name' => 
  array (
    'type' => 'fullname',
    'link' => true,
    'studio' => 
    array (
      'listview' => false,
    ),
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'title' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'department' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'default' => true,
  ),
  'area_of_expertise' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_AREA_OF_EXPERTISE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'phone_work' => 
  array (
    'name' => 'phone_work',
    'vname' => 'LBL_LIST_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_events_bhea_contractors_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_CONTRACTORS_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_CONTRACTORS_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_contractors_1bhea_events_ida',
  ),
  'bhea_sessions_bhea_contractors_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SESSIONS_BHEA_CONTRACTORS_1_FROM_BHEA_SESSIONS_TITLE',
    'id' => 'BHEA_SESSIONS_BHEA_CONTRACTORS_1BHEA_SESSIONS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Sessions',
    'target_record_key' => 'bhea_sessions_bhea_contractors_1bhea_sessions_ida',
  ),
  'first_name' => 
  array (
    'name' => 'first_name',
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
);