<?php
 // created: 2013-12-03 09:28:56
$layout_defs["Accounts"]["subpanel_setup"]['accounts_bhea_memberships_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Memberships',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
  'get_subpanel_data' => 'accounts_bhea_memberships_1',
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
