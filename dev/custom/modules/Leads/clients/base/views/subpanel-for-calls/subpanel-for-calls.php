<?php
// created: 2013-12-03 15:28:03
$viewdefs['Leads']['base']['view']['subpanel-for-calls'] = array (
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
          'sortable' => false,
          'label' => 'LBL_LIST_ACCEPT_STATUS',
          'default' => true,
          'enabled' => true,
          'name' => 'accept_status_name',
          'type' => 'enum',
        ),
        1 => 
        array (
          'name' => 'name',
          'label' => 'LBL_LIST_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
            3 => 'title',
          ),
          'type' => 'fullname',
        ),
        2 => 
        array (
          'name' => 'account_name',
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'sortable' => false,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
        ),
        3 => 
        array (
          'name' => 'email',
          'sortable' => false,
          'label' => 'LBL_LIST_EMAIL',
          'default' => true,
          'enabled' => true,
          'type' => 'email',
        ),
        4 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'default' => true,
          'enabled' => true,
          'type' => 'phone',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);