<?php
// created: 2013-12-03 14:13:31
$dictionary["bhea_program_bhea_program_catalogue_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_program_bhea_program_catalogue_1' => 
    array (
      'lhs_module' => 'Bhea_Program',
      'lhs_table' => 'bhea_program',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Program_Catalogue',
      'rhs_table' => 'bhea_program_catalogue',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_program_bhea_program_catalogue_1_c',
      'join_key_lhs' => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
      'join_key_rhs' => 'bhea_program_bhea_program_catalogue_1bhea_program_catalogue_idb',
    ),
  ),
  'table' => 'bhea_program_bhea_program_catalogue_1_c',
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
      'name' => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_program_bhea_program_catalogue_1bhea_program_catalogue_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_program_bhea_program_catalogue_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_program_bhea_program_catalogue_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_program_bhea_program_catalogue_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_program_bhea_program_catalogue_1bhea_program_catalogue_idb',
      ),
    ),
  ),
);