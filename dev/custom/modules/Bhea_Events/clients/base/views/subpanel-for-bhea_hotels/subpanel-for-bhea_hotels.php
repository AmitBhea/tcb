<?php
// created: 2013-12-04 10:38:54
$viewdefs['Bhea_Events']['base']['view']['subpanel-for-bhea_hotels'] = array (
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
          'name' => 'event_type',
          'label' => 'LBL_EVENT_TYPE ',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'begin_date',
          'label' => 'LBL_BEGIN_DATE ',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'end_date',
          'label' => 'LBL_END_DATE ',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'attendee_fee_target',
          'label' => 'LBL_ATTENDEE_FEE_TARGET ',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'knowledge_area',
          'label' => 'LBL_KNOWLEDGE_AREA',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'cancellation_fee_date',
          'label' => 'LBL_CANCELLATION_FEE_DATE ',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'bhea_hotels_bhea_events_1_name',
          'label' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_HOTELS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_HOTELS_BHEA_EVENTS_1BHEA_HOTELS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        9 => 
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