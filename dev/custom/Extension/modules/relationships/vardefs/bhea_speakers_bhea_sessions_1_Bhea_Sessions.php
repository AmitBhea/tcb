<?php
// created: 2013-12-03 09:10:55
$dictionary["Bhea_Sessions"]["fields"]["bhea_speakers_bhea_sessions_1"] = array (
  'name' => 'bhea_speakers_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_speakers_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Speakers',
  'bean_name' => 'Bhea_Speakers',
  'vname' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SPEAKERS_TITLE',
  'id_name' => 'bhea_speakers_bhea_sessions_1bhea_speakers_ida',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_speakers_bhea_sessions_1_name"] = array (
  'name' => 'bhea_speakers_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SPEAKERS_TITLE',
  'save' => true,
  'id_name' => 'bhea_speakers_bhea_sessions_1bhea_speakers_ida',
  'link' => 'bhea_speakers_bhea_sessions_1',
  'table' => 'bhea_speakers',
  'module' => 'Bhea_Speakers',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_speakers_bhea_sessions_1bhea_speakers_ida"] = array (
  'name' => 'bhea_speakers_bhea_sessions_1bhea_speakers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SPEAKERS_TITLE_TITLE',
  'id_name' => 'bhea_speakers_bhea_sessions_1bhea_speakers_ida',
  'link' => 'bhea_speakers_bhea_sessions_1',
  'table' => 'bhea_speakers',
  'module' => 'Bhea_Speakers',
  'rname' => 'id',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
