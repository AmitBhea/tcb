<?php
$module_name = 'Bhea_Councils';
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
                'name' => 'start_date',
                'label' => 'LBL_START_DATE ',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'end_date',
                'label' => 'LBL_END_DATE ',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'group_category',
                'label' => 'LBL_GROUP_CATEGORY ',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'cur_member_cnt',
                'label' => 'LBL_CUR_MEMBER_CNT',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'membership_fee',
                'label' => 'LBL_MEMBERSHIP_FEE ',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'member_renewal_fee',
                'label' => 'LBL_MEMBER_RENEWAL_FEE ',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'council_url',
                'label' => 'LBL_COUNCIL_URL',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              9 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
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
  ),
);
