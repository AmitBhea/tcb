<?php
$clientCache['Bhea_Councils']['base']['layout'] = array (
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
          'label' => 'LBL_OPPORTUNITIES_BHEA_COUNCILS_1_FROM_OPPORTUNITIES_TITLE',
          'context' => 
          array (
            'link' => 'opportunities_bhea_councils_1',
          ),
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
          'context' => 
          array (
            'link' => 'bhea_councils_bhea_council_members_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-bhea_councils',
        ),
        2 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
          'context' => 
          array (
            'link' => 'bhea_councils_bhea_council_memberships_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-bhea_councils',
        ),
      ),
    ),
  ),
  '_hash' => 'd49678ccb26c25118c79af8121963035',
);

