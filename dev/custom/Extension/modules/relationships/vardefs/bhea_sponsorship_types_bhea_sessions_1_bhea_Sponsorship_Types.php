<?php
// created: 2013-12-01 10:46:59
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsorship_types_bhea_sessions_1"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_types_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sponsorship_types_bhea_sessions_1bhea_sessions_idb',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsorship_types_bhea_sessions_1_name"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsorship_types_bhea_sessions_1bhea_sessions_idb',
  'link' => 'bhea_sponsorship_types_bhea_sessions_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'name',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsorship_types_bhea_sessions_1bhea_sessions_idb"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sessions_1bhea_sessions_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SESSIONS_1_FROM_LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_sponsorship_types_bhea_sessions_1bhea_sessions_idb',
  'link' => 'bhea_sponsorship_types_bhea_sessions_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
