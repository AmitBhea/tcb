<?php
// created: 2013-12-04 09:37:58
$dictionary["Bhea_Memberships"]["fields"]["bhea_memberships_contacts_1"] = array (
  'name' => 'bhea_memberships_contacts_1',
  'type' => 'link',
  'relationship' => 'bhea_memberships_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'bhea_memberships_contacts_1contacts_idb',
);
$dictionary["Bhea_Memberships"]["fields"]["bhea_memberships_contacts_1_name"] = array (
  'name' => 'bhea_memberships_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_memberships_contacts_1contacts_idb',
  'link' => 'bhea_memberships_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_Memberships"]["fields"]["bhea_memberships_contacts_1contacts_idb"] = array (
  'name' => 'bhea_memberships_contacts_1contacts_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_CONTACTS_1_FROM_LBL_BHEA_MEMBERSHIPS_CONTACTS_1_FROM_CONTACTS_TITLE_TITLE',
  'id_name' => 'bhea_memberships_contacts_1contacts_idb',
  'link' => 'bhea_memberships_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
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
