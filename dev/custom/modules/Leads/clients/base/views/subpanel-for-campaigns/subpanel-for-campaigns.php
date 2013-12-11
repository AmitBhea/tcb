<?php
// created: 2013-12-03 15:28:03
$viewdefs['Leads']['base']['view']['subpanel-for-campaigns'] = array (
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
          'label' => 'LBL_LIST_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
            3 => 'title',
          ),
          'type' => 'fullname',
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_REFERED_BY',
          'default' => true,
          'enabled' => true,
          'name' => 'refered_by',
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_LEAD_SOURCE',
          'default' => true,
          'enabled' => true,
          'name' => 'lead_source',
          'type' => 'enum',
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_PHONE',
          'default' => true,
          'enabled' => true,
          'name' => 'phone_work',
          'type' => 'phone',
        ),
        4 => 
        array (
          'sortable' => false,
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'default' => true,
          'enabled' => true,
          'name' => 'email',
          'type' => 'email',
        ),
        5 => 
        array (
          'name' => 'lead_source_description',
          'sortable' => false,
          'label' => 'LBL_LIST_LEAD_SOURCE_DESCRIPTION',
          'default' => true,
          'enabled' => true,
          'type' => 'text',
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);