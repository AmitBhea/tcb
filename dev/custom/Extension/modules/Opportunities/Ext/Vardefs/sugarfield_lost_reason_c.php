<?php
 // created: 2013-12-03 16:51:48
$dictionary['Opportunity']['fields']['lost_reason_c']['labelValue']='Lost Reason';
$dictionary['Opportunity']['fields']['lost_reason_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Opportunity']['fields']['lost_reason_c']['enforced']='';
$dictionary['Opportunity']['fields']['lost_reason_c']['dependency']='equal($sales_stage,"Closed Lost")';

 ?>