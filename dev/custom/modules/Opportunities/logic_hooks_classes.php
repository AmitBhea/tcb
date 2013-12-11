<?php
/*
*@File:logic_hooks_classes.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:This file is used to create a record
* in the Membership module by populating few
* values from the Opportunities and Membership Level
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class logic_hooks_classes
{
	function after_save_method($bean,$event,$arguements)
	{
		/**
		 * Upon Closed Won
		 */
		if($bean->sales_stage == "Closed Won")
		{
				$opp_fee = $bean->membership_fee_c;
				$opp_discount = $bean->discount_c;
				$opp_final_fee = $bean->final_membership_fee_c;
				
				$opp_type = $bean->opportunity_type;
				$opp_subtype = $bean->subtype_c;
				$opp_rel_field = $bean->bhea_member_levels_opportunities_1bhea_member_levels_ida;
				
				$opp_act_close_date = $bean->actual_close_date_c;
				
				/*
				 * To retrieve the company Id
				 */
				 
				$module = "Accounts";
				$id = $bean->account_id;
				$comp_obj = BeanFactory::getBean($module,$id);
				$opp_company_id = $comp_obj->company_id_c;

				/**
				 * fetch the Membership levels from Membership Level
				 */
				 
				$module = "Bhea_member_levels";
				$id = $bean->bhea_member_levels_opportunities_1_name;
				$mem_lvl_obj = BeanFactory::getBean($module,$id);
				
				$mem_period = $mem_lvl_obj->mem_period;
				

				global $app_list_strings;
				$key = $app_list_strings['mem_period_list'][$mem_period];
				$opp_type_key = $app_list_strings['opportunity_type_list'][$opp_type];
				$opp_subtype_key = $app_list_strings['subtype_list'][$opp_subtype];
				/*
				 * Create a record in Memberships module
				 */
				$module = "Bhea_Memberships";
				$obj = BeanFactory::newBean($module);
				$obj->mem_fee = $opp_fee;
				$obj->discount_c = $opp_discount;
				$obj->final_mem_fee_c = $opp_final_fee;
				$obj->mem_period = $key;
			
				$obj->bhea_member_levels_bhea_memberships_1bhea_member_levels_ida = $opp_rel_field;
				
				$obj->start_date = $opp_act_close_date;
				$obj->mem_type = $opp_subtype_key;
				
				/*
				 * Trim the type and subtype
				 * in order to use it as name
				 */
				$opp_type_key_three = substr($opp_type_key,0,3);
				$opp_subtype_key_three = substr($opp_subtype_key,0,3);
		
				$obj->name = $opp_company_id."-".$opp_type_key_three."-".$opp_subtype_key_three;
				
				$obj->save();	
		}	
	}		
}
