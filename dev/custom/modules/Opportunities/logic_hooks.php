<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1,'Opportunities Logic Hook','custom/modules/Opportunities/logic_hooks_classes.php','logic_hooks_classes','after_save_method');

?>
