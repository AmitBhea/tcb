<?php
// created: 2013-12-03 09:26:08
$dictionary["bhea_council_members_bhea_council_memberships_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_council_members_bhea_council_memberships_1' => 
    array (
      'lhs_module' => 'Bhea_Council_Members',
      'lhs_table' => 'bhea_council_members',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Council_Memberships',
      'rhs_table' => 'bhea_council_memberships',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_council_members_bhea_council_memberships_1_c',
      'join_key_lhs' => 'bhea_counc8ee0members_ida',
      'join_key_rhs' => 'bhea_counc1877erships_idb',
    ),
  ),
  'table' => 'bhea_council_members_bhea_council_memberships_1_c',
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
      'name' => 'bhea_counc8ee0members_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_counc1877erships_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_council_members_bhea_council_memberships_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_council_members_bhea_council_memberships_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_counc8ee0members_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_council_members_bhea_council_memberships_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_counc1877erships_idb',
      ),
    ),
  ),
);