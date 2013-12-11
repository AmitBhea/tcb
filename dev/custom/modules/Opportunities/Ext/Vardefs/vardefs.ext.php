<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-03 12:02:11
$dictionary["Opportunity"]["fields"]["bhea_events_opportunities_1"] = array (
  'name' => 'bhea_events_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_events_opportunities_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_events_opportunities_1_name"] = array (
  'name' => 'bhea_events_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
  'link' => 'bhea_events_opportunities_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_events_opportunities_1bhea_events_ida"] = array (
  'name' => 'bhea_events_opportunities_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
  'link' => 'bhea_events_opportunities_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 16:35:21
$dictionary['Opportunity']['fields']['membership_fee_c']['labelValue']='Membership Fee';
$dictionary['Opportunity']['fields']['membership_fee_c']['enforced']='';
$dictionary['Opportunity']['fields']['membership_fee_c']['dependency']='';

 

// created: 2013-12-03 10:39:15
$dictionary["Opportunity"]["fields"]["opportunities_bhea_program_1"] = array (
  'name' => 'opportunities_bhea_program_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_program_1',
  'source' => 'non-db',
  'module' => 'Bhea_Program',
  'bean_name' => 'Bhea_Program',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_PROGRAM_1_FROM_BHEA_PROGRAM_TITLE',
  'id_name' => 'opportunities_bhea_program_1bhea_program_idb',
);


 // created: 2013-12-03 16:34:52
$dictionary['Opportunity']['fields']['discount_c']['labelValue']='Discount';
$dictionary['Opportunity']['fields']['discount_c']['enforced']='';
$dictionary['Opportunity']['fields']['discount_c']['dependency']='';

 

 // created: 2013-12-03 16:32:42
$dictionary['Opportunity']['fields']['subtype_c']['labelValue']='Sub Type';
$dictionary['Opportunity']['fields']['subtype_c']['dependency']='';
$dictionary['Opportunity']['fields']['subtype_c']['visibility_grid']=array (
  'trigger' => 'opportunity_type',
  'values' => 
  array (
    'membership' => 
    array (
      0 => 'new_mem',
      1 => 'renewal',
      2 => 'mem_upgrade',
    ),
    'prod_service' => 
    array (
      0 => 'council',
      1 => 'conference',
      2 => 'seminar',
      3 => 'sponsorship',
      4 => 'research_working',
      5 => 'experiential_learning',
    ),
    'other' => 
    array (
    ),
  ),
);

 

 // created: 2013-12-03 10:18:11
$dictionary['Opportunity']['fields']['actual_close_date_c']['labelValue']='Actual Closed Date';
$dictionary['Opportunity']['fields']['actual_close_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['actual_close_date_c']['dependency']='';

 

// created: 2013-12-03 11:19:05
$dictionary["Opportunity"]["fields"]["opportunities_bhea_councils_1"] = array (
  'name' => 'opportunities_bhea_councils_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_councils_1',
  'source' => 'non-db',
  'module' => 'Bhea_Councils',
  'bean_name' => 'Bhea_Councils',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_COUNCILS_1_FROM_BHEA_COUNCILS_TITLE',
  'id_name' => 'opportunities_bhea_councils_1bhea_councils_idb',
);


 // created: 2013-12-03 16:33:22
$dictionary['Opportunity']['fields']['practice_area_c']['labelValue']='Practice Area';
$dictionary['Opportunity']['fields']['practice_area_c']['visibility_grid']=array (
  'trigger' => 'subtype_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'new_mem' => 
    array (
    ),
    'renewal' => 
    array (
    ),
    'mem_upgrade' => 
    array (
    ),
    'council' => 
    array (
      0 => 'human_capital',
      1 => 'corporate_leadership',
      2 => 'economy_value',
    ),
    'conference' => 
    array (
    ),
    'seminar' => 
    array (
    ),
    'sponsorship' => 
    array (
    ),
    'research_working' => 
    array (
    ),
    'experiential_learning' => 
    array (
    ),
  ),
);

 

 // created: 2013-12-03 16:51:48
$dictionary['Opportunity']['fields']['lost_reason_c']['labelValue']='Lost Reason';
$dictionary['Opportunity']['fields']['lost_reason_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Opportunity']['fields']['lost_reason_c']['enforced']='';
$dictionary['Opportunity']['fields']['lost_reason_c']['dependency']='equal($sales_stage,"Closed Lost")';

 

// created: 2013-12-04 09:53:17
$dictionary["Opportunity"]["fields"]["bhea_council_memberships_opportunities_1"] = array (
  'name' => 'bhea_council_memberships_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_council_memberships_opportunities_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Memberships',
  'bean_name' => 'Bhea_Council_Memberships',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_councc535erships_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_council_memberships_opportunities_1_name"] = array (
  'name' => 'bhea_council_memberships_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'save' => true,
  'id_name' => 'bhea_councc535erships_ida',
  'link' => 'bhea_council_memberships_opportunities_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_councc535erships_ida"] = array (
  'name' => 'bhea_councc535erships_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_councc535erships_ida',
  'link' => 'bhea_council_memberships_opportunities_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 16:32:35
$dictionary['Opportunity']['fields']['opportunity_type']['default']='';
$dictionary['Opportunity']['fields']['opportunity_type']['len']=100;
$dictionary['Opportunity']['fields']['opportunity_type']['options']='opportunity_type_list';
$dictionary['Opportunity']['fields']['opportunity_type']['comments']='Type of opportunity (ex: Existing, New)';
$dictionary['Opportunity']['fields']['opportunity_type']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['opportunity_type']['calculated']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['dependency']=false;

 

 // created: 2013-12-03 16:47:18
$dictionary['Opportunity']['fields']['sales_stage']['default']='Prospecting';
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_stage']['dependency']=false;

 

 // created: 2013-12-03 20:17:43
$dictionary['Opportunity']['fields']['amount_usdollar']['comments']='Formatted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['amount_usdollar']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['calculated']=false;
$dictionary['Opportunity']['fields']['amount_usdollar']['formula']='';
$dictionary['Opportunity']['fields']['amount_usdollar']['enforced']=false;
$dictionary['Opportunity']['fields']['amount_usdollar']['enable_range_search']=false;

 

 // created: 2013-12-03 16:39:14
$dictionary['Opportunity']['fields']['final_membership_fee_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['final_membership_fee_c']['labelValue']='Final Membership Fee';
$dictionary['Opportunity']['fields']['final_membership_fee_c']['calculated']='true';
$dictionary['Opportunity']['fields']['final_membership_fee_c']['formula']='subtract($membership_fee_c,$discount_c)';
$dictionary['Opportunity']['fields']['final_membership_fee_c']['enforced']='true';
$dictionary['Opportunity']['fields']['final_membership_fee_c']['dependency']='';

 

// created: 2013-12-04 09:23:29
$dictionary["Opportunity"]["fields"]["bhea_member_levels_opportunities_1"] = array (
  'name' => 'bhea_member_levels_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_member_levels_opportunities_1',
  'source' => 'non-db',
  'module' => 'Bhea_member_levels',
  'bean_name' => 'Bhea_member_levels',
  'side' => 'right',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_member_levels_opportunities_1_name"] = array (
  'name' => 'bhea_member_levels_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_opportunities_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_member_levels_opportunities_1bhea_member_levels_ida"] = array (
  'name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_opportunities_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 10:18:44
$dictionary['Opportunity']['fields']['budget_amt_c']['labelValue']='Customer Budget Amount';
$dictionary['Opportunity']['fields']['budget_amt_c']['enforced']='';
$dictionary['Opportunity']['fields']['budget_amt_c']['dependency']='';

 