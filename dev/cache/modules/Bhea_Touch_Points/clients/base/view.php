<?php
$clientCache['Bhea_Touch_Points']['base']['view'] = array (
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
              'name' => 'type',
              'studio' => 'visible',
              'label' => 'LBL_TYPE',
            ),
            1 => 
            array (
              'name' => 'month',
              'studio' => 'visible',
              'label' => 'LBL_MONTH',
            ),
            2 => 
            array (
              'name' => 'year',
              'studio' => 'visible',
              'label' => 'LBL_YEAR',
            ),
            3 => 
            array (
              'name' => 'registered_emp',
              'label' => 'LBL_REGISTERED_EMP',
            ),
            4 => 
            array (
              'name' => 'times_accessed',
              'label' => 'LBL_TIMES_ACCESSED',
            ),
            5 => 
            array (
              'name' => 'avg_reg_c',
              'label' => 'LBL_AVG_REG',
            ),
            6 => 
            array (
              'name' => 'no_of_accesses',
              'label' => 'LBL_NO_OF_ACCESSES',
            ),
            7 => 
            array (
              'name' => 'no_of_download',
              'label' => 'LBL_NO_OF_DOWNLOAD',
            ),
            8 => 
            array (
              'name' => 'bis_requests',
              'label' => 'LBL_BIS_REQUESTS',
            ),
            9 => 
            array (
              'name' => 'councils',
              'label' => 'LBL_COUNCILS',
            ),
            10 => 
            array (
              'name' => 'conferences',
              'label' => 'LBL_CONFERENCES',
            ),
            11 => 
            array (
              'name' => 'webcasts',
              'label' => 'LBL_WEBCASTS',
            ),
            12 => 
            array (
              'name' => 'experiential_learing',
              'label' => 'LBL_EXPERIENTIAL_LEARING',
              'span' => 6,
            ),
            13 => 
            array (
              'span' => 6,
            ),
            14 => 'assigned_user_name',
            15 => 'team_name',
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
              'width' => '10%',
            ),
            1 => 
            array (
              'name' => 'type',
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
              'width' => '10%',
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
  '_hash' => 'b0a7d81127e2b3bae4b47675b2190dd2',
);

