<?php
// created: 2013-12-04 12:42:53
$dictionary["bhea_sponsor_bhea_sponsorship_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_sponsor_bhea_sponsorship_1' => 
    array (
      'lhs_module' => 'Bhea_Sponsor',
      'lhs_table' => 'bhea_sponsor',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sponsorship',
      'rhs_table' => 'bhea_sponsorship',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_sponsor_bhea_sponsorship_1_c',
      'join_key_lhs' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
      'join_key_rhs' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsorship_idb',
    ),
  ),
  'table' => 'bhea_sponsor_bhea_sponsorship_1_c',
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
      'name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsorship_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_sponsor_bhea_sponsorship_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_sponsor_bhea_sponsorship_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_sponsor_bhea_sponsorship_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsorship_idb',
      ),
    ),
  ),
);