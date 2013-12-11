<?php
$clientCache['Home']['base']['layout'] = array (
  'record' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 
          array (
            'components' => 
            array (
              0 => 
              array (
                'view' => 'dashboard-headerpane',
              ),
              1 => 
              array (
                'layout' => 'dashlet-main',
              ),
            ),
            'type' => 'simple',
            'name' => 'list',
            'span' => 12,
          ),
        ),
      ),
      'type' => 'dashboard',
      'span' => 12,
      'method' => 'record',
      'last_state' => 
      array (
        'id' => 'last-visit',
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
                    'name' => 'twitter',
                    'label' => 'LBL_DASHLET_RECENT_TWEETS_SUGARCRM_NAME',
                    'twitter' => 'sugarcrm',
                    'limit' => 20,
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
                    'name' => 'dashablelist',
                    'label' => 'TPL_DASHLET_MY_MODULE',
                    'display_columns' => 
                    array (
                      0 => 'full_name',
                      1 => 'account_name',
                      2 => 'phone_work',
                      3 => 'title',
                    ),
                    'limit' => 15,
                  ),
                  'context' => 
                  array (
                    'module' => 'Contacts',
                  ),
                  'width' => 12,
                ),
              ),
            ),
            'width' => 4,
          ),
          1 => 
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
                  'width' => 12,
                ),
              ),
              1 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'name' => 'bubblechart',
                    'label' => 'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME',
                    'filter_duration' => 0,
                    'filter_assigned' => 'my',
                  ),
                  'width' => 12,
                ),
              ),
            ),
            'width' => 8,
          ),
        ),
      ),
      'name' => 'LBL_DEFAULT_DASHBOARD_TITLE',
    ),
  ),
  'list' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'view' => 'dashboard-headerpane',
        ),
      ),
      'type' => 'dashboard',
      'span' => 12,
      'last_state' => 
      array (
        'id' => 'last-visit',
      ),
    ),
  ),
  'records' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 
          array (
            'components' => 
            array (
              0 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                    0 => 
                    array (
                      'layout' => 'list',
                    ),
                  ),
                  'type' => 'simple',
                  'name' => 'main-pane',
                  'span' => 8,
                ),
              ),
              1 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                    0 => 
                    array (
                      'layout' => 'list-sidebar',
                    ),
                  ),
                  'type' => 'simple',
                  'name' => 'side-pane',
                  'span' => 4,
                ),
              ),
              2 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                  ),
                  'type' => 'simple',
                  'name' => 'dashboard-pane',
                  'span' => 4,
                ),
              ),
              3 => 
              array (
                'layout' => 
                array (
                  'components' => 
                  array (
                    0 => 
                    array (
                      'layout' => 'preview',
                    ),
                  ),
                  'type' => 'simple',
                  'name' => 'preview-pane',
                  'span' => 8,
                ),
              ),
            ),
            'type' => 'default',
            'name' => 'sidebar',
            'span' => 12,
          ),
        ),
      ),
      'type' => 'simple',
      'name' => 'base',
      'span' => 12,
    ),
  ),
  'about' => 
  array (
    'meta' => 
    array (
      'type' => 'simple',
      'name' => 'about',
      'css_class' => 'row-fluid',
      'components' => 
      array (
        0 => 
        array (
          'layout' => 
          array (
            'type' => 'simple',
            'css_class' => 'main-pane span12',
            'components' => 
            array (
              0 => 
              array (
                'view' => 'about-headerpane',
              ),
              1 => 
              array (
                'layout' => 
                array (
                  'type' => 'fluid',
                  'components' => 
                  array (
                    0 => 
                    array (
                      'layout' => 
                      array (
                        'type' => 'simple',
                        'span' => 12,
                        'components' => 
                        array (
                          0 => 
                          array (
                            'view' => 'about-copyright',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              2 => 
              array (
                'layout' => 
                array (
                  'type' => 'fluid',
                  'components' => 
                  array (
                    0 => 
                    array (
                      'layout' => 
                      array (
                        'type' => 'simple',
                        'span' => 4,
                        'components' => 
                        array (
                          0 => 
                          array (
                            'view' => 'about-resources',
                          ),
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      'layout' => 
                      array (
                        'type' => 'simple',
                        'span' => 4,
                        'components' => 
                        array (
                          0 => 
                          array (
                            'view' => 'about-source-code',
                          ),
                        ),
                      ),
                    ),
                    2 => 
                    array (
                      'layout' => 
                      array (
                        'type' => 'simple',
                        'span' => 4,
                        'components' => 
                        array (
                          0 => 
                          array (
                            'view' => 'about-language-packs',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  '_hash' => 'a3e9c3dd98d74602570311e4eb372350',
);

