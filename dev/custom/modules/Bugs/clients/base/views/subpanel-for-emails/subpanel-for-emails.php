<?php
// created: 2013-12-01 11:07:36
$viewdefs['Bugs']['base']['view']['subpanel-for-emails'] = array (
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
          'label' => 'LBL_LIST_NUMBER',
          'default' => true,
          'enabled' => true,
          'name' => 'bug_number',
          'type' => 'int',
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_SUBJECT',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_STATUS',
          'default' => true,
          'enabled' => true,
          'name' => 'status',
          'type' => 'enum',
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_TYPE',
          'default' => true,
          'enabled' => true,
          'name' => 'type',
          'type' => 'enum',
        ),
        4 => 
        array (
          'label' => 'LBL_LIST_PRIORITY',
          'default' => true,
          'enabled' => true,
          'name' => 'priority',
          'type' => 'enum',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);