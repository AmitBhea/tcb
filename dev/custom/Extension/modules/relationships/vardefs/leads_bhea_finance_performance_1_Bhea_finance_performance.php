<?php
// created: 2013-12-03 10:55:16
$dictionary["Bhea_finance_performance"]["fields"]["leads_bhea_finance_performance_1"] = array (
  'name' => 'leads_bhea_finance_performance_1',
  'type' => 'link',
  'relationship' => 'leads_bhea_finance_performance_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_LEADS_BHEA_FINANCE_PERFORMANCE_1_FROM_BHEA_FINANCE_PERFORMANCE_TITLE',
  'id_name' => 'leads_bhea_finance_performance_1leads_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_finance_performance"]["fields"]["leads_bhea_finance_performance_1_name"] = array (
  'name' => 'leads_bhea_finance_performance_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_BHEA_FINANCE_PERFORMANCE_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_bhea_finance_performance_1leads_ida',
  'link' => 'leads_bhea_finance_performance_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_finance_performance"]["fields"]["leads_bhea_finance_performance_1leads_ida"] = array (
  'name' => 'leads_bhea_finance_performance_1leads_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_BHEA_FINANCE_PERFORMANCE_1_FROM_LBL_LEADS_BHEA_FINANCE_PERFORMANCE_1_FROM_BHEA_FINANCE_PERFORMANCE_TITLE_TITLE',
  'id_name' => 'leads_bhea_finance_performance_1leads_ida',
  'link' => 'leads_bhea_finance_performance_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'id',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
