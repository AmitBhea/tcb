<?php
$clientCache['RevenueLineItems']['base']['field'] = array (
  'editablelistbutton' => 
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
({extendsFrom:\'EditablelistbuttonField\',getCustomSaveOptions:function(options){var origSuccess=options.success;return{success:_.bind(function(){if(_.isFunction(origSuccess)){origSuccess.apply(this,arguments);}
if(!_.isEmpty(this.model.get(\'quote_id\'))){app.alert.show(\'save_rli_quote_notice\',{level:\'info\',messages:app.lang.get(\'SAVE_RLI_QUOTE_NOTICE\',\'RevenueLineItems\'),autoClose:true});}},this)};}});',
    ),
  ),
  'rowaction' => 
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
({extendsFrom:"RowactionField",initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'DisableDelete\');app.view.invokeParent(this,{type:\'field\',name:\'rowaction\',method:\'initialize\',args:[options]});this.context.on("record:deleted",function(){this.deleteCommitWarning();},this);},deleteCommitWarning:function(){var message=null
if(this.model.get("commit_stage")=="include"){message=app.lang.get("WARNING_DELETED_RECORD_RECOMMIT","RevenueLineItems");app.alert.show("included_delete_warning",{level:"warning",messages:message,onLinkClick:function(){app.alert.dismissAll();}});}
return message;}})',
    ),
  ),
  '_hash' => '60ec207d4131954144beb7346cdac648',
);

