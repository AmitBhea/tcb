<?php
// created: 2013-12-04 10:29:10
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
  'department' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_DEPARTMENT',
    'width' => '10%',
    'default' => true,
  ),
  'company_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_COMPANY_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'company_address' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_COMPANY_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'company_address_city' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_COMPANY_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'company_address_state' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_COMPANY_ADDRESS_STATE',
    'width' => '10%',
    'default' => true,
  ),
  'company_address_country' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_COMPANY_ADDRESS_COUNTRY',
    'width' => '10%',
    'default' => true,
  ),
  'company_address_postalcode' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_COMPANY_ADDRESS_POSTALCODE',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_events_bhea_speakers_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_SPEAKERS_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_SPEAKERS_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_speakers_1bhea_events_ida',
  ),
  'bhea_sessions_bhea_speakers_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPEAKERS_1_FROM_BHEA_SESSIONS_TITLE',
    'id' => 'BHEA_SESSIONS_BHEA_SPEAKERS_1BHEA_SESSIONS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Sessions',
    'target_record_key' => 'bhea_sessions_bhea_speakers_1bhea_sessions_ida',
  ),
  'phone_work' => 
  array (
    'name' => 'phone_work',
    'vname' => 'LBL_LIST_PHONE',
    'width' => '10%',
    'default' => true,
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