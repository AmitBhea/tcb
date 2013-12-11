<?php
 // created: 2013-12-04 10:16:05
$layout_defs["Bhea_Sessions"]["subpanel_setup"]['bhea_sessions_bhea_speakers_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Speakers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_SESSIONS_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE',
  'get_subpanel_data' => 'bhea_sessions_bhea_speakers_1',
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
