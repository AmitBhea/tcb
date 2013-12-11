<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-04 10:18:15
$dictionary["Bhea_Contractors"]["fields"]["bhea_contractors_bhea_sessions_1"] = array (
  'name' => 'bhea_contractors_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_contractors_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_BHEA_CONTRACTORS_TITLE',
  'id_name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 10:10:17
$dictionary['Bhea_Contractors']['fields']['area_of_expertise']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Contractors']['fields']['area_of_expertise']['cols']='50';

 

 // created: 2013-12-03 10:10:04
$dictionary['Bhea_Contractors']['fields']['description']['comments']='Full text of the note';
$dictionary['Bhea_Contractors']['fields']['description']['merge_filter']='disabled';
$dictionary['Bhea_Contractors']['fields']['description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Contractors']['fields']['description']['calculated']=false;
$dictionary['Bhea_Contractors']['fields']['description']['rows']='4';
$dictionary['Bhea_Contractors']['fields']['description']['cols']='50';

 

// created: 2013-12-04 12:54:45
$dictionary["Bhea_Contractors"]["fields"]["bhea_contractors_bhea_events_1"] = array (
  'name' => 'bhea_contractors_bhea_events_1',
  'type' => 'link',
  'relationship' => 'bhea_contractors_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_contractors_bhea_events_1bhea_events_idb',
);


 // created: 2013-12-03 10:01:21
$dictionary['Bhea_Contractors']['fields']['familiar_name_c']['labelValue']='Familiar Name';
$dictionary['Bhea_Contractors']['fields']['familiar_name_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Contractors']['fields']['familiar_name_c']['enforced']='';
$dictionary['Bhea_Contractors']['fields']['familiar_name_c']['dependency']='';

 