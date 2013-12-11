<?php
$module_name = 'bhea_Sponsorship_Types';
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
                'name' => 'sponsorship_fee',
                'label' => 'LBL_SPONSORSHIP_FEE',
              ),
              1 => 
              array (
                'name' => 'members_sponsorship_fee',
                'label' => 'LBL_MEMBERS_SPONSORSHIP_FEE ',
              ),
              2 => 
              array (
                'name' => 'mailers',
                'label' => 'LBL_MAILERS',
              ),
              3 => 
              array (
                'name' => 'main_backdrop',
                'label' => 'LBL_MAIN_BACKDROP',
              ),
              4 => 
              array (
                'name' => 'side_panels',
                'label' => 'LBL_SIDE_PANELS',
              ),
              5 => 
              array (
                'name' => 'website',
                'label' => 'LBL_WEBSITE ',
              ),
              6 => 
              array (
                'name' => 'speaker_facility',
                'label' => 'LBL_SPEAKER_FACILITY',
              ),
              7 => 
              array (
                'name' => 'complimentary_passes',
                'label' => 'LBL_COMPLIMENTARY_PASSES',
              ),
              8 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              9 => 
              array (
                'name' => 'other_information',
                'studio' => 'visible',
                'label' => 'LBL_OTHER_INFORMATION',
              ),
              10 => 
              array (
                'name' => 'bhea_events_bhea_sponsorship_types_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_EVENTS_TITLE',
              ),
              11 => 
              array (
                'name' => 'bhea_sessions_bhea_sponsorship_types_1_name',
                'label' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SESSIONS_TITLE',
              ),
              12 => 
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
              13 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              14 => 
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
              15 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
              ),
              16 => 'assigned_user_name',
              17 => 'team_name',
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
