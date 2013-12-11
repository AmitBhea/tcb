<?php
$module_name = 'Bhea_Invoices';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'invoice_no',
                'label' => 'LBL_INVOICE_NO',
              ),
              1 => 
              array (
                'name' => 'invoice_date',
                'label' => 'LBL_INVOICE_DATE',
              ),
              2 => 
              array (
                'name' => 'invoice_amount',
                'label' => 'LBL_INVOICE_AMOUNT',
              ),
              3 => 
              array (
                'name' => 'payment_terms',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_TERMS',
              ),
              4 => 
              array (
                'name' => 'received_amount',
                'label' => 'LBL_RECEIVED_AMOUNT',
              ),
              5 => 
              array (
                'name' => 'received_date',
                'label' => 'LBL_RECEIVED_DATE',
              ),
              6 => 
              array (
                'name' => 'bhea_orders_bhea_invoices_1_name',
                'label' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_ORDERS_TITLE',
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
              8 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'studio' => 'visible',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'comment' => 'Date record created',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
              ),
              10 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              11 => 
              array (
                'name' => 'date_modified',
                'comment' => 'Date record last modified',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_MODIFIED',
              ),
              12 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
              ),
              13 => 'assigned_user_name',
              14 => 'team_name',
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
          'tabDefs' => 
          array (
            'LBL_RECORD_BODY' => 
            array (
              'newTab' => false,
              'panelDefault' => 'expanded',
            ),
          ),
        ),
      ),
    ),
  ),
);
