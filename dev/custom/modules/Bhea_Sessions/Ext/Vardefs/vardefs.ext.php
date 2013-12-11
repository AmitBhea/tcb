<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-04 10:18:15
$dictionary["Bhea_Sessions"]["fields"]["bhea_contractors_bhea_sessions_1"] = array (
  'name' => 'bhea_contractors_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_contractors_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Contractors',
  'bean_name' => 'Bhea_Contractors',
  'side' => 'right',
  'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_contractors_bhea_sessions_1_name"] = array (
  'name' => 'bhea_contractors_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_BHEA_CONTRACTORS_TITLE',
  'save' => true,
  'id_name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
  'link' => 'bhea_contractors_bhea_sessions_1',
  'table' => 'bhea_contractors',
  'module' => 'Bhea_Contractors',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_contractors_bhea_sessions_1bhea_contractors_ida"] = array (
  'name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
  'link' => 'bhea_contractors_bhea_sessions_1',
  'table' => 'bhea_contractors',
  'module' => 'Bhea_Contractors',
  'rname' => 'id',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-04 10:19:01
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsor_bhea_sessions_1"] = array (
  'name' => 'bhea_sponsor_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsor_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsor_bhea_sessions_1_name"] = array (
  'name' => 'bhea_sponsor_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SPONSOR_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sessions_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsor_bhea_sessions_1bhea_sponsor_ida"] = array (
  'name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sessions_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-04 09:46:31
$dictionary["Bhea_Sessions"]["fields"]["contacts_bhea_sessions_1"] = array (
  'name' => 'contacts_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'contacts_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_BHEA_SESSIONS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_bhea_sessions_1contacts_ida',
);


// created: 2013-12-03 09:42:33
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_registrants_1"] = array (
  'name' => 'bhea_sessions_bhea_registrants_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_registrants_1',
  'source' => 'non-db',
  'module' => 'Bhea_Registrants',
  'bean_name' => 'Bhea_Registrants',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-03 12:04:19
$dictionary["Bhea_Sessions"]["fields"]["bhea_events_bhea_sessions_1"] = array (
  'name' => 'bhea_events_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_events_bhea_sessions_1_name"] = array (
  'name' => 'bhea_events_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sessions_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_events_bhea_sessions_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sessions_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-04 10:21:14
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsorship_bhea_sessions_1"] = array (
  'name' => 'bhea_sponsorship_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsorship',
  'bean_name' => 'Bhea_Sponsorship',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsorship_bhea_sessions_1_name"] = array (
  'name' => 'bhea_sponsorship_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
  'link' => 'bhea_sponsorship_bhea_sessions_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida"] = array (
  'name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
  'link' => 'bhea_sponsorship_bhea_sessions_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-04 10:16:05
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_speakers_1"] = array (
  'name' => 'bhea_sessions_bhea_speakers_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_speakers_1',
  'source' => 'non-db',
  'module' => 'Bhea_Speakers',
  'bean_name' => 'Bhea_Speakers',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPEAKERS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sessions_bhea_speakers_1bhea_sessions_ida',
  'link-type' => 'many',
  'side' => 'left',
);


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
