<?php
// created: 2013-12-03 09:10:55
$dictionary["Bhea_Speakers"]["fields"]["bhea_speakers_bhea_sessions_1"] = array (
  'name' => 'bhea_speakers_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_speakers_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_speakers_bhea_sessions_1bhea_sessions_idb',
);
$dictionary["Bhea_Speakers"]["fields"]["bhea_speakers_bhea_sessions_1_name"] = array (
  'name' => 'bhea_speakers_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'save' => true,
  'id_name' => 'bhea_speakers_bhea_sessions_1bhea_sessions_idb',
  'link' => 'bhea_speakers_bhea_sessions_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'name',
);
$dictionary["Bhea_Speakers"]["fields"]["bhea_speakers_bhea_sessions_1bhea_sessions_idb"] = array (
  'name' => 'bhea_speakers_bhea_sessions_1bhea_sessions_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_speakers_bhea_sessions_1bhea_sessions_idb',
  'link' => 'bhea_speakers_bhea_sessions_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
