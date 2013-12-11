<?php
 // created: 2013-12-03 12:00:39
$layout_defs["Bhea_Events"]["subpanel_setup"]['bhea_events_campaigns_1'] = array (
  'order' => 100,
  'module' => 'Campaigns',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_EVENTS_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
  'get_subpanel_data' => 'bhea_events_campaigns_1',
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
