<?php
$clientCache['Styleguide']['base']['layout'] = array (
  'styleguide' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        'type' => 'simple',
        0 => 
        array (
          'view' => 'sg-headerpane',
        ),
        1 => 
        array (
          'view' => 'styleguide',
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
     ********************************************************************************/
({_placeComponent:function(component){this.$(\'#styleguide\').append(component.$el);}})',
    ),
    'templates' => 
    array (
      'styleguide' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<link href="styleguide/assets/css/styleguide.css" rel="stylesheet">
<div id="styleguide" class="main-pane">
</div>
',
    ),
  ),
  'field' => 
  array (
    'templates' => 
    array (
      'field' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<link href="styleguide/assets/css/styleguide.css" rel="stylesheet">
<div id="styleguide" class="main-pane">
</div>
',
    ),
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'view' => 'sg-headerpane',
        ),
        1 => 
        array (
          'view' => 'field',
        ),
      ),
      'type' => 'field',
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
     ********************************************************************************/
({plugins:[\'Prettify\'],_placeComponent:function(component){this.$(\'#styleguide\').append(component.$el);}})',
    ),
  ),
  'docs' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        'type' => 'simple',
        0 => 
        array (
          'view' => 'sg-headerpane',
        ),
        1 => 
        array (
          'view' => 'docs',
        ),
      ),
    ),
    'templates' => 
    array (
      'docs' => '{{!
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

}}
<link href="styleguide/assets/css/styleguide.css" rel="stylesheet">
<div id="styleguide" class="main-pane">
</div>
',
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
     ********************************************************************************/
({plugins:[\'Prettify\'],_placeComponent:function(component){this.$(\'#styleguide\').append(component.$el);}})',
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
                      'view' => 'list-headerpane',
                    ),
                    1 => 
                    array (
                      'layout' => 
                      array (
                        'type' => 'filterpanel',
                        'span' => 12,
                        'last_state' => 
                        array (
                          'id' => 'list-filterpanel',
                          'defaults' => 
                          array (
                            'toggle-view' => 'list',
                          ),
                        ),
                        'availableToggles' => 
                        array (
                          0 => 
                          array (
                            'name' => 'list',
                            'icon' => 'icon-table',
                            'label' => 'LBL_LISTVIEW',
                          ),
                          1 => 
                          array (
                            'name' => 'activitystream',
                            'icon' => 'icon-th-list',
                            'label' => 'LBL_ACTIVITY_STREAM',
                          ),
                        ),
                        'components' => 
                        array (
                          0 => 
                          array (
                            'layout' => 'filter',
                            'targetEl' => '.filter',
                            'position' => 'prepend',
                          ),
                          1 => 
                          array (
                            'view' => 'filter-actions',
                            'targetEl' => '.filter-options',
                          ),
                          2 => 
                          array (
                            'view' => 'filter-rows',
                            'targetEl' => '.filter-options',
                          ),
                          3 => 
                          array (
                            'layout' => 'activitystream',
                            'context' => 
                            array (
                              'module' => 'Activities',
                            ),
                          ),
                          4 => 
                          array (
                            'layout' => 'list',
                          ),
                        ),
                      ),
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
                    0 => 
                    array (
                      'layout' => 'dashboard',
                      'context' => 
                      array (
                        'forceNew' => true,
                        'module' => 'Home',
                      ),
                    ),
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
      'type' => 'records',
      'name' => 'base',
      'span' => 12,
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
  '_hash' => '600aefe010e077baf93f55a7c95bac28',
);

