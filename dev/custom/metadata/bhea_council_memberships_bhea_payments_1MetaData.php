<?php
// created: 2013-12-04 16:16:06
$dictionary["bhea_council_memberships_bhea_payments_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_council_memberships_bhea_payments_1' => 
    array (
      'lhs_module' => 'Bhea_Council_Memberships',
      'lhs_table' => 'bhea_council_memberships',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Payments',
      'rhs_table' => 'bhea_payments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_council_memberships_bhea_payments_1_c',
      'join_key_lhs' => 'bhea_counc7982erships_ida',
      'join_key_rhs' => 'bhea_council_memberships_bhea_payments_1bhea_payments_idb',
    ),
  ),
  'table' => 'bhea_council_memberships_bhea_payments_1_c',
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
      'name' => 'bhea_counc7982erships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_council_memberships_bhea_payments_1bhea_payments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_council_memberships_bhea_payments_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_council_memberships_bhea_payments_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_counc7982erships_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_council_memberships_bhea_payments_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_council_memberships_bhea_payments_1bhea_payments_idb',
      ),
    ),
  ),
);