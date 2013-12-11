<?php
$module_name = 'Bhea_Payments';
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
                'name' => 'payment_mode',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_MODE',
              ),
              1 => 
              array (
                'name' => 'payment_status',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_STATUS',
              ),
              2 => 
              array (
                'name' => 'payment_date',
                'label' => 'LBL_PAYMENT_DATE',
              ),
              3 => 
              array (
                'name' => 'currency',
                'label' => 'LBL_CURRENCY',
              ),
              4 => 
              array (
                'name' => 'bhea_invoices_bhea_payments_1_name',
                'label' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'studio' => 'visible',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
              ),
              6 => 
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
              7 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              8 => 
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
              9 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
              ),
              10 => 'assigned_user_name',
              11 => 'team_name',
              12 => 
              array (
                'name' => 'bhea_memberships_bhea_payments_1_name',
                'label' => 'LBL_BHEA_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
              ),
              13 => 
              array (
                'name' => 'bhea_council_memberships_bhea_payments_1_name',
                'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
              ),
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
