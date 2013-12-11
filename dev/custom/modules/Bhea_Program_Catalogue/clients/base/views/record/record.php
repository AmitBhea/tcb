<?php
$module_name = 'Bhea_Program_Catalogue';
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
                'name' => 'no_of_days',
                'label' => 'LBL_NO_OF_DAYS ',
              ),
              2 => 
              array (
                'name' => 'no_of_candidates',
                'label' => 'LBL_NO_OF_CANDIDATES ',
              ),
              3 => 
              array (
                'name' => 'group_discount',
                'label' => 'LBL_GROUP_DISCOUNT',
              ),
              4 => 
              array (
                'name' => 'member_price',
                'label' => 'LBL_MEMBER_PRICE ',
              ),
              5 => 
              array (
                'name' => 'non_member_price',
                'label' => 'LBL_NON_MEMBER_PRICE ',
              ),
              6 => 
              array (
                'name' => 'location',
                'label' => 'LBL_LOCATION',
                'span' => 6,
              ),
              7 => 
              array (
                'span' => 6,
              ),
              8 => 
              array (
                'name' => 'location_city',
                'label' => 'LBL_LOCATION_CITY',
              ),
              9 => 
              array (
                'name' => 'location_postalcode',
                'label' => 'LBL_LOCATION_POSTALCODE',
              ),
              10 => 
              array (
                'name' => 'location_state',
                'label' => 'LBL_LOCATION_STATE',
                'span' => 6,
              ),
              11 => 
              array (
                'span' => 6,
              ),
              12 => 
              array (
                'name' => 'location_country',
                'label' => 'LBL_LOCATION_COUNTRY',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
              14 => 
              array (
                'name' => 'day_1_agenda',
                'studio' => 'visible',
                'label' => 'LBL_DAY_1_AGENDA ',
              ),
              15 => 
              array (
                'name' => 'day_2_agenda',
                'studio' => 'visible',
                'label' => 'LBL_DAY_2_AGENDA',
              ),
              16 => 
              array (
                'name' => 'day_3_agenda',
                'studio' => 'visible',
                'label' => 'LBL_DAY_3_AGENDA',
                'span' => 6,
              ),
              17 => 
              array (
                'span' => 6,
              ),
              18 => 
              array (
                'name' => 'bhea_program_bhea_program_catalogue_1_name',
                'label' => 'LBL_BHEA_PROGRAM_BHEA_PROGRAM_CATALOGUE_1_FROM_BHEA_PROGRAM_TITLE',
              ),
              19 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              20 => 'assigned_user_name',
              21 => 'team_name',
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
