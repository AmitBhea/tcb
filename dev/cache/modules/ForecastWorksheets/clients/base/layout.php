<?php
$clientCache['ForecastWorksheets']['base']['layout'] = array (
  'list' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'view' => 'filter',
        ),
        1 => 
        array (
          'view' => 'recordlist',
          'primary' => true,
        ),
      ),
      'type' => 'simple',
      'name' => 'list',
      'span' => 12,
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
  '_hash' => '4b2869884f59cc032e16832f9920e748',
);

