<?php
$clientCache['Bhea_Sponsorship']['base']['view'] = array (
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
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'name' => 'value',
              'label' => 'LBL_VALUE',
              'enabled' => true,
              'currency_format' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'status',
              'label' => 'LBL_STATUS ',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'sponsorship_type',
              'label' => 'LBL_SPONSORSHIP_TYPE ',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'sponsorship_tenure_starts',
              'label' => 'LBL_SPONSORSHIP_TENURE_STARTS',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'sponsorship_tenure_ends',
              'label' => 'LBL_SPONSORSHIP_TENURE_ENDS',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'bhea_events_bhea_sponsorship_1_name',
              'label' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_EVENTS_BHEA_SPONSORSHIP_1BHEA_EVENTS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'bhea_sessions_bhea_sponsorship_1_name',
              'label' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SESSIONS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_SESSIONS_BHEA_SPONSORSHIP_1BHEA_SESSIONS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            8 => 
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
      'type' => 'subpanel-list',
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
            0 => 
            array (
              'name' => 'sponsorship_type',
              'studio' => 'visible',
              'label' => 'LBL_SPONSORSHIP_TYPE ',
            ),
            1 => 
            array (
              'name' => 'value',
              'label' => 'LBL_VALUE',
            ),
            2 => 
            array (
              'name' => 'sponsorship_tenure_starts',
              'label' => 'LBL_SPONSORSHIP_TENURE_STARTS',
            ),
            3 => 
            array (
              'name' => 'sponsorship_tenure_ends',
              'label' => 'LBL_SPONSORSHIP_TENURE_ENDS',
            ),
            4 => 
            array (
              'name' => 'status',
              'studio' => 'visible',
              'label' => 'LBL_STATUS ',
            ),
            5 => 
            array (
              'name' => 'bhea_events_bhea_sponsorship_1_name',
              'label' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
            ),
            6 => 
            array (
              'name' => 'bhea_sponsor_bhea_sponsorship_1_name',
              'label' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSOR_TITLE',
            ),
            7 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
            8 => 
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
            9 => 
            array (
              'name' => 'created_by_name',
              'readonly' => true,
              'label' => 'LBL_CREATED',
            ),
            10 => 
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
            11 => 
            array (
              'name' => 'modified_by_name',
              'readonly' => true,
              'label' => 'LBL_MODIFIED_NAME',
            ),
            12 => 'assigned_user_name',
            13 => 'team_name',
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
              'name' => 'sponsorship_type',
              'label' => 'LBL_SPONSORSHIP_TYPE ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'bhea_sponsor_bhea_sponsorship_1_name',
              'label' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSOR_TITLE',
              'enabled' => true,
              'id' => 'BHEA_SPONSOR_BHEA_SPONSORSHIP_1BHEA_SPONSOR_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'sponsorship_tenure_starts',
              'label' => 'LBL_SPONSORSHIP_TENURE_STARTS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'sponsorship_tenure_ends',
              'label' => 'LBL_SPONSORSHIP_TENURE_ENDS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'value',
              'label' => 'LBL_VALUE',
              'enabled' => true,
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'status',
              'label' => 'LBL_STATUS ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'bhea_events_bhea_sponsorship_1_name',
              'label' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_EVENTS_BHEA_SPONSORSHIP_1BHEA_EVENTS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'bhea_sessions_bhea_sponsorship_1_name',
              'label' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SESSIONS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_SESSIONS_BHEA_SPONSORSHIP_1BHEA_SESSIONS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
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
            10 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9%',
              'default' => false,
              'enabled' => true,
              'link' => true,
            ),
            11 => 
            array (
              'name' => 'description',
              'label' => 'LBL_DESCRIPTION',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => false,
            ),
            12 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => '9%',
              'default' => false,
              'enabled' => true,
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
  '_hash' => 'bf0f0b564d75027eaa847860978ff1a4',
);

