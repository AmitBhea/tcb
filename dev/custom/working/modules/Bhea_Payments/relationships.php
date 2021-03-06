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
  'bhea_payments_modified_user' => 
  array (
    'id' => '6cfc1a41-e112-2082-4bcb-529f0b1ca650',
    'relationship_name' => 'bhea_payments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
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
    'from_studio' => false,
  ),
  'bhea_payments_created_by' => 
  array (
    'id' => '6d1f1ed7-a2c2-35c2-8eaa-529f0b85e042',
    'relationship_name' => 'bhea_payments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
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
    'from_studio' => false,
  ),
  'bhea_payments_activities' => 
  array (
    'id' => '6d419a1b-0dce-4938-5031-529f0b64b07b',
    'relationship_name' => 'bhea_payments_activities',
    'lhs_module' => 'Bhea_Payments',
    'lhs_table' => 'bhea_payments',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Payments',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'bhea_payments_assigned_user' => 
  array (
    'id' => '6dd1e420-2999-abc5-4641-529f0bdc380b',
    'relationship_name' => 'bhea_payments_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
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
    'from_studio' => false,
  ),
  'bhea_memberships_bhea_payments_1' => 
  array (
    'id' => '8ec5a0e4-052d-bb64-263a-529f0b9884a7',
    'relationship_name' => 'bhea_memberships_bhea_payments_1',
    'lhs_module' => 'Bhea_Memberships',
    'lhs_table' => 'bhea_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'id',
    'join_table' => 'bhea_memberships_bhea_payments_1_c',
    'join_key_lhs' => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
    'join_key_rhs' => 'bhea_memberships_bhea_payments_1bhea_payments_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_invoices_bhea_payments_1' => 
  array (
    'id' => '9113b331-ce46-4729-fe21-529f0b04d529',
    'relationship_name' => 'bhea_invoices_bhea_payments_1',
    'lhs_module' => 'Bhea_Invoices',
    'lhs_table' => 'bhea_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'id',
    'join_table' => 'bhea_invoices_bhea_payments_1_c',
    'join_key_lhs' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
    'join_key_rhs' => 'bhea_invoices_bhea_payments_1bhea_payments_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'ForBhea_invoices',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_council_memberships_bhea_payments_1' => 
  array (
    'id' => '9373ee88-a86e-e05b-2bd1-529f0b60c8cc',
    'relationship_name' => 'bhea_council_memberships_bhea_payments_1',
    'lhs_module' => 'Bhea_Council_Memberships',
    'lhs_table' => 'bhea_council_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'id',
    'join_table' => 'bhea_council_memberships_bhea_payments_1_c',
    'join_key_lhs' => 'bhea_counc7982erships_ida',
    'join_key_rhs' => 'bhea_council_memberships_bhea_payments_1bhea_payments_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
);