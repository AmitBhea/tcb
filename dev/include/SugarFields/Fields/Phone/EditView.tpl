{*
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

*}
{{capture name=idname assign=idname}}{{sugarvar key='name'}}{{/capture}}
{{if !empty($displayParams.idName)}}
   {{assign var=idname value=$displayParams.idName}}
{{/if}}

{if strlen({{sugarvar key='value' string=true}}) <= 0}
{assign var="value" value={{sugarvar key='default_value' string=true}} }
{else}
{assign var="value" value={{sugarvar key='value' string=true}} }
{/if}  

<input type='text' name='{{$idname}}' id='{{$idname}}' size='{{$displayParams.size|default:30}}' {{if isset($displayParams.maxlength)}}maxlength='{{$displayParams.maxlength}}'{{elseif isset($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$value}' title='{{$vardef.help}}' tabindex='{{$tabindex}}'	{{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}}  class="phone" {{$displayParams.field}}>

