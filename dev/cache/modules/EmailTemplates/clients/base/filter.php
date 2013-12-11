<?php
$clientCache['EmailTemplates']['base']['filter'] = array (
  'default' => 
  array (
    'meta' => 
    array (
      'default_filter' => 'all_email_type',
      'filters' => 
      array (
        0 => 
        array (
          'id' => 'all_email_type',
          'name' => 'LBL_FILTER_EMAIL_TYPE_TEMPLATES',
          'filter_definition' => 
          array (
            '$or' => 
            array (
              0 => 
              array (
                'type' => 
                array (
                  '$is_null' => '',
                ),
              ),
              1 => 
              array (
                'type' => 
                array (
                  '$equals' => '',
                ),
              ),
              2 => 
              array (
                'type' => 
                array (
                  '$equals' => 'email',
                ),
              ),
            ),
          ),
          'editable' => false,
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
  '_hash' => '2074826485b8b1d693f6bdbba3b621dd',
);

