<?php
 // created: 2013-12-04 09:42:14
$layout_defs["Accounts"]["subpanel_setup"]['accounts_bhea_council_members_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Council_Members',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'get_subpanel_data' => 'accounts_bhea_council_members_1',
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
