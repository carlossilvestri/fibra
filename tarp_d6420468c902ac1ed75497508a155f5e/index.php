<?php
$GLOBALS['_ta_rp_key'] = '05496a43fad65fdec8776248055898e2';
$GLOBALS['_ta_reverse_proxy_id'] = 'a6h21o';

require 'bootloader_d6420468c902ac1ed75497508a155f5e.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>