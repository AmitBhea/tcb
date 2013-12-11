<?php
// created: 2013-12-03 20:07:21
$viewdefs['Cases']['base']['view']['subpanel-for-accounts'] = array (
  'type' => 'subpanel-list',
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
          'label' => 'LBL_LIST_NUMBER',
          'enabled' => true,
          'default' => true,
          'name' => 'case_number',
        ),
        1 => 
        array (
          'name' => 'work_log',
          'label' => 'LBL_WORK_LOG',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'system_id',
          'label' => 'LBL_SYSTEM_ID',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
          'name' => 'status',
        ),
        4 => 
        array (
          'label' => 'LBL_LIST_PRIORITY',
          'enabled' => true,
          'default' => true,
          'name' => 'priority',
        ),
        5 => 
        array (
          'label' => 'LBL_LIST_DATE_CREATED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_entered',
        ),
        6 => 
        array (
          'name' => 'date_modified',
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
      ),
    ),
  ),
);