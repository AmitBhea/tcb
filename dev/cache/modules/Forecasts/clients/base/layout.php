<?php
$clientCache['Forecasts']['base']['layout'] = array (
  'config-main' => 
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
({collapseDivId:\'forecast-config-accordion\',timeperiodsTitle:\'\',timeperiodsText:\'\',scenariosTitle:\'\',scenariosText:\'\',rangesTitle:\'\',rangesText:\'\',forecastByTitle:\'\',forecastByText:\'\',wkstColumnsTitle:\'\',wkstColumnsText:\'\',selectedPanel:\'\',events:{\'click .accordion-toggle\':\'onAccordionToggleClicked\'},initialize:function(options){app.view.Layout.prototype.initialize.call(this,options);var appLang=app.lang,forecastBy=app.metadata.getModule(\'Forecasts\',\'config\').forecast_by,forecastByLabels={forecastByModule:appLang.getAppListStrings(\'moduleList\')[forecastBy],forecastByModuleSingular:appLang.getAppListStrings(\'moduleListSingular\')[forecastBy]};this.timeperiodsTitle=appLang.get(\'LBL_FORECASTS_CONFIG_TITLE_TIMEPERIODS\',\'Forecasts\');this.timeperiodsText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_TIMEPERIODS\',\'Forecasts\');this.scenariosTitle=appLang.get(\'LBL_FORECASTS_CONFIG_TITLE_SCENARIOS\',\'Forecasts\');this.scenariosText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_SCENARIOS\',\'Forecasts\',forecastByLabels);this.rangesTitle=appLang.get(\'LBL_FORECASTS_CONFIG_TITLE_RANGES\',\'Forecasts\');this.rangesText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_RANGES\',\'Forecasts\',forecastByLabels);this.forecastByTitle=appLang.get(\'LBL_FORECASTS_CONFIG_HOWTO_TITLE_FORECAST_BY\',\'Forecasts\');this.forecastByText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_FORECAST_BY\',\'Forecasts\');this.wkstColumnsTitle=appLang.get(\'LBL_FORECASTS_CONFIG_TITLE_WORKSHEET_COLUMNS\',\'Forecasts\');this.wkstColumnsText=appLang.get(\'LBL_FORECASTS_CONFIG_HELP_WORKSHEET_COLUMNS\',\'Forecasts\');if(this.context.get(\'model\').get(\'is_setup\')==0){this.context.get(\'model\').set({first_time:1});}},_render:function(){app.view.Layout.prototype._render.call(this);this.$el.addClass(\'accordion\');this.$el.attr(\'id\',this.collapseDivId);this.$(\'.collapse\').collapse({toggle:false,parent:\'#\'+this.collapseDivId});this.selectPanel(_.first(this.meta.components).view);},selectPanel:function(panelName){this.selectedPanel=panelName;this.$el.find(\'#\'+panelName+\'Collapse\').collapse(\'show\');this.onAccordionToggleClicked();},onAccordionToggleClicked:function(evt){var helpId=(evt)?$(evt.currentTarget).data(\'help-id\'):this.selectedPanel,data={};switch(helpId){case\'forecastsConfigTimeperiods\':data.title=this.timeperiodsTitle;data.text=this.timeperiodsText;break;case\'forecastsConfigScenarios\':data.title=this.scenariosTitle;data.text=this.scenariosText;break;case\'forecastsConfigRanges\':data.title=this.rangesTitle;data.text=this.rangesText;break;case\'forecastsConfigForecastBy\':data.title=this.forecastByTitle;data.text=this.forecastByText;break;case\'forecastsConfigWorksheetColumns\':data.title=this.wkstColumnsTitle;data.text=this.wkstColumnsText;break;}
this.context.set({howtoData:data});}})',
    ),
    'meta' => 
    array (
      'type' => 'config-main',
      'name' => 'config-main',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'forecastsConfigTimeperiods',
        ),
        1 => 
        array (
          'view' => 'forecastsConfigRanges',
        ),
        2 => 
        array (
          'view' => 'forecastsConfigScenarios',
        ),
        3 => 
        array (
          'view' => 'forecastsConfigWorksheetColumns',
        ),
      ),
    ),
  ),
  'records' => 
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
({initOptions:undefined,initialize:function(options){this.initOptions=options;var acls=app.user.getAcls().Forecasts,hasAccess=(!_.has(acls,\'access\')||acls.access==\'yes\');if(hasAccess){if(app.utils.checkForecastConfig()){this.syncInitData();}else{this.codeBlockForecasts(\'LBL_FORECASTS_MISSING_STAGE_TITLE\',\'LBL_FORECASTS_MISSING_SALES_STAGE_VALUES\');}}else{this.codeBlockForecasts(\'LBL_FORECASTS_ACLS_NO_ACCESS_TITLE\',\'LBL_FORECASTS_ACLS_NO_ACCESS_MSG\');}},codeBlockForecasts:function(title,msg){var alert=app.alert.show(\'no_access_to_forecasts\',{level:\'error\',autoClose:false,title:app.lang.get(title,"Forecasts")+":",messages:[app.lang.get(msg,"Forecasts")]});alert.getCloseSelector().on(\'click\',function(){alert.getCloseSelector().off();app.router.navigate(\'#Home\',{trigger:true});});},loadData:function(){},bindDataChange:function(){if(!_.isUndefined(this.model)){this.collection.on(\'reset\',function(){var lastCommit=_.first(this.collection.models);var commitDate=undefined;if(lastCommit instanceof Backbone.Model&&lastCommit.has(\'date_modified\')){commitDate=lastCommit.get(\'date_modified\');}
this.context.set({\'currentForecastCommitDate\':commitDate});},this);this.context.on(\'change:selectedUser\',function(model,changed){var update={\'selectedUserId\':changed.id,\'forecastType\':app.utils.getForecastType(changed.isManager,changed.showOpps)}
this.model.set(update);},this);this.model.on(\'change:selectedTimePeriod\',function(model,changed){this.context.set(\'selectedTimePeriod\',changed);},this);this.model.on(\'change\',function(){this.context.set({\'currentForecastCommitDate\':undefined},{silent:true});this.collection.fetch();},this);this.context.on(\'forecasts:worksheet:commit\',function(user,worksheet_type,forecast_totals){this.commitForecast(user,worksheet_type,forecast_totals);},this);}},openConfigDrawer:function(){if(app.drawer._components.length==0){app.router.navigate(\'Forecasts/config\',{replace:true,trigger:true});}},syncInitData:function(options){var callbacks,url;options=options||{};options.success=_.bind(function(model,data,options){app.user.set(data.initData.userData);if(data.initData.forecasts_setup===0){this.openConfigDrawer();}else{this.initForecastsModule(data,options);}},this);var model=this.initOptions.context.get(\'model\');callbacks=app.data.getSyncCallbacks(\'read\',model,options);this.trigger("data:sync:start",\'read\',model,options);url=app.api.buildURL("Forecasts/init",null,null,options.params);app.api.call("read",url,null,callbacks);},initForecastsModule:function(data,options){var ctx=this.initOptions.context;ctx.once(\'change:selectedUser\',this._onceInitSelectedUser,this);ctx.set({currentForecastCommitDate:undefined,selectedTimePeriod:data.defaultSelections.timeperiod_id.id,selectedRanges:data.defaultSelections.ranges},{silent:true});ctx.get(\'model\').set({\'selectedTimePeriod\':data.defaultSelections.timeperiod_id.id},{silent:true});app.utils.getSelectedUsersReportees(app.user.toJSON(),ctx);},_onceInitSelectedUser:function(model,change){app.view.Layout.prototype.initialize.call(this,this.initOptions);this.model.set(\'selectedUserId\',change.id,{silent:true});this.model.set(\'forecastType\',app.utils.getForecastType(change.isManager,change.showOpps));this.collection.sync=_.bind(this.sync,this);app.view.Layout.prototype.loadData.call(this);this.bindDataChange();if(!this.disposed)this.render();},sync:function(method,model,options){var callbacks,url;options=options||{};options.params=options.params||{};var args_filter=[],filter=null;if(this.model.has(\'selectedTimePeriod\')){args_filter.push({"timeperiod_id":this.model.get(\'selectedTimePeriod\')});}
if(this.model.has(\'selectedUserId\')){args_filter.push({"user_id":this.model.get(\'selectedUserId\')});args_filter.push({"forecast_type":this.model.get(\'forecastType\')});}
if(!_.isEmpty(args_filter)){filter={"filter":args_filter};}
options.params.order_by=\'date_entered:DESC\'
options=app.data.parseOptionsForSync(method,model,options);options.success=_.bind(function(model,data,options){if(!this.disposed){this.collection.reset(data);}},this);callbacks=app.data.getSyncCallbacks(method,model,options);this.trigger("data:sync:start",method,model,options);url=app.api.buildURL("Forecasts/filter",null,null,options.params);app.api.call("create",url,filter,callbacks);},commitForecast:function(user,worksheet_type,forecast_totals){var forecast=new this.collection.model(),forecastType=app.utils.getForecastType(user.isManager,user.showOpps),forecastData={};forecastData.commit_type=worksheet_type;forecastData.timeperiod_id=forecast_totals.timeperiod_id||this.model.get(\'selectedTimePeriod\');forecastData.forecast_type=forecastType;forecast.save(forecastData,{success:_.bind(function(model,response){if(!this.disposed){this.collection.fetch();this.context.trigger("forecasts:worksheet:committed",worksheet_type,response);app.alert.show(\'success\',{level:\'success\',autoClose:true,title:app.lang.get("LBL_FORECASTS_WIZARD_SUCCESS_TITLE","Forecasts")+":",messages:[app.lang.get("LBL_FORECASTS_WORKSHEET_COMMIT_SUCCESS","Forecasts")]});}},this),silent:true,alerts:{\'success\':false}});}})',
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
                      'view' => 'list-headerpane',
                    ),
                    1 => 
                    array (
                      'view' => 'info',
                    ),
                    2 => 
                    array (
                      'layout' => 'list',
                      'context' => 
                      array (
                        'module' => 'ForecastManagerWorksheets',
                      ),
                    ),
                    3 => 
                    array (
                      'layout' => 'list',
                      'context' => 
                      array (
                        'module' => 'ForecastWorksheets',
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
                        'module' => 'Forecasts',
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
                    'name' => 'forecastdetails',
                    'label' => 'LBL_DASHLET_FORECAST_NAME',
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
                    'name' => 'forecasts-chart',
                    'label' => 'LBL_DASHLET_FORECAST_NAME',
                  ),
                  'context' => 
                  array (
                    'module' => 'Forecasts',
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
  'config' => 
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
({initialize:function(options){var acls=app.user.getAcls().Forecasts,hasAccess=(!_.has(acls,\'access\')||acls.access==\'yes\'),isSysAdmin=(app.user.get(\'type\')==\'admin\'),isDev=(!_.has(acls,\'developer\')||acls.developer==\'yes\');if(hasAccess&&(isSysAdmin||isDev)){app.view.Layout.prototype.initialize.call(this,options);app.view.Layout.prototype.loadData.call(this);}else{this.codeBlockForecasts(\'LBL_FORECASTS_NO_ACCESS_TO_CFG_TITLE\',\'LBL_FORECASTS_NO_ACCESS_TO_CFG_MSG\');}},codeBlockForecasts:function(title,msg){var alert=app.alert.show(\'no_access_to_forecasts\',{level:\'error\',autoClose:false,title:app.lang.get(title,"Forecasts")+":",messages:[app.lang.get(msg,"Forecasts")]});alert.getCloseSelector().on(\'click\',function(){alert.getCloseSelector().off();app.router.navigate(\'#Home\',{trigger:true});});},loadData:function(){}})',
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
                      'view' => 'forecastsConfigHeaderButtons',
                    ),
                    1 => 
                    array (
                      'layout' => 'config-main',
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
                      'view' => 'forecastsHowto',
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
      'type' => 'config',
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
  '_hash' => 'e31037591b6e8711e6ab2c24e8016fc1',
);

