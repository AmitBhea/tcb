<?php
 // created: 2013-12-04 09:39:28
$layout_defs["Accounts"]["subpanel_setup"]['accounts_bhea_finance_performance_1'] = array (
  'order' => 100,
  'module' => 'Bhea_finance_performance',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_BHEA_FINANCE_PERFORMANCE_1_FROM_BHEA_FINANCE_PERFORMANCE_TITLE',
  'get_subpanel_data' => 'accounts_bhea_finance_performance_1',
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