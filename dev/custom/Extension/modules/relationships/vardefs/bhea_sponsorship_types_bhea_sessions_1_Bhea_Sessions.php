<?php
// created: 2013-12-01 10:46:59
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsorship_types_bhea_sessions_1"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_types_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'bhea_Sponsorship_Types',
  'bean_name' => 'bhea_Sponsorship_Types',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SESSIONS_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'id_name' => 'bhea_sponsorship_types_bhea_sessions_1bhea_sponsorship_types_ida',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsorship_types_bhea_sessions_1_name"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SESSIONS_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsorship_types_bhea_sessions_1bhea_sponsorship_types_ida',
  'link' => 'bhea_sponsorship_types_bhea_sessions_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsorship_types_bhea_sessions_1bhea_sponsorship_types_ida"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sessions_1bhea_sponsorship_types_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SESSIONS_1_FROM_LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SESSIONS_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE_TITLE',
  'id_name' => 'bhea_sponsorship_types_bhea_sessions_1bhea_sponsorship_types_ida',
  'link' => 'bhea_sponsorship_types_bhea_sessions_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
