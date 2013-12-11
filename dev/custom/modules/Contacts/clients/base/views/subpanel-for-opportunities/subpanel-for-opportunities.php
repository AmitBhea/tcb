<?php
// created: 2013-12-03 13:08:37
$viewdefs['Contacts']['base']['view']['subpanel-for-opportunities'] = array (
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
          'name' => 'type_c',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'status_c',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'contacts_id_c',
          'label' => 'LBL_CONTACTS_ID',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'username_c',
          'label' => 'LBL_USERNAME',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'opportunity_role',
          'label' => 'LBL_LIST_CONTACT_ROLE',
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
      ),
    ),
  ),
);