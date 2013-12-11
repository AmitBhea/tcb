<?php
 // created: 2013-12-04 16:11:56
$dictionary['Bhea_Council_Memberships']['fields']['description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Council_Memberships']['fields']['description']['dependency']='equal($status,"Renewal Lost")';

 ?>