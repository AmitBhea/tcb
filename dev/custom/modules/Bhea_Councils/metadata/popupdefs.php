<?php
$popupMeta = array (
    'moduleMain' => 'Bhea_Councils',
    'varName' => 'Bhea_Councils',
    'orderBy' => 'bhea_councils.name',
    'whereClauses' => array (
  'name' => 'bhea_councils.name',
),
    'searchInputs' => array (
  0 => 'bhea_councils_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
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
  'START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE ',
    'width' => '10%',
    'default' => true,
  ),
  'END_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE ',
    'width' => '10%',
    'default' => true,
  ),
  'GROUP_CATEGORY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GROUP_CATEGORY ',
    'width' => '10%',
  ),
  'CUR_MEMBER_CNT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CUR_MEMBER_CNT',
    'width' => '10%',
    'default' => true,
  ),
  'MEMBERSHIP_FEE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MEMBERSHIP_FEE ',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'COUNCIL_URL' => 
  array (
    'type' => 'url',
    'label' => 'LBL_COUNCIL_URL',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
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
