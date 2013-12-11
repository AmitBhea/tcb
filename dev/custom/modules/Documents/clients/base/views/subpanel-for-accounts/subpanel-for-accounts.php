<?php
// created: 2013-12-03 20:16:01
$viewdefs['Documents']['base']['view']['subpanel-for-accounts'] = array (
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
          'name' => 'subcategory_id',
          'label' => 'LBL_SF_SUBCATEGORY',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'related_doc_name',
          'label' => 'LBL_DET_RELATED_DOCUMENT',
          'enabled' => true,
          'id' => 'RELATED_DOC_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'latest_revision_name',
          'label' => 'LBL_LASTEST_REVISION_NAME',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'selected_revision_filename',
          'label' => 'LBL_SELECTED_REVISION_FILENAME',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'selected_revision_id',
          'label' => 'LBL_SELECTED_REVISION_ID',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'doc_type',
          'label' => 'LBL_LIST_DOC_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'status_id',
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'active_date',
          'label' => 'LBL_LIST_ACTIVE_DATE',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);