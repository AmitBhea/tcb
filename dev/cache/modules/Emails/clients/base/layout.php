<?php
$clientCache['Emails']['base']['layout'] = array (
  'compose-addressbook-list' => 
  array (
    'meta' => 
    array (
      'type' => 'compose-addressbook-list',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'compose-addressbook-list',
        ),
        1 => 
        array (
          'view' => 'compose-addressbook-list-bottom',
        ),
      ),
      'span' => 12,
    ),
  ),
  'compose-addressbook' => 
  array (
    'controller' => 
    array (
      'base' => '/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */
({
    /**
     * @class ComposeAddressbookLayout
     * @extends Layout
     */
    initialize: function(options) {
        app.view.Layout.prototype.initialize.call(this, options);
        this.context.set(\'allowed_modules\', [\'Accounts\', \'Contacts\', \'Leads\', \'Prospects\', \'Users\']);
        this.context.on(\'compose:addressbook:search\', this.search, this);
    },
    /**
     * Adds the set of modules and term that should be used to search for recipients.
     *
     * @param {Array} modules
     * @param {String} term
     */
    search: function(modules, term) {
        var options = {
            query:       term,
            module_list: modules
        };
        this.collection.resetPagination();
        // the context load state must be reset so that fetch will not be skipped
        this.context.resetLoadFlag(false);
        this.context.set(\'skipFetch\', false);
        this.loadData(options, true);
    },
    /**
     * Override to inject options into the load data flow and perform the search.
     *
     * @param {Object} options
     * @param {Boolean} setFields
     */
    loadData: function(options, setFields) {
        var allowedModules  = this.context.get(\'allowed_modules\');
        options             = options || {};
        options.module_list = options.module_list || [];
        // attempt to turn any non-array of modules into an array
        if (!_.isArray(options.module_list)) {
            // gracefully handle a comma-separated string of modules
            options.module_list = options.module_list.split(\',\');
        }
        // only fetch from the approved modules
        if (!_.isEmpty(options.module_list)) {
            options.module_list = _.intersection(allowedModules, options.module_list);
        }
        // search all approved modules if no modules are in option.module_list
        options.module_list = (!_.isEmpty(options.module_list)) ? options.module_list : allowedModules;
        app.view.Layout.prototype.loadData.call(this, options, setFields);
    }
})
',
    ),
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
                      'view' => 'compose-addressbook-headerpane',
                    ),
                    1 => 
                    array (
                      'view' => 'compose-addressbook-recipientscontainer',
                    ),
                    2 => 
                    array (
                      'view' => 'compose-addressbook-filter',
                    ),
                    3 => 
                    array (
                      'layout' => 'compose-addressbook-list',
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
      'type' => 'compose-addressbook',
      'name' => 'base',
      'span' => 12,
    ),
  ),
  'compose-documents' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 'selection-list',
          'context' => 
          array (
            'module' => 'Documents',
          ),
        ),
      ),
      'type' => 'simple',
      'span' => 12,
    ),
  ),
  'records' => 
  array (
    'meta' => 
    array (
      'name' => 'bwc',
      'type' => 'bwc',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'bwc',
        ),
      ),
    ),
  ),
  'compose' => 
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
                      'view' => 'compose',
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
  '_hash' => '6bdea30044f560a63ad271c290da71f5',
);

