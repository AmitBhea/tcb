<?php
// created: 2013-12-04 09:39:28
$dictionary["Bhea_finance_performance"]["fields"]["accounts_bhea_finance_performance_1"] = array (
  'name' => 'accounts_bhea_finance_performance_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_finance_performance_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BHEA_FINANCE_PERFORMANCE_1_FROM_BHEA_FINANCE_PERFORMANCE_TITLE',
  'id_name' => 'accounts_bhea_finance_performance_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_finance_performance"]["fields"]["accounts_bhea_finance_performance_1_name"] = array (
  'name' => 'accounts_bhea_finance_performance_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_FINANCE_PERFORMANCE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bhea_finance_performance_1accounts_ida',
  'link' => 'accounts_bhea_finance_performance_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bhea_finance_performance"]["fields"]["accounts_bhea_finance_performance_1accounts_ida"] = array (
  'name' => 'accounts_bhea_finance_performance_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_FINANCE_PERFORMANCE_1_FROM_LBL_ACCOUNTS_BHEA_FINANCE_PERFORMANCE_1_FROM_BHEA_FINANCE_PERFORMANCE_TITLE_TITLE',
  'id_name' => 'accounts_bhea_finance_performance_1accounts_ida',
  'link' => 'accounts_bhea_finance_performance_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
