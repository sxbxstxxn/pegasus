<?php
session_start();

require('classes/page.class.php');
require('classes/user.class.php');
$pegasus = new PegasusPage;
$pegasus->assign('title','Userlist');

//var_dump($_SESSION['user']);die;

$user = new PegasusUser;
$userlist = $user->getUserlist();

//remove loggedin User from userlist
foreach($userlist as $key=>$user) {
	if ($user['id'] == $_SESSION['user']['id']) {
		unset($userlist[$key]);
	}
}


$pegasus->assign('userlist',$userlist);

if (isset($_SESSION['user'])) {
	$pegasus->display('userlist.tpl');
}
else {
	$pegasus->display('register.tpl');
}
?>
