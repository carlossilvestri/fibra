<?php
$real_user = false;
if (isset($_POST['submit'])) {
	$secret = "6LeNQOskAAAAAPswPFL28etuBT1NA6tiAQOjFkGr";
	$response = $_POST['g-recaptcha-response'];
	$remoteip = $_SERVER['REMOTE_ADDR'];
	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
	$data = file_get_contents($url);
	$row = json_decode($data, true);


	if ($row['success'] == "true") {
        $real_user = true;
	} else {
        $real_user = false;
	}
}
?>