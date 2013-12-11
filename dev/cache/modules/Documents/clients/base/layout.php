<?php
$clientCache['Documents']['base']['layout'] = array (
  'tabbed-layout' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'view' => 'activitystream',
          'label' => 'Activity Stream',
        ),
        1 => 
        array (
          'layout' => 'list-cluster',
          'label' => 'Document Revisions',
          'context' => 
          array (
            'link' => 'revisions',
          ),
        ),
        2 => 
        array (
          'layout' => 'list-cluster',
          'label' => 'Contracts',
          'context' => 
          array (
            'link' => 'contracts',
          ),
        ),
        3 => 
        array (
          'layout' => 'list-cluster',
          'label' => 'Accounts',
          'context' => 
          array (
            'link' => 'accounts',
          ),
        ),
        4 => 
        array (
          'layout' => 'list-cluster',
          'label' => 'Contacts',
          'context' => 
          array (
            'link' => 'contacts',
          ),
        ),
        5 => 
        array (
          'layout' => 'list-cluster',
          'label' => 'Opportunities',
          'context' => 
          array (
            'link' => 'opportunities',
          ),
        ),
        6 => 
        array (
          'layout' => 'list-cluster',
          'label' => 'Cases',
          'context' => 
          array (
            'link' => 'cases',
          ),
        ),
        7 => 
        array (
          'layout' => 'list-cluster',
          'label' => 'Bugs',
          'context' => 
          array (
            'link' => 'bugs',
          ),
        ),
        8 => 
        array (
          'layout' => 'list-cluster',
          'label' => 'Quotes',
          'context' => 
          array (
            'link' => 'quotes',
          ),
        ),
        9 => 
        array (
          'layout' => 'list-cluster',
          'label' => 'Products',
          'context' => 
          array (
            'link' => 'products',
          ),
        ),
      ),
      'type' => 'simple',
      'span' => 12,
    ),
  ),
  'records' => 
  array (
    'meta' => 
    array (
      'name' => 'bwc',
      'type' => 'bwc',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'bwc',
        ),
      ),
    ),
  ),
  'detail' => 
  array (
    'meta' => 
    array (
      'type' => 'detail',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'subnavdetail',
        ),
        1 => 
        array (
          'view' => 'detail',
        ),
      ),
    ),
  ),
  'edit' => 
  array (
    'meta' => 
    array (
      'type' => 'edit',
      'components' => 
      array (
        0 => 
        array (
          'view' => 'subnavedit',
        ),
        1 => 
        array (
          'view' => 'edit',
        ),
      ),
    ),
  ),
  '_hash' => 'ef773e51d32ec7a9691375981a220bde',
);

