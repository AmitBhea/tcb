<?php
// created: 2013-12-05 16:54:29
$viewdefs['Bhea_Memberships']['base']['view']['subpanel-for-bhea_member_levels'] = array (
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
          'name' => 'accounts_bhea_memberships_1_name',
          'label' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
          'enabled' => true,
          'id' => 'ACCOUNTS_BHEA_MEMBERSHIPS_1ACCOUNTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'start_date',
          'label' => 'LBL_START_DATE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'expiry_date',
          'label' => 'LBL_EXPIRY_DATE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'mem_type',
          'label' => 'LBL_MEM_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'mem_period',
          'label' => 'LBL_MEM_PERIOD',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'mem_fee',
          'label' => 'LBL_MEM_FEE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'payment_date',
          'label' => 'LBL_PAYMENT_DATE',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
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