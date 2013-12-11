<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-03 09:43:13
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_registrants_1"] = array (
  'name' => 'bhea_events_bhea_registrants_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_registrants_1',
  'source' => 'non-db',
  'module' => 'Bhea_Registrants',
  'bean_name' => 'Bhea_Registrants',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_REGISTRANTS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_events_bhea_registrants_1bhea_events_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-03 15:33:08
$dictionary["Bhea_Events"]["fields"]["leads_bhea_events_1"] = array (
  'name' => 'leads_bhea_events_1',
  'type' => 'link',
  'relationship' => 'leads_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_BHEA_EVENTS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_bhea_events_1leads_ida',
);


 // created: 2013-12-03 17:55:29
$dictionary['Bhea_Events']['fields']['attendee_fee_target']['importable']='false';
$dictionary['Bhea_Events']['fields']['attendee_fee_target']['calculated']='true';
$dictionary['Bhea_Events']['fields']['attendee_fee_target']['formula']='multiply($conference_fees,$expected_no_of_attendees)';
$dictionary['Bhea_Events']['fields']['attendee_fee_target']['enforced']=true;

 

// created: 2013-12-03 09:28:39
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_sponsorship_1"] = array (
  'name' => 'bhea_events_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsorship',
  'bean_name' => 'Bhea_Sponsorship',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-03 16:00:54
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_sponsor_1"] = array (
  'name' => 'bhea_events_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 17:51:25

 

// created: 2013-12-04 09:54:49
$dictionary["Bhea_Events"]["fields"]["bhea_hotels_bhea_events_1"] = array (
  'name' => 'bhea_hotels_bhea_events_1',
  'type' => 'link',
  'relationship' => 'bhea_hotels_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Hotels',
  'bean_name' => 'Bhea_Hotels',
  'side' => 'right',
  'vname' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Events"]["fields"]["bhea_hotels_bhea_events_1_name"] = array (
  'name' => 'bhea_hotels_bhea_events_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_HOTELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
  'link' => 'bhea_hotels_bhea_events_1',
  'table' => 'bhea_hotels',
  'module' => 'Bhea_Hotels',
  'rname' => 'name',
);
$dictionary["Bhea_Events"]["fields"]["bhea_hotels_bhea_events_1bhea_hotels_ida"] = array (
  'name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE_TITLE',
  'id_name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
  'link' => 'bhea_hotels_bhea_events_1',
  'table' => 'bhea_hotels',
  'module' => 'Bhea_Hotels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-03 12:00:39
$dictionary["Bhea_Events"]["fields"]["bhea_events_campaigns_1"] = array (
  'name' => 'bhea_events_campaigns_1',
  'type' => 'link',
  'relationship' => 'bhea_events_campaigns_1',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'vname' => 'LBL_BHEA_EVENTS_CAMPAIGNS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_events_campaigns_1bhea_events_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-04 12:54:45
$dictionary["Bhea_Events"]["fields"]["bhea_contractors_bhea_events_1"] = array (
  'name' => 'bhea_contractors_bhea_events_1',
  'type' => 'link',
  'relationship' => 'bhea_contractors_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Contractors',
  'bean_name' => 'Bhea_Contractors',
  'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_EVENTS_1_FROM_BHEA_CONTRACTORS_TITLE',
  'id_name' => 'bhea_contractors_bhea_events_1bhea_contractors_ida',
);


 // created: 2013-12-03 18:37:00
$dictionary['Bhea_Events']['fields']['status']['default']='Tentative';
$dictionary['Bhea_Events']['fields']['status']['options']='event_status_3';
$dictionary['Bhea_Events']['fields']['status']['visibility_grid']=array (
  'trigger' => 'event_type',
  'values' => 
  array (
    'Conference' => 
    array (
      0 => 'Tentative',
      1 => 'Date_Confirmed',
      2 => 'Ready_for_Registration',
      3 => 'Early_Bird_Time',
      4 => 'Registration_Closure',
      5 => 'In_Session',
      6 => 'Completed',
      7 => 'Cancelled',
      8 => 'Postponed',
    ),
    'Seminar' => 
    array (
    ),
    'Web_Cast' => 
    array (
    ),
    'Council_Meeting' => 
    array (
    ),
    'Inter_Council_Meeting' => 
    array (
    ),
    'Working_Group' => 
    array (
    ),
    'Other' => 
    array (
    ),
  ),
);

 

// created: 2013-12-03 09:12:01
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_speakers_1"] = array (
  'name' => 'bhea_events_bhea_speakers_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_speakers_1',
  'source' => 'non-db',
  'module' => 'Bhea_Speakers',
  'bean_name' => 'Bhea_Speakers',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPEAKERS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_events_bhea_speakers_1bhea_events_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-03 12:02:11
$dictionary["Bhea_Events"]["fields"]["bhea_events_opportunities_1"] = array (
  'name' => 'bhea_events_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_events_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-03 09:22:25
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_sponsorship_types_1"] = array (
  'name' => 'bhea_events_bhea_sponsorship_types_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sponsorship_types_1',
  'source' => 'non-db',
  'module' => 'bhea_Sponsorship_Types',
  'bean_name' => 'bhea_Sponsorship_Types',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-03 12:23:01
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_events_1"] = array (
  'name' => 'bhea_events_bhea_events_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
  'id_name' => 'bhea_events_bhea_events_1bhea_events_idb',
  'link-type' => 'many',
  'side' => 'left',
);
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_events_1_right"] = array (
  'name' => 'bhea_events_bhea_events_1_right',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_R_TITLE',
  'id_name' => 'bhea_events_bhea_events_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_events_1_name"] = array (
  'name' => 'bhea_events_bhea_events_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_events_1bhea_events_ida',
  'link' => 'bhea_events_bhea_events_1_right',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_events_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_events_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_R_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_events_1bhea_events_ida',
  'link' => 'bhea_events_bhea_events_1_right',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-03 12:04:19
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_sessions_1"] = array (
  'name' => 'bhea_events_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  'link-type' => 'many',
  'side' => 'left',
);
