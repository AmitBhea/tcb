<?php
$clientCache['Accounts']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'label' => 'LNK_NEW_ACCOUNT',
        'acl_action' => 'create',
        'acl_module' => 'Accounts',
        'icon' => 'icon-plus',
        'route' => '#Accounts/create',
      ),
      1 => 
      array (
        'route' => '#Accounts',
        'label' => 'LNK_ACCOUNT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Accounts',
        'icon' => 'icon-reorder',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=Accounts&query=true&report_module=Accounts',
        'label' => 'LNK_ACCOUNT_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Accounts',
        'icon' => 'icon-bar-chart',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Accounts',
        'label' => 'LNK_IMPORT_ACCOUNTS',
        'acl_action' => 'import',
        'acl_module' => 'Accounts',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_ACCOUNT',
      'visible' => true,
    ),
  ),
  '_hash' => 'dabd42d4ae6d47882bc05e976ca0aa08',
);

