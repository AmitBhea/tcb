<?php
$clientCache['Accounts']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
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
    ),
  ),
  'basic' => 
  array (
    'meta' => 
    array (
      'create' => true,
      'quicksearch_field' => 
      array (
        0 => 'name',
      ),
      'quicksearch_priority' => 1,
      'filters' => 
      array (
        0 => 
        array (
          'id' => 'all_records',
          'name' => 'LBL_LISTVIEW_FILTER_ALL',
          'filter_definition' => 
          array (
          ),
          'editable' => false,
        ),
        1 => 
        array (
          'id' => 'assigned_to_me',
          'name' => 'LBL_ASSIGNED_TO_ME',
          'filter_definition' => 
          array (
            '$owner' => '',
          ),
          'editable' => false,
        ),
        2 => 
        array (
          'id' => 'favorites',
          'name' => 'LBL_FAVORITES',
          'filter_definition' => 
          array (
            '$favorite' => '',
          ),
          'editable' => false,
        ),
        3 => 
        array (
          'id' => 'recently_viewed',
          'name' => 'LBL_RECENTLY_VIEWED',
          'filter_definition' => 
          array (
            '$tracker' => '-7 DAY',
          ),
          'editable' => false,
        ),
        4 => 
        array (
          'id' => 'recently_created',
          'name' => 'LBL_NEW_RECORDS',
          'filter_definition' => 
          array (
            'date_entered' => 
            array (
              '$dateRange' => 'last_7_days',
            ),
          ),
          'editable' => false,
        ),
      ),
    ),
  ),
  '_hash' => '88856f2f3d163648513ccf0617180356',
);

