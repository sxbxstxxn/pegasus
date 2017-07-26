<?php
session_start();

require('classes/page.class.php');
require('classes/user.class.php');
$pegasus = new PegasusPage;

$profileId = $_GET['id'];

$pegasus->assign('title','Profile');

$user = new PegasusUser;
$profile = $user->getUserById($profileId);

if ($profile == false) {
  $profile['error'] = 'User konnte nicht gefunden werden.';
}

$pegasus->assign('profile',$profile);

if (isset($_SESSION['user'])) {
	$pegasus->display('profile.tpl');
}
else {
	$pegasus->display('register.tpl');
}
?>
