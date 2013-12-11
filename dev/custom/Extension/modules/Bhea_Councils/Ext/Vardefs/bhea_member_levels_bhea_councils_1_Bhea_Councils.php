<?php
// created: 2013-12-04 16:32:17
$dictionary["Bhea_Councils"]["fields"]["bhea_member_levels_bhea_councils_1"] = array (
  'name' => 'bhea_member_levels_bhea_councils_1',
  'type' => 'link',
  'relationship' => 'bhea_member_levels_bhea_councils_1',
  'source' => 'non-db',
  'module' => 'Bhea_member_levels',
  'bean_name' => 'Bhea_member_levels',
  'side' => 'right',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCILS_1_FROM_BHEA_COUNCILS_TITLE',
  'id_name' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Councils"]["fields"]["bhea_member_levels_bhea_councils_1_name"] = array (
  'name' => 'bhea_member_levels_bhea_councils_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCILS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_bhea_councils_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'name',
);
$dictionary["Bhea_Councils"]["fields"]["bhea_member_levels_bhea_councils_1bhea_member_levels_ida"] = array (
  'name' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCILS_1_FROM_LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCILS_1_FROM_BHEA_COUNCILS_TITLE_TITLE',
  'id_name' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_bhea_councils_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
