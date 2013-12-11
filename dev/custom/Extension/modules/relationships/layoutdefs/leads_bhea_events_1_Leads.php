<?php
 // created: 2013-12-03 15:33:08
$layout_defs["Leads"]["subpanel_setup"]['leads_bhea_events_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Events',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE',
  'get_subpanel_data' => 'leads_bhea_events_1',
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
