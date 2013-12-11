<?php
// created: 2013-12-03 09:26:08
$dictionary["Bhea_Council_Members"]["fields"]["bhea_council_members_bhea_council_memberships_1"] = array (
  'name' => 'bhea_council_members_bhea_council_memberships_1',
  'type' => 'link',
  'relationship' => 'bhea_council_members_bhea_council_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Memberships',
  'bean_name' => 'Bhea_Council_Memberships',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'id_name' => 'bhea_counc1877erships_idb',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_council_members_bhea_council_memberships_1_name"] = array (
  'name' => 'bhea_council_members_bhea_council_memberships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'save' => true,
  'id_name' => 'bhea_counc1877erships_idb',
  'link' => 'bhea_council_members_bhea_council_memberships_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'name',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_counc1877erships_idb"] = array (
  'name' => 'bhea_counc1877erships_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE_TITLE',
  'id_name' => 'bhea_counc1877erships_idb',
  'link' => 'bhea_council_members_bhea_council_memberships_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
