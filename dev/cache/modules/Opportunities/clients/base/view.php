<?php
$clientCache['Opportunities']['base']['view'] = array (
  'subpanel-for-bhea_events' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'related_fields' => 
              array (
                0 => 'sales_status',
                1 => 'closed_revenue_line_items',
              ),
            ),
            1 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'sales_stage',
              'label' => 'LBL_LIST_SALES_STAGE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'date_closed',
              'label' => 'LBL_LIST_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'best_case',
              'label' => 'LBL_BEST',
              'enabled' => true,
              'currency_format' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'worst_case',
              'label' => 'LBL_WORST',
              'enabled' => true,
              'currency_format' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            8 => 
            array (
              'name' => 'bhea_council_memberships_opportunities_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCC535ERSHIPS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'final_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'subtract($membership_fee_c,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlyfinal_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'lost_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'lost_reason_c',
                'value' => 'equal($sales_stage,"Closed Lost")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'subtype_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunity_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'subtype_c',
                'keys' => 'cond(equal(indexOf($opportunity_type, getDD("opportunity_type_list")), -1), enum(""), valueAt(indexOf($opportunity_type,getDD("opportunity_type_list")),enum(enum(""),enum("new_mem","renewal","mem_upgrade"),enum("council","conference","seminar","sponsorship","research_working","experiential_learning"),enum(""))))',
                'labels' => '"subtype_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'practice_area_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtype_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'practice_area_c',
                'keys' => 'cond(equal(indexOf($subtype_c, getDD("subtype_list")), -1), enum(""), valueAt(indexOf($subtype_c,getDD("subtype_list")),enum(enum(""),enum(""),enum(""),enum(""),enum("human_capital","corporate_leadership","economy_value"),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"practice_area_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'record' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'width' => 42,
              'height' => 42,
              'dismiss_label' => true,
              'readonly' => true,
            ),
            1 => 
            array (
              'name' => 'name',
            ),
            2 => 
            array (
              'name' => 'favorite',
              'label' => 'LBL_FAVORITE',
              'type' => 'favorite',
              'dismiss_label' => true,
            ),
            3 => 
            array (
              'name' => 'follow',
              'label' => 'LBL_FOLLOW',
              'type' => 'follow',
              'readonly' => true,
              'dismiss_label' => true,
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'columns' => 2,
          'labels' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'account_name',
              'related_fields' => 
              array (
                0 => 'account_id',
              ),
            ),
            1 => 
            array (
              'name' => 'bhea_member_levels_opportunities_1_name',
              'label' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
            ),
            2 => 'opportunity_type',
            3 => 
            array (
              'name' => 'subtype_c',
              'studio' => 'visible',
              'label' => 'LBL_SUBTYPE',
            ),
            4 => 
            array (
              'name' => 'practice_area_c',
              'studio' => 'visible',
              'label' => 'LBL_PRACTICE_AREA',
            ),
            5 => 
            array (
              'name' => 'amount_usdollar',
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
              'label' => 'LBL_AMOUNT_USDOLLAR',
            ),
            6 => 
            array (
              'name' => 'budget_amt_c',
              'label' => 'LBL_BUDGET_AMT',
            ),
            7 => 
            array (
              'name' => 'membership_fee_c',
              'label' => 'LBL_MEMBERSHIP_FEE',
            ),
            8 => 
            array (
              'name' => 'discount_c',
              'label' => 'LBL_DISCOUNT',
            ),
            9 => 
            array (
              'name' => 'final_membership_fee_c',
              'label' => 'LBL_FINAL_MEMBERSHIP_FEE',
            ),
            10 => 
            array (
              'name' => 'sales_stage',
              'required' => true,
            ),
            11 => 'probability',
            12 => 
            array (
              'name' => 'date_closed',
              'related_fields' => 
              array (
                0 => 'date_closed_timestamp',
              ),
            ),
            13 => 
            array (
              'name' => 'actual_close_date_c',
              'label' => 'LBL_ACTUAL_CLOSE_DATE',
            ),
            14 => 'next_step',
            15 => 
            array (
              'name' => 'lost_reason_c',
              'studio' => 'visible',
              'label' => 'LBL_LOST_REASON',
            ),
            16 => 
            array (
              'name' => 'bhea_council_memberships_opportunities_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
            ),
            17 => 
            array (
              'name' => 'bhea_events_opportunities_1_name',
              'label' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_BHEA_EVENTS_TITLE',
            ),
            18 => 
            array (
              'name' => 'description',
              'span' => 6,
            ),
            19 => 
            array (
              'span' => 6,
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'hide' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'columns' => 2,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'best_case',
              'type' => 'currency',
              'label' => 'LBL_BEST',
              'related_fields' => 
              array (
                0 => 'best_case',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            1 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'required' => true,
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
            ),
            2 => 
            array (
              'name' => 'worst_case',
              'type' => 'currency',
              'label' => 'LBL_WORST',
              'related_fields' => 
              array (
                0 => 'worst_case',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'span' => 12,
            ),
            3 => 'campaign_name',
            4 => 'lead_source',
            5 => 'assigned_user_name',
            6 => 'team_name',
            7 => 
            array (
              'name' => 'date_entered_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_ENTERED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_entered',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'created_by_name',
                ),
              ),
            ),
            8 => 
            array (
              'name' => 'date_modified_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_MODIFIED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_modified',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'modified_by_name',
                ),
              ),
            ),
          ),
        ),
      ),
      'templateMeta' => 
      array (
        'useTabs' => false,
        'tabDefs' => 
        array (
          'LBL_RECORD_BODY' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_RECORD_SHOWMORE' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'final_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'subtract($membership_fee_c,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlyfinal_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'lost_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'lost_reason_c',
                'value' => 'equal($sales_stage,"Closed Lost")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'subtype_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunity_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'subtype_c',
                'keys' => 'cond(equal(indexOf($opportunity_type, getDD("opportunity_type_list")), -1), enum(""), valueAt(indexOf($opportunity_type,getDD("opportunity_type_list")),enum(enum(""),enum("new_mem","renewal","mem_upgrade"),enum("council","conference","seminar","sponsorship","research_working","experiential_learning"),enum(""))))',
                'labels' => '"subtype_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'practice_area_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtype_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'practice_area_c',
                'keys' => 'cond(equal(indexOf($subtype_c, getDD("subtype_list")), -1), enum(""), valueAt(indexOf($subtype_c,getDD("subtype_list")),enum(enum(""),enum(""),enum(""),enum(""),enum("human_capital","corporate_leadership","economy_value"),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"practice_area_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
     */
({extendsFrom:\'RecordView\',cancelClicked:function(){var changedAttributes=this.model.changedAttributes(this.model.getSyncedAttributes());this.model.set(changedAttributes);app.view.invokeParent(this,{type:\'view\',name:\'record\',method:\'cancelClicked\'});},})',
    ),
  ),
  'subpanel-for-bhea_councils' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'related_fields' => 
              array (
                0 => 'sales_status',
                1 => 'closed_revenue_line_items',
              ),
            ),
            1 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'sales_stage',
              'label' => 'LBL_LIST_SALES_STAGE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'probability',
              'label' => 'LBL_PROBABILITY',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'lead_source',
              'label' => 'LBL_LEAD_SOURCE',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'bhea_councils_opportunities_1_name',
              'label' => 'LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_BHEA_COUNCILS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCILS_OPPORTUNITIES_1BHEA_COUNCILS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'bhea_council_memberships_opportunities_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCC535ERSHIPS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'date_closed',
              'label' => 'LBL_LIST_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            10 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'readonly' => true,
              'default' => true,
            ),
            11 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'readonly' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'final_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'subtract($membership_fee_c,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlyfinal_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'lost_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'lost_reason_c',
                'value' => 'equal($sales_stage,"Closed Lost")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'subtype_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunity_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'subtype_c',
                'keys' => 'cond(equal(indexOf($opportunity_type, getDD("opportunity_type_list")), -1), enum(""), valueAt(indexOf($opportunity_type,getDD("opportunity_type_list")),enum(enum(""),enum("new_mem","renewal","mem_upgrade"),enum("council","conference","seminar","sponsorship","research_working","experiential_learning"),enum(""))))',
                'labels' => '"subtype_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'practice_area_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtype_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'practice_area_c',
                'keys' => 'cond(equal(indexOf($subtype_c, getDD("subtype_list")), -1), enum(""), valueAt(indexOf($subtype_c,getDD("subtype_list")),enum(enum(""),enum(""),enum(""),enum(""),enum("human_capital","corporate_leadership","economy_value"),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"practice_area_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-accounts' => 
  array (
    'meta' => 
    array (
      'type' => 'subpanel-list',
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'sales_stage',
              'label' => 'LBL_LIST_SALES_STAGE',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'date_closed',
              'label' => 'LBL_LIST_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'actual_close_date_c',
              'label' => 'LBL_ACTUAL_CLOSE_DATE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'bhea_council_memberships_opportunities_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCC535ERSHIPS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'amount_usdollar',
              'label' => 'LBL_AMOUNT_USDOLLAR',
              'enabled' => true,
              'readonly' => true,
              'currency_format' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'readonly' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'enabled' => true,
              'readonly' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'final_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'subtract($membership_fee_c,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlyfinal_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'lost_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'lost_reason_c',
                'value' => 'equal($sales_stage,"Closed Lost")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'subtype_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunity_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'subtype_c',
                'keys' => 'cond(equal(indexOf($opportunity_type, getDD("opportunity_type_list")), -1), enum(""), valueAt(indexOf($opportunity_type,getDD("opportunity_type_list")),enum(enum(""),enum("new_mem","renewal","mem_upgrade"),enum("council","conference","seminar","sponsorship","research_working","experiential_learning"),enum(""))))',
                'labels' => '"subtype_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'practice_area_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtype_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'practice_area_c',
                'keys' => 'cond(equal(indexOf($subtype_c, getDD("subtype_list")), -1), enum(""), valueAt(indexOf($subtype_c,getDD("subtype_list")),enum(enum(""),enum(""),enum(""),enum(""),enum("human_capital","corporate_leadership","economy_value"),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"practice_area_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'subpanel-for-contacts' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'related_fields' => 
              array (
                0 => 'sales_status',
                1 => 'closed_revenue_line_items',
              ),
            ),
            1 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'bhea_council_memberships_opportunities_1_name',
              'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_OPPORTUNITIES_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_COUNCC535ERSHIPS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'bhea_events_opportunities_1_name',
              'label' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_BHEA_EVENTS_TITLE',
              'enabled' => true,
              'id' => 'BHEA_EVENTS_OPPORTUNITIES_1BHEA_EVENTS_IDA',
              'link' => true,
              'sortable' => false,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'lead_source',
              'label' => 'LBL_LEAD_SOURCE',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'probability',
              'label' => 'LBL_PROBABILITY',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'sales_stage',
              'label' => 'LBL_LIST_SALES_STAGE',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'date_closed',
              'label' => 'LBL_LIST_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'type' => 'subpanel-list',
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'final_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'subtract($membership_fee_c,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlyfinal_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'lost_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'lost_reason_c',
                'value' => 'equal($sales_stage,"Closed Lost")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'subtype_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunity_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'subtype_c',
                'keys' => 'cond(equal(indexOf($opportunity_type, getDD("opportunity_type_list")), -1), enum(""), valueAt(indexOf($opportunity_type,getDD("opportunity_type_list")),enum(enum(""),enum("new_mem","renewal","mem_upgrade"),enum("council","conference","seminar","sponsorship","research_working","experiential_learning"),enum(""))))',
                'labels' => '"subtype_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'practice_area_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtype_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'practice_area_c',
                'keys' => 'cond(equal(indexOf($subtype_c, getDD("subtype_list")), -1), enum(""), valueAt(indexOf($subtype_c,getDD("subtype_list")),enum(enum(""),enum(""),enum(""),enum(""),enum("human_capital","corporate_leadership","economy_value"),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"practice_area_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'subpanel-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
              'link' => true,
              'related_fields' => 
              array (
                0 => 'sales_status',
                1 => 'closed_revenue_line_items',
              ),
            ),
            1 => 
            array (
              'target_record_key' => 'account_id',
              'target_module' => 'Accounts',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'account_name',
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'sales_stage',
              'label' => 'LBL_LIST_SALES_STAGE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'date_closed',
              'label' => 'LBL_LIST_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'width' => 10,
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'final_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'subtract($membership_fee_c,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlyfinal_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'lost_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'lost_reason_c',
                'value' => 'equal($sales_stage,"Closed Lost")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'subtype_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunity_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'subtype_c',
                'keys' => 'cond(equal(indexOf($opportunity_type, getDD("opportunity_type_list")), -1), enum(""), valueAt(indexOf($opportunity_type,getDD("opportunity_type_list")),enum(enum(""),enum("new_mem","renewal","mem_upgrade"),enum("council","conference","seminar","sponsorship","research_working","experiential_learning"),enum(""))))',
                'labels' => '"subtype_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'practice_area_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtype_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'practice_area_c',
                'keys' => 'cond(equal(indexOf($subtype_c, getDD("subtype_list")), -1), enum(""), valueAt(indexOf($subtype_c,getDD("subtype_list")),enum(enum(""),enum(""),enum(""),enum(""),enum("human_capital","corporate_leadership","economy_value"),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"practice_area_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'name',
              'width' => 30,
              'link' => true,
              'label' => 'LBL_LIST_OPPORTUNITY_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'account_name',
              'width' => 20,
              'link' => true,
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            2 => 
            array (
              'name' => 'sales_stage',
              'width' => 10,
              'label' => 'LBL_LIST_SALES_STAGE',
              'enabled' => true,
              'default' => true,
            ),
            3 => 
            array (
              'name' => 'amount',
              'type' => 'currency',
              'label' => 'LBL_LIKELY',
              'related_fields' => 
              array (
                0 => 'amount',
                1 => 'currency_id',
                2 => 'base_rate',
              ),
              'currency_field' => 'currency_id',
              'base_rate_field' => 'base_rate',
              'width' => 10,
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'opportunity_type',
              'width' => 15,
              'label' => 'LBL_TYPE',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'lead_source',
              'width' => 15,
              'label' => 'LBL_LEAD_SOURCE',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'next_step',
              'width' => 10,
              'label' => 'LBL_NEXT_STEP',
              'enabled' => true,
              'default' => true,
            ),
            7 => 
            array (
              'name' => 'probability',
              'width' => 10,
              'label' => 'LBL_PROBABILITY',
              'enabled' => true,
              'default' => true,
            ),
            8 => 
            array (
              'name' => 'date_closed',
              'width' => 10,
              'label' => 'LBL_LIST_DATE_CLOSED',
              'enabled' => true,
              'default' => true,
            ),
            9 => 
            array (
              'name' => 'created_by_name',
              'width' => 10,
              'label' => 'LBL_CREATED',
              'sortable' => false,
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
            10 => 
            array (
              'name' => 'team_name',
              'type' => 'teamset',
              'width' => 5,
              'label' => 'LBL_LIST_TEAM',
              'enabled' => true,
              'default' => false,
              'sortable' => false,
            ),
            11 => 
            array (
              'name' => 'assigned_user_name',
              'width' => 5,
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'id' => 'ASSIGNED_USER_ID',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
            ),
            12 => 
            array (
              'name' => 'modified_by_name',
              'width' => 5,
              'label' => 'LBL_MODIFIED',
              'sortable' => false,
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
            13 => 
            array (
              'name' => 'date_entered',
              'width' => 10,
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'final_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'subtract($membership_fee_c,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlyfinal_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'lost_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'lost_reason_c',
                'value' => 'equal($sales_stage,"Closed Lost")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'subtype_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunity_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'subtype_c',
                'keys' => 'cond(equal(indexOf($opportunity_type, getDD("opportunity_type_list")), -1), enum(""), valueAt(indexOf($opportunity_type,getDD("opportunity_type_list")),enum(enum(""),enum("new_mem","renewal","mem_upgrade"),enum("council","conference","seminar","sponsorship","research_working","experiential_learning"),enum(""))))',
                'labels' => '"subtype_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'practice_area_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtype_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'practice_area_c',
                'keys' => 'cond(equal(indexOf($subtype_c, getDD("subtype_list")), -1), enum(""), valueAt(indexOf($subtype_c,getDD("subtype_list")),enum(enum(""),enum(""),enum(""),enum(""),enum("human_capital","corporate_leadership","economy_value"),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"practice_area_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'create-actions' => 
  array (
    'meta' => 
    array (
      'template' => 'record',
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
        ),
        1 => 
        array (
          'name' => 'restore_button',
          'type' => 'button',
          'label' => 'LBL_RESTORE',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'select',
        ),
        2 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'main_dropdown',
          'primary' => true,
          'switch_on_click' => true,
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_button',
              'label' => 'LBL_SAVE_BUTTON_LABEL',
            ),
            1 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_view_button',
              'label' => 'LBL_SAVE_AND_VIEW',
              'showOn' => 'create',
            ),
            2 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_create_button',
              'label' => 'LBL_SAVE_AND_CREATE_ANOTHER',
              'showOn' => 'create',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'final_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'subtract($membership_fee_c,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlyfinal_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'lost_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'lost_reason_c',
                'value' => 'equal($sales_stage,"Closed Lost")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'subtype_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunity_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'subtype_c',
                'keys' => 'cond(equal(indexOf($opportunity_type, getDD("opportunity_type_list")), -1), enum(""), valueAt(indexOf($opportunity_type,getDD("opportunity_type_list")),enum(enum(""),enum("new_mem","renewal","mem_upgrade"),enum("council","conference","seminar","sponsorship","research_working","experiential_learning"),enum(""))))',
                'labels' => '"subtype_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'practice_area_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtype_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'practice_area_c',
                'keys' => 'cond(equal(indexOf($subtype_c, getDD("subtype_list")), -1), enum(""), valueAt(indexOf($subtype_c,getDD("subtype_list")),enum(enum(""),enum(""),enum(""),enum(""),enum("human_capital","corporate_leadership","economy_value"),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"practice_area_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'massupdate' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
     */
({extendsFrom:"MassupdateView",initialize:function(options){this.plugins=_.clone(this.plugins)||[];this.plugins.push(\'DisableMassdelete\');app.view.invokeParent(this,{type:\'view\',name:\'massupdate\',method:\'initialize\',args:[options]});}})',
    ),
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'Update',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
        1 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-invisible cancel_button',
          'icon' => 'icon-remove',
          'primary' => false,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'date_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'timestamp($date_closed)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        1 => 
        array (
          'name' => 'probability',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'probability',
                'value' => 'getDropdownValue("sales_probability_dom",$sales_stage)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        2 => 
        array (
          'name' => 'final_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => false,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetValue',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'subtract($membership_fee_c,$discount_c)',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        3 => 
        array (
          'name' => 'readOnlydate_closed_timestamp',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'date_closed',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'date_closed_timestamp',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        4 => 
        array (
          'name' => 'readOnlyfinal_membership_fee_c',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'membership_fee_c',
            1 => 'discount_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'final_membership_fee_c',
                'value' => 'true',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        5 => 
        array (
          'name' => 'lost_reason_c_vis',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'sales_stage',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetVisibility',
              'params' => 
              array (
                'target' => 'lost_reason_c',
                'value' => 'equal($sales_stage,"Closed Lost")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        6 => 
        array (
          'name' => 'subtype_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'opportunity_type',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'subtype_c',
                'keys' => 'cond(equal(indexOf($opportunity_type, getDD("opportunity_type_list")), -1), enum(""), valueAt(indexOf($opportunity_type,getDD("opportunity_type_list")),enum(enum(""),enum("new_mem","renewal","mem_upgrade"),enum("council","conference","seminar","sponsorship","research_working","experiential_learning"),enum(""))))',
                'labels' => '"subtype_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
        7 => 
        array (
          'name' => 'practice_area_cDDD',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'subtype_c',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'SetOptions',
              'params' => 
              array (
                'target' => 'practice_area_c',
                'keys' => 'cond(equal(indexOf($subtype_c, getDD("subtype_list")), -1), enum(""), valueAt(indexOf($subtype_c,getDD("subtype_list")),enum(enum(""),enum(""),enum(""),enum(""),enum("human_capital","corporate_leadership","economy_value"),enum(""),enum(""),enum(""),enum(""),enum(""))))',
                'labels' => '"practice_area_list"',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => '0e2672c240b8d5701c11003d8468cffe',
);

