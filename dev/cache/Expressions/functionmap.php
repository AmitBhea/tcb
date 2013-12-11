<?php
$FUNCTION_MAP = array(
			'dayofweek' => array(
						'class'	=>	'DayOfWeekExpression',
						'src'	=>	'include/Expressions/Expression/Date/DayOfWeekExpression.php',
			),
			'monthofyear' => array(
						'class'	=>	'MonthOfYearExpression',
						'src'	=>	'include/Expressions/Expression/Date/MonthOfYearExpression.php',
			),
			'daysUntil' => array(
						'class'	=>	'DaysUntilExpression',
						'src'	=>	'include/Expressions/Expression/Date/DaysUntilExpression.php',
			),
			'maxRelatedDate' => array(
						'class'	=>	'MaxRelatedDateExpression',
						'src'	=>	'include/Expressions/Expression/Date/MaxRelatedDateExpression.php',
			),
			'date' => array(
						'class'	=>	'DefineDateExpression',
						'src'	=>	'include/Expressions/Expression/Date/DefineDateExpression.php',
			),
			'addDays' => array(
						'class'	=>	'AddDaysExpression',
						'src'	=>	'include/Expressions/Expression/Date/AddDaysExpression.php',
			),
			'today' => array(
						'class'	=>	'TodayExpression',
						'src'	=>	'include/Expressions/Expression/Date/TodayExpression.php',
			),
			'timestamp' => array(
						'class'	=>	'TimestampExpression',
						'src'	=>	'include/Expressions/Expression/Date/TimestampExpression.php',
			),
			'now' => array(
						'class'	=>	'NowExpression',
						'src'	=>	'include/Expressions/Expression/Date/NowExpression.php',
			),
			'hourOfDay' => array(
						'class'	=>	'HourOfDayExpression',
						'src'	=>	'include/Expressions/Expression/Time/HourOfDayExpression.php',
			),
			'time' => array(
						'class'	=>	'DefineTimeExpression',
						'src'	=>	'include/Expressions/Expression/Time/DefineTimeExpression.php',
			),
			'count' => array(
						'class'	=>	'CountRelatedExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/CountRelatedExpression.php',
			),
			'average' => array(
						'class'	=>	'AverageExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/AverageExpression.php',
			),
			'abs' => array(
						'class'	=>	'AbsoluteValueExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/AbsoluteValueExpression.php',
			),
			'multiply' => array(
						'class'	=>	'MultiplyExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/MultiplyExpression.php',
			),
			'divide' => array(
						'class'	=>	'DivideExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/DivideExpression.php',
			),
			'rollupMin' => array(
						'class'	=>	'MinRelatedExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/MinRelatedExpression.php',
			),
			'strlen' => array(
						'class'	=>	'StringLengthExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/StringLengthExpression.php',
			),
			'median' => array(
						'class'	=>	'MedianExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/MedianExpression.php',
			),
			'rollupSum' => array(
						'class'	=>	'SumRelatedExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/SumRelatedExpression.php',
			),
			'floor' => array(
						'class'	=>	'FloorExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/FloorExpression.php',
			),
			'rollupMax' => array(
						'class'	=>	'MaxRelatedExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/MaxRelatedExpression.php',
			),
			'rollupAve' => array(
						'class'	=>	'AverageRelatedExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/AverageRelatedExpression.php',
			),
			'log' => array(
						'class'	=>	'LogExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/LogExpression.php',
			),
			'add' => array(
						'class'	=>	'AddExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/AddExpression.php',
			),
			'max' => array(
						'class'	=>	'MaximumExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/MaximumExpression.php',
			),
			'negate' => array(
						'class'	=>	'NegateExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/NegateExpression.php',
			),
			'min' => array(
						'class'	=>	'MinimumExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/MinimumExpression.php',
			),
			'pow' => array(
						'class'	=>	'PowerExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/PowerExpression.php',
			),
			'countConditional' => array(
						'class'	=>	'CountConditionalRelatedExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/CountConditionalRelatedExpression.php',
			),
			'ceil' => array(
						'class'	=>	'CeilingExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/CeilingExpression.php',
			),
			'ceiling' => array(
						'class'	=>	'CeilingExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/CeilingExpression.php',
			),
			'indexOf' => array(
						'class'	=>	'IndexOfExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/IndexOfExpression.php',
			),
			'stddev' => array(
						'class'	=>	'StandardDeviationExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/StandardDeviationExpression.php',
			),
			'number' => array(
						'class'	=>	'ValueOfExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/ValueOfExpression.php',
			),
			'ln' => array(
						'class'	=>	'NaturalLogExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/NaturalLogExpression.php',
			),
			'subtract' => array(
						'class'	=>	'SubtractExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/SubtractExpression.php',
			),
			'rollupCurrencySum' => array(
						'class'	=>	'CurrencySumRelatedExpression',
						'src'	=>	'include/Expressions/Expression/Numeric/CurrencySumRelatedExpression.php',
			),
			'isValidDBName' => array(
						'class'	=>	'IsValidDBNameExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsValidDBNameExpression.php',
			),
			'isValidTime' => array(
						'class'	=>	'IsValidTimeExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsValidTimeExpression.php',
			),
			'isValidEmail' => array(
						'class'	=>	'IsValidEmailExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsValidEmailExpression.php',
			),
			'equal' => array(
						'class'	=>	'EqualExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/EqualExpression.php',
			),
			'or' => array(
						'class'	=>	'OrExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/OrExpression.php',
			),
			'isRequiredCollection' => array(
						'class'	=>	'IsRequiredCollectionExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsRequiredCollectionExpression.php',
			),
			'doBothExist' => array(
						'class'	=>	'BinaryDependencyExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/BinaryDependencyExpression.php',
			),
			'and' => array(
						'class'	=>	'AndExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/AndExpression.php',
			),
			'not' => array(
						'class'	=>	'NotExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/NotExpression.php',
			),
			'greaterThan' => array(
						'class'	=>	'GreaterThanExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/GreaterThanExpression.php',
			),
			'isInList' => array(
						'class'	=>	'IsInEnumExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsInEnumExpression.php',
			),
			'isInEnum' => array(
						'class'	=>	'IsInEnumExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsInEnumExpression.php',
			),
			'isAfter' => array(
						'class'	=>	'isAfterExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/isAfterExpression.php',
			),
			'isAlphaNumeric' => array(
						'class'	=>	'IsAlphaNumericExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsAlphaNumericExpression.php',
			),
			'isNumeric' => array(
						'class'	=>	'IsNumericExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsNumericExpression.php',
			),
			'isAlpha' => array(
						'class'	=>	'IsAlphaExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsAlphaExpression.php',
			),
			'isValidDate' => array(
						'class'	=>	'IsValidDateExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsValidDateExpression.php',
			),
			'isBefore' => array(
						'class'	=>	'isBeforeExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/isBeforeExpression.php',
			),
			'isValidPhone' => array(
						'class'	=>	'IsValidPhoneExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsValidPhoneExpression.php',
			),
			'isWithinRange' => array(
						'class'	=>	'IsInRangeExpression',
						'src'	=>	'include/Expressions/Expression/Boolean/IsInRangeExpression.php',
			),
			'related' => array(
						'class'	=>	'RelatedFieldExpression',
						'src'	=>	'include/Expressions/Expression/Generic/RelatedFieldExpression.php',
			),
			'ifElse' => array(
						'class'	=>	'ConditionExpression',
						'src'	=>	'include/Expressions/Expression/Generic/ConditionExpression.php',
			),
			'cond' => array(
						'class'	=>	'ConditionExpression',
						'src'	=>	'include/Expressions/Expression/Generic/ConditionExpression.php',
			),
			'sugarField' => array(
						'class'	=>	'SugarFieldExpression',
						'src'	=>	'include/Expressions/Expression/Generic/SugarFieldExpression.php',
			),
			'valueAt' => array(
						'class'	=>	'IndexValueExpression',
						'src'	=>	'include/Expressions/Expression/Generic/IndexValueExpression.php',
			),
			'subStr' => array(
						'class'	=>	'SubStrExpression',
						'src'	=>	'include/Expressions/Expression/String/SubStrExpression.php',
			),
			'strToUpper' => array(
						'class'	=>	'StrToUpperExpression',
						'src'	=>	'include/Expressions/Expression/String/StrToUpperExpression.php',
			),
			'concat' => array(
						'class'	=>	'ConcatenateExpression',
						'src'	=>	'include/Expressions/Expression/String/ConcatenateExpression.php',
			),
			'contains' => array(
						'class'	=>	'ContainsExpression',
						'src'	=>	'include/Expressions/Expression/String/ContainsExpression.php',
			),
			'translateLabel' => array(
						'class'	=>	'SugarTranslateExpression',
						'src'	=>	'include/Expressions/Expression/String/SugarTranslateExpression.php',
			),
			'translate' => array(
						'class'	=>	'SugarTranslateExpression',
						'src'	=>	'include/Expressions/Expression/String/SugarTranslateExpression.php',
			),
			'formatName' => array(
						'class'	=>	'FormatedNameExpression',
						'src'	=>	'include/Expressions/Expression/String/FormatedNameExpression.php',
			),
			'getDropdownValue' => array(
						'class'	=>	'SugarDropDownValueExpression',
						'src'	=>	'include/Expressions/Expression/String/SugarDropDownValueExpression.php',
			),
			'getDDValue' => array(
						'class'	=>	'SugarDropDownValueExpression',
						'src'	=>	'include/Expressions/Expression/String/SugarDropDownValueExpression.php',
			),
			'charAt' => array(
						'class'	=>	'CharacterAtExpression',
						'src'	=>	'include/Expressions/Expression/String/CharacterAtExpression.php',
			),
			'strToLower' => array(
						'class'	=>	'StrToLowerExpression',
						'src'	=>	'include/Expressions/Expression/String/StrToLowerExpression.php',
			),
			'toString' => array(
						'class'	=>	'DefineStringExpression',
						'src'	=>	'include/Expressions/Expression/String/DefineStringExpression.php',
			),
			'string' => array(
						'class'	=>	'DefineStringExpression',
						'src'	=>	'include/Expressions/Expression/String/DefineStringExpression.php',
			),
			'createList' => array(
						'class'	=>	'DefineEnumExpression',
						'src'	=>	'include/Expressions/Expression/Enum/DefineEnumExpression.php',
			),
			'enum' => array(
						'class'	=>	'DefineEnumExpression',
						'src'	=>	'include/Expressions/Expression/Enum/DefineEnumExpression.php',
			),
			'getDropdownKeySet' => array(
						'class'	=>	'SugarDropDownExpression',
						'src'	=>	'include/Expressions/Expression/Enum/SugarDropDownExpression.php',
			),
			'getDD' => array(
						'class'	=>	'SugarDropDownExpression',
						'src'	=>	'include/Expressions/Expression/Enum/SugarDropDownExpression.php',
			),
			'getDropdownValueSet' => array(
						'class'	=>	'SugarTranslatedDropDownExpression',
						'src'	=>	'include/Expressions/Expression/Enum/SugarTranslatedDropDownExpression.php',
			),
			'getTransDD' => array(
						'class'	=>	'SugarTranslatedDropDownExpression',
						'src'	=>	'include/Expressions/Expression/Enum/SugarTranslatedDropDownExpression.php',
			),
);
?>