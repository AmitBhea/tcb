<?php
// created: 2013-12-03 09:34:55
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsor_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsor_1bhea_sponsor_idb',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsor_1_name"] = array (
  'name' => 'bhea_sessions_bhea_sponsor_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
  'save' => true,
  'id_name' => 'bhea_sessions_bhea_sponsor_1bhea_sponsor_idb',
  'link' => 'bhea_sessions_bhea_sponsor_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsor_1bhea_sponsor_idb"] = array (
  'name' => 'bhea_sessions_bhea_sponsor_1bhea_sponsor_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSOR_1_FROM_LBL_BHEA_SESSIONS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsor_1bhea_sponsor_idb',
  'link' => 'bhea_sessions_bhea_sponsor_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
