<?php
$module_name = 'Bhea_finance_performance';
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
                'name' => 'accounts_bhea_finance_performance_1_name',
                'label' => 'LBL_ACCOUNTS_BHEA_FINANCE_PERFORMANCE_1_FROM_ACCOUNTS_TITLE',
              ),
              1 => 
              array (
                'name' => 'leads_bhea_finance_performance_1_name',
                'label' => 'LBL_LEADS_BHEA_FINANCE_PERFORMANCE_1_FROM_LEADS_TITLE',
              ),
              2 => 
              array (
                'name' => 'no_of_emp',
                'label' => 'LBL_NO_OF_EMP',
              ),
              3 => 
              array (
                'name' => 'profit',
                'label' => 'LBL_PROFIT',
              ),
              4 => 
              array (
                'name' => 'revenue',
                'label' => 'LBL_REVENUE',
              ),
              5 => 
              array (
                'name' => 'source_finance',
                'label' => 'LBL_SOURCE_FINANCE',
              ),
              6 => 
              array (
                'name' => 'start_month',
                'studio' => 'visible',
                'label' => 'LBL_START_MONTH',
              ),
              7 => 
              array (
                'name' => 'year_c',
                'studio' => 'visible',
                'label' => 'LBL_YEAR',
              ),
              8 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
              10 => 'assigned_user_name',
              11 => 'team_name',
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
                'name' => 'date_modified',
                'comment' => 'Date record last modified',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_MODIFIED',
              ),
              14 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              15 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
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
