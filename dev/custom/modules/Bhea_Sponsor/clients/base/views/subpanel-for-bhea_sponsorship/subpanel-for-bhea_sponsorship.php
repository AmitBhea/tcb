<?php
// created: 2013-12-04 10:31:21
$viewdefs['Bhea_Sponsor']['base']['view']['subpanel-for-bhea_sponsorship'] = array (
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
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'sponsorship_description',
          'label' => 'LBL_SPONSORSHIP_DESCRIPTION ',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'bhea_events_bhea_sponsor_1_name',
          'label' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_EVENTS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_BHEA_SPONSOR_1BHEA_EVENTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'bhea_sponsorship_bhea_sponsor_1_name',
          'label' => 'LBL_BHEA_SPONSORSHIP_BHEA_SPONSOR_1_FROM_BHEA_SPONSORSHIP_TITLE',
          'enabled' => true,
          'id' => 'BHEA_SPONSORSHIP_BHEA_SPONSOR_1BHEA_SPONSORSHIP_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        6 => 
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