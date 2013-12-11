<?php
// created: 2013-12-04 12:54:45
$dictionary["bhea_contractors_bhea_events_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_contractors_bhea_events_1' => 
    array (
      'lhs_module' => 'Bhea_Contractors',
      'lhs_table' => 'bhea_contractors',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Events',
      'rhs_table' => 'bhea_events',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_contractors_bhea_events_1_c',
      'join_key_lhs' => 'bhea_contractors_bhea_events_1bhea_contractors_ida',
      'join_key_rhs' => 'bhea_contractors_bhea_events_1bhea_events_idb',
    ),
  ),
  'table' => 'bhea_contractors_bhea_events_1_c',
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
      'name' => 'bhea_contractors_bhea_events_1bhea_contractors_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_contractors_bhea_events_1bhea_events_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_contractors_bhea_events_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_contractors_bhea_events_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_contractors_bhea_events_1bhea_contractors_ida',
        1 => 'bhea_contractors_bhea_events_1bhea_events_idb',
      ),
    ),
  ),
);