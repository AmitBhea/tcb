<?php
$module_name = 'Bhea_Contractors';
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
                'name' => 'title',
                'width' => '15%',
                'label' => 'LBL_TITLE',
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'department',
                'label' => 'LBL_DEPARTMENT',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'phone_mobile',
                'width' => '10%',
                'label' => 'LBL_MOBILE_PHONE',
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'phone_work',
                'width' => '15%',
                'label' => 'LBL_OFFICE_PHONE',
                'default' => true,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'area_of_expertise',
                'label' => 'LBL_AREA_OF_EXPERTISE',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'company_name',
                'label' => 'LBL_COMPANY_NAME',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'company_address',
                'label' => 'LBL_COMPANY_ADDRESS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'company_address_city',
                'label' => 'LBL_COMPANY_ADDRESS_CITY',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'company_address_state',
                'label' => 'LBL_COMPANY_ADDRESS_STATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'company_address_country',
                'label' => 'LBL_COMPANY_ADDRESS_COUNTRY',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'bhea_events_bhea_contractors_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_CONTRACTORS_1_FROM_BHEA_EVENTS_TITLE',
                'enabled' => true,
                'id' => 'BHEA_EVENTS_BHEA_CONTRACTORS_1BHEA_EVENTS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'email',
                'width' => '15%',
                'label' => 'LBL_EMAIL_ADDRESS',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              13 => 
              array (
                'name' => 'do_not_call',
                'width' => '10%',
                'label' => 'LBL_DO_NOT_CALL',
                'default' => false,
                'enabled' => true,
              ),
              14 => 
              array (
                'name' => 'phone_home',
                'width' => '10%',
                'label' => 'LBL_HOME_PHONE',
                'default' => false,
                'enabled' => true,
              ),
              15 => 
              array (
                'name' => 'phone_other',
                'width' => '10%',
                'label' => 'LBL_WORK_PHONE',
                'default' => false,
                'enabled' => true,
              ),
              16 => 
              array (
                'name' => 'phone_fax',
                'width' => '10%',
                'label' => 'LBL_FAX_PHONE',
                'default' => false,
                'enabled' => true,
              ),
              17 => 
              array (
                'name' => 'address_street',
                'width' => '10%',
                'label' => 'LBL_PRIMARY_ADDRESS_STREET',
                'default' => false,
                'enabled' => true,
              ),
              18 => 
              array (
                'name' => 'address_city',
                'width' => '10%',
                'label' => 'LBL_PRIMARY_ADDRESS_CITY',
                'default' => false,
                'enabled' => true,
              ),
              19 => 
              array (
                'name' => 'address_state',
                'width' => '10%',
                'label' => 'LBL_PRIMARY_ADDRESS_STATE',
                'default' => false,
                'enabled' => true,
              ),
              20 => 
              array (
                'name' => 'address_postalcode',
                'width' => '10%',
                'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                'default' => false,
                'enabled' => true,
              ),
              21 => 
              array (
                'name' => 'date_entered',
                'width' => '10%',
                'label' => 'LBL_DATE_ENTERED',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              22 => 
              array (
                'name' => 'created_by_name',
                'width' => '10%',
                'label' => 'LBL_CREATED',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              23 => 
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
