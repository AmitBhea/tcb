<?php
$popupMeta = array (
    'moduleMain' => 'Bhea_Account_Plan',
    'varName' => 'Bhea_Account_Plan',
    'orderBy' => 'bhea_account_plan.name',
    'whereClauses' => array (
  'name' => 'bhea_account_plan.name',
  'favorites_only' => 'bhea_account_plan.favorites_only',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'favorites_only',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'favorites_only' => 
  array (
    'name' => 'favorites_only',
    'label' => 'LBL_FAVORITES_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'PLAN_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PLAN_ID',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
),
);
