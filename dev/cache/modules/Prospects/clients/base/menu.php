<?php
$clientCache['Prospects']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Prospects/create',
        'label' => 'LNK_NEW_PROSPECT',
        'acl_action' => 'create',
        'acl_module' => 'Prospects',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Prospects/vcard-import',
        'label' => 'LNK_IMPORT_VCARD',
        'acl_action' => 'create',
        'acl_module' => 'Prospects',
        'icon' => 'icon-plus',
      ),
      2 => 
      array (
        'route' => '#Prospects',
        'label' => 'LNK_PROSPECT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Prospects',
        'icon' => 'icon-reorder',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Prospects&return_module=Prospects&return_action=index',
        'label' => 'LNK_IMPORT_PROSPECTS',
        'acl_action' => 'import',
        'acl_module' => 'Prospects',
        'icon' => 'icon-upload',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_PROSPECT',
      'visible' => false,
    ),
  ),
  '_hash' => '4ec846601643f174e5544ac7e3ac419b',
);

