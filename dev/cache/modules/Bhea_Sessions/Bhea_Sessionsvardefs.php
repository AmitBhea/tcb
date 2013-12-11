<?php 
 $GLOBALS["dictionary"]["Bhea_Sessions"]=array (
  'table' => 'bhea_sessions',
  'audited' => true,
  'duplicate_merge' => true,
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
      'relationship' => 'bhea_sessions_created_by',
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
      'relationship' => 'bhea_sessions_modified_user',
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
      'relationship' => 'bhea_sessions_activities',
      'vname' => 'LBL_ACTIVITIES',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
    ),
    'team_id' => 
    array (
      'name' => 'team_id',
      'vname' => 'LBL_TEAM_ID',
      'group' => 'team_name',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'team_list',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'Team ID for the account',
    ),
    'team_set_id' => 
    array (
      'name' => 'team_set_id',
      'rname' => 'id',
      'id_name' => 'team_set_id',
      'vname' => 'LBL_TEAM_SET_ID',
      'type' => 'id',
      'audited' => true,
      'studio' => 'false',
      'dbType' => 'id',
      'duplicate_on_record_copy' => 'always',
    ),
    'team_count' => 
    array (
      'name' => 'team_count',
      'rname' => 'team_count',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'join_name' => 'ts1',
      'table' => 'teams',
      'type' => 'relate',
      'required' => 'true',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_count_link',
      'massupdate' => false,
      'dbType' => 'int',
      'source' => 'non-db',
      'importable' => 'false',
      'reportable' => false,
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
      'studio' => 'false',
      'hideacl' => true,
    ),
    'team_name' => 
    array (
      'name' => 'team_name',
      'db_concat_fields' => 
      array (
        0 => 'name',
        1 => 'name_2',
      ),
      'sort_on' => 'tj.name',
      'join_name' => 'tj',
      'rname' => 'name',
      'id_name' => 'team_id',
      'vname' => 'LBL_TEAMS',
      'type' => 'relate',
      'required' => 'true',
      'table' => 'teams',
      'isnull' => 'true',
      'module' => 'Teams',
      'link' => 'team_link',
      'massupdate' => false,
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 36,
      'custom_type' => 'teamset',
      'studio' => 
      array (
        'portallistview' => false,
        'portalrecordview' => false,
      ),
      'duplicate_on_record_copy' => 'always',
    ),
    'team_link' => 
    array (
      'name' => 'team_link',
      'type' => 'link',
      'relationship' => 'bhea_sessions_team',
      'vname' => 'LBL_TEAMS_LINK',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'Team',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'studio' => 'false',
    ),
    'team_count_link' => 
    array (
      'name' => 'team_count_link',
      'type' => 'link',
      'relationship' => 'bhea_sessions_team_count_relationship',
      'link_type' => 'one',
      'module' => 'Teams',
      'bean_name' => 'TeamSet',
      'source' => 'non-db',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'studio' => 'false',
    ),
    'teams' => 
    array (
      'name' => 'teams',
      'type' => 'link',
      'relationship' => 'bhea_sessions_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'duplicate_on_record_copy' => 'always',
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'full_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'duplicate_on_record_copy' => 'always',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'bhea_sessions_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'status' => 
    array (
      'required' => false,
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'sessions_status',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'capacity' => 
    array (
      'required' => false,
      'name' => 'capacity',
      'vname' => 'LBL_CAPACITY',
      'type' => 'int',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'begin_date' => 
    array (
      'required' => false,
      'name' => 'begin_date',
      'vname' => 'LBL_BEGIN_DATE',
      'type' => 'datetimecombo',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
    'end_date' => 
    array (
      'required' => false,
      'name' => 'end_date',
      'vname' => 'LBL_END_DATE',
      'type' => 'datetimecombo',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
    'capacity_expected' => 
    array (
      'required' => false,
      'name' => 'capacity_expected',
      'vname' => 'LBL_CAPACITY_EXPECTED',
      'type' => 'int',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '',
      'min' => false,
      'max' => false,
    ),
    'venue' => 
    array (
      'required' => false,
      'name' => 'venue',
      'vname' => 'LBL_VENUE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'bug_id_c' => 
    array (
      'required' => false,
      'name' => 'bug_id_c',
      'vname' => 'LBL_SESSION_COORDINATOR_BUG_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'session_coordinator' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'session_coordinator',
      'vname' => 'LBL_SESSION_COORDINATOR',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'id_name' => 'bug_id_c',
      'ext2' => 'Bugs',
      'module' => 'Bugs',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'bug_id1_c' => 
    array (
      'required' => false,
      'name' => 'bug_id1_c',
      'vname' => 'LBL_SPEAKER_BUG_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'speaker' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'speaker',
      'vname' => 'LBL_SPEAKER',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => '255',
      'size' => '20',
      'id_name' => 'bug_id1_c',
      'ext2' => 'Bugs',
      'module' => 'Bugs',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'bhea_contractors_bhea_sessions_1' => 
    array (
      'name' => 'bhea_contractors_bhea_sessions_1',
      'type' => 'link',
      'relationship' => 'bhea_contractors_bhea_sessions_1',
      'source' => 'non-db',
      'module' => 'Bhea_Contractors',
      'bean_name' => 'Bhea_Contractors',
      'side' => 'right',
      'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
      'id_name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
      'link-type' => 'one',
    ),
    'bhea_contractors_bhea_sessions_1_name' => 
    array (
      'name' => 'bhea_contractors_bhea_sessions_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_BHEA_CONTRACTORS_TITLE',
      'save' => true,
      'id_name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
      'link' => 'bhea_contractors_bhea_sessions_1',
      'table' => 'bhea_contractors',
      'module' => 'Bhea_Contractors',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
    ),
    'bhea_contractors_bhea_sessions_1bhea_contractors_ida' => 
    array (
      'name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_LBL_BHEA_CONTRACTORS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
      'id_name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
      'link' => 'bhea_contractors_bhea_sessions_1',
      'table' => 'bhea_contractors',
      'module' => 'Bhea_Contractors',
      'rname' => 'id',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'reportable' => false,
      'side' => 'right',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
    'bhea_sponsor_bhea_sessions_1' => 
    array (
      'name' => 'bhea_sponsor_bhea_sessions_1',
      'type' => 'link',
      'relationship' => 'bhea_sponsor_bhea_sessions_1',
      'source' => 'non-db',
      'module' => 'Bhea_Sponsor',
      'bean_name' => 'Bhea_Sponsor',
      'side' => 'right',
      'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
      'id_name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
      'link-type' => 'one',
    ),
    'bhea_sponsor_bhea_sessions_1_name' => 
    array (
      'name' => 'bhea_sponsor_bhea_sessions_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SPONSOR_TITLE',
      'save' => true,
      'id_name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
      'link' => 'bhea_sponsor_bhea_sessions_1',
      'table' => 'bhea_sponsor',
      'module' => 'Bhea_Sponsor',
      'rname' => 'name',
    ),
    'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida' => 
    array (
      'name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_LBL_BHEA_SPONSOR_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
      'id_name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
      'link' => 'bhea_sponsor_bhea_sessions_1',
      'table' => 'bhea_sponsor',
      'module' => 'Bhea_Sponsor',
      'rname' => 'id',
      'reportable' => false,
      'side' => 'right',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
    'contacts_bhea_sessions_1' => 
    array (
      'name' => 'contacts_bhea_sessions_1',
      'type' => 'link',
      'relationship' => 'contacts_bhea_sessions_1',
      'source' => 'non-db',
      'module' => 'Contacts',
      'bean_name' => 'Contact',
      'vname' => 'LBL_CONTACTS_BHEA_SESSIONS_1_FROM_CONTACTS_TITLE',
      'id_name' => 'contacts_bhea_sessions_1contacts_ida',
    ),
    'bhea_sessions_bhea_registrants_1' => 
    array (
      'name' => 'bhea_sessions_bhea_registrants_1',
      'type' => 'link',
      'relationship' => 'bhea_sessions_bhea_registrants_1',
      'source' => 'non-db',
      'module' => 'Bhea_Registrants',
      'bean_name' => 'Bhea_Registrants',
      'vname' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_SESSIONS_TITLE',
      'id_name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
      'link-type' => 'many',
      'side' => 'left',
    ),
    'bhea_events_bhea_sessions_1' => 
    array (
      'name' => 'bhea_events_bhea_sessions_1',
      'type' => 'link',
      'relationship' => 'bhea_events_bhea_sessions_1',
      'source' => 'non-db',
      'module' => 'Bhea_Events',
      'bean_name' => 'Bhea_Events',
      'side' => 'right',
      'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
      'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
      'link-type' => 'one',
    ),
    'bhea_events_bhea_sessions_1_name' => 
    array (
      'name' => 'bhea_events_bhea_sessions_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_EVENTS_TITLE',
      'save' => true,
      'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
      'link' => 'bhea_events_bhea_sessions_1',
      'table' => 'bhea_events',
      'module' => 'Bhea_Events',
      'rname' => 'name',
    ),
    'bhea_events_bhea_sessions_1bhea_events_ida' => 
    array (
      'name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
      'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
      'link' => 'bhea_events_bhea_sessions_1',
      'table' => 'bhea_events',
      'module' => 'Bhea_Events',
      'rname' => 'id',
      'reportable' => false,
      'side' => 'right',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
    'bhea_sponsorship_bhea_sessions_1' => 
    array (
      'name' => 'bhea_sponsorship_bhea_sessions_1',
      'type' => 'link',
      'relationship' => 'bhea_sponsorship_bhea_sessions_1',
      'source' => 'non-db',
      'module' => 'Bhea_Sponsorship',
      'bean_name' => 'Bhea_Sponsorship',
      'side' => 'right',
      'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
      'id_name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
      'link-type' => 'one',
    ),
    'bhea_sponsorship_bhea_sessions_1_name' => 
    array (
      'name' => 'bhea_sponsorship_bhea_sessions_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_BHEA_SPONSORSHIP_TITLE',
      'save' => true,
      'id_name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
      'link' => 'bhea_sponsorship_bhea_sessions_1',
      'table' => 'bhea_sponsorship',
      'module' => 'Bhea_Sponsorship',
      'rname' => 'name',
    ),
    'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida' => 
    array (
      'name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_LBL_BHEA_SPONSORSHIP_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
      'id_name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
      'link' => 'bhea_sponsorship_bhea_sessions_1',
      'table' => 'bhea_sponsorship',
      'module' => 'Bhea_Sponsorship',
      'rname' => 'id',
      'reportable' => false,
      'side' => 'right',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
    'bhea_sessions_bhea_speakers_1' => 
    array (
      'name' => 'bhea_sessions_bhea_speakers_1',
      'type' => 'link',
      'relationship' => 'bhea_sessions_bhea_speakers_1',
      'source' => 'non-db',
      'module' => 'Bhea_Speakers',
      'bean_name' => 'Bhea_Speakers',
      'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPEAKERS_1_FROM_BHEA_SESSIONS_TITLE',
      'id_name' => 'bhea_sessions_bhea_speakers_1bhea_sessions_ida',
      'link-type' => 'many',
      'side' => 'left',
    ),
    'bhea_sessions_bhea_sponsorship_types_1' => 
    array (
      'name' => 'bhea_sessions_bhea_sponsorship_types_1',
      'type' => 'link',
      'relationship' => 'bhea_sessions_bhea_sponsorship_types_1',
      'source' => 'non-db',
      'module' => 'bhea_Sponsorship_Types',
      'bean_name' => 'bhea_Sponsorship_Types',
      'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
      'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
    ),
    'bhea_sessions_bhea_sponsorship_types_1_name' => 
    array (
      'name' => 'bhea_sessions_bhea_sponsorship_types_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
      'save' => true,
      'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
      'link' => 'bhea_sessions_bhea_sponsorship_types_1',
      'table' => 'bhea_sponsorship_types',
      'module' => 'bhea_Sponsorship_Types',
      'rname' => 'name',
    ),
    'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb' => 
    array (
      'name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE_TITLE',
      'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
      'link' => 'bhea_sessions_bhea_sponsorship_types_1',
      'table' => 'bhea_sponsorship_types',
      'module' => 'bhea_Sponsorship_Types',
      'rname' => 'id',
      'reportable' => false,
      'side' => 'left',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
  ),
  'relationships' => 
  array (
    'bhea_sessions_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sessions',
      'rhs_table' => 'bhea_sessions',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'bhea_sessions_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sessions',
      'rhs_table' => 'bhea_sessions',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'bhea_sessions_activities' => 
    array (
      'lhs_module' => 'Bhea_Sessions',
      'lhs_table' => 'bhea_sessions',
      'lhs_key' => 'id',
      'rhs_module' => 'Activities',
      'rhs_table' => 'activities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'activities_users',
      'join_key_lhs' => 'parent_id',
      'join_key_rhs' => 'activity_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Bhea_Sessions',
    ),
    'bhea_sessions_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sessions',
      'rhs_table' => 'bhea_sessions',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'bhea_sessions_teams' => 
    array (
      'lhs_module' => 'Bhea_Sessions',
      'lhs_table' => 'bhea_sessions',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'bhea_sessions_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sessions',
      'rhs_table' => 'bhea_sessions',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'bhea_sessions_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sessions',
      'rhs_table' => 'bhea_sessions',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'bhea_sessionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'bhea_sessionsmod',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    'team_set_bhea_sessions' => 
    array (
      'name' => 'idx_bhea_sessions_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
      ),
    ),
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'acls' => 
  array (
    'SugarACLStatic' => true,
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'team_security' => 'team_security',
    'basic' => 'basic',
  ),
  'favorites' => true,
  'custom_fields' => false,
  'related_calc_fields' => 
  array (
  ),
);