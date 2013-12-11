<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-03 09:50:29
$dictionary['Contact']['fields']['job_function_c']['labelValue']='Job Function';
$dictionary['Contact']['fields']['job_function_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Contact']['fields']['job_function_c']['enforced']='';
$dictionary['Contact']['fields']['job_function_c']['dependency']='';

 

 // created: 2013-12-03 10:01:10
$dictionary['Contact']['fields']['last_activity_c']['labelValue']='Last Activity Date';
$dictionary['Contact']['fields']['last_activity_c']['enforced']='';
$dictionary['Contact']['fields']['last_activity_c']['dependency']='';

 

 // created: 2013-12-03 10:00:38
$dictionary['Contact']['fields']['first_activity_c']['labelValue']='First Activity Date';
$dictionary['Contact']['fields']['first_activity_c']['enforced']='';
$dictionary['Contact']['fields']['first_activity_c']['dependency']='';

 

 // created: 2013-12-03 09:57:57
$dictionary['Contact']['fields']['language_c']['labelValue']='Language';
$dictionary['Contact']['fields']['language_c']['dependency']='';
$dictionary['Contact']['fields']['language_c']['visibility_grid']='';

 

// created: 2013-12-03 14:54:02
$dictionary["Contact"]["fields"]["leads_contacts_1"] = array (
  'name' => 'leads_contacts_1',
  'type' => 'link',
  'relationship' => 'leads_contacts_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_LEADS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'leads_contacts_1leads_ida',
  'link-type' => 'one',
);
$dictionary["Contact"]["fields"]["leads_contacts_1_name"] = array (
  'name' => 'leads_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CONTACTS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_contacts_1leads_ida',
  'link' => 'leads_contacts_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Contact"]["fields"]["leads_contacts_1leads_ida"] = array (
  'name' => 'leads_contacts_1leads_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CONTACTS_1_FROM_LBL_LEADS_CONTACTS_1_FROM_CONTACTS_TITLE_TITLE',
  'id_name' => 'leads_contacts_1leads_ida',
  'link' => 'leads_contacts_1',
  'table' => 'leads',
  'module' => 'Leads',
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


 // created: 2013-12-03 10:04:19
$dictionary['Contact']['fields']['username_c']['labelValue']='Username';
$dictionary['Contact']['fields']['username_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Contact']['fields']['username_c']['enforced']='';
$dictionary['Contact']['fields']['username_c']['dependency']='';

 

// created: 2013-12-04 09:46:31
$dictionary["Contact"]["fields"]["contacts_bhea_sessions_1"] = array (
  'name' => 'contacts_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'contacts_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_CONTACTS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'contacts_bhea_sessions_1bhea_sessions_idb',
);


 // created: 2013-12-03 09:44:48
$dictionary['Contact']['fields']['familiar_name_c']['labelValue']='Familiar Name';
$dictionary['Contact']['fields']['familiar_name_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Contact']['fields']['familiar_name_c']['enforced']='';
$dictionary['Contact']['fields']['familiar_name_c']['dependency']='';

 

 // created: 2013-12-03 09:46:15
$dictionary['Contact']['fields']['contacts_id_c']['labelValue']='Contact ID';
$dictionary['Contact']['fields']['contacts_id_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Contact']['fields']['contacts_id_c']['enforced']='';
$dictionary['Contact']['fields']['contacts_id_c']['dependency']='';

 

 // created: 2013-12-03 10:03:54
$dictionary['Contact']['fields']['sync_to_outlook_c']['labelValue']='Sync to Outlook';
$dictionary['Contact']['fields']['sync_to_outlook_c']['enforced']='';
$dictionary['Contact']['fields']['sync_to_outlook_c']['dependency']='';

 

 // created: 2013-12-03 10:06:35
$dictionary['Contact']['fields']['password_c']['labelValue']='Password';
$dictionary['Contact']['fields']['password_c']['enforced']='';
$dictionary['Contact']['fields']['password_c']['dependency']='';

 

 // created: 2013-12-03 09:59:07
$dictionary['Contact']['fields']['comm_preference_c']['labelValue']='Communication Preference';
$dictionary['Contact']['fields']['comm_preference_c']['dependency']='';
$dictionary['Contact']['fields']['comm_preference_c']['visibility_grid']='';

 

 // created: 2013-12-03 09:49:57
$dictionary['Contact']['fields']['status_c']['labelValue']='Status';
$dictionary['Contact']['fields']['status_c']['dependency']='';
$dictionary['Contact']['fields']['status_c']['visibility_grid']='';

 

 // created: 2013-12-03 18:11:25
$dictionary['Contact']['fields']['type_c']['labelValue']='Role';
$dictionary['Contact']['fields']['type_c']['dependency']='';
$dictionary['Contact']['fields']['type_c']['visibility_grid']='';

 