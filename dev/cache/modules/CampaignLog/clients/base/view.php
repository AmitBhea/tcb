<?php
$clientCache['CampaignLog']['base']['view'] = array (
  'subpanel-for-accounts' => 
  array (
    'meta' => 
    array (
      'favorite' => false,
      'selection' => 
      array (
      ),
      'rowactions' => 
      array (
      ),
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
              'label' => 'LBL_LIST_CAMPAIGN_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'campaign_name1',
            ),
            1 => 
            array (
              'name' => 'target_id',
              'label' => 'LBL_TARGET_ID',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'related_id',
              'label' => 'LBL_RELATED_ID',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'campaign_name',
              'label' => '',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'marketing_name',
              'label' => '',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'recipient_name',
              'label' => '',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'label' => 'LBL_ACTIVITY_TYPE',
              'enabled' => true,
              'default' => true,
              'name' => 'activity_type',
            ),
            7 => 
            array (
              'label' => 'LBL_ACTIVITY_DATE',
              'enabled' => true,
              'default' => true,
              'name' => 'activity_date',
            ),
            8 => 
            array (
              'label' => 'LBL_RELATED',
              'enabled' => true,
              'default' => true,
              'name' => 'related_name',
              'type' => 'parent',
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
              ),
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
    ),
  ),
  'subpanel-for-contacts' => 
  array (
    'meta' => 
    array (
      'favorite' => false,
      'selection' => 
      array (
      ),
      'rowactions' => 
      array (
      ),
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
              'label' => 'LBL_LIST_CAMPAIGN_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'campaign_name1',
            ),
            1 => 
            array (
              'name' => 'marketing_name',
              'label' => '',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'campaign_objective',
              'label' => '',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'campaign_content',
              'label' => '',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'target_id',
              'label' => 'LBL_TARGET_ID',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'label' => 'LBL_ACTIVITY_TYPE',
              'enabled' => true,
              'default' => true,
              'name' => 'activity_type',
            ),
            6 => 
            array (
              'label' => 'LBL_ACTIVITY_DATE',
              'enabled' => true,
              'default' => true,
              'name' => 'activity_date',
            ),
            7 => 
            array (
              'label' => 'LBL_RELATED',
              'enabled' => true,
              'default' => true,
              'name' => 'related_name',
              'type' => 'parent',
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
              ),
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
    ),
  ),
  'subpanel-for-leads' => 
  array (
    'meta' => 
    array (
      'favorite' => false,
      'selection' => 
      array (
      ),
      'rowactions' => 
      array (
      ),
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
              'label' => 'LBL_LIST_CAMPAIGN_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'campaign_name1',
            ),
            1 => 
            array (
              'name' => 'target_id',
              'label' => 'LBL_TARGET_ID',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'target_type',
              'label' => 'LBL_TARGET_TYPE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'campaign_name',
              'label' => '',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'recipient_name',
              'label' => '',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'label' => 'LBL_ACTIVITY_TYPE',
              'enabled' => true,
              'default' => true,
              'name' => 'activity_type',
            ),
            6 => 
            array (
              'label' => 'LBL_ACTIVITY_DATE',
              'enabled' => true,
              'default' => true,
              'name' => 'activity_date',
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
      'favorite' => false,
      'selection' => 
      array (
      ),
      'rowactions' => 
      array (
      ),
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
              'label' => 'LBL_LIST_CAMPAIGN_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'campaign_name1',
            ),
            1 => 
            array (
              'label' => 'LBL_ACTIVITY_TYPE',
              'enabled' => true,
              'default' => true,
              'name' => 'activity_type',
            ),
            2 => 
            array (
              'label' => 'LBL_ACTIVITY_DATE',
              'enabled' => true,
              'default' => true,
              'name' => 'activity_date',
            ),
            3 => 
            array (
              'label' => 'LBL_RELATED',
              'enabled' => true,
              'default' => true,
              'name' => 'related_name',
              'type' => 'parent',
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'panel-top' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'css_class' => 'btn-invisible',
          'icon' => 'icon-chevron-up',
        ),
        1 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'panel_dropdown',
          'css_class' => 'pull-right',
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'sticky-rowaction',
              'icon' => 'icon-plus',
              'name' => 'create_button',
              'label' => ' ',
              'acl_action' => 'create',
              'css_class' => 'disabled',
            ),
            1 => 
            array (
              'type' => 'sticky-rowaction',
              'name' => 'select_button',
              'label' => 'LBL_ASSOC_RELATED_RECORD',
              'icon' => 'icon-pencil',
              'css_class' => 'disabled',
            ),
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
  '_hash' => '2b00888a15c1c28d1eaf52a29b9a025e',
);

