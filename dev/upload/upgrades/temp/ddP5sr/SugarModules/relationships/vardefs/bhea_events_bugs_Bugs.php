<?php
// created: 2013-12-01 11:06:18
$dictionary["Bug"]["fields"]["bhea_events_bugs"] = array (
  'name' => 'bhea_events_bugs',
  'type' => 'link',
  'relationship' => 'bhea_events_bugs',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BUGS_FROM_BUGS_TITLE',
  'id_name' => 'bhea_events_bugsbhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bug"]["fields"]["bhea_events_bugs_name"] = array (
  'name' => 'bhea_events_bugs_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BUGS_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bugsbhea_events_ida',
  'link' => 'bhea_events_bugs',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["bhea_events_bugsbhea_events_ida"] = array (
  'name' => 'bhea_events_bugsbhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BUGS_FROM_LBL_BHEA_EVENTS_BUGS_FROM_BUGS_TITLE_TITLE',
  'id_name' => 'bhea_events_bugsbhea_events_ida',
  'link' => 'bhea_events_bugs',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
