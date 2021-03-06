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
  'bhea_sponsor_modified_user' => 
  array (
    'id' => '2136f8be-96c4-f323-5258-529ed56f70cb',
    'relationship_name' => 'bhea_sponsor_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
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
  'bhea_sponsor_created_by' => 
  array (
    'id' => '215d72b3-45c0-2fee-514b-529ed5fe19b8',
    'relationship_name' => 'bhea_sponsor_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
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
  'bhea_sponsor_assigned_user' => 
  array (
    'id' => '2225dc63-7297-b4ab-ba27-529ed5925b01',
    'relationship_name' => 'bhea_sponsor_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
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
  'bhea_sponsor_bhea_sessions_1' => 
  array (
    'id' => '45f23c8c-d49d-9941-1690-529ed53a7deb',
    'relationship_name' => 'bhea_sponsor_bhea_sessions_1',
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sessions',
    'rhs_table' => 'bhea_sessions',
    'rhs_key' => 'id',
    'join_table' => 'bhea_sponsor_bhea_sessions_1_c',
    'join_key_lhs' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
    'join_key_rhs' => 'bhea_sponsor_bhea_sessions_1bhea_sessions_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'ForBhea_sponsor',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_events_bhea_sponsor_1' => 
  array (
    'id' => '4626cccc-e4b9-4e7b-6c6b-529ed592d812',
    'relationship_name' => 'bhea_events_bhea_sponsor_1',
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
    'rhs_key' => 'id',
    'join_table' => 'bhea_events_bhea_sponsor_1_c',
    'join_key_lhs' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_bhea_sponsor_1bhea_sponsor_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'ForBhea_events',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_sponsor_bhea_sponsorship_1' => 
  array (
    'rhs_label' => 'Sponsorship',
    'lhs_label' => 'Sponsor',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'Bhea_Sponsor',
    'rhs_module' => 'Bhea_Sponsorship',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'bhea_sponsor_bhea_sponsorship_1',
  ),
  'bhea_sponsor_activities_calls' => 
  array (
    'id' => '21827893-7351-c244-451b-529ed5fa9c79',
    'relationship_name' => 'bhea_sponsor_activities_calls',
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Sponsor',
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
  'bhea_sponsor_activities_meetings' => 
  array (
    'id' => '21827893-7351-c244-451b-529ed5fa9c79',
    'relationship_name' => 'bhea_sponsor_activities_meetings',
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Sponsor',
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
  'bhea_sponsor_activities_notes' => 
  array (
    'id' => '21827893-7351-c244-451b-529ed5fa9c79',
    'relationship_name' => 'bhea_sponsor_activities_notes',
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Sponsor',
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
  'bhea_sponsor_activities_tasks' => 
  array (
    'id' => '21827893-7351-c244-451b-529ed5fa9c79',
    'relationship_name' => 'bhea_sponsor_activities_tasks',
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Sponsor',
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
  'bhea_sponsor_activities_emails' => 
  array (
    'id' => '21827893-7351-c244-451b-529ed5fa9c79',
    'relationship_name' => 'bhea_sponsor_activities_emails',
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Sponsor',
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