<?php 
 $GLOBALS["dictionary"]["Activity"]=array (
  'table' => 'activities',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'duplicate_on_record_copy' => 'no',
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'type' => 'varchar',
      'required' => false,
      'source' => 'non-db',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'options' => 'date_range_search_dom',
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'full_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'full_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'duplicate_on_record_copy' => 'no',
      'readonly' => true,
    ),
    'description' => 
    array (
      'name' => 'description',
      'type' => 'varchar',
      'required' => false,
      'source' => 'non-db',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'duplicate_on_record_copy' => 'no',
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'activitystream/activities_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'activitystream/activities_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'activities' => 
    array (
      'name' => 'activities',
      'type' => 'link',
      'relationship' => 'activity_activities',
      'vname' => 'LBL_ACTIVITIES',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
    ),
    'comments' => 
    array (
      'name' => 'comments',
      'type' => 'link',
      'relationship' => 'comments',
      'link_type' => 'many',
      'module' => 'Comments',
      'bean_name' => 'Comment',
      'source' => 'non-db',
    ),
    'activities_users' => 
    array (
      'name' => 'activities_users',
      'type' => 'link',
      'relationship' => 'activities_users',
      'link_type' => 'many',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'activities_teams' => 
    array (
      'name' => 'activities_teams',
      'type' => 'link',
      'relationship' => 'activities_teams',
      'link_type' => 'many',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'contact_activities',
      'vname' => 'LBL_LIST_CONTACT_NAME',
      'source' => 'non-db',
    ),
    'cases' => 
    array (
      'name' => 'cases',
      'type' => 'link',
      'relationship' => 'case_activities',
      'vname' => 'LBL_CASES',
      'source' => 'non-db',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_activities',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'relationship' => 'opportunity_activities',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITIES',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'lead_activities',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'products' => 
    array (
      'name' => 'products',
      'type' => 'link',
      'relationship' => 'product_activities',
      'source' => 'non-db',
      'vname' => 'LBL_PRODUCTS',
    ),
    'revenuelineitems' => 
    array (
      'name' => 'revenuelineitems',
      'type' => 'link',
      'relationship' => 'revenuelineitem_activities',
      'source' => 'non-db',
      'vname' => 'LBL_REVENUELINEITEMS',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'relationship' => 'quote_activities',
      'vname' => 'LBL_QUOTES',
      'source' => 'non-db',
    ),
    'contracts' => 
    array (
      'name' => 'contracts',
      'type' => 'link',
      'relationship' => 'contract_activities',
      'source' => 'non-db',
      'vname' => 'LBL_CONTRACTS',
    ),
    'bugs' => 
    array (
      'name' => 'bugs',
      'type' => 'link',
      'relationship' => 'bug_activities',
      'source' => 'non-db',
      'vname' => 'LBL_BUGS',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'vname' => 'LBL_EMAILS',
      'type' => 'link',
      'relationship' => 'emails_activities',
      'source' => 'non-db',
    ),
    'projects' => 
    array (
      'name' => 'projects',
      'type' => 'link',
      'relationship' => 'projects_activities',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECTS',
    ),
    'project_tasks' => 
    array (
      'name' => 'project_tasks',
      'type' => 'link',
      'relationship' => 'project_tasks_activities',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECT_TASKS',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'meeting_activities',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'calls_activities',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'task_activities',
      'source' => 'non-db',
      'vname' => 'LBL_TASKS',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'note_activities',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'type' => 'id',
      'len' => 36,
    ),
    'parent_type' => 
    array (
      'name' => 'parent_type',
      'type' => 'varchar',
      'len' => 100,
    ),
    'activity_type' => 
    array (
      'name' => 'activity_type',
      'type' => 'varchar',
      'len' => 100,
      'required' => true,
    ),
    'data' => 
    array (
      'name' => 'data',
      'type' => 'json',
      'dbType' => 'longtext',
      'required' => true,
    ),
    'comment_count' => 
    array (
      'name' => 'comment_count',
      'type' => 'int',
      'required' => true,
      'default' => 0,
    ),
    'last_comment' => 
    array (
      'name' => 'last_comment',
      'type' => 'json',
      'dbType' => 'longtext',
      'required' => true,
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'activitystream/activitiespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'activitiesmod',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    0 => 
    array (
      'name' => 'activity_records',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parent_type',
        1 => 'parent_id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'activitystream/activities_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ActivityStream/Activities',
      'rhs_table' => 'activities',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'activitystream/activities_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ActivityStream/Activities',
      'rhs_table' => 'activities',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'activity_activities' => 
    array (
      'lhs_module' => 'ActivityStream/Activities',
      'lhs_table' => 'activities',
      'lhs_key' => 'id',
      'rhs_module' => 'Activities',
      'rhs_table' => 'activities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'activities_users',
      'join_key_lhs' => 'parent_id',
      'join_key_rhs' => 'activity_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'ActivityStream/Activities',
    ),
    'comments' => 
    array (
      'lhs_module' => 'Activities',
      'lhs_table' => 'activities',
      'lhs_key' => 'id',
      'rhs_module' => 'Comments',
      'rhs_table' => 'comments',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'favorites' => true,
  'visibility' => 
  array (
  ),
  'acls' => 
  array (
  ),
  'templates' => 
  array (
    'basic' => 'basic',
  ),
  'related_calc_fields' => 
  array (
  ),
);