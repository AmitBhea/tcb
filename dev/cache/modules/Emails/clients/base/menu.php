<?php
$clientCache['Emails']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Emails',
        'label' => 'LNK_VIEW_MY_INBOX',
        'acl_action' => 'edit',
        'acl_module' => 'Emails',
        'icon' => 'icon-plus',
      ),
      1 => 
      array (
        'route' => '#bwc/index.php?module=EmailTemplates&action=EditView&return_module=EmailTemplates&return_action=DetailView',
        'label' => 'LNK_NEW_EMAIL_TEMPLATE',
        'acl_action' => 'create',
        'acl_module' => 'EmailTemplates',
        'icon' => 'icon-plus',
      ),
      2 => 
      array (
        'route' => '#EmailTemplates',
        'label' => 'LNK_EMAIL_TEMPLATE_LIST',
        'acl_action' => 'list',
        'acl_module' => 'EmailTemplates',
        'icon' => 'icon-reorder',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'compose',
      'label' => 'LBL_COMPOSE_MODULE_NAME_SINGULAR',
      'visible' => true,
    ),
  ),
  '_hash' => '59f8290e44a16c03afa7ec0cdfc914b0',
);

