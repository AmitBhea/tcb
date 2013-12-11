<?php
// created: 2013-12-03 09:12:58
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_1"] = array (
  'name' => 'bhea_councils_bhea_council_members_1',
  'type' => 'link',
  'relationship' => 'bhea_councils_bhea_council_members_1',
  'source' => 'non-db',
  'module' => 'Bhea_Councils',
  'bean_name' => 'Bhea_Councils',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'id_name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_1_name"] = array (
  'name' => 'bhea_councils_bhea_council_members_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCILS_TITLE',
  'save' => true,
  'id_name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_members_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'name',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_1bhea_councils_ida"] = array (
  'name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE_TITLE',
  'id_name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_members_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
