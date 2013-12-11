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
  'bhea_memberships_modified_user' => 
  array (
    'id' => '55e9036e-1fd5-f822-5b80-529f07661a41',
    'relationship_name' => 'bhea_memberships_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
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
  'bhea_memberships_created_by' => 
  array (
    'id' => '56164863-605c-c3c3-82bb-529f0756d346',
    'relationship_name' => 'bhea_memberships_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
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
  'bhea_memberships_assigned_user' => 
  array (
    'id' => '56fa5f79-6963-af70-70b7-529f070371d2',
    'relationship_name' => 'bhea_memberships_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
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
  'bhea_member_levels_bhea_memberships_1' => 
  array (
    'id' => '6c39c8ee-1d4d-591a-ddcf-529f07113120',
    'relationship_name' => 'bhea_member_levels_bhea_memberships_1',
    'lhs_module' => 'Bhea_member_levels',
    'lhs_table' => 'bhea_member_levels',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
    'rhs_key' => 'id',
    'join_table' => 'bhea_member_levels_bhea_memberships_1_c',
    'join_key_lhs' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
    'join_key_rhs' => 'bhea_member_levels_bhea_memberships_1bhea_memberships_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'ForBhea_member_levels',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'accounts_bhea_memberships_1' => 
  array (
    'id' => '6e7f929b-dc8b-1713-05d7-529f07f5efa2',
    'relationship_name' => 'accounts_bhea_memberships_1',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
    'rhs_key' => 'id',
    'join_table' => 'accounts_bhea_memberships_1_c',
    'join_key_lhs' => 'accounts_bhea_memberships_1accounts_ida',
    'join_key_rhs' => 'accounts_bhea_memberships_1bhea_memberships_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'ForAccounts',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_memberships_bhea_payments_1' => 
  array (
    'rhs_label' => 'Payments',
    'lhs_label' => 'Memberships',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'Bhea_Memberships',
    'rhs_module' => 'Bhea_Payments',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'bhea_memberships_bhea_payments_1',
  ),
  'bhea_memberships_activities_calls' => 
  array (
    'id' => '56427af8-e931-a801-5eca-529f075ec13c',
    'relationship_name' => 'bhea_memberships_activities_calls',
    'lhs_module' => 'Bhea_Memberships',
    'lhs_table' => 'bhea_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Memberships',
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
  'bhea_memberships_activities_meetings' => 
  array (
    'id' => '56427af8-e931-a801-5eca-529f075ec13c',
    'relationship_name' => 'bhea_memberships_activities_meetings',
    'lhs_module' => 'Bhea_Memberships',
    'lhs_table' => 'bhea_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Memberships',
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
  'bhea_memberships_activities_notes' => 
  array (
    'id' => '56427af8-e931-a801-5eca-529f075ec13c',
    'relationship_name' => 'bhea_memberships_activities_notes',
    'lhs_module' => 'Bhea_Memberships',
    'lhs_table' => 'bhea_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Memberships',
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
  'bhea_memberships_activities_tasks' => 
  array (
    'id' => '56427af8-e931-a801-5eca-529f075ec13c',
    'relationship_name' => 'bhea_memberships_activities_tasks',
    'lhs_module' => 'Bhea_Memberships',
    'lhs_table' => 'bhea_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Memberships',
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
  'bhea_memberships_activities_emails' => 
  array (
    'id' => '56427af8-e931-a801-5eca-529f075ec13c',
    'relationship_name' => 'bhea_memberships_activities_emails',
    'lhs_module' => 'Bhea_Memberships',
    'lhs_table' => 'bhea_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Memberships',
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