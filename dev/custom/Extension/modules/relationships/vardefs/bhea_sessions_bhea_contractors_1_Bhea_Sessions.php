<?php
// created: 2013-12-03 10:00:09
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_contractors_1"] = array (
  'name' => 'bhea_sessions_bhea_contractors_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_contractors_1',
  'source' => 'non-db',
  'module' => 'Bhea_Contractors',
  'bean_name' => 'Bhea_Contractors',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_CONTRACTORS_1_FROM_BHEA_CONTRACTORS_TITLE',
  'id_name' => 'bhea_sessions_bhea_contractors_1bhea_contractors_idb',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_contractors_1_name"] = array (
  'name' => 'bhea_sessions_bhea_contractors_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_CONTRACTORS_1_FROM_BHEA_CONTRACTORS_TITLE',
  'save' => true,
  'id_name' => 'bhea_sessions_bhea_contractors_1bhea_contractors_idb',
  'link' => 'bhea_sessions_bhea_contractors_1',
  'table' => 'bhea_contractors',
  'module' => 'Bhea_Contractors',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_contractors_1bhea_contractors_idb"] = array (
  'name' => 'bhea_sessions_bhea_contractors_1bhea_contractors_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_CONTRACTORS_1_FROM_LBL_BHEA_SESSIONS_BHEA_CONTRACTORS_1_FROM_BHEA_CONTRACTORS_TITLE_TITLE',
  'id_name' => 'bhea_sessions_bhea_contractors_1bhea_contractors_idb',
  'link' => 'bhea_sessions_bhea_contractors_1',
  'table' => 'bhea_contractors',
  'module' => 'Bhea_Contractors',
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
