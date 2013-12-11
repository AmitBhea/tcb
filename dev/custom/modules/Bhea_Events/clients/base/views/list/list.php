<?php
$module_name = 'Bhea_Events';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '10%',
              ),
              1 => 
              array (
                'name' => 'event_type',
                'label' => 'LBL_EVENT_TYPE ',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'begin_date',
                'label' => 'LBL_BEGIN_DATE ',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'end_date',
                'label' => 'LBL_END_DATE ',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'no_of_sessions',
                'label' => 'LBL_NO_OF_SESSIONS ',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'attendee_fee_target',
                'label' => 'LBL_ATTENDEE_FEE_TARGET ',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'bhea_events_bhea_hotels_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_HOTELS_1_FROM_BHEA_HOTELS_TITLE',
                'enabled' => true,
                'id' => 'BHEA_EVENTS_BHEA_HOTELS_1BHEA_HOTELS_IDB',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'bhea_events_bhea_events_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
                'enabled' => true,
                'id' => 'BHEA_EVENTS_BHEA_EVENTS_1BHEA_EVENTS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'no_of_tracks',
                'label' => 'LBL_NO_OF_TRACKS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'conference_fees',
                'label' => 'LBL_CONFERENCE_FEES ',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
              ),
              13 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              14 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
