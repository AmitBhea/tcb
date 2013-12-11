<?php
$module_name = 'Bhea_Hotels';
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
                'name' => 'type',
                'studio' => 'visible',
                'label' => 'LBL_TYPE',
              ),
              1 => 
              array (
                'name' => 'standard',
                'studio' => 'visible',
                'label' => 'LBL_STANDARD',
              ),
              2 => 
              array (
                'name' => 'website',
                'label' => 'LBL_WEBSITE',
              ),
              3 => 
              array (
                'name' => 'contact_person_name',
                'label' => 'LBL_CONTACT_PERSON_NAME',
              ),
              4 => 
              array (
                'name' => 'tcb_discount_rate',
                'label' => 'LBL_TCB_DISCOUNT_RATE',
              ),
              5 => 
              array (
                'name' => 'club_card',
                'label' => 'LBL_CLUB_CARD',
              ),
              6 => 
              array (
                'name' => 'mobile',
                'label' => 'LBL_MOBILE',
              ),
              7 => 
              array (
                'name' => 'phone',
                'label' => 'LBL_PHONE',
              ),
              8 => 
              array (
                'name' => 'fax_number',
                'label' => 'LBL_FAX_NUMBER',
              ),
              9 => 
              array (
                'name' => 'email_id',
                'label' => 'LBL_EMAIL_ID',
              ),
              10 => 
              array (
                'name' => 'address',
                'label' => 'LBL_ADDRESS',
              ),
              11 => 
              array (
                'name' => 'address_city',
                'label' => 'LBL_ADDRESS_CITY',
              ),
              12 => 
              array (
                'name' => 'address_state',
                'label' => 'LBL_ADDRESS_STATE',
              ),
              13 => 
              array (
                'name' => 'address_country',
                'label' => 'LBL_ADDRESS_COUNTRY',
              ),
              14 => 
              array (
                'name' => 'address_postalcode',
                'label' => 'LBL_ADDRESS_POSTALCODE',
                'span' => 6,
              ),
              15 => 
              array (
                'span' => 6,
              ),
              16 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
              ),
              17 => 
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
              18 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              19 => 
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
              20 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
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