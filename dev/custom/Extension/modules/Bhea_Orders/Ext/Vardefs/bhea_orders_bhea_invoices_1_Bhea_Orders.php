<?php
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
