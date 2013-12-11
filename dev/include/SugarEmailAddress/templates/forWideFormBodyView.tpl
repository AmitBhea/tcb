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
<tr>
    <td scope="row">{$app_strings.LBL_EMAIL_ADDRESSES}: </td>
</tr>

<script type="text/javascript" src="{sugar_getjspath file='include/SugarEmailAddress/SugarEmailAddress.js'}"></script>
<script type="text/javascript">
	var module = '{$module}';
</script>
<tr>
<td colspan="4">
<table style="border-spacing: 0pt;">
	<tr>
		<td  valign="top" NOWRAP>
			<table cellpadding="0" cellspacing="0" border="0" id="{$module}emailAddressesTable{$index}" class="emailaddresses">
				<tbody id="targetBody"></tbody>
				<tr>
					<td>
						<input type=hidden name='emailAddressWidget' value=1>
						<span class="id-ff multiple ownline">
						<button class='button' type='button' id="{$module}{$index}_email_widget_add"
onClick="javascript:SUGAR.EmailAddressWidget.instances.{$module}{$index}.addEmailAddress('{$module}emailAddressesTable{$index}','','');" 
value='{$app_strings.LBL_ADD_BUTTON}'>{sugar_getimage name="id-ff-add" alt=$app_strings.LBL_ID_FF_ADD ext=".png" other_attributes=''}</button>
						</span>					

					</td>
					<td scope="row" NOWRAP>
					    &nbsp;
					</td>
					<td scope="row" NOWRAP>
						{$app_strings.LBL_EMAIL_PRIMARY}
					</td>
					{if $useReplyTo == true}
					<td scope="row" NOWRAP>
						{$app_strings.LBL_EMAIL_REPLY_TO}
					</td>
					{/if}
					{if $useOptOut == true}
					<td scope="row" NOWRAP>
						{$app_strings.LBL_EMAIL_OPT_OUT}
					</td>
					{/if}
					{if $useInvalid == true}
					<td scope="row" NOWRAP>
						{$app_strings.LBL_EMAIL_INVALID}
					</td>
					{/if}
				</tr>
			</table>
		</td>
	</tr>
</table>
<input type="hidden" name="useEmailWidget" value="true">
</td>
</tr>

<script type="text/javascript" language="javascript">
    var table = YAHOO.util.Dom.get("{$module}emailAddressesTable{$index}");
    var eaw = SUGAR.EmailAddressWidget.instances.{$module}{$index} = new SUGAR.EmailAddressWidget("{$module}");
    eaw.emailView = '{$emailView}';
    eaw.emailIsRequired = "{$required}";
    var addDefaultAddress = '{$addDefaultAddress}';
    var prefillEmailAddress = '{$prefillEmailAddresses}';
    var prefillData = {$prefillData};
    if(prefillEmailAddress == 'true') {ldelim}
        eaw.prefillEmailAddresses('{$module}emailAddressesTable{$index}', prefillData);
	{rdelim} else if(addDefaultAddress == 'true') {ldelim}
        eaw.addEmailAddress('{$module}emailAddressesTable{$index}');
	{rdelim}
</script>