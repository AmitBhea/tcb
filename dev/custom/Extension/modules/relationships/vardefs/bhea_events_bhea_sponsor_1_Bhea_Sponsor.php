<?php
// created: 2013-12-03 16:00:54
$dictionary["Bhea_Sponsor"]["fields"]["bhea_events_bhea_sponsor_1"] = array (
  'name' => 'bhea_events_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
  'id_name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sponsor"]["fields"]["bhea_events_bhea_sponsor_1_name"] = array (
  'name' => 'bhea_events_bhea_sponsor_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsor_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsor"]["fields"]["bhea_events_bhea_sponsor_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsor_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
