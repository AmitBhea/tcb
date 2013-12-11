<?php
// created: 2013-12-03 12:56:16
$viewdefs['Bhea_Sessions']['base']['view']['subpanel-for-bhea_events'] = array (
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
          'name' => 'venue',
          'label' => 'LBL_VENUE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'begin_date',
          'label' => 'LBL_BEGIN_DATE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'end_date',
          'label' => 'LBL_END_DATE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'bhea_events_bhea_sessions_1_name',
          'label' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_EVENTS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_BHEA_SESSIONS_1BHEA_EVENTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'bhea_speakers_bhea_sessions_1_name',
          'label' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SPEAKERS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_SPEAKERS_BHEA_SESSIONS_1BHEA_SPEAKERS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'bhea_sessions_bhea_sponsor_1_name',
          'label' => 'LBL_BHEA_SESSIONS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
          'enabled' => true,
          'id' => 'BHEA_SESSIONS_BHEA_SPONSOR_1BHEA_SPONSOR_IDB',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        7 => 
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