<?php
$clientCache['Bhea_Memberships']['base']['view'] = array (
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
              'name' => 'accounts_bhea_memberships_1_name',
              'label' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
              'enabled' => true,
              'id' => 'ACCOUNTS_BHEA_MEMBERSHIPS_1ACCOUNTS_IDA',
              'link' => true,
              'sortable' => false,
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
              'name' => 'expiry_date',
              'label' => 'LBL_EXPIRY_DATE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'mem_type',
              'label' => 'LBL_MEM_TYPE',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'mem_period',
              'label' => 'LBL_MEM_PERIOD',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'mem_fee',
              'label' => 'LBL_MEM_FEE',
              'enabled' => true,
              'currency_format' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'payment_date',
              'label' => 'LBL_PAYMENT_DATE',
              'enabled' => true,
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'final_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'subtract($mem_fee,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyfinal_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'true',
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
              'name' => 'bhea_member_levels_bhea_memberships_1_name',
              'label' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
            ),
            1 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE',
            ),
            2 => 
            array (
              'name' => 'expiry_date',
              'label' => 'LBL_EXPIRY_DATE',
            ),
            3 => 
            array (
              'name' => 'mem_type',
              'studio' => 'visible',
              'label' => 'LBL_MEM_TYPE',
            ),
            4 => 
            array (
              'name' => 'mem_period',
              'label' => 'LBL_MEM_PERIOD',
            ),
            5 => 
            array (
              'name' => 'status',
              'studio' => 'visible',
              'label' => 'LBL_STATUS',
            ),
            6 => 
            array (
              'name' => 'mem_fee',
              'label' => 'LBL_MEM_FEE',
            ),
            7 => 
            array (
              'name' => 'discount_c',
              'label' => 'LBL_DISCOUNT',
            ),
            8 => 
            array (
              'name' => 'final_mem_fee_c',
              'label' => 'LBL_FINAL_MEM_FEE',
            ),
            9 => 
            array (
              'name' => 'payment_id',
              'label' => 'LBL_PAYMENT_ID',
            ),
            10 => 
            array (
              'name' => 'payment_date',
              'label' => 'LBL_PAYMENT_DATE',
            ),
            11 => 
            array (
              'name' => 'payment_mode',
              'studio' => 'visible',
              'label' => 'LBL_PAYMENT_MODE',
            ),
            12 => 
            array (
              'name' => 'payment_details',
              'studio' => 'visible',
              'label' => 'LBL_PAYMENT_DETAILS',
            ),
            13 => 
            array (
              'name' => 'payment_status',
              'studio' => 'visible',
              'label' => 'LBL_PAYMENT_STATUS',
            ),
            14 => 
            array (
              'name' => 'accounts_bhea_memberships_1_name',
              'label' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
            ),
            15 => 
            array (
              'name' => 'lost_reason',
              'studio' => 'visible',
              'label' => 'LBL_LOST_REASON',
            ),
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
            18 => 'assigned_user_name',
            19 => 'team_name',
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
          'name' => 'final_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'subtract($mem_fee,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyfinal_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'true',
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
              'name' => 'bhea_member_levels_bhea_memberships_1_name',
              'label' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1BHEA_MEMBER_LEVELS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'accounts_bhea_memberships_1_name',
              'label' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
              'enabled' => true,
              'id' => 'ACCOUNTS_BHEA_MEMBERSHIPS_1ACCOUNTS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'readonly' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9%',
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            5 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
              'width' => '10%',
            ),
            6 => 
            array (
              'name' => 'status',
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
            ),
            7 => 
            array (
              'name' => 'mem_period',
              'label' => 'LBL_MEM_PERIOD',
              'enabled' => true,
              'width' => '10%',
              'default' => false,
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
          'name' => 'final_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'subtract($mem_fee,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyfinal_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'true',
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
  'subpanel-for-accounts' => 
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
              'name' => 'mem_level',
              'label' => 'LBL_MEM_LEVEL',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'mem_type',
              'label' => 'LBL_MEM_TYPE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'mem_period',
              'label' => 'LBL_MEM_PERIOD',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'start_date',
              'label' => 'LBL_START_DATE',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'expiry_date',
              'label' => 'LBL_EXPIRY_DATE',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'readonly' => true,
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
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'final_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'subtract($mem_fee,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyfinal_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'true',
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
          'name' => 'final_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'subtract($mem_fee,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyfinal_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'true',
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
          'name' => 'final_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'subtract($mem_fee,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'readOnlyfinal_mem_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'mem_fee',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_mem_fee_c',
                'value' => 'true',
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
  '_hash' => 'dcfd0584cc17441e65215d33e0dd0d66',
);

