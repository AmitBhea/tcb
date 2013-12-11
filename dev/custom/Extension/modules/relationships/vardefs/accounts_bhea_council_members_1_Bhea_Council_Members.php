<?php
// created: 2013-12-04 09:42:14
$dictionary["Bhea_Council_Members"]["fields"]["accounts_bhea_council_members_1"] = array (
  'name' => 'accounts_bhea_council_members_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_council_members_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'id_name' => 'accounts_bhea_council_members_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Members"]["fields"]["accounts_bhea_council_members_1_name"] = array (
  'name' => 'accounts_bhea_council_members_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bhea_council_members_1accounts_ida',
  'link' => 'accounts_bhea_council_members_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bhea_Council_Members"]["fields"]["accounts_bhea_council_members_1accounts_ida"] = array (
  'name' => 'accounts_bhea_council_members_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE_TITLE',
  'id_name' => 'accounts_bhea_council_members_1accounts_ida',
  'link' => 'accounts_bhea_council_members_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
