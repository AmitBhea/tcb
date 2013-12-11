<?php
// created: 2013-12-03 15:33:08
$dictionary["leads_bhea_events_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'leads_bhea_events_1' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Events',
      'rhs_table' => 'bhea_events',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'leads_bhea_events_1_c',
      'join_key_lhs' => 'leads_bhea_events_1leads_ida',
      'join_key_rhs' => 'leads_bhea_events_1bhea_events_idb',
    ),
  ),
  'table' => 'leads_bhea_events_1_c',
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
      'name' => 'leads_bhea_events_1leads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'leads_bhea_events_1bhea_events_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'leads_bhea_events_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'leads_bhea_events_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'leads_bhea_events_1leads_ida',
        1 => 'leads_bhea_events_1bhea_events_idb',
      ),
    ),
  ),
);