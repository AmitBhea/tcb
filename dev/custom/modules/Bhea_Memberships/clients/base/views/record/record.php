<?php
$module_name = 'Bhea_Memberships';
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
                'name' => 'bhea_member_levels_bhea_memberships_1_name',
                'label' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
              ),
              1 => 
              array (
                'name' => 'start_date',
                'label' => 'LBL_START_DATE',
              ),
              2 => 
              array (
                'name' => 'expiry_date',
                'label' => 'LBL_EXPIRY_DATE',
              ),
              3 => 
              array (
                'name' => 'mem_type',
                'studio' => 'visible',
                'label' => 'LBL_MEM_TYPE',
              ),
              4 => 
              array (
                'name' => 'mem_period',
                'label' => 'LBL_MEM_PERIOD',
              ),
              5 => 
              array (
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
              ),
              6 => 
              array (
                'name' => 'mem_fee',
                'label' => 'LBL_MEM_FEE',
              ),
              7 => 
              array (
                'name' => 'discount_c',
                'label' => 'LBL_DISCOUNT',
              ),
              8 => 
              array (
                'name' => 'final_mem_fee_c',
                'label' => 'LBL_FINAL_MEM_FEE',
              ),
              9 => 
              array (
                'name' => 'payment_id',
                'label' => 'LBL_PAYMENT_ID',
              ),
              10 => 
              array (
                'name' => 'payment_date',
                'label' => 'LBL_PAYMENT_DATE',
              ),
              11 => 
              array (
                'name' => 'payment_mode',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_MODE',
              ),
              12 => 
              array (
                'name' => 'payment_details',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_DETAILS',
              ),
              13 => 
              array (
                'name' => 'payment_status',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_STATUS',
              ),
              14 => 
              array (
                'name' => 'accounts_bhea_memberships_1_name',
                'label' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
              ),
              15 => 
              array (
                'name' => 'lost_reason',
                'studio' => 'visible',
                'label' => 'LBL_LOST_REASON',
              ),
              16 => 
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
              17 => 
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
              18 => 'assigned_user_name',
              19 => 'team_name',
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