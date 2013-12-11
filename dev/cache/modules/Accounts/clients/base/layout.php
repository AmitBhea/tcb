<?php
$clientCache['Accounts']['base']['layout'] = array (
  'subpanels' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_MEMBER_ORG_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'members',
          ),
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CONTACTS_SUBPANEL_TITLE',
          'override_subpanel_list_view' => 'subpanel-for-accounts',
          'context' => 
          array (
            'link' => 'contacts',
          ),
        ),
        2 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_OPPORTUNITIES_SUBPANEL_TITLE',
          'override_subpanel_list_view' => 'subpanel-for-accounts',
          'context' => 
          array (
            'link' => 'opportunities',
          ),
        ),
        3 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_LEADS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'leads',
          ),
          'override_subpanel_list_view' => 'subpanel-for-accounts',
        ),
        4 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CASES_SUBPANEL_TITLE',
          'override_subpanel_list_view' => 'subpanel-for-accounts',
          'context' => 
          array (
            'link' => 'cases',
          ),
        ),
        5 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BUGS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'bugs',
          ),
        ),
        6 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_PRODUCTS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'products',
          ),
        ),
        7 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'documents',
          ),
          'override_subpanel_list_view' => 'subpanel-for-accounts',
        ),
        8 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_QUOTES_SUBPANEL_TITLE',
          'override_subpanel_list_view' => 'subpanel-for-accounts',
          'context' => 
          array (
            'link' => 'quotes',
            'collectionOptions' => 
            array (
              'params' => 
              array (
                'ignore_role' => 1,
              ),
            ),
          ),
        ),
        9 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'campaigns',
          ),
          'override_subpanel_list_view' => 'subpanel-for-accounts',
        ),
        10 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CONTRACTS_SUBPANEL_TITLE',
          'override_subpanel_list_view' => 'subpanel-for-accounts',
          'context' => 
          array (
            'link' => 'contracts',
          ),
        ),
        11 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
          'context' => 
          array (
            'link' => 'accounts_bhea_council_memberships_1',
          ),
        ),
        12 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_ACCOUNTS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
          'context' => 
          array (
            'link' => 'accounts_bhea_memberships_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-accounts',
        ),
        13 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_ACCOUNTS_BHEA_ACCOUNT_PLAN_1_FROM_BHEA_ACCOUNT_PLAN_TITLE',
          'context' => 
          array (
            'link' => 'accounts_bhea_account_plan_1',
          ),
        ),
        14 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE',
          'context' => 
          array (
            'link' => 'accounts_bhea_orders_1',
          ),
        ),
        15 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
          'context' => 
          array (
            'link' => 'accounts_bhea_council_members_1',
          ),
        ),
        16 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_ACCOUNTS_BHEA_FINANCE_PERFORMANCE_1_FROM_BHEA_FINANCE_PERFORMANCE_TITLE',
          'context' => 
          array (
            'link' => 'accounts_bhea_finance_performance_1',
          ),
        ),
      ),
    ),
  ),
  'sidebar' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
      ),
      'type' => 'simple',
      'span' => 12,
    ),
  ),
  'list-sidebar' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
      ),
      'type' => 'simple',
      'span' => 12,
    ),
  ),
  'record-dashboard' => 
  array (
    'meta' => 
    array (
      'metadata' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'rows' => 
            array (
              0 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'name' => 'opportunity-metrics',
                    'label' => 'LBL_DASHLET_OPPORTUNITY_NAME',
                  ),
                  'width' => 12,
                ),
              ),
              1 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'name' => 'casessummary',
                    'label' => 'LBL_DASHLET_CASES_SUMMARY_NAME',
                  ),
                  'width' => 12,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'name' => 'news',
                    'label' => 'LBL_DASHLET_NEWS_FEED_NAME',
                  ),
                  'width' => 12,
                ),
              ),
              3 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'name' => 'planned-activities',
                    'label' => 'LBL_PLANNED_ACTIVITIES_DASHLET',
                    'limit' => '10',
                    'date' => 'today',
                    'visibility' => 'user',
                  ),
                  'width' => 12,
                ),
              ),
              4 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'name' => 'history',
                    'label' => 'LBL_HISTORY_DASHLET',
                    'filter' => '7',
                    'limit' => '10',
                    'visibility' => 'user',
                  ),
                  'width' => 12,
                ),
              ),
            ),
            'width' => 12,
          ),
        ),
      ),
      'name' => 'LBL_DEFAULT_DASHBOARD_TITLE',
    ),
  ),
  'new-sidebar' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'view' => 'createhelp',
        ),
      ),
      'type' => 'simple',
      'span' => 12,
    ),
  ),
  'list-dashboard' => 
  array (
    'meta' => 
    array (
      'metadata' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'rows' => 
            array (
              0 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'name' => 'dashablelist',
                    'label' => 'TPL_DASHLET_MY_MODULE',
                    'display_columns' => 
                    array (
                      0 => 'name',
                      1 => 'billing_address_country',
                      2 => 'billing_address_city',
                    ),
                  ),
                  'context' => 
                  array (
                    'module' => 'Accounts',
                  ),
                  'width' => 12,
                ),
              ),
            ),
            'width' => 12,
          ),
        ),
      ),
      'name' => 'LBL_DEFAULT_DASHBOARD_TITLE',
    ),
  ),
  'detail' => 
  array (
    'meta' => 
    array (
      'type' => 'detail',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'subnavdetail',
        ),
        1 => 
        array (
          'view' => 'detail',
        ),
      ),
    ),
  ),
  'edit' => 
  array (
    'meta' => 
    array (
      'type' => 'edit',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'subnavedit',
        ),
        1 => 
        array (
          'view' => 'edit',
        ),
      ),
    ),
  ),
  '_hash' => '15e1def9a42ac82ed22075846d5224c2',
);

