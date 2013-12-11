<?php
 // created: 2013-12-03 17:55:29
$dictionary['Bhea_Events']['fields']['attendee_fee_target']['importable']='false';
$dictionary['Bhea_Events']['fields']['attendee_fee_target']['calculated']='true';
$dictionary['Bhea_Events']['fields']['attendee_fee_target']['formula']='multiply($conference_fees,$expected_no_of_attendees)';
$dictionary['Bhea_Events']['fields']['attendee_fee_target']['enforced']=true;

 ?>