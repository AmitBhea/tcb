<?php
$clientCache['Bhea_Payments']['base']['view'] = array (
  'subpanel-for-bhea_orders' => 
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
              'name' => 'payment_date',
              'label' => 'LBL_PAYMENT_DATE',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'payment_status',
              'label' => 'LBL_PAYMENT_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'payment_mode',
              'label' => 'LBL_PAYMENT_MODE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'bhea_orders_bhea_payments_1_name',
              'label' => 'LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_BHEA_ORDERS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_ORDERS_BHEA_PAYMENTS_1BHEA_ORDERS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'description',
              'label' => 'LBL_DESCRIPTION',
              'enabled' => true,
              'sortable' => false,
              'default' => true,
            ),
            6 => 
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
  'subpanel-for-bhea_invoices' => 
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
              'name' => 'payment_status',
              'label' => 'LBL_PAYMENT_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'payment_mode',
              'label' => 'LBL_PAYMENT_MODE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'payment_date',
              'label' => 'LBL_PAYMENT_DATE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'description',
              'label' => 'LBL_DESCRIPTION',
              'enabled' => true,
              'sortable' => false,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'bhea_orders_bhea_payments_1_name',
              'label' => 'LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_BHEA_ORDERS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_ORDERS_BHEA_PAYMENTS_1BHEA_ORDERS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'bhea_invoices_bhea_payments_1_name',
              'label' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
              'enabled' => true,
              'id' => 'BHEA_INVOICES_BHEA_PAYMENTS_1BHEA_INVOICES_IDA',
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
              'name' => 'payment_mode',
              'studio' => 'visible',
              'label' => 'LBL_PAYMENT_MODE',
            ),
            1 => 
            array (
              'name' => 'payment_status',
              'studio' => 'visible',
              'label' => 'LBL_PAYMENT_STATUS',
            ),
            2 => 
            array (
              'name' => 'payment_date',
              'label' => 'LBL_PAYMENT_DATE',
            ),
            3 => 
            array (
              'name' => 'currency',
              'label' => 'LBL_CURRENCY',
            ),
            4 => 
            array (
              'name' => 'bhea_invoices_bhea_payments_1_name',
              'label' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
              'span' => 12,
            ),
            5 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'studio' => 'visible',
              'label' => 'LBL_DESCRIPTION',
              'span' => 12,
            ),
            6 => 
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
            7 => 
            array (
              'name' => 'created_by_name',
              'readonly' => true,
              'label' => 'LBL_CREATED',
            ),
            8 => 
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
            9 => 
            array (
              'name' => 'modified_by_name',
              'readonly' => true,
              'label' => 'LBL_MODIFIED_NAME',
            ),
            10 => 'assigned_user_name',
            11 => 'team_name',
            12 => 
            array (
              'name' => 'bhea_memberships_bhea_payments_1_name',
              'label' => 'LBL_BHEA_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
            ),
            13 => 
            array (
              'name' => 'bhea_council_memberships_bhea_payments_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
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
              'name' => 'payment_status',
              'label' => 'LBL_PAYMENT_STATUS',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'payment_mode',
              'label' => 'LBL_PAYMENT_MODE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'payment_date',
              'label' => 'LBL_PAYMENT_DATE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'description',
              'label' => 'LBL_DESCRIPTION',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'bhea_orders_bhea_payments_1_name',
              'label' => 'LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_BHEA_ORDERS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_ORDERS_BHEA_PAYMENTS_1BHEA_ORDERS_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'bhea_invoices_bhea_payments_1_name',
              'label' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
              'enabled' => true,
              'id' => 'BHEA_INVOICES_BHEA_PAYMENTS_1BHEA_INVOICES_IDA',
              'link' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
              'width' => '10%',
            ),
            8 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => '9%',
              'default' => true,
              'enabled' => true,
            ),
            9 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9%',
              'default' => true,
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
  '_hash' => '14f79d407357511717f70b3e95aae88a',
);

