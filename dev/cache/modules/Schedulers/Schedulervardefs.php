<?php 
 $GLOBALS["dictionary"]["Scheduler"]=array (
  'table' => 'schedulers',
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
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
      'duplicate_on_record_copy' => 'always',
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
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
      'duplicate_on_record_copy' => 'always',
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
      'relationship' => 'schedulers_created_by',
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
      'relationship' => 'schedulers_modified_user',
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
      'relationship' => 'scheduler_activities',
      'vname' => 'LBL_ACTIVITIES',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
    ),
    'job' => 
    array (
      'name' => 'job',
      'vname' => 'LBL_JOB',
      'type' => 'varchar',
      'len' => '255',
      'required' => true,
      'reportable' => false,
    ),
    'job_url' => 
    array (
      'name' => 'job_url',
      'vname' => 'LBL_JOB_URL',
      'type' => 'varchar',
      'len' => '255',
      'required' => false,
      'reportable' => false,
      'source' => 'non-db',
      'dependency' => 'equal($job_function, "url::")',
    ),
    'job_function' => 
    array (
      'name' => 'job_function',
      'vname' => 'LBL_JOB',
      'type' => 'enum',
      'function' => 
      array (
        'name' => 
        array (
          0 => 'Scheduler',
          1 => 'getJobsList',
        ),
        'params' => 
        array (
        ),
      ),
      'len' => '255',
      'required' => false,
      'reportable' => false,
      'source' => 'non-db',
    ),
    'date_time_start' => 
    array (
      'name' => 'date_time_start',
      'vname' => 'LBL_DATE_TIME_START',
      'type' => 'datetimecombo',
      'required' => true,
      'reportable' => false,
      'display_default' => '2005/01/01',
    ),
    'date_time_end' => 
    array (
      'name' => 'date_time_end',
      'vname' => 'LBL_DATE_TIME_END',
      'type' => 'datetimecombo',
      'reportable' => false,
    ),
    'job_interval' => 
    array (
      'name' => 'job_interval',
      'vname' => 'LBL_INTERVAL',
      'type' => 'varchar',
      'len' => '100',
      'required' => true,
      'reportable' => false,
    ),
    'adv_interval' => 
    array (
      'name' => 'adv_interval',
      'vname' => 'LBL_ADV_OPTIONS',
      'type' => 'bool',
      'required' => false,
      'reportable' => false,
      'source' => 'non-db',
    ),
    'time_from' => 
    array (
      'name' => 'time_from',
      'vname' => 'LBL_TIME_FROM',
      'type' => 'time',
      'required' => false,
      'reportable' => false,
    ),
    'time_to' => 
    array (
      'name' => 'time_to',
      'vname' => 'LBL_TIME_TO',
      'type' => 'time',
      'required' => false,
      'reportable' => false,
    ),
    'last_run' => 
    array (
      'name' => 'last_run',
      'vname' => 'LBL_LAST_RUN',
      'type' => 'datetime',
      'required' => false,
      'reportable' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'scheduler_status_dom',
      'len' => 100,
      'required' => false,
      'reportable' => false,
      'importable' => 'required',
    ),
    'catch_up' => 
    array (
      'name' => 'catch_up',
      'vname' => 'LBL_CATCH_UP',
      'type' => 'bool',
      'len' => 1,
      'required' => false,
      'default' => '1',
      'reportable' => false,
    ),
    'schedulers_times' => 
    array (
      'name' => 'schedulers_times',
      'vname' => 'LBL_SCHEDULER_TIMES',
      'type' => 'link',
      'relationship' => 'schedulers_jobs_rel',
      'module' => 'SchedulersJobs',
      'bean_name' => 'Scheduler',
      'source' => 'non-db',
    ),
  ),
  'acls' => 
  array (
    'SugarACLAdminOnly' => true,
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'schedulerspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'schedulersmod',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_schedule',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_time_start',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'schedulers_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'schedulers_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'scheduler_activities' => 
    array (
      'lhs_module' => 'Schedulers',
      'lhs_table' => 'schedulers',
      'lhs_key' => 'id',
      'rhs_module' => 'Activities',
      'rhs_table' => 'activities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'activities_users',
      'join_key_lhs' => 'parent_id',
      'join_key_rhs' => 'activity_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Schedulers',
    ),
    'schedulers_created_by_rel' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-one',
    ),
    'schedulers_modified_user_id_rel' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'schedulers_jobs_rel' => 
    array (
      'lhs_module' => 'Schedulers',
      'lhs_table' => 'schedulers',
      'lhs_key' => 'id',
      'rhs_module' => 'SchedulersJobs',
      'rhs_table' => 'job_queue',
      'rhs_key' => 'scheduler_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'favorites' => true,
  'visibility' => 
  array (
  ),
  'templates' => 
  array (
    'basic' => 'basic',
  ),
  'custom_fields' => false,
  'related_calc_fields' => 
  array (
  ),
);