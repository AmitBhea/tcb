<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-04 10:21:14
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsorship_bhea_sessions_1"] = array (
  'name' => 'bhea_sponsorship_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-03 09:28:39
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_events_bhea_sponsorship_1"] = array (
  'name' => 'bhea_events_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_events_bhea_sponsorship_1_name"] = array (
  'name' => 'bhea_events_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsorship_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_events_bhea_sponsorship_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsorship_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-04 12:42:53
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsor_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsor_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsor_bhea_sponsorship_1_name"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSOR_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sponsorship_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sponsorship_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 19:08:33
$dictionary['Bhea_Sponsorship']['fields']['sponsorship_type']['default']='Platinum';
$dictionary['Bhea_Sponsorship']['fields']['sponsorship_type']['options']='sponsorship_type_0';

 