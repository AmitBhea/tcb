<?php
 // created: 2013-12-03 16:32:42
$dictionary['Opportunity']['fields']['subtype_c']['labelValue']='Sub Type';
$dictionary['Opportunity']['fields']['subtype_c']['dependency']='';
$dictionary['Opportunity']['fields']['subtype_c']['visibility_grid']=array (
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
);

 ?>