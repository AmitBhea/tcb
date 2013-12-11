<?php
// created: 2013-12-03 10:22:20
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_hotels_1"] = array (
  'name' => 'bhea_events_bhea_hotels_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_hotels_1',
  'source' => 'non-db',
  'module' => 'Bhea_Hotels',
  'bean_name' => 'Bhea_Hotels',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_HOTELS_1_FROM_BHEA_HOTELS_TITLE',
  'id_name' => 'bhea_events_bhea_hotels_1bhea_hotels_idb',
);
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_hotels_1_name"] = array (
  'name' => 'bhea_events_bhea_hotels_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_HOTELS_1_FROM_BHEA_HOTELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_hotels_1bhea_hotels_idb',
  'link' => 'bhea_events_bhea_hotels_1',
  'table' => 'bhea_hotels',
  'module' => 'Bhea_Hotels',
  'rname' => 'name',
);
$dictionary["Bhea_Events"]["fields"]["bhea_events_bhea_hotels_1bhea_hotels_idb"] = array (
  'name' => 'bhea_events_bhea_hotels_1bhea_hotels_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_HOTELS_1_FROM_LBL_BHEA_EVENTS_BHEA_HOTELS_1_FROM_BHEA_HOTELS_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_hotels_1bhea_hotels_idb',
  'link' => 'bhea_events_bhea_hotels_1',
  'table' => 'bhea_hotels',
  'module' => 'Bhea_Hotels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
