<?php
// created: 2013-12-04 15:04:36
$viewdefs['Documents']['base']['view']['subpanel-for-contacts'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'document_name',
          'label' => 'LBL_LIST_DOCUMENT_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'filename',
          'label' => 'LBL_LIST_FILENAME',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'category_id',
          'label' => 'LBL_LIST_CATEGORY',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'exp_date',
          'label' => 'LBL_DOC_EXP_DATE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'selected_revision_name',
          'label' => 'LBL_SELECTED_REVISION_NAME',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'selected_revision_filename',
          'label' => 'LBL_SELECTED_REVISION_FILENAME',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'doc_type',
          'label' => 'LBL_LIST_DOC_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'status_id',
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'active_date',
          'label' => 'LBL_LIST_ACTIVE_DATE',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'date_modified',
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);