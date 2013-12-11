<?php
// created: 2013-12-04 15:04:47
$viewdefs['Cases']['base']['view']['subpanel-for-contacts'] = array (
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
          'name' => 'system_id',
          'label' => 'LBL_SYSTEM_ID',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'work_log',
          'label' => 'LBL_WORK_LOG',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'account_name',
          'sortable' => false,
        ),
        4 => 
        array (
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
          'name' => 'status',
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
      ),
    ),
  ),
  'type' => 'subpanel-list',
);