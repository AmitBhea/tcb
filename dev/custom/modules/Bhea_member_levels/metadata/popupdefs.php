<?php
$popupMeta = array (
    'moduleMain' => 'Bhea_member_levels',
    'varName' => 'Bhea_member_levels',
    'orderBy' => 'bhea_member_levels.name',
    'whereClauses' => array (
  'name' => 'bhea_member_levels.name',
  'mem_type' => 'bhea_member_levels.mem_type',
  'price_type' => 'bhea_member_levels.price_type',
  'cat_type' => 'bhea_member_levels.cat_type',
  'assigned_user_id' => 'bhea_member_levels.assigned_user_id',
  'favorites_only' => 'bhea_member_levels.favorites_only',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'mem_type',
  5 => 'price_type',
  6 => 'cat_type',
  7 => 'assigned_user_id',
  8 => 'favorites_only',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'mem_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MEM_TYPE',
    'width' => '10%',
    'name' => 'mem_type',
  ),
  'price_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PRICE_TYPE',
    'width' => '10%',
    'name' => 'price_type',
  ),
  'cat_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CAT_TYPE',
    'width' => '10%',
    'name' => 'cat_type',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
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
  'MEM_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MEM_TYPE',
    'width' => '10%',
  ),
  'MEM_PERIOD' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MEM_PERIOD',
    'width' => '10%',
  ),
  'COST' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_COST',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'END_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'CAT_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CAT_TYPE',
    'width' => '10%',
  ),
  'PRICE_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRICE_TYPE',
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
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
