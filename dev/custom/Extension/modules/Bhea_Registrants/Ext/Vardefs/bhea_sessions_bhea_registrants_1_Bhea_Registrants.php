<?php
// created: 2013-12-03 09:42:33
$dictionary["Bhea_Registrants"]["fields"]["bhea_sessions_bhea_registrants_1"] = array (
  'name' => 'bhea_sessions_bhea_registrants_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_registrants_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE',
  'id_name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Registrants"]["fields"]["bhea_sessions_bhea_registrants_1_name"] = array (
  'name' => 'bhea_sessions_bhea_registrants_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_SESSIONS_TITLE',
  'save' => true,
  'id_name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'link' => 'bhea_sessions_bhea_registrants_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'name',
);
$dictionary["Bhea_Registrants"]["fields"]["bhea_sessions_bhea_registrants_1bhea_sessions_ida"] = array (
  'name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE_TITLE',
  'id_name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'link' => 'bhea_sessions_bhea_registrants_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
