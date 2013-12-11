<?php
$clientCache['Opportunities']['base']['layout'] = array (
  'subpanels' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_QUOTE_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'quotes',
          ),
          'override_subpanel_list_view' => 'subpanel-for-opportunities',
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_INVITEE',
          'override_subpanel_list_view' => 'subpanel-for-opportunities',
          'context' => 
          array (
            'link' => 'contacts',
          ),
        ),
        2 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_LEADS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'leads',
          ),
          'override_subpanel_list_view' => 'subpanel-for-opportunities',
        ),
        3 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'documents',
          ),
          'override_subpanel_list_view' => 'subpanel-for-opportunities',
        ),
        4 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CONTRACTS_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'contracts',
          ),
        ),
        5 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_OPPORTUNITIES_BHEA_PROGRAM_1_FROM_BHEA_PROGRAM_TITLE',
          'context' => 
          array (
            'link' => 'opportunities_bhea_program_1',
          ),
        ),
        6 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_OPPORTUNITIES_BHEA_COUNCILS_1_FROM_BHEA_COUNCILS_TITLE',
          'context' => 
          array (
            'link' => 'opportunities_bhea_councils_1',
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
                    'name' => 'forecast-pareto',
                    'label' => 'LBL_DASHLET_FORECAST_PARETO_CHART_NAME',
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
                    'name' => 'planned-activities',
                    'label' => 'LBL_PLANNED_ACTIVITIES_DASHLET',
                    'limit' => '10',
                    'date' => 'today',
                    'visibility' => 'user',
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
                    'name' => 'history',
                    'label' => 'LBL_HISTORY_DASHLET',
                    'filter' => '7',
                    'limit' => '10',
                    'visibility' => 'user',
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
                    'name' => 'attachments',
                    'label' => 'LBL_DASHLET_ATTACHMENTS_NAME',
                    'limit' => '5',
                    'auto_refresh' => '0',
                  ),
                  'context' => 
                  array (
                    'module' => 'Notes',
                    'link' => 'notes',
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
                    'name' => 'forecast-pipeline',
                    'label' => 'LBL_DASHLET_PIPLINE_NAME',
                    'display_type' => 'self',
                  ),
                  'context' => 
                  array (
                    'module' => 'Forecasts',
                  ),
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
  '_hash' => 'cc2a4b5b8ba04442efb0d1eb6d4404d8',
);

