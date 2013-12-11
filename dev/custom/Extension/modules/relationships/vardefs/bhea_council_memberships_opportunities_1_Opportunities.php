<?php
// created: 2013-12-04 09:53:17
$dictionary["Opportunity"]["fields"]["bhea_council_memberships_opportunities_1"] = array (
  'name' => 'bhea_council_memberships_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_council_memberships_opportunities_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Memberships',
  'bean_name' => 'Bhea_Council_Memberships',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_councc535erships_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_council_memberships_opportunities_1_name"] = array (
  'name' => 'bhea_council_memberships_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'save' => true,
  'id_name' => 'bhea_councc535erships_ida',
  'link' => 'bhea_council_memberships_opportunities_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_councc535erships_ida"] = array (
  'name' => 'bhea_councc535erships_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_councc535erships_ida',
  'link' => 'bhea_council_memberships_opportunities_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
