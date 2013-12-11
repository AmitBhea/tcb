<?php
// created: 2013-12-04 13:31:49
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
  'account_name' => 
  array (
    'name' => 'account_name',
    'module' => 'Accounts',
    'target_record_key' => 'account_id',
    'target_module' => 'Accounts',
    'widget_class' => 'SubPanelDetailViewLink',
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'width' => '10%',
    'sortable' => false,
    'default' => true,
  ),
  'phone_work' => 
  array (
    'name' => 'phone_work',
    'vname' => 'LBL_LIST_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'm_accept_status_fields' => 
  array (
    'usage' => 'query_only',
  ),
  'accept_status_id' => 
  array (
    'usage' => 'query_only',
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
  'account_id' => 
  array (
    'usage' => 'query_only',
  ),
);