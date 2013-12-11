<?php
// created: 2013-12-03 12:36:16
$viewdefs['Contacts']['base']['view']['subpanel-for-contacts'] = array (
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
          'name' => 'full_name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'css_class' => 'full-name',
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        2 => 
        array (
          'name' => 'opportunity_role',
          'label' => 'LBL_OPPORTUNITY_ROLE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'department',
          'label' => 'LBL_DEPARTMENT',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'first_activity_c',
          'label' => 'LBL_FIRST_ACTIVITY',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'last_activity_c',
          'label' => 'LBL_LAST_ACTIVITY',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'email',
          'label' => 'LBL_LIST_EMAIL',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        7 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        9 => 
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
);