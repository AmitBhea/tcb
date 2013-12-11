<?php
$clientCache['Contacts']['base']['layout'] = array (
  'subpanels' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_LEADS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'leads',
          ),
          'override_subpanel_list_view' => 'subpanel-for-contacts',
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_OPPORTUNITIES_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'opportunities',
          ),
          'override_subpanel_list_view' => 'subpanel-for-contacts',
        ),
        2 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CASES_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'cases',
          ),
          'override_subpanel_list_view' => 'subpanel-for-contacts',
        ),
        3 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_BUGS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'bugs',
          ),
        ),
        4 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_DIRECT_REPORTS_SUBPANEL_TITLE',
          'override_subpanel_list_view' => 'subpanel-for-contacts',
          'context' => 
          array (
            'link' => 'direct_reports',
          ),
        ),
        5 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'documents',
          ),
          'override_subpanel_list_view' => 'subpanel-for-contacts',
        ),
        6 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_QUOTES_SUBPANEL_TITLE',
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
          'override_subpanel_list_view' => 'subpanel-for-contacts',
        ),
        7 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CONTRACTS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'contracts',
          ),
        ),
        8 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'campaigns',
          ),
          'override_subpanel_list_view' => 'subpanel-for-contacts',
        ),
        9 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CONTACTS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
          'context' => 
          array (
            'link' => 'contacts_bhea_sessions_1',
          ),
        ),
      ),
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
                    'name' => 'planned-activities',
                    'label' => 'LBL_PLANNED_ACTIVITIES_DASHLET',
                    'limit' => '10',
                    'date' => 'today',
                    'visibility' => 'user',
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
  '_hash' => 'ce59bafdc9e01ff83e11299c4ec0aafd',
);

