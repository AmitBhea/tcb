<?php
 // created: 2013-12-03 20:03:44
$dictionary['Account']['fields']['quit_reason_c']['labelValue']='Quit Reason';
$dictionary['Account']['fields']['quit_reason_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['quit_reason_c']['enforced']='';
$dictionary['Account']['fields']['quit_reason_c']['dependency']='not(equal($request_quit_c,""))';

 ?>