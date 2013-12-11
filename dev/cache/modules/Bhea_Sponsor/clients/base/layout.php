<?php
$clientCache['Bhea_Sponsor']['base']['layout'] = array (
  'detail' => 
  array (
    'meta' => 
    array (
      'type' => 'detail',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'subnavdetail',
        ),
        1 => 
        array (
          'view' => 'detail',
        ),
      ),
    ),
  ),
  'edit' => 
  array (
    'meta' => 
    array (
      'type' => 'edit',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'subnavedit',
        ),
        1 => 
        array (
          'view' => 'edit',
        ),
      ),
    ),
  ),
  'subpanels' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
          'context' => 
          array (
            'link' => 'bhea_sponsor_bhea_sponsorship_1',
          ),
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
          'context' => 
          array (
            'link' => 'bhea_sponsor_bhea_sessions_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-bhea_sponsor',
        ),
      ),
    ),
  ),
  '_hash' => 'afd011fee5f83c81387fe4d815396313',
);

