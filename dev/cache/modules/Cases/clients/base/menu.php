<?php
$clientCache['Cases']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Cases/create',
        'label' => 'LNK_NEW_CASE',
        'acl_action' => 'create',
        'acl_module' => 'Cases',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Cases',
        'label' => 'LNK_CASE_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Cases',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=cases&query=true&report_module=Cases',
        'label' => 'LNK_CASE_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Cases',
        'icon' => 'icon-bar-chart',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Cases&return_module=Cases&return_action=index',
        'label' => 'LNK_IMPORT_CASES',
        'acl_action' => 'import',
        'acl_module' => 'Cases',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_CASE',
      'visible' => false,
    ),
  ),
  '_hash' => 'dd90c626b79c6f7ddb94c57a4211d3bc',
);

