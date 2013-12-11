<?php
// created: 2013-12-03 15:28:03
$viewdefs['Leads']['base']['view']['subpanel-for-meetings'] = array (
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
          'label' => 'LBL_LIST_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
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
          'label' => 'LBL_LIST_USER_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'user_name',
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_EMAIL',
          'default' => true,
          'enabled' => true,
          'name' => 'email',
          'type' => 'email',
        ),
        4 => 
        array (
          'label' => 'LBL_LIST_PHONE',
          'default' => true,
          'enabled' => true,
          'name' => 'phone_work',
          'type' => 'phone',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);