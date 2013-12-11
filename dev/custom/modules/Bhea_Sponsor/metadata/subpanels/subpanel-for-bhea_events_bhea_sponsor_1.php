<?php
// created: 2013-12-03 19:54:32
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
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'sponsorship_description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_SPONSORSHIP_DESCRIPTION ',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'bhea_events_bhea_sponsor_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_SPONSOR_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  ),
  'bhea_sponsorship_bhea_sponsor_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SPONSOR_1_FROM_BHEA_SPONSORSHIP_TITLE',
    'id' => 'BHEA_SPONSORSHIP_BHEA_SPONSOR_1BHEA_SPONSORSHIP_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Sponsorship',
    'target_record_key' => 'bhea_sponsorship_bhea_sponsor_1bhea_sponsorship_ida',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);