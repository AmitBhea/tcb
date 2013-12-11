<?php
$clientCache['Contacts']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
      'default_filter' => 'all_records',
      'fields' => 
      array (
        'first_name' => 
        array (
        ),
        'last_name' => 
        array (
        ),
        'title' => 
        array (
        ),
        'account_name' => 
        array (
          'dbFields' => 
          array (
            0 => 'accounts.name',
          ),
          'type' => 'text',
          'vname' => 'LBL_ACCOUNT_NAME',
        ),
        'lead_source' => 
        array (
        ),
        'do_not_call' => 
        array (
          'options' => 'filter_checkbox_dom',
        ),
        'phone' => 
        array (
          'dbFields' => 
          array (
            0 => 'phone_mobile',
            1 => 'phone_work',
            2 => 'phone_other',
            3 => 'phone_fax',
            4 => 'assistant_phone',
          ),
          'type' => 'phone',
          'vname' => 'LBL_PHONE',
        ),
        'assistant' => 
        array (
        ),
        'address_street' => 
        array (
          'dbFields' => 
          array (
            0 => 'primary_address_street',
            1 => 'alt_address_street',
          ),
          'vname' => 'LBL_STREET',
          'type' => 'text',
        ),
        'address_city' => 
        array (
          'dbFields' => 
          array (
            0 => 'primary_address_city',
            1 => 'alt_address_city',
          ),
          'vname' => 'LBL_CITY',
          'type' => 'text',
        ),
        'address_state' => 
        array (
          'dbFields' => 
          array (
            0 => 'primary_address_state',
            1 => 'alt_address_state',
          ),
          'vname' => 'LBL_STATE',
          'type' => 'text',
        ),
        'address_postalcode' => 
        array (
          'dbFields' => 
          array (
            0 => 'primary_address_postalcode',
            1 => 'alt_address_postalcode',
          ),
          'vname' => 'LBL_POSTAL_CODE',
          'type' => 'text',
        ),
        'address_country' => 
        array (
          'dbFields' => 
          array (
            0 => 'primary_address_country',
            1 => 'alt_address_country',
          ),
          'vname' => 'LBL_COUNTRY',
          'type' => 'text',
        ),
        'campaign_name' => 
        array (
        ),
        'date_entered' => 
        array (
        ),
        'date_modified' => 
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
  'person' => 
  array (
    'meta' => 
    array (
      'quicksearch_field' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'quicksearch_priority' => 2,
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
  '_hash' => '0eda09c760c3b44c4b142b3c9772a603',
);

