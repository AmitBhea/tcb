<?php
// created: 2013-12-04 15:04:47
$subpanel_layout['list_fields'] = array (
  'case_number' => 
  array (
    'vname' => 'LBL_LIST_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'system_id' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_SYSTEM_ID',
    'width' => '10%',
    'default' => true,
  ),
  'work_log' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_WORK_LOG',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'account_name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Accounts',
    'width' => '10%',
    'target_record_key' => 'account_id',
    'target_module' => 'Accounts',
    'default' => true,
  ),
  'status' => 
  array (
    'vname' => 'LBL_LIST_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'vname' => 'LBL_LIST_DATE_CREATED',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);