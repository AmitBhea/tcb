<?php
$clientCache['Bhea_Hotels']['base']['view'] = array (
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
              'name' => 'type',
              'studio' => 'visible',
              'label' => 'LBL_TYPE',
            ),
            1 => 
            array (
              'name' => 'standard',
              'studio' => 'visible',
              'label' => 'LBL_STANDARD',
            ),
            2 => 
            array (
              'name' => 'website',
              'label' => 'LBL_WEBSITE',
            ),
            3 => 
            array (
              'name' => 'contact_person_name',
              'label' => 'LBL_CONTACT_PERSON_NAME',
            ),
            4 => 
            array (
              'name' => 'tcb_discount_rate',
              'label' => 'LBL_TCB_DISCOUNT_RATE',
            ),
            5 => 
            array (
              'name' => 'club_card',
              'label' => 'LBL_CLUB_CARD',
            ),
            6 => 
            array (
              'name' => 'mobile',
              'label' => 'LBL_MOBILE',
            ),
            7 => 
            array (
              'name' => 'phone',
              'label' => 'LBL_PHONE',
            ),
            8 => 
            array (
              'name' => 'fax_number',
              'label' => 'LBL_FAX_NUMBER',
            ),
            9 => 
            array (
              'name' => 'email_id',
              'label' => 'LBL_EMAIL_ID',
            ),
            10 => 
            array (
              'name' => 'address',
              'label' => 'LBL_ADDRESS',
            ),
            11 => 
            array (
              'name' => 'address_city',
              'label' => 'LBL_ADDRESS_CITY',
            ),
            12 => 
            array (
              'name' => 'address_state',
              'label' => 'LBL_ADDRESS_STATE',
            ),
            13 => 
            array (
              'name' => 'address_country',
              'label' => 'LBL_ADDRESS_COUNTRY',
            ),
            14 => 
            array (
              'name' => 'address_postalcode',
              'label' => 'LBL_ADDRESS_POSTALCODE',
              'span' => 6,
            ),
            15 => 
            array (
              'span' => 6,
            ),
            16 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
              'span' => 12,
            ),
            17 => 
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
            18 => 
            array (
              'name' => 'created_by_name',
              'readonly' => true,
              'label' => 'LBL_CREATED',
            ),
            19 => 
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
            20 => 
            array (
              'name' => 'modified_by_name',
              'readonly' => true,
              'label' => 'LBL_MODIFIED_NAME',
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
              'name' => 'type',
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'standard',
              'label' => 'LBL_STANDARD',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'website',
              'label' => 'LBL_WEBSITE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'phone',
              'label' => 'LBL_PHONE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'mobile',
              'label' => 'LBL_MOBILE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'tcb_discount_rate',
              'label' => 'LBL_TCB_DISCOUNT_RATE',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'contact_person_name',
              'label' => 'LBL_CONTACT_PERSON_NAME',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'club_card',
              'label' => 'LBL_CLUB_CARD',
              'enabled' => true,
              'width' => '10%',
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'description',
              'label' => 'LBL_DESCRIPTION',
              'enabled' => true,
              'sortable' => false,
              'width' => '10%',
              'default' => true,
            ),
            10 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
              'width' => '10%',
            ),
            11 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => '9%',
              'default' => false,
              'enabled' => true,
              'link' => true,
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
  '_hash' => '21124ccbaf7840b914058adbe243f39a',
);

