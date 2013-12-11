<?php 
 $GLOBALS["dictionary"]["Opportunity"]=array (
  'table' => 'opportunities',
  'audited' => true,
  'activity_enabled' => true,
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => true,
  'duplicate_merge' => true,
  'comment' => 'An opportunity is the target of selling activities',
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
      'vname' => 'LBL_OPPORTUNITY_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => '50',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'comment' => 'Name of the opportunity',
      'merge_filter' => 'selected',
      'importable' => 'required',
      'required' => true,
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
      'relationship' => 'opportunities_created_by',
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
      'relationship' => 'opportunities_modified_user',
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
      'relationship' => 'opportunity_activities',
      'vname' => 'LBL_ACTIVITIES',
      'link_type' => 'many',
      'module' => 'Activities',
      'bean_name' => 'Activity',
      'source' => 'non-db',
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
      'relationship' => 'opportunities_assigned_user',
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
      'relationship' => 'opportunities_team',
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
      'relationship' => 'opportunities_team_count_relationship',
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
      'relationship' => 'opportunities_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
    ),
    'opportunity_type' => 
    array (
      'name' => 'opportunity_type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'options' => 'opportunity_type_list',
      'len' => 100,
      'audited' => true,
      'comment' => 'Type of opportunity (ex: Existing, New)',
      'merge_filter' => 'disabled',
      'default' => '',
      'comments' => 'Type of opportunity (ex: Existing, New)',
      'calculated' => false,
      'dependency' => false,
    ),
    'account_name' => 
    array (
      'name' => 'account_name',
      'rname' => 'name',
      'id_name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_NAME',
      'type' => 'relate',
      'table' => 'accounts',
      'join_name' => 'accounts',
      'isnull' => 'true',
      'module' => 'Accounts',
      'dbType' => 'varchar',
      'link' => 'accounts',
      'len' => '255',
      'source' => 'non-db',
      'unified_search' => true,
      'required' => true,
      'importable' => 'required',
    ),
    'account_id' => 
    array (
      'name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_ID',
      'id_name' => 'account_id',
      'type' => 'relate',
      'link' => 'accounts',
      'rname' => 'id',
      'source' => 'non-db',
      'audited' => true,
      'dbType' => 'id',
      'module' => 'Accounts',
    ),
    'campaign_id' => 
    array (
      'name' => 'campaign_id',
      'comment' => 'Campaign that generated lead',
      'vname' => 'LBL_CAMPAIGN_ID',
      'rname' => 'id',
      'type' => 'id',
      'dbType' => 'id',
      'table' => 'campaigns',
      'isnull' => 'true',
      'module' => 'Campaigns',
      'reportable' => false,
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
    ),
    'campaign_name' => 
    array (
      'name' => 'campaign_name',
      'rname' => 'name',
      'id_name' => 'campaign_id',
      'vname' => 'LBL_CAMPAIGN',
      'type' => 'relate',
      'link' => 'campaign_opportunities',
      'isnull' => 'true',
      'table' => 'campaigns',
      'module' => 'Campaigns',
      'source' => 'non-db',
    ),
    'campaign_opportunities' => 
    array (
      'name' => 'campaign_opportunities',
      'type' => 'link',
      'vname' => 'LBL_CAMPAIGN_OPPORTUNITY',
      'relationship' => 'campaign_opportunities',
      'source' => 'non-db',
    ),
    'lead_source' => 
    array (
      'name' => 'lead_source',
      'vname' => 'LBL_LEAD_SOURCE',
      'type' => 'enum',
      'options' => 'lead_source_dom',
      'len' => '50',
      'comment' => 'Source of the opportunity',
      'merge_filter' => 'enabled',
    ),
    'amount' => 
    array (
      'name' => 'amount',
      'vname' => 'LBL_LIKELY',
      'type' => 'currency',
      'dbType' => 'currency',
      'comment' => 'Unconverted amount of the opportunity',
      'importable' => 'required',
      'duplicate_merge' => '1',
      'required' => true,
      'options' => 'numeric_range_search_dom',
      'enable_range_search' => true,
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
      ),
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
    ),
    'base_rate' => 
    array (
      'name' => 'base_rate',
      'vname' => 'LBL_CURRENCY_RATE',
      'type' => 'decimal',
      'len' => '26,6',
      'required' => true,
      'studio' => false,
    ),
    'amount_usdollar' => 
    array (
      'name' => 'amount_usdollar',
      'vname' => 'LBL_AMOUNT_USDOLLAR',
      'type' => 'currency',
      'group' => 'amount',
      'dbType' => 'currency',
      'disable_num_format' => true,
      'duplicate_merge' => 'disabled',
      'audited' => true,
      'comment' => 'Formatted amount of the opportunity',
      'studio' => 
      array (
        'wirelesslistview' => false,
        'wirelesseditview' => false,
        'wirelessdetailview' => false,
        'wireless_basic_search' => false,
        'wireless_advanced_search' => false,
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
        'mobile' => false,
      ),
      'readonly' => true,
      'is_base_currency' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'formula' => '',
      'calculated' => false,
      'enforced' => false,
      'comments' => 'Formatted amount of the opportunity',
      'duplicate_merge_dom_value' => '0',
      'merge_filter' => 'disabled',
      'enable_range_search' => false,
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'type' => 'currency_id',
      'dbType' => 'id',
      'group' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
      'reportable' => false,
      'comment' => 'Currency used for display purposes',
      'default' => '-99',
    ),
    'currency_name' => 
    array (
      'name' => 'currency_name',
      'rname' => 'name',
      'id_name' => 'currency_id',
      'vname' => 'LBL_CURRENCY_NAME',
      'type' => 'relate',
      'link' => 'currencies',
      'isnull' => true,
      'table' => 'currencies',
      'module' => 'Currencies',
      'source' => 'non-db',
      'function' => 
      array (
        'name' => 'getCurrencyNameDropDown',
        'returns' => 'html',
      ),
      'studio' => false,
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'currency_symbol' => 
    array (
      'name' => 'currency_symbol',
      'rname' => 'symbol',
      'id_name' => 'currency_id',
      'vname' => 'LBL_CURRENCY_SYMBOL',
      'type' => 'relate',
      'link' => 'currencies',
      'isnull' => true,
      'table' => 'currencies',
      'module' => 'Currencies',
      'source' => 'non-db',
      'function' => 
      array (
        'name' => 'getCurrencySymbolDropDown',
        'returns' => 'html',
      ),
      'studio' => false,
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'date_closed' => 
    array (
      'name' => 'date_closed',
      'vname' => 'LBL_DATE_CLOSED',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Expected or actual date the oppportunity will close',
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'related_fields' => 
      array (
        0 => 'date_closed_timestamp',
      ),
    ),
    'date_closed_timestamp' => 
    array (
      'name' => 'date_closed_timestamp',
      'vname' => 'LBL_DATE_CLOSED_TIMESTAMP',
      'type' => 'int',
      'studio' => false,
      'reportable' => false,
      'massupdate' => false,
      'enforced' => true,
      'calculated' => true,
      'formula' => 'timestamp($date_closed)',
    ),
    'next_step' => 
    array (
      'name' => 'next_step',
      'vname' => 'LBL_NEXT_STEP',
      'type' => 'varchar',
      'len' => '100',
      'comment' => 'The next step in the sales process',
      'merge_filter' => 'enabled',
      'massupdate' => true,
    ),
    'sales_stage' => 
    array (
      'name' => 'sales_stage',
      'vname' => 'LBL_SALES_STAGE',
      'type' => 'enum',
      'options' => 'sales_stage_dom',
      'len' => 100,
      'audited' => true,
      'comment' => 'Indication of progression towards closure',
      'merge_filter' => 'disabled',
      'importable' => 'required',
      'required' => true,
      'default' => 'Prospecting',
      'comments' => 'Indication of progression towards closure',
      'calculated' => false,
      'dependency' => false,
    ),
    'sales_status' => 
    array (
      'name' => 'sales_status',
      'vname' => 'LBL_SALES_STATUS',
      'type' => 'enum',
      'options' => 'sales_status_dom',
      'len' => '255',
      'audited' => true,
      'readonly' => true,
      'studio' => false,
      'reportable' => false,
    ),
    'probability' => 
    array (
      'name' => 'probability',
      'vname' => 'LBL_PROBABILITY',
      'type' => 'int',
      'dbType' => 'double',
      'audited' => true,
      'comment' => 'The probability of closure',
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
        'max' => 100,
      ),
      'merge_filter' => 'enabled',
      'formula' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
      'calculated' => true,
    ),
    'best_case' => 
    array (
      'name' => 'best_case',
      'vname' => 'LBL_BEST',
      'dbType' => 'currency',
      'type' => 'currency',
      'len' => '26,6',
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
      ),
      'audited' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
    ),
    'worst_case' => 
    array (
      'name' => 'worst_case',
      'vname' => 'LBL_WORST',
      'dbType' => 'currency',
      'type' => 'currency',
      'len' => '26,6',
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
      ),
      'audited' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
    ),
    'commit_stage' => 
    array (
      'name' => 'commit_stage',
      'vname' => 'LBL_COMMIT_STAGE',
      'type' => 'enum',
      'options' => 'commit_stage_dom',
      'len' => '50',
      'comment' => 'Forecast commit ranges: Include, Likely, Omit etc.',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'accounts_opportunities',
      'source' => 'non-db',
      'link_type' => 'one',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'opportunities_contacts',
      'source' => 'non-db',
      'module' => 'Contacts',
      'bean_name' => 'Contact',
      'rel_fields' => 
      array (
        'contact_role' => 
        array (
          'type' => 'enum',
          'options' => 'opportunity_relationship_type_dom',
        ),
      ),
      'vname' => 'LBL_CONTACTS',
    ),
    'contact_role' => 
    array (
      'name' => 'contact_role',
      'type' => 'enum',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITY_ROLE',
      'options' => 'opportunity_relationship_type_dom',
      'link' => 'contacts',
      'rname_link' => 'contact_role',
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'opportunity_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_TASKS',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'opportunity_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'opportunity_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'opportunity_calls',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_opportunities_rel',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
    ),
    'archived_emails' => 
    array (
      'name' => 'archived_emails',
      'type' => 'link',
      'link_file' => 'modules/Emails/ArchivedEmailsBeanLink.php',
      'link_class' => 'ArchivedEmailsBeanLink',
      'link' => 'contacts',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
      'module' => 'Emails',
      'link_type' => 'many',
      'relationship' => '',
      'hideacl' => true,
    ),
    'documents' => 
    array (
      'name' => 'documents',
      'type' => 'link',
      'relationship' => 'documents_opportunities',
      'source' => 'non-db',
      'vname' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'relationship' => 'quotes_opportunities',
      'source' => 'non-db',
      'vname' => 'LBL_QUOTES',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'opportunity_leads',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'campaigns' => 
    array (
      'name' => 'campaigns',
      'type' => 'link',
      'relationship' => 'opportunities_campaign',
      'module' => 'CampaignLog',
      'bean_name' => 'CampaignLog',
      'source' => 'non-db',
      'vname' => 'LBL_CAMPAIGNS',
      'reportable' => false,
    ),
    'campaign_link' => 
    array (
      'name' => 'campaign_link',
      'type' => 'link',
      'relationship' => 'opportunities_campaign',
      'vname' => 'LBL_CAMPAIGN_LINK',
      'link_type' => 'one',
      'module' => 'Campaigns',
      'bean_name' => 'Campaign',
      'source' => 'non-db',
      'reportable' => false,
    ),
    'currencies' => 
    array (
      'name' => 'currencies',
      'type' => 'link',
      'relationship' => 'opportunity_currencies',
      'source' => 'non-db',
      'vname' => 'LBL_CURRENCIES',
    ),
    'contracts' => 
    array (
      'name' => 'contracts',
      'type' => 'link',
      'vname' => 'LBL_CONTRACTS',
      'relationship' => 'contracts_opportunities',
      'source' => 'non-db',
    ),
    'revenuelineitems' => 
    array (
      'name' => 'revenuelineitems',
      'type' => 'link',
      'vname' => 'LBL_RLI',
      'relationship' => 'revenuelineitems_opportunities',
      'source' => 'non-db',
    ),
    'forecastworksheets' => 
    array (
      'name' => 'forecastworksheets',
      'type' => 'link',
      'relationship' => 'forecastworksheets_opportunities',
      'vname' => 'LBL_FORECAST_WORKSHEET',
      'module' => 'ForecastWorksheets',
      'bean_name' => 'ForecastWorksheet',
      'source' => 'non-db',
    ),
    'products' => 
    array (
      'name' => 'products',
      'type' => 'link',
      'vname' => 'LBL_PRODUCTS',
      'relationship' => 'opportunities_products',
      'source' => 'non-db',
    ),
    'bhea_events_opportunities_1' => 
    array (
      'name' => 'bhea_events_opportunities_1',
      'type' => 'link',
      'relationship' => 'bhea_events_opportunities_1',
      'source' => 'non-db',
      'module' => 'Bhea_Events',
      'bean_name' => 'Bhea_Events',
      'side' => 'right',
      'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
      'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
      'link-type' => 'one',
    ),
    'bhea_events_opportunities_1_name' => 
    array (
      'name' => 'bhea_events_opportunities_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_BHEA_EVENTS_TITLE',
      'save' => true,
      'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
      'link' => 'bhea_events_opportunities_1',
      'table' => 'bhea_events',
      'module' => 'Bhea_Events',
      'rname' => 'name',
    ),
    'bhea_events_opportunities_1bhea_events_ida' => 
    array (
      'name' => 'bhea_events_opportunities_1bhea_events_ida',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
      'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
      'link' => 'bhea_events_opportunities_1',
      'table' => 'bhea_events',
      'module' => 'Bhea_Events',
      'rname' => 'id',
      'reportable' => false,
      'side' => 'right',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
    'membership_fee_c' => 
    array (
      'labelValue' => 'Membership Fee',
      'enforced' => '',
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'membership_fee_c',
      'vname' => 'LBL_MEMBERSHIP_FEE',
      'type' => 'currency',
      'massupdate' => '0',
      'default' => '',
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
      'len' => '26',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'id' => 'Opportunitiesmembership_fee_c',
      'custom_module' => 'Opportunities',
    ),
    'opportunities_bhea_program_1' => 
    array (
      'name' => 'opportunities_bhea_program_1',
      'type' => 'link',
      'relationship' => 'opportunities_bhea_program_1',
      'source' => 'non-db',
      'module' => 'Bhea_Program',
      'bean_name' => 'Bhea_Program',
      'vname' => 'LBL_OPPORTUNITIES_BHEA_PROGRAM_1_FROM_BHEA_PROGRAM_TITLE',
      'id_name' => 'opportunities_bhea_program_1bhea_program_idb',
    ),
    'discount_c' => 
    array (
      'labelValue' => 'Discount',
      'enforced' => '',
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'discount_c',
      'vname' => 'LBL_DISCOUNT',
      'type' => 'currency',
      'massupdate' => '0',
      'default' => '0',
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
      'len' => '26',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'id' => 'Opportunitiesdiscount_c',
      'custom_module' => 'Opportunities',
    ),
    'subtype_c' => 
    array (
      'labelValue' => 'Sub Type',
      'dependency' => '',
      'visibility_grid' => 
      array (
        'trigger' => 'opportunity_type',
        'values' => 
        array (
          'membership' => 
          array (
            0 => 'new_mem',
            1 => 'renewal',
            2 => 'mem_upgrade',
          ),
          'prod_service' => 
          array (
            0 => 'council',
            1 => 'conference',
            2 => 'seminar',
            3 => 'sponsorship',
            4 => 'research_working',
            5 => 'experiential_learning',
          ),
          'other' => 
          array (
          ),
        ),
      ),
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'subtype_c',
      'vname' => 'LBL_SUBTYPE',
      'type' => 'enum',
      'massupdate' => '0',
      'default' => NULL,
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
      'options' => 'subtype_list',
      'studio' => 'visible',
      'id' => 'Opportunitiessubtype_c',
      'custom_module' => 'Opportunities',
    ),
    'actual_close_date_c' => 
    array (
      'labelValue' => 'Actual Closed Date',
      'enforced' => '',
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'actual_close_date_c',
      'vname' => 'LBL_ACTUAL_CLOSE_DATE',
      'type' => 'date',
      'massupdate' => '0',
      'default' => '',
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
      'id' => 'Opportunitiesactual_close_date_c',
      'custom_module' => 'Opportunities',
    ),
    'opportunities_bhea_councils_1' => 
    array (
      'name' => 'opportunities_bhea_councils_1',
      'type' => 'link',
      'relationship' => 'opportunities_bhea_councils_1',
      'source' => 'non-db',
      'module' => 'Bhea_Councils',
      'bean_name' => 'Bhea_Councils',
      'vname' => 'LBL_OPPORTUNITIES_BHEA_COUNCILS_1_FROM_BHEA_COUNCILS_TITLE',
      'id_name' => 'opportunities_bhea_councils_1bhea_councils_idb',
    ),
    'practice_area_c' => 
    array (
      'labelValue' => 'Practice Area',
      'visibility_grid' => 
      array (
        'trigger' => 'subtype_c',
        'values' => 
        array (
          '' => 
          array (
          ),
          'new_mem' => 
          array (
          ),
          'renewal' => 
          array (
          ),
          'mem_upgrade' => 
          array (
          ),
          'council' => 
          array (
            0 => 'human_capital',
            1 => 'corporate_leadership',
            2 => 'economy_value',
          ),
          'conference' => 
          array (
          ),
          'seminar' => 
          array (
          ),
          'sponsorship' => 
          array (
          ),
          'research_working' => 
          array (
          ),
          'experiential_learning' => 
          array (
          ),
        ),
      ),
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'practice_area_c',
      'vname' => 'LBL_PRACTICE_AREA',
      'type' => 'enum',
      'massupdate' => '0',
      'default' => 'human_capital',
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
      'options' => 'practice_area_list',
      'studio' => 'visible',
      'dependency' => NULL,
      'id' => 'Opportunitiespractice_area_c',
      'custom_module' => 'Opportunities',
    ),
    'lost_reason_c' => 
    array (
      'labelValue' => 'Lost Reason',
      'full_text_search' => 
      array (
        'boost' => '0',
      ),
      'enforced' => '',
      'dependency' => 'equal($sales_stage,"Closed Lost")',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'lost_reason_c',
      'vname' => 'LBL_LOST_REASON',
      'type' => 'text',
      'massupdate' => '0',
      'default' => '',
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
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
      'id' => 'Opportunitieslost_reason_c',
      'custom_module' => 'Opportunities',
    ),
    'bhea_council_memberships_opportunities_1' => 
    array (
      'name' => 'bhea_council_memberships_opportunities_1',
      'type' => 'link',
      'relationship' => 'bhea_council_memberships_opportunities_1',
      'source' => 'non-db',
      'module' => 'Bhea_Council_Memberships',
      'bean_name' => 'Bhea_Council_Memberships',
      'side' => 'right',
      'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
      'id_name' => 'bhea_councc535erships_ida',
      'link-type' => 'one',
    ),
    'bhea_council_memberships_opportunities_1_name' => 
    array (
      'name' => 'bhea_council_memberships_opportunities_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
      'save' => true,
      'id_name' => 'bhea_councc535erships_ida',
      'link' => 'bhea_council_memberships_opportunities_1',
      'table' => 'bhea_council_memberships',
      'module' => 'Bhea_Council_Memberships',
      'rname' => 'name',
    ),
    'bhea_councc535erships_ida' => 
    array (
      'name' => 'bhea_councc535erships_ida',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
      'id_name' => 'bhea_councc535erships_ida',
      'link' => 'bhea_council_memberships_opportunities_1',
      'table' => 'bhea_council_memberships',
      'module' => 'Bhea_Council_Memberships',
      'rname' => 'id',
      'reportable' => false,
      'side' => 'right',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
    'final_membership_fee_c' => 
    array (
      'duplicate_merge_dom_value' => 0,
      'labelValue' => 'Final Membership Fee',
      'calculated' => 'true',
      'formula' => 'subtract($membership_fee_c,$discount_c)',
      'enforced' => 'true',
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'final_membership_fee_c',
      'vname' => 'LBL_FINAL_MEMBERSHIP_FEE',
      'type' => 'currency',
      'massupdate' => '0',
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '26',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'id' => 'Opportunitiesfinal_membership_fee_c',
      'custom_module' => 'Opportunities',
    ),
    'bhea_member_levels_opportunities_1' => 
    array (
      'name' => 'bhea_member_levels_opportunities_1',
      'type' => 'link',
      'relationship' => 'bhea_member_levels_opportunities_1',
      'source' => 'non-db',
      'module' => 'Bhea_member_levels',
      'bean_name' => 'Bhea_member_levels',
      'side' => 'right',
      'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
      'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
      'link-type' => 'one',
    ),
    'bhea_member_levels_opportunities_1_name' => 
    array (
      'name' => 'bhea_member_levels_opportunities_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
      'save' => true,
      'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
      'link' => 'bhea_member_levels_opportunities_1',
      'table' => 'bhea_member_levels',
      'module' => 'Bhea_member_levels',
      'rname' => 'name',
    ),
    'bhea_member_levels_opportunities_1bhea_member_levels_ida' => 
    array (
      'name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
      'type' => 'id',
      'source' => 'non-db',
      'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
      'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
      'link' => 'bhea_member_levels_opportunities_1',
      'table' => 'bhea_member_levels',
      'module' => 'Bhea_member_levels',
      'rname' => 'id',
      'reportable' => false,
      'side' => 'right',
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
    ),
    'budget_amt_c' => 
    array (
      'labelValue' => 'Customer Budget Amount',
      'enforced' => '',
      'dependency' => '',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'budget_amt_c',
      'vname' => 'LBL_BUDGET_AMT',
      'type' => 'currency',
      'massupdate' => '0',
      'default' => '',
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
      'len' => '26',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'id' => 'Opportunitiesbudget_amt_c',
      'custom_module' => 'Opportunities',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'opportunitiespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'opportunitiesmod',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    'team_set_opportunities' => 
    array (
      'name' => 'idx_opportunities_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_opp_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_opp_assigned_timestamp',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
        1 => 'date_closed_timestamp',
        2 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_opp_id_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'opportunities_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunities_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'opportunity_activities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Activities',
      'rhs_table' => 'activities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'activities_users',
      'join_key_lhs' => 'parent_id',
      'join_key_rhs' => 'activity_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunities_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunities_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunities_teams' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'opportunities_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunity_calls' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_meetings' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_tasks' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_notes' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_emails' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_leads' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'opportunity_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunity_currencies' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'currency_id',
      'rhs_module' => 'Currencies',
      'rhs_table' => 'currencies',
      'rhs_key' => 'id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunities_campaign' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunities_revenuelineitems' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'RevenueLineItems',
      'rhs_table' => 'revenue_line_items',
      'rhs_key' => 'opportunity_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'duplicate_check' => 
  array (
    'enabled' => true,
    'FilterDuplicateCheck' => 
    array (
      'filter_template' => 
      array (
        0 => 
        array (
          '$and' => 
          array (
            0 => 
            array (
              'name' => 
              array (
                '$starts' => '$name',
              ),
            ),
            1 => 
            array (
              'sales_status' => 
              array (
                '$not_equals' => 'Closed Lost',
              ),
            ),
            2 => 
            array (
              'sales_status' => 
              array (
                '$not_equals' => 'Closed Won',
              ),
            ),
            3 => 
            array (
              'accounts.id' => 
              array (
                '$equals' => '$account_id',
              ),
            ),
          ),
        ),
      ),
      'ranking_fields' => 
      array (
        0 => 
        array (
          'in_field_name' => 'name',
          'dupe_field_name' => 'name',
        ),
      ),
    ),
  ),
  'optimistic_locking' => true,
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
    'team_security' => 'team_security',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'favorites' => true,
  'custom_fields' => true,
  'related_calc_fields' => 
  array (
    0 => 'revenuelineitems',
  ),
);