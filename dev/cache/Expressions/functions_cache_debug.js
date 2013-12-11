/**
 * Construct a new DayOfWeekExpression.
 */
SUGAR.expressions.DayOfWeekExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.DayOfWeekExpression, SUGAR.expressions.NumericExpression, {
    className: "DayOfWeekExpression",
	evaluate: function() {
			var time = this.getParameters().evaluate();
			return new Date(time).getDay();
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['date'];
	}
});

/**
 * Construct a new MonthOfYearExpression.
 */
SUGAR.expressions.MonthOfYearExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.MonthOfYearExpression, SUGAR.expressions.NumericExpression, {
    className: "MonthOfYearExpression",
	evaluate: function() {
			var time = this.getParameters().evaluate();
			return new Date(time).getMonth() + 1;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['date'];
	}
});

/**
 * Construct a new DaysUntilExpression.
 */
SUGAR.expressions.DaysUntilExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.DaysUntilExpression, SUGAR.expressions.NumericExpression, {
    className: "DaysUntilExpression",
	evaluate: function() {
			var then = SUGAR.util.DateUtils.parse(this.getParameters().evaluate());
			var now = new Date();
			now.setHours(0);
			now.setMinutes(0);
			now.setSeconds(0);
			then.setHours(1);
			then.setMinutes(0);
			then.setSeconds(0);
			var diff = then - now;
			var days = Math.floor(diff / 86400000);
			var extrasec = diff % 86400000;
			var extra = new Date();
			extra.setTime(then.getTime() + extrasec);
			if (extra.getDate() != then.getDate())
			    days++;

			return days;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['date'];
	}
});

/**
 * Construct a new MaxRelatedDateExpression.
 */
SUGAR.expressions.MaxRelatedDateExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.MaxRelatedDateExpression, SUGAR.expressions.DateExpression, {
    className: "MaxRelatedDateExpression",
	evaluate: function() {

	}
});

/**
 * Construct a new DefineDateExpression.
 */
SUGAR.expressions.DefineDateExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.DefineDateExpression, SUGAR.expressions.DateExpression, {
    className: "DefineDateExpression",
	evaluate: function() {
			var params = this.getParameters().evaluate();
			var time   = SUGAR.util.DateUtils.parse(params, 'user');
			if (time == false)	throw "Incorrect date format";

			return time;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new AddDaysExpression.
 */
SUGAR.expressions.AddDaysExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.AddDaysExpression, SUGAR.expressions.DateExpression, {
    className: "AddDaysExpression",
	evaluate: function() {
		    var params = this.getParameters();
			var date = SUGAR.util.DateUtils.parse(params[0].evaluate(), 'user');
			var days = params[1].evaluate();

		    //Clone the object to prevent possible issues with other operations on this variable.
		    var d = new Date(date);
		    d.setDate(d.getDate() + days);

		    return d;
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['date','number'];
	}
});

/**
 * Construct a new TodayExpression.
 */
SUGAR.expressions.TodayExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.TodayExpression, SUGAR.expressions.DateExpression, {
    className: "TodayExpression",
	evaluate: function() {
		  var d = new Date();
		  d.setHours(0);
		  d.setMinutes(0);
		  d.setSeconds(0);
		  return d;
	}
	,getParamCount: function() {
		return 0;
	}
});

/**
 * Construct a new TimestampExpression.
 */
SUGAR.expressions.TimestampExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.TimestampExpression, SUGAR.expressions.DateExpression, {
    className: "TimestampExpression",
	evaluate: function() {
	    var datetime = this.getParameters().evaluate(),
            arr,
            ret = [],
            date = this.context.parseDate(datetime);

        return Math.round(+date.getTime()/1000);
	}
	,getParamCount: function() {
		return 1;
	}
});

/**
 * Construct a new NowExpression.
 */
SUGAR.expressions.NowExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.NowExpression, SUGAR.expressions.DateExpression, {
    className: "NowExpression",
	evaluate: function() {
		  var d = SUGAR.util.DateUtils.getUserTime();
		  d.setSeconds(0);
		  return d;
	}
	,getParamCount: function() {
		return 0;
	}
});

/**
 * Construct a new HourOfDayExpression.
 */
SUGAR.expressions.HourOfDayExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.HourOfDayExpression, SUGAR.expressions.TimeExpression, {
    className: "HourOfDayExpression",
	evaluate: function() {
			var time = this.getParameters().evaluate();
			return new Date(time).getHours();
	}
	,getParamCount: function() {
		return 1;
	}
});

/**
 * Construct a new DefineTimeExpression.
 */
SUGAR.expressions.DefineTimeExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.DefineTimeExpression, SUGAR.expressions.TimeExpression, {
    className: "DefineTimeExpression",
	evaluate: function() {
			var params = this.getParameters().evaluate();
			var time   = Date.parse(params);

			if ( isNaN(time) )	throw "Incorrect time format";

			return time;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new CountRelatedExpression.
 */
SUGAR.expressions.CountRelatedExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.CountRelatedExpression, SUGAR.expressions.NumericExpression, {
    className: "CountRelatedExpression",
	evaluate: function() {
		    var linkField = this.getParameters().evaluate();

			if (typeof(linkField) == "string" && linkField != "")
			{
                return SUGAR.forms.AssignmentHandler.getRelatedField(linkField, 'count');
			}
			else if (typeof(rel) == "object") {
			    //Assume we have a Link object that we can delve into.
			    //This is mostly used for n level dives through relationships.
			    //This should probably be avoided on edit views due to performance issues.

			}

			return "";
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['relate'];
	}
});

/**
 * Construct a new AverageExpression.
 */
SUGAR.expressions.AverageExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.AverageExpression, SUGAR.expressions.NumericExpression, {
    className: "AverageExpression",
	evaluate: function() {
			var sum   = 0;
			var count = 0;
			var params = this.getParameters();
			for ( var i = 0; i < params.length; i++ ) {
				sum += params[i].evaluate();
				count++;
			}
			// since Expression guarantees at least 1 parameter
			// we can safely assume / by 0 will not happen
			return ( sum / count );
	}
});

/**
 * Construct a new AbsoluteValueExpression.
 */
SUGAR.expressions.AbsoluteValueExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.AbsoluteValueExpression, SUGAR.expressions.NumericExpression, {
    className: "AbsoluteValueExpression",
	evaluate: function() {
			return Math.abs(this.getParameters().evaluate());
	}
	,getParamCount: function() {
		return 1;
	}
});

/**
 * Construct a new MultiplyExpression.
 */
SUGAR.expressions.MultiplyExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.MultiplyExpression, SUGAR.expressions.NumericExpression, {
    className: "MultiplyExpression",
	evaluate: function() {
			var params = this.getParameters();
			var product = 1;
			for ( var i = 0; i < params.length; i++ )	product *= params[i].evaluate();
			return product;
	}
});

/**
 * Construct a new DivideExpression.
 */
SUGAR.expressions.DivideExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.DivideExpression, SUGAR.expressions.NumericExpression, {
    className: "DivideExpression",
	evaluate: function() {
			var params = this.getParameters();
			var numerator   = params[0].evaluate();
			var denominator = params[1].evaluate();
			if (denominator == 0)
			    throw "Devision by 0 error";
			return numerator/denominator;
	}
	,getParamCount: function() {
		return 2;
	}
});

/**
 * Construct a new MinRelatedExpression.
 */
SUGAR.expressions.MinRelatedExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.MinRelatedExpression, SUGAR.expressions.NumericExpression, {
    className: "MinRelatedExpression",
	evaluate: function() {
		    var params = this.getParameters();
			var linkField = params[0].evaluate();
			var relField = params[1].evaluate();

			if (typeof(linkField) == "string" && linkField != "")
			{
                return SUGAR.forms.AssignmentHandler.getRelatedField(linkField, 'rollupMin', relField);
			} else if (typeof(rel) == "object") {
			    //Assume we have a Link object that we can delve into.
			    //This is mostly used for n level dives through relationships.
			    //This should probably be avoided on edit views due to performance issues.

			}

			return "";
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['relate','string'];
	}
});

/**
 * Construct a new StringLengthExpression.
 */
SUGAR.expressions.StringLengthExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.StringLengthExpression, SUGAR.expressions.NumericExpression, {
    className: "StringLengthExpression",
	evaluate: function() {
			var p = this.getParameters().evaluate() + "";
			return p.length;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return 'string';
	}
});

/**
 * Construct a new MedianExpression.
 */
SUGAR.expressions.MedianExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.MedianExpression, SUGAR.expressions.NumericExpression, {
    className: "MedianExpression",
	evaluate: function() {
			var params = this.getParameters();
			var values = new Array();
			
			for ( var i = 0; i < params.length; i++ )
				values[values.length] = parseFloat(params[i].evaluate()); 
			
			// sort numerically
			values.sort(function(a, b) {return a - b;});
			
			if (values.length % 2 == 0) 
			{
				return (values[values.length/2] + values[values.length/2 - 1]) / 2;
			}
			
			return values[ Math.round(values.length/2) - 1 ];
	}
});

/**
 * Construct a new SumRelatedExpression.
 */
SUGAR.expressions.SumRelatedExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.SumRelatedExpression, SUGAR.expressions.NumericExpression, {
    className: "SumRelatedExpression",
	evaluate: function() {
		    var params = this.getParameters();
			var linkField = params[0].evaluate();
			var relField = params[1].evaluate();

			if (typeof(linkField) == "string" && linkField != "")
			{
                return this.context.getRelatedField(linkField, 'rollupSum', relField);
			} else if (typeof(rel) == "object") {
			    //Assume we have a Link object that we can delve into.
			    //This is mostly used for n level dives through relationships.
			    //This should probably be avoided on edit views due to performance issues.

			}

			return "";
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['relate','string'];
	}
});

/**
 * Construct a new FloorExpression.
 */
SUGAR.expressions.FloorExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.FloorExpression, SUGAR.expressions.NumericExpression, {
    className: "FloorExpression",
	evaluate: function() {
			return Math.floor( this.getParameters().evaluate() );
	}
	,getParamCount: function() {
		return 1;
	}
});

/**
 * Construct a new MaxRelatedExpression.
 */
SUGAR.expressions.MaxRelatedExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.MaxRelatedExpression, SUGAR.expressions.NumericExpression, {
    className: "MaxRelatedExpression",
	evaluate: function() {
		    var params = this.getParameters();
			var linkField = params[0].evaluate();
			var relField = params[1].evaluate();

			if (typeof(linkField) == "string" && linkField != "")
			{
                return SUGAR.forms.AssignmentHandler.getRelatedField(linkField, 'rollupMax', relField);
			} else if (typeof(rel) == "object") {
			    //Assume we have a Link object that we can delve into.
			    //This is mostly used for n level dives through relationships.
			    //This should probably be avoided on edit views due to performance issues.

			}

			return "";
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['relate','string'];
	}
});

/**
 * Construct a new AverageRelatedExpression.
 */
SUGAR.expressions.AverageRelatedExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.AverageRelatedExpression, SUGAR.expressions.NumericExpression, {
    className: "AverageRelatedExpression",
	evaluate: function() {
		    var params = this.getParameters();
			var linkField = params[0].evaluate();
			var relField = params[1].evaluate();

			if (typeof(linkField) == "string" && linkField != "")
			{
                return SUGAR.forms.AssignmentHandler.getRelatedField(linkField, 'rollupAve', relField);
			} else if (typeof(rel) == "object") {
			    //Assume we have a Link object that we can delve into.
			    //This is mostly used for n level dives through relationships.
			    //This should probably be avoided on edit views due to performance issues.

			}

			return "";
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['relate','string'];
	}
});

/**
 * Construct a new LogExpression.
 */
SUGAR.expressions.LogExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.LogExpression, SUGAR.expressions.NumericExpression, {
    className: "LogExpression",
	evaluate: function() {
		      var params = this.getParameters();

            var base = params[1].evaluate();
            var value = params[0].evaluate();
            return Math.log( value ) / Math.log ( base );
	}
	,getParamCount: function() {
		return 2;
	}
});

/**
 * Construct a new AddExpression.
 */
SUGAR.expressions.AddExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.AddExpression, SUGAR.expressions.NumericExpression, {
    className: "AddExpression",
	evaluate: function() {
			var params = this.getParameters();
			var sum = 0;
			for ( var i = 0; i < params.length; i++ )	sum += params[i].evaluate();
			return sum;
	}
});

/**
 * Construct a new MaximumExpression.
 */
SUGAR.expressions.MaximumExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.MaximumExpression, SUGAR.expressions.NumericExpression, {
    className: "MaximumExpression",
	evaluate: function() {
			var params = this.getParameters();
			var max = null;
			for ( var i = 0; i < params.length; i++ )	
			{
				var val = 	params[i].evaluate();
				if(max == null || val > max)
					max = val;
			}
			return max;
	}
});

/**
 * Construct a new NegateExpression.
 */
SUGAR.expressions.NegateExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.NegateExpression, SUGAR.expressions.NumericExpression, {
    className: "NegateExpression",
	evaluate: function() {
			return -1 * this.getParameters().evaluate();
	}
	,getParamCount: function() {
		return 1;
	}
});

/**
 * Construct a new MinimumExpression.
 */
SUGAR.expressions.MinimumExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.MinimumExpression, SUGAR.expressions.NumericExpression, {
    className: "MinimumExpression",
	evaluate: function() {
			var params = this.getParameters();
			var min = null;
			for ( var i = 0; i < params.length; i++ )	
			{
				var val = 	params[i].evaluate();
				if(min == null || val < min)
					min = val;
			}
			return min;
	}
});

/**
 * Construct a new PowerExpression.
 */
SUGAR.expressions.PowerExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.PowerExpression, SUGAR.expressions.NumericExpression, {
    className: "PowerExpression",
	evaluate: function() {
			var params = this.getParameters();

			var base = params[0].evaluate();
			var power = params[1].evaluate();

			return Math.pow(base, power);
	}
	,getParamCount: function() {
		return 2;
	}
});

/**
 * Construct a new CeilingExpression.
 */
SUGAR.expressions.CeilingExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.CeilingExpression, SUGAR.expressions.NumericExpression, {
    className: "CeilingExpression",
	evaluate: function() {
			return Math.ceil(this.getParameters().evaluate());
	}
	,getParamCount: function() {
		return 1;
	}
});

/**
 * Construct a new IndexOfExpression.
 */
SUGAR.expressions.IndexOfExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IndexOfExpression, SUGAR.expressions.NumericExpression, {
    className: "IndexOfExpression",
	evaluate: function() {
			var params = this.getParameters();
			var arr  = params[1].evaluate();
			var val  = params[0].evaluate();

			for (var i=0; i < arr.length; i++) {
			if (arr[i] == val) {
				return i;
			} 
		}
		return -1;
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['generic','enum'];
	}
});

/**
 * Construct a new StandardDeviationExpression.
 */
SUGAR.expressions.StandardDeviationExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.StandardDeviationExpression, SUGAR.expressions.NumericExpression, {
    className: "StandardDeviationExpression",
	evaluate: function() {
			var params = this.getParameters();
			var values = new Array();
			
			// find the mean
			var sum   = 0;
			var count = params.length;
			for ( var i = 0; i < params.length; i++ ) {
				value = params[i].evaluate();
				values[values.length] = value;
				sum += value;
			}
			var mean = sum / count;
			
			// find the summation of deviations
			var deviation_sum = 0;
			for ( var i = 0; i < values.length; i++ )
				deviation_sum += Math.pow(values[i] - mean, 2);
	
			// find the std dev
			var variance = (1/count)*deviation_sum;
			
			return Math.sqrt(variance);
	}
});

/**
 * Construct a new ValueOfExpression.
 */
SUGAR.expressions.ValueOfExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.ValueOfExpression, SUGAR.expressions.NumericExpression, {
    className: "ValueOfExpression",
	evaluate: function() {
			var val = this.getParameters().evaluate() + "";
			val = val.replace(/,/g, "");
			var out = 0;
			if (val.indexOf(".") != -1)
				out = parseFloat(val);
			else 
			    out = parseInt(val);
			if (isNaN(out))
			   throw "Error: '" + val + "' is not a number";
			
			return out;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return 'generic';
	}
});

/**
 * Construct a new NaturalLogExpression.
 */
SUGAR.expressions.NaturalLogExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.NaturalLogExpression, SUGAR.expressions.NumericExpression, {
    className: "NaturalLogExpression",
	evaluate: function() {
            return Math.log( this.getParameters().evaluate() );
	}
	,getParamCount: function() {
		return 1;
	}
});

/**
 * Construct a new SubtractExpression.
 */
SUGAR.expressions.SubtractExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.SubtractExpression, SUGAR.expressions.NumericExpression, {
    className: "SubtractExpression",
	evaluate: function() {
			var params = this.getParameters();
			var diff   = params[0].evaluate();
			for ( var i = 1; i < params.length; i++ ) {
				diff -= params[i].evaluate();
			}
			return diff;
	}
});

/**
 * Construct a new CurrencySumRelatedExpression.
 */
SUGAR.expressions.CurrencySumRelatedExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.CurrencySumRelatedExpression, SUGAR.expressions.NumericExpression, {
    className: "CurrencySumRelatedExpression",
	evaluate: function() {
		    var params = this.getParameters();
			var linkField = params[0].evaluate();
			var relField = params[1].evaluate();

			if (typeof(linkField) == "string" && linkField != "")
			{
                return this.context.getRelatedField(linkField, 'rollupCurrencySum', relField);
			} else if (typeof(rel) == "object") {
			    //Assume we have a Link object that we can delve into.
			    //This is mostly used for n level dives through relationships.
			    //This should probably be avoided on edit views due to performance issues.

			}

			return "";
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['relate','string'];
	}
});

/**
 * Construct a new IsValidDBNameExpression.
 */
SUGAR.expressions.IsValidDBNameExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsValidDBNameExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsValidDBNameExpression",
	evaluate: function() {
		var str = this.getParameters().evaluate();
		if(str.length== 0) {
			return true;
		}
		// must start with a letter
		if(!/^[a-zA-Z][a-zA-Z\_0-9]+$/.test(str))
			return SUGAR.expressions.Expression.FALSE;
		return SUGAR.expressions.Expression.TRUE;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new IsValidTimeExpression.
 */
SUGAR.expressions.IsValidTimeExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsValidTimeExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsValidTimeExpression",
	evaluate: function() {
		var timeStr = this.getParameters().evaluate();
		var time_reg_format = /^(\d{1,2}):(\d\d)\s*([ap]m)?$/i;
		if (timeStr.length == 0)	return SUGAR.expressions.Expression.TRUE;
		myregexp = new RegExp(time_reg_format)
		if(!myregexp.test(timeStr))	return SUGAR.expressions.Expression.FALSE;
		var matches = timeStr.match(time_reg_format);
		if (matches[1] > 23 || matches[2] > 59){return SUGAR.expressions.Expression.FALSE;}
		if (matches[3] && (matches[1] > 12 || matches[1] == 0)){return SUGAR.expressions.Expression.FALSE;}
		return SUGAR.expressions.Expression.TRUE;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new IsValidEmailExpression.
 */
SUGAR.expressions.IsValidEmailExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsValidEmailExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsValidEmailExpression",
	evaluate: function() {
		var emailStr = this.getParameters().evaluate();
		
		if ( typeof emailStr != "string" ) return SUGAR.expressions.Expression.FALSE;

		if ( emailStr == "" ) return SUGAR.expressions.Expression.TRUE;
		
		var lastChar = emailStr.charAt(emailStr.length - 1);
		if ( !lastChar.match(/[^\.]/i) )	return SUGAR.expressions.Expression.FALSE;

		// validate it
		var emailArr = emailStr.split(/[,;]/);		// if multiple e-mail addresses
		for (var i = 0; i < emailArr.length; i++) {
			var emailAddress = emailArr[i];
			emailAddress = emailAddress.replace(/^\s+|\s+$/g,"");
			if ( emailAddress != '') {
				if(!/^\s*[\w.%+\-]+@([A-Z0-9-]+\.)*[A-Z0-9-]+\.[A-Z]{2,}\s*$/i.test(emailAddress) &&
				   !/^.*<[A-Z0-9._%+\-]+?@([A-Z0-9-]+\.)*[A-Z0-9-]+\.[A-Z]{2,}>\s*$/i.test(emailAddress))
				   return SUGAR.expressions.Expression.FALSE;
			}
		}

		return SUGAR.expressions.Expression.TRUE;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new EqualExpression.
 */
SUGAR.expressions.EqualExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.EqualExpression, SUGAR.expressions.BooleanExpression, {
    className: "EqualExpression",
	evaluate: function() {
			var params = this.getParameters();
			var a = params[0].evaluate();
			var b = params[1].evaluate();
			if ( a == b )	return SUGAR.expressions.Expression.TRUE;
			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['generic','generic'];
	}
});

/**
 * Construct a new OrExpression.
 */
SUGAR.expressions.OrExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.OrExpression, SUGAR.expressions.BooleanExpression, {
    className: "OrExpression",
	evaluate: function() {
			var params = this.getParameters();		
			for ( var i = 0; i < params.length; i++ ) {
				if ( params[i].evaluate() == SUGAR.expressions.Expression.TRUE )
					return SUGAR.expressions.Expression.TRUE;
			}
			return SUGAR.expressions.Expression.FALSE;
	}
});

/**
 * Construct a new IsRequiredCollectionExpression.
 */
SUGAR.expressions.IsRequiredCollectionExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsRequiredCollectionExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsRequiredCollectionExpression",
	evaluate: function() {
			var params = this.getParameters().evaluate();
            table = document.getElementById(params);
            children = YAHOO.util.Dom.getElementsByClassName('sqsEnabled', 'input', table);
            for(id in children) {
                if(trim(children[id].value) != '') {
                   return SUGAR.expressions.Expression.TRUE;
                }
            }
			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new BinaryDependencyExpression.
 */
SUGAR.expressions.BinaryDependencyExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.BinaryDependencyExpression, SUGAR.expressions.BooleanExpression, {
    className: "BinaryDependencyExpression",
	evaluate: function() {
			var params = this.getParameters();
			var a = params[0].evaluate();
			var b = params[1].evaluate();
			if ( a != null && b != null && a != '' && b != '' )
				return SUGAR.expressions.Expression.TRUE;
			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['string','string'];
	}
});

/**
 * Construct a new AndExpression.
 */
SUGAR.expressions.AndExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.AndExpression, SUGAR.expressions.BooleanExpression, {
    className: "AndExpression",
	evaluate: function() {
			var params = this.getParameters();
            if(!(params instanceof Array)) params = [params];
			for ( var i = 0; i < params.length; i++ ) {
				if ( params[i].evaluate() != SUGAR.expressions.Expression.TRUE )
					return SUGAR.expressions.Expression.FALSE;
			}
			return SUGAR.expressions.Expression.TRUE;
	}
});

/**
 * Construct a new NotExpression.
 */
SUGAR.expressions.NotExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.NotExpression, SUGAR.expressions.BooleanExpression, {
    className: "NotExpression",
	evaluate: function() {
			if ( this.getParameters().evaluate() == SUGAR.expressions.Expression.FALSE )
				return SUGAR.expressions.Expression.TRUE;
			else
				return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 1;
	}
});

/**
 * Construct a new GreaterThanExpression.
 */
SUGAR.expressions.GreaterThanExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.GreaterThanExpression, SUGAR.expressions.BooleanExpression, {
    className: "GreaterThanExpression",
	evaluate: function() {
			var params = this.getParameters();
			var a = params[0].evaluate();
			var b = params[1].evaluate();
			if ( a > b )	return SUGAR.expressions.Expression.TRUE;
			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['number','number'];
	}
});

/**
 * Construct a new IsInEnumExpression.
 */
SUGAR.expressions.IsInEnumExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsInEnumExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsInEnumExpression",
	evaluate: function() {
			var params = this.getParameters();
			var haystack = params[1].evaluate();
			var needle   = params[0].evaluate();

			for ( var i = 0 ; i < haystack.length ; i++ ) {
				var value = haystack[i];
				if ( value instanceof SUGAR.expressions.Expression ) value = value.evaluate();
				if ( value == needle )	return SUGAR.expressions.Expression.TRUE;
			}

			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['generic','enum'];
	}
});

/**
 * Construct a new isAfterExpression.
 */
SUGAR.expressions.isAfterExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.isAfterExpression, SUGAR.expressions.BooleanExpression, {
    className: "isAfterExpression",
	evaluate: function() {
			var params = this.getParameters();
			var a = SUGAR.util.DateUtils.parse(params[0].evaluate());
			var b = SUGAR.util.DateUtils.parse(params[1].evaluate());

			if ( a > b )	return SUGAR.expressions.Expression.TRUE;
			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['date','date'];
	}
});

/**
 * Construct a new IsAlphaNumericExpression.
 */
SUGAR.expressions.IsAlphaNumericExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsAlphaNumericExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsAlphaNumericExpression",
	evaluate: function() {
			var params = this.getParameters().evaluate();
			if ( /^[a-zA-Z0-9]+$/.test(params) )	return SUGAR.expressions.Expression.TRUE;
			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new IsNumericExpression.
 */
SUGAR.expressions.IsNumericExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsNumericExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsNumericExpression",
	evaluate: function() {
			var params = this.getParameters().evaluate();
			if (params == '') {
		        SUGAR.expressions.Expression.FALSE
			}
			if ( /^(\-)?([0-9]+)?(\.[0-9]+)?$/.test(params) )	return SUGAR.expressions.Expression.TRUE;
			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new IsAlphaExpression.
 */
SUGAR.expressions.IsAlphaExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsAlphaExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsAlphaExpression",
	evaluate: function() {
			var params = this.getParameters().evaluate();
			if ( /^[a-zA-Z]+$/.test(params) )	return SUGAR.expressions.Expression.TRUE;
			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new IsValidDateExpression.
 */
SUGAR.expressions.IsValidDateExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsValidDateExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsValidDateExpression",
	evaluate: function() {
		var dtStr = this.getParameters().evaluate();
		if ( typeof dtStr != "string" ) return SUGAR.expressions.Expression.FALSE;
		if (dtStr == "") return SUGAR.expressions.Expression.TRUE;
        var format = "Y-m-d";
        if (SUGAR.expressions.userPrefs)
            format = SUGAR.expressions.userPrefs.datef;
        var date = SUGAR.util.DateUtils.parse(dtStr, format);
        if(date != false && date != "Invalid Date")
		    return SUGAR.expressions.Expression.TRUE;
		return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new isBeforeExpression.
 */
SUGAR.expressions.isBeforeExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.isBeforeExpression, SUGAR.expressions.BooleanExpression, {
    className: "isBeforeExpression",
	evaluate: function() {
			var params = this.getParameters();
			var a = params[0].evaluate();
			var b = params[1].evaluate();
			if ( a < b )	return SUGAR.expressions.Expression.TRUE;
			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['date','date'];
	}
});

/**
 * Construct a new IsValidPhoneExpression.
 */
SUGAR.expressions.IsValidPhoneExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsValidPhoneExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsValidPhoneExpression",
	evaluate: function() {
		var phoneStr = this.getParameters().evaluate();
		if(phoneStr.length== 0) 	return SUGAR.expressions.Expression.TRUE;
		if( ! /^\+?[0-9\-\(\)\s]+$/.test(phoneStr) )
			return SUGAR.expressions.Expression.FALSE;
		return SUGAR.expressions.Expression.TRUE;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new IsInRangeExpression.
 */
SUGAR.expressions.IsInRangeExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IsInRangeExpression, SUGAR.expressions.BooleanExpression, {
    className: "IsInRangeExpression",
	evaluate: function() {
			var params = this.getParameters();
			var number = params[0].evaluate();
			var min    = params[1].evaluate();
			var max    = params[2].evaluate();

			if ( number >= min && number <= max )
				return SUGAR.expressions.Expression.TRUE;

			return SUGAR.expressions.Expression.FALSE;
	}
	,getParamCount: function() {
		return 3;
	}
	,getParameterTypes: function() {
		return ['number','number','number'];
	}
});

/**
 * Construct a new RelatedFieldExpression.
 */
SUGAR.expressions.RelatedFieldExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.RelatedFieldExpression, SUGAR.expressions.GenericExpression, {
    className: "RelatedFieldExpression",
	evaluate: function() {
		    var params = this.getParameters(),
			    linkField = params[0].evaluate(),
			    relField = params[1].evaluate();

			if (typeof(linkField) == "string" && linkField != "")
			{
                return this.context.getRelatedField(linkField, 'related', relField);
			} else if (typeof(rel) == "object") {
			    //Assume we have a Link object that we can delve into.
			    //This is mostly used for n level dives through relationships.
			    //This should probably be avoided on edit views due to performance issues.
			}

			return "";
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['relate','string'];
	}
});

/**
 * Construct a new ConditionExpression.
 */
SUGAR.expressions.ConditionExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.ConditionExpression, SUGAR.expressions.GenericExpression, {
    className: "ConditionExpression",
	evaluate: function() {
			var params = this.getParameters();
			var cond = params[0].evaluate();
			if (cond == SUGAR.expressions.Expression.TRUE) {
				return params[1].evaluate();
			} else {
				return params[2].evaluate();
			}
	}
	,getParamCount: function() {
		return 3;
	}
	,getParameterTypes: function() {
		return ['boolean','generic','generic'];
	}
});

/**
 * Construct a new SugarFieldExpression.
 */
SUGAR.expressions.SugarFieldExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.SugarFieldExpression, SUGAR.expressions.GenericExpression, {
    className: "SugarFieldExpression",
	evaluate: function() {
		    var varName = this.getParameters().evaluate();
			return SUGAR.forms.AssignmentHandler.getValue(varName);
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['string'];
	}
});

/**
 * Construct a new IndexValueExpression.
 */
SUGAR.expressions.IndexValueExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.IndexValueExpression, SUGAR.expressions.GenericExpression, {
    className: "IndexValueExpression",
	evaluate: function() {
			var params = this.getParameters();
			var array  = params[1].evaluate();
			var index  = params[0].evaluate();

			if ( index >= array.length || index < 0 )
				throw ("value_at: Attempt to access an index out of bounds");

			return array[index];
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['number','enum'];
	}
});

/**
 * Construct a new SubStrExpression.
 */
SUGAR.expressions.SubStrExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.SubStrExpression, SUGAR.expressions.StringExpression, {
    className: "SubStrExpression",
	evaluate: function() {
            var params = this.getParameters();
            var str = params[0].evaluate() + "";
            var fromIdx = params[1].evaluate();
            var strLength = params[2].evaluate();
            return str.substr(fromIdx, strLength);
	}
	,getParamCount: function() {
		return 3;
	}
	,getParameterTypes: function() {
		return ['string','number','number'];
	}
});

/**
 * Construct a new StrToUpperExpression.
 */
SUGAR.expressions.StrToUpperExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.StrToUpperExpression, SUGAR.expressions.StringExpression, {
    className: "StrToUpperExpression",
	evaluate: function() {
			var string = this.getParameters().evaluate() + "" ;
			return string.toUpperCase();
	}
});

/**
 * Construct a new ConcatenateExpression.
 */
SUGAR.expressions.ConcatenateExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.ConcatenateExpression, SUGAR.expressions.StringExpression, {
    className: "ConcatenateExpression",
	evaluate: function() {
			var concat = "";
			var params = this.getParameters() ;
			for ( var i = 0; i < params.length; i++ ) {
				concat += params[i].evaluate();
			}
			return concat;
	}
});

/**
 * Construct a new ContainsExpression.
 */
SUGAR.expressions.ContainsExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.ContainsExpression, SUGAR.expressions.BooleanExpression, {
    className: "ContainsExpression",
	evaluate: function() {
			var params	  = this.getParameters();
			var haystack  = params[0].evaluate() + "";
			var needle	  = params[1].evaluate();

			return ( haystack.indexOf(needle) > -1 ? SUGAR.expressions.Expression.TRUE : SUGAR.expressions.Expression.FALSE );
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return 'string';
	}
});

/**
 * Construct a new SugarTranslateExpression.
 */
SUGAR.expressions.SugarTranslateExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.SugarTranslateExpression, SUGAR.expressions.StringExpression, {
    className: "SugarTranslateExpression",
	evaluate: function() {
		  var params = this.getParameters();
		  var module = params[1].evaluate();
		  if (module == "")
		      module = "app_strings";
		  var key = params[0].evaluate();
		  return SUGAR.language.get(module, key);
	}
	,getParamCount: function() {
		return 2;
	}
});

/**
 * Construct a new FormatedNameExpression.
 */
SUGAR.expressions.FormatedNameExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.FormatedNameExpression, SUGAR.expressions.StringExpression, {
    className: "FormatedNameExpression",
	evaluate: function() {
var params	= this.getParameters();
var comp = {s:params[0].evaluate(), f:params[1].evaluate(), l:params[2].evaluate(), t:params[3].evaluate()};
var name = '';
for(i=0; i<name_format.length; i++) {
	if(comp[name_format.substr(i,1)] != undefined) {
    	name += comp[name_format.substr(i,1)];
	} else {
		name += name_format.substr(i,1);
	}
}
return name;
	}
	,getParamCount: function() {
		return 4;
	}
});

/**
 * Construct a new SugarDropDownValueExpression.
 */
SUGAR.expressions.SugarDropDownValueExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.SugarDropDownValueExpression, SUGAR.expressions.StringExpression, {
    className: "SugarDropDownValueExpression",
	evaluate: function() {
		    var params = this.getParameters();
		    var list = params[0].evaluate();
		    var key = params[1].evaluate();
            var arr = this.context.getAppListStrings(list);
            if (arr == "undefined") return "";
            for (var i in arr) {
                if (typeof i == "string" && i == key)
                    return arr[i];
            }
            return "";
	}
	,getParamCount: function() {
		return 2;
	}
});

/**
 * Construct a new CharacterAtExpression.
 */
SUGAR.expressions.CharacterAtExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.CharacterAtExpression, SUGAR.expressions.StringExpression, {
    className: "CharacterAtExpression",
	evaluate: function() {
			var params = this.getParameters();
			var str = params[0].evaluate() + "";
			var idx = params[1].evaluate();
			return str.charAt(idx);
	}
	,getParamCount: function() {
		return 2;
	}
	,getParameterTypes: function() {
		return ['string','number'];
	}
});

/**
 * Construct a new StrToLowerExpression.
 */
SUGAR.expressions.StrToLowerExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.StrToLowerExpression, SUGAR.expressions.StringExpression, {
    className: "StrToLowerExpression",
	evaluate: function() {
			var string = this.getParameters().evaluate() + "";
			return string.toLowerCase();
	}
});

/**
 * Construct a new DefineStringExpression.
 */
SUGAR.expressions.DefineStringExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.DefineStringExpression, SUGAR.expressions.StringExpression, {
    className: "DefineStringExpression",
	evaluate: function() {
			return this.getParameters().evaluate() + "";
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return ['generic'];
	}
});

/**
 * Construct a new DefineEnumExpression.
 */
SUGAR.expressions.DefineEnumExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.DefineEnumExpression, SUGAR.expressions.EnumExpression, {
    className: "DefineEnumExpression",
	evaluate: function() {
			var params = this.getParameters();
			var array = [];
			if (typeof(params.length) != "undefined")
			{
				for ( var i = 0; i < params.length; i++ ) {
					array[array.length] = params[i].evaluate();
				}
			} else {
				return [params.evaluate()];
			}
			return array;
	}
	,getParameterTypes: function() {
		return 'generic';
	}
});

/**
 * Construct a new SugarDropDownExpression.
 */
SUGAR.expressions.SugarDropDownExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.SugarDropDownExpression, SUGAR.expressions.EnumExpression, {
    className: "SugarDropDownExpression",
	evaluate: function() {
			var dd = this.getParameters().evaluate(),
				arr, ret = [];
			if (App){
				arr = App.lang.getAppListStrings(dd);
			}
			else {
				arr = SUGAR.language.get('app_list_strings', dd);
			}
			if (arr && arr != "undefined")
			{
				for (var i in arr) {
					if (typeof i == "string")
						ret[ret.length] = i;
				}
			}
			return ret;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return 'string';
	}
});

/**
 * Construct a new SugarTranslatedDropDownExpression.
 */
SUGAR.expressions.SugarTranslatedDropDownExpression = function(params, context) {
	this.context = context;
	this.init(params);
}
SUGAR.util.extend(SUGAR.expressions.SugarTranslatedDropDownExpression, SUGAR.expressions.EnumExpression, {
    className: "SugarTranslatedDropDownExpression",
	evaluate: function() {
			var dd = this.getParameters().evaluate(),
				arr, ret = [];
			if (App){
				arr = App.lang.getAppListStrings(dd);
			}
			else {
				arr = SUGAR.language.get('app_list_strings', dd);
			}
			if (arr && arr != "undefined") {
				for (var i in arr) {
					if (typeof i == "string")
						ret[ret.length] = arr[i];
				}
			}

			return ret;
	}
	,getParamCount: function() {
		return 1;
	}
	,getParameterTypes: function() {
		return 'string';
	}
});


		SUGAR.forms.SetValueAction = function(target, valExpr) {
			if (_.isObject(target)){
			    this.expr = target.value;
			    this.target = target.target;
			} else {
                this.expr = valExpr;
                this.target = target;
			}
		};
		SUGAR.util.extend(SUGAR.forms.SetValueAction, SUGAR.forms.AbstractAction, {
			exec : function(context)
			{
				if (typeof(context) == 'undefined')
				    context = this.context;

				try {
				    var val = this.evalExpression(this.expr, context);
				    context.setValue(this.target, val);
				} catch (e) {
	                context.setValue(this.target, '');
			    }
	       }
		});/**
 * Comepetely hide or show a panel
 */
SUGAR.forms.PanelVisibilityAction = function(target, expr)
{
    this.target = target;
    this.expr   = 'cond(' + expr + ', "", "none")';
}


/**
 * Triggers this dependency to be re-evaluated again.
 */
SUGAR.util.extend(SUGAR.forms.PanelVisibilityAction, SUGAR.forms.AbstractAction, {
    hideChildren: function() {
        if (typeof(SUGAR.forms.PanelVisibilityAction.hiddenFields) == "undefined")
        {
            this.createFieldBin();
        }
        var target = document.getElementById(this.target);
        var field_table = target.getElementsByTagName('table')[0];
        if (field_table != null) 
        {
            field_table.id = this.target + "_tbl";
            SUGAR.forms.PanelVisibilityAction.hiddenFields.appendChild(field_table);
        }
    },
    
    showChildren: function() {
        var target = document.getElementById(this.target);
        var field_table = document.getElementById(this.target + "_tbl");
        if (field_table != null)
            target.appendChild(field_table);
    },
    
    createFieldBin: function() {
        var tmpElem = document.createElement('div');
        tmpElem.id = 'panelHiddenFields';
        tmpElem.style.display = 'none';
        document.body.appendChild(tmpElem);
        SUGAR.forms.PanelVisibilityAction.hiddenFields = tmpElem;
    },
    
    /**
     * Triggers the style dependencies.
     */
    exec: function(context)
    {
        if (typeof(context) == 'undefined')
            context = this.context;
        try {
            var visibility = this.evalExpression(this.expr, context);
            var target = document.getElementById(this.target);
            if (target != null) {               
                if (target.style.display != 'none')
                 SUGAR.forms.animation.sizes[this.target] = target.clientHeight;
                       
                if (SUGAR.forms.AssignmentHandler.ANIMATE) {
                    if (visibility == 'none' && target.style.display != 'none') {
                       SUGAR.forms.animation.Collapse(this.target, this.hideChildren, this);
                       return;
                    } 
                    else if (visibility != 'none' && target.style.display == 'none') 
                    {
                        this.showChildren();
                        SUGAR.forms.animation.Expand(this.target);
                        return;
                    }
                }
                
                if (visibility == 'none')
                    this.hideChildren();
                else
                    this.showChildren();
                target.style.display = visibility;
            }
        } catch (e) {if (console && console.log) console.log(e);}
    }
});

SUGAR.forms.animation.sizes = { };

SUGAR.forms.animation.Collapse = function(target, callback, scope)
{
    var t = document.getElementById(target);
    if (t == null) return;
    
    SUGAR.forms.animation.sizes[target] = t.clientHeight;
    t.style.overflow = "hidden";
    
    // Create a new ColorAnim instance
    var collapseAnim = new YAHOO.util.Anim(target, { height: { to: 0 } }, 0.5, YAHOO.util.Easing.easeBoth);
    collapseAnim.onComplete.subscribe(function () {
        t.style.display = 'none';
        callback.call(scope);
    });
    collapseAnim.animate();
};

SUGAR.forms.animation.Expand = function(target)
{
    var t = document.getElementById(target);
    if (t == null) return;
    
    
    t.style.overflow = "hidden";
    t.style.height = "0px";
    t.style.display = "";
    
    var expandAnim = new YAHOO.util.Anim(target, { height: { to: SUGAR.forms.animation.sizes[target]  } },
        0.5, YAHOO.util.Easing.easeBoth);
    
    expandAnim.onComplete.subscribe(function () {
        t.style.height = 'auto';
    });
    
    expandAnim.animate();
};
SUGAR.forms.SetRequiredAction = function(variable, expr, label) {
    this.variable = variable;
    this.expr = expr;
    this.label    = label;
    this._el_lbl  = document.getElementById(this.label);
    this.msg = this._el_lbl.innerText;
}

/**
 * Triggers this dependency to be re-evaluated again.
 */
SUGAR.util.extend(SUGAR.forms.SetRequiredAction, SUGAR.forms.AbstractAction, {

    /**
     * Triggers the required dependencies.
     */
    exec: function(context)
    {
        if (typeof(context) == 'undefined')
		    context = this.context;
        var el = SUGAR.forms.AssignmentHandler.getElement(this.variable);
        this.required = this.evalExpression(this.expr, context);

        if ( typeof(SUGAR.forms.FormValidator) != 'undefined' )
            SUGAR.forms.FormValidator.setRequired(el.form.name, el.name, this.required);


        if (this._el_lbl != null && el != null) {
            var p = this._el_lbl,
                els = YAHOO.util.Dom.getElementsBy( function(e) { return e.className == 'req'; }, "span", p),
                reqSpan = false,
                fName = el.name;

            if ( els != null && els[0] != null)
                reqSpan = els[0];

            if ( (this.required == true  || this.required == 'true')) {
                if (!reqSpan) {
                    var node = document.createElement("span");
                    node.innerHTML = "<font color='red'>*</font>";
                    node.className = "req";
                    this._el_lbl.appendChild(node);

                    var i = this.findInValidate(this.context.formName, fName)
                    if (i > -1)
                        validate[this.context.formName][i][2] = true;
                    else
                        addToValidate(this.context.formName, fName, 'text', true, this.msg);
                }
            } else {
                if ( p != null  && reqSpan != false) {
                    p.removeChild(reqSpan);
                }
                var i = this.findInValidate(this.context.formName, fName)
                if (i > -1)
                    validate[this.context.formName][i][2] = false;
            }
        }
    },

     findInValidate : function(form, field)
     {
         if (validate && validate[form]){
             for (var i in validate[form]){
                if (typeof(validate[form][i]) == 'object' && validate[form][i][0] == field)
                    return i;
             }
         }
         return -1;
     }
});
		SUGAR.forms.AssignToUserAction = function(valExpr) {
			this.expr = valExpr;
			this.target = 'assigned_user_name';
			this.dataSource = new YAHOO.util.DataSource('index.php?', {
        		responseType: YAHOO.util.XHRDataSource.TYPE_JSON,
        		responseSchema: {
                    resultsList: 'fields',
                    total: 'totalCount',
                    metaNode: 'fields',
                    metaFields: {total: 'totalCount', fields:'fields'}
        		},
        		connMethodPost: true
            });
		};
		SUGAR.util.extend(SUGAR.forms.AssignToUserAction, SUGAR.forms.AbstractAction, {
			exec : function(context)
			{
				if (typeof(context) == 'undefined')
                    context = this.context;
				var userName = this.evalExpression(this.expr, context);
				var params = SUGAR.util.paramsToUrl({
                    to_pdf: 'true',
                    module: 'Home',
                    action: 'quicksearchQuery',
                    data: YAHOO.lang.JSON.stringify(sqs_objects['EditView_' + this.target]),
                    query: userName
                });
                this.sqs = sqs_objects['EditView_' + this.target];
				this.dataSource.sendRequest(params, {
	                	success:function(param, resp){
	                		if(resp.results.length > 0)
	                		{
	                			var match = resp.results[0];
	                			for (var i = 0; i < this.sqs.field_list.length; i++)
	                			{
	                				SUGAR.forms.AssignmentHandler.assign(this.sqs.populate_list[i], match[this.sqs.field_list[i]]);
	                			}
	                		}
						},
	                	scope:this
					});
			},
			targetUrl:'index.php?module=Home&action=TaxRate&to_pdf=1'
		});
		SUGAR.forms.ReadOnlyAction = function(target, expr) {
			if (_.isObject(target)){
                expr = target.value;
                target = target.target
            }
			this.target = target;
			this.expr = expr;
		}

		SUGAR.util.extend(SUGAR.forms.ReadOnlyAction, SUGAR.forms.AbstractAction, {
			/**
			 * Triggers the style dependencies.
			 */
			exec: function(context)
			{
				if (typeof(context) == 'undefined') context = this.context;
				var val = this.evalExpression(this.expr, context),
					set = val == SUGAR.expressions.Expression.TRUE;
				
				if (context.view) {
					var field = context.view.getField(this.target);
					if (field) {
						field.setDisabled(set);
					}
					context.view.setFieldMeta(this.target, {'readonly':set});
				}
				else {
					var el = SUGAR.forms.AssignmentHandler.getElement(this.target);
					if (!el)
						return;

					this.setReadOnly(el, set);
						this.setDateField(el, set);
				}

			},

			setReadOnly: function(el, set)
			{
				var D = YAHOO.util.Dom;
				var property = el.type == 'checkbox' || 'select' ? 'disabled' : 'readonly';
				el[property] = set;
				if (set)
				{
					D.setStyle(el, 'background-color', '#EEE');
					if (!SUGAR.isIE)
					   D.setStyle(el, 'color', '#22');
				} else
				{
					D.setStyle(el, 'background-color', '');
						if (!SUGAR.isIE)
							D.setStyle(el, 'color', '');
				}
			},

			setDateField: function(el, set)
			{
				var D = YAHOO.util.Dom, id = el.id, trig = D.get(id + '_trigger');
				if(!trig) return;
				var fields = [
					D.get(id + '_date'),
					D.get(id + '_minutes'),
					D.get(id + '_meridiem'),
					D.get(id + '_hours')];

				for (var i in fields)
					if (fields[i] && fields[i].id)
						this.setReadOnly(fields[i], set);

				if (set)
					D.setStyle(trig, 'display', 'none');
				else
					D.setStyle(trig, 'display', '');
			}
		});
		var App = App || null;
		SUGAR.forms.SetVisibilityAction = function(target, expr, view)
		{
			this.afterRender = true;
			if (_.isObject(target)){
				expr = target.value;
				target = target.target
			}
			this.target = target;
			this.expr	= 'cond(' + expr + ', "", "none")';
			this.view = view;

			if (!SUGAR.forms.SetVisibilityAction.initialized)
			{
				var head = document.getElementsByTagName('head')[0];
				var cssdef = '.vis_action_hidden * { visibility:hidden}'
				var newStyle = document.createElement('style');
				newStyle.setAttribute('type', 'text/css');
				if (newStyle.styleSheet)
					newStyle.styleSheet.cssText = cssdef;
				else
					newStyle.innerHTML = cssdef;
				head.appendChild(newStyle);
				SUGAR.forms.SetVisibilityAction.initialized = true;
			}
		}
		
		/**
		 * Triggers this dependency to be re-evaluated again.
		 */
		SUGAR.util.extend(SUGAR.forms.SetVisibilityAction, SUGAR.forms.AbstractAction, {
		
			/**
			 * Triggers the style dependencies.
			 */
			exec: function(context)
			{
				if (typeof(context) == 'undefined')
					context = this.context;
				try {
					var exp = this.evalExpression(this.expr, context);
					var hide =  exp == 'none' || exp == 'hidden';
					var target = context && context.getElement && context.getElement(this.target) || null;
					if (target != null) {
						if (SUGAR.App)
							this.sidecarExec(context, target, hide);
						else
							this.legacyExec(context, target, hide);
					}
				} catch (e) {
					if (console && console.log) console.log(e);
				}
			},
			sidecarExec : function(context, target, hide) {
				var inv_class = 'vis_action_hidden';
					wasHidden = $(target).hasClass(inv_class);
				if (hide)
				{
					context.addClass(this.target, inv_class, true);
					//Disable the field to prevent tabbing into the edit mode of the field
					context.setFieldDisabled(this.target, true);
				}
				else
				{
					context.removeClass(this.target, inv_class, true);
					context.setFieldDisabled(this.target, false);
					if (wasHidden)
						SUGAR.forms.FlashField(target, null, this.target);
				}
			},
			legacyExec : function(context, target, hide) {
				var Dom = YAHOO.util.Dom;
				var inv_class = 'vis_action_hidden',
					inputTD = Dom.getAncestorByTagName(target, 'TD'),
					labelTD = Dom.getPreviousSiblingBy(inputTD, function(e){
				if (e.tagName == 'TD') return true;
					return false;
				});
				this.wrapContent(labelTD);
				this.wrapContent(inputTD);
				var wasHidden = Dom.hasClass(labelTD, inv_class);
				if (hide)
				{
					Dom.addClass(labelTD, inv_class);
					Dom.addClass(inputTD, inv_class);
				}
				else
				{
					Dom.removeClass(labelTD, inv_class);
					Dom.removeClass(inputTD, inv_class);
					if (wasHidden && this.view == 'EditView')
						SUGAR.forms.FlashField(target);
				}
				this.checkRow(Dom.getAncestorByTagName(inputTD, 'TR'), inv_class);

			},
			//we need to wrap plain text nodes in a span in order to hide the contents without hiding the TD itesef
			wrapContent: function(el)
			{
				if (el && this.containsPlainText(el))
				{
					var span = document.createElement('SPAN');
					var nodes = [];
					for(var i = 0; i < el.childNodes.length ; i++)
					{
						nodes[i] = el.childNodes[i];
					}
					for(var i = 0 ; i < nodes.length; i++)
					{
						span.appendChild(nodes[i]);
					}
					el.appendChild(span);
				}
			},
			containsPlainText: function(el)
			{
				for(var i = 0; i < el.childNodes.length; i++)
				{
					var node = el.childNodes[i];
					if (node.nodeName == '#text' && YAHOO.lang.trim(node.textContent) != '') {
						return true;
					}
				}
				return false;
			},
			checkRow: function(el, inv_class)
			{
				var hide = true;
				for(var i = 0; i < el.children.length; i++)
				{
					var node = el.children[i];
					//For each row, check if the column has the inv_class class attribute, if not, do not hide
					if (node.tagName.toLowerCase() == 'td' && !YAHOO.util.Dom.hasClass(node, inv_class)) {
						hide = false;
						break;
					}
				}
				el.style.display = hide ? 'none' : '';
			}

		});
		SUGAR.forms.SetOptionsAction = function(target, keyExpr, labelExpr) {
			this.afterRender = true;
			if (_.isObject(target)){
				labelExpr = target.labels;
				keyExpr = target.keys;
				target = target.target
			}
			this.keyExpr = keyExpr;
			this.labelExpr = labelExpr;
			this.target = target;
		};
				
		SUGAR.util.extend(SUGAR.forms.SetOptionsAction, SUGAR.forms.AbstractAction, {
			exec: function(context) {
				if (typeof(context) == 'undefined')
					context = this.context;

				var keys = this.evalExpression(this.keyExpr, context),
					labels = this.evalExpression(this.labelExpr, context),
					empty = _.size(keys) === 1 && keys[0] === '';
					selected = '';

				if (context.view)
				{
					var field = context.view.getField(this.target);
					if (_.isString(labels))
						field.items = _.pick(App.lang.getAppListStrings(labels), keys);
					else
						field.items = _.object(keys, labels);

					slContext = context;

					field.model.fields[this.target].options = field.items;

					var visAction = new SUGAR.forms.SetVisibilityAction(this.target, (empty ? 'false' : 'true'), '');
					visAction.setContext(context);
					visAction.exec();
					if (!_.contains(keys, field.value)) {
						context.setValue(this.target, empty ? '' : keys[0]);
					}
				}
				else {
					var field = context.getElement(this.target);
					if ( field == null )	return null;


					if (keys instanceof Array && field.options != null)
					{
						// get the options of this select
						var options = field.options;

						for (var i = 0; i < options.length; i++) {
							if (options[i].selected)
								selected = options[i].value;
						}

						// empty the options
						while (options.length > 0) {
							field.remove(options[0]);
						}

						if (typeof(labels) == 'string') //get translated values from Sugar Language
						{
							var fullSet = SUGAR.language.get('app_list_strings', labels);
							labels = [];
							for (var i in keys)
							{
								labels[i] = fullSet[keys[i]];
							}
						}

						var new_opt;
						for (var i in keys) {
							if (labels instanceof Array)
							{
								if (typeof keys[i] == 'string')
								{
									if (typeof labels[i] == 'string') {
										new_opt = options[options.length] = new Option(labels[i], keys[i], keys[i] == selected);
									}
									else
									{
										new_opt = options[options.length] = new Option(keys[i], keys[i], keys[i] == selected);
									}
								}
							}
							else //Use the keys as labels
							{
								if (typeof keys[0] == 'undefined') {
									if (typeof(keys[i]) == 'string') {
										new_opt = options[options.length] = new Option(keys[i], i);
									}
								} else {
									if (typeof(value[i]) == 'string') {
										new_opt = options[options.length] = new Option(keys[i], keys[i]);
									}
								}
							}
							if (keys[i] == selected)
								new_opt.selected = true;

						}

						if(field.value != selected)
							SUGAR.forms.AssignmentHandler.assign(this.target, field.value);

						//Hide fields with empty lists
						var empty =  field.options.length == 1 && field.value == '';
						var visAction = new SUGAR.forms.VisibilityAction(this.target, (empty ? 'false' : 'true'), '');
						visAction.setContext(context);
						visAction.exec();

						if ( SUGAR.forms.AssignmentHandler.ANIMATE && !empty)
							SUGAR.forms.FlashField(field);
					}
					//Check if we are on a detailview and just need to hide the field
					else if (keys instanceof Array && (keys.length == 0 || (keys.length == 1 && keys[0] == ''))){
						//Use a normal visibility action to hide the field
						var va = new SUGAR.forms.VisibilityAction(this.target, 'false', '');
						va.exec(context);
					}
				}
			}
		});
/**
 * A style dependency is an object representation of a style change.
 */
SUGAR.forms.StyleAction = function(target, attrs)
{
    this.target = target;
    this.attrs  = attrs;
}

/**
 * Triggers this dependency to be re-evaluated again.
 */
SUGAR.util.extend(SUGAR.forms.StyleAction, SUGAR.forms.AbstractAction, {

    /**
     * Triggers the style dependencies.
     */
    exec: function(context)
    {
        if (typeof(context) == 'undefined')
            context = this.context;
        try {
            // a temp attributes array containing the evaluated version
            // of the original attributes array
            var temp = {};

            // evaluate the attrs, if needed
            for (var i in this.attrs)
            {
                temp[i] = this.evalExpression(this.attrs[i], context);
            }
            context.setStyle(this.target, temp);
        } catch (e) {return;}
    }
});/**
 * The function to object map that is used by the Parser
 * to parse expressions into objects.
 */
SUGAR.FunctionMap = {
	'dayofweek'	:	SUGAR.expressions.DayOfWeekExpression,	'monthofyear'	:	SUGAR.expressions.MonthOfYearExpression,	'daysUntil'	:	SUGAR.expressions.DaysUntilExpression,	'maxRelatedDate'	:	SUGAR.expressions.MaxRelatedDateExpression,	'date'	:	SUGAR.expressions.DefineDateExpression,	'addDays'	:	SUGAR.expressions.AddDaysExpression,	'today'	:	SUGAR.expressions.TodayExpression,	'timestamp'	:	SUGAR.expressions.TimestampExpression,	'now'	:	SUGAR.expressions.NowExpression,	'hourOfDay'	:	SUGAR.expressions.HourOfDayExpression,	'time'	:	SUGAR.expressions.DefineTimeExpression,	'count'	:	SUGAR.expressions.CountRelatedExpression,	'average'	:	SUGAR.expressions.AverageExpression,	'abs'	:	SUGAR.expressions.AbsoluteValueExpression,	'multiply'	:	SUGAR.expressions.MultiplyExpression,	'divide'	:	SUGAR.expressions.DivideExpression,	'rollupMin'	:	SUGAR.expressions.MinRelatedExpression,	'strlen'	:	SUGAR.expressions.StringLengthExpression,	'median'	:	SUGAR.expressions.MedianExpression,	'rollupSum'	:	SUGAR.expressions.SumRelatedExpression,	'floor'	:	SUGAR.expressions.FloorExpression,	'rollupMax'	:	SUGAR.expressions.MaxRelatedExpression,	'rollupAve'	:	SUGAR.expressions.AverageRelatedExpression,	'log'	:	SUGAR.expressions.LogExpression,	'add'	:	SUGAR.expressions.AddExpression,	'max'	:	SUGAR.expressions.MaximumExpression,	'negate'	:	SUGAR.expressions.NegateExpression,	'min'	:	SUGAR.expressions.MinimumExpression,	'pow'	:	SUGAR.expressions.PowerExpression,	'countConditional'	:	SUGAR.expressions.CountConditionalRelatedExpression,	'ceil'	:	SUGAR.expressions.CeilingExpression,	'ceiling'	:	SUGAR.expressions.CeilingExpression,	'indexOf'	:	SUGAR.expressions.IndexOfExpression,	'stddev'	:	SUGAR.expressions.StandardDeviationExpression,	'number'	:	SUGAR.expressions.ValueOfExpression,	'ln'	:	SUGAR.expressions.NaturalLogExpression,	'subtract'	:	SUGAR.expressions.SubtractExpression,	'rollupCurrencySum'	:	SUGAR.expressions.CurrencySumRelatedExpression,	'isValidDBName'	:	SUGAR.expressions.IsValidDBNameExpression,	'isValidTime'	:	SUGAR.expressions.IsValidTimeExpression,	'isValidEmail'	:	SUGAR.expressions.IsValidEmailExpression,	'equal'	:	SUGAR.expressions.EqualExpression,	'or'	:	SUGAR.expressions.OrExpression,	'isRequiredCollection'	:	SUGAR.expressions.IsRequiredCollectionExpression,	'doBothExist'	:	SUGAR.expressions.BinaryDependencyExpression,	'and'	:	SUGAR.expressions.AndExpression,	'not'	:	SUGAR.expressions.NotExpression,	'greaterThan'	:	SUGAR.expressions.GreaterThanExpression,	'isInList'	:	SUGAR.expressions.IsInEnumExpression,	'isInEnum'	:	SUGAR.expressions.IsInEnumExpression,	'isAfter'	:	SUGAR.expressions.isAfterExpression,	'isAlphaNumeric'	:	SUGAR.expressions.IsAlphaNumericExpression,	'isNumeric'	:	SUGAR.expressions.IsNumericExpression,	'isAlpha'	:	SUGAR.expressions.IsAlphaExpression,	'isValidDate'	:	SUGAR.expressions.IsValidDateExpression,	'isBefore'	:	SUGAR.expressions.isBeforeExpression,	'isValidPhone'	:	SUGAR.expressions.IsValidPhoneExpression,	'isWithinRange'	:	SUGAR.expressions.IsInRangeExpression,	'related'	:	SUGAR.expressions.RelatedFieldExpression,	'ifElse'	:	SUGAR.expressions.ConditionExpression,	'cond'	:	SUGAR.expressions.ConditionExpression,	'sugarField'	:	SUGAR.expressions.SugarFieldExpression,	'valueAt'	:	SUGAR.expressions.IndexValueExpression,	'subStr'	:	SUGAR.expressions.SubStrExpression,	'strToUpper'	:	SUGAR.expressions.StrToUpperExpression,	'concat'	:	SUGAR.expressions.ConcatenateExpression,	'contains'	:	SUGAR.expressions.ContainsExpression,	'translateLabel'	:	SUGAR.expressions.SugarTranslateExpression,	'translate'	:	SUGAR.expressions.SugarTranslateExpression,	'formatName'	:	SUGAR.expressions.FormatedNameExpression,	'getDropdownValue'	:	SUGAR.expressions.SugarDropDownValueExpression,	'getDDValue'	:	SUGAR.expressions.SugarDropDownValueExpression,	'charAt'	:	SUGAR.expressions.CharacterAtExpression,	'strToLower'	:	SUGAR.expressions.StrToLowerExpression,	'toString'	:	SUGAR.expressions.DefineStringExpression,	'string'	:	SUGAR.expressions.DefineStringExpression,	'createList'	:	SUGAR.expressions.DefineEnumExpression,	'enum'	:	SUGAR.expressions.DefineEnumExpression,	'getDropdownKeySet'	:	SUGAR.expressions.SugarDropDownExpression,	'getDD'	:	SUGAR.expressions.SugarDropDownExpression,	'getDropdownValueSet'	:	SUGAR.expressions.SugarTranslatedDropDownExpression,	'getTransDD'	:	SUGAR.expressions.SugarTranslatedDropDownExpression};
/**
 * The function to object map that is used by the Parser
 * to parse expressions into objects.
 */
SUGAR.NumericConstants = {
	'pi'	:	3.1415926535898,	'e'	:	2.718281828459};
