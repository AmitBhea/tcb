<?php
// created: 2013-12-03 10:15:29
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_council_memberships_opportunities_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1OPPORTUNITIES_IDB',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Opportunities',
    'target_record_key' => 'bhea_council_memberships_opportunities_1opportunities_idb',
  ),
  'bhea_councils_bhea_council_memberships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
    'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1BHEA_COUNCILS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Councils',
    'target_record_key' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
  ),
  'bhea_council_members_bhea_council_memberships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
    'id' => 'BHEA_COUNC8EE0MEMBERS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Council_Members',
    'target_record_key' => 'bhea_counc8ee0members_ida',
  ),
  'members' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_MEMBERS',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contact_id_c',
  ),
  'membership_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_MEMBERSHIP_TYPE ',
    'width' => '10%',
  ),
  'membership_period' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MEMBERSHIP_PERIOD ',
    'width' => '10%',
    'default' => true,
  ),
  'membership_fee' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_MEMBERSHIP_FEE ',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'payment_status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PAYMENT_STATUS',
    'width' => '10%',
  ),
  'payment_id' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PAYMENT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);