<?php
$module_name = 'Bhea_Sessions';
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
                'name' => 'venue',
                'label' => 'LBL_VENUE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'begin_date',
                'label' => 'LBL_BEGIN_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'end_date',
                'label' => 'LBL_END_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'capacity_expected',
                'label' => 'LBL_CAPACITY_EXPECTED',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'capacity',
                'label' => 'LBL_CAPACITY',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'bhea_events_bhea_sessions_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_EVENTS_TITLE',
                'enabled' => true,
                'id' => 'BHEA_EVENTS_BHEA_SESSIONS_1BHEA_EVENTS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'bhea_contractors_bhea_sessions_1_name',
                'label' => 'LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_BHEA_CONTRACTORS_TITLE',
                'enabled' => true,
                'id' => 'BHEA_CONTRACTORS_BHEA_SESSIONS_1BHEA_CONTRACTORS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'bhea_sponsor_bhea_sessions_1_name',
                'label' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SPONSOR_TITLE',
                'enabled' => true,
                'id' => 'BHEA_SPONSOR_BHEA_SESSIONS_1BHEA_SPONSOR_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'bhea_sponsorship_bhea_sessions_1_name',
                'label' => 'LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_BHEA_SPONSORSHIP_TITLE',
                'enabled' => true,
                'id' => 'BHEA_SPONSORSHIP_BHEA_SESSIONS_1BHEA_SPONSORSHIP_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'bhea_sessions_bhea_sponsorship_types_1_name',
                'label' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
                'enabled' => true,
                'id' => 'BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1BHEA_SPONSORSHIP_TYPES_IDB',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
              ),
              14 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              15 => 
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
