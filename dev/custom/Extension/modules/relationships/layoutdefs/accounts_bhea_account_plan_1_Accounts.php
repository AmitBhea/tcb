<?php
 // created: 2013-12-04 09:27:54
$layout_defs["Accounts"]["subpanel_setup"]['accounts_bhea_account_plan_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Account_Plan',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_BHEA_ACCOUNT_PLAN_1_FROM_BHEA_ACCOUNT_PLAN_TITLE',
  'get_subpanel_data' => 'accounts_bhea_account_plan_1',
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
