<?php
// created: 2013-12-03 12:02:50
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
  'mem_level' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_MEM_LEVEL',
    'width' => '10%',
    'default' => true,
  ),
  'mem_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_MEM_TYPE',
    'width' => '10%',
  ),
  'mem_period' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MEM_PERIOD',
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
  'expiry_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_EXPIRY_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);