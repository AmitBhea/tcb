<?php
// created: 2013-12-03 12:01:47
$dictionary["Lead"]["fields"]["bhea_events_leads_1"] = array (
  'name' => 'bhea_events_leads_1',
  'type' => 'link',
  'relationship' => 'bhea_events_leads_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_LEADS_1_FROM_LEADS_TITLE',
  'id_name' => 'bhea_events_leads_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Lead"]["fields"]["bhea_events_leads_1_name"] = array (
  'name' => 'bhea_events_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_LEADS_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_leads_1bhea_events_ida',
  'link' => 'bhea_events_leads_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["bhea_events_leads_1bhea_events_ida"] = array (
  'name' => 'bhea_events_leads_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_LEADS_1_FROM_LBL_BHEA_EVENTS_LEADS_1_FROM_LEADS_TITLE_TITLE',
  'id_name' => 'bhea_events_leads_1bhea_events_ida',
  'link' => 'bhea_events_leads_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
