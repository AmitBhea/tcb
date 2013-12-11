<?php
// created: 2013-12-03 09:13:38
$dictionary["Opportunity"]["fields"]["bhea_councils_opportunities_1"] = array (
  'name' => 'bhea_councils_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_councils_opportunities_1',
  'source' => 'non-db',
  'module' => 'Bhea_Councils',
  'bean_name' => 'Bhea_Councils',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_councils_opportunities_1bhea_councils_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_councils_opportunities_1_name"] = array (
  'name' => 'bhea_councils_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_BHEA_COUNCILS_TITLE',
  'save' => true,
  'id_name' => 'bhea_councils_opportunities_1bhea_councils_ida',
  'link' => 'bhea_councils_opportunities_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_councils_opportunities_1bhea_councils_ida"] = array (
  'name' => 'bhea_councils_opportunities_1bhea_councils_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_councils_opportunities_1bhea_councils_ida',
  'link' => 'bhea_councils_opportunities_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
