<?php
// created: 2013-12-03 19:22:07
$viewdefs['Accounts']['base']['view']['subpanel-for-prospectlists'] = array (
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
          'label' => 'LBL_LIST_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_PHONE',
          'default' => true,
          'enabled' => true,
          'name' => 'phone_office',
          'type' => 'phone',
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_EMAIL',
          'default' => true,
          'enabled' => true,
          'name' => 'email',
          'type' => 'email',
        ),
        3 => 
        array (
          'label' => 'LBL_ASSIGNED_TO',
          'default' => true,
          'enabled' => true,
          'name' => 'assigned_user_name',
          'type' => 'relate',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);