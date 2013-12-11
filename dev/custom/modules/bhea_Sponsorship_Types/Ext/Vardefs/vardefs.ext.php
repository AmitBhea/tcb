<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-03 16:29:54
$dictionary['bhea_Sponsorship_Types']['fields']['description']['comments']='Full text of the note';
$dictionary['bhea_Sponsorship_Types']['fields']['description']['merge_filter']='disabled';
$dictionary['bhea_Sponsorship_Types']['fields']['description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['bhea_Sponsorship_Types']['fields']['description']['calculated']=false;
$dictionary['bhea_Sponsorship_Types']['fields']['description']['cols']='50';

 

// created: 2013-12-03 09:25:02
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sessions_bhea_sponsorship_types_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_types_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsorship_types_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sessions_bhea_sponsorship_types_1_name"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SESSIONS_TITLE',
  'save' => true,
  'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
  'link' => 'bhea_sessions_bhea_sponsorship_types_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'name',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
  'link' => 'bhea_sessions_bhea_sponsorship_types_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 16:30:03
$dictionary['bhea_Sponsorship_Types']['fields']['other_information']['rows']='6';
$dictionary['bhea_Sponsorship_Types']['fields']['other_information']['cols']='50';

 

// created: 2013-12-03 09:22:25
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_events_bhea_sponsorship_types_1"] = array (
  'name' => 'bhea_events_bhea_sponsorship_types_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sponsorship_types_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'id_name' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_events_bhea_sponsorship_types_1_name"] = array (
  'name' => 'bhea_events_bhea_sponsorship_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsorship_types_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_events_bhea_sponsorship_types_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1_FROM_LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsorship_types_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
