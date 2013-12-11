<?php
$viewdefs['Bhea_Registrants']['mobile']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'default' => true,
          'enabled' => true,
          'width' => '20%',
          'label' => 'LBL_NAME',
          'link' => true,
          'orderBy' => 'last_name',
          'related_fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
          ),
        ),
        1 => 
        array (
          'name' => 'title',
          'default' => true,
          'enabled' => true,
          'width' => '15%',
          'label' => 'LBL_TITLE',
        ),
        2 => 
        array (
          'name' => 'email1',
          'default' => true,
          'enabled' => true,
          'width' => '15%',
          'label' => 'LBL_EMAIL_ADDRESS',
          'sortable' => false,
          'link' => true,
          'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
        ),
        3 => 
        array (
          'name' => 'phone_work',
          'default' => true,
          'enabled' => true,
          'width' => '15%',
          'label' => 'LBL_OFFICE_PHONE',
        ),
        4 => 
        array (
          'name' => 'do_not_call',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_DO_NOT_CALL',
        ),
        5 => 
        array (
          'name' => 'phone_home',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_HOME_PHONE',
        ),
        6 => 
        array (
          'name' => 'phone_mobile',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_MOBILE_PHONE',
        ),
        7 => 
        array (
          'name' => 'phone_other',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_WORK_PHONE',
        ),
        8 => 
        array (
          'name' => 'phone_fax',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_FAX_PHONE',
        ),
        9 => 
        array (
          'name' => 'address_street',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        ),
        10 => 
        array (
          'name' => 'address_city',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        ),
        11 => 
        array (
          'name' => 'address_state',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        ),
        12 => 
        array (
          'name' => 'address_postalcode',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
        ),
        13 => 
        array (
          'name' => 'date_entered',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_DATE_ENTERED',
        ),
        14 => 
        array (
          'name' => 'created_by_name',
          'default' => false,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_CREATED',
        ),
        15 => 
        array (
          'name' => 'team_name',
          'default' => true,
          'enabled' => true,
          'width' => '10',
          'label' => 'LBL_TEAM',
        ),
      ),
    ),
  ),
);
