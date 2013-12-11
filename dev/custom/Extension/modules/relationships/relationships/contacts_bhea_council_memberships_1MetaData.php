<?php
// created: 2013-12-03 12:23:53
$dictionary["contacts_bhea_council_memberships_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_bhea_council_memberships_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Council_Memberships',
      'rhs_table' => 'bhea_council_memberships',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_bhea_council_memberships_1_c',
      'join_key_lhs' => 'contacts_bhea_council_memberships_1contacts_ida',
      'join_key_rhs' => 'contacts_bhea_council_memberships_1bhea_council_memberships_idb',
    ),
  ),
  'table' => 'contacts_bhea_council_memberships_1_c',
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
      'name' => 'contacts_bhea_council_memberships_1contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_bhea_council_memberships_1bhea_council_memberships_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_bhea_council_memberships_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_bhea_council_memberships_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_bhea_council_memberships_1contacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_bhea_council_memberships_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_bhea_council_memberships_1bhea_council_memberships_idb',
      ),
    ),
  ),
);