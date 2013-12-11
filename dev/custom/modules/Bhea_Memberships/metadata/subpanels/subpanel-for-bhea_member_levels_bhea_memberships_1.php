<?php
// created: 2013-12-05 16:54:29
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'accounts_bhea_memberships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_BHEA_MEMBERSHIPS_1ACCOUNTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_bhea_memberships_1accounts_ida',
  ),
  'start_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'expiry_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_EXPIRY_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'mem_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_MEM_TYPE',
    'width' => '10%',
  ),
  'mem_period' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MEM_PERIOD',
    'width' => '10%',
    'default' => true,
  ),
  'mem_fee' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_MEM_FEE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'payment_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_PAYMENT_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);