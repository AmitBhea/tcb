<?php
// created: 2013-12-04 10:28:48
$viewdefs['Contacts']['base']['view']['subpanel-for-bhea_sessions'] = array (
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
          'sortable' => true,
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
          'name' => 'phone_mobile',
          'label' => 'LBL_MOBILE_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'title',
          'label' => 'LBL_TITLE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'department',
          'label' => 'LBL_DEPARTMENT',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'email',
          'label' => 'LBL_LIST_EMAIL',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        6 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'primary_address_street',
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'primary_address_street_2',
          'label' => 'LBL_PRIMARY_ADDRESS_STREET_2',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'primary_address_street_3',
          'label' => 'LBL_PRIMARY_ADDRESS_STREET_3',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'primary_address_city',
          'label' => 'LBL_PRIMARY_ADDRESS_CITY',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'primary_address_state',
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'primary_address_country',
          'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);