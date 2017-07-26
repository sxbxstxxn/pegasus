<?php
session_start();

require('classes/page.class.php');
$pegasus = new PegasusPage;
$pegasus->assign('title','My profile');

if (isset($_SESSION['user'])) {
	$pegasus->display('myprofile.tpl');
}
else {
	$pegasus->display('register.tpl');
}
?>
