<?php
$clientCache['Bhea_Invoices']['base']['layout'] = array (
  'detail' => 
  array (
    'meta' => 
    array (
      'type' => 'detail',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'subnavdetail',
        ),
        1 => 
        array (
          'view' => 'detail',
        ),
      ),
    ),
  ),
  'edit' => 
  array (
    'meta' => 
    array (
      'type' => 'edit',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'subnavedit',
        ),
        1 => 
        array (
          'view' => 'edit',
        ),
      ),
    ),
  ),
  'subpanels' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE',
          'context' => 
          array (
            'link' => 'bhea_invoices_bhea_payments_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-bhea_invoices',
        ),
      ),
    ),
  ),
  '_hash' => '04d873f7da813b58abf36dec633b25cd',
);

