<?php
$clientCache['Leads']['base']['layout'] = array (
  'convert-main' => 
  array (
    'meta' => 
    array (
      'modules' => 
      array (
        0 => 
        array (
          'module' => 'Contacts',
          'required' => true,
          'duplicateCheckOnStart' => true,
          'fieldMapping' => 
          array (
            'salutation' => 'salutation',
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'title' => 'title',
            'department' => 'department',
            'description' => 'description',
            'team_name' => 'team_name',
            'do_not_call' => 'do_not_call',
            'phone_home' => 'phone_home',
            'phone_mobile' => 'phone_mobile',
            'phone_work' => 'phone_work',
            'phone_fax' => 'phone_fax',
            'primary_address_street' => 'primary_address_street',
            'primary_address_city' => 'primary_address_city',
            'primary_address_state' => 'primary_address_state',
            'primary_address_postalcode' => 'primary_address_postalcode',
            'primary_address_country' => 'primary_address_country',
            'campaign_id' => 'campaign_id',
            'campaign_name' => 'campaign_name',
            'email' => 'email',
          ),
          'hiddenFields' => 
          array (
            0 => 'account_name',
          ),
        ),
        1 => 
        array (
          'module' => 'Accounts',
          'required' => true,
          'duplicateCheckOnStart' => true,
          'duplicateCheckRequiredFields' => 
          array (
            0 => 'name',
          ),
          'contactRelateField' => 'account_name',
          'fieldMapping' => 
          array (
            'name' => 'account_name',
            'team_name' => 'team_name',
            'billing_address_street' => 'primary_address_street',
            'billing_address_city' => 'primary_address_city',
            'billing_address_state' => 'primary_address_state',
            'billing_address_postalcode' => 'primary_address_postalcode',
            'billing_address_country' => 'primary_address_country',
            'shipping_address_street' => 'primary_address_street',
            'shipping_address_city' => 'primary_address_city',
            'shipping_address_state' => 'primary_address_state',
            'shipping_address_postalcode' => 'primary_address_postalcode',
            'shipping_address_country' => 'primary_address_country',
            'campaign_id' => 'campaign_id',
            'campaign_name' => 'campaign_name',
            'email' => 'email',
            'phone_office' => 'phone_work',
            'phone_fax' => 'phone_fax',
          ),
        ),
        2 => 
        array (
          'module' => 'Opportunities',
          'required' => false,
          'duplicateCheckOnStart' => false,
          'duplicateCheckRequiredFields' => 
          array (
            0 => 'account_id',
          ),
          'fieldMapping' => 
          array (
            'name' => 'opportunity_name',
            'phone_work' => 'phone_office',
            'team_name' => 'team_name',
            'campaign_id' => 'campaign_id',
            'campaign_name' => 'campaign_name',
            'lead_source' => 'lead_source',
            'amount' => 'opportunity_amount',
          ),
          'dependentModules' => 
          array (
            'Accounts' => 
            array (
              'fieldMapping' => 
              array (
                'account_id' => 'id',
              ),
            ),
          ),
          'hiddenFields' => 
          array (
            0 => 'account_name',
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
({initialize:function(options){this.convertPanels={};this.associatedModels={};this.dependentModules={};this.noAccessRequiredModules=[];app.view.Layout.prototype.initialize.call(this,options);this.initializePanels(this.meta.modules);this.context.on(\'lead:convert-panel:complete\',this.handlePanelComplete,this);this.context.on(\'lead:convert-panel:reset\',this.handlePanelReset,this);this.context.on(\'lead:convert:save\',this.handleSave,this);this.before(\'render\',this.checkRequiredAccess);},initializePanels:function(modulesMetadata){var moduleNumber=1;_.each(modulesMetadata,function(moduleMeta,key,modulesList){if(!app.acl.hasAccess(\'create\',moduleMeta.module)){if(moduleMeta.required===true){this.noAccessRequiredModules.push(moduleMeta.module);}
delete modulesList[key];return;}
moduleMeta.moduleNumber=moduleNumber++;var view=app.view.createLayout({context:this.context,name:\'convert-panel\',layout:this,meta:moduleMeta,type:\'convert-panel\',platform:this.options.platform});view.$el.addClass(\'accordion-group\');view.$el.data(\'module\',moduleMeta.module);this.addComponent(view);this.convertPanels[moduleMeta.module]=view;if(moduleMeta.dependentModules){this.dependentModules[moduleMeta.module]=moduleMeta.dependentModules;}},this);},checkRequiredAccess:function(){if(this.noAccessRequiredModules.length>0){this.denyUserAccess(this.noAccessRequiredModules);return false;}
return true;},denyUserAccess:function(noAccessRequiredModules){var translatedModuleNames=[];_.each(noAccessRequiredModules,function(module){translatedModuleNames.push(this.getModuleSingular(module));},this);app.alert.show(\'convert_access_denied\',{level:\'error\',messages:app.lang.get(\'LBL_CONVERT_ACCESS_DENIED\',this.module,{requiredModulesMissing:translatedModuleNames.join(\', \')}),autoClose:false});app.drawer.close();},getModuleSingular:function(module){var modulePlural=app.lang.getAppListStrings("moduleList")[module]||module;return(app.lang.getAppListStrings("moduleListSingular")[module]||modulePlural);},_render:function(){app.view.Layout.prototype._render.call(this);this.$el.addClass(\'accordion\');this.$el.attr(\'id\',\'convert-accordion\');this.$(".collapse").collapse({toggle:false,parent:\'#convert-accordion\'});this.$(".collapse").on(\'shown hidden\',_.bind(this.handlePanelCollapseEvent,this));this.context.get(\'leadsModel\').fetch({success:_.bind(function(model){this.context.trigger("lead:convert:populate",model);},this)});},handlePanelCollapseEvent:function(event){if(event.target!==event.currentTarget){return;}
var module=$(event.currentTarget).data(\'module\');this.context.trigger(\'lead:convert:\'+module+\':\'+event.type);},handlePanelComplete:function(module,model){this.associatedModels[module]=model;this.handlePanelUpdate();this.context.trigger(\'lead:convert:\'+module+\':complete\',module,model);},handlePanelReset:function(module){delete this.associatedModels[module];this.handlePanelUpdate();this.context.trigger(\'lead:convert:\'+module+\':reset\',module);},handlePanelUpdate:function(){this.checkDependentModules();this.checkRequired();},checkDependentModules:function(){_.each(this.dependentModules,function(dependencies,dependentModuleName){var isEnabled=_.all(dependencies,function(module,moduleName){return(this.associatedModels[moduleName]);},this);this.context.trigger("lead:convert:"+dependentModuleName+":enable",isEnabled);},this);},checkRequired:function(){var showSave=_.all(this.meta.modules,function(module){if(module.required){if(!this.associatedModels[module.module]){return false;}}
return true;},this);this.context.trigger(\'lead:convert-save:toggle\',showSave);},handleSave:function(){var convertModel,myURL;this.context.trigger(\'lead:convert-save:toggle\',false);app.alert.show(\'processing_convert\',{level:\'process\',title:app.lang.getAppString(\'LBL_SAVING\')});convertModel=new Backbone.Model(_.extend({},{\'modules\':this.associatedModels}));myURL=app.api.buildURL(\'Leads\',\'convert\',{id:this.context.get(\'leadsModel\').id});app.api.call(\'create\',myURL,convertModel,{success:_.bind(this.uploadAssociatedRecordFiles,this),error:_.bind(this.convertError,this)});},uploadAssociatedRecordFiles:function(convertResults){if(this.disposed)return;var modulesToProcess=_.keys(this.associatedModels).length,failureCount=0;var completeFn=_.bind(function(){modulesToProcess--;if(modulesToProcess===0){if(failureCount>0){this.convertWarning();}else{this.convertSuccess();}}},this);_.each(this.associatedModels,function(associatedModel,associatedModule){var moduleResult=_.find(convertResults.modules,function(result){return(associatedModule===result._module);},this);if(moduleResult&&_.isEmpty(associatedModel.get(\'id\'))){associatedModel.set(\'id\',moduleResult.id);app.file.checkFileFieldsAndProcessUpload(this.convertPanels[associatedModule].createView,{success:function(){completeFn();},error:function(){failureCount++;completeFn();}},{deleteIfFails:false},false);}else{completeFn();}},this);},convertSuccess:function(){this.convertComplete(\'success\',\'LBL_CONVERTLEAD_SUCCESS\',true);},convertWarning:function(){this.convertComplete(\'warning\',\'LBL_CONVERTLEAD_FILE_WARN\',true);},convertError:function(){this.convertComplete(\'error\',\'LBL_CONVERTLEAD_ERROR\',false);if(!this.disposed){this.context.trigger(\'lead:convert-save:toggle\',true);}},convertComplete:function(level,message,doClose){var leadsModel=this.context.get(\'leadsModel\');app.alert.dismiss(\'processing_convert\');app.alert.show(\'convert_complete\',{level:level,messages:app.lang.get(message,this.module,{leadName:leadsModel.get(\'first_name\')+\' \'+leadsModel.get(\'last_name\')}),autoClose:(level===\'success\')});if(!this.disposed&&doClose){this.context.trigger(\'lead:convert:exit\');app.drawer.close();app.navigate(this.context,leadsModel,\'record\');}},_dispose:function(){this.$(".collapse").off();app.view.Layout.prototype._dispose.call(this);}})',
    ),
  ),
  'subpanels' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'campaigns',
          ),
          'override_subpanel_list_view' => 'subpanel-for-leads',
        ),
        1 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_LEADS_CONTACTS_1_FROM_CONTACTS_TITLE',
          'context' => 
          array (
            'link' => 'leads_contacts_1',
          ),
          'override_subpanel_list_view' => 'subpanel-for-leads',
        ),
        2 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_LEADS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE',
          'context' => 
          array (
            'link' => 'leads_bhea_events_1',
          ),
        ),
        3 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_LEADS_BHEA_FINANCE_PERFORMANCE_1_FROM_BHEA_FINANCE_PERFORMANCE_TITLE',
          'context' => 
          array (
            'link' => 'leads_bhea_finance_performance_1',
          ),
        ),
      ),
    ),
  ),
  'extra-info' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'view' => 'convert-results',
        ),
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
  'convert-sidebar' => 
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
  'convert-panel' => 
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
({extendsFrom:\'ToggleLayout\',TOGGLE_DUPECHECK:\'dupecheck\',TOGGLE_CREATE:\'create\',availableToggles:{\'dupecheck\':{},\'create\':{}},accordionHeading:\'.accordion-heading\',accordionBody:\'.accordion-body\',initialize:function(options){var convertPanelEvents;this.meta=options.meta;this._setModuleSpecificValues();convertPanelEvents={};convertPanelEvents[\'click .accordion-heading.enabled\']=\'togglePanel\';convertPanelEvents[\'click [name="associate_button"]\']=\'handleAssociateClick\';convertPanelEvents[\'click [name="reset_button"]\']=\'handleResetClick\';this.events=_.extend({},this.events,convertPanelEvents);this.plugins=_.union(this.plugins||[],[\'FindDuplicates\']);this.currentState={complete:false,dupeSelected:false};app.view.invokeParent(this,{type:\'layout\',name:\'toggle\',method:\'initialize\',args:[options]});this.addSubComponents();this.context.on(\'lead:convert:populate\',this.handlePopulateRecords,this);this.context.on(\'lead:convert:\'+this.meta.module+\':enable\',this.handleEnablePanel,this);this.context.on(\'lead:convert:\'+this.meta.moduleNumber+\':open\',this.handleOpenRequest,this);this.context.on(\'lead:convert:exit\',this.turnOffUnsavedChanges,this);this.addDependencyListeners();if(this.meta.moduleNumber===1){this.once(\'lead:convert-dupecheck:complete\',this.openPanel,this);}},_setModuleSpecificValues:function(){var module=this.meta.module;this.meta.modulePlural=app.lang.getAppListStrings("moduleList")[module]||module;this.meta.moduleSingular=app.lang.getAppListStrings("moduleListSingular")[module]||this.meta.modulePlural;var moduleMetadata=app.metadata.getModule(module);this.meta.enableDuplicateCheck=(moduleMetadata&&moduleMetadata.dupCheckEnabled)||this.meta.enableDuplicateCheck||false;this.meta.duplicateCheckOnStart=this.meta.enableDuplicateCheck&&this.meta.duplicateCheckOnStart;},getContainer:function(component){if(component.name===\'convert-panel-header\'){return this.$(\'[data-container="header"]\');}else{return this.$(\'[data-container="inner"]\');}},addSubComponents:function(){this.addHeaderComponent();this.addDupeCheckComponent();this.addRecordCreateComponent();},addHeaderComponent:function(){var header=app.view.createView({context:this.context,name:\'convert-panel-header\',layout:this,meta:this.meta});this.addComponent(header);},addDupeCheckComponent:function(){var leadsModel=this.context.get(\'leadsModel\'),context=this.context.getChildContext({\'module\':this.meta.module,\'forceNew\':true,\'skipFetch\':true,\'dupelisttype\':\'dupecheck-list-select\',\'collection\':this.createDuplicateCollection(leadsModel,this.meta.module)});context.prepare();this.duplicateView=app.view.createLayout({context:context,name:this.TOGGLE_DUPECHECK,layout:this,module:context.module});this.duplicateView.context.on(\'change:selection_model\',this.handleDupeSelectedChange,this);this.duplicateView.collection.once(\'reset\',this.dupeCheckComplete,this);this.addComponent(this.duplicateView);},addRecordCreateComponent:function(){var context=this.context.getChildContext({\'module\':this.meta.module,forceNew:true,create:true});context.prepare();this.createView=app.view.createView({context:context,name:this.TOGGLE_CREATE,module:context.module,layout:this});this.createView.meta=this.removeFieldsFromMeta(this.createView.meta,this.meta);this.createView.enableHeaderButtons=false;this.addComponent(this.createView);},addDependencyListeners:function(){_.each(this.meta.dependentModules,function(details,module){this.context.on(\'lead:convert:\'+module+\':complete\',this.updateFromDependentModuleChanges,this);this.context.on(\'lead:convert:\'+module+\':reset\',this.resetFromDependentModuleChanges,this);},this);},dupeCheckComplete:function(){this.currentState.dupeCount=this.duplicateView.collection.length;if(this.currentState.dupeCount!==0){this.showComponent(this.TOGGLE_DUPECHECK);}else{this.showComponent(this.TOGGLE_CREATE);}
this.trigger(\'lead:convert-dupecheck:complete\',this.currentState.dupeCount);},removeFieldsFromMeta:function(meta,moduleMeta){_.each(meta.panels,function(panel){_.each(panel.fields,function(field,index,list){if(_.isString(field)){field={name:field};}
if(_.contains(moduleMeta.hiddenFields,field.name||field)){field.readonly=true;field.required=false;list[index]=field;}});},this);return meta;},togglePanel:function(){this.$(this.accordionBody).collapse(\'toggle\');},handleOpenRequest:function(){if(this.currentState.complete||!this.isPanelEnabled()){this.requestNextPanelOpen();}else{this.openPanel();}},isPanelEnabled:function(){return this.$(this.accordionHeading).hasClass(\'enabled\');},openPanel:function(){if(this.isPanelEnabled()){this.$(this.accordionBody).collapse(\'show\');}},closePanel:function(){this.$(this.accordionBody).collapse(\'hide\');},handleAssociateClick:function(event){if(!$(event.currentTarget).hasClass(\'disabled\')){if(this.currentToggle===this.TOGGLE_CREATE){this.runCreateValidation();}else{this.markPanelComplete(this.duplicateView.context.get(\'selection_model\'));}}
event.stopPropagation();},runCreateValidation:function(){var view=this.createView,model=view.model;model.doValidate(view.getFields(view.module),_.bind(function(isValid){if(isValid){this.markPanelComplete(model);}},this));},markPanelComplete:function(model){var displayMessage=(this.currentToggle===this.TOGGLE_CREATE)?\'LBL_CONVERT_MODULE_ASSOCIATED_NEW_SUCCESS\':\'LBL_CONVERT_MODULE_ASSOCIATED_SUCCESS\';this.currentState.associatedName=this.getDisplayName(model);this.currentState.complete=true;this.context.trigger(\'lead:convert-panel:complete\',this.meta.module,model);this.trigger(\'lead:convert-panel:complete\',this.currentState.associatedName);app.alert.show(\'panel_associate_complete\',{level:\'success\',title:app.lang.get(\'LBL_CONVERT_MODULE_ASSOCIATED\',this.module,{moduleName:this.meta.moduleSingular}),messages:app.lang.get(displayMessage,this.module,{moduleNameLower:this.meta.moduleSingular.toLowerCase(),recordName:this.currentState.associatedName}),autoClose:true});this.$(this.accordionBody).addClass(\'disabled\');this.closePanel();this.requestNextPanelOpen();},requestNextPanelOpen:function(){this.context.trigger(\'lead:convert:\'+(this.meta.moduleNumber+1)+\':open\');},getDisplayName:function(model){var moduleFields=app.metadata.getModule(this.meta.module).fields,displayName=\'\';if(model.has(\'name\')){displayName=model.get(\'name\');}else if(moduleFields.name&&moduleFields.name[\'db_concat_fields\']){_.each(moduleFields.name[\'db_concat_fields\'],function(field){if(model.has(field)){displayName+=model.get(field)+\' \';}});}
return displayName.trim();},handleResetClick:function(event){this.resetPanel();this.openPanel();event.stopPropagation();},resetPanel:function(){this.$(this.accordionBody).removeClass(\'disabled\');this.currentState.complete=false;this.context.trigger(\'lead:convert-panel:reset\',this.meta.module);this.trigger(\'lead:convert-panel:reset\');},handleDupeSelectedChange:function(){this.currentState.dupeSelected=this.duplicateView.context.has(\'selection_model\');this.trigger(\'lead:convert:duplicate-selection:change\');},triggerDuplicateCheck:function(){if(this.shouldDupeCheckBePerformed(this.createView.model)){this.trigger(\'lead:convert-dupecheck:pending\');this.duplicateView.context.trigger("dupecheck:fetch:fire",this.createView.model,{showAlerts:true});}else{this.dupeCheckComplete();}},shouldDupeCheckBePerformed:function(model){var performDuplicateCheck=this.meta.enableDuplicateCheck;if(this.meta.duplicateCheckRequiredFields){_.each(this.meta.duplicateCheckRequiredFields,function(field){if(_.isEmpty(model.get(field))){performDuplicateCheck=false;}});}
return performDuplicateCheck;},handlePopulateRecords:function(model){this.populateRecords(model,this.meta.fieldMapping);if(this.meta.duplicateCheckOnStart){this.triggerDuplicateCheck();}},populateRecords:function(model,fieldMapping){var hasChanged=false;_.each(fieldMapping,function(sourceField,targetField){if(model.has(sourceField)&&model.get(sourceField)!==this.createView.model.get(targetField)){this.createView.model.set(targetField,model.get(sourceField));hasChanged=true;}},this);return hasChanged;},handleEnablePanel:function(isEnabled){var $header=this.$(this.accordionHeading);if(isEnabled){if(!this.currentState.complete){this.triggerDuplicateCheck();}
$header.addClass(\'enabled\');}else{$header.removeClass(\'enabled\');}},updateFromDependentModuleChanges:function(moduleName,model){var dependencies=this.meta.dependentModules,modelChanged=false;if(dependencies&&dependencies[moduleName]&&dependencies[moduleName].fieldMapping){modelChanged=this.populateRecords(model,dependencies[moduleName].fieldMapping);if(modelChanged){this.triggerDuplicateCheck();}}},resetFromDependentModuleChanges:function(moduleName){var dependencies=this.meta.dependentModules;if(dependencies&&dependencies[moduleName]){if(this.currentState.dupeCount){this.duplicateView.collection.reset();}
this.resetPanel();}},turnOffUnsavedChanges:function(){this.createView.model.changed={};},_dispose:function(){this.duplicateView.context.off(null,null,this);this.duplicateView.collection.off(null,null,this);app.view.invokeParent(this,{type:\'layout\',name:\'toggle\',method:\'_dispose\'});}})',
    ),
    'templates' => 
    array (
      'convert-panel' => '{{!
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
    <span data-container="header"></span>
    <div id="collapse{{this.meta.module}}" data-module="{{this.meta.module}}" class="accordion-body collapse">
        <div class="accordion-inner" data-container="inner"></div>
    </div>
',
    ),
  ),
  'convert' => 
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
                      'view' => 'convert-headerpane',
                    ),
                    1 => 
                    array (
                      'layout' => 'convert-main',
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
                      'layout' => 'convert-sidebar',
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
  '_hash' => 'b7e0b4b62923d48cdefb36c398374e21',
);

