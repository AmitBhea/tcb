<?php
 // created: 2013-12-03 09:23:02
$layout_defs["Bhea_Council_Memberships"]["subpanel_setup"]['bhea_council_memberships_bhea_member_levels_1'] = array (
  'order' => 100,
  'module' => 'Bhea_member_levels',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_MEMBER_LEVELS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'get_subpanel_data' => 'bhea_council_memberships_bhea_member_levels_1',
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
