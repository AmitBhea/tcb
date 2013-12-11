<?php
$clientCache['Bhea_Events']['base']['view'] = array (
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
              'name' => 'status',
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'seminar_status',
              'label' => 'LBL_SEMINAR_STATUS ',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'conference_status',
              'label' => 'LBL_CONFERENCE_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'conference_fees',
              'label' => 'LBL_CONFERENCE_FEES ',
              'enabled' => true,
              'currency_format' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'no_of_sessions',
              'label' => 'LBL_NO_OF_SESSIONS ',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'begin_date',
              'label' => 'LBL_BEGIN_DATE ',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE ',
              'enabled' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'bhea_events_bhea_events_1_name',
              'label' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
              'enabled' => true,
              'id' => 'BHEA_EVENTS_BHEA_EVENTS_1BHEA_EVENTS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'bhea_events_bhea_hotels_1_name',
              'label' => 'LBL_BHEA_EVENTS_BHEA_HOTELS_1_FROM_BHEA_HOTELS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_EVENTS_BHEA_HOTELS_1BHEA_HOTELS_IDB',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            10 => 
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'attendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'multiply($conference_fees,$expected_no_of_attendees)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyattendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'statusDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'event_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'status',
                'keys' => 'cond(equal(indexOf($event_type, getDD("event_type_list")), -1), enum(""), valueAt(indexOf($event_type,getDD("event_type_list")),enum(enum("Tentative","Date_Confirmed","Ready_for_Registration","Early_Bird_Time","Registration_Closure","In_Session","Completed","Cancelled","Postponed"),enum(""),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"event_status_3"',
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
  'subpanel-for-bhea_hotels' => 
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
              'name' => 'event_type',
              'label' => 'LBL_EVENT_TYPE ',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'status',
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'begin_date',
              'label' => 'LBL_BEGIN_DATE ',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE ',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'attendee_fee_target',
              'label' => 'LBL_ATTENDEE_FEE_TARGET ',
              'enabled' => true,
              'currency_format' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'knowledge_area',
              'label' => 'LBL_KNOWLEDGE_AREA',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'cancellation_fee_date',
              'label' => 'LBL_CANCELLATION_FEE_DATE ',
              'enabled' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'bhea_hotels_bhea_events_1_name',
              'label' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_HOTELS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_HOTELS_BHEA_EVENTS_1BHEA_HOTELS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            9 => 
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'attendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'multiply($conference_fees,$expected_no_of_attendees)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyattendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'statusDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'event_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'status',
                'keys' => 'cond(equal(indexOf($event_type, getDD("event_type_list")), -1), enum(""), valueAt(indexOf($event_type,getDD("event_type_list")),enum(enum("Tentative","Date_Confirmed","Ready_for_Registration","Early_Bird_Time","Registration_Closure","In_Session","Completed","Cancelled","Postponed"),enum(""),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"event_status_3"',
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
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
              'span' => 12,
            ),
            1 => 
            array (
              'name' => 'begin_date',
              'label' => 'LBL_BEGIN_DATE ',
            ),
            2 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE ',
            ),
            3 => 
            array (
              'name' => 'event_type',
              'studio' => 'visible',
              'label' => 'LBL_EVENT_TYPE ',
            ),
            4 => 
            array (
              'name' => 'status',
              'studio' => 'visible',
              'label' => 'LBL_STATUS',
            ),
            5 => 
            array (
              'name' => 'no_of_sessions',
              'label' => 'LBL_NO_OF_SESSIONS ',
            ),
            6 => 
            array (
              'name' => 'knowledge_area',
              'studio' => 'visible',
              'label' => 'LBL_KNOWLEDGE_AREA',
            ),
            7 => 
            array (
              'name' => 'budgeted_cost',
              'label' => 'LBL_BUDGETED_COST ',
            ),
            8 => 
            array (
              'name' => 'sponsorship_target',
              'label' => 'LBL_SPONSORSHIP_TARGET ',
            ),
            9 => 
            array (
              'name' => 'expected_no_of_attendees',
              'label' => 'LBL_EXPECTED_NO_OF_ATTENDEES ',
            ),
            10 => 
            array (
              'name' => 'conference_fees',
              'label' => 'LBL_CONFERENCE_FEES ',
            ),
            11 => 
            array (
              'name' => 'attendee_fee_target',
              'label' => 'LBL_ATTENDEE_FEE_TARGET ',
            ),
            12 => 
            array (
              'name' => 'bhea_events_bhea_events_1_name',
              'label' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
            ),
            13 => 
            array (
              'name' => 'early_bird_date',
              'label' => 'LBL_EARLY_BIRD_DATE ',
            ),
            14 => 
            array (
              'name' => 'early_bird_discount',
              'label' => 'LBL_EARLY_BIRD_DISCOUNT',
            ),
            15 => 
            array (
              'name' => 'cancellation_fee_date',
              'label' => 'LBL_CANCELLATION_FEE_DATE ',
            ),
            16 => 
            array (
              'name' => 'cancellation_fee',
              'label' => 'LBL_CANCELLATION_FEE',
            ),
            17 => 
            array (
              'name' => 'member_non_profit_fee',
              'label' => 'LBL_MEMBER_NON_PROFIT_FEE',
            ),
            18 => 
            array (
              'name' => 'non_profit_fee',
              'label' => 'LBL_NON_PROFIT_FEE',
            ),
            19 => 
            array (
              'name' => 'member_academic_fee',
              'label' => 'LBL_MEMBER_ACADEMIC_FEE ',
            ),
            20 => 
            array (
              'name' => 'academic_fee',
              'label' => 'LBL_ACADEMIC_FEE',
            ),
            21 => 
            array (
              'name' => 'member_government_fee',
              'label' => 'LBL_MEMBER_GOVERNMENT_FEE',
            ),
            22 => 
            array (
              'name' => 'government_fee',
              'label' => 'LBL_GOVERNMENT_FEE',
            ),
            23 => 
            array (
              'name' => 'corp_member_fee',
              'label' => 'LBL_CORP_MEMBER_FEE',
            ),
            24 => 
            array (
              'name' => 'bhea_hotels_bhea_events_1_name',
              'label' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_HOTELS_TITLE',
            ),
            25 => 
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
            26 => 
            array (
              'name' => 'created_by_name',
              'readonly' => true,
              'label' => 'LBL_CREATED',
            ),
            27 => 
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
            28 => 
            array (
              'name' => 'modified_by_name',
              'readonly' => true,
              'label' => 'LBL_MODIFIED_NAME',
            ),
            29 => 'assigned_user_name',
            30 => 'team_name',
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'attendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'multiply($conference_fees,$expected_no_of_attendees)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyattendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'statusDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'event_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'status',
                'keys' => 'cond(equal(indexOf($event_type, getDD("event_type_list")), -1), enum(""), valueAt(indexOf($event_type,getDD("event_type_list")),enum(enum("Tentative","Date_Confirmed","Ready_for_Registration","Early_Bird_Time","Registration_Closure","In_Session","Completed","Cancelled","Postponed"),enum(""),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"event_status_3"',
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
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => true,
              'enabled' => true,
              'link' => true,
              'width' => '10%',
            ),
            1 => 
            array (
              'name' => 'event_type',
              'label' => 'LBL_EVENT_TYPE ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'status',
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'description',
              'label' => 'LBL_DESCRIPTION',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'begin_date',
              'label' => 'LBL_BEGIN_DATE ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'end_date',
              'label' => 'LBL_END_DATE ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'no_of_sessions',
              'label' => 'LBL_NO_OF_SESSIONS ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'attendee_fee_target',
              'label' => 'LBL_ATTENDEE_FEE_TARGET ',
              'enabled' => true,
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'bhea_events_bhea_hotels_1_name',
              'label' => 'LBL_BHEA_EVENTS_BHEA_HOTELS_1_FROM_BHEA_HOTELS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_EVENTS_BHEA_HOTELS_1BHEA_HOTELS_IDB',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'bhea_events_bhea_events_1_name',
              'label' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
              'enabled' => true,
              'id' => 'BHEA_EVENTS_BHEA_EVENTS_1BHEA_EVENTS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            10 => 
            array (
              'name' => 'no_of_tracks',
              'label' => 'LBL_NO_OF_TRACKS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            11 => 
            array (
              'name' => 'conference_fees',
              'label' => 'LBL_CONFERENCE_FEES ',
              'enabled' => true,
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
            ),
            12 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => '9%',
              'default' => true,
              'enabled' => true,
            ),
            13 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9%',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            14 => 
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'attendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'multiply($conference_fees,$expected_no_of_attendees)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyattendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'statusDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'event_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'status',
                'keys' => 'cond(equal(indexOf($event_type, getDD("event_type_list")), -1), enum(""), valueAt(indexOf($event_type,getDD("event_type_list")),enum(enum("Tentative","Date_Confirmed","Ready_for_Registration","Early_Bird_Time","Registration_Closure","In_Session","Completed","Cancelled","Postponed"),enum(""),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"event_status_3"',
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'attendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'multiply($conference_fees,$expected_no_of_attendees)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyattendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'statusDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'event_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'status',
                'keys' => 'cond(equal(indexOf($event_type, getDD("event_type_list")), -1), enum(""), valueAt(indexOf($event_type,getDD("event_type_list")),enum(enum("Tentative","Date_Confirmed","Ready_for_Registration","Early_Bird_Time","Registration_Closure","In_Session","Completed","Cancelled","Postponed"),enum(""),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"event_status_3"',
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
          'name' => 'attendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'multiply($conference_fees,$expected_no_of_attendees)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyattendee_fee_target',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'conference_fees',
            1 => 'expected_no_of_attendees',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'attendee_fee_target',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'statusDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'event_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'status',
                'keys' => 'cond(equal(indexOf($event_type, getDD("event_type_list")), -1), enum(""), valueAt(indexOf($event_type,getDD("event_type_list")),enum(enum("Tentative","Date_Confirmed","Ready_for_Registration","Early_Bird_Time","Registration_Closure","In_Session","Completed","Cancelled","Postponed"),enum(""),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"event_status_3"',
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
  '_hash' => '9d23914d438d021440eb5ad77ef4918b',
);
