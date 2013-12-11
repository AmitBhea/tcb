<?php
 // created: 2013-12-04 15:02:10
$dictionary['Account']['fields']['prod_serv_c']['labelValue']='Products &amp; Services Participation';
$dictionary['Account']['fields']['prod_serv_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Account']['fields']['prod_serv_c']['enforced']='';
$dictionary['Account']['fields']['prod_serv_c']['dependency']='or(equal($account_type,"member"),equal($account_type,"past_member"))';

 ?>