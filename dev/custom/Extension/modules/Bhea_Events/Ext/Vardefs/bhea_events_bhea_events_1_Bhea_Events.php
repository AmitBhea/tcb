<?php
// created: 2013-12-03 12:23:01
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_events_1"] = array (
  'name' => 'bhea_events_bhea_events_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
  'id_name' => 'bhea_events_bhea_events_1bhea_events_idb',
  'link-type' => 'many',
  'side' => 'left',
);
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_events_1_right"] = array (
  'name' => 'bhea_events_bhea_events_1_right',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_R_TITLE',
  'id_name' => 'bhea_events_bhea_events_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_events_1_name"] = array (
  'name' => 'bhea_events_bhea_events_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_events_1bhea_events_ida',
  'link' => 'bhea_events_bhea_events_1_right',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_events_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_events_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_R_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_events_1bhea_events_ida',
  'link' => 'bhea_events_bhea_events_1_right',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
