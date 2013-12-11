<?php
$popupMeta = array (
    'moduleMain' => 'Bhea_Council_Members',
    'varName' => 'Bhea_Council_Members',
    'orderBy' => 'bhea_council_members.first_name, bhea_council_members.last_name',
    'whereClauses' => array (
  'first_name' => 'bhea_council_members.first_name',
  'last_name' => 'bhea_council_members.last_name',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'link' => true,
    'orderBy' => 'last_name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
    'name' => 'name',
  ),
  'ACCOUNT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
    'id' => 'BHEA_COUNC1877ERSHIPS_IDB',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCILS_TITLE',
    'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1BHEA_COUNCILS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'MEMBERSHIP_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MEMBERSHIP_STATUS',
    'width' => '10%',
  ),
  'MEMBER_TILL' => 
  array (
    'type' => 'date',
    'label' => 'LBL_MEMBER_TILL',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_WORK' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => true,
    'name' => 'phone_work',
  ),
  'EMAIL1' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
    'name' => 'email1',
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
),
);
