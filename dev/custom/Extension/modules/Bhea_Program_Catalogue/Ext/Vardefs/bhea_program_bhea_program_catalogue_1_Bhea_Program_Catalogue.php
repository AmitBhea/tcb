<?php
// created: 2013-12-03 14:13:31
$dictionary["Bhea_Program_Catalogue"]["fields"]["bhea_program_bhea_program_catalogue_1"] = array (
  'name' => 'bhea_program_bhea_program_catalogue_1',
  'type' => 'link',
  'relationship' => 'bhea_program_bhea_program_catalogue_1',
  'source' => 'non-db',
  'module' => 'Bhea_Program',
  'bean_name' => 'Bhea_Program',
  'side' => 'right',
  'vname' => 'LBL_BHEA_PROGRAM_BHEA_PROGRAM_CATALOGUE_1_FROM_BHEA_PROGRAM_CATALOGUE_TITLE',
  'id_name' => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Program_Catalogue"]["fields"]["bhea_program_bhea_program_catalogue_1_name"] = array (
  'name' => 'bhea_program_bhea_program_catalogue_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_PROGRAM_BHEA_PROGRAM_CATALOGUE_1_FROM_BHEA_PROGRAM_TITLE',
  'save' => true,
  'id_name' => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
  'link' => 'bhea_program_bhea_program_catalogue_1',
  'table' => 'bhea_program',
  'module' => 'Bhea_Program',
  'rname' => 'name',
);
$dictionary["Bhea_Program_Catalogue"]["fields"]["bhea_program_bhea_program_catalogue_1bhea_program_ida"] = array (
  'name' => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_PROGRAM_BHEA_PROGRAM_CATALOGUE_1_FROM_LBL_BHEA_PROGRAM_BHEA_PROGRAM_CATALOGUE_1_FROM_BHEA_PROGRAM_CATALOGUE_TITLE_TITLE',
  'id_name' => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
  'link' => 'bhea_program_bhea_program_catalogue_1',
  'table' => 'bhea_program',
  'module' => 'Bhea_Program',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
