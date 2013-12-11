<?php
$clientCache['Notes']['base']['field'] = array (
  'file' => 
  array (
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
{{#each value}}
    {{#eq mimeType \'image\'}}
        <div class="file-field">
            <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="{{url}}" target="_blank">{{name}}</a>
        </div>
        <a href="{{url}}" target="_blank"><img src="{{url}}"></a>
    {{else}}
        <div class="file-field">
            <a class="ellipsis_inline" data-placement="bottom" title="{{name}}" href="javascript:void(0);" data-url="{{url}}" data-action="download">{{name}}</a>
        </div>
    {{/eq}}
{{/each}}
',
    ),
  ),
  '_hash' => 'ba5f39593fe348b0253ac5ea401c0fe7',
);

