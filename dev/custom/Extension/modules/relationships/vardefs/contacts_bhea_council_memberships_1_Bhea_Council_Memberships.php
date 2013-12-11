<?php
// created: 2013-12-03 12:23:54
$dictionary["Bhea_Council_Memberships"]["fields"]["contacts_bhea_council_memberships_1"] = array (
  'name' => 'contacts_bhea_council_memberships_1',
  'type' => 'link',
  'relationship' => 'contacts_bhea_council_memberships_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'id_name' => 'contacts_bhea_council_memberships_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Memberships"]["fields"]["contacts_bhea_council_memberships_1_name"] = array (
  'name' => 'contacts_bhea_council_memberships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_bhea_council_memberships_1contacts_ida',
  'link' => 'contacts_bhea_council_memberships_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_Council_Memberships"]["fields"]["contacts_bhea_council_memberships_1contacts_ida"] = array (
  'name' => 'contacts_bhea_council_memberships_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_LBL_CONTACTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE_TITLE',
  'id_name' => 'contacts_bhea_council_memberships_1contacts_ida',
  'link' => 'contacts_bhea_council_memberships_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
