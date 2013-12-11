<?php
$clientCache['Bhea_Council_Memberships']['base']['view'] = array (
  'subpanel-for-bhea_member_levels' => 
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
              'name' => 'membership_type',
              'label' => 'LBL_MEMBERSHIP_TYPE ',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'membership_period',
              'label' => 'LBL_MEMBERSHIP_PERIOD ',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'membership_fee',
              'label' => 'LBL_MEMBERSHIP_FEE ',
              'enabled' => true,
              'currency_format' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'payment_date',
              'label' => 'LBL_PAYMENT_DATE',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'bhea_council_members_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNC8EE0MEMBERS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'bhea_council_memberships_opportunities_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1OPPORTUNITIES_IDB',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            7 => 
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
          'name' => 'description_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'status',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'description',
                'value' => 'equal($status,"Renewal Lost")',
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
              'name' => 'membership_fee',
              'label' => 'LBL_MEMBERSHIP_FEE ',
              'span' => 12,
            ),
            1 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE ',
            ),
            2 => 
            array (
              'name' => 'expiry_date',
              'label' => 'LBL_EXPIRY_DATE ',
            ),
            3 => 
            array (
              'name' => 'membership_type',
              'studio' => 'visible',
              'label' => 'LBL_MEMBERSHIP_TYPE ',
            ),
            4 => 
            array (
              'name' => 'membership_period',
              'label' => 'LBL_MEMBERSHIP_PERIOD ',
            ),
            5 => 
            array (
              'name' => 'bhea_council_members_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
            ),
            6 => 
            array (
              'name' => 'accounts_bhea_council_memberships_1_name',
              'label' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
            ),
            7 => 
            array (
              'name' => 'bhea_councils_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
            ),
            8 => 
            array (
              'name' => 'status',
              'studio' => 'visible',
              'label' => 'LBL_STATUS ',
            ),
            9 => 
            array (
              'name' => 'payment_status',
              'studio' => 'visible',
              'label' => 'LBL_PAYMENT_STATUS',
            ),
            10 => 
            array (
              'name' => 'payment_details',
              'label' => 'LBL_PAYMENT_DETAILS',
            ),
            11 => 
            array (
              'name' => 'payment_mode',
              'studio' => 'visible',
              'label' => 'LBL_PAYMENT_MODE',
            ),
            12 => 
            array (
              'name' => 'payment_id',
              'label' => 'LBL_PAYMENT_ID',
            ),
            13 => 
            array (
              'name' => 'payment_date',
              'label' => 'LBL_PAYMENT_DATE',
            ),
            14 => 
            array (
              'name' => 'amount_paid_c',
              'label' => 'LBL_AMOUNT_PAID',
            ),
            15 => 
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
            16 => 
            array (
              'name' => 'created_by_name',
              'readonly' => true,
              'label' => 'LBL_CREATED',
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
            18 => 
            array (
              'name' => 'modified_by_name',
              'readonly' => true,
              'label' => 'LBL_MODIFIED_NAME',
            ),
            19 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'studio' => 'visible',
              'label' => 'LBL_DESCRIPTION',
              'span' => 6,
            ),
            20 => 
            array (
              'span' => 6,
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'description_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'status',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'description',
                'value' => 'equal($status,"Renewal Lost")',
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
              'name' => 'bhea_council_memberships_opportunities_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1OPPORTUNITIES_IDB',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'membership_type',
              'label' => 'LBL_MEMBERSHIP_TYPE ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'membership_fee',
              'label' => 'LBL_MEMBERSHIP_FEE ',
              'enabled' => true,
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'expiry_date',
              'label' => 'LBL_EXPIRY_DATE ',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'payment_status',
              'label' => 'LBL_PAYMENT_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'payment_id',
              'label' => 'LBL_PAYMENT_ID',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'bhea_councils_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1BHEA_COUNCILS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'bhea_council_members_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNC8EE0MEMBERS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '10%',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            10 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'readonly' => true,
              'width' => '10%',
              'default' => true,
            ),
            11 => 
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
          'name' => 'description_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'status',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'description',
                'value' => 'equal($status,"Renewal Lost")',
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
  'subpanel-for-bhea_councils' => 
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
              'name' => 'bhea_council_memberships_opportunities_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1OPPORTUNITIES_IDB',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'bhea_councils_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1BHEA_COUNCILS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'bhea_council_members_bhea_council_memberships_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNC8EE0MEMBERS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'members',
              'label' => 'LBL_MEMBERS',
              'enabled' => true,
              'id' => 'CONTACT_ID_C',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'membership_type',
              'label' => 'LBL_MEMBERSHIP_TYPE ',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'membership_period',
              'label' => 'LBL_MEMBERSHIP_PERIOD ',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'membership_fee',
              'label' => 'LBL_MEMBERSHIP_FEE ',
              'enabled' => true,
              'currency_format' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'payment_status',
              'label' => 'LBL_PAYMENT_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'payment_id',
              'label' => 'LBL_PAYMENT_ID',
              'enabled' => true,
              'default' => true,
            ),
            10 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'readonly' => true,
              'default' => true,
            ),
            11 => 
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
          'name' => 'description_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'status',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'description',
                'value' => 'equal($status,"Renewal Lost")',
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
          'name' => 'description_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'status',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'description',
                'value' => 'equal($status,"Renewal Lost")',
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
          'name' => 'description_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'status',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'description',
                'value' => 'equal($status,"Renewal Lost")',
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
  '_hash' => '22c55dd613a076467b36e9144addb605',
);

