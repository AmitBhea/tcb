<?php
// created: 2013-12-01 11:06:18
$dictionary["bhea_events_bugs"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'bhea_events_bugs' => 
    array (
      'lhs_module' => 'Bhea_Events',
      'lhs_table' => 'bhea_events',
      'lhs_key' => 'id',
      'rhs_module' => 'Bugs',
      'rhs_table' => 'bugs',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_events_bugs_c',
      'join_key_lhs' => 'bhea_events_bugsbhea_events_ida',
      'join_key_rhs' => 'bhea_events_bugsbugs_idb',
    ),
  ),
  'table' => 'bhea_events_bugs_c',
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
      'name' => 'bhea_events_bugsbhea_events_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_events_bugsbugs_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_events_bugsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_events_bugs_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_events_bugsbhea_events_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_events_bugs_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_events_bugsbugs_idb',
      ),
    ),
  ),
);