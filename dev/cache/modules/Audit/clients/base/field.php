<?php
$clientCache['Audit']['base']['field'] = array (
  'fieldtype' => 
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
({format:function(value){if(this.context&&this.context.parent){var parentModel=this.context.parent.get(\'model\'),field=parentModel.fields[value];if(field){value=app.lang.get(field.label||field.vname,parentModel.module);}}
return value;}})',
    ),
  ),
  '_hash' => 'abf13f3945727897e4169802e4c00a7f',
);

