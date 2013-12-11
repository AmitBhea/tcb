<?php
// created: 2013-12-03 12:01:37
$dictionary["bhea_finance_performance_accounts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_finance_performance_accounts_1' => 
    array (
      'lhs_module' => 'Bhea_finance_performance',
      'lhs_table' => 'bhea_finance_performance',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_finance_performance_accounts_1_c',
      'join_key_lhs' => 'bhea_finance_performance_accounts_1bhea_finance_performance_ida',
      'join_key_rhs' => 'bhea_finance_performance_accounts_1accounts_idb',
    ),
  ),
  'table' => 'bhea_finance_performance_accounts_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'bhea_finance_performance_accounts_1bhea_finance_performance_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_finance_performance_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_finance_performance_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_finance_performance_accounts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_finance_performance_accounts_1bhea_finance_performance_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_finance_performance_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_finance_performance_accounts_1accounts_idb',
      ),
    ),
  ),
);