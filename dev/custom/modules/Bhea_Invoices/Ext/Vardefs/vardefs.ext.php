<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-03 11:14:31
$dictionary["Bhea_Invoices"]["fields"]["bhea_orders_bhea_invoices_1"] = array (
  'name' => 'bhea_orders_bhea_invoices_1',
  'type' => 'link',
  'relationship' => 'bhea_orders_bhea_invoices_1',
  'source' => 'non-db',
  'module' => 'Bhea_Orders',
  'bean_name' => 'Bhea_Orders',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
);
$dictionary["Bhea_Invoices"]["fields"]["bhea_orders_bhea_invoices_1_name"] = array (
  'name' => 'bhea_orders_bhea_invoices_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_ORDERS_TITLE',
  'save' => true,
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
  'link' => 'bhea_orders_bhea_invoices_1',
  'table' => 'bhea_orders',
  'module' => 'Bhea_Orders',
  'rname' => 'name',
);
$dictionary["Bhea_Invoices"]["fields"]["bhea_orders_bhea_invoices_1bhea_orders_ida"] = array (
  'name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_ORDERS_TITLE_TITLE',
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
  'link' => 'bhea_orders_bhea_invoices_1',
  'table' => 'bhea_orders',
  'module' => 'Bhea_Orders',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-03 15:38:48
$dictionary["Bhea_Invoices"]["fields"]["bhea_invoices_bhea_payments_1"] = array (
  'name' => 'bhea_invoices_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'bhea_invoices_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Bhea_Payments',
  'bean_name' => 'Bhea_Payments',
  'vname' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
  'id_name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  'link-type' => 'many',
  'side' => 'left',
);
