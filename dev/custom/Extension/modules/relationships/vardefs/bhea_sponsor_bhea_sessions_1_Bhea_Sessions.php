<?php
// created: 2013-12-04 10:19:01
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsor_bhea_sessions_1"] = array (
  'name' => 'bhea_sponsor_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsor_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsor_bhea_sessions_1_name"] = array (
  'name' => 'bhea_sponsor_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SPONSOR_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sessions_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsor_bhea_sessions_1bhea_sponsor_ida"] = array (
  'name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sessions_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
