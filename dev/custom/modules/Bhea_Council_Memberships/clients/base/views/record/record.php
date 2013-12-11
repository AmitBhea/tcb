<?php
$module_name = 'Bhea_Council_Memberships';
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
                'name' => 'membership_fee',
                'label' => 'LBL_MEMBERSHIP_FEE ',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'start_date',
                'label' => 'LBL_START_DATE ',
              ),
              2 => 
              array (
                'name' => 'expiry_date',
                'label' => 'LBL_EXPIRY_DATE ',
              ),
              3 => 
              array (
                'name' => 'membership_type',
                'studio' => 'visible',
                'label' => 'LBL_MEMBERSHIP_TYPE ',
              ),
              4 => 
              array (
                'name' => 'membership_period',
                'label' => 'LBL_MEMBERSHIP_PERIOD ',
              ),
              5 => 
              array (
                'name' => 'bhea_council_members_bhea_council_memberships_1_name',
                'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
              ),
              6 => 
              array (
                'name' => 'accounts_bhea_council_memberships_1_name',
                'label' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
              ),
              7 => 
              array (
                'name' => 'bhea_councils_bhea_council_memberships_1_name',
                'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
              ),
              8 => 
              array (
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS ',
              ),
              9 => 
              array (
                'name' => 'payment_status',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_STATUS',
              ),
              10 => 
              array (
                'name' => 'payment_details',
                'label' => 'LBL_PAYMENT_DETAILS',
              ),
              11 => 
              array (
                'name' => 'payment_mode',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_MODE',
              ),
              12 => 
              array (
                'name' => 'payment_id',
                'label' => 'LBL_PAYMENT_ID',
              ),
              13 => 
              array (
                'name' => 'payment_date',
                'label' => 'LBL_PAYMENT_DATE',
              ),
              14 => 
              array (
                'name' => 'amount_paid_c',
                'label' => 'LBL_AMOUNT_PAID',
              ),
              15 => 
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
              16 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
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
              18 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
              ),
              19 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'studio' => 'visible',
                'label' => 'LBL_DESCRIPTION',
                'span' => 6,
              ),
              20 => 
              array (
                'span' => 6,
              ),
              21 => 'assigned_user_name',
              22 => 'team_name',
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
