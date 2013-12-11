<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-03 11:19:05
$dictionary["Bhea_Councils"]["fields"]["opportunities_bhea_councils_1"] = array (
  'name' => 'opportunities_bhea_councils_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_councils_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_COUNCILS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_bhea_councils_1opportunities_ida',
);


// created: 2013-12-03 09:12:58
$dictionary["Bhea_Councils"]["fields"]["bhea_councils_bhea_council_members_1"] = array (
  'name' => 'bhea_councils_bhea_council_members_1',
  'type' => 'link',
  'relationship' => 'bhea_councils_bhea_council_members_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Members',
  'bean_name' => 'Bhea_Council_Members',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCILS_TITLE',
  'id_name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 10:46:12
$dictionary['Bhea_Councils']['fields']['group_category']['default']='';
$dictionary['Bhea_Councils']['fields']['group_category']['options']='group_category_list';

 

// created: 2013-12-03 09:19:32
$dictionary["Bhea_Councils"]["fields"]["bhea_councils_bhea_council_memberships_1"] = array (
  'name' => 'bhea_councils_bhea_council_memberships_1',
  'type' => 'link',
  'relationship' => 'bhea_councils_bhea_council_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Memberships',
  'bean_name' => 'Bhea_Council_Memberships',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
  'id_name' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-04 16:32:17
$dictionary["Bhea_Councils"]["fields"]["bhea_member_levels_bhea_councils_1"] = array (
  'name' => 'bhea_member_levels_bhea_councils_1',
  'type' => 'link',
  'relationship' => 'bhea_member_levels_bhea_councils_1',
  'source' => 'non-db',
  'module' => 'Bhea_member_levels',
  'bean_name' => 'Bhea_member_levels',
  'side' => 'right',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCILS_1_FROM_BHEA_COUNCILS_TITLE',
  'id_name' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Councils"]["fields"]["bhea_member_levels_bhea_councils_1_name"] = array (
  'name' => 'bhea_member_levels_bhea_councils_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCILS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_bhea_councils_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'name',
);
$dictionary["Bhea_Councils"]["fields"]["bhea_member_levels_bhea_councils_1bhea_member_levels_ida"] = array (
  'name' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCILS_1_FROM_LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCILS_1_FROM_BHEA_COUNCILS_TITLE_TITLE',
  'id_name' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_bhea_councils_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 10:46:28
$dictionary['Bhea_Councils']['fields']['council_directory']['default']='';
$dictionary['Bhea_Councils']['fields']['council_directory']['options']='council_directory_list';

 

 // created: 2013-12-04 16:21:51
$dictionary['Bhea_Councils']['fields']['end_date']['dependency']='';

 