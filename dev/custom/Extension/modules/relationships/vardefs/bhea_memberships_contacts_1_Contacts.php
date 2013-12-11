<?php
// created: 2013-12-04 09:37:58
$dictionary["Contact"]["fields"]["bhea_memberships_contacts_1"] = array (
  'name' => 'bhea_memberships_contacts_1',
  'type' => 'link',
  'relationship' => 'bhea_memberships_contacts_1',
  'source' => 'non-db',
  'module' => 'Bhea_Memberships',
  'bean_name' => 'Bhea_Memberships',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_CONTACTS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
  'id_name' => 'bhea_memberships_contacts_1bhea_memberships_ida',
);
$dictionary["Contact"]["fields"]["bhea_memberships_contacts_1_name"] = array (
  'name' => 'bhea_memberships_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_CONTACTS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
  'save' => true,
  'id_name' => 'bhea_memberships_contacts_1bhea_memberships_ida',
  'link' => 'bhea_memberships_contacts_1',
  'table' => 'bhea_memberships',
  'module' => 'Bhea_Memberships',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["bhea_memberships_contacts_1bhea_memberships_ida"] = array (
  'name' => 'bhea_memberships_contacts_1bhea_memberships_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_CONTACTS_1_FROM_LBL_BHEA_MEMBERSHIPS_CONTACTS_1_FROM_BHEA_MEMBERSHIPS_TITLE_TITLE',
  'id_name' => 'bhea_memberships_contacts_1bhea_memberships_ida',
  'link' => 'bhea_memberships_contacts_1',
  'table' => 'bhea_memberships',
  'module' => 'Bhea_Memberships',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
