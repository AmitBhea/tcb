<?php
// created: 2013-12-03 11:51:54
$viewdefs['Accounts']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'name' => 
    array (
    ),
    'renewal_date_c' => 
    array (
    ),
    'address_city' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_city',
        1 => 'shipping_address_city',
      ),
      'vname' => 'LBL_CITY',
      'type' => 'text',
    ),
    'address_postalcode' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_postalcode',
        1 => 'shipping_address_postalcode',
      ),
      'vname' => 'LBL_POSTAL_CODE',
      'type' => 'text',
    ),
    'address_state' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_state',
        1 => 'shipping_address_state',
      ),
      'vname' => 'LBL_STATE',
      'type' => 'text',
    ),
    'email1' => 
    array (
    ),
    'annual_revenue' => 
    array (
    ),
    'address_country' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_country',
        1 => 'shipping_address_country',
      ),
      'vname' => 'LBL_COUNTRY',
      'type' => 'text',
    ),
    'phone_office' => 
    array (
    ),
    '$owner' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
    ),
    'assigned_user_name' => 
    array (
    ),
    '$favorite' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_FAVORITES_FILTER',
    ),
  ),
);