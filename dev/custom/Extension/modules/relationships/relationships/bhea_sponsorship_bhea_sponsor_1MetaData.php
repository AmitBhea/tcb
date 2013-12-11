<?php
// created: 2013-12-03 16:15:04
$dictionary["bhea_sponsorship_bhea_sponsor_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_sponsorship_bhea_sponsor_1' => 
    array (
      'lhs_module' => 'Bhea_Sponsorship',
      'lhs_table' => 'bhea_sponsorship',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sponsor',
      'rhs_table' => 'bhea_sponsor',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_sponsorship_bhea_sponsor_1_c',
      'join_key_lhs' => 'bhea_sponsorship_bhea_sponsor_1bhea_sponsorship_ida',
      'join_key_rhs' => 'bhea_sponsorship_bhea_sponsor_1bhea_sponsor_idb',
    ),
  ),
  'table' => 'bhea_sponsorship_bhea_sponsor_1_c',
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
      'name' => 'bhea_sponsorship_bhea_sponsor_1bhea_sponsorship_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_sponsorship_bhea_sponsor_1bhea_sponsor_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_sponsorship_bhea_sponsor_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_sponsorship_bhea_sponsor_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_sponsorship_bhea_sponsor_1bhea_sponsorship_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_sponsorship_bhea_sponsor_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_sponsorship_bhea_sponsor_1bhea_sponsor_idb',
      ),
    ),
  ),
);