<?php
$popupMeta = array (
    'moduleMain' => 'Bhea_Council_Memberships',
    'varName' => 'Bhea_Council_Memberships',
    'orderBy' => 'bhea_council_memberships.name',
    'whereClauses' => array (
  'name' => 'bhea_council_memberships.name',
),
    'searchInputs' => array (
  0 => 'bhea_council_memberships_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1OPPORTUNITIES_IDB',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'bhea_council_memberships_opportunities_1_name',
  ),
  'EXPIRY_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPIRY_DATE ',
    'width' => '10%',
    'default' => true,
    'name' => 'expiry_date',
  ),
  'BHEA_MEMBER_LEVELS_BHEA_COUNCIL_MEMBERSHIPS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
    'id' => 'BHEA_MEMBEB00C_LEVELS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'MEMBERSHIP_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MEMBERSHIP_TYPE ',
    'width' => '10%',
    'name' => 'membership_type',
  ),
  'MEMBERSHIP_FEE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MEMBERSHIP_FEE ',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'membership_fee',
  ),
  'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
    'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1BHEA_COUNCILS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'bhea_councils_bhea_council_memberships_1_name',
  ),
  'BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
    'id' => 'BHEA_COUNC8EE0MEMBERS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'bhea_council_members_bhea_council_memberships_1_name',
  ),
  'PAYMENT_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAYMENT_STATUS',
    'width' => '10%',
    'name' => 'payment_status',
  ),
  'PAYMENT_ID' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'payment_id',
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
    'name' => 'date_modified',
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
    'name' => 'date_entered',
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
