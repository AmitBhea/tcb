<?php
$popupMeta = array (
    'moduleMain' => 'Bhea_Program_Catalogue',
    'varName' => 'Bhea_Program_Catalogue',
    'orderBy' => 'bhea_program_catalogue.name',
    'whereClauses' => array (
  'name' => 'bhea_program_catalogue.name',
),
    'searchInputs' => array (
  0 => 'bhea_program_catalogue_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
