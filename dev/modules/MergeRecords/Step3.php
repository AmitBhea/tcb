<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
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

require_once ('include/JSON.php');
$timedate = TimeDate::getInstance();
global $app_strings;
global $mod_strings;
global $app_list_strings;
global $current_language;
global $urlPrefix;
global $currentModule;
global $theme;
global $filter_for_valid_editable_attributes;
//filter condition for fields in vardefs that can participate in merge.
$filter_for_valid_editable_attributes =
    array(
		array('type'=>'datetimecombo','source'=>'db'),
         array('type'=>'datetime','source'=>'db'),
         array('type'=>'varchar','source'=>'db'),
         array('type'=>'enum','source'=>'db'),
         array('type'=>'multienum','source'=>'db'),
         array('type'=>'text','source'=>'db'),
         array('type'=>'date','source'=>'db'),
         array('type'=>'time','source'=>'db'),
         array('type'=>'int','source'=>'db'),
         array('type'=>'long','source'=>'db'),
         array('type'=>'double','source'=>'db'),
         array('type'=>'float','source'=>'db'),
         array('type'=>'short','source'=>'db'),
         array('dbType'=>'varchar','source'=>'db'),
         array('dbType'=>'double','source'=>'db'),
         array('type'=>'relate'),
    );

$filter_for_valid_related_attributes   = array( array('type'=>'link'),);
$filter_for_invalid_related_attributes   = array(array('type'=>'link','link_type'=>'one'));

//following attributes will be ignored from the merge process.
$invalid_attribute_by_name= array('date_entered'=>'date_entered','date_modified'=>'date_modified','modified_user_id'=>'modified_user_id', 'created_by'=>'created_by','deleted'=>'deleted');

$merge_ids_array = array ();
if (isset($_REQUEST['change_parent']) && $_REQUEST['change_parent']=='1') {
   $base_id=$_REQUEST['change_parent_id'];
     foreach ($_REQUEST['merged_ids'] as $id) {
        if ($id != $base_id) {
            $merge_ids_array[] = $id;
        }
     }
     //add the existing parent to merged_id array.
     $merge_ids_array[] = $_REQUEST['record'];
} elseif (isset($_REQUEST['remove']) && $_REQUEST['remove']=='1') {
    $base_id=$_REQUEST['record'];
    $removed_id= $_REQUEST['remove_id'];
     foreach ($_REQUEST['merged_ids'] as $id) {
        if ($id != $removed_id) {
            $merge_ids_array[] = $id;
        }
     }
} else {
    $base_id=$_REQUEST['record'];
     foreach ($_REQUEST['mass'] as $id) {
        $merge_ids_array[] = $id;
     }
}
$focus = BeanFactory::getBean('MergeRecords');
$focus->load_merge_bean($_REQUEST['merge_module'], true, $base_id);
$params = array();
$params[] = "<a href='index.php?module={$focus->merge_bean->module_dir}&action=index'>{$GLOBALS['app_list_strings']['moduleList'][$focus->merge_bean->module_dir]}</a>";
$params[] = $mod_strings['LBL_MODULE_NAME'];
$params[] = $focus->merge_bean->name;
echo getClassicModuleTitle($focus->merge_bean->module_dir, $params, true);

$mergeBeanArray = array ();
$records=1;
//render a column for each record to merge
$merged_ids='';
$merge_records_names=array();
foreach ($merge_ids_array as $id) {
    $mergeBeanArray[$id] = BeanFactory::getBean($focus->merge_module, $id);
    $merge_records_names[]=$mergeBeanArray[$id]->get_summary_text();
    $records++;
    $merged_ids.="<input type='hidden' name='merged_ids[]' value='$id'>";
}

$col_width=floor(80/$records).'%';
global $max_data_length;
$max_data_length=floor(65/$records);
global $xtpl;
$xtpl = new XTemplate("modules/MergeRecords/Step3.html");
$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);

$xtpl->assign("ID", $focus->merge_bean->id);
$xtpl->assign("MERGE_MODULE", $focus->merge_module);

$xtpl->assign("MERGED_IDS", $merged_ids);

//set return parameters.
if (!empty ($_REQUEST['return_module'])) {
    $xtpl->assign("RETURN_MODULE", $_REQUEST['return_module']);
}
if (!empty ($_REQUEST['return_action'])) {
    $xtpl->assign("RETURN_ACTION", $_REQUEST['return_action']);
}
if (!empty ($_REQUEST['return_id'])) {
    $xtpl->assign("RETURN_ID", $_REQUEST['return_id']);
}

$temp_field_array = $focus->merge_bean->field_defs;
$field_count = 1;
$json = new JSON(JSON_LOOSE_TYPE);
$diff_field_count=0;
$focus->merge_bean->ACLFilterFieldList($temp_field_array, array(), array("min_access" => SugarACL::ACL_READ_WRITE));
foreach ($temp_field_array as $field_array) {
    if (show_field($field_array)) {

        $select_row_curr_field_value = null;
        $b_values_different = false;
        $section_name='merge_row_similar';

        //Prcoess locaton of the field. if values are different show field in first section. else 2nd.
        $select_row_curr_field_value = $focus->merge_bean->$field_array['name'];
        foreach ($merge_ids_array as $id) {
            if (($mergeBeanArray[$id]-> $field_array['name']=='' and $select_row_curr_field_value =='') or $mergeBeanArray[$id]-> $field_array['name'] == $select_row_curr_field_value ) {
                $section_name='merge_row_similar';
            } else  {
                $section_name='merge_row_diff';
                $diff_field_count++;
                break; //foreach
            }
        }
        //check for vname in mod strings first, then app, else just display name
        $col_name = $field_array['name'];
        if (isset ($focus->merge_bean_strings[$field_array['vname']]) && $focus->merge_bean_strings[$field_array['vname']] != '')
            $xtpl->assign("FIELD_LABEL", $focus->merge_bean_strings[$field_array['vname']]);
        elseif (isset ($app_strings[$field_array['vname']]) && $app_strings[$field_array['vname']] != '') $xtpl->assign("FIELD_LABEL", $app_strings[$field_array['vname']]);
        else
             $xtpl->assign("FIELD_LABEL", $field_array['name']);
        //if required add signage.
        if (!empty($focus->merge_bean->required_fields[$col_name]) or $col_name=='team_name') {
            $xtpl->assign("REQUIRED_SYMBOL","<span class='required'>".$app_strings['LBL_REQUIRED_SYMBOL']."</span>");
        } else {
            $xtpl->assign("REQUIRED_SYMBOL","");
        }

        $xtpl->assign("CELL_WIDTH", "20%");
        $xtpl->parse("main.".$section_name.".merge_cell_label");

        if (isset ($field_array['custom_type']) && $field_array['custom_type'] != '')
            $field_check = $field_array['custom_type'];
        else
            $field_check = $field_array['type'];


        if(preg_match('/.*?_address_street$/', $field_array['name'])) {
           $field_check = 'text';
        }

        $xtpl->assign("EDIT_FIELD_NAME", $field_array['name']);
        $xtpl->assign("TAB_INDEX", $field_count);

        switch ($field_check) {
            case ('name') :
            case ('varchar') :
            case ('phone') :
            case ('num') :
            case ('email') :
            case ('custom_fields') :
            case ('url') :
            case ('int') :
            case ('float') :
            case ('double') :
            case ('currency') :

                $xtpl->assign("EDIT_FIELD_VALUE", $select_row_curr_field_value);
                $xtpl->assign("CELL_WIDTH", $col_width);
                $xtpl->parse("main.".$section_name.".merge_cell_edit_text");
                break;
            case ('text') :
                $xtpl->assign("EDIT_FIELD_VALUE", $select_row_curr_field_value);
                $xtpl->assign("CELL_WIDTH", $col_width);
                $xtpl->parse("main.".$section_name.".merge_cell_edit_textarea");
                break;
            case ('enum') :
                $xtpl->assign("SELECT_OPTIONS", get_select_options_with_id($app_list_strings[$field_array['options']], $select_row_curr_field_value));
                $xtpl->assign("CELL_WIDTH",$col_width);
                $xtpl->parse("main.".$section_name.".merge_cell_edit_dropdown");
                break;
            case ('multienum') :
                $select_row_curr_field_value = unencodeMultienum($select_row_curr_field_value);
                $xtpl->assign("SELECT_OPTIONS", get_select_options_with_id($app_list_strings[$field_array['options']], $select_row_curr_field_value));
                $xtpl->assign("CELL_WIDTH",$col_width);
                $xtpl->parse("main.".$section_name.".merge_cell_edit_multidropdown");
                break;
                //popup fields need to be fixed.., cant automate with vardefs
            case ('relate') :
                if(!empty($field_array['link'])) {
                    $exclude[$field_array['link']] = $field_array['link'];
                }
            case ('link') :
                //get_related_name
                if (empty($select_row_curr_field_value)) {
                    $related_name=get_related_name($field_array,$focus->merge_bean->$field_array['id_name']);
                    if ($related_name !== false ) {
                       $select_row_curr_field_value=$related_name;
                    }
                }
                if($field_check == 'link') {//relate type should not enter this.
                    $exclude[$field_array['name']] = $field_array['name'];
                }
                $xtpl->assign("POPUP_ID_FIELD", $field_array['id_name']);
                $xtpl->assign("POPUP_NAME_FIELD", $field_array['name']);
                $xtpl->assign("POPUP_NAME_VALUE", $select_row_curr_field_value);
                $xtpl->assign("POPUP_ID_VALUE", $focus->merge_bean-> $field_array['id_name']);
                $xtpl->assign("POPUP_MODULE", $field_array['module']);
                $xtpl->assign("CELL_WIDTH", $col_width);
                $xtpl->assign("MERGED_LINKS", implode(',', $exclude));

                $popup_data = array ('call_back_function' => 'set_return', 'form_name' => 'EditView', 'field_to_name_array' => array ('id' => $field_array['id_name'], 'name' => $field_array['name'],),);
                $xtpl->assign('ENCODED_POPUP_DATA', $json->encode($popup_data));

                $xtpl->parse("main.".$section_name.".merge_cell_edit_popup");
                break;
            case ('bool') :
                if (($select_row_curr_field_value == '1' || $select_row_curr_field_value == 'yes' || $select_row_curr_field_value == 'on') && !empty($select_row_curr_field_value))
                    $xtpl->assign("EDIT_FIELD_VALUE", " checked");
                else
                    $xtpl->assign("EDIT_FIELD_VALUE", "");

                $xtpl->assign("CELL_WIDTH", $col_width);
                $xtpl->parse("main.".$section_name.".merge_cell_edit_checkbox");
                break;
            case ('date') :
            case ('datetime') :
                $xtpl->assign("CALENDAR_LANG", "en");
                $xtpl->assign("USER_DATEFORMAT", '('.$timedate->get_user_date_format().')');
                $xtpl->assign("CALENDAR_DATEFORMAT", $timedate->get_cal_date_format());
                $xtpl->assign("EDIT_FIELD_VALUE", $select_row_curr_field_value);
                $xtpl->assign("CELL_WIDTH", $col_width);
                $xtpl->assign("THEME", $theme);
                $xtpl->parse("main.".$section_name.".merge_cell_edit_date");
                break;
			case ('datetimecombo') :
				$xtpl->assign("CALENDAR_LANG", "en");
                $xtpl->assign("USER_DATEFORMAT", $timedate->get_user_time_format());
                $xtpl->assign("CALENDAR_DATEFORMAT", $timedate->get_cal_date_format());
                $xtpl->assign("EDIT_FIELD_VALUE", $select_row_curr_field_value);
                $xtpl->assign("CELL_WIDTH", $col_width);
                $xtpl->assign("THEME", $theme);
                $xtpl->parse("main.".$section_name.".merge_cell_edit_datetime");
                break;
            case ('teamset') :

				require_once('include/SugarFields/Fields/Teamset/EmailSugarFieldTeamsetCollection.php');
				$mod = isset($_REQUEST['action_module']) ? $_REQUEST['action_module'] : $_REQUEST['merge_module'];
				$bean = BeanFactory::getBean($mod, $base_id);
				$teamsWidget = new EmailSugarFieldTeamsetCollection($bean, $bean->field_defs, '', 'EditView');
				$teamsWidget->hideShowHideButton = true;
				$xtpl->assign('TEAM_FIELD', $teamsWidget->get_code());
				$xtpl->assign('TEAM_FIELD_QUICKSEARCH', $teamsWidget->createQuickSearchCode(true));
				$xtpl->parse("main.".$section_name.".merge_cell_edit_teamset");
                break;
            default :
                break;
        }

        //render a column for each selected record to merge
        foreach ($merge_ids_array as $id) {
            $xtpl->assign("CELL_WIDTH", $col_width);
            $field_name=null;
            switch ($field_check) {
                case ('bool') :
                    if (($mergeBeanArray[$id]->$field_array['name'] == '1' || $mergeBeanArray[$id]->$field_array['name'] == 'yes' || $mergeBeanArray[$id]->$field_array['name'] == 'on') && !empty($mergeBeanArray[$id]->$field_array['name'])) {
                        $xtpl->assign("FIELD_VALUE", " checked");
                    } else {
                        $xtpl->assign("FIELD_VALUE", "");
                    }
                    $field_name="main.".$section_name.".merge_cell_field_value_checkbox";
                    break;
                case ('enum') :
                    if ($mergeBeanArray[$id]-> $field_array['name'] != '' and isset($field_array['options']) and isset($app_list_strings[$field_array['options']][$mergeBeanArray[$id]-> $field_array['name']])) {
                        display_field_value( $app_list_strings[$field_array['options']][$mergeBeanArray[$id]-> $field_array['name']]);
                    } else {
                        display_field_value($mergeBeanArray[$id]-> $field_array['name']);
                    }
                    $field_name="main.".$section_name.".merge_cell_field_value";
                    break;
                case ('multienum') :
                    if ($mergeBeanArray[$id]-> $field_array['name'] != '' and isset($field_array['options']) and isset($app_list_strings[$field_array['options']][$mergeBeanArray[$id]-> $field_array['name']])) {
                        display_field_value(str_replace("^","",$app_list_strings[$field_array['options']][$mergeBeanArray[$id]-> $field_array['name']]));
                    } else {
                        display_field_value(str_replace("^","",$mergeBeanArray[$id]-> $field_array['name']));
                    }
                    $field_name="main.".$section_name.".merge_cell_field_value";
                    break;
                case ('relate') :
                case ('link') :
                    $related_name=false;
                    if (empty($mergeBeanArray[$id]-> $field_array['name']) && !empty($mergeBeanArray[$id]-> $field_array['id_name'])) {
                       $related_name=get_related_name($field_array,$mergeBeanArray[$id]-> $field_array['id_name']);
                       if ($related_name !== false) {
                            $mergeBeanArray[$id]-> $field_array['name']=$related_name;
                       }
                    }
               	    display_field_value($mergeBeanArray[$id]-> $field_array['name']);
                    $field_name="main.".$section_name.".merge_cell_field_value";
                    break;
                case ('teamset') :
					require_once('modules/Teams/TeamSetManager.php');
					display_field_value(TeamSetManager::getCommaDelimitedTeams($mergeBeanArray[$id]->team_set_id, $mergeBeanArray[$id]->team_id, true));
					$field_name="main.".$section_name.".merge_cell_field_value";
	            	break;
                default :
                    display_field_value($mergeBeanArray[$id]-> $field_array['name']);
                    $field_name="main.".$section_name.".merge_cell_field_value";
                    break;
            }

            $json_data = array ('field_name' => $field_array['name'], 'field_type' => $field_check,);
            //add an array of fields/values to the json array
            //for setting all the values for merge
            if ($field_check == 'relate' or $field_check == 'link') {
                $temp_array = Array ();
                $json_data['popup_fields'] = Array ($field_array['name'] => $mergeBeanArray[$id]-> $field_array['name'], $field_array['id_name'] => $mergeBeanArray[$id]-> $field_array['id_name'],);
            } else if($field_check == 'teamset') {
            	$json_data['field_value'] = TeamSetManager::getCommaDelimitedTeams($mergeBeanArray[$id]->team_set_id, $mergeBeanArray[$id]->team_id, true);
            	$json_data['field_value2'] = TeamSetManager::getTeamsFromSet($mergeBeanArray[$id]->team_set_id);
            	$json_data['field_value3'] =  $mergeBeanArray[$id]->team_set_id;
            } else if($field_check == 'multienum') {
                $json_data['field_value'] = unencodeMultienum($mergeBeanArray[$id]-> $field_array['name']);
            } else {
                $json_data['field_value'] = $mergeBeanArray[$id]-> $field_array['name'];
            }
            $encoded_json_data = $json->encode($json_data);
            $xtpl->assign('ENCODED_JSON_DATA', $encoded_json_data);
            $xtpl->parse($field_name);
        }

        $xtpl->parse("main.".$section_name);
        $field_count ++;
    }
}

$header_cols= array();
foreach ($merge_ids_array as $id) {
  $td="<td width='$col_width' valign='top' class='dataLabel' align='left'><input type='button' class='button' id='$id' onclick=\"change_primary(this,'{$id}');\" value='<<'>&nbsp;{$mod_strings['LBL_CHANGE_PARENT']}";
  if (count($merge_ids_array) > 1) {
    $td.="&nbsp;|<a id='remove_$id' onclick=\"remove_me(this,'{$id}');\" href='#' >{$mod_strings['LBL_REMOVE_FROM_MERGE']}</a>";
  }
  $td.="</td>";
  $header_cols[]=$td;
}

if ($diff_field_count>0) {
    $xtpl->assign("DIFF_HEADER","<tr height='20'><td colspan=2><strong>{$mod_strings['LBL_DIFF_COL_VALUES']}</strong></td>".implode(' ',$header_cols)."</tr>");
    $xtpl->assign("SIMILAR_HEADER","<tr height='20'><td colspan=20><strong>{$mod_strings['LBL_SAME_COL_VALUES']}</strong></td></tr>");
    $xtpl->assign("GROUP_PARTITION","<tr height=3><td colspan=20' class='listViewHRS1'></td></tr>");
} else {
    $xtpl->assign("SIMILAR_HEADER","<tr height='20'><td colspan=2><strong>{$mod_strings['LBL_SAME_COL_VALUES']}</strong></td>".implode(' ',$header_cols)."</tr>");
}
$merge_verify=$mod_strings['LBL_DELETE_MESSAGE'].'\\n';
foreach ($merge_records_names as $name) {
	$merge_verify.= $name."\\n";
}
$merge_verify.='\\n'.$mod_strings['LBL_PROCEED'];
$xtpl->assign("MERGE_VERIFY",$merge_verify);

global $beanList;

//Jenny - Bug 8386 - The object_name couldn't be found because it was searching for
// 'Case' instead of 'aCase'.
if ($focus->merge_bean->object_name == 'Case') {
    $focus->merge_bean->object_name = 'aCase';
}

$mod=array_search($focus->merge_bean->object_name,$beanList);
$mod_strings = return_module_language($current_language, $mod);

//add javascript for required fields enforcement.

$javascript = new javascript();
$javascript->setFormName('EditView');
$javascript->setSugarBean($focus->merge_bean);
$javascript->addAllFields('');
if (isset($focus->merge_bean->field_defs['team_name'])) {
    $javascript->addFieldGeneric('team_name', 'varchar', $app_strings['LBL_TEAM'] ,'true');
}
$xtpl->assign("VALIDATION_JS", $javascript->getScript());

$xtpl->parse("main");
$xtpl->out("main");

/*
 * function truncates values to max_data_legth and adds the complete value as hover text.
 */
function display_field_value($value) {
    global $xtpl, $max_data_length, $mod_strings;
    if (strlen($value)-$max_data_length > 3) {
        $xtpl->assign("FIELD_VALUE", substr($value,0,$max_data_length).'...');
    } else {
        $xtpl->assign("FIELD_VALUE", $value);
    }
    $xtpl->assign("HOVER_TEXT", $mod_strings['LBL_MERGE_VALUE_OVER'] .': ' . $value);
}
/*
 * implements the rules that decide which fields will participate in a merge.
 */
function show_field($field_def) {
    global $filter_for_valid_editable_attributes,$invalid_attribute_by_name;
    //field in invalid attributes list?
    if (isset($invalid_attribute_by_name[$field_def['name']])) {
        return false;
    }
    //field has 'duplicate_merge property set to disabled?'
    if (isset($field_def['duplicate_merge']) ) {
    	if ($field_def['duplicate_merge']=='disabled' or $field_def['duplicate_merge']==false) {
            return false;
        }
        if ($field_def['duplicate_merge']=='enabled' or $field_def['duplicate_merge']==true) {
            return true;
        }
    }

    //field has auto_increment set to true do not participate in merge.
    //we have a unique index on that field.
    if (isset($field_def['auto_increment']) and $field_def['auto_increment']==true) {
        return false;
    }

    //set required attribute values in $field_def
    if (!isset($field_def['source']) or empty($field_def['source'])) {
        $field_def['source']='db';
    }

    if (!isset($field_def['dbType']) or empty($field_def['dbType']) and isset($field_def['type'])) {
        $field_def['dbType']=$field_def['type'];
    }

    foreach ($filter_for_valid_editable_attributes as $attribute_set) {
        $b_all=false;
        foreach ($attribute_set as $attr=>$value) {
            if (isset($field_def[$attr]) and $field_def[$attr]==$value) {
                $b_all=true;
            } else {
                $b_all=false;
                break;
            }
        }
        if ($b_all) {
            return true;
        }
    }
    return false;
}
/* if the attribute of type relate and name is empty fetch using the vardef entries.
 *
 */
function get_related_name($field_def,$id_value) {
    if (!empty($field_def['rname']) && !empty($field_def['id_name']) && !empty($field_def['table'])) {
        if (!empty($id_value)) {

            //default the column name to rname in vardefs
            $col_name = $field_def['rname'];
            //if this module is non db and has a module set, then check to see if this field should be concatenated
            if (!empty($field_def['module']) && $field_def['source'] == 'non-db'){
                  $focus = BeanFactory::getBean($field_def['module']);
                  if(!empty( $focus->field_defs[$field_def['rname']])){
	                $related_def = $focus->field_defs[$field_def['rname']];
	                //if field defs has concat field array set, then concatenate values
	                if(isset($related_def['db_concat_fields']) && !empty($related_def['db_concat_fields'])){
                        $col_name = $focus->db->concat($field_def['table'], $related_def['db_concat_fields']);
	                }
                  }
            }

            $query = "select ".$col_name." from " .$field_def['table'] ." where id='$id_value'";

            $result=$GLOBALS['db']->query($query);
            $row=$GLOBALS['db']->fetchByAssoc($result);
            if (!empty($row[$field_def['rname']])) {
                return $row[$field_def['rname']];
            }
        }
    }
    return false;
}
?>