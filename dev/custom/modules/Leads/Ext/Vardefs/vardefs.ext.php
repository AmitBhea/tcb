<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-03 15:09:27
$dictionary['Lead']['fields']['territory_id_c']['labelValue']='Territory ID';
$dictionary['Lead']['fields']['territory_id_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Lead']['fields']['territory_id_c']['enforced']='';
$dictionary['Lead']['fields']['territory_id_c']['dependency']='';

 

 // created: 2013-12-05 08:57:29
$dictionary['Lead']['fields']['job_function_c']['labelValue']='Job Function';
$dictionary['Lead']['fields']['job_function_c']['dependency']='';
$dictionary['Lead']['fields']['job_function_c']['visibility_grid']='';

 

// created: 2013-12-03 14:54:02
$dictionary["Lead"]["fields"]["leads_contacts_1"] = array (
  'name' => 'leads_contacts_1',
  'type' => 'link',
  'relationship' => 'leads_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_LEADS_CONTACTS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_contacts_1leads_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-03 15:33:08
$dictionary["Lead"]["fields"]["leads_bhea_events_1"] = array (
  'name' => 'leads_bhea_events_1',
  'type' => 'link',
  'relationship' => 'leads_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'vname' => 'LBL_LEADS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'leads_bhea_events_1bhea_events_idb',
);


 // created: 2013-12-03 10:11:54
$dictionary['Lead']['fields']['account_name']['comments']='Account name for lead';
$dictionary['Lead']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['account_name']['calculated']=false;

 

 // created: 2013-12-04 12:00:44
$dictionary['Lead']['fields']['sub_type_c']['labelValue']='Sub Type';
$dictionary['Lead']['fields']['sub_type_c']['dependency']='';
$dictionary['Lead']['fields']['sub_type_c']['visibility_grid']=array (
  'trigger' => 'prod_serv_interest_c',
  'values' => 
  array (
    'membership' => 
    array (
      0 => 'Corporate_Membership',
      1 => 'Educational',
      2 => 'MidMarket',
      3 => 'Council',
    ),
    'product_services' => 
    array (
      0 => 'Sponsor',
      1 => 'Speaker',
      2 => 'Seminar',
      3 => 'Contractors',
      4 => 'Conference',
      5 => 'Participants',
      6 => 'Research_Working_Group',
      7 => 'Experiential',
    ),
    '' => 
    array (
    ),
  ),
);

 

// created: 2013-12-03 10:55:16
$dictionary["Lead"]["fields"]["leads_bhea_finance_performance_1"] = array (
  'name' => 'leads_bhea_finance_performance_1',
  'type' => 'link',
  'relationship' => 'leads_bhea_finance_performance_1',
  'source' => 'non-db',
  'module' => 'Bhea_finance_performance',
  'bean_name' => 'Bhea_finance_performance',
  'vname' => 'LBL_LEADS_BHEA_FINANCE_PERFORMANCE_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_bhea_finance_performance_1leads_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 10:15:22
$dictionary['Lead']['fields']['opportunity_date_c']['labelValue']='Opportunity Date';
$dictionary['Lead']['fields']['opportunity_date_c']['enforced']='';
$dictionary['Lead']['fields']['opportunity_date_c']['dependency']='';

 

 // created: 2013-12-03 18:55:20
$dictionary['Lead']['fields']['currency_c']['labelValue']='Currency';
$dictionary['Lead']['fields']['currency_c']['enforced']='';
$dictionary['Lead']['fields']['currency_c']['dependency']='';

 

 // created: 2013-12-03 16:03:12
$dictionary['Lead']['fields']['practice_area_c']['labelValue']='Practice Area';
$dictionary['Lead']['fields']['practice_area_c']['dependency']='';
$dictionary['Lead']['fields']['practice_area_c']['visibility_grid']=array (
  'trigger' => 'sub_type_c',
  'values' => 
  array (
    'Corporate_Membership' => 
    array (
    ),
    'Educational' => 
    array (
    ),
    'MidMarket' => 
    array (
    ),
    'Council' => 
    array (
      0 => 'human_capital',
      1 => 'corporate_leadership',
      2 => 'economy_value',
    ),
    'Speaker' => 
    array (
    ),
    'Sponsor' => 
    array (
    ),
    'Conference' => 
    array (
    ),
    'Seminar' => 
    array (
    ),
    'Research_Working_Group' => 
    array (
    ),
    'Experiential' => 
    array (
    ),
  ),
);

 

 // created: 2013-12-03 15:29:36
$dictionary['Lead']['fields']['role_c']['labelValue']='Role';
$dictionary['Lead']['fields']['role_c']['dependency']='';
$dictionary['Lead']['fields']['role_c']['visibility_grid']='';

 

 // created: 2013-12-03 10:10:31
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status']['calculated']=false;
$dictionary['Lead']['fields']['status']['dependency']=false;

 

 // created: 2013-12-03 16:00:56
$dictionary['Lead']['fields']['prod_serv_interest_c']['labelValue']='Opportunity Type';
$dictionary['Lead']['fields']['prod_serv_interest_c']['dependency']='';
$dictionary['Lead']['fields']['prod_serv_interest_c']['visibility_grid']='';

 

 // created: 2013-12-03 18:55:20

 