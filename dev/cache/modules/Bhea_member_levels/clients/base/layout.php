<?php
$clientCache['Bhea_member_levels']['base']['layout'] = array (
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
          'label' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
          'context' => 
          array (
            'link' => 'bhea_member_levels_bhea_memberships_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-bhea_member_levels',
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
          'context' => 
          array (
            'link' => 'bhea_member_levels_opportunities_1',
          ),
        ),
        2 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCILS_1_FROM_BHEA_COUNCILS_TITLE',
          'context' => 
          array (
            'link' => 'bhea_member_levels_bhea_councils_1',
          ),
        ),
      ),
    ),
  ),
  '_hash' => '9fdb507b924c398cee216e9fbf1e3eda',
);

