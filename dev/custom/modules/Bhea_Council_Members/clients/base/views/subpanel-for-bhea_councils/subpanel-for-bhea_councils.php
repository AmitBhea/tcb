<?php
// created: 2013-12-03 10:13:19
$viewdefs['Bhea_Council_Members']['base']['view']['subpanel-for-bhea_councils'] = array (
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
          'name' => 'full_name',
          'type' => 'fieldset',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'first_name',
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'last_name',
              'link' => true,
            ),
          ),
          'css_class' => 'full-name',
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        1 => 
        array (
          'name' => 'account',
          'label' => 'LBL_ACCOUNT',
          'enabled' => true,
          'id' => 'ACCOUNT_ID_C',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'bhea_council_members_bhea_council_memberships_1_name',
          'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNC1877ERSHIPS_IDB',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'bhea_councils_bhea_council_members_1_name',
          'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCILS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1BHEA_COUNCILS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'membership_status',
          'label' => 'LBL_MEMBERSHIP_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'member_till',
          'label' => 'LBL_MEMBER_TILL',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'email',
          'label' => 'LBL_LIST_EMAIL',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        8 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'date_modified',
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);