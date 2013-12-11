<?php
$clientCache['Meetings']['base']['view'] = array (
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
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'date_start',
              'label' => 'LBL_LIST_DATE',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'date_end',
              'label' => 'LBL_DATE_END',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
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
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'type',
            1 => 'status',
            2 => 'date_start',
            3 => 'location',
            4 => 'date_end',
            5 => 'parent_name',
            6 => 
            array (
              'name' => 'fieldset_duration',
              'type' => 'fieldset',
              'label' => 'Duration',
              'fields' => 
              array (
                0 => 'duration_hours',
                1 => 'duration_minutes',
              ),
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'columns' => 2,
          'hide' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'description',
              'span' => 8,
            ),
            1 => 
            array (
              'type' => 'html',
              'default_value' => '',
            ),
            2 => 'teams',
            3 => 'password',
            4 => 'join_url',
            5 => 
            array (
              'name' => 'date_modified_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_MODIFIED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_modified',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'modified_by_name',
                ),
              ),
            ),
            6 => 'reminder_checked',
            7 => 
            array (
              'name' => 'date_entered_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_ENTERED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_entered',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'created_by_name',
                ),
              ),
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
          array (
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
              'name' => 'set_complete',
              'width' => '1%',
              'label' => 'LBL_LIST_CLOSE',
              'link' => true,
              'sortable' => false,
              'default' => true,
              'enabled' => true,
              'related_fields' => 
              array (
                0 => 'status',
              ),
            ),
            1 => 
            array (
              'name' => 'join_meeting',
              'label' => 'LBL_LIST_JOIN_MEETING',
              'link' => true,
              'sortable' => false,
              'default' => false,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_SUBJECT',
              'link' => true,
              'default' => true,
              'enabled' => true,
            ),
            3 => 
            array (
              'name' => 'contact_name',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'id' => 'CONTACT_ID',
              'default' => true,
              'enabled' => true,
            ),
            4 => 
            array (
              'name' => 'parent_name',
              'label' => 'LBL_LIST_RELATED_TO',
              'id' => 'PARENT_ID',
              'link' => true,
              'default' => true,
              'enabled' => true,
              'sortable' => false,
            ),
            5 => 
            array (
              'name' => 'date_start',
              'label' => 'LBL_LIST_DATE',
              'link' => false,
              'default' => true,
              'enabled' => true,
            ),
            6 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_LIST_TEAM',
              'default' => false,
              'enabled' => true,
            ),
            7 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'id' => 'ASSIGNED_USER_ID',
              'default' => true,
              'enabled' => true,
            ),
            8 => 
            array (
              'name' => 'direction',
              'type' => 'enum',
              'label' => 'LBL_LIST_DIRECTION',
              'default' => false,
              'enabled' => true,
            ),
            9 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'link' => false,
              'default' => false,
              'enabled' => true,
            ),
            10 => 
            array (
              'name' => 'date_entered',
              'width' => '10%',
              'label' => 'LBL_DATE_ENTERED',
              'default' => true,
              'enabled' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
          array (
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'password_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'password',
                'value' => 'isInEnum($type,getDD("extapi_meeting_password"))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'displayed_url_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'type',
            1 => 'type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'displayed_url',
                'value' => 'and(isAlpha($type),not(equal($type,"Sugar")))',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => 'c95aef8f3a8540e447fd371a0f138820',
);

