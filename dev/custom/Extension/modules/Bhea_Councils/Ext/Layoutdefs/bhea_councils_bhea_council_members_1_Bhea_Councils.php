<?php
 // created: 2013-12-03 09:12:57
$layout_defs["Bhea_Councils"]["subpanel_setup"]['bhea_councils_bhea_council_members_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Council_Members',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'get_subpanel_data' => 'bhea_councils_bhea_council_members_1',
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
