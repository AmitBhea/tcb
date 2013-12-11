<?php
// created: 2013-12-03 12:42:08
$viewdefs['CampaignLog']['base']['view']['subpanel-for-contacts'] = array (
  'favorite' => false,
  'selection' => 
  array (
  ),
  'rowactions' => 
  array (
  ),
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
          'label' => 'LBL_LIST_CAMPAIGN_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'campaign_name1',
        ),
        1 => 
        array (
          'name' => 'marketing_name',
          'label' => '',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'campaign_objective',
          'label' => '',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'campaign_content',
          'label' => '',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'target_id',
          'label' => 'LBL_TARGET_ID',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'label' => 'LBL_ACTIVITY_TYPE',
          'enabled' => true,
          'default' => true,
          'name' => 'activity_type',
        ),
        6 => 
        array (
          'label' => 'LBL_ACTIVITY_DATE',
          'enabled' => true,
          'default' => true,
          'name' => 'activity_date',
        ),
        7 => 
        array (
          'label' => 'LBL_RELATED',
          'enabled' => true,
          'default' => true,
          'name' => 'related_name',
          'type' => 'parent',
          'related_fields' => 
          array (
            0 => 'parent_id',
            1 => 'parent_type',
          ),
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);