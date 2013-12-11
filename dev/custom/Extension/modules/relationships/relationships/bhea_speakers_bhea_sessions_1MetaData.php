<?php
// created: 2013-12-03 09:10:54
$dictionary["bhea_speakers_bhea_sessions_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_speakers_bhea_sessions_1' => 
    array (
      'lhs_module' => 'Bhea_Speakers',
      'lhs_table' => 'bhea_speakers',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sessions',
      'rhs_table' => 'bhea_sessions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_speakers_bhea_sessions_1_c',
      'join_key_lhs' => 'bhea_speakers_bhea_sessions_1bhea_speakers_ida',
      'join_key_rhs' => 'bhea_speakers_bhea_sessions_1bhea_sessions_idb',
    ),
  ),
  'table' => 'bhea_speakers_bhea_sessions_1_c',
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
      'name' => 'bhea_speakers_bhea_sessions_1bhea_speakers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_speakers_bhea_sessions_1bhea_sessions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_speakers_bhea_sessions_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_speakers_bhea_sessions_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_speakers_bhea_sessions_1bhea_speakers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_speakers_bhea_sessions_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_speakers_bhea_sessions_1bhea_sessions_idb',
      ),
    ),
  ),
);