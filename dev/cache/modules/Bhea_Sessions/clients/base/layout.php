<?php
$clientCache['Bhea_Sessions']['base']['layout'] = array (
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
          'label' => 'LBL_CONTACTS_BHEA_SESSIONS_1_FROM_CONTACTS_TITLE',
          'context' => 
          array (
            'link' => 'contacts_bhea_sessions_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-bhea_sessions',
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE',
          'context' => 
          array (
            'link' => 'bhea_sessions_bhea_registrants_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-bhea_sessions',
        ),
        2 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BHEA_SESSIONS_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE',
          'context' => 
          array (
            'link' => 'bhea_sessions_bhea_speakers_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-bhea_sessions',
        ),
      ),
    ),
  ),
  '_hash' => '869e3d9f123065e8692312985f5f3b98',
);

