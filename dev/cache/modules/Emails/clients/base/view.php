<?php
$clientCache['Emails']['base']['view'] = array (
  'compose-addressbook-headerpane' => 
  array (
    'meta' => 
    array (
      'template' => 'headerpane',
      'title' => 'LBL_COMPOSE_ADDRESSBOOK',
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
        ),
        1 => 
        array (
          'name' => 'done_button',
          'type' => 'button',
          'label' => 'LBL_DONE_BUTTON_LABEL',
          'css_class' => 'btn-primary',
        ),
        2 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
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


({
    extendsFrom: "HeaderpaneView",

    events: {
        "click [name=done_button]":   "_done",
        "click [name=cancel_button]": "_cancel"
    },

     /**
      * The user clicked the Done button so trigger an event to add selected recipients from the address book to the
      * target field and then close the drawer.
      *
      * @private
      */
     _done: function() {
         var recipients = this.model.get("compose_addressbook_selected_recipients");

         if (recipients) {
             app.drawer.close(recipients);
         } else {
             this._cancel();
         }
     },

    /**
     * Close the drawer.
     *
     * @private
     */
    _cancel: function() {
        app.drawer.close();
    }
})
',
    ),
  ),
  'compose-addressbook-list' => 
  array (
    'meta' => 
    array (
      'template' => 'list',
      'selection' => 
      array (
        'type' => 'multi',
        'actions' => 
        array (
        ),
        'disable_select_all_alert' => true,
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL',
              'type' => 'email',
              'sortable' => true,
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => '_module',
              'label' => 'LBL_MODULE',
              'sortable' => false,
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'rowactions' => 
      array (
        'css_class' => 'pull-right',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'css_class' => 'btn',
            'tooltip' => 'LBL_PREVIEW',
            'event' => 'list:preview:fire',
            'icon' => 'icon-eye-open',
            'acl_action' => 'view',
          ),
        ),
      ),
    ),
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
     * @class View.ComposeAddressbookListView
     * @alias SUGAR.App.view.views.ComposeAddressbookListView
     * @extends View.FlexListView
     */
    extendsFrom: \'FlexListView\',
    plugins: [\'ListColumnEllipsis\', \'ListRemoveLinks\'],
    /**
     * Removes the event listeners that were added to the mass collection.
     */
    unbindData: function() {
        var massCollection = this.context.get(\'mass_collection\');
        if (massCollection) {
            massCollection.off(null, null, this);
        }
        app.view.invokeParent(this, {type: \'view\', name: \'flex-list\', method: \'unbindData\'});
    },
    /**
     * Override to inject field names into the request when fetching data for the list.
     *
     * @param module
     * @returns {Array}
     */
    getFieldNames: function(module) {
        // id and module always get returned, so name and email just need to be added
        return [\'name\', \'email\'];
    },
    /**
     * Override to hook in additional triggers as the mass collection is updated (rows are checked on/off in
     * the actionmenu field). Also attempts to pre-check any rows when the list is refreshed and selected recipients
     * are found within the new result set (this behavior occurs when the user searches the address book).
     *
     * @private
     */
    _render: function() {
        app.view.invokeParent(this, {type: \'view\', name: \'flex-list\', method: \'_render\'});
        var massCollection              = this.context.get(\'mass_collection\'),
            selectedRecipientsFieldName = \'compose_addressbook_selected_recipients\';
        if (massCollection) {
            // get rid of any old event listeners on the mass collection
            massCollection.off(null, null, this);
            // add a new recipient to the selected recipients field as recipients are added to the mass collection
            massCollection.on(\'add\', function(model) {
                var existingRecipients = this.model.get(selectedRecipientsFieldName);
                if (model.id && existingRecipients instanceof Backbone.Collection) {
                    existingRecipients.add(model);
                }
            }, this);
            // remove a recipient from the selected recipients field as recipients are removed from the mass collection
            massCollection.on(\'remove\', function(model) {
                var existingRecipients = this.model.get(selectedRecipientsFieldName);
                if (model.id && existingRecipients instanceof Backbone.Collection) {
                    existingRecipients.remove(model);
                }
            }, this);
            // remove from the selected recipients field all recipients found in the current collection
            massCollection.on(\'reset\', function() {
                var existingRecipients = this.model.get(selectedRecipientsFieldName);
                if (existingRecipients instanceof Backbone.Collection) {
                    existingRecipients.remove(this.collection.models);
                }
            }, this);
            // find any currently selected recipients and add them to mass_collection so the checkboxes on the
            // corresponding rows are pre-selected
            var existingRecipients = this.model.get(selectedRecipientsFieldName);
            if (existingRecipients instanceof Backbone.Collection && existingRecipients.length > 0) {
                // only bother with adding, to mass_collection, recipients that are visible in the list view
                var recipientsToPreselect = existingRecipients.filter(_.bind(function(recipient) {
                    return (this.collection.where({id: recipient.get(\'id\')}).length > 0);
                }, this));
                if (recipientsToPreselect.length > 0) {
                    massCollection.add(recipientsToPreselect);
                }
            }
        }
    },
    /**
     * Override to force translation of the module names as columns are added to the list.
     *
     * @param field
     * @private
     */
    _renderField: function(field) {
        if (field.name == \'_module\') {
            field.model.set(field.name, app.lang.get(\'LBL_MODULE_NAME\', field.model.get(field.name)));
        }
        app.view.invokeParent(this, {type: \'view\', name: \'flex-list\', method: \'_renderField\', args: [field]});
    }
})
',
    ),
  ),
  'subpanel-for-queues' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
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
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'target_record_key' => 'case_id',
              'target_module' => 'Cases',
              'label' => 'LBL_LIST_CASE',
              'enabled' => true,
              'default' => true,
              'name' => 'case_name',
            ),
            2 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
          ),
        ),
      ),
    ),
  ),
  'compose-addressbook-filter' => 
  array (
    'templates' => 
    array (
      'compose-addressbook-filter' => '{{!
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
<form class="form-search-related" action="">
    <div class="control-group">
        <div class="filter controls">
            <div class="filter-view search">
                <div>
                    <input type="hidden" class="select2 search-filter" data-placeholder="{{str "LBL_MODULE"}}">
                    <div class="choice-filter"></div>
                    <input type="text" size=" " class="search-name" placeholder="{{str "LBL_BASIC_SEARCH"}}&hellip;">
                </div>
            </div>
        </div>
    </div>
</form>
',
    ),
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
     * @class View.ComposeAddressbookFilterView
     * @alias SUGAR.App.view.views.ComposeAddressbookFilterView
     * @extends View
     */
    _moduleFilterList: [],
    _allModulesId:     \'All\',
    _selectedModule:   null,
    _currentSearch:    \'\',
    events: {
        \'keyup .search-name\':        \'throttledSearch\',
        \'paste .search-name\':        \'throttledSearch\',
        \'click .add-on.icon-remove\': \'clearInput\'
    },
    /**
     * Converts the input field to a select2 field and adds the module filter for refining the search.
     *
     * @private
     */
    _render: function() {
        app.view.View.prototype._render.call(this);
        this.buildModuleFilterList();
        this.buildFilter();
    },
    /**
     * Builds the list of allowed modules to provide the data to the select2 field.
     */
    buildModuleFilterList: function() {
        var allowedModules     = this.context.get(\'allowed_modules\');
        this._moduleFilterList = [
            {id: this._allModulesId, text: app.lang.get(\'LBL_TABGROUP_ALL\')}
        ];
        _.each(allowedModules, function(module) {
            this._moduleFilterList.push({id: module, text: app.lang.get(\'LBL_MODULE_NAME\', module)});
        }, this);
    },
    /**
     * Converts the input field to a select2 field and initializes the selected module.
     */
    buildFilter: function() {
        var $filter = this.getFilterField();
        if ($filter.length > 0) {
            $filter.select2({
                data:                    this._moduleFilterList,
                allowClear:              false,
                multiple:                false,
                minimumResultsForSearch: -1,
                formatSelection:         _.bind(this.formatModuleSelection, this),
                formatResult:            _.bind(this.formatModuleChoice, this),
                dropdownCss:             {width: \'auto\'},
                dropdownCssClass:        \'search-filter-dropdown\',
                initSelection:           _.bind(this.initSelection, this),
                escapeMarkup:            function(m) { return m; },
                width:                   \'off\'
            });
            $filter.off(\'change\');
            $filter.on(\'change\', _.bind(this.handleModuleSelection, this));
            this._selectedModule = this._selectedModule || this._allModulesId;
            $filter.select2(\'val\', this._selectedModule);
        }
    },
    /**
     * Gets the filter DOM field.
     *
     * @returns {Object} DOM Element
     */
    getFilterField: function() {
        return this.$(\'input.select2\');
    },
    /**
     * Gets the module filter DOM field.
     *
     * @returns {Object} DOM Element
     */
    getModuleFilter: function() {
        return this.$(\'div.choice-filter\');
    },
    /**
     * Destroy the select2 plugin.
     */
    unbind: function() {
        $filter = this.getFilterField();
        if ($filter.length > 0) {
            $filter.off();
            $filter.select2(\'destroy\');
        }
        app.view.invokeParent(this, {type: \'view\', name: \'flex-list\', method: \'unbind\'});
    },
    /**
     * Performs a search once the user has entered a term.
     */
    throttledSearch: _.debounce(function(evt) {
        var newSearch = this.$(evt.currentTarget).val();
        if (this._currentSearch !== newSearch) {
            this._currentSearch = newSearch;
            this.applyFilter();
        }
    }, 400),
    /**
     * Initialize the module selection with the value for all modules.
     *
     * @param el
     * @param callback
     */
    initSelection: function(el, callback) {
        if (el.is(this.getFilterField())) {
            var module = _.findWhere(this._moduleFilterList, {id: el.val()});
            callback({id: module.id, text: module.text});
        }
    },
    /**
     * Format the selected module to display its name.
     *
     * @param {Object} item
     * @return {String}
     */
    formatModuleSelection: function(item) {
        // update the text for the selected module
        this.getModuleFilter().html(item.text);
        return \'<span class="select2-choice-type">\'
            + app.lang.get(\'LBL_MODULE\')
            + \'<i class="icon-caret-down"></i></span>\';
    },
    /**
     * Format the choices in the module select box.
     *
     * @param {Object} option
     * @return {String}
     */
    formatModuleChoice: function (option) {
        return \'<div><span class="select2-match"></span>\' + option.text + \'</div>\';
    },
    /**
     * Handler for when the module filter dropdown value changes, either via a click or manually calling jQuery\'s
     * .trigger("change") event.
     *
     * @param {Object} evt jQuery Change Event Object
     * @param {string} overrideVal (optional) ID passed in when manually changing the filter dropdown value
     */
    handleModuleSelection: function(evt, overrideVal) {
        var module = overrideVal || evt.val || this._selectedModule || this._allModulesId;
        // only perform a search if the module is in the approved list
        if (!_.isEmpty(_.findWhere(this._moduleFilterList, {id: module}))) {
            this._selectedModule = module;
            this.getFilterField().select2(\'val\', this._selectedModule);
            this.getModuleFilter().css(\'cursor\', \'pointer\');
            this.applyFilter();
        }
    },
    /**
     * Triggers an event that makes a call to search the address book and filter the data set.
     */
    applyFilter: function() {
        var searchAllModules = (this._selectedModule !== this._allModulesId),
            // pass an empty array when all modules are being searched
            module = searchAllModules ? this._selectedModule : [],
            // determine if the filter is dirty so the "clearQuickSearchIcon" can be added/removed appropriately
            isDirty = (!_.isEmpty(this._currentSearch) || searchAllModules);
        this._toggleClearQuickSearchIcon(isDirty);
        this.context.trigger(\'compose:addressbook:search\', module, this._currentSearch);
    },
    /**
     * Append or remove an icon to the quicksearch input so the user can clear the search easily.
     * @param {Boolean} addIt TRUE if you want to add it, FALSE to remove
     */
    _toggleClearQuickSearchIcon: function(addIt) {
        if (addIt && !this.$(\'.add-on.icon-remove\')[0]) {
            this.$(\'.filter-view.search\').append(\'<i class="add-on icon-remove"></i>\');
        } else if (!addIt) {
            this.$(\'.add-on.icon-remove\').remove();
        }
    },
    /**
     * Clear input
     */
    clearInput: function() {
        var $filter          = this.getFilterField();
        this._currentSearch  = \'\';
        this._selectedModule = this._allModulesId;
        this.$(\'.search-name\').val(this._currentSearch);
        if ($filter.length > 0) {
            $filter.select2(\'val\', this._selectedModule);
        }
        this.applyFilter();
    }
})
',
    ),
  ),
  'subpanel-for-users' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
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
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            2 => 
            array (
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT',
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
            ),
            3 => 
            array (
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
            4 => 
            array (
              'enabled' => true,
              'default' => true,
              'name' => 'date_entered',
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-contacthistory' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
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
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            2 => 
            array (
              'label' => 'LBL_DATE_CREATED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_entered',
            ),
            3 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
            4 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'history' => 
  array (
    'templates' => 
    array (
      'records' => '{{!
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
<div class="tab-pane active">
    {{#if collection.length}}
        <ul class="unstyled listed">
            {{#each collection.models}}
                <li>
                    <p>
                    {{#notEq attributes.type "inbound"}}
                        <div class="pull-right"><span class="label">{{getDDLabel attributes.type "dom_email_types"}}</span></div>
                    {{/notEq}}
                    {{#if attributes.assigned_user_id}}
                        <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}" class="pull-left avatar42" data-title="{{getFieldValue this "assigned_user_name"}}">
                            <img src="{{getFieldValue this "picture_url"}}" alt="{{getFieldValue this "assigned_user_name"}}">
                        </a>
                    {{else}}
                        <span class="icon-stack pull-left">
                            <i class="icon-user icon-stack-base"></i>
                            <i class="icon-question-sign icon-light"></i>
                        </span>
                    {{/if}}
                    <a href="#{{buildRoute model=this action="detail"}}">
                    {{#if this.attributes.name}}
                        {{getFieldValue this "name"}}
                    {{else}}
                        {{str \'LBL_NO_SUBJECT\' this.module}}
                    {{/if}}
                    </a>
                    </p>
                    <span class="details">
                        {{#if attributes.assigned_user_id}}
                            <a href="#{{buildRoute module="Employees" id=attributes.assigned_user_id action="detail"}}">
                                {{getFieldValue this "assigned_user_name"}}
                            </a>
                        {{else}}
                            {{str "LBL_UNASSIGNED" this.module}}
                        {{/if}}
                        &#44;&nbsp;
                        <date class="date">{{timeago attributes.record_date "TPL_TABBED_DASHLET_TIME_RELATIVE"}}</date>
                     </span>
                </li>
            {{/each}}
            {{#notEq ../collection.next_offset "-1"}}
                <li><a class="more" data-action="show-more">{{str "LBL_SHOW_MORE_MODULE" this.module}}</a></li>
            {{/notEq}}
        </ul>
    {{else}}
        <div class="block-footer">{{#if ../collection.dataFetched}}{{str "LBL_NO_DATA_AVAILABLE" this.module}}{{else}}{{str "LBL_LOADING" this.module}}{{/if}}</div>
    {{/if}}
</div>
',
    ),
  ),
  'compose-addressbook-recipientscontainer' => 
  array (
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

({
    extendsFrom:         "RecordView",
    enableHeaderButtons: false,
    enableHeaderPane:    false,
    events:              {},

    initialize: function(options) {
        app.view.invokeParent(this, {type: \'view\', name: \'record\', method: \'initialize\', args: [options]});
        this.model.isNotEmpty = true;
    },

    /**
     * Override to remove unwanted functionality.
     *
     * @param prefill
     */
    setupDuplicateFields: function(prefill) {},

    /**
     * Override to remove unwanted functionality.
     */
    delegateButtonEvents: function() {},

    /**
     * Override to remove unwanted functionality.
     */
    initButtons: function() {
        this.buttons = {};
    },

    /**
     * Override to remove unwanted functionality.
     */
    showPreviousNextBtnGroup: function() {},

    /**
     * Override to remove unwanted functionality.
     */
    bindDataChange: function() {},

    /**
     * Override to remove unwanted functionality.
     *
     * @param isEdit
     */
    toggleHeaderLabels: function(isEdit) {},

    /**
     * Override to remove unwanted functionality.
     *
     * @param field
     */
    toggleLabelByField: function (field) {},

    /**
     * Override to remove unwanted functionality.
     *
     * @param e
     * @param field
     */
    handleKeyDown: function(e, field) {},

    /**
     * Override to remove unwanted functionality.
     *
     * @param state
     */
    setButtonStates: function(state) {},

    /**
     * Override to remove unwanted functionality.
     *
     * @param title
     */
    setTitle: function(title) {}
})
',
    ),
    'meta' => 
    array (
      'template' => 'record',
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'selected_recipients',
          'columns' => 1,
          'labels' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'compose_addressbook_selected_recipients',
              'type' => 'recipients',
              'label' => 'LBL_SELECTED_RECIPIENTS',
              'css_class_container' => 'controls-one btn-fit',
              'readonly' => true,
              'span' => 12,
            ),
          ),
        ),
      ),
    ),
  ),
  'compose-addressbook-list-bottom' => 
  array (
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

({
    extendsFrom: "ListBottomView"
})
',
    ),
    'meta' => 
    array (
      'template' => 'list-bottom',
      'showMoreLabel' => 'LBL_SHOW_MORE_RECIPIENTS',
    ),
  ),
  'subpanel-for-contacts' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
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
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
              'name' => 'status',
            ),
            2 => 
            array (
              'label' => 'LBL_DATE_CREATED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_entered',
            ),
            3 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
            4 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'compose-senderoptions' => 
  array (
    'templates' => 
    array (
      'compose-senderoptions' => '{{!
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
<div class="compose-sender-options">
{{#if showCC }}
<a href="javascript:void(0)" data-ccfield="cc_addresses" class="cc-option">{{str "LBL_ADD_CC" this.module}}</a>
{{/if}}
{{#if showSeperator}}
<span class="cc-seperator"> | </span>
{{/if}}
{{#if showBCC}}
<a href="javascript:void(0)" data-ccfield="bcc_addresses" class="bcc-option">{{str "LBL_ADD_BCC" this.module}}</a>
{{/if}}
</div>
',
    ),
  ),
  'compose' => 
  array (
    'meta' => 
    array (
      'template' => 'record',
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'name' => 'cancel_button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
        ),
        1 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'main_dropdown',
          'primary' => true,
          'buttons' => 
          array (
            0 => 
            array (
              'name' => 'send_button',
              'type' => 'rowaction',
              'label' => 'LBL_SEND_BUTTON_LABEL',
            ),
            1 => 
            array (
              'name' => 'draft_button',
              'type' => 'rowaction',
              'label' => 'LBL_SAVE_AS_DRAFT_BUTTON_LABEL',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_body',
          'label' => 'LBL_PANEL_2',
          'columns' => 1,
          'labels' => true,
          'labelsOnTop' => false,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'email_config',
              'label' => 'LBL_FROM',
              'type' => 'sender',
              'span' => 12,
              'css_class' => 'inherit-width',
              'label_css_class' => 'begin-fieldgroup',
              'endpoint' => 
              array (
                'module' => 'OutboundEmailConfiguration',
                'action' => 'list',
              ),
            ),
            1 => 
            array (
              'name' => 'to_addresses',
              'type' => 'recipients',
              'label' => 'LBL_TO_ADDRS',
              'span' => 12,
              'cell_css_class' => 'controls-one btn-fit',
              'required' => true,
            ),
            2 => 
            array (
              'name' => 'cc_addresses',
              'type' => 'recipients',
              'label' => 'LBL_CC',
              'span' => 12,
              'cell_css_class' => 'controls-one btn-fit',
            ),
            3 => 
            array (
              'name' => 'bcc_addresses',
              'type' => 'recipients',
              'label' => 'LBL_BCC',
              'span' => 12,
              'cell_css_class' => 'controls-one btn-fit',
            ),
            4 => 
            array (
              'name' => 'subject',
              'label' => 'LBL_SUBJECT',
              'span' => 12,
              'label_css_class' => 'end-fieldgroup',
            ),
            5 => 
            array (
              'name' => 'attachments',
              'label' => 'LBL_ATTACHMENTS',
              'type' => 'attachments',
              'uploadEvent' => 'actionbar:upload_new_button:clicked',
            ),
            6 => 
            array (
              'name' => 'actionbar',
              'type' => 'compose-actionbar',
              'span' => 12,
              'dismiss_label' => true,
              'buttonSections' => 
              array (
                0 => 
                array (
                  'name' => 'attachments_dropdown',
                  'css_class' => 'btn-group',
                  'type' => 'actiondropdown',
                  'buttons' => 
                  array (
                    0 => 
                    array (
                      'name' => 'upload_new_button',
                      'type' => 'button',
                      'icon' => 'icon-paper-clip',
                      'label' => 'LBL_ATTACHMENT',
                    ),
                    1 => 
                    array (
                      'name' => 'attach_sugardoc_button',
                      'type' => 'rowaction',
                      'label' => 'LBL_ATTACH_SUGAR_DOC',
                    ),
                  ),
                ),
                1 => 
                array (
                  'name' => 'other_actions',
                  'css_class' => 'pull-right',
                  'buttons' => 
                  array (
                    0 => 
                    array (
                      'name' => 'signature_button',
                      'type' => 'button',
                      'icon' => 'icon-edit',
                      'label' => 'LBL_EMAIL_SIGNATURES',
                    ),
                    1 => 
                    array (
                      'name' => 'template_button',
                      'type' => 'button',
                      'icon' => 'icon-file-alt',
                      'label' => 'LBL_EMAIL_TEMPLATES',
                    ),
                  ),
                ),
              ),
            ),
            7 => 
            array (
              'name' => 'html_body',
              'type' => 'htmleditable_tinymce',
              'dismiss_label' => true,
              'span' => 12,
              'tinyConfig' => 
              array (
                'script_url' => 'include/javascript/tiny_mce/tiny_mce.js',
                'height' => '100%',
                'width' => '100%',
                'theme' => 'advanced',
                'skin' => 'sugar7',
                'plugins' => 'style,paste,inlinepopups',
                'entity_encoding' => 'raw',
                'forced_root_block' => false,
                'theme_advanced_buttons1' => 'code,separator,bold,italic,underline,strikethrough,separator,bullist,numlist,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator,fontsizeselect',
                'theme_advanced_toolbar_location' => 'top',
                'theme_advanced_toolbar_align' => 'left',
                'theme_advanced_statusbar_location' => 'none',
                'theme_advanced_resizing' => false,
                'schema' => 'html5',
                'template_external_list_url' => 'lists/template_list.js',
                'external_link_list_url' => 'lists/link_list.js',
                'external_image_list_url' => 'lists/image_list.js',
                'media_external_list_url' => 'lists/media_list.js',
                'theme_advanced_path' => false,
                'theme_advanced_source_editor_width' => 500,
                'theme_advanced_source_editor_height' => 400,
                'inlinepopups_skin' => 'sugar7modal',
                'relative_urls' => false,
                'remove_script_host' => false,
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_hidden',
          'hide' => true,
          'columns' => 1,
          'labelsOnTop' => false,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'type' => 'teamset',
              'name' => 'team_name',
              'span' => 12,
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_RELATED_TO',
              'type' => 'parent',
              'name' => 'parent_name',
              'options' => 'parent_type_display',
              'span' => 12,
            ),
          ),
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

/**
 * View for the email composition layout that contains the HTML editor.
 */
({
    extendsFrom: \'RecordView\',

    _lastSelectedSignature: null,
    ATTACH_TYPE_SUGAR_DOCUMENT: \'document\',
    ATTACH_TYPE_TEMPLATE: \'template\',
    MIN_EDITOR_HEIGHT: 300,
    EDITOR_RESIZE_PADDING: 5,

    initialize: function(options) {
        _.bindAll(this);
        app.view.invokeParent(this, {type: \'view\', name: \'record\', method: \'initialize\', args:[options]});
        this.events = _.extend({}, this.events, {
            \'click .cc-option\': \'showSenderOptionField\',
            \'click .bcc-option\': \'showSenderOptionField\',
            \'click [name=draft_button]\': \'saveAsDraft\',
            \'click [name=send_button]\': \'send\',
            \'click [name=cancel_button]\': \'cancel\'
        });
        this.context.on(\'actionbar:template_button:clicked\', this.launchTemplateDrawer, this);
        this.context.on(\'actionbar:attach_sugardoc_button:clicked\', this.launchDocumentDrawer, this);
        this.context.on("actionbar:signature_button:clicked", this.launchSignatureDrawer, this);
        this.context.on(\'attachments:updated\', this.toggleAttachmentVisibility, this);
        this.context.on(\'tinymce:oninit\', this.handleTinyMceInit, this);
        this.on(\'more-less:toggled\', this.handleMoreLessToggled, this);
        app.drawer.on(\'drawer:resize\', this.resizeEditor, this);

        this._lastSelectedSignature = app.user.getPreference("signature_default");
    },

    _render: function () {
        var toAddressesField;

        app.view.invokeParent(this, {type: \'view\', name: \'record\', method: \'_render\'});
        if (this.createMode) {
            this.setTitle(app.lang.get(\'LBL_COMPOSEEMAIL\', this.module));
        }

        if (this.model.isNotEmpty) {
            var prepopulateValues = this.context.get("prepopulate");
            if (!_.isEmpty(prepopulateValues)) {
                this.prepopulate(prepopulateValues);
            }

            this.renderSenderOptions();

            if (this.model.isNew()) {
                this._updateEditorWithSignature(this._lastSelectedSignature);
            }
        }

        toAddressesField = this.getField(\'to_addresses\');
        if (toAddressesField) {
            toAddressesField.on(\'render\', _.bind(function(){
                this.setRecipientContentBefore();
            }, this));
        }
    },

    /**
     * Prepopulate fields on the email compose screen that are passed in on the context when opening this view
     *
     * @param values
     */
    prepopulate: function(values) {
        var self = this;
        _.defer(function() {
            _.each(values, function(value, fieldName) {
                switch(fieldName) {
                    case \'related\':
                        self.populateRelated(value);
                        break;
                    default:
                        self.model.set(fieldName, value);
                }
            });
        });
    },

    /**
     * Populate the parent_name (type: parent) with the related record passed in
     *
     * @param relatedModel
     */
    populateRelated: function(relatedModel) {
        var setParent = _.bind(function(model) {
            model.value = model.get(\'name\');
            this.getField(\'parent_name\').setValue(model);
        }, this);

        if (!_.isEmpty(relatedModel.get(\'id\')) && !_.isEmpty(relatedModel.get(\'name\'))) {
            setParent(relatedModel);
        } else if (!_.isEmpty(relatedModel.get(\'id\'))) {
            relatedModel.fetch({
                showAlerts: false,
                success: function(relatedModel) {
                    setParent(relatedModel);
                },
                fields: [\'name\']
            });
        }
    },

    /**
     * Enable/disable the page action dropdown menu based on whether email is sendable
     * @param disabled
     */
    setMainButtonsDisabled: function(disabled) {
        this.getField(\'main_dropdown\').setDisabled(disabled);
    },

    /**
     * Check if CC or BCC fields have values - if not, hide the fields and inject a link to show it
     */
    renderSenderOptions: function() {
        var showCCLink = false,
            showBCCLink = false,
            toCC = this.model.get(\'cc_addresses\') || [],
            toBCC = this.model.get(\'bcc_addresses\') || [];

        if (toCC.length == 0) {
            this.hideField(\'cc_addresses\');
            showCCLink = true;
        }

        if (toBCC.length == 0) {
            this.hideField(\'bcc_addresses\');
            showBCCLink = true;
        }

        this.toggleSenderOptions(\'to_addresses\', showCCLink, showBCCLink);
    },

    /**
     * Run the sender option template to toggle whether CC or BCC show links are injected
     *
     * @param container
     * @param showCCLink
     * @param showBCCLink
     */
    toggleSenderOptions: function(container, showCCLink, showBCCLink) {
        var field = this.getField(container),
            ccField,
            senderOptionTemplate;

        if (field) {
            ccField = field.$el.closest(\'.row-fluid.panel_body\');
            senderOptionTemplate = app.template.getView("compose-senderoptions", this.module);

            $(senderOptionTemplate({
                \'module\' : this.module,
                \'showCC\': showCCLink,
                \'showBCC\': showBCCLink,
                \'showSeperator\': showCCLink && showBCCLink
            })).insertAfter(ccField.find(\'div span.normal\'));
        }
    },

    /**
     * Event Handler for showing the CC or BCC options on the page.
     *
     * @param evt click event
     */
    showSenderOptionField: function(evt) {
        var ccOption = $(evt.target),
            fieldName = ccOption.data(\'ccfield\'),
            field = this.getField(fieldName),
            ccSeperator = this.$(\'.compose-sender-options .cc-seperator\');

        ccOption.addClass(\'hide\');
        ccSeperator.toggleClass(\'hide\', true);

        field.$el.closest(\'.row-fluid.panel_body\').removeClass(\'hide\');

        this.setRecipientContentBefore();

        //check to see if both fields are hidden then hide the whole thing
        if (this.$(\'.cc-option\').hasClass(\'hide\') && this.$(\'.bcc-option\').hasClass(\'hide\')){
            this.$(\'.compose-sender-options\').addClass(\'hide\');
        }

        this.resizeEditor();
    },

    /**
     * Creates virtual block on to_address select2 ul to wrap pills
     *
     * @param fieldName name of the field to hide
     */
    setRecipientContentBefore: function() {
        var toAddressesField = this.getField(\'to_addresses\');
        if (toAddressesField) {
            toAddressesField.setContentBefore(this.$(\'.compose-sender-options a\').not(\'.hide\').text());
        }
    },

    /**
     * Hides a field section on the form
     *
     * @param fieldName name of the field to hide
     */
    hideField: function(fieldName) {
        var field = this.getField(fieldName);
        if (field) {
            field.$el.closest(\'.row-fluid.panel_body\').addClass(\'hide\');
        }
    },

    /**
     * Cancel and close the drawer
     */
    cancel: function() {
        app.drawer.close();
    },

    /**
     * Get the attachments from the model and format for the API
     *
     * @returns array of attachments or empty array if none found
     */
    getAttachmentsForApi: function() {
        var attachments = this.model.get(\'attachments\') || [];

        if (!_.isArray(attachments)) {
            attachments = [attachments];
        }

        return attachments;
    },

    /**
     * Get the individual related object fields from the model and format for the API
     *
     * @returns API related argument as array with appropriate fields set
     */
    getRelatedForApi: function() {
        var related = {};
        var id   = this.model.get(\'parent_id\');
        var type;

        if (!_.isUndefined(id)) {
            id = id.toString();
            if (id.length > 0) {
                related[\'id\'] = id;
                type = this.model.get(\'parent_type\');
                if (!_.isUndefined(type)) {
                    type = type.toString();
                }
                related.type = type;
            }
        }

        return related;
    },

    /**
     * Get the team information from the model and format for the API
     *
     * @returns API teams argument as array with appropriate fields set
     */
    getTeamsForApi: function() {
        var teamName = this.model.get(\'team_name\') || [];
        var teams = {};
        teams.others = [];

        if (!_.isArray(teamName)) {
            teamName = [teamName];
        }

        _.each(teamName, function(team) {
            if (team.primary) {
                teams.primary = team.id.toString();
            } else if (!_.isUndefined(team.id)) {
                teams.others.push(team.id.toString());
            }
        }, this);

        if (teams.others.length == 0) {
            delete teams.others;
        }

        return teams;
    },

    /**
     * Build a backbone model that will be sent to the Mail API
     */
    initializeSendEmailModel: function() {
        var sendModel = new Backbone.Model(_.extend({}, this.model.attributes, {
            to_addresses: this.model.get(\'to_addresses\'),
            cc_addresses: this.model.get(\'cc_addresses\'),
            bcc_addresses: this.model.get(\'bcc_addresses\'),
            attachments: this.getAttachmentsForApi(),
            related: this.getRelatedForApi(),
            teams: this.getTeamsForApi()
        }));
        return sendModel;
    },

    /**
     * Save the email as a draft for later sending
     */
    saveAsDraft: function() {
        this.saveModel(
            \'draft\',
            app.lang.get(\'LBL_DRAFT_SAVING\', this.module),
            app.lang.get(\'LBL_DRAFT_SAVED\', this.module),
            app.lang.get(\'LBL_ERROR_SAVING_DRAFT\', this.module)
        );
    },

    /**
     * Send the email immediately or warn if user did not provide subject or body
     */
    send: function() {
        var sendEmail = _.bind(function() {
            this.saveModel(
                \'ready\',
                app.lang.get(\'LBL_EMAIL_SENDING\', this.module),
                app.lang.get(\'LBL_EMAIL_SENT\', this.module),
                app.lang.get(\'LBL_ERROR_SENDING_EMAIL\', this.module)
            );
        }, this);

        if (!this.isFieldPopulated(\'to_addresses\') && !this.isFieldPopulated(\'cc_addresses\') && !this.isFieldPopulated(\'bcc_addresses\')) {
            this.model.trigger(\'error:validation:to_addresses\');
            app.alert.show(\'send_error\', {
                level: \'error\',
                messages: \'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS\'
            });
        } else if (!this.isFieldPopulated(\'subject\') && !this.isFieldPopulated(\'html_body\')) {
            app.alert.show(\'send_confirmation\', {
                level: \'confirmation\',
                messages: app.lang.get(\'LBL_NO_SUBJECT_NO_BODY_SEND_ANYWAYS\', this.module),
                onConfirm: sendEmail
            });
        } else if (!this.isFieldPopulated(\'subject\')) {
            app.alert.show(\'send_confirmation\', {
                level: \'confirmation\',
                messages: app.lang.get(\'LBL_SEND_ANYWAYS\', this.module),
                onConfirm: sendEmail
            });
        } else if (!this.isFieldPopulated(\'html_body\')) {
            app.alert.show(\'send_confirmation\', {
                level: \'confirmation\',
                messages: app.lang.get(\'LBL_NO_BODY_SEND_ANYWAYS\', this.module),
                onConfirm: sendEmail
            });
        } else {
            sendEmail();
        }
    },

    /**
     * Build the backbone model to be sent to the Mail API with the appropriate status
     * Also display the appropriate alerts to give user indication of what is happening.
     *
     * @param status (draft or ready)
     * @param pendingMessage message to display while Mail API is being called
     * @param successMessage message to display when a successful Mail API response has been received
     * @param errorMessage message to display when Mail API call fails
     */
    saveModel: function(status, pendingMessage, successMessage, errorMessage) {
        var myURL,
            sendModel = this.initializeSendEmailModel();

        this.setMainButtonsDisabled(true);
        app.alert.show(\'mail_call_status\', {level: \'process\', title: pendingMessage});

        sendModel.set(\'status\', status);
        myURL = app.api.buildURL(\'Mail\');
        app.api.call(\'create\', myURL, sendModel, {
            success: function() {
                app.alert.dismiss(\'mail_call_status\');
                app.alert.show(\'mail_call_status\', {autoClose: true, level: \'success\', messages: successMessage});
                app.drawer.close();
            },
            error: function(error) {
                var msg = {autoClose: false, level: \'error\'};
                if (error && _.isString(error.message)) {
                    msg.messages = error.message;
                }
                app.alert.dismiss(\'mail_call_status\');
                app.alert.show(\'mail_call_status\', msg);
            },
            complete:_.bind(function() {
                if (!this.disposed) {
                    this.setMainButtonsDisabled(false);
                }
            }, this)
        });
    },

    /**
     * Is this field populated?
     * @param fieldName
     * @return {Boolean}
     */
    isFieldPopulated: function(fieldName) {
        return ($.trim(this.model.get(fieldName)) !== \'\');
    },

    /**
     * Open the drawer with the EmailTemplates selection list layout. The callback should take the data passed to it
     * and replace the existing editor contents with the selected template.
     */
    launchTemplateDrawer: function() {
        app.drawer.open({
                layout:\'selection-list\',
                context:{
                    module:\'EmailTemplates\'
                }
            },
            this.templateDrawerCallback
        );
    },

    /**
     * Receives the selected template to insert and begins the process of confirming the operation and inserting the
     * template into the editor.
     *
     * @param model
     */
    templateDrawerCallback: function(model) {
        if (model) {
            var emailTemplate = app.data.createBean(\'EmailTemplates\', { id: model.id });
            emailTemplate.fetch({
                success: this.confirmTemplate,
                error: _.bind(function(error) {
                    this._showServerError(error);
                }, this)
            });
        }
    },

    /**
     * Presents the user with a confirmation prompt indicating that inserting the template will replace all content
     * in the editor. If the user confirms "yes" then the template will inserted.
     *
     * @param template
     */
    confirmTemplate: function(template) {
        if (this.disposed === true) return; //if view is already disposed, bail out
        app.alert.show(\'delete_confirmation\', {
            level:\'confirmation\',
            messages:app.lang.get(\'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG\', this.module),
            onConfirm:_.bind(function() {
                this.insertTemplate(template);
            }, this)
        });
    },

    /**
     * Inserts the template into the editor.
     *
     * @param template
     */
    insertTemplate: function(template) {
        var subject,
            notes;

        if (_.isObject(template)) {
            subject = template.get(\'subject\');

            if (subject) {
                this.model.set(\'subject\', subject);
            }

            //TODO: May need to move over replaces special characters.
            if (template.get(\'text_only\') === 1) {
                this.model.set("html_body", template.get("body"));
            } else {
                this.model.set("html_body", template.get("body_html"));
            }

            notes = app.data.createBeanCollection("Notes");

            notes.fetch({
                \'filter\':{
                    "filter":[
                        {"parent_id":{"$equals":template.id}}
                    ]
                },
                success:_.bind(function(data) {
                    if (this.disposed === true) return; //if view is already disposed, bail out
                    if (!_.isEmpty(data.models)) {
                        this.insertTemplateAttachments(data.models);
                    }
                }, this),
                error: _.bind(function(error) {
                    this._showServerError(error);
                }, this)
            });

            // currently adds the html signature even when the template is text-only
            this._updateEditorWithSignature(this._lastSelectedSignature);
        }
    },

    /**
     * Inserts attachments associated with the template by triggering an "add" event for each attachment to add to the
     * attachments field.
     *
     * @param attachments
     */
    insertTemplateAttachments: function(attachments) {
        this.context.trigger("attachments:remove-by-tag", \'template\');
        _.each(attachments, function(attachment) {
            var filename = attachment.get(\'filename\');
            this.context.trigger("attachment:add", {
                id: attachment.id,
                name: filename,
                nameForDisplay: filename,
                tag: \'template\',
                type: this.ATTACH_TYPE_TEMPLATE
            });
        }, this);
    },

    /**
     * Open the drawer with the SugarDocuments attachment selection list layout. The callback should take the data
     * passed to it and add the document as an attachment.
     */
    launchDocumentDrawer: function() {
        app.drawer.open({
                layout: \'selection-list\',
                context: {module: \'Documents\'}
            },
            this.documentDrawerCallback);
    },

    /**
     * Fetches the selected SugarDocument using its ID and triggers an "add" event to add the attachment to the
     * attachments field.
     *
     * @param model
     */
    documentDrawerCallback: function(model) {

        if (model) {
            var sugarDocument = app.data.createBean(\'Documents\', { id: model.id });
            sugarDocument.fetch({
                success:_.bind(function (model) {
                    if (this.disposed === true) return; //if view is already disposed, bail out
                    this.context.trigger("attachment:add", {
                        id:model.id,
                        name:model.get(\'filename\'),
                        nameForDisplay:model.get(\'filename\'),
                        type: this.ATTACH_TYPE_SUGAR_DOCUMENT
                    });
                }, this),
                error: _.bind(function(error) {
                    this._showServerError(error);
                }, this)
            });
        }
    },

    /**
     * Hide attachment field row if no attachments, show when added
     *
     * @param attachments
     */
    toggleAttachmentVisibility: function(attachments) {
        var $row = this.$(\'.attachments\').closest(\'.row-fluid\');
        if (attachments.length > 0) {
            $row.removeClass(\'hidden\');
            $row.addClass(\'single\');
        } else {
            $row.addClass(\'hidden\');
            $row.removeClass(\'single\');
        }
        this.resizeEditor();
    },

    /**
     * Open the drawer with the signature selection layout. The callback should take the data passed to it and insert
     * the signature in the correct place.
     *
     * @private
     */
    launchSignatureDrawer: function() {
        app.drawer.open(
            {
                layout: "selection-list",
                context: {
                    module: \'UserSignatures\'
                }
            },
            this._updateEditorWithSignature
        );
    },

    /**
     * Fetches the signature content using its ID and updates the editor with the content.
     *
     * @param model
     */
    _updateEditorWithSignature: function(model) {
        if (model && model.id) {
            var signature = app.data.createBean(\'UserSignatures\', { id: model.id });

            signature.fetch({
                success:_.bind(function (model) {
                    if (this.disposed === true) return; //if view is already disposed, bail out
                    if (this._insertSignature(model)) {
                        this._lastSelectedSignature = model;
                    }
                }, this),
                error: _.bind(function(error) {
                    this._showServerError(error);
                }, this)
            });
        }
    },

    /**
     * Inserts the signature into the editor.
     *
     * @param signature
     * @return {Boolean}
     * @private
     */
    _insertSignature: function(signature) {
        if (_.isObject(signature) && signature.get(\'signature_html\')) {
            var signatureContent          = this._formatSignature(signature.get(\'signature_html\')),
                emailBody                 = this.model.get("html_body") || "",
                signatureOpenTag          = \'<br class="signature-begin" />\',
                signatureCloseTag         = \'<br class="signature-end" />\',
                signatureOpenTagForRegex  = \'(<br\\ class=[\\\'"]signature\\-begin[\\\'"].*?\\/?>)\',
                signatureCloseTagForRegex = \'(<br\\ class=[\\\'"]signature\\-end[\\\'"].*?\\/?>)\',
                signatureOpenTagMatches   = emailBody.match(new RegExp(signatureOpenTagForRegex, "gi")),
                signatureCloseTagMatches  = emailBody.match(new RegExp(signatureCloseTagForRegex, "gi")),
                regex                     = new RegExp(signatureOpenTagForRegex + ".*?" + signatureCloseTagForRegex, "gi");

            if (signatureOpenTagMatches && !signatureCloseTagMatches) {
                // there is a signature, but no close tag; so the signature runs from open tag until EOF
                emailBody = this._insertSignatureTag(emailBody, signatureCloseTag, false); // append the close tag
            } else if (!signatureOpenTagMatches && signatureCloseTagMatches) {
                // there is a signature, but no open tag; so the signature runs from BOF until close tag
                emailBody = this._insertSignatureTag(emailBody, signatureOpenTag, true); // prepend the open tag
            } else if (!signatureOpenTagMatches && !signatureCloseTagMatches) {
                // there is no signature, so add the tag to the correct location
                emailBody = this._insertSignatureTag(
                    emailBody,
                    signatureOpenTag + signatureCloseTag, // insert both tags as one
                    (app.user.getPreference("signature_prepend") == "true"));
            }

            this.model.set("html_body", emailBody.replace(regex, "$1" + signatureContent + "$2"));

            return true;
        }

        return false;
    },

    /**
     * Inserts a tag into the editor to surround the signature so the signature can be identified again.
     *
     * @param body
     * @param tag
     * @param prepend
     * @return {String}
     * @private
     */
    _insertSignatureTag: function(body, tag, prepend) {
        var preSignature  = "",
            postSignature = "";

        prepend = prepend || false;

        if (prepend) {
            var bodyOpenTag    = "<body>",
                bodyOpenTagLoc = body.indexOf(bodyOpenTag);

            if (bodyOpenTagLoc > -1) {
                preSignature  = body.substr(0, bodyOpenTagLoc + bodyOpenTag.length);
                postSignature = body.substr(bodyOpenTagLoc + bodyOpenTag.length, body.length);
            } else {
                postSignature = body;
            }
        } else {
            var bodyCloseTag    = "</body>",
                bodyCloseTagLoc = body.indexOf(bodyCloseTag);

            if (bodyCloseTagLoc > -1) {
                preSignature  = body.substr(0, bodyCloseTagLoc);
                postSignature = body.substr(bodyCloseTagLoc, body.length);
            } else {
                preSignature = body;
            }
        }

        return preSignature + tag + postSignature;
    },

    /**
     * Formats HTML signatures to replace select HTML-entities with their true characters.
     *
     * @param signature
     */
    _formatSignature: function(signature) {
        signature = signature.replace(/&lt;/gi, "<");
        signature = signature.replace(/&gt;/gi, ">");

        return signature;
    },

    /**
     * Show a generic alert for server errors resulting from custom API calls during Email Compose workflows. Logs
     * the error message for system administrators as well.
     *
     * @param error
     * @private
     */
    _showServerError: function(error) {
        app.alert.show("server-error", {
            level: "error",
            messages: "ERR_GENERIC_SERVER_ERROR",
            autoClose: false
        });
        app.error.handleHttpError(error);
    },

    /**
     * When toggling to show/hide hidden panel, resize editor accordingly
     */
    handleMoreLessToggled: function() {
        this.resizeEditor();
    },

    /**
     * When TinyMCE has been completely initialized, go ahead and resize the editor
     */
    handleTinyMceInit: function() {
        this.resizeEditor();
    },

    _dispose: function() {
        if (app.drawer) {
            app.drawer.off(null, null, this);
        }
        app.view.invokeParent(this, {type: \'view\', name: \'record\', method: \'_dispose\'});
    },

    /**
     * Resize the html editor based on height of the drawer it is in
     *
     * @param drawerHeight current height of the drawer or height the drawer will be after animations
     */
    resizeEditor: function(drawerHeight) {
        var $editor, headerHeight, recordHeight, showHideHeight, diffHeight, editorHeight, newEditorHeight;

        $editor = this.$(\'.mceLayout .mceIframeContainer iframe\');
        //if editor not already rendered, cannot resize
        if ($editor.length === 0) {
            return;
        }

        drawerHeight = drawerHeight || app.drawer.getHeight();
        headerHeight = this.$(\'.headerpane\').outerHeight(true);
        recordHeight = this.$(\'.record\').outerHeight(true);
        showHideHeight = this.$(\'.show-hide-toggle\').outerHeight(true);
        editorHeight = $editor.height();

        //calculate the space left to fill - subtracting padding to prevent scrollbar
        diffHeight = drawerHeight - headerHeight - recordHeight - showHideHeight - this.EDITOR_RESIZE_PADDING;

        //add the space left to fill to the current height of the editor to get a new height
        newEditorHeight = editorHeight + diffHeight;

        //maintain min height
        if (newEditorHeight < this.MIN_EDITOR_HEIGHT) {
            newEditorHeight = this.MIN_EDITOR_HEIGHT;
        }

        //set the new height for the editor
        $editor.height(newEditorHeight);
    }
})
',
    ),
  ),
  'subpanel-list' => 
  array (
    'meta' => 
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
              'label' => 'LBL_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
            ),
            1 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
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
  'record' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_RECORD_HEADER',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'width' => 42,
              'height' => 42,
              'dismiss_label' => true,
              'readonly' => true,
            ),
            1 => 'name',
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
              'readonly' => true,
              'dismiss_label' => true,
            ),
            3 => 
            array (
              'name' => 'follow',
              'label' => 'LBL_FOLLOW',
              'type' => 'follow',
              'readonly' => true,
              'dismiss_label' => true,
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'assigned_user_name',
            1 => 'team_name',
          ),
        ),
      ),
    ),
  ),
  'list' => 
  array (
    'meta' => 
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
            ),
            1 => 
            array (
              'name' => 'team_name',
              'label' => 'LBL_TEAM',
              'width' => 9,
              'default' => true,
              'enabled' => true,
            ),
            2 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO_NAME',
              'width' => 9,
              'default' => true,
              'enabled' => true,
              'link' => true,
            ),
            3 => 
            array (
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
              'readonly' => true,
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
  'massupdate' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'Update',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
        1 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-invisible cancel_button',
          'icon' => 'icon-remove',
          'primary' => false,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => '0afd0246cf094e479a86147606a07318',
);

