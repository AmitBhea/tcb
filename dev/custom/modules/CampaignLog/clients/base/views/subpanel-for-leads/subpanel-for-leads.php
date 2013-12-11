<?php
// created: 2013-12-03 12:54:43
$viewdefs['CampaignLog']['base']['view']['subpanel-for-leads'] = array (
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
          'name' => 'target_id',
          'label' => 'LBL_TARGET_ID',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'target_type',
          'label' => 'LBL_TARGET_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'campaign_name',
          'label' => '',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'recipient_name',
          'label' => '',
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
      ),
    ),
  ),
  'type' => 'subpanel-list',
);