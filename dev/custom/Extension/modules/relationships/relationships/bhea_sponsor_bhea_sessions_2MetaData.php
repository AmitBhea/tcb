<?php
// created: 2013-12-03 16:03:45
$dictionary["bhea_sponsor_bhea_sessions_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_sponsor_bhea_sessions_2' => 
    array (
      'lhs_module' => 'Bhea_Sponsor',
      'lhs_table' => 'bhea_sponsor',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sessions',
      'rhs_table' => 'bhea_sessions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_sponsor_bhea_sessions_2_c',
      'join_key_lhs' => 'bhea_sponsor_bhea_sessions_2bhea_sponsor_ida',
      'join_key_rhs' => 'bhea_sponsor_bhea_sessions_2bhea_sessions_idb',
    ),
  ),
  'table' => 'bhea_sponsor_bhea_sessions_2_c',
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
      'name' => 'bhea_sponsor_bhea_sessions_2bhea_sponsor_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_sponsor_bhea_sessions_2bhea_sessions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_sponsor_bhea_sessions_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_sponsor_bhea_sessions_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_sponsor_bhea_sessions_2bhea_sponsor_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_sponsor_bhea_sessions_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_sponsor_bhea_sessions_2bhea_sessions_idb',
      ),
    ),
  ),
);