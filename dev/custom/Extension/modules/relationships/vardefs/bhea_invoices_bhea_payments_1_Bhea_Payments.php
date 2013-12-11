<?php
// created: 2013-12-03 15:38:48
$dictionary["Bhea_Payments"]["fields"]["bhea_invoices_bhea_payments_1"] = array (
  'name' => 'bhea_invoices_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'bhea_invoices_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Bhea_Invoices',
  'bean_name' => 'Bhea_Invoices',
  'side' => 'right',
  'vname' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE',
  'id_name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_invoices_bhea_payments_1_name"] = array (
  'name' => 'bhea_invoices_bhea_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
  'save' => true,
  'id_name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  'link' => 'bhea_invoices_bhea_payments_1',
  'table' => 'bhea_invoices',
  'module' => 'Bhea_Invoices',
  'rname' => 'name',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_invoices_bhea_payments_1bhea_invoices_ida"] = array (
  'name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE_TITLE',
  'id_name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  'link' => 'bhea_invoices_bhea_payments_1',
  'table' => 'bhea_invoices',
  'module' => 'Bhea_Invoices',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
