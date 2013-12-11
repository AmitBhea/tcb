<?php
$clientCache['InboundEmail']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=InboundEmail&action=EditView',
        'label' => 'LNK_LIST_CREATE_NEW_GROUP',
        'acl_action' => 'create',
        'acl_module' => 'InboundEmail',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#bwc/index.php?module=InboundEmail&action=EditView&mailbox_type=bounce',
        'label' => 'LNK_LIST_CREATE_NEW_BOUNCE',
        'acl_action' => 'create',
        'acl_module' => 'InboundEmail',
        'icon' => 'icon-plus',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=InboundEmail&action=index',
        'label' => 'LNK_LIST_MAILBOXES',
        'acl_action' => 'list',
        'acl_module' => 'InboundEmail',
        'icon' => 'icon-reorder',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Schedulers&action=index',
        'label' => 'LNK_LIST_SCHEDULER',
        'acl_action' => 'admin',
        'acl_module' => 'Schedulers',
      ),
    ),
  ),
  '_hash' => '3d40125134118fff01186e5aadf1fe3c',
);

