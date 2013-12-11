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

<script>
SUGAR.util.doWhen(
	"SUGAR && SUGAR.mySugar && SUGAR.mySugar.sugarCharts",
	function(){ldelim}
		var customChart = true;
		var css = new Array();
		var chartConfig = new Array();
		{foreach from=$css key=selector item=property}
		css["{$selector}"] = '{$property}';
		{/foreach}
		{foreach from=$config key=name item=value}
		chartConfig["{$name}"] = '{$value}';
		{/foreach}
    	SUGAR.mySugar.sugarCharts.addToChartsArray('{$chartId}','{$filename}',css,chartConfig,activePage);
		{rdelim}
	);
</script>