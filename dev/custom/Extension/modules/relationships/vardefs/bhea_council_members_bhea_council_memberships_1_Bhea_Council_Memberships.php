<?php
// created: 2013-12-03 09:26:08
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_council_members_bhea_council_memberships_1"] = array (
  'name' => 'bhea_council_members_bhea_council_memberships_1',
  'type' => 'link',
  'relationship' => 'bhea_council_members_bhea_council_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Members',
  'bean_name' => 'Bhea_Council_Members',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'id_name' => 'bhea_counc8ee0members_ida',
);
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_council_members_bhea_council_memberships_1_name"] = array (
  'name' => 'bhea_council_members_bhea_council_memberships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'save' => true,
  'id_name' => 'bhea_counc8ee0members_ida',
  'link' => 'bhea_council_members_bhea_council_memberships_1',
  'table' => 'bhea_council_members',
  'module' => 'Bhea_Council_Members',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_counc8ee0members_ida"] = array (
  'name' => 'bhea_counc8ee0members_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE_TITLE',
  'id_name' => 'bhea_counc8ee0members_ida',
  'link' => 'bhea_council_members_bhea_council_memberships_1',
  'table' => 'bhea_council_members',
  'module' => 'Bhea_Council_Members',
  'rname' => 'id',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
