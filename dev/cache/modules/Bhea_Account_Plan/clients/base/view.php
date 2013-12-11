<?php
$clientCache['Bhea_Account_Plan']['base']['view'] = array (
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
              'name' => 'plan_id',
              'label' => 'LBL_PLAN_ID',
            ),
            1 => 
            array (
              'name' => 'time_unit',
              'studio' => 'visible',
              'label' => 'LBL_TIME_UNIT',
            ),
            2 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE',
            ),
            3 => 
            array (
              'name' => 'no_of_activities',
              'label' => 'LBL_NO_OF_ACTIVITIES',
            ),
            4 => 
            array (
              'name' => 'activity_no',
              'label' => 'LBL_ACTIVITY_NO',
            ),
            5 => 
            array (
              'name' => 'activity_name',
              'label' => 'LBL_ACTIVITY_NAME',
            ),
            6 => 
            array (
              'name' => 'activity_desc',
              'studio' => 'visible',
              'label' => 'LBL_ACTIVITY_DESC',
              'span' => 12,
            ),
            7 => 
            array (
              'name' => 'scheduled_date',
              'label' => 'LBL_SCHEDULED_DATE',
            ),
            8 => 
            array (
              'name' => 'finish_date',
              'label' => 'LBL_FINISH_DATE',
            ),
            9 => 
            array (
              'name' => 'expect_outcome',
              'studio' => 'visible',
              'label' => 'LBL_EXPECT_OUTCOME',
            ),
            10 => 
            array (
              'name' => 'achieve_outcome',
              'studio' => 'visible',
              'label' => 'LBL_ACHIEVE_OUTCOME',
            ),
            11 => 'assigned_user_name',
            12 => 'team_name',
            13 => 
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
              'name' => 'accounts_bhea_account_plan_1_name',
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
              'name' => 'plan_id',
              'label' => 'LBL_PLAN_ID',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'activity_name',
              'label' => 'LBL_ACTIVITY_NAME',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'activity_no',
              'label' => 'LBL_ACTIVITY_NO',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'no_of_activities',
              'label' => 'LBL_NO_OF_ACTIVITIES',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'readonly' => true,
              'width' => '10%',
              'default' => true,
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
  '_hash' => '88274c94d4b767b4a4b892dcfa780abe',
);

