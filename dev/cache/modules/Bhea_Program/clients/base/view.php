<?php
$clientCache['Bhea_Program']['base']['view'] = array (
  'record' => 
  array (
    'meta' => 
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
              'name' => 'prog_id',
              'label' => 'LBL_PROG_ID',
            ),
            1 => 
            array (
              'name' => 'type',
              'studio' => 'visible',
              'label' => 'LBL_TYPE',
            ),
            2 => 
            array (
              'name' => 'no_of_days',
              'label' => 'LBL_NO_OF_DAYS',
            ),
            3 => 
            array (
              'name' => 'no_candidates',
              'label' => 'LBL_NO_CANDIDATES',
            ),
            4 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE',
            ),
            5 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE',
            ),
            6 => 
            array (
              'name' => 'mem_price',
              'label' => 'LBL_MEM_PRICE',
            ),
            7 => 
            array (
              'name' => 'non_mem_price',
              'label' => 'LBL_NON_MEM_PRICE',
            ),
            8 => 
            array (
              'name' => 'location',
              'label' => 'LBL_LOCATION',
              'span' => 6,
            ),
            9 => 
            array (
              'span' => 6,
            ),
            10 => 
            array (
              'name' => 'location_city',
              'label' => 'LBL_LOCATION_CITY',
            ),
            11 => 
            array (
              'name' => 'location_postalcode',
              'label' => 'LBL_LOCATION_POSTALCODE',
            ),
            12 => 
            array (
              'name' => 'location_state',
              'label' => 'LBL_LOCATION_STATE',
              'span' => 6,
            ),
            13 => 
            array (
              'span' => 6,
            ),
            14 => 
            array (
              'name' => 'location_country',
              'label' => 'LBL_LOCATION_COUNTRY',
              'span' => 6,
            ),
            15 => 
            array (
              'span' => 6,
            ),
            16 => 
            array (
              'name' => 'group_discount',
              'label' => 'LBL_GROUP_DISCOUNT',
            ),
            17 => 
            array (
              'name' => 'day1_agenda',
              'label' => 'LBL_DAY1_AGENDA',
            ),
            18 => 
            array (
              'name' => 'day2_agenda',
              'label' => 'LBL_DAY2_AGENDA',
            ),
            19 => 
            array (
              'name' => 'day3_agenda',
              'label' => 'LBL_DAY3_AGENDA',
            ),
            20 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
              'span' => 12,
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
  'subpanel-list' => 
  array (
    'meta' => 
    array (
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
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
          ),
        ),
      ),
      'orderBy' => 
      array (
        'field' => 'date_modified',
        'direction' => 'desc',
      ),
    ),
  ),
  'list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => 9,
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => 9,
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            3 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
            ),
          ),
        ),
      ),
      'orderBy' => 
      array (
        'field' => 'date_modified',
        'direction' => 'desc',
      ),
    ),
  ),
  'massupdate' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'Update',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
        1 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-invisible cancel_button',
          'icon' => 'icon-remove',
          'primary' => false,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => 'a66a67da9fc59bd4c1cb60f772c83703',
);

