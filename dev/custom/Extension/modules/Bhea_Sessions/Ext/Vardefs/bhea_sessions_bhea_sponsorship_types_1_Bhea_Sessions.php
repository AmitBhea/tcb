<?php
// created: 2013-12-03 09:25:02
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsorship_types_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_types_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsorship_types_1',
  'source' => 'non-db',
  'module' => 'bhea_Sponsorship_Types',
  'bean_name' => 'bhea_Sponsorship_Types',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsorship_types_1_name"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'save' => true,
  'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
  'link' => 'bhea_sessions_bhea_sponsorship_types_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
  'link' => 'bhea_sessions_bhea_sponsorship_types_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
