<?php
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

require_once("include/Expressions/Expression/Boolean/BooleanExpression.php");

/**
 * <b>or(boolean1, ...)</b><br>
 * Returns true if any parameters are true.<br/>
 * ex: <i>or(false, true)</i> = true
 */
class OrExpression extends BooleanExpression {
	/**
	 * Returns itself when evaluating.
	 */
	function evaluate() {

		$params = $this->getParameters();
		
		if (!is_array($params))
		{
			$params = array($params);	
		}

		foreach ( $params as $param ) 
		{
			if ( $param->evaluate() == AbstractExpression::$TRUE )
			{
				return AbstractExpression::$TRUE;
			}
		}
		return AbstractExpression::$FALSE;
	}
	
	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
			var params = this.getParameters();		
			for ( var i = 0; i < params.length; i++ ) {
				if ( params[i].evaluate() == SUGAR.expressions.Expression.TRUE )
					return SUGAR.expressions.Expression.TRUE;
			}
			return SUGAR.expressions.Expression.FALSE;
EOQ;
	}
	
	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "or";
	}
	
	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {
	}
}
?>