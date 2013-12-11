<?php
$clientCache['Bhea_Councils']['base']['view'] = array (
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
              'name' => 'status',
              'studio' => 'visible',
              'label' => 'LBL_STATUS',
            ),
            1 => 
            array (
              'name' => 'knowledge_area',
              'studio' => 'visible',
              'label' => 'LBL_KNOWLEDGE_AREA ',
            ),
            2 => 
            array (
              'name' => 'plan_member_cnt',
              'label' => 'LBL_PLAN_MEMBER_CNT ',
            ),
            3 => 
            array (
              'name' => 'cur_member_cnt',
              'label' => 'LBL_CUR_MEMBER_CNT',
            ),
            4 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE ',
            ),
            5 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE ',
            ),
            6 => 
            array (
              'name' => 'membership_fee',
              'label' => 'LBL_MEMBERSHIP_FEE ',
            ),
            7 => 
            array (
              'name' => 'type',
              'studio' => 'visible',
              'label' => 'LBL_TYPE ',
            ),
            8 => 
            array (
              'name' => 'election_date',
              'label' => 'LBL_ELECTION_DATE',
            ),
            9 => 
            array (
              'name' => 'member_renewal_fee',
              'label' => 'LBL_MEMBER_RENEWAL_FEE ',
            ),
            10 => 
            array (
              'name' => 'meetings_per_year',
              'studio' => 'visible',
              'label' => 'LBL_MEETINGS_PER_YEAR ',
            ),
            11 => 
            array (
              'name' => 'group_category',
              'studio' => 'visible',
              'label' => 'LBL_GROUP_CATEGORY ',
            ),
            12 => 
            array (
              'name' => 'council_directory',
              'studio' => 'visible',
              'label' => 'LBL_COUNCIL_DIRECTORY ',
            ),
            13 => 
            array (
              'name' => 'council_sub_region',
              'label' => 'LBL_COUNCIL_SUB_REGION ',
            ),
            14 => 
            array (
              'name' => 'council_url',
              'label' => 'LBL_COUNCIL_URL',
            ),
            15 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
            16 => 'assigned_user_name',
            17 => 'team_name',
            18 => 
            array (
              'name' => 'bhea_member_levels_bhea_councils_1_name',
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
              'name' => 'start_date',
              'label' => 'LBL_START_DATE ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'group_category',
              'label' => 'LBL_GROUP_CATEGORY ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'cur_member_cnt',
              'label' => 'LBL_CUR_MEMBER_CNT',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'membership_fee',
              'label' => 'LBL_MEMBERSHIP_FEE ',
              'enabled' => true,
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'member_renewal_fee',
              'label' => 'LBL_MEMBER_RENEWAL_FEE ',
              'enabled' => true,
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'council_url',
              'label' => 'LBL_COUNCIL_URL',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9%',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            9 => 
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
  '_hash' => '58bd41a7ef65536ecd4f87f43a3c2238',
);

