<?php
session_start();

require('classes/page.class.php');
$pegasus = new PegasusPage;
$pegasus->assign('title','My profile');

if (isset($_SESSION['loggedUser'])) {
	$pegasus->display('myprofile.tpl');
}
else {
	$pegasus->display('register.tpl');
}
?>
