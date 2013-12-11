<?php
// created: 2013-12-03 10:22:20
$dictionary["bhea_events_bhea_hotels_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_events_bhea_hotels_1' => 
    array (
      'lhs_module' => 'Bhea_Events',
      'lhs_table' => 'bhea_events',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Hotels',
      'rhs_table' => 'bhea_hotels',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_events_bhea_hotels_1_c',
      'join_key_lhs' => 'bhea_events_bhea_hotels_1bhea_events_ida',
      'join_key_rhs' => 'bhea_events_bhea_hotels_1bhea_hotels_idb',
    ),
  ),
  'table' => 'bhea_events_bhea_hotels_1_c',
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
      'name' => 'bhea_events_bhea_hotels_1bhea_events_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_events_bhea_hotels_1bhea_hotels_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_events_bhea_hotels_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_events_bhea_hotels_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_events_bhea_hotels_1bhea_events_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_events_bhea_hotels_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_events_bhea_hotels_1bhea_hotels_idb',
      ),
    ),
  ),
);