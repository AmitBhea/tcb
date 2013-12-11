<?php
// created: 2013-12-05 10:28:09
$viewdefs = array (
  'Contacts' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => 'report_to_name',
      'required' => true,
      'moduleName' => 'Contacts',
      'module' => 'Contacts',
      'default_action' => 'create',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'LNK_NEW_CONTACT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'first_name',
              'customCode' => '{html_options name="Contactssalutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="Contactsfirst_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
            ),
            1 => 'title',
          ),
          1 => 
          array (
            0 => 'last_name',
            1 => 'department',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'label' => 'LBL_PRIMARY_ADDRESS',
            ),
            1 => 'phone_work',
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_state',
              'label' => 'LBL_STATE',
            ),
            1 => 'phone_mobile',
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_postalcode',
              'label' => 'LBL_POSTAL_CODE',
            ),
            1 => 'phone_other',
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_country',
              'label' => 'LBL_COUNTRY',
            ),
            1 => 'phone_fax',
          ),
          6 => 
          array (
            0 => 'email1',
            1 => 'lead_source',
          ),
          7 => 
          array (
            0 => 'description',
          ),
        ),
      ),
    ),
  ),
  'Accounts' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => 'account_name',
      'required' => true,
      'moduleName' => 'Companies',
      'module' => 'Accounts',
      'default_action' => 'create',
      'relationship' => 'accounts_contacts',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'LNK_NEW_ACCOUNT' => 
        array (
          0 => 
          array (
            0 => 'name',
            1 => 
            array (
              'name' => 'classification_c',
              'studio' => 'visible',
              'label' => 'LBL_CLASSIFICATION',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'account_type',
              'comment' => 'The Company is of this type',
              'label' => 'LBL_TYPE',
            ),
            1 => 
            array (
              'name' => 'company_id_c',
              'label' => 'LBL_COMPANY_ID',
            ),
          ),
          2 => 
          array (
            0 => 'phone_office',
            1 => 
            array (
              'name' => 'territory_id_c',
              'label' => 'LBL_TERRITORY_ID',
            ),
          ),
          3 => 
          array (
            0 => 'website',
            1 => 
            array (
              'name' => 'employees',
              'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
              'label' => 'LBL_EMPLOYEES',
            ),
          ),
          4 => 
          array (
            0 => 'description',
          ),
        ),
      ),
    ),
  ),
  'Opportunities' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => false,
      'moduleName' => 'Opportunities',
      'module' => 'Opportunities',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'LNK_NEW_OPPORTUNITY' => 
        array (
          0 => 
          array (
            0 => 'name',
            1 => 'currency_id',
          ),
          1 => 
          array (
            0 => 'sales_stage',
            1 => 'amount',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'opportunity_type',
              'comment' => 'Type of opportunity (ex: Existing, New)',
              'label' => 'LBL_TYPE',
            ),
            1 => 
            array (
              'name' => 'subtype_c',
              'studio' => 'visible',
              'label' => 'LBL_SUBTYPE',
            ),
          ),
          3 => 
          array (
            0 => 'date_closed',
            1 => 
            array (
              'name' => 'lead_source',
              'comment' => 'Source of the opportunity',
              'label' => 'LBL_LEAD_SOURCE',
            ),
          ),
          4 => 
          array (
            0 => 'description',
          ),
        ),
      ),
    ),
  ),
  'Notes' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => false,
      'moduleName' => 'Notes',
      'module' => 'Notes',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'LNK_NEW_NOTE' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'displayParams' => 
              array (
                'size' => 90,
              ),
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'displayParams' => 
              array (
                'rows' => 10,
                'cols' => 90,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'Calls' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => false,
      'moduleName' => 'Calls',
      'module' => 'Calls',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
            5 => '<input type="hidden" name="Callsstatus" value="{sugar_translate label=\'call_status_default\'}">',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'LNK_NEW_CALL' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'displayParams' => 
              array (
                'size' => 90,
              ),
            ),
          ),
          1 => 
          array (
            0 => 'date_start',
            1 => 
            array (
              'name' => 'duration_hours',
              'label' => 'LBL_DURATION',
              'customCode' => '{literal}
<script type="text/javascript">
    function isValidCallsDuration() { 
        form = document.getElementById(\'ConvertLead\');
        if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) {
            alert(\'{/literal}{sugar_translate label="NOTICE_DURATION_TIME" module="Calls"}{literal}\'); 
            return false;
        }
        return true; 
    }
</script>{/literal}
<input name="Callsduration_hours" tabindex="1" size="2" maxlength="2" type="text" value="{$fields.duration_hours.value}"/>
{php}$this->_tpl_vars["minutes_values"] = $this->_tpl_vars["bean"]->minutes_values;{/php}
{html_options name="Callsduration_minutes" options=$minutes_values selected=$fields.duration_minutes.value} &nbsp;
<span class="dateFormat">{sugar_translate label="LBL_HOURS_MINUTES" module="Calls"}',
              'displayParams' => 
              array (
                'required' => true,
              ),
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'displayParams' => 
              array (
                'rows' => 10,
                'cols' => 90,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'Meetings' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => false,
      'moduleName' => 'Meetings',
      'module' => 'Meetings',
      'relationship' => 'meetings_users',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
            5 => '<input type="hidden" name="Meetingsstatus" value="{sugar_translate label=\'meeting_status_default\'}">',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'LNK_NEW_MEETING' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'displayParams' => 
              array (
                'size' => 90,
              ),
            ),
          ),
          1 => 
          array (
            0 => 'date_start',
            1 => 
            array (
              'name' => 'duration_hours',
              'label' => 'LBL_DURATION',
              'customCode' => '{literal}
<script type="text/javascript">
    function isValidMeetingsDuration() { 
        form = document.getElementById(\'ConvertLead\');
        if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) {
            alert(\'{/literal}{sugar_translate label="NOTICE_DURATION_TIME" module="Calls"}{literal}\'); 
            return false;
        }
        return true; 
    }
</script>{/literal}
<input name="Meetingsduration_hours" tabindex="1" size="2" maxlength="2" type="text" value="{$fields.duration_hours.value}" />
{php}$this->_tpl_vars["minutes_values"] = $this->_tpl_vars["bean"]->minutes_values;{/php}
{html_options name="Meetingsduration_minutes" options=$minutes_values selected=$fields.duration_minutes.value} &nbsp;
<span class="dateFormat">{sugar_translate label="LBL_HOURS_MINUTES" module="Calls"}',
              'displayParams' => 
              array (
                'required' => true,
              ),
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'displayParams' => 
              array (
                'rows' => 10,
                'cols' => 90,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'Tasks' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => false,
      'moduleName' => 'Tasks',
      'module' => 'Tasks',
      'templateMeta' => 
      array (
        'form' => 
        array (
          'hidden' => 
          array (
            0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
            1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
            2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
            3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
            4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'LNK_NEW_TASK' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'displayParams' => 
              array (
                'size' => 90,
              ),
            ),
          ),
          1 => 
          array (
            0 => 'status',
            1 => 'priority',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'displayParams' => 
              array (
                'rows' => 10,
                'cols' => 90,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'Bhea_Contractors' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => false,
      'moduleName' => 'Contractors',
      'module' => 'Bhea_Contractors',
      'panels' => 
      array (
        'LNK_NEW_CONTRACTORS' => 
        array (
          0 => 
          array (
            0 => 'first_name',
            1 => 'assigned_user_name',
          ),
          1 => 
          array (
            0 => 'last_name',
            1 => 'team_name',
          ),
          2 => 
          array (
            0 => 'title',
            1 => 'phone_work',
          ),
          3 => 
          array (
            0 => 'department',
            1 => 'phone_mobile',
          ),
          4 => 
          array (
            0 => 'phone_fax',
            1 => '(filler)',
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
    ),
  ),
  'Bhea_Speakers' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => false,
      'moduleName' => 'Speakers',
      'module' => 'Bhea_Speakers',
      'panels' => 
      array (
        'LNK_NEW_SPEAKERS' => 
        array (
          0 => 
          array (
            0 => 'first_name',
            1 => 'assigned_user_name',
          ),
          1 => 
          array (
            0 => 'last_name',
            1 => 'team_name',
          ),
          2 => 
          array (
            0 => 'title',
            1 => 'phone_work',
          ),
          3 => 
          array (
            0 => 'department',
            1 => 'phone_mobile',
          ),
          4 => 
          array (
            0 => 'phone_fax',
            1 => '(filler)',
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
    ),
  ),
  'Bhea_Registrants' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => false,
      'moduleName' => 'Participants',
      'module' => 'Bhea_Registrants',
      'panels' => 
      array (
        'LNK_NEW_PARTICIPANT' => 
        array (
          0 => 
          array (
            0 => 'first_name',
            1 => 'assigned_user_name',
          ),
          1 => 
          array (
            0 => 'last_name',
            1 => 'team_name',
          ),
          2 => 
          array (
            0 => 'title',
            1 => 'phone_work',
          ),
          3 => 
          array (
            0 => 'department',
            1 => 'phone_mobile',
          ),
          4 => 
          array (
            0 => 'phone_fax',
            1 => '(filler)',
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
    ),
  ),
  'Bhea_Sponsor' => 
  array (
    'ConvertLead' => 
    array (
      'copyData' => true,
      'select' => false,
      'required' => true,
      'moduleName' => 'Sponsor',
      'module' => 'Bhea_Sponsor',
      'panels' => 
      array (
        'LNK_NEW_SPONSOR' => 
        array (
          0 => 
          array (
            0 => 'name',
            1 => 'assigned_user_name',
          ),
          1 => 
          array (
            0 => 'description',
            1 => 'team_name',
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
    ),
  ),
);