<?php
$clientCache['Notes']['base']['view'] = array (
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
              'label' => 'LBL_LIST_SUBJECT',
              'enabled' => true,
              'default' => true,
              'name' => 'name',
              'link' => true,
            ),
            1 => 
            array (
              'target_record_key' => 'contact_id',
              'target_module' => 'Contacts',
              'label' => 'LBL_LIST_CONTACT_NAME',
              'enabled' => true,
              'default' => true,
              'name' => 'contact_name',
              'sortable' => false,
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_DATE_MODIFIED',
              'enabled' => true,
              'default' => true,
              'name' => 'date_modified',
            ),
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
            1 => 'name',
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
            0 => 'contact_name',
            1 => 'parent_name',
            2 => 
            array (
              'name' => 'description',
              'rows' => 5,
            ),
            3 => 'team_name',
            4 => 
            array (
              'name' => 'filename',
              'related_fields' => 
              array (
                0 => 'file_mime_type',
              ),
            ),
            5 => 'assigned_user_name',
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'hide' => true,
          'columns' => 2,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'portal_flag',
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
              'width' => '40%',
              'label' => 'LBL_LIST_SUBJECT',
              'link' => true,
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'contact_name',
              'width' => '20%',
              'label' => 'LBL_LIST_CONTACT',
              'link' => true,
              'id' => 'CONTACT_ID',
              'module' => 'Contacts',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
              'ACLTag' => 'CONTACT',
              'related_fields' => 
              array (
                0 => 'contact_id',
              ),
            ),
            2 => 
            array (
              'name' => 'parent_name',
              'width' => '20%',
              'label' => 'LBL_LIST_RELATED_TO',
              'dynamic_module' => 'PARENT_TYPE',
              'id' => 'PARENT_ID',
              'link' => true,
              'enabled' => true,
              'default' => true,
              'sortable' => false,
              'ACLTag' => 'PARENT',
              'related_fields' => 
              array (
                0 => 'parent_id',
                1 => 'parent_type',
              ),
            ),
            3 => 
            array (
              'name' => 'filename',
              'width' => '20%',
              'label' => 'LBL_LIST_FILENAME',
              'enabled' => true,
              'default' => true,
              'type' => 'file',
              'related_fields' => 
              array (
                0 => 'file_url',
                1 => 'id',
                2 => 'file_mime_type',
              ),
              'displayParams' => 
              array (
                'module' => 'Notes',
              ),
            ),
            4 => 
            array (
              'name' => 'created_by_name',
              'type' => 'relate',
              'label' => 'LBL_CREATED_BY',
              'width' => '10%',
              'enabled' => true,
              'default' => true,
              'sortable' => false,
              'related_fields' => 
              array (
                0 => 'created_by',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'massupdate' => 
  array (
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
    ),
  ),
  '_hash' => 'bbccdbb4cbf178ab8012ce26aa7b2be3',
);

