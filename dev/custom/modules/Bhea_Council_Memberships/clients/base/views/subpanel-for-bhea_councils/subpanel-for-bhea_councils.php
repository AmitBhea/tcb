<?php
// created: 2013-12-03 10:15:29
$viewdefs['Bhea_Council_Memberships']['base']['view']['subpanel-for-bhea_councils'] = array (
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
        ),
        1 => 
        array (
          'name' => 'bhea_council_memberships_opportunities_1_name',
          'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1OPPORTUNITIES_IDB',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'bhea_councils_bhea_council_memberships_1_name',
          'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1BHEA_COUNCILS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'bhea_council_members_bhea_council_memberships_1_name',
          'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNC8EE0MEMBERS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'members',
          'label' => 'LBL_MEMBERS',
          'enabled' => true,
          'id' => 'CONTACT_ID_C',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'membership_type',
          'label' => 'LBL_MEMBERSHIP_TYPE ',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'membership_period',
          'label' => 'LBL_MEMBERSHIP_PERIOD ',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'membership_fee',
          'label' => 'LBL_MEMBERSHIP_FEE ',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'payment_status',
          'label' => 'LBL_PAYMENT_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'payment_id',
          'label' => 'LBL_PAYMENT_ID',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        11 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);