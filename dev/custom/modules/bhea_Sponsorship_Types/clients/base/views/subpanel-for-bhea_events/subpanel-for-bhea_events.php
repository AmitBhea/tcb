<?php
// created: 2013-12-03 12:55:13
$viewdefs['bhea_Sponsorship_Types']['base']['view']['subpanel-for-bhea_events'] = array (
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
          'name' => 'sponsorship_fee',
          'label' => 'LBL_SPONSORSHIP_FEE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'side_panels',
          'label' => 'LBL_SIDE_PANELS',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'mailers',
          'label' => 'LBL_MAILERS',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'main_backdrop',
          'label' => 'LBL_MAIN_BACKDROP',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'website',
          'label' => 'LBL_WEBSITE ',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'bhea_sessions_bhea_sponsorship_types_1_name',
          'label' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SESSIONS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1BHEA_SESSIONS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'bhea_events_bhea_sponsorship_types_1_name',
          'label' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_EVENTS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1BHEA_EVENTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        8 => 
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