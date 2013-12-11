<?php
$popupMeta = array (
    'moduleMain' => 'Bhea_Memberships',
    'varName' => 'Bhea_Memberships',
    'orderBy' => 'bhea_memberships.name',
    'whereClauses' => array (
  'name' => 'bhea_memberships.name',
  'mem_type' => 'bhea_memberships.mem_type',
  'assigned_user_id' => 'bhea_memberships.assigned_user_id',
  'favorites_only' => 'bhea_memberships.favorites_only',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'mem_type',
  5 => 'assigned_user_id',
  6 => 'favorites_only',
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
    'width' => '20%',
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
  'MEM_LEVEL' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MEM_LEVEL',
    'width' => '10%',
    'default' => true,
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
