<?php
// created: 2013-12-03 11:19:05
$dictionary["opportunities_bhea_councils_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_bhea_councils_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Councils',
      'rhs_table' => 'bhea_councils',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_bhea_councils_1_c',
      'join_key_lhs' => 'opportunities_bhea_councils_1opportunities_ida',
      'join_key_rhs' => 'opportunities_bhea_councils_1bhea_councils_idb',
    ),
  ),
  'table' => 'opportunities_bhea_councils_1_c',
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
      'name' => 'opportunities_bhea_councils_1opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_bhea_councils_1bhea_councils_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_bhea_councils_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_bhea_councils_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_bhea_councils_1opportunities_ida',
        1 => 'opportunities_bhea_councils_1bhea_councils_idb',
      ),
    ),
  ),
);