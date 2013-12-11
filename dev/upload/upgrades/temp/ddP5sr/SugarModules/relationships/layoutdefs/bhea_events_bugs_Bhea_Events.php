<?php
 // created: 2013-12-01 11:06:18
$layout_defs["Bhea_Events"]["subpanel_setup"]['bhea_events_bugs'] = array (
  'order' => 100,
  'module' => 'Bugs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_EVENTS_BUGS_FROM_BUGS_TITLE',
  'get_subpanel_data' => 'bhea_events_bugs',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
