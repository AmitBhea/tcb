<?php
// created: 2013-12-04 09:54:49
$dictionary["Bhea_Events"]["fields"]["bhea_hotels_bhea_events_1"] = array (
  'name' => 'bhea_hotels_bhea_events_1',
  'type' => 'link',
  'relationship' => 'bhea_hotels_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Hotels',
  'bean_name' => 'Bhea_Hotels',
  'side' => 'right',
  'vname' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Events"]["fields"]["bhea_hotels_bhea_events_1_name"] = array (
  'name' => 'bhea_hotels_bhea_events_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_HOTELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
  'link' => 'bhea_hotels_bhea_events_1',
  'table' => 'bhea_hotels',
  'module' => 'Bhea_Hotels',
  'rname' => 'name',
);
$dictionary["Bhea_Events"]["fields"]["bhea_hotels_bhea_events_1bhea_hotels_ida"] = array (
  'name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE_TITLE',
  'id_name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
  'link' => 'bhea_hotels_bhea_events_1',
  'table' => 'bhea_hotels',
  'module' => 'Bhea_Hotels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
