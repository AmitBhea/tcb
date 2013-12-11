<?php
// created: 2013-12-03 12:02:50
$viewdefs['Bhea_Memberships']['base']['view']['subpanel-for-accounts'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
        ),
        1 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'mem_level',
          'label' => 'LBL_MEM_LEVEL',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'mem_type',
          'label' => 'LBL_MEM_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'mem_period',
          'label' => 'LBL_MEM_PERIOD',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'start_date',
          'label' => 'LBL_START_DATE',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'expiry_date',
          'label' => 'LBL_EXPIRY_DATE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        8 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);