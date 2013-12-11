<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-04 15:00:10
$dictionary['Account']['fields']['renewal_date_c']['labelValue']='Renewal Date';
$dictionary['Account']['fields']['renewal_date_c']['enforced']='';
$dictionary['Account']['fields']['renewal_date_c']['dependency']='or(equal($account_type,"member"),equal($account_type,"past_member"))';

 

 // created: 2013-12-04 14:56:32
$dictionary['Account']['fields']['mem_end_date_c']['labelValue']='Membership End Date';
$dictionary['Account']['fields']['mem_end_date_c']['enforced']='';
$dictionary['Account']['fields']['mem_end_date_c']['dependency']='or(equal($account_type,"member"),equal($account_type,"past_member"))';

 

 // created: 2013-12-03 08:58:16
$dictionary['Account']['fields']['territory_id_c']['labelValue']='Territory ID';
$dictionary['Account']['fields']['territory_id_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['territory_id_c']['enforced']='';
$dictionary['Account']['fields']['territory_id_c']['dependency']='';

 

// created: 2013-12-03 12:24:34
$dictionary["Account"]["fields"]["accounts_bhea_council_memberships_1"] = array (
  'name' => 'accounts_bhea_council_memberships_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_council_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Memberships',
  'bean_name' => 'Bhea_Council_Memberships',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bhea_council_memberships_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 08:57:47
$dictionary['Account']['fields']['company_id_c']['labelValue']='Company ID';
$dictionary['Account']['fields']['company_id_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['company_id_c']['enforced']='';
$dictionary['Account']['fields']['company_id_c']['dependency']='';

 

 // created: 2013-12-03 09:06:30
$dictionary['Account']['fields']['industry']['len']=100;
$dictionary['Account']['fields']['industry']['comments']='The company belongs in this industry';
$dictionary['Account']['fields']['industry']['merge_filter']='disabled';
$dictionary['Account']['fields']['industry']['calculated']=false;
$dictionary['Account']['fields']['industry']['dependency']=false;

 

 // created: 2013-12-03 20:04:10
$dictionary['Account']['fields']['quit_date_c']['labelValue']='Quit Date';
$dictionary['Account']['fields']['quit_date_c']['enforced']='';
$dictionary['Account']['fields']['quit_date_c']['dependency']='not(equal($request_quit_c,""))';

 

 // created: 2013-12-03 19:37:44
$dictionary['Account']['fields']['classification_c']['labelValue']='Classification';
$dictionary['Account']['fields']['classification_c']['dependency']='';
$dictionary['Account']['fields']['classification_c']['visibility_grid']='';

 

// created: 2013-12-03 09:28:56
$dictionary["Account"]["fields"]["accounts_bhea_memberships_1"] = array (
  'name' => 'accounts_bhea_memberships_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_Memberships',
  'bean_name' => 'Bhea_Memberships',
  'vname' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bhea_memberships_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 09:17:19
$dictionary['Account']['fields']['duns_c']['labelValue']='DUNS';
$dictionary['Account']['fields']['duns_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['duns_c']['enforced']='';
$dictionary['Account']['fields']['duns_c']['dependency']='';

 

 // created: 2013-12-03 12:49:48
$dictionary['Account']['fields']['description']['comments']='Full text of the note';
$dictionary['Account']['fields']['description']['merge_filter']='disabled';
$dictionary['Account']['fields']['description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['description']['calculated']=false;

 

 // created: 2013-12-03 09:16:00
$dictionary['Account']['fields']['last_fiscal_c']['labelValue']='Last Revenue Fiscal Year';
$dictionary['Account']['fields']['last_fiscal_c']['enforced']='';
$dictionary['Account']['fields']['last_fiscal_c']['dependency']='';

 

 // created: 2013-12-03 09:17:48
$dictionary['Account']['fields']['forbes_rating_c']['labelValue']='Forbes Rating';
$dictionary['Account']['fields']['forbes_rating_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['forbes_rating_c']['enforced']='';
$dictionary['Account']['fields']['forbes_rating_c']['dependency']='';

 

 // created: 2013-12-03 09:18:35
$dictionary['Account']['fields']['global_rating_c']['labelValue']='Fortune Global Rating';
$dictionary['Account']['fields']['global_rating_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['global_rating_c']['enforced']='';
$dictionary['Account']['fields']['global_rating_c']['dependency']='';

 

 // created: 2013-12-03 08:57:18
$dictionary['Account']['fields']['company_alias_c']['labelValue']='Company Alias';
$dictionary['Account']['fields']['company_alias_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['company_alias_c']['enforced']='';
$dictionary['Account']['fields']['company_alias_c']['dependency']='';

 

// created: 2013-12-04 09:27:55
$dictionary["Account"]["fields"]["accounts_bhea_account_plan_1"] = array (
  'name' => 'accounts_bhea_account_plan_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_account_plan_1',
  'source' => 'non-db',
  'module' => 'Bhea_Account_Plan',
  'bean_name' => 'Bhea_Account_Plan',
  'vname' => 'LBL_ACCOUNTS_BHEA_ACCOUNT_PLAN_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bhea_account_plan_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-04 14:59:43
$dictionary['Account']['fields']['subs_amt_c']['labelValue']='Current Subscription Amount';
$dictionary['Account']['fields']['subs_amt_c']['enforced']='';
$dictionary['Account']['fields']['subs_amt_c']['dependency']='or(equal($account_type,"member"),equal($account_type,"past_member"))';

 

 // created: 2013-12-03 09:05:42
$dictionary['Account']['fields']['legal_status_c']['labelValue']='Company Legal Status';
$dictionary['Account']['fields']['legal_status_c']['dependency']='';
$dictionary['Account']['fields']['legal_status_c']['visibility_grid']='';

 

 // created: 2013-12-04 14:55:48
$dictionary['Account']['fields']['mem_start_date_c']['labelValue']='Membership Start Date';
$dictionary['Account']['fields']['mem_start_date_c']['enforced']='';
$dictionary['Account']['fields']['mem_start_date_c']['dependency']='or(equal($account_type,"member"),equal($account_type,"past_member"))';

 

 // created: 2013-12-03 19:38:25
$dictionary['Account']['fields']['request_quit_c']['labelValue']='Request Quit';
$dictionary['Account']['fields']['request_quit_c']['enforced']='';
$dictionary['Account']['fields']['request_quit_c']['dependency']='';

 

 // created: 2013-12-04 15:02:10
$dictionary['Account']['fields']['prod_serv_c']['labelValue']='Products &amp; Services Participation';
$dictionary['Account']['fields']['prod_serv_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['prod_serv_c']['enforced']='';
$dictionary['Account']['fields']['prod_serv_c']['dependency']='or(equal($account_type,"member"),equal($account_type,"past_member"))';

 

 // created: 2013-12-03 09:11:15
$dictionary['Account']['fields']['other_phone_c']['labelValue']='Other Phone';
$dictionary['Account']['fields']['other_phone_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['other_phone_c']['enforced']='';
$dictionary['Account']['fields']['other_phone_c']['dependency']='';

 

 // created: 2013-12-03 09:19:03
$dictionary['Account']['fields']['vat_number_c']['labelValue']='VAT Number';
$dictionary['Account']['fields']['vat_number_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['vat_number_c']['enforced']='';
$dictionary['Account']['fields']['vat_number_c']['dependency']='';

 

 // created: 2013-12-04 14:57:36
$dictionary['Account']['fields']['mem_status_c']['labelValue']='Membership Status';
$dictionary['Account']['fields']['mem_status_c']['dependency']='or(equal($account_type,"member"),equal($account_type,"past_member"))';
$dictionary['Account']['fields']['mem_status_c']['visibility_grid']='';

 

 // created: 2013-12-03 09:15:00
$dictionary['Account']['fields']['fiscal_end_c']['labelValue']='Fiscal Year End';
$dictionary['Account']['fields']['fiscal_end_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['fiscal_end_c']['enforced']='';
$dictionary['Account']['fields']['fiscal_end_c']['dependency']='';

 

// created: 2013-12-04 09:28:35
$dictionary["Account"]["fields"]["accounts_bhea_orders_1"] = array (
  'name' => 'accounts_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Bhea_Orders',
  'bean_name' => 'Bhea_Orders',
  'vname' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bhea_orders_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 09:24:14

 

 // created: 2013-12-04 15:11:19
$dictionary['Account']['fields']['usage_overview_c']['labelValue']='Benefits Usage Overview';
$dictionary['Account']['fields']['usage_overview_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['usage_overview_c']['enforced']='';

 

// created: 2013-12-04 09:42:14
$dictionary["Account"]["fields"]["accounts_bhea_council_members_1"] = array (
  'name' => 'accounts_bhea_council_members_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_council_members_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Members',
  'bean_name' => 'Bhea_Council_Members',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bhea_council_members_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-04 09:39:28
$dictionary["Account"]["fields"]["accounts_bhea_finance_performance_1"] = array (
  'name' => 'accounts_bhea_finance_performance_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_finance_performance_1',
  'source' => 'non-db',
  'module' => 'Bhea_finance_performance',
  'bean_name' => 'Bhea_finance_performance',
  'vname' => 'LBL_ACCOUNTS_BHEA_FINANCE_PERFORMANCE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bhea_finance_performance_1accounts_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 20:03:44
$dictionary['Account']['fields']['quit_reason_c']['labelValue']='Quit Reason';
$dictionary['Account']['fields']['quit_reason_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['quit_reason_c']['enforced']='';
$dictionary['Account']['fields']['quit_reason_c']['dependency']='not(equal($request_quit_c,""))';

 

 // created: 2013-12-04 14:53:34
$dictionary['Account']['fields']['account_type']['default']='';
$dictionary['Account']['fields']['account_type']['len']=100;
$dictionary['Account']['fields']['account_type']['options']='account_type_list';
$dictionary['Account']['fields']['account_type']['comments']='The Company is of this type';
$dictionary['Account']['fields']['account_type']['merge_filter']='disabled';
$dictionary['Account']['fields']['account_type']['calculated']=false;
$dictionary['Account']['fields']['account_type']['dependency']=false;

 

 // created: 2013-12-03 09:16:38
$dictionary['Account']['fields']['no_of_emp_c']['labelValue']='No of Employees';
$dictionary['Account']['fields']['no_of_emp_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['no_of_emp_c']['enforced']='';
$dictionary['Account']['fields']['no_of_emp_c']['dependency']='';

 