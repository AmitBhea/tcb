<?php
// created: 2013-12-03 16:03:46
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsor_bhea_sessions_2"] = array (
  'name' => 'bhea_sponsor_bhea_sessions_2',
  'type' => 'link',
  'relationship' => 'bhea_sponsor_bhea_sessions_2',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_2_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sessions_2bhea_sponsor_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsor_bhea_sessions_2_name"] = array (
  'name' => 'bhea_sponsor_bhea_sessions_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_2_FROM_BHEA_SPONSOR_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsor_bhea_sessions_2bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sessions_2',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsor_bhea_sessions_2bhea_sponsor_ida"] = array (
  'name' => 'bhea_sponsor_bhea_sessions_2bhea_sponsor_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_2_FROM_LBL_BHEA_SPONSOR_BHEA_SESSIONS_2_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sessions_2bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sessions_2',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
