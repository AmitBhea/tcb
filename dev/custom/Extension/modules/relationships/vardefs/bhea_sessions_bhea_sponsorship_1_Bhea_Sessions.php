<?php
// created: 2013-12-03 09:28:04
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsorship',
  'bean_name' => 'Bhea_Sponsorship',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_1bhea_sponsorship_idb',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsorship_1_name"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'save' => true,
  'id_name' => 'bhea_sessions_bhea_sponsorship_1bhea_sponsorship_idb',
  'link' => 'bhea_sessions_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsorship_1bhea_sponsorship_idb"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_1bhea_sponsorship_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_1bhea_sponsorship_idb',
  'link' => 'bhea_sessions_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
