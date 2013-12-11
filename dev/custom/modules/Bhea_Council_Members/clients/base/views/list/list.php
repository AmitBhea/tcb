<?php
$module_name = 'Bhea_Council_Members';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
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
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'related_fields' => 
                array (
                  0 => 'first_name',
                  1 => 'last_name',
                  2 => 'salutation',
                ),
                'width' => '10%',
              ),
              1 => 
              array (
                'name' => 'account',
                'label' => 'LBL_ACCOUNT',
                'enabled' => true,
                'id' => 'ACCOUNT_ID_C',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'bhea_council_members_bhea_council_memberships_1_name',
                'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
                'enabled' => true,
                'id' => 'BHEA_COUNC1877ERSHIPS_IDB',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'bhea_councils_bhea_council_members_1_name',
                'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCILS_TITLE',
                'enabled' => true,
                'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1BHEA_COUNCILS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'membership_status',
                'label' => 'LBL_MEMBERSHIP_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'member_till',
                'label' => 'LBL_MEMBER_TILL',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'phone_work',
                'width' => '10%',
                'label' => 'LBL_OFFICE_PHONE',
                'default' => true,
                'enabled' => true,
              ),
              7 => 
              array (
                'name' => 'email',
                'width' => '10%',
                'label' => 'LBL_EMAIL_ADDRESS',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              8 => 
              array (
                'name' => 'date_entered',
                'width' => '10%',
                'label' => 'LBL_DATE_ENTERED',
                'default' => true,
                'enabled' => true,
                'readonly' => true,
              ),
              9 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'do_not_call',
                'width' => '10%',
                'label' => 'LBL_DO_NOT_CALL',
                'default' => false,
                'enabled' => true,
              ),
              11 => 
              array (
                'name' => 'phone_home',
                'width' => '10%',
                'label' => 'LBL_HOME_PHONE',
                'default' => false,
                'enabled' => true,
              ),
              12 => 
              array (
                'name' => 'phone_mobile',
                'width' => '10%',
                'label' => 'LBL_MOBILE_PHONE',
                'default' => false,
                'enabled' => true,
              ),
              13 => 
              array (
                'name' => 'phone_other',
                'width' => '10%',
                'label' => 'LBL_WORK_PHONE',
                'default' => false,
                'enabled' => true,
              ),
              14 => 
              array (
                'name' => 'phone_fax',
                'width' => '10%',
                'label' => 'LBL_FAX_PHONE',
                'default' => false,
                'enabled' => true,
              ),
              15 => 
              array (
                'name' => 'member_from',
                'label' => 'LBL_MEMBER_FROM',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'address_street',
                'width' => '10%',
                'label' => 'LBL_PRIMARY_ADDRESS_STREET',
                'default' => false,
                'enabled' => true,
              ),
              17 => 
              array (
                'name' => 'address_city',
                'width' => '10%',
                'label' => 'LBL_PRIMARY_ADDRESS_CITY',
                'default' => false,
                'enabled' => true,
              ),
              18 => 
              array (
                'name' => 'address_state',
                'width' => '10%',
                'label' => 'LBL_PRIMARY_ADDRESS_STATE',
                'default' => false,
                'enabled' => true,
              ),
              19 => 
              array (
                'name' => 'address_postalcode',
                'width' => '10%',
                'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                'default' => false,
                'enabled' => true,
              ),
              20 => 
              array (
                'name' => 'created_by_name',
                'width' => '10%',
                'label' => 'LBL_CREATED',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              21 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '10%',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
