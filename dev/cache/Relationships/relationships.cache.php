<?php 
 $relationships = array (
  'user_direct_reports' => 
  array (
    'name' => 'user_direct_reports',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_users_signatures' => 
  array (
    'name' => 'users_users_signatures',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignature',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_email_addresses' => 
  array (
    'name' => 'users_email_addresses',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'users_email_addresses_primary' => 
  array (
    'name' => 'users_email_addresses_primary',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'users_team_count_relationship' => 
  array (
    'name' => 'users_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_teams' => 
  array (
    'name' => 'users_teams',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'users_forecasts' => 
  array (
    'name' => 'users_forecasts',
    'rhs_module' => 'Forecasts',
    'rhs_table' => 'forecasts',
    'rhs_key' => 'user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'forecast_type',
    'relationship_role_column_value' => 'Rollup',
  ),
  'users_quotas' => 
  array (
    'name' => 'users_quotas',
    'rhs_module' => 'Quotas',
    'rhs_table' => 'quotas',
    'rhs_key' => 'user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'quota_type',
    'relationship_role_column_value' => 'Direct',
  ),
  'users_worksheets' => 
  array (
    'name' => 'users_worksheets',
    'rhs_module' => 'Worksheet',
    'rhs_table' => 'worksheet',
    'rhs_key' => 'related_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'related_forecast_type',
    'relationship_role_column_value' => 'Direct',
  ),
  'users_team_sets' => 
  array (
    'name' => 'users_team_sets',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_id',
    'join_key_rhs' => 'team_set_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'users_team' => 
  array (
    'name' => 'users_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'default_team',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_bugs' => 
  array (
    'name' => 'accounts_bugs',
    'table' => 'accounts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acc_bug_acc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acc_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_account_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_bugs' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bugs',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bugs',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'bug_id',
  ),
  'accounts_contacts' => 
  array (
    'name' => 'accounts_contacts',
    'table' => 'accounts_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_contid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_contacts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_contacts',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_contacts',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'contact_id',
  ),
  'accounts_opportunities' => 
  array (
    'name' => 'accounts_opportunities',
    'table' => 'accounts_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_opportunity',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_oppid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_opportunities' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_opportunities',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_opportunities',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'calls_contacts' => 
  array (
    'name' => 'calls_contacts',
    'table' => 'calls_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_call_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_contacts' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_contacts',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_contacts',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'contact_id',
  ),
  'calls_users' => 
  array (
    'name' => 'calls_users',
    'table' => 'calls_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_call_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_users' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_users',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_users',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'user_id',
  ),
  'calls_leads' => 
  array (
    'name' => 'calls_leads',
    'table' => 'calls_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_call_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_leads' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_leads',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_leads',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'lead_id',
  ),
  'cases_bugs' => 
  array (
    'name' => 'cases_bugs',
    'table' => 'cases_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'cases_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_cas_bug_cas',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cas_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_case_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'cases_bugs' => 
      array (
        'lhs_module' => 'Cases',
        'lhs_table' => 'cases',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'cases_bugs',
        'join_key_lhs' => 'case_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'cases_bugs',
    'join_key_lhs' => 'case_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_bugs' => 
  array (
    'name' => 'contacts_bugs',
    'table' => 'contacts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_bug_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contact_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_bugs' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_bugs',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_bugs',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_cases' => 
  array (
    'name' => 'contacts_cases',
    'table' => 'contacts_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_casespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_case_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_cases',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_cases' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_cases',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_cases',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'case_id',
  ),
  'contacts_users' => 
  array (
    'name' => 'contacts_users',
    'table' => 'contacts_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_users_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_users_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_users' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'user-based',
        'join_table' => 'contacts_users',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'user_id',
        'user_field' => 'user_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'user-based',
    'join_table' => 'contacts_users',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'user_id',
    'user_field' => 'user_id',
  ),
  'emails_accounts_rel' => 
  array (
    'name' => 'emails_accounts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_bugs_rel' => 
  array (
    'name' => 'emails_bugs_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_cases_rel' => 
  array (
    'name' => 'emails_cases_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_contacts_rel' => 
  array (
    'name' => 'emails_contacts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_leads_rel' => 
  array (
    'name' => 'emails_leads_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_opportunities_rel' => 
  array (
    'name' => 'emails_opportunities_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_tasks_rel' => 
  array (
    'name' => 'emails_tasks_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_users_rel' => 
  array (
    'name' => 'emails_users_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_prospects_rel' => 
  array (
    'name' => 'emails_prospects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_quotes' => 
  array (
    'name' => 'emails_quotes',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'meetings_contacts' => 
  array (
    'name' => 'meetings_contacts',
    'table' => 'meetings_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_mtg_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_contacts' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_contacts',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_contacts',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'contact_id',
  ),
  'meetings_users' => 
  array (
    'name' => 'meetings_users',
    'table' => 'meetings_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_mtg_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_users' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_users',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_users',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'user_id',
  ),
  'meetings_leads' => 
  array (
    'name' => 'meetings_leads',
    'table' => 'meetings_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_meeting_meeting',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_meeting_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_leads' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_leads',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_leads',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'lead_id',
  ),
  'opportunities_contacts' => 
  array (
    'name' => 'opportunities_contacts',
    'table' => 'opportunities_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_opp_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_opportunities_contacts',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'opportunities_contacts' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_contacts',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_contacts',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'contact_id',
  ),
  'team_sets_teams' => 
  array (
    'name' => 'team_sets_teams',
    'table' => 'team_sets_teams',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_ud_id',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ud_set_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'team_set_id',
          1 => 'team_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ud_team_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'team_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_ud_team_set_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'team_set_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'team_sets_teams' => 
      array (
        'lhs_module' => 'TeamSets',
        'lhs_table' => 'team_sets',
        'lhs_key' => 'id',
        'rhs_module' => 'Teams',
        'rhs_table' => 'teams',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'team_sets_teams',
        'join_key_lhs' => 'team_set_id',
        'join_key_rhs' => 'team_id',
      ),
    ),
    'lhs_module' => 'TeamSets',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
  ),
  'tracker_user_id' => 
  array (
    'name' => 'tracker_user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TrackerSessions',
    'rhs_table' => 'tracker',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tracker_tracker_queries' => 
  array (
    'name' => 'tracker_tracker_queries',
    'table' => 'tracker_tracker_queries',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'int',
        'len' => '11',
        'isnull' => 'false',
        'auto_increment' => true,
        'reportable' => false,
      ),
      'monitor_id' => 
      array (
        'name' => 'monitor_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      'query_id' => 
      array (
        'name' => 'query_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'tracker_tracker_queriespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_tracker_tq_monitor',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'monitor_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_tracker_tq_query',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'query_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'tracker_tracker_queries' => 
      array (
        'lhs_module' => 'Trackers',
        'lhs_table' => 'tracker',
        'lhs_key' => 'monitor_id',
        'rhs_module' => 'TrackerQueries',
        'rhs_table' => 'tracker_queries',
        'rhs_key' => 'query_id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'tracker_tracker_queries',
        'join_key_lhs' => 'monitor_id',
        'join_key_rhs' => 'query_id',
      ),
    ),
    'lhs_module' => 'Trackers',
    'lhs_table' => 'tracker',
    'lhs_key' => 'monitor_id',
    'rhs_module' => 'TrackerQueries',
    'rhs_table' => 'tracker_queries',
    'rhs_key' => 'query_id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tracker_tracker_queries',
    'join_key_lhs' => 'monitor_id',
    'join_key_rhs' => 'query_id',
  ),
  'prospect_list_campaigns' => 
  array (
    'name' => 'prospect_list_campaigns',
    'table' => 'prospect_list_campaigns',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'campaign_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prospect_list_campaignspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pro_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'prospect_list_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cam_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'campaign_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_prospect_list_campaigns',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'prospect_list_id',
          1 => 'campaign_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'prospect_list_campaigns' => 
      array (
        'lhs_module' => 'ProspectLists',
        'lhs_table' => 'prospect_lists',
        'lhs_key' => 'id',
        'rhs_module' => 'Campaigns',
        'rhs_table' => 'campaigns',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'prospect_list_campaigns',
        'join_key_lhs' => 'prospect_list_id',
        'join_key_rhs' => 'campaign_id',
      ),
    ),
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_list_campaigns',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'campaign_id',
  ),
  'prospect_list_contacts' => 
  array (
    'name' => 'prospect_list_contacts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_prospects' => 
  array (
    'name' => 'prospect_list_prospects',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_leads' => 
  array (
    'name' => 'prospect_list_leads',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_users' => 
  array (
    'name' => 'prospect_list_users',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_accounts' => 
  array (
    'name' => 'prospect_list_accounts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'roles_users' => 
  array (
    'name' => 'roles_users',
    'table' => 'roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ru_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ru_user_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'roles_users' => 
      array (
        'lhs_module' => 'Roles',
        'lhs_table' => 'roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Roles',
    'lhs_table' => 'roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'product_bundle_note' => 
  array (
    'name' => 'product_bundle_note',
    'table' => 'product_bundle_note',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
      3 => 
      array (
        'name' => 'bundle_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'note_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'note_index',
        'type' => 'int',
        'len' => '11',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_bundl_notepk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pbn_bundle',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pbn_note',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'note_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_pbn_pb_nb',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'note_id',
          1 => 'bundle_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_bundle_note' => 
      array (
        'lhs_module' => 'ProductBundles',
        'lhs_table' => 'product_bundles',
        'lhs_key' => 'id',
        'rhs_module' => 'ProductBundleNotes',
        'rhs_table' => 'product_bundle_note',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_bundle_note',
        'join_key_lhs' => 'bundle_id',
        'join_key_rhs' => 'note_id',
      ),
    ),
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundleNotes',
    'rhs_table' => 'product_bundle_note',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_bundle_note',
    'join_key_lhs' => 'bundle_id',
    'join_key_rhs' => 'note_id',
  ),
  'product_bundle_product' => 
  array (
    'name' => 'product_bundle_product',
    'table' => 'product_bundle_product',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
      3 => 
      array (
        'name' => 'bundle_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'product_index',
        'type' => 'int',
        'len' => '11',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_bundl_prodpk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pbp_bundle',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pbp_quote',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'product_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_pbp_bq',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'product_id',
          1 => 'bundle_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_bundle_product' => 
      array (
        'lhs_module' => 'ProductBundles',
        'lhs_table' => 'product_bundles',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_bundle_product',
        'join_key_lhs' => 'bundle_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_bundle_product',
    'join_key_lhs' => 'bundle_id',
    'join_key_rhs' => 'product_id',
  ),
  'product_bundle_quote' => 
  array (
    'name' => 'product_bundle_quote',
    'table' => 'product_bundle_quote',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
      3 => 
      array (
        'name' => 'bundle_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'bundle_index',
        'type' => 'int',
        'len' => '11',
        'default' => 0,
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_bundl_quotepk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pbq_bundle',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pbq_quote',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'quote_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_pbq_bq',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
          1 => 'bundle_id',
        ),
      ),
      4 => 
      array (
        'name' => 'bundle_index_idx',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_index',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_bundle_quote' => 
      array (
        'lhs_module' => 'ProductBundles',
        'lhs_table' => 'product_bundles',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_bundle_quote',
        'join_key_lhs' => 'bundle_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_bundle_quote',
    'join_key_lhs' => 'bundle_id',
    'join_key_rhs' => 'quote_id',
  ),
  'product_product' => 
  array (
    'name' => 'product_product',
    'table' => 'product_product',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
      3 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'child_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_prodpk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pp_parent',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'parent_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pp_child',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'child_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_product' => 
      array (
        'lhs_module' => 'Products',
        'lhs_table' => 'products',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_product',
        'join_key_lhs' => 'parent_id',
        'join_key_rhs' => 'child_id',
        'reverse' => '1',
      ),
    ),
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_product',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'child_id',
    'reverse' => '1',
  ),
  'quotes_billto_accounts' => 
  array (
    'name' => 'quotes_billto_accounts',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_accounts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'account_id',
    'relationship_role_column' => 'account_role',
    'relationship_role_column_value' => 'Bill To',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'account_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_shipto_accounts' => 
  array (
    'name' => 'quotes_shipto_accounts',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_accounts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'account_id',
    'relationship_role_column' => 'account_role',
    'relationship_role_column_value' => 'Ship To',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'account_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_contacts_shipto' => 
  array (
    'name' => 'quotes_contacts_shipto',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_contacts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'contact_id',
    'relationship_role_column' => 'contact_role',
    'relationship_role_column_value' => 'Ship To',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_contacts_billto' => 
  array (
    'name' => 'quotes_contacts_billto',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_contacts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'contact_id',
    'relationship_role_column' => 'contact_role',
    'relationship_role_column_value' => 'Bill To',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_opportunities' => 
  array (
    'name' => 'quotes_opportunities',
    'table' => 'quotes_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'quotes_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_opp_qte_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_quote_oportunities',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'quotes_opportunities' => 
      array (
        'lhs_module' => 'Quotes',
        'lhs_table' => 'quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'quotes_opportunities',
        'join_key_lhs' => 'quote_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'quotes_opportunities',
    'join_key_lhs' => 'quote_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'contracts_opportunities' => 
  array (
    'name' => 'contracts_opportunities',
    'table' => 'contracts_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contract_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_opp_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_opp_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_opportunities' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_opportunities',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_opportunities',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'contracts_contacts' => 
  array (
    'name' => 'contracts_contacts',
    'table' => 'contracts_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contract_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_contacts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'contract_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_contacts' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_contacts',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_contacts',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'contact_id',
  ),
  'contracts_quotes' => 
  array (
    'name' => 'contracts_quotes',
    'table' => 'contracts_quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contract_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_quot_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_quot_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
          1 => 'quote_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_quotes' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_quotes',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_quotes',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'quote_id',
  ),
  'contracts_products' => 
  array (
    'name' => 'contracts_products',
    'table' => 'contracts_products',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contract_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_prod_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_prod_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
          1 => 'product_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_products' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_products',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_products',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'product_id',
  ),
  'users_holidays' => 
  array (
    'name' => 'users_holidays',
    'table' => 'users_holidays',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'holiday_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'users_holidays_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_user_holi_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_user_holi_holi',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'holiday_id',
        ),
      ),
      3 => 
      array (
        'name' => 'users_quotes_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'user_id',
          1 => 'holiday_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'users_holidays' => 
      array (
        'lhs_module' => 'Users',
        'lhs_table' => 'users',
        'lhs_key' => 'id',
        'rhs_module' => 'Holidays',
        'rhs_table' => 'holidays',
        'rhs_key' => 'person_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'related_module',
        'relationship_role_column_value' => NULL,
      ),
    ),
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Holidays',
    'rhs_table' => 'holidays',
    'rhs_key' => 'person_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'related_module',
    'relationship_role_column_value' => NULL,
  ),
  'acl_roles_actions' => 
  array (
    'name' => 'acl_roles_actions',
    'table' => 'acl_roles_actions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'action_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'access_override',
        'type' => 'int',
        'len' => '3',
        'required' => false,
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_actionspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acl_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acl_action_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'action_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_action',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'action_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_actions' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'ACLActions',
        'rhs_table' => 'acl_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_actions',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'action_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLActions',
    'rhs_table' => 'acl_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_actions',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'action_id',
  ),
  'acl_roles_users' => 
  array (
    'name' => 'acl_roles_users',
    'table' => 'acl_roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_aclrole_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acluser_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_user',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_users' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'email_marketing_prospect_lists' => 
  array (
    'name' => 'email_marketing_prospect_lists',
    'table' => 'email_marketing_prospect_lists',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'email_marketing_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'email_mp_listspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'email_mp_prospects',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'email_marketing_id',
          1 => 'prospect_list_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'email_marketing_prospect_lists' => 
      array (
        'lhs_module' => 'EmailMarketing',
        'lhs_table' => 'email_marketing',
        'lhs_key' => 'id',
        'rhs_module' => 'ProspectLists',
        'rhs_table' => 'prospect_lists',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'email_marketing_prospect_lists',
        'join_key_lhs' => 'email_marketing_id',
        'join_key_rhs' => 'prospect_list_id',
      ),
    ),
    'lhs_module' => 'EmailMarketing',
    'lhs_table' => 'email_marketing',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_marketing_prospect_lists',
    'join_key_lhs' => 'email_marketing_id',
    'join_key_rhs' => 'prospect_list_id',
  ),
  'contracts_documents' => 
  array (
    'name' => 'contracts_documents',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'leads_documents' => 
  array (
    'name' => 'leads_documents',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'contracttype_documents' => 
  array (
    'name' => 'contracttype_documents',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ContracTemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'documents_accounts' => 
  array (
    'name' => 'documents_accounts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_accounts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_accounts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'table' => 'documents_accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_accounts_account_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_accounts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'account_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_accounts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'account_id',
  ),
  'documents_contacts' => 
  array (
    'name' => 'documents_contacts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_contacts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_contacts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'table' => 'documents_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_contacts_contact_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_contacts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_contacts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'contact_id',
  ),
  'documents_opportunities' => 
  array (
    'name' => 'documents_opportunities',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_opportunities' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_opportunities',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'table' => 'documents_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_docu_opps_oppo_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_docu_oppo_docu_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_opportunities',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'documents_cases' => 
  array (
    'name' => 'documents_cases',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_cases' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_cases',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'table' => 'documents_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_casesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_cases_case_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_cases_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'case_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_cases',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'case_id',
  ),
  'documents_bugs' => 
  array (
    'name' => 'documents_bugs',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_bugs' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_bugs',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'table' => 'documents_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_bugsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_bugs_bug_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bug_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_bugs_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_bugs',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'bug_id',
  ),
  'documents_products' => 
  array (
    'name' => 'documents_products',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_products' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_products',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'table' => 'documents_products',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_productsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_products_product_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'product_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_products_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'product_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_products',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'product_id',
  ),
  'documents_revenuelineitems' => 
  array (
    'name' => 'documents_revenuelineitems',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_revenuelineitems' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'RevenueLineItems',
        'rhs_table' => 'revenue_line_items',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_revenuelineitems',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'rli_id',
      ),
    ),
    'table' => 'documents_revenuelineitems',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'rli_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_revenuelineitemssspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_revenuelineitems_revenuelineitem_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'rli_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_revenuelineitems_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'rli_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_revenuelineitems',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'rli_id',
  ),
  'documents_quotes' => 
  array (
    'name' => 'documents_quotes',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_quotes' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_quotes',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'table' => 'documents_quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_quotesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_quotes_quote_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_quotes_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'quote_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_quotes',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'quote_id',
  ),
  'activities_users' => 
  array (
    'name' => 'activities_users',
    'table' => 'activities_users',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'activities_users_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'activities_records',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'parent_type',
          1 => 'parent_id',
        ),
      ),
      2 => 
      array (
        'name' => 'activities_users_parent',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'activity_id',
          1 => 'parent_id',
          2 => 'parent_type',
        ),
      ),
    ),
    'relationships' => 
    array (
      'activities_users' => 
      array (
        'lhs_module' => 'Activities',
        'lhs_table' => 'activities',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'activities_users',
        'join_key_lhs' => 'activity_id',
        'join_key_rhs' => 'parent_id',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'Users',
      ),
      'activities_teams' => 
      array (
        'lhs_module' => 'Activities',
        'lhs_table' => 'activities',
        'lhs_key' => 'id',
        'rhs_module' => 'Teams',
        'rhs_table' => 'teams',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'activities_users',
        'join_key_lhs' => 'activity_id',
        'join_key_rhs' => 'parent_id',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'Teams',
      ),
    ),
    'lhs_module' => 'Activities',
    'lhs_table' => 'activities',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'activity_id',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Users',
  ),
  'activities_teams' => 
  array (
    'name' => 'activities_teams',
    'lhs_module' => 'Activities',
    'lhs_table' => 'activities',
    'lhs_key' => 'id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'activity_id',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Teams',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_memberships_bhea_payments_1' => 
  array (
    'name' => 'bhea_memberships_bhea_payments_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_memberships_bhea_payments_1' => 
      array (
        'lhs_module' => 'Bhea_Memberships',
        'lhs_table' => 'bhea_memberships',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Payments',
        'rhs_table' => 'bhea_payments',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_memberships_bhea_payments_1_c',
        'join_key_lhs' => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
        'join_key_rhs' => 'bhea_memberships_bhea_payments_1bhea_payments_idb',
      ),
    ),
    'table' => 'bhea_memberships_bhea_payments_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_memberships_bhea_payments_1bhea_payments_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_memberships_bhea_payments_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_memberships_bhea_payments_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_memberships_bhea_payments_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_memberships_bhea_payments_1bhea_payments_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Memberships',
    'lhs_table' => 'bhea_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_memberships_bhea_payments_1_c',
    'join_key_lhs' => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
    'join_key_rhs' => 'bhea_memberships_bhea_payments_1bhea_payments_idb',
  ),
  'bhea_events_bhea_speakers_1' => 
  array (
    'name' => 'bhea_events_bhea_speakers_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_events_bhea_speakers_1' => 
      array (
        'lhs_module' => 'Bhea_Events',
        'lhs_table' => 'bhea_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Speakers',
        'rhs_table' => 'bhea_speakers',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_events_bhea_speakers_1_c',
        'join_key_lhs' => 'bhea_events_bhea_speakers_1bhea_events_ida',
        'join_key_rhs' => 'bhea_events_bhea_speakers_1bhea_speakers_idb',
      ),
    ),
    'table' => 'bhea_events_bhea_speakers_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_events_bhea_speakers_1bhea_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_events_bhea_speakers_1bhea_speakers_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_events_bhea_speakers_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_events_bhea_speakers_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_speakers_1bhea_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_events_bhea_speakers_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_speakers_1bhea_speakers_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Speakers',
    'rhs_table' => 'bhea_speakers',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_events_bhea_speakers_1_c',
    'join_key_lhs' => 'bhea_events_bhea_speakers_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_bhea_speakers_1bhea_speakers_idb',
  ),
  'bhea_sessions_bhea_registrants_1' => 
  array (
    'name' => 'bhea_sessions_bhea_registrants_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_sessions_bhea_registrants_1' => 
      array (
        'lhs_module' => 'Bhea_Sessions',
        'lhs_table' => 'bhea_sessions',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Registrants',
        'rhs_table' => 'bhea_registrants',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_sessions_bhea_registrants_1_c',
        'join_key_lhs' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
        'join_key_rhs' => 'bhea_sessions_bhea_registrants_1bhea_registrants_idb',
      ),
    ),
    'table' => 'bhea_sessions_bhea_registrants_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_sessions_bhea_registrants_1bhea_registrants_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_sessions_bhea_registrants_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_sessions_bhea_registrants_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_sessions_bhea_registrants_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_sessions_bhea_registrants_1bhea_registrants_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Sessions',
    'lhs_table' => 'bhea_sessions',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Registrants',
    'rhs_table' => 'bhea_registrants',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_sessions_bhea_registrants_1_c',
    'join_key_lhs' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
    'join_key_rhs' => 'bhea_sessions_bhea_registrants_1bhea_registrants_idb',
  ),
  'leads_bhea_finance_performance_1' => 
  array (
    'name' => 'leads_bhea_finance_performance_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'leads_bhea_finance_performance_1' => 
      array (
        'lhs_module' => 'Leads',
        'lhs_table' => 'leads',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_finance_performance',
        'rhs_table' => 'bhea_finance_performance',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'leads_bhea_finance_performance_1_c',
        'join_key_lhs' => 'leads_bhea_finance_performance_1leads_ida',
        'join_key_rhs' => 'leads_bhea_finance_performance_1bhea_finance_performance_idb',
      ),
    ),
    'table' => 'leads_bhea_finance_performance_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'leads_bhea_finance_performance_1leads_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'leads_bhea_finance_performance_1bhea_finance_performance_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'leads_bhea_finance_performance_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'leads_bhea_finance_performance_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'leads_bhea_finance_performance_1leads_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'leads_bhea_finance_performance_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'leads_bhea_finance_performance_1bhea_finance_performance_idb',
        ),
      ),
    ),
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_finance_performance',
    'rhs_table' => 'bhea_finance_performance',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'leads_bhea_finance_performance_1_c',
    'join_key_lhs' => 'leads_bhea_finance_performance_1leads_ida',
    'join_key_rhs' => 'leads_bhea_finance_performance_1bhea_finance_performance_idb',
  ),
  'bhea_contractors_bhea_events_1' => 
  array (
    'name' => 'bhea_contractors_bhea_events_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_contractors_bhea_events_1' => 
      array (
        'lhs_module' => 'Bhea_Contractors',
        'lhs_table' => 'bhea_contractors',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Events',
        'rhs_table' => 'bhea_events',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_contractors_bhea_events_1_c',
        'join_key_lhs' => 'bhea_contractors_bhea_events_1bhea_contractors_ida',
        'join_key_rhs' => 'bhea_contractors_bhea_events_1bhea_events_idb',
      ),
    ),
    'table' => 'bhea_contractors_bhea_events_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_contractors_bhea_events_1bhea_contractors_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_contractors_bhea_events_1bhea_events_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_contractors_bhea_events_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_contractors_bhea_events_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_contractors_bhea_events_1bhea_contractors_ida',
          1 => 'bhea_contractors_bhea_events_1bhea_events_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Contractors',
    'lhs_table' => 'bhea_contractors',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Events',
    'rhs_table' => 'bhea_events',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_contractors_bhea_events_1_c',
    'join_key_lhs' => 'bhea_contractors_bhea_events_1bhea_contractors_ida',
    'join_key_rhs' => 'bhea_contractors_bhea_events_1bhea_events_idb',
  ),
  'bhea_sponsor_bhea_sessions_1' => 
  array (
    'name' => 'bhea_sponsor_bhea_sessions_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_sponsor_bhea_sessions_1' => 
      array (
        'lhs_module' => 'Bhea_Sponsor',
        'lhs_table' => 'bhea_sponsor',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Sessions',
        'rhs_table' => 'bhea_sessions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_sponsor_bhea_sessions_1_c',
        'join_key_lhs' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
        'join_key_rhs' => 'bhea_sponsor_bhea_sessions_1bhea_sessions_idb',
      ),
    ),
    'table' => 'bhea_sponsor_bhea_sessions_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_sponsor_bhea_sessions_1bhea_sessions_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_sponsor_bhea_sessions_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_sponsor_bhea_sessions_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_sponsor_bhea_sessions_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_sponsor_bhea_sessions_1bhea_sessions_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sessions',
    'rhs_table' => 'bhea_sessions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_sponsor_bhea_sessions_1_c',
    'join_key_lhs' => 'bhea_sponsor_bhea_sessions_1bhea_sponsor_ida',
    'join_key_rhs' => 'bhea_sponsor_bhea_sessions_1bhea_sessions_idb',
  ),
  'bhea_events_bhea_sponsor_1' => 
  array (
    'name' => 'bhea_events_bhea_sponsor_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_events_bhea_sponsor_1' => 
      array (
        'lhs_module' => 'Bhea_Events',
        'lhs_table' => 'bhea_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Sponsor',
        'rhs_table' => 'bhea_sponsor',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_events_bhea_sponsor_1_c',
        'join_key_lhs' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
        'join_key_rhs' => 'bhea_events_bhea_sponsor_1bhea_sponsor_idb',
      ),
    ),
    'table' => 'bhea_events_bhea_sponsor_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_events_bhea_sponsor_1bhea_sponsor_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_events_bhea_sponsor_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_events_bhea_sponsor_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_sponsor_1bhea_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_events_bhea_sponsor_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_sponsor_1bhea_sponsor_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_events_bhea_sponsor_1_c',
    'join_key_lhs' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_bhea_sponsor_1bhea_sponsor_idb',
  ),
  'accounts_bhea_council_members_1' => 
  array (
    'name' => 'accounts_bhea_council_members_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_bhea_council_members_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Council_Members',
        'rhs_table' => 'bhea_council_members',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bhea_council_members_1_c',
        'join_key_lhs' => 'accounts_bhea_council_members_1accounts_ida',
        'join_key_rhs' => 'accounts_bhea_council_members_1bhea_council_members_idb',
      ),
    ),
    'table' => 'accounts_bhea_council_members_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_bhea_council_members_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_bhea_council_members_1bhea_council_members_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bhea_council_members_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_bhea_council_members_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_bhea_council_members_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_bhea_council_members_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_bhea_council_members_1bhea_council_members_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Members',
    'rhs_table' => 'bhea_council_members',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bhea_council_members_1_c',
    'join_key_lhs' => 'accounts_bhea_council_members_1accounts_ida',
    'join_key_rhs' => 'accounts_bhea_council_members_1bhea_council_members_idb',
  ),
  'bhea_events_bhea_events_1' => 
  array (
    'name' => 'bhea_events_bhea_events_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_events_bhea_events_1' => 
      array (
        'lhs_module' => 'Bhea_Events',
        'lhs_table' => 'bhea_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Events',
        'rhs_table' => 'bhea_events',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_events_bhea_events_1_c',
        'join_key_lhs' => 'bhea_events_bhea_events_1bhea_events_ida',
        'join_key_rhs' => 'bhea_events_bhea_events_1bhea_events_idb',
      ),
    ),
    'table' => 'bhea_events_bhea_events_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_events_bhea_events_1bhea_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_events_bhea_events_1bhea_events_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_events_bhea_events_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_events_bhea_events_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_events_1bhea_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_events_bhea_events_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_events_1bhea_events_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Events',
    'rhs_table' => 'bhea_events',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_events_bhea_events_1_c',
    'join_key_lhs' => 'bhea_events_bhea_events_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_bhea_events_1bhea_events_idb',
  ),
  'accounts_bhea_orders_1' => 
  array (
    'name' => 'accounts_bhea_orders_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_bhea_orders_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Orders',
        'rhs_table' => 'bhea_orders',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bhea_orders_1_c',
        'join_key_lhs' => 'accounts_bhea_orders_1accounts_ida',
        'join_key_rhs' => 'accounts_bhea_orders_1bhea_orders_idb',
      ),
    ),
    'table' => 'accounts_bhea_orders_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_bhea_orders_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_bhea_orders_1bhea_orders_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bhea_orders_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_bhea_orders_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_bhea_orders_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_bhea_orders_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_bhea_orders_1bhea_orders_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Orders',
    'rhs_table' => 'bhea_orders',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bhea_orders_1_c',
    'join_key_lhs' => 'accounts_bhea_orders_1accounts_ida',
    'join_key_rhs' => 'accounts_bhea_orders_1bhea_orders_idb',
  ),
  'bhea_council_members_bhea_council_memberships_1' => 
  array (
    'name' => 'bhea_council_members_bhea_council_memberships_1',
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_council_members_bhea_council_memberships_1' => 
      array (
        'lhs_module' => 'Bhea_Council_Members',
        'lhs_table' => 'bhea_council_members',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Council_Memberships',
        'rhs_table' => 'bhea_council_memberships',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_council_members_bhea_council_memberships_1_c',
        'join_key_lhs' => 'bhea_counc8ee0members_ida',
        'join_key_rhs' => 'bhea_counc1877erships_idb',
      ),
    ),
    'table' => 'bhea_council_members_bhea_council_memberships_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_counc8ee0members_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_counc1877erships_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_council_members_bhea_council_memberships_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_council_members_bhea_council_memberships_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_counc8ee0members_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_council_members_bhea_council_memberships_1_idb2',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_counc1877erships_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Council_Members',
    'lhs_table' => 'bhea_council_members',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Memberships',
    'rhs_table' => 'bhea_council_memberships',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_council_members_bhea_council_memberships_1_c',
    'join_key_lhs' => 'bhea_counc8ee0members_ida',
    'join_key_rhs' => 'bhea_counc1877erships_idb',
  ),
  'bhea_events_bhea_sponsorship_types_1' => 
  array (
    'name' => 'bhea_events_bhea_sponsorship_types_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_events_bhea_sponsorship_types_1' => 
      array (
        'lhs_module' => 'Bhea_Events',
        'lhs_table' => 'bhea_events',
        'lhs_key' => 'id',
        'rhs_module' => 'bhea_Sponsorship_Types',
        'rhs_table' => 'bhea_sponsorship_types',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_events_bhea_sponsorship_types_1_c',
        'join_key_lhs' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
        'join_key_rhs' => 'bhea_events_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
      ),
    ),
    'table' => 'bhea_events_bhea_sponsorship_types_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_types_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_types_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_types_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'bhea_Sponsorship_Types',
    'rhs_table' => 'bhea_sponsorship_types',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_events_bhea_sponsorship_types_1_c',
    'join_key_lhs' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
  ),
  'bhea_member_levels_bhea_councils_1' => 
  array (
    'name' => 'bhea_member_levels_bhea_councils_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_member_levels_bhea_councils_1' => 
      array (
        'lhs_module' => 'Bhea_member_levels',
        'lhs_table' => 'bhea_member_levels',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Councils',
        'rhs_table' => 'bhea_councils',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_member_levels_bhea_councils_1_c',
        'join_key_lhs' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
        'join_key_rhs' => 'bhea_member_levels_bhea_councils_1bhea_councils_idb',
      ),
    ),
    'table' => 'bhea_member_levels_bhea_councils_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_member_levels_bhea_councils_1bhea_councils_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_member_levels_bhea_councils_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_member_levels_bhea_councils_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_member_levels_bhea_councils_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_member_levels_bhea_councils_1bhea_councils_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_member_levels',
    'lhs_table' => 'bhea_member_levels',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_member_levels_bhea_councils_1_c',
    'join_key_lhs' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
    'join_key_rhs' => 'bhea_member_levels_bhea_councils_1bhea_councils_idb',
  ),
  'bhea_events_opportunities_1' => 
  array (
    'name' => 'bhea_events_opportunities_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_events_opportunities_1' => 
      array (
        'lhs_module' => 'Bhea_Events',
        'lhs_table' => 'bhea_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_events_opportunities_1_c',
        'join_key_lhs' => 'bhea_events_opportunities_1bhea_events_ida',
        'join_key_rhs' => 'bhea_events_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'bhea_events_opportunities_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_events_opportunities_1bhea_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_events_opportunities_1opportunities_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_events_opportunities_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_events_opportunities_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_events_opportunities_1bhea_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_events_opportunities_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_events_opportunities_1opportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_events_opportunities_1_c',
    'join_key_lhs' => 'bhea_events_opportunities_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_opportunities_1opportunities_idb',
  ),
  'bhea_member_levels_bhea_memberships_1' => 
  array (
    'name' => 'bhea_member_levels_bhea_memberships_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_member_levels_bhea_memberships_1' => 
      array (
        'lhs_module' => 'Bhea_member_levels',
        'lhs_table' => 'bhea_member_levels',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Memberships',
        'rhs_table' => 'bhea_memberships',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_member_levels_bhea_memberships_1_c',
        'join_key_lhs' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
        'join_key_rhs' => 'bhea_member_levels_bhea_memberships_1bhea_memberships_idb',
      ),
    ),
    'table' => 'bhea_member_levels_bhea_memberships_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_member_levels_bhea_memberships_1bhea_memberships_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_member_levels_bhea_memberships_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_member_levels_bhea_memberships_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_member_levels_bhea_memberships_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_member_levels_bhea_memberships_1bhea_memberships_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_member_levels',
    'lhs_table' => 'bhea_member_levels',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_member_levels_bhea_memberships_1_c',
    'join_key_lhs' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
    'join_key_rhs' => 'bhea_member_levels_bhea_memberships_1bhea_memberships_idb',
  ),
  'bhea_member_levels_opportunities_1' => 
  array (
    'name' => 'bhea_member_levels_opportunities_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_member_levels_opportunities_1' => 
      array (
        'lhs_module' => 'Bhea_member_levels',
        'lhs_table' => 'bhea_member_levels',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_member_levels_opportunities_1_c',
        'join_key_lhs' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
        'join_key_rhs' => 'bhea_member_levels_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'bhea_member_levels_opportunities_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_member_levels_opportunities_1opportunities_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_member_levels_opportunities_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_member_levels_opportunities_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_member_levels_opportunities_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_member_levels_opportunities_1opportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_member_levels',
    'lhs_table' => 'bhea_member_levels',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_member_levels_opportunities_1_c',
    'join_key_lhs' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
    'join_key_rhs' => 'bhea_member_levels_opportunities_1opportunities_idb',
  ),
  'bhea_hotels_bhea_events_1' => 
  array (
    'name' => 'bhea_hotels_bhea_events_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_hotels_bhea_events_1' => 
      array (
        'lhs_module' => 'Bhea_Hotels',
        'lhs_table' => 'bhea_hotels',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Events',
        'rhs_table' => 'bhea_events',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_hotels_bhea_events_1_c',
        'join_key_lhs' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
        'join_key_rhs' => 'bhea_hotels_bhea_events_1bhea_events_idb',
      ),
    ),
    'table' => 'bhea_hotels_bhea_events_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_hotels_bhea_events_1bhea_events_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_hotels_bhea_events_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_hotels_bhea_events_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_hotels_bhea_events_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_hotels_bhea_events_1bhea_events_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Hotels',
    'lhs_table' => 'bhea_hotels',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Events',
    'rhs_table' => 'bhea_events',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_hotels_bhea_events_1_c',
    'join_key_lhs' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
    'join_key_rhs' => 'bhea_hotels_bhea_events_1bhea_events_idb',
  ),
  'bhea_events_campaigns_1' => 
  array (
    'name' => 'bhea_events_campaigns_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_events_campaigns_1' => 
      array (
        'lhs_module' => 'Bhea_Events',
        'lhs_table' => 'bhea_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Campaigns',
        'rhs_table' => 'campaigns',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_events_campaigns_1_c',
        'join_key_lhs' => 'bhea_events_campaigns_1bhea_events_ida',
        'join_key_rhs' => 'bhea_events_campaigns_1campaigns_idb',
      ),
    ),
    'table' => 'bhea_events_campaigns_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_events_campaigns_1bhea_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_events_campaigns_1campaigns_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_events_campaigns_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_events_campaigns_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_events_campaigns_1bhea_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_events_campaigns_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_events_campaigns_1campaigns_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_events_campaigns_1_c',
    'join_key_lhs' => 'bhea_events_campaigns_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_campaigns_1campaigns_idb',
  ),
  'bhea_invoices_bhea_payments_1' => 
  array (
    'name' => 'bhea_invoices_bhea_payments_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_invoices_bhea_payments_1' => 
      array (
        'lhs_module' => 'Bhea_Invoices',
        'lhs_table' => 'bhea_invoices',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Payments',
        'rhs_table' => 'bhea_payments',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_invoices_bhea_payments_1_c',
        'join_key_lhs' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
        'join_key_rhs' => 'bhea_invoices_bhea_payments_1bhea_payments_idb',
      ),
    ),
    'table' => 'bhea_invoices_bhea_payments_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_invoices_bhea_payments_1bhea_payments_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_invoices_bhea_payments_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_invoices_bhea_payments_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_invoices_bhea_payments_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_invoices_bhea_payments_1bhea_payments_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Invoices',
    'lhs_table' => 'bhea_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_invoices_bhea_payments_1_c',
    'join_key_lhs' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
    'join_key_rhs' => 'bhea_invoices_bhea_payments_1bhea_payments_idb',
  ),
  'bhea_events_bhea_sponsorship_1' => 
  array (
    'name' => 'bhea_events_bhea_sponsorship_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_events_bhea_sponsorship_1' => 
      array (
        'lhs_module' => 'Bhea_Events',
        'lhs_table' => 'bhea_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Sponsorship',
        'rhs_table' => 'bhea_sponsorship',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_events_bhea_sponsorship_1_c',
        'join_key_lhs' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
        'join_key_rhs' => 'bhea_events_bhea_sponsorship_1bhea_sponsorship_idb',
      ),
    ),
    'table' => 'bhea_events_bhea_sponsorship_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_1bhea_sponsorship_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_events_bhea_sponsorship_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_sponsorship_1bhea_sponsorship_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsorship',
    'rhs_table' => 'bhea_sponsorship',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_events_bhea_sponsorship_1_c',
    'join_key_lhs' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_bhea_sponsorship_1bhea_sponsorship_idb',
  ),
  'bhea_contractors_bhea_sessions_1' => 
  array (
    'name' => 'bhea_contractors_bhea_sessions_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_contractors_bhea_sessions_1' => 
      array (
        'lhs_module' => 'Bhea_Contractors',
        'lhs_table' => 'bhea_contractors',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Sessions',
        'rhs_table' => 'bhea_sessions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_contractors_bhea_sessions_1_c',
        'join_key_lhs' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
        'join_key_rhs' => 'bhea_contractors_bhea_sessions_1bhea_sessions_idb',
      ),
    ),
    'table' => 'bhea_contractors_bhea_sessions_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_contractors_bhea_sessions_1bhea_sessions_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_contractors_bhea_sessions_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_contractors_bhea_sessions_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_contractors_bhea_sessions_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_contractors_bhea_sessions_1bhea_sessions_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Contractors',
    'lhs_table' => 'bhea_contractors',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sessions',
    'rhs_table' => 'bhea_sessions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_contractors_bhea_sessions_1_c',
    'join_key_lhs' => 'bhea_contractors_bhea_sessions_1bhea_contractors_ida',
    'join_key_rhs' => 'bhea_contractors_bhea_sessions_1bhea_sessions_idb',
  ),
  'bhea_sponsor_bhea_sponsorship_1' => 
  array (
    'name' => 'bhea_sponsor_bhea_sponsorship_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_sponsor_bhea_sponsorship_1' => 
      array (
        'lhs_module' => 'Bhea_Sponsor',
        'lhs_table' => 'bhea_sponsor',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Sponsorship',
        'rhs_table' => 'bhea_sponsorship',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_sponsor_bhea_sponsorship_1_c',
        'join_key_lhs' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
        'join_key_rhs' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsorship_idb',
      ),
    ),
    'table' => 'bhea_sponsor_bhea_sponsorship_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsorship_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_sponsor_bhea_sponsorship_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_sponsor_bhea_sponsorship_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_sponsor_bhea_sponsorship_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsorship_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsorship',
    'rhs_table' => 'bhea_sponsorship',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_sponsor_bhea_sponsorship_1_c',
    'join_key_lhs' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
    'join_key_rhs' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsorship_idb',
  ),
  'opportunities_bhea_program_1' => 
  array (
    'name' => 'opportunities_bhea_program_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'opportunities_bhea_program_1' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Program',
        'rhs_table' => 'bhea_program',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_bhea_program_1_c',
        'join_key_lhs' => 'opportunities_bhea_program_1opportunities_ida',
        'join_key_rhs' => 'opportunities_bhea_program_1bhea_program_idb',
      ),
    ),
    'table' => 'opportunities_bhea_program_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'opportunities_bhea_program_1opportunities_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'opportunities_bhea_program_1bhea_program_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_bhea_program_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'opportunities_bhea_program_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunities_bhea_program_1opportunities_ida',
          1 => 'opportunities_bhea_program_1bhea_program_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program',
    'rhs_table' => 'bhea_program',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_bhea_program_1_c',
    'join_key_lhs' => 'opportunities_bhea_program_1opportunities_ida',
    'join_key_rhs' => 'opportunities_bhea_program_1bhea_program_idb',
  ),
  'bhea_councils_bhea_council_members_1' => 
  array (
    'name' => 'bhea_councils_bhea_council_members_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_councils_bhea_council_members_1' => 
      array (
        'lhs_module' => 'Bhea_Councils',
        'lhs_table' => 'bhea_councils',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Council_Members',
        'rhs_table' => 'bhea_council_members',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_councils_bhea_council_members_1_c',
        'join_key_lhs' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
        'join_key_rhs' => 'bhea_councils_bhea_council_members_1bhea_council_members_idb',
      ),
    ),
    'table' => 'bhea_councils_bhea_council_members_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_councils_bhea_council_members_1bhea_council_members_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_councils_bhea_council_members_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_councils_bhea_council_members_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_councils_bhea_council_members_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_councils_bhea_council_members_1bhea_council_members_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Members',
    'rhs_table' => 'bhea_council_members',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_councils_bhea_council_members_1_c',
    'join_key_lhs' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
    'join_key_rhs' => 'bhea_councils_bhea_council_members_1bhea_council_members_idb',
  ),
  'bhea_sessions_bhea_sponsorship_types_1' => 
  array (
    'name' => 'bhea_sessions_bhea_sponsorship_types_1',
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_sessions_bhea_sponsorship_types_1' => 
      array (
        'lhs_module' => 'Bhea_Sessions',
        'lhs_table' => 'bhea_sessions',
        'lhs_key' => 'id',
        'rhs_module' => 'bhea_Sponsorship_Types',
        'rhs_table' => 'bhea_sponsorship_types',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_sessions_bhea_sponsorship_types_1_c',
        'join_key_lhs' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
        'join_key_rhs' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
      ),
    ),
    'table' => 'bhea_sessions_bhea_sponsorship_types_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_sessions_bhea_sponsorship_types_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_sessions_bhea_sponsorship_types_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_sessions_bhea_sponsorship_types_1_idb2',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Sessions',
    'lhs_table' => 'bhea_sessions',
    'lhs_key' => 'id',
    'rhs_module' => 'bhea_Sponsorship_Types',
    'rhs_table' => 'bhea_sponsorship_types',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_sessions_bhea_sponsorship_types_1_c',
    'join_key_lhs' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
    'join_key_rhs' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
  ),
  'accounts_bhea_memberships_1' => 
  array (
    'name' => 'accounts_bhea_memberships_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_bhea_memberships_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Memberships',
        'rhs_table' => 'bhea_memberships',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bhea_memberships_1_c',
        'join_key_lhs' => 'accounts_bhea_memberships_1accounts_ida',
        'join_key_rhs' => 'accounts_bhea_memberships_1bhea_memberships_idb',
      ),
    ),
    'table' => 'accounts_bhea_memberships_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_bhea_memberships_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_bhea_memberships_1bhea_memberships_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bhea_memberships_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_bhea_memberships_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_bhea_memberships_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_bhea_memberships_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_bhea_memberships_1bhea_memberships_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bhea_memberships_1_c',
    'join_key_lhs' => 'accounts_bhea_memberships_1accounts_ida',
    'join_key_rhs' => 'accounts_bhea_memberships_1bhea_memberships_idb',
  ),
  'bhea_councils_bhea_council_memberships_1' => 
  array (
    'name' => 'bhea_councils_bhea_council_memberships_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_councils_bhea_council_memberships_1' => 
      array (
        'lhs_module' => 'Bhea_Councils',
        'lhs_table' => 'bhea_councils',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Council_Memberships',
        'rhs_table' => 'bhea_council_memberships',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_councils_bhea_council_memberships_1_c',
        'join_key_lhs' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
        'join_key_rhs' => 'bhea_councdfbferships_idb',
      ),
    ),
    'table' => 'bhea_councils_bhea_council_memberships_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_councdfbferships_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_councils_bhea_council_memberships_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_councils_bhea_council_memberships_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_councils_bhea_council_memberships_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_councdfbferships_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Memberships',
    'rhs_table' => 'bhea_council_memberships',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_councils_bhea_council_memberships_1_c',
    'join_key_lhs' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
    'join_key_rhs' => 'bhea_councdfbferships_idb',
  ),
  'bhea_sessions_bhea_speakers_1' => 
  array (
    'name' => 'bhea_sessions_bhea_speakers_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_sessions_bhea_speakers_1' => 
      array (
        'lhs_module' => 'Bhea_Sessions',
        'lhs_table' => 'bhea_sessions',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Speakers',
        'rhs_table' => 'bhea_speakers',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_sessions_bhea_speakers_1_c',
        'join_key_lhs' => 'bhea_sessions_bhea_speakers_1bhea_sessions_ida',
        'join_key_rhs' => 'bhea_sessions_bhea_speakers_1bhea_speakers_idb',
      ),
    ),
    'table' => 'bhea_sessions_bhea_speakers_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_sessions_bhea_speakers_1bhea_sessions_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_sessions_bhea_speakers_1bhea_speakers_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_sessions_bhea_speakers_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_sessions_bhea_speakers_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_sessions_bhea_speakers_1bhea_sessions_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_sessions_bhea_speakers_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_sessions_bhea_speakers_1bhea_speakers_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Sessions',
    'lhs_table' => 'bhea_sessions',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Speakers',
    'rhs_table' => 'bhea_speakers',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_sessions_bhea_speakers_1_c',
    'join_key_lhs' => 'bhea_sessions_bhea_speakers_1bhea_sessions_ida',
    'join_key_rhs' => 'bhea_sessions_bhea_speakers_1bhea_speakers_idb',
  ),
  'bhea_events_bhea_registrants_1' => 
  array (
    'name' => 'bhea_events_bhea_registrants_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_events_bhea_registrants_1' => 
      array (
        'lhs_module' => 'Bhea_Events',
        'lhs_table' => 'bhea_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Registrants',
        'rhs_table' => 'bhea_registrants',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_events_bhea_registrants_1_c',
        'join_key_lhs' => 'bhea_events_bhea_registrants_1bhea_events_ida',
        'join_key_rhs' => 'bhea_events_bhea_registrants_1bhea_registrants_idb',
      ),
    ),
    'table' => 'bhea_events_bhea_registrants_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_events_bhea_registrants_1bhea_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_events_bhea_registrants_1bhea_registrants_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_events_bhea_registrants_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_events_bhea_registrants_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_registrants_1bhea_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_events_bhea_registrants_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_registrants_1bhea_registrants_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Registrants',
    'rhs_table' => 'bhea_registrants',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_events_bhea_registrants_1_c',
    'join_key_lhs' => 'bhea_events_bhea_registrants_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_bhea_registrants_1bhea_registrants_idb',
  ),
  'accounts_bhea_finance_performance_1' => 
  array (
    'name' => 'accounts_bhea_finance_performance_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_bhea_finance_performance_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_finance_performance',
        'rhs_table' => 'bhea_finance_performance',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bhea_finance_performance_1_c',
        'join_key_lhs' => 'accounts_bhea_finance_performance_1accounts_ida',
        'join_key_rhs' => 'accounts_bhea_finance_performance_1bhea_finance_performance_idb',
      ),
    ),
    'table' => 'accounts_bhea_finance_performance_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_bhea_finance_performance_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_bhea_finance_performance_1bhea_finance_performance_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bhea_finance_performance_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_bhea_finance_performance_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_bhea_finance_performance_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_bhea_finance_performance_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_bhea_finance_performance_1bhea_finance_performance_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_finance_performance',
    'rhs_table' => 'bhea_finance_performance',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bhea_finance_performance_1_c',
    'join_key_lhs' => 'accounts_bhea_finance_performance_1accounts_ida',
    'join_key_rhs' => 'accounts_bhea_finance_performance_1bhea_finance_performance_idb',
  ),
  'bhea_sponsorship_bhea_sessions_1' => 
  array (
    'name' => 'bhea_sponsorship_bhea_sessions_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_sponsorship_bhea_sessions_1' => 
      array (
        'lhs_module' => 'Bhea_Sponsorship',
        'lhs_table' => 'bhea_sponsorship',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Sessions',
        'rhs_table' => 'bhea_sessions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_sponsorship_bhea_sessions_1_c',
        'join_key_lhs' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
        'join_key_rhs' => 'bhea_sponsorship_bhea_sessions_1bhea_sessions_idb',
      ),
    ),
    'table' => 'bhea_sponsorship_bhea_sessions_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_sponsorship_bhea_sessions_1bhea_sessions_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_sponsorship_bhea_sessions_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_sponsorship_bhea_sessions_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_sponsorship_bhea_sessions_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_sponsorship_bhea_sessions_1bhea_sessions_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Sponsorship',
    'lhs_table' => 'bhea_sponsorship',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sessions',
    'rhs_table' => 'bhea_sessions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_sponsorship_bhea_sessions_1_c',
    'join_key_lhs' => 'bhea_sponsorship_bhea_sessions_1bhea_sponsorship_ida',
    'join_key_rhs' => 'bhea_sponsorship_bhea_sessions_1bhea_sessions_idb',
  ),
  'accounts_bhea_account_plan_1' => 
  array (
    'name' => 'accounts_bhea_account_plan_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_bhea_account_plan_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Account_Plan',
        'rhs_table' => 'bhea_account_plan',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bhea_account_plan_1_c',
        'join_key_lhs' => 'accounts_bhea_account_plan_1accounts_ida',
        'join_key_rhs' => 'accounts_bhea_account_plan_1bhea_account_plan_idb',
      ),
    ),
    'table' => 'accounts_bhea_account_plan_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_bhea_account_plan_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_bhea_account_plan_1bhea_account_plan_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bhea_account_plan_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_bhea_account_plan_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_bhea_account_plan_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_bhea_account_plan_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_bhea_account_plan_1bhea_account_plan_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Account_Plan',
    'rhs_table' => 'bhea_account_plan',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bhea_account_plan_1_c',
    'join_key_lhs' => 'accounts_bhea_account_plan_1accounts_ida',
    'join_key_rhs' => 'accounts_bhea_account_plan_1bhea_account_plan_idb',
  ),
  'bhea_events_bhea_sessions_1' => 
  array (
    'name' => 'bhea_events_bhea_sessions_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_events_bhea_sessions_1' => 
      array (
        'lhs_module' => 'Bhea_Events',
        'lhs_table' => 'bhea_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Sessions',
        'rhs_table' => 'bhea_sessions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_events_bhea_sessions_1_c',
        'join_key_lhs' => 'bhea_events_bhea_sessions_1bhea_events_ida',
        'join_key_rhs' => 'bhea_events_bhea_sessions_1bhea_sessions_idb',
      ),
    ),
    'table' => 'bhea_events_bhea_sessions_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_events_bhea_sessions_1bhea_sessions_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_events_bhea_sessions_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_events_bhea_sessions_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_sessions_1bhea_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_events_bhea_sessions_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_events_bhea_sessions_1bhea_sessions_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sessions',
    'rhs_table' => 'bhea_sessions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_events_bhea_sessions_1_c',
    'join_key_lhs' => 'bhea_events_bhea_sessions_1bhea_events_ida',
    'join_key_rhs' => 'bhea_events_bhea_sessions_1bhea_sessions_idb',
  ),
  'contacts_bhea_sessions_1' => 
  array (
    'name' => 'contacts_bhea_sessions_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'contacts_bhea_sessions_1' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Sessions',
        'rhs_table' => 'bhea_sessions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_bhea_sessions_1_c',
        'join_key_lhs' => 'contacts_bhea_sessions_1contacts_ida',
        'join_key_rhs' => 'contacts_bhea_sessions_1bhea_sessions_idb',
      ),
    ),
    'table' => 'contacts_bhea_sessions_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'contacts_bhea_sessions_1contacts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contacts_bhea_sessions_1bhea_sessions_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_bhea_sessions_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contacts_bhea_sessions_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contacts_bhea_sessions_1contacts_ida',
          1 => 'contacts_bhea_sessions_1bhea_sessions_idb',
        ),
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sessions',
    'rhs_table' => 'bhea_sessions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_bhea_sessions_1_c',
    'join_key_lhs' => 'contacts_bhea_sessions_1contacts_ida',
    'join_key_rhs' => 'contacts_bhea_sessions_1bhea_sessions_idb',
  ),
  'leads_bhea_events_1' => 
  array (
    'name' => 'leads_bhea_events_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'leads_bhea_events_1' => 
      array (
        'lhs_module' => 'Leads',
        'lhs_table' => 'leads',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Events',
        'rhs_table' => 'bhea_events',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'leads_bhea_events_1_c',
        'join_key_lhs' => 'leads_bhea_events_1leads_ida',
        'join_key_rhs' => 'leads_bhea_events_1bhea_events_idb',
      ),
    ),
    'table' => 'leads_bhea_events_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'leads_bhea_events_1leads_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'leads_bhea_events_1bhea_events_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'leads_bhea_events_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'leads_bhea_events_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'leads_bhea_events_1leads_ida',
          1 => 'leads_bhea_events_1bhea_events_idb',
        ),
      ),
    ),
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Events',
    'rhs_table' => 'bhea_events',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'leads_bhea_events_1_c',
    'join_key_lhs' => 'leads_bhea_events_1leads_ida',
    'join_key_rhs' => 'leads_bhea_events_1bhea_events_idb',
  ),
  'opportunities_bhea_councils_1' => 
  array (
    'name' => 'opportunities_bhea_councils_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'opportunities_bhea_councils_1' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Councils',
        'rhs_table' => 'bhea_councils',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_bhea_councils_1_c',
        'join_key_lhs' => 'opportunities_bhea_councils_1opportunities_ida',
        'join_key_rhs' => 'opportunities_bhea_councils_1bhea_councils_idb',
      ),
    ),
    'table' => 'opportunities_bhea_councils_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'opportunities_bhea_councils_1opportunities_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'opportunities_bhea_councils_1bhea_councils_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_bhea_councils_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'opportunities_bhea_councils_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunities_bhea_councils_1opportunities_ida',
          1 => 'opportunities_bhea_councils_1bhea_councils_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_bhea_councils_1_c',
    'join_key_lhs' => 'opportunities_bhea_councils_1opportunities_ida',
    'join_key_rhs' => 'opportunities_bhea_councils_1bhea_councils_idb',
  ),
  'bhea_council_memberships_bhea_payments_1' => 
  array (
    'name' => 'bhea_council_memberships_bhea_payments_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_council_memberships_bhea_payments_1' => 
      array (
        'lhs_module' => 'Bhea_Council_Memberships',
        'lhs_table' => 'bhea_council_memberships',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Payments',
        'rhs_table' => 'bhea_payments',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_council_memberships_bhea_payments_1_c',
        'join_key_lhs' => 'bhea_counc7982erships_ida',
        'join_key_rhs' => 'bhea_council_memberships_bhea_payments_1bhea_payments_idb',
      ),
    ),
    'table' => 'bhea_council_memberships_bhea_payments_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_counc7982erships_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_council_memberships_bhea_payments_1bhea_payments_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_council_memberships_bhea_payments_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_council_memberships_bhea_payments_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_counc7982erships_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_council_memberships_bhea_payments_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_council_memberships_bhea_payments_1bhea_payments_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Council_Memberships',
    'lhs_table' => 'bhea_council_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_council_memberships_bhea_payments_1_c',
    'join_key_lhs' => 'bhea_counc7982erships_ida',
    'join_key_rhs' => 'bhea_council_memberships_bhea_payments_1bhea_payments_idb',
  ),
  'bhea_orders_bhea_invoices_1' => 
  array (
    'name' => 'bhea_orders_bhea_invoices_1',
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_orders_bhea_invoices_1' => 
      array (
        'lhs_module' => 'Bhea_Orders',
        'lhs_table' => 'bhea_orders',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Invoices',
        'rhs_table' => 'bhea_invoices',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_orders_bhea_invoices_1_c',
        'join_key_lhs' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
        'join_key_rhs' => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
      ),
    ),
    'table' => 'bhea_orders_bhea_invoices_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_orders_bhea_invoices_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_orders_bhea_invoices_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_orders_bhea_invoices_1_idb2',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Orders',
    'lhs_table' => 'bhea_orders',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_orders_bhea_invoices_1_c',
    'join_key_lhs' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
    'join_key_rhs' => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
  ),
  'leads_contacts_1' => 
  array (
    'name' => 'leads_contacts_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'leads_contacts_1' => 
      array (
        'lhs_module' => 'Leads',
        'lhs_table' => 'leads',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'leads_contacts_1_c',
        'join_key_lhs' => 'leads_contacts_1leads_ida',
        'join_key_rhs' => 'leads_contacts_1contacts_idb',
      ),
    ),
    'table' => 'leads_contacts_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'leads_contacts_1leads_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'leads_contacts_1contacts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'leads_contacts_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'leads_contacts_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'leads_contacts_1leads_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'leads_contacts_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'leads_contacts_1contacts_idb',
        ),
      ),
    ),
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'leads_contacts_1_c',
    'join_key_lhs' => 'leads_contacts_1leads_ida',
    'join_key_rhs' => 'leads_contacts_1contacts_idb',
  ),
  'accounts_bhea_council_memberships_1' => 
  array (
    'name' => 'accounts_bhea_council_memberships_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'accounts_bhea_council_memberships_1' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Council_Memberships',
        'rhs_table' => 'bhea_council_memberships',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bhea_council_memberships_1_c',
        'join_key_lhs' => 'accounts_bhea_council_memberships_1accounts_ida',
        'join_key_rhs' => 'accounts_bhea_council_memberships_1bhea_council_memberships_idb',
      ),
    ),
    'table' => 'accounts_bhea_council_memberships_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'accounts_bhea_council_memberships_1accounts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'accounts_bhea_council_memberships_1bhea_council_memberships_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bhea_council_memberships_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'accounts_bhea_council_memberships_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'accounts_bhea_council_memberships_1accounts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'accounts_bhea_council_memberships_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'accounts_bhea_council_memberships_1bhea_council_memberships_idb',
        ),
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Memberships',
    'rhs_table' => 'bhea_council_memberships',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bhea_council_memberships_1_c',
    'join_key_lhs' => 'accounts_bhea_council_memberships_1accounts_ida',
    'join_key_rhs' => 'accounts_bhea_council_memberships_1bhea_council_memberships_idb',
  ),
  'bhea_program_bhea_program_catalogue_1' => 
  array (
    'name' => 'bhea_program_bhea_program_catalogue_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_program_bhea_program_catalogue_1' => 
      array (
        'lhs_module' => 'Bhea_Program',
        'lhs_table' => 'bhea_program',
        'lhs_key' => 'id',
        'rhs_module' => 'Bhea_Program_Catalogue',
        'rhs_table' => 'bhea_program_catalogue',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_program_bhea_program_catalogue_1_c',
        'join_key_lhs' => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
        'join_key_rhs' => 'bhea_program_bhea_program_catalogue_1bhea_program_catalogue_idb',
      ),
    ),
    'table' => 'bhea_program_bhea_program_catalogue_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_program_bhea_program_catalogue_1bhea_program_catalogue_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_program_bhea_program_catalogue_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_program_bhea_program_catalogue_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_program_bhea_program_catalogue_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_program_bhea_program_catalogue_1bhea_program_catalogue_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Program',
    'lhs_table' => 'bhea_program',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program_Catalogue',
    'rhs_table' => 'bhea_program_catalogue',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_program_bhea_program_catalogue_1_c',
    'join_key_lhs' => 'bhea_program_bhea_program_catalogue_1bhea_program_ida',
    'join_key_rhs' => 'bhea_program_bhea_program_catalogue_1bhea_program_catalogue_idb',
  ),
  'bhea_council_memberships_opportunities_1' => 
  array (
    'name' => 'bhea_council_memberships_opportunities_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'bhea_council_memberships_opportunities_1' => 
      array (
        'lhs_module' => 'Bhea_Council_Memberships',
        'lhs_table' => 'bhea_council_memberships',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'bhea_council_memberships_opportunities_1_c',
        'join_key_lhs' => 'bhea_councc535erships_ida',
        'join_key_rhs' => 'bhea_council_memberships_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'bhea_council_memberships_opportunities_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bhea_councc535erships_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bhea_council_memberships_opportunities_1opportunities_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'bhea_council_memberships_opportunities_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'bhea_council_memberships_opportunities_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bhea_councc535erships_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'bhea_council_memberships_opportunities_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bhea_council_memberships_opportunities_1opportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'Bhea_Council_Memberships',
    'lhs_table' => 'bhea_council_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'bhea_council_memberships_opportunities_1_c',
    'join_key_lhs' => 'bhea_councc535erships_ida',
    'join_key_rhs' => 'bhea_council_memberships_opportunities_1opportunities_idb',
  ),
  'leads_modified_user' => 
  array (
    'name' => 'leads_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_created_by' => 
  array (
    'name' => 'leads_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'lead_activities' => 
  array (
    'name' => 'lead_activities',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'leads_assigned_user' => 
  array (
    'name' => 'leads_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_team_count_relationship' => 
  array (
    'name' => 'leads_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_teams' => 
  array (
    'name' => 'leads_teams',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'leads_team' => 
  array (
    'name' => 'leads_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_email_addresses' => 
  array (
    'name' => 'leads_email_addresses',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'leads_email_addresses_primary' => 
  array (
    'name' => 'leads_email_addresses_primary',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'lead_direct_reports' => 
  array (
    'name' => 'lead_direct_reports',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'lead_tasks' => 
  array (
    'name' => 'lead_tasks',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_notes' => 
  array (
    'name' => 'lead_notes',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_meetings' => 
  array (
    'name' => 'lead_meetings',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_calls' => 
  array (
    'name' => 'lead_calls',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_emails' => 
  array (
    'name' => 'lead_emails',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_campaign_log' => 
  array (
    'name' => 'lead_campaign_log',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_modified_user' => 
  array (
    'name' => 'cases_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_created_by' => 
  array (
    'name' => 'cases_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'case_activities' => 
  array (
    'name' => 'case_activities',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'cases_assigned_user' => 
  array (
    'name' => 'cases_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_team_count_relationship' => 
  array (
    'name' => 'cases_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_teams' => 
  array (
    'name' => 'cases_teams',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'cases_team' => 
  array (
    'name' => 'cases_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'case_calls' => 
  array (
    'name' => 'case_calls',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_tasks' => 
  array (
    'name' => 'case_tasks',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_notes' => 
  array (
    'name' => 'case_notes',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_meetings' => 
  array (
    'name' => 'case_meetings',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_emails' => 
  array (
    'name' => 'case_emails',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'bugs_modified_user' => 
  array (
    'name' => 'bugs_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_created_by' => 
  array (
    'name' => 'bugs_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bug_activities' => 
  array (
    'name' => 'bug_activities',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bugs_assigned_user' => 
  array (
    'name' => 'bugs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_team_count_relationship' => 
  array (
    'name' => 'bugs_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_teams' => 
  array (
    'name' => 'bugs_teams',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bugs_team' => 
  array (
    'name' => 'bugs_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bug_tasks' => 
  array (
    'name' => 'bug_tasks',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_meetings' => 
  array (
    'name' => 'bug_meetings',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_calls' => 
  array (
    'name' => 'bug_calls',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_emails' => 
  array (
    'name' => 'bug_emails',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_notes' => 
  array (
    'name' => 'bug_notes',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bugs_release' => 
  array (
    'name' => 'bugs_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'found_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_fixed_in_release' => 
  array (
    'name' => 'bugs_fixed_in_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'fixed_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_assigned_user' => 
  array (
    'name' => 'prospectlists_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'prospectlists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_team_count_relationship' => 
  array (
    'name' => 'prospectlists_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_teams' => 
  array (
    'name' => 'prospectlists_teams',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'prospectlists_team' => 
  array (
    'name' => 'prospectlists_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_modified_user' => 
  array (
    'name' => 'prospects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_created_by' => 
  array (
    'name' => 'prospects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'prospect_activities' => 
  array (
    'name' => 'prospect_activities',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'prospects_assigned_user' => 
  array (
    'name' => 'prospects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_team_count_relationship' => 
  array (
    'name' => 'prospects_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_teams' => 
  array (
    'name' => 'prospects_teams',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'prospects_team' => 
  array (
    'name' => 'prospects_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_email_addresses' => 
  array (
    'name' => 'prospects_email_addresses',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospects_email_addresses_primary' => 
  array (
    'name' => 'prospects_email_addresses_primary',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospect_tasks' => 
  array (
    'name' => 'prospect_tasks',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_notes' => 
  array (
    'name' => 'prospect_notes',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_meetings' => 
  array (
    'name' => 'prospect_meetings',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_calls' => 
  array (
    'name' => 'prospect_calls',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_emails' => 
  array (
    'name' => 'prospect_emails',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_campaign_log' => 
  array (
    'name' => 'prospect_campaign_log',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_modified_user' => 
  array (
    'name' => 'campaigns_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_created_by' => 
  array (
    'name' => 'campaigns_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_activities' => 
  array (
    'name' => 'campaign_activities',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Campaigns',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'campaigns_assigned_user' => 
  array (
    'name' => 'campaigns_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_team_count_relationship' => 
  array (
    'name' => 'campaigns_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_teams' => 
  array (
    'name' => 'campaigns_teams',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'campaigns_team' => 
  array (
    'name' => 'campaigns_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_accounts' => 
  array (
    'name' => 'campaign_accounts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_contacts' => 
  array (
    'name' => 'campaign_contacts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_products' => 
  array (
    'name' => 'campaign_products',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_revenuelineitems' => 
  array (
    'name' => 'campaign_revenuelineitems',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_leads' => 
  array (
    'name' => 'campaign_leads',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_prospects' => 
  array (
    'name' => 'campaign_prospects',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_opportunities' => 
  array (
    'name' => 'campaign_opportunities',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_email_marketing' => 
  array (
    'name' => 'campaign_email_marketing',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_emailman' => 
  array (
    'name' => 'campaign_emailman',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMan',
    'rhs_table' => 'emailman',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaignlog' => 
  array (
    'name' => 'campaign_campaignlog',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_assigned_user' => 
  array (
    'name' => 'campaign_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_modified_user' => 
  array (
    'name' => 'campaign_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'email_template_email_marketings' => 
  array (
    'name' => 'email_template_email_marketings',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'template_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_contact' => 
  array (
    'name' => 'campaignlog_contact',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_lead' => 
  array (
    'name' => 'campaignlog_lead',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_created_opportunities' => 
  array (
    'name' => 'campaignlog_created_opportunities',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_targeted_users' => 
  array (
    'name' => 'campaignlog_targeted_users',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'target_id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_sent_emails' => 
  array (
    'name' => 'campaignlog_sent_emails',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'account_campaign_log' => 
  array (
    'name' => 'account_campaign_log',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaigntrakers' => 
  array (
    'name' => 'campaign_campaigntrakers',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignTrackers',
    'rhs_table' => 'campaign_trkrs',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_modified_user' => 
  array (
    'name' => 'schedulers_modified_user',
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
    'name' => 'schedulers_created_by',
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
    'name' => 'scheduler_activities',
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
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'schedulers_created_by_rel' => 
  array (
    'name' => 'schedulers_created_by_rel',
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
    'name' => 'schedulers_modified_user_id_rel',
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
    'name' => 'schedulers_jobs_rel',
    'lhs_module' => 'Schedulers',
    'lhs_table' => 'schedulers',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'scheduler_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulersjobs_assigned_user' => 
  array (
    'name' => 'schedulersjobs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_modified_user' => 
  array (
    'name' => 'contacts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_created_by' => 
  array (
    'name' => 'contacts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contact_activities' => 
  array (
    'name' => 'contact_activities',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contacts_assigned_user' => 
  array (
    'name' => 'contacts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_team_count_relationship' => 
  array (
    'name' => 'contacts_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_teams' => 
  array (
    'name' => 'contacts_teams',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'contacts_team' => 
  array (
    'name' => 'contacts_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_email_addresses' => 
  array (
    'name' => 'contacts_email_addresses',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contacts_email_addresses_primary' => 
  array (
    'name' => 'contacts_email_addresses_primary',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contact_direct_reports' => 
  array (
    'name' => 'contact_direct_reports',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_leads' => 
  array (
    'name' => 'contact_leads',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_notes' => 
  array (
    'name' => 'contact_notes',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks' => 
  array (
    'name' => 'contact_tasks',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks_parent' => 
  array (
    'name' => 'contact_tasks_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_products' => 
  array (
    'name' => 'contact_products',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_campaign_log' => 
  array (
    'name' => 'contact_campaign_log',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_modified_user' => 
  array (
    'name' => 'accounts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_created_by' => 
  array (
    'name' => 'accounts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'account_activities' => 
  array (
    'name' => 'account_activities',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'accounts_assigned_user' => 
  array (
    'name' => 'accounts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_team_count_relationship' => 
  array (
    'name' => 'accounts_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_teams' => 
  array (
    'name' => 'accounts_teams',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'accounts_team' => 
  array (
    'name' => 'accounts_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_email_addresses' => 
  array (
    'name' => 'accounts_email_addresses',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'accounts_email_addresses_primary' => 
  array (
    'name' => 'accounts_email_addresses_primary',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'member_accounts' => 
  array (
    'name' => 'member_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_cases' => 
  array (
    'name' => 'account_cases',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_tasks' => 
  array (
    'name' => 'account_tasks',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_notes' => 
  array (
    'name' => 'account_notes',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_meetings' => 
  array (
    'name' => 'account_meetings',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_calls' => 
  array (
    'name' => 'account_calls',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_emails' => 
  array (
    'name' => 'account_emails',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_leads' => 
  array (
    'name' => 'account_leads',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_modified_user' => 
  array (
    'name' => 'opportunities_modified_user',
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
    'name' => 'opportunities_created_by',
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
    'name' => 'opportunity_activities',
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
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'opportunities_assigned_user' => 
  array (
    'name' => 'opportunities_assigned_user',
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
    'name' => 'opportunities_team_count_relationship',
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
    'name' => 'opportunities_teams',
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
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'opportunities_team' => 
  array (
    'name' => 'opportunities_team',
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
    'name' => 'opportunity_calls',
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
    'name' => 'opportunity_meetings',
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
    'name' => 'opportunity_tasks',
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
    'name' => 'opportunity_notes',
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
    'name' => 'opportunity_emails',
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
    'name' => 'opportunity_leads',
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
    'name' => 'opportunity_currencies',
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
    'name' => 'opportunities_campaign',
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
    'name' => 'opportunities_revenuelineitems',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_team_count_relationship' => 
  array (
    'name' => 'emailtemplates_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_teams' => 
  array (
    'name' => 'emailtemplates_teams',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'emailtemplates_team' => 
  array (
    'name' => 'emailtemplates_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_assigned_user' => 
  array (
    'name' => 'emailtemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_modified_user' => 
  array (
    'name' => 'notes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_created_by' => 
  array (
    'name' => 'notes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'note_activities' => 
  array (
    'name' => 'note_activities',
    'lhs_module' => 'Notes',
    'lhs_table' => 'notes',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Notes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'notes_assigned_user' => 
  array (
    'name' => 'notes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_team_count_relationship' => 
  array (
    'name' => 'notes_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_teams' => 
  array (
    'name' => 'notes_teams',
    'lhs_module' => 'Notes',
    'lhs_table' => 'notes',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'notes_team' => 
  array (
    'name' => 'notes_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_modified_user' => 
  array (
    'name' => 'calls_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_created_by' => 
  array (
    'name' => 'calls_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'call_activities' => 
  array (
    'name' => 'call_activities',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'calls_assigned_user' => 
  array (
    'name' => 'calls_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_team_count_relationship' => 
  array (
    'name' => 'calls_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_teams' => 
  array (
    'name' => 'calls_teams',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'calls_team' => 
  array (
    'name' => 'calls_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_notes' => 
  array (
    'name' => 'calls_notes',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
  ),
  'emails_team_count_relationship' => 
  array (
    'name' => 'emails_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_teams' => 
  array (
    'name' => 'emails_teams',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'emails_team' => 
  array (
    'name' => 'emails_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_assigned_user' => 
  array (
    'name' => 'emails_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_modified_user' => 
  array (
    'name' => 'emails_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_created_by' => 
  array (
    'name' => 'emails_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'emails_notes_rel' => 
  array (
    'name' => 'emails_notes_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_meetings_rel' => 
  array (
    'name' => 'emails_meetings_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_modified_user' => 
  array (
    'name' => 'meetings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_created_by' => 
  array (
    'name' => 'meetings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'meeting_activities' => 
  array (
    'name' => 'meeting_activities',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'meetings_assigned_user' => 
  array (
    'name' => 'meetings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_team_count_relationship' => 
  array (
    'name' => 'meetings_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_teams' => 
  array (
    'name' => 'meetings_teams',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'meetings_team' => 
  array (
    'name' => 'meetings_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_notes' => 
  array (
    'name' => 'meetings_notes',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'tasks_modified_user' => 
  array (
    'name' => 'tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_created_by' => 
  array (
    'name' => 'tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'task_activities' => 
  array (
    'name' => 'task_activities',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'tasks_assigned_user' => 
  array (
    'name' => 'tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_team_count_relationship' => 
  array (
    'name' => 'tasks_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_teams' => 
  array (
    'name' => 'tasks_teams',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'tasks_team' => 
  array (
    'name' => 'tasks_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_notes' => 
  array (
    'name' => 'tasks_notes',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'tracker_monitor_id' => 
  array (
    'name' => 'tracker_monitor_id',
    'lhs_module' => 'TrackerPerfs',
    'lhs_table' => 'tracker_perf',
    'lhs_key' => 'monitor_id',
    'rhs_module' => 'Trackers',
    'rhs_table' => 'tracker',
    'rhs_key' => 'monitor_id',
    'relationship_type' => 'one-to-one',
  ),
  'documents_modified_user' => 
  array (
    'name' => 'documents_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_created_by' => 
  array (
    'name' => 'documents_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'document_activities' => 
  array (
    'name' => 'document_activities',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Documents',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'documents_assigned_user' => 
  array (
    'name' => 'documents_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_team_count_relationship' => 
  array (
    'name' => 'documents_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_teams' => 
  array (
    'name' => 'documents_teams',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'documents_team' => 
  array (
    'name' => 'documents_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'related_documents' => 
  array (
    'name' => 'related_documents',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'related_doc_id',
    'relationship_type' => 'one-to-many',
  ),
  'document_revisions' => 
  array (
    'name' => 'document_revisions',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'document_id',
    'relationship_type' => 'one-to-many',
  ),
  'revisions_created_by' => 
  array (
    'name' => 'revisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'styleguide_email_addresses' => 
  array (
    'name' => 'styleguide_email_addresses',
    'lhs_module' => 'Styleguide',
    'lhs_table' => 'styleguide',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Styleguide',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'styleguide_email_addresses_primary' => 
  array (
    'name' => 'styleguide_email_addresses_primary',
    'lhs_module' => 'Styleguide',
    'lhs_table' => 'styleguide',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'styleguide_modified_user' => 
  array (
    'name' => 'styleguide_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Styleguide',
    'rhs_table' => 'styleguide',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'styleguide_created_by' => 
  array (
    'name' => 'styleguide_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Styleguide',
    'rhs_table' => 'styleguide',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'styleguide_activities' => 
  array (
    'name' => 'styleguide_activities',
    'lhs_module' => 'Styleguide',
    'lhs_table' => 'styleguide',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Styleguide',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'styleguide_assigned_user' => 
  array (
    'name' => 'styleguide_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Styleguide',
    'rhs_table' => 'styleguide',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'inboundemail_team_count_relationship' => 
  array (
    'name' => 'inboundemail_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'inboundemail_teams' => 
  array (
    'name' => 'inboundemail_teams',
    'lhs_module' => 'InboundEmail',
    'lhs_table' => 'inbound_email',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'inboundemail_team' => 
  array (
    'name' => 'inboundemail_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'inbound_email_created_by' => 
  array (
    'name' => 'inbound_email_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'inbound_email_modified_user_id' => 
  array (
    'name' => 'inbound_email_modified_user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-one',
  ),
  'savedsearch_team_count_relationship' => 
  array (
    'name' => 'savedsearch_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'savedsearch_teams' => 
  array (
    'name' => 'savedsearch_teams',
    'lhs_module' => 'SavedSearch',
    'lhs_table' => 'saved_search',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'savedsearch_team' => 
  array (
    'name' => 'savedsearch_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'saved_search_assigned_user' => 
  array (
    'name' => 'saved_search_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reports_team_count_relationship' => 
  array (
    'name' => 'reports_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'reports_teams' => 
  array (
    'name' => 'reports_teams',
    'lhs_module' => 'Reports',
    'lhs_table' => 'saved_reports',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'reports_team' => 
  array (
    'name' => 'reports_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'report_assigned_user' => 
  array (
    'name' => 'report_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'team_memberships' => 
  array (
    'name' => 'team_memberships',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_memberships',
    'join_key_lhs' => 'team_id',
    'join_key_rhs' => 'user_id',
  ),
  'quotes_modified_user' => 
  array (
    'name' => 'quotes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_created_by' => 
  array (
    'name' => 'quotes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'quote_activities' => 
  array (
    'name' => 'quote_activities',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'quotes_assigned_user' => 
  array (
    'name' => 'quotes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_team_count_relationship' => 
  array (
    'name' => 'quotes_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_teams' => 
  array (
    'name' => 'quotes_teams',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'quotes_team' => 
  array (
    'name' => 'quotes_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'quote_tasks' => 
  array (
    'name' => 'quote_tasks',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_notes' => 
  array (
    'name' => 'quote_notes',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_meetings' => 
  array (
    'name' => 'quote_meetings',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_calls' => 
  array (
    'name' => 'quote_calls',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_emails' => 
  array (
    'name' => 'quote_emails',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_products' => 
  array (
    'name' => 'quote_products',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'quote_id',
    'relationship_type' => 'one-to-many',
  ),
  'quote_revenuelineitems' => 
  array (
    'name' => 'quote_revenuelineitems',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'quote_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitems_modified_user' => 
  array (
    'name' => 'revenuelineitems_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitems_created_by' => 
  array (
    'name' => 'revenuelineitems_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_activities' => 
  array (
    'name' => 'revenuelineitem_activities',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RevenueLineItems',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'revenuelineitems_assigned_user' => 
  array (
    'name' => 'revenuelineitems_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitems_team_count_relationship' => 
  array (
    'name' => 'revenuelineitems_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitems_teams' => 
  array (
    'name' => 'revenuelineitems_teams',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'revenuelineitems_team' => 
  array (
    'name' => 'revenuelineitems_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_notes' => 
  array (
    'name' => 'revenuelineitem_notes',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'RevenueLineItems',
  ),
  'revenuelineitems_opportunities' => 
  array (
    'name' => 'revenuelineitems_opportunities',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-one',
  ),
  'revenuelineitems_accounts' => 
  array (
    'name' => 'revenuelineitems_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_categories' => 
  array (
    'name' => 'revenuelineitem_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_templates' => 
  array (
    'name' => 'revenuelineitem_templates',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'product_template_id',
    'relationship_type' => 'one-to-many',
  ),
  'revenuelineitem_types' => 
  array (
    'name' => 'revenuelineitem_types',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'type_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_modified_user' => 
  array (
    'name' => 'products_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_created_by' => 
  array (
    'name' => 'products_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'product_activities' => 
  array (
    'name' => 'product_activities',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Products',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'products_assigned_user' => 
  array (
    'name' => 'products_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_team_count_relationship' => 
  array (
    'name' => 'products_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_teams' => 
  array (
    'name' => 'products_teams',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'products_team' => 
  array (
    'name' => 'products_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_notes' => 
  array (
    'name' => 'product_notes',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Products',
  ),
  'opportunities_products' => 
  array (
    'name' => 'opportunities_products',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_accounts' => 
  array (
    'name' => 'products_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_categories' => 
  array (
    'name' => 'product_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates' => 
  array (
    'name' => 'product_templates',
    'lhs_module' => 'ProductTemplates',
    'lhs_table' => 'product_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'product_template_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_types' => 
  array (
    'name' => 'product_types',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'type_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_worksheet' => 
  array (
    'name' => 'products_worksheet',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Worksheet',
    'rhs_table' => 'worksheet',
    'rhs_key' => 'related_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_revenuelineitems' => 
  array (
    'name' => 'products_revenuelineitems',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'revenuelineitem_id',
    'lhs_module' => 'RevenueLineItems',
    'lhs_table' => 'revenue_line_items',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-one',
  ),
  'productbundles_team_count_relationship' => 
  array (
    'name' => 'productbundles_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundles',
    'rhs_table' => 'product_bundles',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'productbundles_teams' => 
  array (
    'name' => 'productbundles_teams',
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'productbundles_team' => 
  array (
    'name' => 'productbundles_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundles',
    'rhs_table' => 'product_bundles',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_product_categories' => 
  array (
    'name' => 'product_templates_product_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_product_types' => 
  array (
    'name' => 'product_templates_product_types',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'type_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_manufacturers' => 
  array (
    'name' => 'product_templates_manufacturers',
    'lhs_module' => 'Manufacturers',
    'lhs_table' => 'manufacturers',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'manufacturer_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_modified_user' => 
  array (
    'name' => 'product_templates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_created_by' => 
  array (
    'name' => 'product_templates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'member_categories' => 
  array (
    'name' => 'member_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductCategories',
    'rhs_table' => 'product_categories',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'shipper_quotes' => 
  array (
    'name' => 'shipper_quotes',
    'lhs_module' => 'Shippers',
    'lhs_table' => 'shippers',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'shipper_id',
    'relationship_type' => 'one-to-many',
  ),
  'teamnotices_team_count_relationship' => 
  array (
    'name' => 'teamnotices_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'TeamNotices',
    'rhs_table' => 'team_notices',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'teamnotices_teams' => 
  array (
    'name' => 'teamnotices_teams',
    'lhs_module' => 'TeamNotices',
    'lhs_table' => 'team_notices',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'teamnotices_team' => 
  array (
    'name' => 'teamnotices_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'TeamNotices',
    'rhs_table' => 'team_notices',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'timeperiod_forecast_schedules' => 
  array (
    'name' => 'timeperiod_forecast_schedules',
    'lhs_module' => 'TimePeriods',
    'lhs_table' => 'timeperiods',
    'lhs_key' => 'id',
    'rhs_module' => 'Forecasts',
    'rhs_table' => 'forecast_schedule',
    'rhs_key' => 'timeperiod_id',
    'relationship_type' => 'one-to-many',
  ),
  'related_timeperiods' => 
  array (
    'name' => 'related_timeperiods',
    'lhs_module' => 'TimePeriods',
    'lhs_table' => 'timeperiods',
    'lhs_key' => 'id',
    'rhs_module' => 'TimePeriods',
    'rhs_table' => 'timeperiods',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecasts_created_by' => 
  array (
    'name' => 'forecasts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Forecasts',
    'rhs_table' => 'forecasts',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastworksheets_modified_user' => 
  array (
    'name' => 'forecastworksheets_modified_user',
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
    'name' => 'forecastworksheets_created_by',
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
    'name' => 'forecastworksheet_activities',
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
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'forecastworksheets_assigned_user' => 
  array (
    'name' => 'forecastworksheets_assigned_user',
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
    'name' => 'forecastworksheets_team_count_relationship',
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
    'name' => 'forecastworksheets_teams',
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
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'forecastworksheets_team' => 
  array (
    'name' => 'forecastworksheets_team',
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
    'name' => 'forecastworksheets_accounts',
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
    'name' => 'forecastworksheets_opportunities',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastWorksheets',
    'rhs_table' => 'forecast_worksheets',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheets_modified_user' => 
  array (
    'name' => 'forecastmanagerworksheets_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheets_created_by' => 
  array (
    'name' => 'forecastmanagerworksheets_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheet_activities' => 
  array (
    'name' => 'forecastmanagerworksheet_activities',
    'lhs_module' => 'ForecastManagerWorksheets',
    'lhs_table' => 'forecast_manager_worksheets',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ForecastManagerWorksheets',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'forecastmanagerworksheets_assigned_user' => 
  array (
    'name' => 'forecastmanagerworksheets_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheets_team_count_relationship' => 
  array (
    'name' => 'forecastmanagerworksheets_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecastmanagerworksheets_teams' => 
  array (
    'name' => 'forecastmanagerworksheets_teams',
    'lhs_module' => 'ForecastManagerWorksheets',
    'lhs_table' => 'forecast_manager_worksheets',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'forecastmanagerworksheets_team' => 
  array (
    'name' => 'forecastmanagerworksheets_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ForecastManagerWorksheets',
    'rhs_table' => 'forecast_manager_worksheets',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_triggers' => 
  array (
    'name' => 'workflow_triggers',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowTriggerShells',
    'rhs_table' => 'workflow_triggershells',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'frame_type',
    'relationship_role_column_value' => 'Primary',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_trigger_filters' => 
  array (
    'name' => 'workflow_trigger_filters',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowTriggerShells',
    'rhs_table' => 'workflow_triggershells',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'frame_type',
    'relationship_role_column_value' => 'Secondary',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_alerts' => 
  array (
    'name' => 'workflow_alerts',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowAlertShells',
    'rhs_table' => 'workflow_alertshells',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_actions' => 
  array (
    'name' => 'workflow_actions',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowActionShells',
    'rhs_table' => 'workflow_actionshells',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'past_triggers' => 
  array (
    'name' => 'past_triggers',
    'lhs_module' => 'WorkFlowTriggerShells',
    'lhs_table' => 'workflow_triggershells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'past_trigger',
    'relationship_type' => 'one-to-many',
  ),
  'future_triggers' => 
  array (
    'name' => 'future_triggers',
    'lhs_module' => 'WorkFlowTriggerShells',
    'lhs_table' => 'workflow_triggershells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'future_trigger',
    'relationship_type' => 'one-to-many',
  ),
  'trigger_expressions' => 
  array (
    'name' => 'trigger_expressions',
    'lhs_module' => 'WorkFlowTriggerShells',
    'lhs_table' => 'workflow_triggershells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'expression',
    'relationship_type' => 'one-to-many',
  ),
  'alert_components' => 
  array (
    'name' => 'alert_components',
    'lhs_module' => 'WorkFlowAlertShells',
    'lhs_table' => 'workflow_alertshells',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowAlerts',
    'rhs_table' => 'workflow_alerts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'expressions' => 
  array (
    'name' => 'expressions',
    'lhs_module' => 'WorkFlowAlerts',
    'lhs_table' => 'workflow_alerts',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'filter',
    'relationship_type' => 'one-to-many',
  ),
  'rel1_alert_fil' => 
  array (
    'name' => 'rel1_alert_fil',
    'lhs_module' => 'WorkFlowAlerts',
    'lhs_table' => 'workflow_alerts',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rel1_alert_fil',
    'relationship_type' => 'one-to-many',
  ),
  'rel2_alert_fil' => 
  array (
    'name' => 'rel2_alert_fil',
    'lhs_module' => 'WorkFlowAlerts',
    'lhs_table' => 'workflow_alerts',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rel2_alert_fil',
    'relationship_type' => 'one-to-many',
  ),
  'actions' => 
  array (
    'name' => 'actions',
    'lhs_module' => 'WorkFlowActionShells',
    'lhs_table' => 'workflow_actionshells',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowActions',
    'rhs_table' => 'workflow_actions',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'action_bridge' => 
  array (
    'name' => 'action_bridge',
    'lhs_module' => 'WorkFlowActionShells',
    'lhs_table' => 'workflow_actionshells',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlow',
    'rhs_table' => 'workflow',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'rel1_action_fil' => 
  array (
    'name' => 'rel1_action_fil',
    'lhs_module' => 'WorkFlowActionShells',
    'lhs_table' => 'workflow_actionshells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rel1_action_fil',
    'relationship_type' => 'one-to-many',
  ),
  'member_expressions' => 
  array (
    'name' => 'member_expressions',
    'lhs_module' => 'Expressions',
    'lhs_table' => 'expressions',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_exp_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_modified_user' => 
  array (
    'name' => 'contracts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_created_by' => 
  array (
    'name' => 'contracts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contract_activities' => 
  array (
    'name' => 'contract_activities',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'contracts_assigned_user' => 
  array (
    'name' => 'contracts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_team_count_relationship' => 
  array (
    'name' => 'contracts_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_teams' => 
  array (
    'name' => 'contracts_teams',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'contracts_team' => 
  array (
    'name' => 'contracts_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_contract_types' => 
  array (
    'name' => 'contracts_contract_types',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'type',
    'rhs_module' => 'ContractTypes',
    'rhs_table' => 'contract_types',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'contract_notes' => 
  array (
    'name' => 'contract_notes',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'relationship_type' => 'one-to-many',
  ),
  'account_contracts' => 
  array (
    'name' => 'account_contracts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_team_count_relationship' => 
  array (
    'name' => 'kbdocuments_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_teams' => 
  array (
    'name' => 'kbdocuments_teams',
    'lhs_module' => 'KBDocuments',
    'lhs_table' => 'kbdocuments',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbdocuments_team' => 
  array (
    'name' => 'kbdocuments_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocument_revisions' => 
  array (
    'name' => 'kbdocument_revisions',
    'lhs_module' => 'KBDocuments',
    'lhs_table' => 'kbdocuments',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentRevisions',
    'rhs_table' => 'kbdocument_revisions',
    'rhs_key' => 'kbdocument_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_modified_user' => 
  array (
    'name' => 'kbdocuments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_created_by' => 
  array (
    'name' => 'kbdocuments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kb_assigned_user' => 
  array (
    'name' => 'kb_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdoc_approver_user' => 
  array (
    'name' => 'kbdoc_approver_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'kbdoc_approver_id',
    'relationship_type' => 'one-to-many',
  ),
  'case_kbdocuments' => 
  array (
    'name' => 'case_kbdocuments',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'email_kbdocuments' => 
  array (
    'name' => 'email_kbdocuments',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Emails',
  ),
  'kbrev_revisions_created_by' => 
  array (
    'name' => 'kbrev_revisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentRevisions',
    'rhs_table' => 'kbdocument_revisions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kbtags_team_count_relationship' => 
  array (
    'name' => 'kbtags_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBTags',
    'rhs_table' => 'kbtags',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbtags_teams' => 
  array (
    'name' => 'kbtags_teams',
    'lhs_module' => 'KBTags',
    'lhs_table' => 'kbtags',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbtags_team' => 
  array (
    'name' => 'kbtags_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBTags',
    'rhs_table' => 'kbtags',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocumentkbtags_team_count_relationship' => 
  array (
    'name' => 'kbdocumentkbtags_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentKBTags',
    'rhs_table' => 'kbdocuments_kbtags',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocumentkbtags_teams' => 
  array (
    'name' => 'kbdocumentkbtags_teams',
    'lhs_module' => 'KBDocumentKBTags',
    'lhs_table' => 'kbdocuments_kbtags',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbdocumentkbtags_team' => 
  array (
    'name' => 'kbdocumentkbtags_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentKBTags',
    'rhs_table' => 'kbdocuments_kbtags',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbrevisions_created_by' => 
  array (
    'name' => 'kbrevisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentKBTags',
    'rhs_table' => 'kbdocuments_kbtags',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontents_team_count_relationship' => 
  array (
    'name' => 'kbcontents_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontents_teams' => 
  array (
    'name' => 'kbcontents_teams',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbcontents_team' => 
  array (
    'name' => 'kbcontents_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'notifications_modified_user' => 
  array (
    'name' => 'notifications_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notifications_created_by' => 
  array (
    'name' => 'notifications_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'notifications_activities' => 
  array (
    'name' => 'notifications_activities',
    'lhs_module' => 'Notifications',
    'lhs_table' => 'notifications',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Notifications',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'notifications_assigned_user' => 
  array (
    'name' => 'notifications_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_modified_user' => 
  array (
    'name' => 'eapm_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_created_by' => 
  array (
    'name' => 'eapm_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_activities' => 
  array (
    'name' => 'eapm_activities',
    'lhs_module' => 'EAPM',
    'lhs_table' => 'eapm',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'EAPM',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'eapm_assigned_user' => 
  array (
    'name' => 'eapm_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_modified_user' => 
  array (
    'name' => 'oauthkeys_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_created_by' => 
  array (
    'name' => 'oauthkeys_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkey_activities' => 
  array (
    'name' => 'oauthkey_activities',
    'lhs_module' => 'OAuthKeys',
    'lhs_table' => 'oauth_consumer',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'OAuthKeys',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'oauthkeys_assigned_user' => 
  array (
    'name' => 'oauthkeys_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'consumer_tokens' => 
  array (
    'name' => 'consumer_tokens',
    'lhs_module' => 'OAuthKeys',
    'lhs_table' => 'oauth_consumer',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'consumer',
    'relationship_type' => 'one-to-many',
  ),
  'oauthtokens_assigned_user' => 
  array (
    'name' => 'oauthtokens_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_oauthtokens' => 
  array (
    'name' => 'contacts_oauthtokens',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfavorites_modified_user' => 
  array (
    'name' => 'sugarfavorites_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfavorites_created_by' => 
  array (
    'name' => 'sugarfavorites_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfavorites_activities' => 
  array (
    'name' => 'sugarfavorites_activities',
    'lhs_module' => 'SugarFavorites',
    'lhs_table' => 'sugarfavorites',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'SugarFavorites',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'sugarfavorites_assigned_user' => 
  array (
    'name' => 'sugarfavorites_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'weblogichooks_modified_user' => 
  array (
    'name' => 'weblogichooks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WebLogicHooks',
    'rhs_table' => 'weblogichooks',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'weblogichooks_created_by' => 
  array (
    'name' => 'weblogichooks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WebLogicHooks',
    'rhs_table' => 'weblogichooks',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'weblogichook_activities' => 
  array (
    'name' => 'weblogichook_activities',
    'lhs_module' => 'WebLogicHooks',
    'lhs_table' => 'weblogichooks',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'WebLogicHooks',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'activitystream/activities_modified_user' => 
  array (
    'name' => 'activitystream/activities_modified_user',
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
    'name' => 'activitystream/activities_created_by',
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
    'name' => 'activity_activities',
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
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'comments' => 
  array (
    'name' => 'comments',
    'lhs_module' => 'Activities',
    'lhs_table' => 'activities',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'activitystream/comments_modified_user' => 
  array (
    'name' => 'activitystream/comments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ActivityStream/Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'activitystream/comments_created_by' => 
  array (
    'name' => 'activitystream/comments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ActivityStream/Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'comment_activities' => 
  array (
    'name' => 'comment_activities',
    'lhs_module' => 'ActivityStream/Comments',
    'lhs_table' => 'comments',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ActivityStream/Comments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'activitystream/subscriptions_modified_user' => 
  array (
    'name' => 'activitystream/subscriptions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ActivityStream/Subscriptions',
    'rhs_table' => 'subscriptions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'activitystream/subscriptions_created_by' => 
  array (
    'name' => 'activitystream/subscriptions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ActivityStream/Subscriptions',
    'rhs_table' => 'subscriptions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'subscription_activities' => 
  array (
    'name' => 'subscription_activities',
    'lhs_module' => 'ActivityStream/Subscriptions',
    'lhs_table' => 'subscriptions',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ActivityStream/Subscriptions',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'filters_modified_user' => 
  array (
    'name' => 'filters_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'filters_created_by' => 
  array (
    'name' => 'filters_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'filters_activities' => 
  array (
    'name' => 'filters_activities',
    'lhs_module' => 'Filters',
    'lhs_table' => 'filters',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Filters',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'filters_team_count_relationship' => 
  array (
    'name' => 'filters_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'filters_teams' => 
  array (
    'name' => 'filters_teams',
    'lhs_module' => 'Filters',
    'lhs_table' => 'filters',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'filters_team' => 
  array (
    'name' => 'filters_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'filters_assigned_user' => 
  array (
    'name' => 'filters_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Filters',
    'rhs_table' => 'filters',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboards_modified_user' => 
  array (
    'name' => 'dashboards_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboards_created_by' => 
  array (
    'name' => 'dashboards_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dashboard_activities' => 
  array (
    'name' => 'dashboard_activities',
    'lhs_module' => 'Dashboards',
    'lhs_table' => 'dashboards',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Dashboards',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'dashboards_assigned_user' => 
  array (
    'name' => 'dashboards_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dashboards',
    'rhs_table' => 'dashboards',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pdfmanager_modified_user' => 
  array (
    'name' => 'pdfmanager_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pdfmanager_created_by' => 
  array (
    'name' => 'pdfmanager_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pdfmanager_activities' => 
  array (
    'name' => 'pdfmanager_activities',
    'lhs_module' => 'PdfManager',
    'lhs_table' => 'pdfmanager',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'PdfManager',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'pdfmanager_team_count_relationship' => 
  array (
    'name' => 'pdfmanager_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'pdfmanager_teams' => 
  array (
    'name' => 'pdfmanager_teams',
    'lhs_module' => 'PdfManager',
    'lhs_table' => 'pdfmanager',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'pdfmanager_team' => 
  array (
    'name' => 'pdfmanager_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'pdfmanager_assigned_user' => 
  array (
    'name' => 'pdfmanager_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PdfManager',
    'rhs_table' => 'pdfmanager',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_catalogue_modified_user' => 
  array (
    'name' => 'bhea_program_catalogue_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program_Catalogue',
    'rhs_table' => 'bhea_program_catalogue',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_catalogue_created_by' => 
  array (
    'name' => 'bhea_program_catalogue_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program_Catalogue',
    'rhs_table' => 'bhea_program_catalogue',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_catalogue_activities' => 
  array (
    'name' => 'bhea_program_catalogue_activities',
    'lhs_module' => 'Bhea_Program_Catalogue',
    'lhs_table' => 'bhea_program_catalogue',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Program_Catalogue',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_program_catalogue_team_count_relationship' => 
  array (
    'name' => 'bhea_program_catalogue_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program_Catalogue',
    'rhs_table' => 'bhea_program_catalogue',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_catalogue_teams' => 
  array (
    'name' => 'bhea_program_catalogue_teams',
    'lhs_module' => 'Bhea_Program_Catalogue',
    'lhs_table' => 'bhea_program_catalogue',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_program_catalogue_team' => 
  array (
    'name' => 'bhea_program_catalogue_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program_Catalogue',
    'rhs_table' => 'bhea_program_catalogue',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_catalogue_assigned_user' => 
  array (
    'name' => 'bhea_program_catalogue_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program_Catalogue',
    'rhs_table' => 'bhea_program_catalogue',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_modified_user' => 
  array (
    'name' => 'bhea_program_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program',
    'rhs_table' => 'bhea_program',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_created_by' => 
  array (
    'name' => 'bhea_program_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program',
    'rhs_table' => 'bhea_program',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_activities' => 
  array (
    'name' => 'bhea_program_activities',
    'lhs_module' => 'Bhea_Program',
    'lhs_table' => 'bhea_program',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Program',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_program_team_count_relationship' => 
  array (
    'name' => 'bhea_program_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program',
    'rhs_table' => 'bhea_program',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_teams' => 
  array (
    'name' => 'bhea_program_teams',
    'lhs_module' => 'Bhea_Program',
    'lhs_table' => 'bhea_program',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_program_team' => 
  array (
    'name' => 'bhea_program_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program',
    'rhs_table' => 'bhea_program',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_program_assigned_user' => 
  array (
    'name' => 'bhea_program_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Program',
    'rhs_table' => 'bhea_program',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_orders_modified_user' => 
  array (
    'name' => 'bhea_orders_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Orders',
    'rhs_table' => 'bhea_orders',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_orders_created_by' => 
  array (
    'name' => 'bhea_orders_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Orders',
    'rhs_table' => 'bhea_orders',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_orders_activities' => 
  array (
    'name' => 'bhea_orders_activities',
    'lhs_module' => 'Bhea_Orders',
    'lhs_table' => 'bhea_orders',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Orders',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_orders_team_count_relationship' => 
  array (
    'name' => 'bhea_orders_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Orders',
    'rhs_table' => 'bhea_orders',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_orders_teams' => 
  array (
    'name' => 'bhea_orders_teams',
    'lhs_module' => 'Bhea_Orders',
    'lhs_table' => 'bhea_orders',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_orders_team' => 
  array (
    'name' => 'bhea_orders_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Orders',
    'rhs_table' => 'bhea_orders',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_orders_assigned_user' => 
  array (
    'name' => 'bhea_orders_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Orders',
    'rhs_table' => 'bhea_orders',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_invoices_modified_user' => 
  array (
    'name' => 'bhea_invoices_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_invoices_created_by' => 
  array (
    'name' => 'bhea_invoices_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_invoices_activities' => 
  array (
    'name' => 'bhea_invoices_activities',
    'lhs_module' => 'Bhea_Invoices',
    'lhs_table' => 'bhea_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Invoices',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_invoices_team_count_relationship' => 
  array (
    'name' => 'bhea_invoices_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_invoices_teams' => 
  array (
    'name' => 'bhea_invoices_teams',
    'lhs_module' => 'Bhea_Invoices',
    'lhs_table' => 'bhea_invoices',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_invoices_team' => 
  array (
    'name' => 'bhea_invoices_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_invoices_assigned_user' => 
  array (
    'name' => 'bhea_invoices_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Invoices',
    'rhs_table' => 'bhea_invoices',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_account_plan_modified_user' => 
  array (
    'name' => 'bhea_account_plan_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Account_Plan',
    'rhs_table' => 'bhea_account_plan',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_account_plan_created_by' => 
  array (
    'name' => 'bhea_account_plan_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Account_Plan',
    'rhs_table' => 'bhea_account_plan',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_account_plan_activities' => 
  array (
    'name' => 'bhea_account_plan_activities',
    'lhs_module' => 'Bhea_Account_Plan',
    'lhs_table' => 'bhea_account_plan',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Account_Plan',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_account_plan_team_count_relationship' => 
  array (
    'name' => 'bhea_account_plan_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Account_Plan',
    'rhs_table' => 'bhea_account_plan',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_account_plan_teams' => 
  array (
    'name' => 'bhea_account_plan_teams',
    'lhs_module' => 'Bhea_Account_Plan',
    'lhs_table' => 'bhea_account_plan',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_account_plan_team' => 
  array (
    'name' => 'bhea_account_plan_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Account_Plan',
    'rhs_table' => 'bhea_account_plan',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_account_plan_assigned_user' => 
  array (
    'name' => 'bhea_account_plan_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Account_Plan',
    'rhs_table' => 'bhea_account_plan',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_touch_points_modified_user' => 
  array (
    'name' => 'bhea_touch_points_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Touch_Points',
    'rhs_table' => 'bhea_touch_points',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_touch_points_created_by' => 
  array (
    'name' => 'bhea_touch_points_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Touch_Points',
    'rhs_table' => 'bhea_touch_points',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_touch_points_activities' => 
  array (
    'name' => 'bhea_touch_points_activities',
    'lhs_module' => 'Bhea_Touch_Points',
    'lhs_table' => 'bhea_touch_points',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Touch_Points',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_touch_points_team_count_relationship' => 
  array (
    'name' => 'bhea_touch_points_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Touch_Points',
    'rhs_table' => 'bhea_touch_points',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_touch_points_teams' => 
  array (
    'name' => 'bhea_touch_points_teams',
    'lhs_module' => 'Bhea_Touch_Points',
    'lhs_table' => 'bhea_touch_points',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_touch_points_team' => 
  array (
    'name' => 'bhea_touch_points_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Touch_Points',
    'rhs_table' => 'bhea_touch_points',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_touch_points_assigned_user' => 
  array (
    'name' => 'bhea_touch_points_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Touch_Points',
    'rhs_table' => 'bhea_touch_points',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_payments_modified_user' => 
  array (
    'name' => 'bhea_payments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_payments_created_by' => 
  array (
    'name' => 'bhea_payments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_payments_activities' => 
  array (
    'name' => 'bhea_payments_activities',
    'lhs_module' => 'Bhea_Payments',
    'lhs_table' => 'bhea_payments',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Payments',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_payments_team_count_relationship' => 
  array (
    'name' => 'bhea_payments_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_payments_teams' => 
  array (
    'name' => 'bhea_payments_teams',
    'lhs_module' => 'Bhea_Payments',
    'lhs_table' => 'bhea_payments',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_payments_team' => 
  array (
    'name' => 'bhea_payments_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_payments_assigned_user' => 
  array (
    'name' => 'bhea_payments_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Payments',
    'rhs_table' => 'bhea_payments',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_hotels_modified_user' => 
  array (
    'name' => 'bhea_hotels_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Hotels',
    'rhs_table' => 'bhea_hotels',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_hotels_created_by' => 
  array (
    'name' => 'bhea_hotels_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Hotels',
    'rhs_table' => 'bhea_hotels',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_hotels_activities' => 
  array (
    'name' => 'bhea_hotels_activities',
    'lhs_module' => 'Bhea_Hotels',
    'lhs_table' => 'bhea_hotels',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Hotels',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_hotels_team_count_relationship' => 
  array (
    'name' => 'bhea_hotels_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Hotels',
    'rhs_table' => 'bhea_hotels',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_hotels_teams' => 
  array (
    'name' => 'bhea_hotels_teams',
    'lhs_module' => 'Bhea_Hotels',
    'lhs_table' => 'bhea_hotels',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_hotels_team' => 
  array (
    'name' => 'bhea_hotels_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Hotels',
    'rhs_table' => 'bhea_hotels',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_hotels_assigned_user' => 
  array (
    'name' => 'bhea_hotels_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Hotels',
    'rhs_table' => 'bhea_hotels',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_contractors_modified_user' => 
  array (
    'name' => 'bhea_contractors_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Contractors',
    'rhs_table' => 'bhea_contractors',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_contractors_created_by' => 
  array (
    'name' => 'bhea_contractors_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Contractors',
    'rhs_table' => 'bhea_contractors',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_contractors_activities' => 
  array (
    'name' => 'bhea_contractors_activities',
    'lhs_module' => 'Bhea_Contractors',
    'lhs_table' => 'bhea_contractors',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Contractors',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_contractors_team_count_relationship' => 
  array (
    'name' => 'bhea_contractors_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Contractors',
    'rhs_table' => 'bhea_contractors',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_contractors_teams' => 
  array (
    'name' => 'bhea_contractors_teams',
    'lhs_module' => 'Bhea_Contractors',
    'lhs_table' => 'bhea_contractors',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_contractors_team' => 
  array (
    'name' => 'bhea_contractors_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Contractors',
    'rhs_table' => 'bhea_contractors',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_contractors_assigned_user' => 
  array (
    'name' => 'bhea_contractors_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Contractors',
    'rhs_table' => 'bhea_contractors',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_contractors_email_addresses' => 
  array (
    'name' => 'bhea_contractors_email_addresses',
    'lhs_module' => 'Bhea_Contractors',
    'lhs_table' => 'bhea_contractors',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bhea_Contractors',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'bhea_contractors_email_addresses_primary' => 
  array (
    'name' => 'bhea_contractors_email_addresses_primary',
    'lhs_module' => 'Bhea_Contractors',
    'lhs_table' => 'bhea_contractors',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'bhea_sponsor_modified_user' => 
  array (
    'name' => 'bhea_sponsor_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsor_created_by' => 
  array (
    'name' => 'bhea_sponsor_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsor_activities' => 
  array (
    'name' => 'bhea_sponsor_activities',
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Sponsor',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_sponsor_team_count_relationship' => 
  array (
    'name' => 'bhea_sponsor_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsor_teams' => 
  array (
    'name' => 'bhea_sponsor_teams',
    'lhs_module' => 'Bhea_Sponsor',
    'lhs_table' => 'bhea_sponsor',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_sponsor_team' => 
  array (
    'name' => 'bhea_sponsor_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsor_assigned_user' => 
  array (
    'name' => 'bhea_sponsor_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsor',
    'rhs_table' => 'bhea_sponsor',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_registrants_modified_user' => 
  array (
    'name' => 'bhea_registrants_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Registrants',
    'rhs_table' => 'bhea_registrants',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_registrants_created_by' => 
  array (
    'name' => 'bhea_registrants_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Registrants',
    'rhs_table' => 'bhea_registrants',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_registrants_activities' => 
  array (
    'name' => 'bhea_registrants_activities',
    'lhs_module' => 'Bhea_Registrants',
    'lhs_table' => 'bhea_registrants',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Registrants',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_registrants_team_count_relationship' => 
  array (
    'name' => 'bhea_registrants_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Registrants',
    'rhs_table' => 'bhea_registrants',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_registrants_teams' => 
  array (
    'name' => 'bhea_registrants_teams',
    'lhs_module' => 'Bhea_Registrants',
    'lhs_table' => 'bhea_registrants',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_registrants_team' => 
  array (
    'name' => 'bhea_registrants_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Registrants',
    'rhs_table' => 'bhea_registrants',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_registrants_assigned_user' => 
  array (
    'name' => 'bhea_registrants_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Registrants',
    'rhs_table' => 'bhea_registrants',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_registrants_email_addresses' => 
  array (
    'name' => 'bhea_registrants_email_addresses',
    'lhs_module' => 'Bhea_Registrants',
    'lhs_table' => 'bhea_registrants',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bhea_Registrants',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'bhea_registrants_email_addresses_primary' => 
  array (
    'name' => 'bhea_registrants_email_addresses_primary',
    'lhs_module' => 'Bhea_Registrants',
    'lhs_table' => 'bhea_registrants',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'bhea_sponsorship_modified_user' => 
  array (
    'name' => 'bhea_sponsorship_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsorship',
    'rhs_table' => 'bhea_sponsorship',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsorship_created_by' => 
  array (
    'name' => 'bhea_sponsorship_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsorship',
    'rhs_table' => 'bhea_sponsorship',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsorship_activities' => 
  array (
    'name' => 'bhea_sponsorship_activities',
    'lhs_module' => 'Bhea_Sponsorship',
    'lhs_table' => 'bhea_sponsorship',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Sponsorship',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_sponsorship_team_count_relationship' => 
  array (
    'name' => 'bhea_sponsorship_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsorship',
    'rhs_table' => 'bhea_sponsorship',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsorship_teams' => 
  array (
    'name' => 'bhea_sponsorship_teams',
    'lhs_module' => 'Bhea_Sponsorship',
    'lhs_table' => 'bhea_sponsorship',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_sponsorship_team' => 
  array (
    'name' => 'bhea_sponsorship_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsorship',
    'rhs_table' => 'bhea_sponsorship',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsorship_assigned_user' => 
  array (
    'name' => 'bhea_sponsorship_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sponsorship',
    'rhs_table' => 'bhea_sponsorship',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_speakers_modified_user' => 
  array (
    'name' => 'bhea_speakers_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Speakers',
    'rhs_table' => 'bhea_speakers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_speakers_created_by' => 
  array (
    'name' => 'bhea_speakers_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Speakers',
    'rhs_table' => 'bhea_speakers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_speakers_activities' => 
  array (
    'name' => 'bhea_speakers_activities',
    'lhs_module' => 'Bhea_Speakers',
    'lhs_table' => 'bhea_speakers',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Speakers',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_speakers_team_count_relationship' => 
  array (
    'name' => 'bhea_speakers_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Speakers',
    'rhs_table' => 'bhea_speakers',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_speakers_teams' => 
  array (
    'name' => 'bhea_speakers_teams',
    'lhs_module' => 'Bhea_Speakers',
    'lhs_table' => 'bhea_speakers',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_speakers_team' => 
  array (
    'name' => 'bhea_speakers_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Speakers',
    'rhs_table' => 'bhea_speakers',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_speakers_assigned_user' => 
  array (
    'name' => 'bhea_speakers_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Speakers',
    'rhs_table' => 'bhea_speakers',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_speakers_email_addresses' => 
  array (
    'name' => 'bhea_speakers_email_addresses',
    'lhs_module' => 'Bhea_Speakers',
    'lhs_table' => 'bhea_speakers',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bhea_Speakers',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'bhea_speakers_email_addresses_primary' => 
  array (
    'name' => 'bhea_speakers_email_addresses_primary',
    'lhs_module' => 'Bhea_Speakers',
    'lhs_table' => 'bhea_speakers',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'bhea_sessions_modified_user' => 
  array (
    'name' => 'bhea_sessions_modified_user',
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
    'name' => 'bhea_sessions_created_by',
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
    'name' => 'bhea_sessions_activities',
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
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_sessions_team_count_relationship' => 
  array (
    'name' => 'bhea_sessions_team_count_relationship',
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
    'name' => 'bhea_sessions_teams',
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
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_sessions_team' => 
  array (
    'name' => 'bhea_sessions_team',
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
    'name' => 'bhea_sessions_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Sessions',
    'rhs_table' => 'bhea_sessions',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_events_modified_user' => 
  array (
    'name' => 'bhea_events_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Events',
    'rhs_table' => 'bhea_events',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_events_created_by' => 
  array (
    'name' => 'bhea_events_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Events',
    'rhs_table' => 'bhea_events',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_events_activities' => 
  array (
    'name' => 'bhea_events_activities',
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Events',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_events_team_count_relationship' => 
  array (
    'name' => 'bhea_events_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Events',
    'rhs_table' => 'bhea_events',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_events_teams' => 
  array (
    'name' => 'bhea_events_teams',
    'lhs_module' => 'Bhea_Events',
    'lhs_table' => 'bhea_events',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_events_team' => 
  array (
    'name' => 'bhea_events_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Events',
    'rhs_table' => 'bhea_events',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_events_assigned_user' => 
  array (
    'name' => 'bhea_events_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Events',
    'rhs_table' => 'bhea_events',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_memberships_modified_user' => 
  array (
    'name' => 'bhea_council_memberships_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Memberships',
    'rhs_table' => 'bhea_council_memberships',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_memberships_created_by' => 
  array (
    'name' => 'bhea_council_memberships_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Memberships',
    'rhs_table' => 'bhea_council_memberships',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_memberships_activities' => 
  array (
    'name' => 'bhea_council_memberships_activities',
    'lhs_module' => 'Bhea_Council_Memberships',
    'lhs_table' => 'bhea_council_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Council_Memberships',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_council_memberships_team_count_relationship' => 
  array (
    'name' => 'bhea_council_memberships_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Memberships',
    'rhs_table' => 'bhea_council_memberships',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_memberships_teams' => 
  array (
    'name' => 'bhea_council_memberships_teams',
    'lhs_module' => 'Bhea_Council_Memberships',
    'lhs_table' => 'bhea_council_memberships',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_council_memberships_team' => 
  array (
    'name' => 'bhea_council_memberships_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Memberships',
    'rhs_table' => 'bhea_council_memberships',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_memberships_assigned_user' => 
  array (
    'name' => 'bhea_council_memberships_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Memberships',
    'rhs_table' => 'bhea_council_memberships',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_members_modified_user' => 
  array (
    'name' => 'bhea_council_members_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Members',
    'rhs_table' => 'bhea_council_members',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_members_created_by' => 
  array (
    'name' => 'bhea_council_members_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Members',
    'rhs_table' => 'bhea_council_members',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_members_activities' => 
  array (
    'name' => 'bhea_council_members_activities',
    'lhs_module' => 'Bhea_Council_Members',
    'lhs_table' => 'bhea_council_members',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Council_Members',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_council_members_team_count_relationship' => 
  array (
    'name' => 'bhea_council_members_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Members',
    'rhs_table' => 'bhea_council_members',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_members_teams' => 
  array (
    'name' => 'bhea_council_members_teams',
    'lhs_module' => 'Bhea_Council_Members',
    'lhs_table' => 'bhea_council_members',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_council_members_team' => 
  array (
    'name' => 'bhea_council_members_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Members',
    'rhs_table' => 'bhea_council_members',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_members_assigned_user' => 
  array (
    'name' => 'bhea_council_members_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Members',
    'rhs_table' => 'bhea_council_members',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_council_members_email_addresses' => 
  array (
    'name' => 'bhea_council_members_email_addresses',
    'lhs_module' => 'Bhea_Council_Members',
    'lhs_table' => 'bhea_council_members',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bhea_Council_Members',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'bhea_council_members_email_addresses_primary' => 
  array (
    'name' => 'bhea_council_members_email_addresses_primary',
    'lhs_module' => 'Bhea_Council_Members',
    'lhs_table' => 'bhea_council_members',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'bhea_councils_modified_user' => 
  array (
    'name' => 'bhea_councils_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_councils_created_by' => 
  array (
    'name' => 'bhea_councils_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_councils_activities' => 
  array (
    'name' => 'bhea_councils_activities',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Councils',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_councils_team_count_relationship' => 
  array (
    'name' => 'bhea_councils_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_councils_teams' => 
  array (
    'name' => 'bhea_councils_teams',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_councils_team' => 
  array (
    'name' => 'bhea_councils_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_councils_assigned_user' => 
  array (
    'name' => 'bhea_councils_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_member_levels_modified_user' => 
  array (
    'name' => 'bhea_member_levels_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_member_levels',
    'rhs_table' => 'bhea_member_levels',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_member_levels_created_by' => 
  array (
    'name' => 'bhea_member_levels_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_member_levels',
    'rhs_table' => 'bhea_member_levels',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_member_levels_activities' => 
  array (
    'name' => 'bhea_member_levels_activities',
    'lhs_module' => 'Bhea_member_levels',
    'lhs_table' => 'bhea_member_levels',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_member_levels',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_member_levels_team_count_relationship' => 
  array (
    'name' => 'bhea_member_levels_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_member_levels',
    'rhs_table' => 'bhea_member_levels',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_member_levels_teams' => 
  array (
    'name' => 'bhea_member_levels_teams',
    'lhs_module' => 'Bhea_member_levels',
    'lhs_table' => 'bhea_member_levels',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_member_levels_team' => 
  array (
    'name' => 'bhea_member_levels_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_member_levels',
    'rhs_table' => 'bhea_member_levels',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_member_levels_assigned_user' => 
  array (
    'name' => 'bhea_member_levels_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_member_levels',
    'rhs_table' => 'bhea_member_levels',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_memberships_modified_user' => 
  array (
    'name' => 'bhea_memberships_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_memberships_created_by' => 
  array (
    'name' => 'bhea_memberships_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_memberships_activities' => 
  array (
    'name' => 'bhea_memberships_activities',
    'lhs_module' => 'Bhea_Memberships',
    'lhs_table' => 'bhea_memberships',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Memberships',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_memberships_team_count_relationship' => 
  array (
    'name' => 'bhea_memberships_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_memberships_teams' => 
  array (
    'name' => 'bhea_memberships_teams',
    'lhs_module' => 'Bhea_Memberships',
    'lhs_table' => 'bhea_memberships',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_memberships_team' => 
  array (
    'name' => 'bhea_memberships_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_memberships_assigned_user' => 
  array (
    'name' => 'bhea_memberships_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Memberships',
    'rhs_table' => 'bhea_memberships',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_finance_performance_modified_user' => 
  array (
    'name' => 'bhea_finance_performance_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_finance_performance',
    'rhs_table' => 'bhea_finance_performance',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_finance_performance_created_by' => 
  array (
    'name' => 'bhea_finance_performance_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_finance_performance',
    'rhs_table' => 'bhea_finance_performance',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_finance_performance_activities' => 
  array (
    'name' => 'bhea_finance_performance_activities',
    'lhs_module' => 'Bhea_finance_performance',
    'lhs_table' => 'bhea_finance_performance',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_finance_performance',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_finance_performance_team_count_relationship' => 
  array (
    'name' => 'bhea_finance_performance_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_finance_performance',
    'rhs_table' => 'bhea_finance_performance',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_finance_performance_teams' => 
  array (
    'name' => 'bhea_finance_performance_teams',
    'lhs_module' => 'Bhea_finance_performance',
    'lhs_table' => 'bhea_finance_performance',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_finance_performance_team' => 
  array (
    'name' => 'bhea_finance_performance_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_finance_performance',
    'rhs_table' => 'bhea_finance_performance',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_finance_performance_assigned_user' => 
  array (
    'name' => 'bhea_finance_performance_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_finance_performance',
    'rhs_table' => 'bhea_finance_performance',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsorship_types_modified_user' => 
  array (
    'name' => 'bhea_sponsorship_types_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'bhea_Sponsorship_Types',
    'rhs_table' => 'bhea_sponsorship_types',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsorship_types_created_by' => 
  array (
    'name' => 'bhea_sponsorship_types_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'bhea_Sponsorship_Types',
    'rhs_table' => 'bhea_sponsorship_types',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsorship_types_activities' => 
  array (
    'name' => 'bhea_sponsorship_types_activities',
    'lhs_module' => 'bhea_Sponsorship_Types',
    'lhs_table' => 'bhea_sponsorship_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'bhea_Sponsorship_Types',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
  ),
  'bhea_sponsorship_types_team_count_relationship' => 
  array (
    'name' => 'bhea_sponsorship_types_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'bhea_Sponsorship_Types',
    'rhs_table' => 'bhea_sponsorship_types',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsorship_types_teams' => 
  array (
    'name' => 'bhea_sponsorship_types_teams',
    'lhs_module' => 'bhea_Sponsorship_Types',
    'lhs_table' => 'bhea_sponsorship_types',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bhea_sponsorship_types_team' => 
  array (
    'name' => 'bhea_sponsorship_types_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'bhea_Sponsorship_Types',
    'rhs_table' => 'bhea_sponsorship_types',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bhea_sponsorship_types_assigned_user' => 
  array (
    'name' => 'bhea_sponsorship_types_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'bhea_Sponsorship_Types',
    'rhs_table' => 'bhea_sponsorship_types',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
);