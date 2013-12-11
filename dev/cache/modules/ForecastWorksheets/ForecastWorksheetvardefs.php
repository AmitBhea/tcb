<?php 
 $GLOBALS["dictionary"]["ForecastWorksheet"]=array (
  'table' => 'forecast_worksheets',
  'studio' => false,
  'acls' => 
  array (
    'SugarACLForecastWorksheets' => true,
    'SugarACLStatic' => true,
  ),
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
      'relationship' => 'forecastworksheets_created_by',
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
      'relationship' => 'forecastworksheets_modified_user',
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
      'relationship' => 'forecastworksheet_activities',
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
      'relationship' => 'forecastworksheets_assigned_user',
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
      'relationship' => 'forecastworksheets_team',
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
      'relationship' => 'forecastworksheets_team_count_relationship',
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
      'relationship' => 'forecastworksheets_teams',
      'bean_filter_field' => 'team_set_id',
      'rhs_key_override' => true,
      'source' => 'non-db',
      'vname' => 'LBL_TEAMS',
      'link_class' => 'TeamSetLink',
      'link_file' => 'modules/Teams/TeamSetLink.php',
      'studio' => 'false',
      'reportable' => false,
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'vname' => 'LBL_PARENT_ACCOUNT_ID',
      'type' => 'id',
      'group' => 'parent_name',
      'required' => false,
      'reportable' => false,
      'audited' => false,
      'comment' => 'Account ID of the parent of this account',
      'studio' => false,
    ),
    'parent_type' => 
    array (
      'name' => 'parent_type',
      'vname' => 'LBL_PARENT_TYPE',
      'type' => 'parent_type',
      'dbType' => 'varchar',
      'group' => 'parent_name',
      'options' => 'parent_type_display',
      'len' => '255',
      'comment' => 'Sugar module the Worksheet is associated with',
      'studio' => false,
    ),
    'parent_name' => 
    array (
      'name' => 'parent_name',
      'parent_type' => 'record_type_display',
      'type_name' => 'parent_type',
      'id_name' => 'parent_id',
      'vname' => 'LBL_NAME',
      'type' => 'parent',
      'group' => 'parent_name',
      'source' => 'non-db',
      'options' => 'parent_type_display',
      'studio' => true,
      'sortable' => true,
      'related_fields' => 
      array (
        0 => 'parent_id',
        1 => 'parent_type',
        2 => 'parent_deleted',
        3 => 'name',
      ),
    ),
    'opportunity_id' => 
    array (
      'name' => 'opportunity_id',
      'vname' => 'LBL_OPPORTUNITY_ID',
      'type' => 'id',
      'audited' => false,
      'studio' => false,
      'link' => 'opportunity',
    ),
    'opportunity_name' => 
    array (
      'name' => 'opportunity_name',
      'id_name' => 'opportunity_id',
      'module' => 'Opportunities',
      'vname' => 'LBL_OPPORTUNITY_NAME',
      'type' => 'relate',
      'dbType' => 'varchar',
      'len' => '255',
      'studio' => false,
      'sortable' => true,
      'related_fields' => 
      array (
        0 => 'opportunity_id',
      ),
      'rname' => 'name',
      'link' => 'opportunity',
    ),
    'account_name' => 
    array (
      'name' => 'account_name',
      'id_name' => 'account_id',
      'module' => 'Accounts',
      'vname' => 'LBL_ACCOUNT_NAME',
      'type' => 'relate',
      'dbType' => 'varchar',
      'len' => '255',
      'studio' => false,
      'sortable' => true,
      'related_fields' => 
      array (
        0 => 'account_id',
      ),
      'rname' => 'name',
      'link' => 'accounts',
    ),
    'account_id' => 
    array (
      'name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_ID',
      'type' => 'id',
      'audited' => false,
      'studio' => false,
    ),
    'campaign_id' => 
    array (
      'name' => 'campaign_id',
      'vname' => 'LBL_CAMPAIGN_ID',
      'type' => 'id',
      'audited' => false,
      'studio' => false,
    ),
    'campaign_name' => 
    array (
      'name' => 'campaign_name',
      'id_name' => 'campaign_id',
      'rname' => 'name',
      'vname' => 'LBL_CAMPAIGN',
      'type' => 'relate',
      'dbType' => 'varchar',
      'len' => '255',
      'module' => 'Campaigns',
      'sortable' => true,
      'related_fields' => 
      array (
        0 => 'campaign_id',
      ),
    ),
    'product_template_id' => 
    array (
      'name' => 'product_template_id',
      'vname' => 'LBL_PRODUCT_TEMPLATE_ID',
      'type' => 'id',
      'audited' => false,
      'studio' => false,
    ),
    'product_template_name' => 
    array (
      'name' => 'product_template_name',
      'id_name' => 'product_template_id',
      'rname' => 'name',
      'vname' => 'LBL_PRODUCT',
      'type' => 'relate',
      'dbType' => 'varchar',
      'len' => '255',
      'module' => 'ProductTemplates',
      'sortable' => true,
      'related_fields' => 
      array (
        0 => 'product_template_id',
      ),
    ),
    'category_id' => 
    array (
      'name' => 'category_id',
      'vname' => 'LBL_CATEGORY',
      'type' => 'id',
      'required' => false,
      'reportable' => true,
    ),
    'category_name' => 
    array (
      'name' => 'category_name',
      'id_name' => 'category_id',
      'rname' => 'name',
      'vname' => 'LBL_CATEGORY_NAME',
      'type' => 'relate',
      'module' => 'ProductCategories',
      'dbType' => 'varchar',
      'len' => '255',
      'sortable' => true,
      'related_fields' => 
      array (
        0 => 'category_id',
      ),
    ),
    'sales_status' => 
    array (
      'name' => 'sales_status',
      'vname' => 'LBL_SALES_STATUS',
      'type' => 'enum',
      'options' => 'sales_status_dom',
      'len' => '255',
      'sortable' => true,
      'audited' => true,
    ),
    'likely_case' => 
    array (
      'name' => 'likely_case',
      'vname' => 'LBL_LIKELY',
      'dbType' => 'currency',
      'type' => 'currency',
      'len' => '26,6',
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
      ),
      'audited' => false,
      'studio' => false,
      'align' => 'right',
      'sortable' => true,
      'related_fields' => 
      array (
        0 => 'base_rate',
        1 => 'currency_id',
        2 => 'best_case',
        3 => 'worst_case',
      ),
      'convertToBase' => true,
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
      'audited' => false,
      'studio' => false,
      'align' => 'right',
      'sortable' => true,
      'related_fields' => 
      array (
        0 => 'base_rate',
        1 => 'currency_id',
      ),
      'convertToBase' => true,
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
      'audited' => false,
      'studio' => false,
      'align' => 'right',
      'sortable' => true,
      'related_fields' => 
      array (
        0 => 'base_rate',
        1 => 'currency_id',
      ),
      'convertToBase' => true,
    ),
    'base_rate' => 
    array (
      'name' => 'base_rate',
      'vname' => 'LBL_BASE_RATE',
      'type' => 'decimal',
      'len' => '26,6',
      'required' => true,
      'studio' => false,
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
      'studio' => false,
    ),
    'currency_name' => 
    array (
      'name' => 'currency_name',
      'rname' => 'name',
      'id_name' => 'currency_id',
      'vname' => 'LBL_CURRENCY_NAME',
      'type' => 'relate',
      'isnull' => 'true',
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
    ),
    'currency_symbol' => 
    array (
      'name' => 'currency_symbol',
      'rname' => 'symbol',
      'id_name' => 'currency_id',
      'vname' => 'LBL_CURRENCY_SYMBOL',
      'type' => 'relate',
      'isnull' => 'true',
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
    ),
    'date_closed' => 
    array (
      'name' => 'date_closed',
      'vname' => 'LBL_DATE_CLOSED',
      'type' => 'date',
      'audited' => false,
      'comment' => 'Expected or actual date the oppportunity will close',
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'sortable' => true,
      'options' => 'date_range_search_dom',
      'studio' => false,
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
    ),
    'sales_stage' => 
    array (
      'name' => 'sales_stage',
      'vname' => 'LBL_SALES_STAGE',
      'type' => 'enum',
      'options' => 'sales_stage_dom',
      'len' => '255',
      'audited' => false,
      'comment' => 'Indication of progression towards closure',
      'merge_filter' => 'enabled',
      'importable' => 'required',
      'sortable' => true,
      'required' => true,
      'studio' => false,
    ),
    'probability' => 
    array (
      'name' => 'probability',
      'vname' => 'LBL_OW_PROBABILITY',
      'type' => 'int',
      'dbType' => 'double',
      'audited' => false,
      'comment' => 'The probability of closure',
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
        'max' => 100,
      ),
      'merge_filter' => 'enabled',
      'sortable' => true,
      'studio' => false,
    ),
    'commit_stage' => 
    array (
      'name' => 'commit_stage',
      'vname' => 'LBL_FORECAST',
      'type' => 'enum',
      'len' => '50',
      'comment' => 'Forecast commit ranges: Include, Likely, Omit etc.',
      'sortable' => true,
      'studio' => false,
    ),
    'draft' => 
    array (
      'name' => 'draft',
      'vname' => 'LBL_DRAFT',
      'default' => 0,
      'type' => 'int',
      'comment' => 'Is A Draft Version',
      'studio' => false,
    ),
    'next_step' => 
    array (
      'name' => 'next_step',
      'vname' => 'LBL_NEXT_STEP',
      'type' => 'varchar',
      'len' => '100',
      'comment' => 'The next step in the sales process',
      'merge_filter' => 'enabled',
    ),
    'lead_source' => 
    array (
      'name' => 'lead_source',
      'vname' => 'LBL_LEAD_SOURCE',
      'type' => 'enum',
      'options' => 'lead_source_dom',
      'len' => '50',
      'comment' => 'Source of the product',
      'sortable' => true,
      'merge_filter' => 'enabled',
    ),
    'product_type' => 
    array (
      'name' => 'product_type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'options' => 'opportunity_type_dom',
      'len' => '255',
      'audited' => true,
      'comment' => 'Type of product ( from opportunities opportunity_type ex: Existing, New)',
      'merge_filter' => 'enabled',
    ),
    'list_price' => 
    array (
      'name' => 'list_price',
      'vname' => 'LBL_LIST_PRICE',
      'type' => 'currency',
      'len' => '26,6',
      'audited' => true,
      'sortable' => true,
      'comment' => 'List price of product ("List" in Quote)',
    ),
    'cost_price' => 
    array (
      'name' => 'cost_price',
      'vname' => 'LBL_COST_PRICE',
      'type' => 'currency',
      'len' => '26,6',
      'audited' => true,
      'sortable' => true,
      'comment' => 'Product cost ("Cost" in Quote)',
    ),
    'discount_price' => 
    array (
      'name' => 'discount_price',
      'vname' => 'LBL_DISCOUNT_PRICE',
      'type' => 'currency',
      'len' => '26,6',
      'audited' => true,
      'sortable' => true,
      'comment' => 'Discounted price ("Unit Price" in Quote)',
    ),
    'discount_amount' => 
    array (
      'name' => 'discount_amount',
      'vname' => 'LBL_TOTAL_DISCOUNT_AMOUNT',
      'type' => 'currency',
      'options' => 'discount_amount_class_dom',
      'len' => '26,6',
      'precision' => 6,
      'sortable' => true,
      'comment' => 'Discounted amount',
    ),
    'quantity' => 
    array (
      'name' => 'quantity',
      'vname' => 'LBL_QUANTITY',
      'type' => 'int',
      'len' => 5,
      'comment' => 'Quantity in use',
      'sortable' => true,
      'default' => 1,
    ),
    'total_amount' => 
    array (
      'name' => 'total_amount',
      'vname' => 'LBL_CALCULATED_LINE_ITEM_AMOUNT',
      'reportable' => false,
      'sortable' => true,
      'type' => 'currency',
    ),
    'parent_deleted' => 
    array (
      'name' => 'parent_deleted',
      'default' => 0,
      'type' => 'int',
      'comment' => 'Is Parent Deleted',
      'studio' => false,
      'source' => 'non-db',
    ),
    'opportunity' => 
    array (
      'name' => 'opportunity',
      'type' => 'link',
      'relationship' => 'forecastworksheets_opportunities',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITY',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'forecastworksheets_accounts',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS',
    ),
    'product' => 
    array (
      'name' => 'product',
      'type' => 'link',
      'relationship' => 'products_worksheets',
      'source' => 'non-db',
      'vname' => 'LBL_PRODUCT',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'forecastworksheetspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'date_modified' => 
    array (
      'name' => 'forecast_worksheetsmod',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_modified',
      ),
    ),
    'team_set_forecast_worksheets' => 
    array (
      'name' => 'idx_forecast_worksheets_tmst_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'team_set_id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_worksheets_parent',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parent_id',
        1 => 'parent_type',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_worksheets_assigned_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'deleted',
        1 => 'assigned_user_id',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_worksheets_assigned_del_time_draft_parent_type',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'deleted',
        1 => 'assigned_user_id',
        2 => 'draft',
        3 => 'date_closed_timestamp',
        4 => 'parent_type',
      ),
    ),
  ),
  'relationships' => 
  array (
    'forecastworksheets_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ForecastWorksheets',
      'rhs_table' => 'forecast_worksheets',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'forecastworksheets_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ForecastWorksheets',
      'rhs_table' => 'forecast_worksheets',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'forecastworksheet_activities' => 
    array (
      'lhs_module' => 'ForecastWorksheets',
      'lhs_table' => 'forecast_worksheets',
      'lhs_key' => 'id',
      'rhs_module' => 'Activities',
      'rhs_table' => 'activities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'activities_users',
      'join_key_lhs' => 'parent_id',
      'join_key_rhs' => 'activity_id',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'ForecastWorksheets',
    ),
    'forecastworksheets_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ForecastWorksheets',
      'rhs_table' => 'forecast_worksheets',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'forecastworksheets_team_count_relationship' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'team_sets',
      'lhs_key' => 'id',
      'rhs_module' => 'ForecastWorksheets',
      'rhs_table' => 'forecast_worksheets',
      'rhs_key' => 'team_set_id',
      'relationship_type' => 'one-to-many',
    ),
    'forecastworksheets_teams' => 
    array (
      'lhs_module' => 'ForecastWorksheets',
      'lhs_table' => 'forecast_worksheets',
      'lhs_key' => 'team_set_id',
      'rhs_module' => 'Teams',
      'rhs_table' => 'teams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'team_sets_teams',
      'join_key_lhs' => 'team_set_id',
      'join_key_rhs' => 'team_id',
    ),
    'forecastworksheets_team' => 
    array (
      'lhs_module' => 'Teams',
      'lhs_table' => 'teams',
      'lhs_key' => 'id',
      'rhs_module' => 'ForecastWorksheets',
      'rhs_table' => 'forecast_worksheets',
      'rhs_key' => 'team_id',
      'relationship_type' => 'one-to-many',
    ),
    'forecastworksheets_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'ForecastWorksheets',
      'rhs_table' => 'forecast_worksheets',
      'rhs_key' => 'account_id',
      'relationship_type' => 'one-to-many',
    ),
    'forecastworksheets_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'ForecastWorksheets',
      'rhs_table' => 'forecast_worksheets',
      'rhs_key' => 'opportunity_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'visibility' => 
  array (
    'TeamSecurity' => true,
  ),
  'templates' => 
  array (
    'team_security' => 'team_security',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'favorites' => true,
  'custom_fields' => false,
  'related_calc_fields' => 
  array (
  ),
);