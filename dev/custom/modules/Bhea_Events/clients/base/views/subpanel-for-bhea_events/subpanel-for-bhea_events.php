<?php
// created: 2013-12-03 12:56:08
$viewdefs['Bhea_Events']['base']['view']['subpanel-for-bhea_events'] = array (
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
        ),
        1 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'seminar_status',
          'label' => 'LBL_SEMINAR_STATUS ',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'conference_status',
          'label' => 'LBL_CONFERENCE_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'conference_fees',
          'label' => 'LBL_CONFERENCE_FEES ',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'no_of_sessions',
          'label' => 'LBL_NO_OF_SESSIONS ',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'begin_date',
          'label' => 'LBL_BEGIN_DATE ',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'end_date',
          'label' => 'LBL_END_DATE ',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'bhea_events_bhea_events_1_name',
          'label' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_BHEA_EVENTS_1BHEA_EVENTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'bhea_events_bhea_hotels_1_name',
          'label' => 'LBL_BHEA_EVENTS_BHEA_HOTELS_1_FROM_BHEA_HOTELS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_BHEA_HOTELS_1BHEA_HOTELS_IDB',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        10 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);