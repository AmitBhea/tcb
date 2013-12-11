<?php
// created: 2013-12-03 19:22:07
$viewdefs['Accounts']['base']['view']['subpanel-for-emails'] = array (
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
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_CITY',
          'default' => true,
          'enabled' => true,
          'name' => 'billing_address_city',
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_PHONE',
          'default' => true,
          'enabled' => true,
          'name' => 'phone_office',
          'type' => 'phone',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);