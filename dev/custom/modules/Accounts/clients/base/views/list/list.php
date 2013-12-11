<?php
$viewdefs['Accounts'] = 
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
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'width' => '20%',
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'mem_status_c',
                'label' => 'LBL_MEM_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'mem_start_date_c',
                'label' => 'LBL_MEM_START_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'subs_amt_c',
                'label' => 'LBL_SUBS_AMT',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'phone_office',
                'width' => '10%',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'renewal_date_c',
                'label' => 'LBL_RENEWAL_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'billing_address_city',
                'width' => '13%',
                'label' => 'LBL_LIST_CITY',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'email',
                'width' => '15%',
                'label' => 'LBL_EMAIL_ADDRESS',
                'sortable' => false,
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'assigned_user_name',
                'width' => '10%',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'sortable' => false,
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'width' => '13%',
                'default' => false,
                'readonly' => true,
              ),
              10 => 
              array (
                'name' => 'linkedin',
                'label' => 'LBL_LINKEDIN',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'prod_serv_c',
                'label' => 'LBL_PROD_SERV',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'company_alias_c',
                'label' => 'LBL_COMPANY_ALIAS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'usage_overview_c',
                'label' => 'LBL_USAGE_OVERVIEW',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'billing_address_country',
                'width' => '13%',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'legal_status_c',
                'label' => 'LBL_LEGAL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'googleplus',
                'label' => 'LBL_GOOGLEPLUS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'company_id_c',
                'label' => 'LBL_COMPANY_ID',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'facebook',
                'label' => 'LBL_FACEBOOK',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
