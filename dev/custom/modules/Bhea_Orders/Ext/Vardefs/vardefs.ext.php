<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-03 11:14:31
$dictionary["Bhea_Orders"]["fields"]["bhea_orders_bhea_invoices_1"] = array (
  'name' => 'bhea_orders_bhea_invoices_1',
  'type' => 'link',
  'relationship' => 'bhea_orders_bhea_invoices_1',
  'source' => 'non-db',
  'module' => 'Bhea_Invoices',
  'bean_name' => 'Bhea_Invoices',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE',
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_orders_bhea_invoices_1_name"] = array (
  'name' => 'bhea_orders_bhea_invoices_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE',
  'save' => true,
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
  'link' => 'bhea_orders_bhea_invoices_1',
  'table' => 'bhea_invoices',
  'module' => 'Bhea_Invoices',
  'rname' => 'name',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_orders_bhea_invoices_1bhea_invoices_idb"] = array (
  'name' => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE_TITLE',
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
  'link' => 'bhea_orders_bhea_invoices_1',
  'table' => 'bhea_invoices',
  'module' => 'Bhea_Invoices',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-04 09:28:35
$dictionary["Bhea_Orders"]["fields"]["accounts_bhea_orders_1"] = array (
  'name' => 'accounts_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'accounts_bhea_orders_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Orders"]["fields"]["accounts_bhea_orders_1_name"] = array (
  'name' => 'accounts_bhea_orders_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bhea_orders_1accounts_ida',
  'link' => 'accounts_bhea_orders_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bhea_Orders"]["fields"]["accounts_bhea_orders_1accounts_ida"] = array (
  'name' => 'accounts_bhea_orders_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE_TITLE',
  'id_name' => 'accounts_bhea_orders_1accounts_ida',
  'link' => 'accounts_bhea_orders_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
