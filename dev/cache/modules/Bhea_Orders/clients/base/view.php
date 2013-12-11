<?php
$clientCache['Bhea_Orders']['base']['view'] = array (
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
              'name' => 'order_id',
              'label' => 'LBL_ORDER_ID',
            ),
            1 => 
            array (
              'name' => 'type',
              'studio' => 'visible',
              'label' => 'LBL_TYPE',
            ),
            2 => 
            array (
              'name' => 'value',
              'label' => 'LBL_VALUE',
            ),
            3 => 
            array (
              'name' => 'order_date',
              'label' => 'LBL_ORDER_DATE',
            ),
            4 => 
            array (
              'name' => 'status',
              'studio' => 'visible',
              'label' => 'LBL_STATUS',
            ),
            5 => 
            array (
              'name' => 'bhea_orders_bhea_invoices_1_name',
              'label' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE',
            ),
            6 => 
            array (
              'name' => 'order_execution_date',
              'label' => 'LBL_ORDER_EXECUTION_DATE',
            ),
            7 => 
            array (
              'name' => 'payment_received',
              'label' => 'LBL_PAYMENT_RECEIVED',
            ),
            8 => 
            array (
              'name' => 'bill_to_address',
              'label' => 'LBL_BILL_TO_ADDRESS',
            ),
            9 => 
            array (
              'name' => 'ship_to_address',
              'label' => 'LBL_SHIP_TO_ADDRESS',
            ),
            10 => 
            array (
              'name' => 'bill_to_address_city',
              'label' => 'LBL_BILL_TO_ADDRESS_CITY',
            ),
            11 => 
            array (
              'name' => 'ship_to_address_city',
              'label' => 'LBL_SHIP_TO_ADDRESS_CITY',
            ),
            12 => 
            array (
              'name' => 'bill_to_address_state',
              'label' => 'LBL_BILL_TO_ADDRESS_STATE',
            ),
            13 => 
            array (
              'name' => 'ship_to_address_state',
              'label' => 'LBL_SHIP_TO_ADDRESS_STATE',
            ),
            14 => 
            array (
              'name' => 'bill_to_address_country',
              'label' => 'LBL_BILL_TO_ADDRESS_COUNTRY',
            ),
            15 => 
            array (
              'name' => 'ship_to_address_country',
              'label' => 'LBL_SHIP_TO_ADDRESS_COUNTRY',
            ),
            16 => 
            array (
              'name' => 'bill_to_address_postalcode',
              'label' => 'LBL_BILL_TO_ADDRESS_POSTALCODE',
            ),
            17 => 
            array (
              'name' => 'ship_to_address_postalcode',
              'label' => 'LBL_SHIP_TO_ADDRESS_POSTALCODE',
            ),
            18 => 
            array (
              'name' => 'accounts_bhea_orders_1_name',
              'label' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_ACCOUNTS_TITLE',
              'span' => 6,
            ),
            19 => 
            array (
              'span' => 6,
            ),
            20 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'studio' => 'visible',
              'label' => 'LBL_DESCRIPTION',
              'span' => 12,
            ),
            21 => 
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
            22 => 
            array (
              'name' => 'created_by_name',
              'readonly' => true,
              'label' => 'LBL_CREATED',
            ),
            23 => 
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
            24 => 
            array (
              'name' => 'modified_by_name',
              'readonly' => true,
              'label' => 'LBL_MODIFIED_NAME',
            ),
            25 => 'assigned_user_name',
            26 => 'team_name',
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
              'name' => 'order_id',
              'label' => 'LBL_ORDER_ID',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'name',
              'label' => 'LBL_NAME',
              'default' => true,
              'enabled' => true,
              'link' => true,
              'width' => '10%',
            ),
            2 => 
            array (
              'name' => 'order_date',
              'label' => 'LBL_ORDER_DATE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'type',
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'status',
              'label' => 'LBL_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'payment_received',
              'label' => 'LBL_PAYMENT_RECEIVED',
              'enabled' => true,
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'order_execution_date',
              'label' => 'LBL_ORDER_EXECUTION_DATE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'value',
              'label' => 'LBL_VALUE',
              'enabled' => true,
              'currency_format' => true,
              'width' => '10%',
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'ship_to_address',
              'label' => 'LBL_SHIP_TO_ADDRESS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'ship_to_address_city',
              'label' => 'LBL_SHIP_TO_ADDRESS_CITY',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            10 => 
            array (
              'name' => 'ship_to_address_state',
              'label' => 'LBL_SHIP_TO_ADDRESS_STATE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            11 => 
            array (
              'name' => 'ship_to_address_country',
              'label' => 'LBL_SHIP_TO_ADDRESS_COUNTRY',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            12 => 
            array (
              'name' => 'ship_to_address_postalcode',
              'label' => 'LBL_SHIP_TO_ADDRESS_POSTALCODE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            13 => 
            array (
              'name' => 'accounts_bhea_orders_1_name',
              'label' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_ACCOUNTS_TITLE',
              'enabled' => true,
              'id' => 'ACCOUNTS_BHEA_ORDERS_1ACCOUNTS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            14 => 
            array (
              'name' => 'bhea_orders_bhea_invoices_1_name',
              'label' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE',
              'enabled' => true,
              'id' => 'BHEA_ORDERS_BHEA_INVOICES_1BHEA_INVOICES_IDB',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            15 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
              'width' => '10%',
            ),
            16 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => '9%',
              'default' => false,
              'enabled' => true,
            ),
            17 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9%',
              'default' => false,
              'enabled' => true,
              'link' => true,
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
  '_hash' => 'b5c6d8d32628395ec574b0e7936afcf5',
);

