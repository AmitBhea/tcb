<?php
// created: 2013-12-03 09:23:02
$dictionary["bhea_council_memberships_bhea_member_levels_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_council_memberships_bhea_member_levels_1' => 
    array (
      'lhs_module' => 'Bhea_Council_Memberships',
      'lhs_table' => 'bhea_council_memberships',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_member_levels',
      'rhs_table' => 'bhea_member_levels',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_council_memberships_bhea_member_levels_1_c',
      'join_key_lhs' => 'bhea_councec54erships_ida',
      'join_key_rhs' => 'bhea_counc0428_levels_idb',
    ),
  ),
  'table' => 'bhea_council_memberships_bhea_member_levels_1_c',
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
      'name' => 'bhea_councec54erships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_counc0428_levels_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_council_memberships_bhea_member_levels_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_council_memberships_bhea_member_levels_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_councec54erships_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_council_memberships_bhea_member_levels_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_counc0428_levels_idb',
      ),
    ),
  ),
);