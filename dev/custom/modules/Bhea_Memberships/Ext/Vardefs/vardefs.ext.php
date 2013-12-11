<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-03 19:12:24
$dictionary['Bhea_Memberships']['fields']['final_mem_fee_c']['duplicate_merge_dom_value']=0;
$dictionary['Bhea_Memberships']['fields']['final_mem_fee_c']['labelValue']='Final Membership Fee';
$dictionary['Bhea_Memberships']['fields']['final_mem_fee_c']['calculated']='true';
$dictionary['Bhea_Memberships']['fields']['final_mem_fee_c']['formula']='subtract($mem_fee,$discount_c)';
$dictionary['Bhea_Memberships']['fields']['final_mem_fee_c']['enforced']='true';
$dictionary['Bhea_Memberships']['fields']['final_mem_fee_c']['dependency']='';

 

// created: 2013-12-03 12:10:50
$dictionary["Bhea_Memberships"]["fields"]["bhea_member_levels_bhea_memberships_1"] = array (
  'name' => 'bhea_member_levels_bhea_memberships_1',
  'type' => 'link',
  'relationship' => 'bhea_member_levels_bhea_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_member_levels',
  'bean_name' => 'Bhea_member_levels',
  'side' => 'right',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
  'id_name' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Memberships"]["fields"]["bhea_member_levels_bhea_memberships_1_name"] = array (
  'name' => 'bhea_member_levels_bhea_memberships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_bhea_memberships_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'name',
);
$dictionary["Bhea_Memberships"]["fields"]["bhea_member_levels_bhea_memberships_1bhea_member_levels_ida"] = array (
  'name' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBERSHIPS_TITLE_TITLE',
  'id_name' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_bhea_memberships_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-04 16:15:42
$dictionary["Bhea_Memberships"]["fields"]["bhea_memberships_bhea_payments_1"] = array (
  'name' => 'bhea_memberships_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'bhea_memberships_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Bhea_Payments',
  'bean_name' => 'Bhea_Payments',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
  'id_name' => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 19:10:31
$dictionary['Bhea_Memberships']['fields']['discount_c']['labelValue']='Discount';
$dictionary['Bhea_Memberships']['fields']['discount_c']['enforced']='';
$dictionary['Bhea_Memberships']['fields']['discount_c']['dependency']='';

 

 // created: 2013-12-05 13:06:28
$dictionary['Bhea_Memberships']['fields']['mem_type']['default']='';

 

// created: 2013-12-03 09:28:56
$dictionary["Bhea_Memberships"]["fields"]["accounts_bhea_memberships_1"] = array (
  'name' => 'accounts_bhea_memberships_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_memberships_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
  'id_name' => 'accounts_bhea_memberships_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Memberships"]["fields"]["accounts_bhea_memberships_1_name"] = array (
  'name' => 'accounts_bhea_memberships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bhea_memberships_1accounts_ida',
  'link' => 'accounts_bhea_memberships_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bhea_Memberships"]["fields"]["accounts_bhea_memberships_1accounts_ida"] = array (
  'name' => 'accounts_bhea_memberships_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBERSHIPS_TITLE_TITLE',
  'id_name' => 'accounts_bhea_memberships_1accounts_ida',
  'link' => 'accounts_bhea_memberships_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
