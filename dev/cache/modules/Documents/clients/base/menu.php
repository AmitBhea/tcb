<?php
$clientCache['Documents']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=Documents&action=editview',
        'label' => 'LNK_NEW_DOCUMENT',
        'acl_action' => 'create',
        'acl_module' => 'Documents',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#Documents',
        'label' => 'LNK_DOCUMENT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Documents',
        'icon' => 'icon-reorder',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_DOCUMENT',
      'visible' => true,
      'related' => 
      array (
        0 => 
        array (
          'module' => 'Accounts',
          'link' => 'documents',
        ),
        1 => 
        array (
          'module' => 'Contacts',
          'link' => 'documents',
        ),
        2 => 
        array (
          'module' => 'Opportunities',
          'link' => 'documents',
        ),
        3 => 
        array (
          'module' => 'RevenueLineItems',
          'link' => 'documents',
        ),
      ),
    ),
  ),
  '_hash' => '9d594a886baaa72e130c5a7ce77bd1c5',
);

