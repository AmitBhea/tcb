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

$relationships = array (
  'bhea_invoices_modified_user' => 
  array (
    'id' => 'd2471dc9-6bb9-f575-a0bf-529dadb56901',
    'relationship_name' => 'bhea_invoices_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_invoices_created_by' => 
  array (
    'id' => 'd25d5531-eef6-bc4b-40ed-529dada93d5e',
    'relationship_name' => 'bhea_invoices_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_invoices_assigned_user' => 
  array (
    'id' => 'd2b5fd5b-caab-f221-d09c-529dad830623',
    'relationship_name' => 'bhea_invoices_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_orders_bhea_invoices_1' => 
  array (
    'id' => 'eacc08b6-66fa-1c44-529a-529dad99629c',
    'relationship_name' => 'bhea_orders_bhea_invoices_1',
    'lhs_module' => 'Bhea_Orders',
    'lhs_table' => 'bhea_orders',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'id',
    'join_table' => 'bhea_orders_bhea_invoices_1_c',
    'join_key_lhs' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
    'join_key_rhs' => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
    'relationship_type' => 'one-to-one',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_invoices_bhea_payments_1' => 
  array (
    'rhs_label' => 'Payments',
    'lhs_label' => 'Invoices',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'Bhea_Invoices',
    'rhs_module' => 'Bhea_Payments',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'bhea_invoices_bhea_payments_1',
  ),
  'bhea_invoices_activities_calls' => 
  array (
    'id' => 'd26cd0a3-70ec-3f0e-86fd-529dadf3e624',
    'relationship_name' => 'bhea_invoices_activities_calls',
    'lhs_module' => 'Bhea_Invoices',
    'lhs_table' => 'bhea_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Invoices',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_invoices_activities_meetings' => 
  array (
    'id' => 'd26cd0a3-70ec-3f0e-86fd-529dadf3e624',
    'relationship_name' => 'bhea_invoices_activities_meetings',
    'lhs_module' => 'Bhea_Invoices',
    'lhs_table' => 'bhea_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Invoices',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_invoices_activities_notes' => 
  array (
    'id' => 'd26cd0a3-70ec-3f0e-86fd-529dadf3e624',
    'relationship_name' => 'bhea_invoices_activities_notes',
    'lhs_module' => 'Bhea_Invoices',
    'lhs_table' => 'bhea_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Invoices',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_invoices_activities_tasks' => 
  array (
    'id' => 'd26cd0a3-70ec-3f0e-86fd-529dadf3e624',
    'relationship_name' => 'bhea_invoices_activities_tasks',
    'lhs_module' => 'Bhea_Invoices',
    'lhs_table' => 'bhea_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Invoices',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_invoices_activities_emails' => 
  array (
    'id' => 'd26cd0a3-70ec-3f0e-86fd-529dadf3e624',
    'relationship_name' => 'bhea_invoices_activities_emails',
    'lhs_module' => 'Bhea_Invoices',
    'lhs_table' => 'bhea_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Invoices',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
);