<?php
// created: 2013-12-04 09:37:57
$dictionary["bhea_memberships_contacts_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_memberships_contacts_1' => 
    array (
      'lhs_module' => 'Bhea_Memberships',
      'lhs_table' => 'bhea_memberships',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_memberships_contacts_1_c',
      'join_key_lhs' => 'bhea_memberships_contacts_1bhea_memberships_ida',
      'join_key_rhs' => 'bhea_memberships_contacts_1contacts_idb',
    ),
  ),
  'table' => 'bhea_memberships_contacts_1_c',
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
      'name' => 'bhea_memberships_contacts_1bhea_memberships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_memberships_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_memberships_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_memberships_contacts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_memberships_contacts_1bhea_memberships_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_memberships_contacts_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_memberships_contacts_1contacts_idb',
      ),
    ),
  ),
);