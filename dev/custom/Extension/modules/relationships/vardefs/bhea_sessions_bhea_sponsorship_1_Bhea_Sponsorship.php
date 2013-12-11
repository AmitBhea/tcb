<?php
// created: 2013-12-03 09:28:04
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sessions_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_1bhea_sessions_ida',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sessions_bhea_sponsorship_1_name"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SESSIONS_TITLE',
  'save' => true,
  'id_name' => 'bhea_sessions_bhea_sponsorship_1bhea_sessions_ida',
  'link' => 'bhea_sessions_bhea_sponsorship_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sessions_bhea_sponsorship_1bhea_sessions_ida"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_1bhea_sessions_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_1bhea_sessions_ida',
  'link' => 'bhea_sessions_bhea_sponsorship_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
