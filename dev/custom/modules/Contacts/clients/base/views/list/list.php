<?php
$viewdefs['Contacts'] = 
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
                'width' => '10%',
                'label' => 'LBL_LIST_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'contacts_id_c',
                'label' => 'LBL_CONTACTS_ID',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
                'width' => '10%',
              ),
              3 => 
              array (
                'name' => 'status_c',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'type_c',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'opportunity_role',
                'label' => 'LBL_OPPORTUNITY_ROLE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'username_c',
                'label' => 'LBL_USERNAME',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'phone_work',
                'enabled' => true,
                'default' => true,
                'width' => '10%',
              ),
              8 => 
              array (
                'name' => 'assigned_user_name',
                'width' => '10%',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'width' => '10%',
              ),
              10 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'width' => '10%',
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
