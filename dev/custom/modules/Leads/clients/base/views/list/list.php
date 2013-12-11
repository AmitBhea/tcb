<?php
$viewdefs['Leads'] = 
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
                'name' => 'full_name',
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
                  1 => 'first_name',
                  2 => 'last_name',
                ),
                'link' => true,
                'css_class' => 'full-name',
                'label' => 'LBL_LIST_NAME',
                'enabled' => true,
                'default' => true,
                'width' => '10%',
              ),
              1 => 
              array (
                'name' => 'contact_name',
                'label' => 'LBL_CONTACT_NAME',
                'enabled' => true,
                'id' => 'CONTACT_ID',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
                'related_fields' => 
                array (
                  0 => 'account_id',
                  1 => 'converted',
                ),
                'width' => '10%',
              ),
              3 => 
              array (
                'name' => 'opportunity_amount',
                'label' => 'LBL_OPPORTUNITY_AMOUNT',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'phone_mobile',
                'label' => 'LBL_MOBILE_PHONE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'phone_work',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
                'width' => '10%',
              ),
              6 => 
              array (
                'name' => 'email',
                'label' => 'LBL_LIST_EMAIL_ADDRESS',
                'sortable' => false,
                'enabled' => true,
                'default' => true,
                'width' => '10%',
              ),
              7 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'width' => '10%',
              ),
              8 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
                'width' => '10%',
              ),
              9 => 
              array (
                'name' => 'accept_status_name',
                'label' => 'LBL_LIST_ACCEPT_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'bhea_events_leads_1_name',
                'label' => 'LBL_BHEA_EVENTS_LEADS_1_FROM_BHEA_EVENTS_TITLE',
                'enabled' => true,
                'id' => 'BHEA_EVENTS_LEADS_1BHEA_EVENTS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'opportunity_date_c',
                'label' => 'LBL_OPPORTUNITY_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'prod_serv_interest_c',
                'label' => 'LBL_PROD_SERV_INTEREST',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'status',
                'label' => 'LBL_LIST_STATUS',
                'enabled' => true,
                'default' => false,
                'width' => '10%',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);