<?php
if ( !defined('sugarEntry') || !sugarEntry ) {
    die('Not A Valid Entry Point');
}
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

/*********************************************************************************

 * Description: TODO:  To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

// User is used to store Forecast information.
class Forecast extends SugarBean
{

    public $id;
    public $user_id;
    public $forecast_type;
    public $opp_count;
    public $opp_weigh_value;
    public $likely_case;
    public $current;
    public $timeperiod_id;
    public $name;
    public $start_date;
    public $end_date;
    public $date_modified;
    public $best_case;
    public $worst_case;
    public $pipeline_opp_count;
    public $pipeline_amount;

    public $currency;
    public $currencysymbol;
    public $currency_id;
    public $base_rate;

    public $table_name = "forecasts";

    public $object_name = "Forecast";
    public $user_preferences;

    public $encodeFields = Array();

    // This is used to retrieve related fields from form posts.
    public $additional_column_fields = Array('');


    public $new_schema = true;
    public $module_dir = 'Forecasts';

    public $disable_custom_fields = true;


    /**
     * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @deprecated
     */
    public function Forecast()
    {
        self::__construct();
    }

	public function __construct()
	{
		global $current_user;
		parent::__construct();
		$this->setupCustomFields('Forecasts'); //parameter is module name
		$this->disable_row_level_security = true;

		$this->currency = BeanFactory::getBean('Currencies');
		if ( isset($current_user) ) {
			$this->currency->retrieve($current_user->getPreference('currency'));
		}
		else {
			$this->currency->retrieve('-99');
		}
		$this->currencysymbol = $this->currency->symbol;
        $this->base_rate = $this->currency->conversion_rate;
    }


    function get_summary_text()
    {
        return $this->name;
    }


    function retrieve( $id, $encode = false, $deleted = true )
    {
        $ret = parent::retrieve($id, $encode, $deleted);

        return $ret;
    }
    
    /**
     * Generates Pipeline Data for this forecast
     * 
     * @param int closed amount
     * @param int closed count
     */
     public function calculatePipelineData($closedAmount, $closedCount)
     {        
     	$this->pipeline_amount = $this->likely_case - $closedAmount;
        $this->pipeline_opp_count = $this->opp_count - $closedCount;
        
        $this->pipeline_amount = ($this->pipeline_amount < 0)? 0: $this->pipeline_amount;
        $this->pipeline_opp_count = ($this->pipeline_opp_count < 0)? 0: $this->pipeline_opp_count;
        $this->closed_amount = $closedAmount;
     }

    function is_authenticated()
    {
        return $this->authenticated;
    }

    function fill_in_additional_list_fields()
    {
        if ( isset($this->best_case) && !empty($this->best_case) ) {
            $this->best_case = SugarCurrency::convertAmountFromBase($this->best_case, $this->currency_id);
        }
        if ( isset($this->worst_case) && !empty($this->worst_case) ) {
            $this->worst_case = SugarCurrency::convertAmountFromBase($this->worst_case, $this->currency_id);
        }
        if ( isset($this->likely_case) && !empty($this->likely_case) ) {
            $this->likely_case = SugarCurrency::convertAmountFromBase($this->likely_case, $this->currency_id);
        }
	}


	function fill_in_additional_detail_fields()
	{
	}


	function list_view_parse_additional_sections( &$list_form, $xTemplateSection )
	{
		return $list_form;
	}


	function create_export_query( $order_by, $where )
	{
		$query = "SELECT
				forecasts.*";
		$query .= " FROM forecasts ";
		$where_auto = '1=1';
		if ( empty($show_deleted) ) {
			$where_auto = " forecasts.deleted = 0";
		}
		else {
			if ( $show_deleted == 1 ) {
				$where_auto = " forecasts.deleted = 1";
			}
		}

		if ( $where != "" ) {
			$query .= " WHERE $where AND " . $where_auto;
		}
		else {
			$query .= " WHERE " . $where_auto;
		}

		if ( $order_by != "" ) {
			$query .= " ORDER BY $order_by";
		}
		else {
			$query .= " ORDER BY forecasts.date_entered desc";
		}

		return $query;
	}


	/**
	 * Return the list query used by the list views and export button.
     * Next generation of create_new_list_query function.
     *
     * Override this function to return a custom query.
     *
     * @param string  $order_by     custom order by clause
     * @param string  $where        custom where clause
     * @param array   $filter       Optional (not implemented)
     * @param array   $params       Optional (not implemented)
     * @param int     $show_deleted Optional, default 0, show deleted records is set to 1.
     * @param string  $join_type    (not implemented)
     * @param boolean $return_array Optional, default false, response as array
     * @param object  $parentbean   creating a sub-query for this bean (not implemented)
     * @param boolean $singleSelect Optional, default false (not implemented)
     *
     * @return String select query string, optionally an array value will be returned if $return_array= true.
     */
    function create_new_list_query( $order_by, $where, $filter = array(), $params = array(), $show_deleted = 0, $join_type = '', $return_array = false, $parentbean = NULL, $singleSelect = false )
    {
        global $current_user;
        $ret_array           = array();
        $ret_array['select'] = "SELECT tp.name timeperiod_name, tp.start_date start_date, tp.end_date end_date, forecasts.* ";
        $ret_array['from']   = " FROM forecasts LEFT JOIN timeperiods tp on forecasts.timeperiod_id = tp.id  ";
        $ret_array['where']  = !empty($where) ? ' WHERE ' . $where : '';

        //if order by just has asc or des
        $temp_order = trim($order_by);
        $temp_order = strtolower($temp_order);
        if ( $temp_order == 'asc' || $temp_order == 'desc' ) {
            $order_by = '';
        }

        $ret_array['order_by'] = !empty($order_by) ? ' ORDER BY ' . $order_by : '  ORDER BY forecasts.date_entered desc';

        if ( $return_array ) {
            return $ret_array;
        }

        return $ret_array['select'] . $ret_array['from'] . $ret_array['where'] . $ret_array['order_by'];
    }


    function get_list_view_data()
    {
        $forecast_fields = $this->get_list_view_array();

        global $timedate;
        $forecast_fields['START_DATE']      = $forecast_fields['START_DATE'];
        $forecast_fields['END_DATE']        = $forecast_fields['END_DATE'];
        $forecast_fields['LIKELY_CASE']     = format_number($forecast_fields['LIKELY_CASE'], 0, 0);
        $forecast_fields['BEST_CASE']       = format_number($forecast_fields['BEST_CASE'], 0, 0);
        $forecast_fields['WORST_CASE']      = format_number($forecast_fields['WORST_CASE'], 0, 0);
        $forecast_fields['OPP_WEIGH_VALUE'] = format_number($forecast_fields['OPP_WEIGH_VALUE'], 0, 0);

        return $forecast_fields;
    }


    /**
     * Retrieve forecast data for user given a timeperiod.  By default uses the currently logged-in
     * user and the current timeperiod.
     * 
     * @param String $user_id
     * @param String $timeperiod_id
     * @param bool   $should_rollup     False to use direct numbers, true to use rollup.
     */
    function getForecastForUser($user_id=NULL, $timeperiod_id, $should_rollup=FALSE)
    {
        global $current_user;
        if ( is_null($user_id) ) {
            $user_id = $current_user->id;
        }
        
        $where = "user_id='{$user_id}'";
        
        if ( $should_rollup ) {
            $where .= " AND forecast_type='Rollup'";
        } else {
            $where .= " AND forecast_type='Direct'";
        }
        
        if ( !is_null($timeperiod_id)  ) {
            $where .= " AND timeperiod_id='{$timeperiod_id}'";
        } else {
            $where .= " AND timeperiod_id='" . TimePeriod::getCurrentId() . "'";
        }
        
        $query = $this->create_new_list_query(NULL, $where);
        
        $result = $this->db->query($query, true, 'Error retrieving user forecast information: ');
        
        return $this->db->fetchByAssoc($result);
    }


    function bean_implements( $interface )
    {
        switch ( $interface ) {
            case 'ACL':
                return true;
        }
        return false;
    }

    /*
     * save forecast to database
     */
    public function save($check_notify = false)
    {
        // set the currency for the forecast to always be the base currency
        // since the committed end point only sends the data as the base currency format
        if(empty($this->currency_id)) {
            // use user preferences for currency
            $currency = SugarCurrency::getBaseCurrency();
            $this->currency_id = $currency->id;
        } else {
            $currency = SugarCurrency::getCurrencyByID($this->currency_id);
        }
        $this->base_rate = $currency->conversion_rate;

        parent::save($check_notify);
    }
}
function getTimePeriodsDropDownForForecasts(){
    return TimePeriod::get_timeperiods_dom();
}
?>
