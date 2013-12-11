<?php
$clientCache['Leads']['base']['field'] = array (
  'convertbutton' => 
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
({extendsFrom:\'RowactionField\',initialize:function(options){app.view.invokeParent(this,{type:\'field\',name:\'rowaction\',method:\'initialize\',args:[options]});this.type=\'rowaction\';},_render:function(){var convertMeta=app.metadata.getLayout(\'Leads\',\'convert-main\');var missingRequiredAccess=_.some(convertMeta.modules,function(moduleMeta){return(moduleMeta.required===true&&!app.acl.hasAccess(\'create\',moduleMeta.module));},this);if(this.model.get(\'converted\')||missingRequiredAccess){this.hide();}else{app.view.invokeParent(this,{type:\'field\',name:\'rowaction\',method:\'_render\'});}},rowActionSelect:function(){var model=app.data.createBean(this.model.module);model.set(app.utils.deepCopy(this.model.attributes));app.drawer.open({layout:"convert",context:{forceNew:true,skipFetch:true,module:\'Leads\',leadsModel:model}});},bindDataChange:function(){if(this.model){this.model.on("change",this.render,this);}}})',
    ),
  ),
  'badge' => 
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
({showNoData:false,initialize:function(options){options.def.readonly=true;app.view.Field.prototype.initialize.call(this,options);}})',
    ),
    'templates' => 
    array (
      'detail' => '{{!
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
{{#if this.model.id}}
{{#eq this.model.attributes.converted "0"}}<span class="label">{{str "LBL_UNCONVERTED" this.module}}</span>{{/eq}}
{{#eq this.model.attributes.converted "1"}}<span class="label label-success">{{str "LBL_CONVERTED" this.module}}</span>{{/eq}}
{{/if}}
',
    ),
  ),
  '_hash' => '01b4b02e0628711140caf5ee1549e3d3',
);

