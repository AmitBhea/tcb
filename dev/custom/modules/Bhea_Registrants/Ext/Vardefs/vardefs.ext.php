<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-03 09:48:33
$dictionary['Bhea_Registrants']['fields']['company_address_postalcode_c']['group']='company_address_c';

 

 // created: 2013-12-03 09:49:23

 

 // created: 2013-12-03 09:48:05
$dictionary['Bhea_Registrants']['fields']['company_name_c']['labelValue']='Company Name';
$dictionary['Bhea_Registrants']['fields']['company_name_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Registrants']['fields']['company_name_c']['enforced']='';
$dictionary['Bhea_Registrants']['fields']['company_name_c']['dependency']='';

 

// created: 2013-12-03 09:43:13
$dictionary["Bhea_Registrants"]["fields"]["bhea_events_bhea_registrants_1"] = array (
  'name' => 'bhea_events_bhea_registrants_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_registrants_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE',
  'id_name' => 'bhea_events_bhea_registrants_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Registrants"]["fields"]["bhea_events_bhea_registrants_1_name"] = array (
  'name' => 'bhea_events_bhea_registrants_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_REGISTRANTS_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_registrants_1bhea_events_ida',
  'link' => 'bhea_events_bhea_registrants_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Registrants"]["fields"]["bhea_events_bhea_registrants_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_registrants_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_REGISTRANTS_1_FROM_LBL_BHEA_EVENTS_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_registrants_1bhea_events_ida',
  'link' => 'bhea_events_bhea_registrants_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 09:49:32

 

 // created: 2013-12-03 09:48:33
$dictionary['Bhea_Registrants']['fields']['company_address_state_c']['group']='company_address_c';

 

 // created: 2013-12-03 09:48:33
$dictionary['Bhea_Registrants']['fields']['company_address_city_c']['group']='company_address_c';

 

 // created: 2013-12-03 09:48:33
$dictionary['Bhea_Registrants']['fields']['company_address_country_c']['group']='company_address_c';

 

 // created: 2013-12-03 09:48:33
$dictionary['Bhea_Registrants']['fields']['company_address_street_c']['group']='company_address_c';

 

 // created: 2013-12-03 09:46:09
$dictionary['Bhea_Registrants']['fields']['familiar_name_c']['labelValue']='Familiar Name';
$dictionary['Bhea_Registrants']['fields']['familiar_name_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Registrants']['fields']['familiar_name_c']['enforced']='';
$dictionary['Bhea_Registrants']['fields']['familiar_name_c']['dependency']='';

 

// created: 2013-12-03 09:42:33
$dictionary["Bhea_Registrants"]["fields"]["bhea_sessions_bhea_registrants_1"] = array (
  'name' => 'bhea_sessions_bhea_registrants_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_registrants_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE',
  'id_name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Registrants"]["fields"]["bhea_sessions_bhea_registrants_1_name"] = array (
  'name' => 'bhea_sessions_bhea_registrants_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_SESSIONS_TITLE',
  'save' => true,
  'id_name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'link' => 'bhea_sessions_bhea_registrants_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'name',
);
$dictionary["Bhea_Registrants"]["fields"]["bhea_sessions_bhea_registrants_1bhea_sessions_ida"] = array (
  'name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE_TITLE',
  'id_name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'link' => 'bhea_sessions_bhea_registrants_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
