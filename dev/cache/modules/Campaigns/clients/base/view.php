<?php
$clientCache['Campaigns']['base']['view'] = array (
  'subpanel-for-bhea_events' => 
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
              'name' => 'name',
              'label' => 'LBL_LIST_CAMPAIGN_NAME',
              'enabled' => true,
              'default' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'expected_revenue',
              'label' => 'LBL_CAMPAIGN_EXPECTED_REVENUE',
              'enabled' => true,
              'currency_format' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'bhea_events_campaigns_1_name',
              'label' => 'LBL_BHEA_EVENTS_CAMPAIGNS_1_FROM_BHEA_EVENTS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_EVENTS_CAMPAIGNS_1BHEA_EVENTS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
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
              'name' => 'name',
              'label' => 'LBL_LIST_CAMPAIGN_NAME',
              'enabled' => true,
              'default' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
            ),
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
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'width' => 40,
              'link' => true,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'status',
              'width' => 10,
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'campaign_type',
              'width' => 10,
              'label' => 'LBL_LIST_TYPE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'end_date',
              'width' => 13,
              'label' => 'LBL_LIST_END_DATE',
              'default' => true,
              'enabled' => true,
            ),
            4 => 
            array (
              'name' => 'team_name',
              'width' => '15',
              'label' => 'LBL_LIST_TEAM',
              'default' => false,
              'enabled' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'module' => 'Users',
              'width' => 14,
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'sortable' => false,
              'default' => true,
              'enabled' => true,
            ),
            6 => 
            array (
              'name' => 'date_entered',
              'type' => 'datetime',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'width' => 13,
              'default' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-emailmarketing' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
          ),
        ),
      ),
    ),
  ),
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
            0 => 'assigned_user_name',
            1 => 'team_name',
          ),
        ),
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
  '_hash' => '468b5de8f7bea22a965de51fc918576b',
);

