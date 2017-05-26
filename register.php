<?php
session_start();
require('classes/page.class.php');
require('classes/user.class.php');
$pegasus = new PegasusPage;

$pegasus->assign('title','Registration');


// ***** CONFIRM ***** //
if ($_GET['action'] == 'confirm') {
	$key = $_GET['key'];
	$email = $_GET['email'];
	$user = new PegasusUser;
	$confirmed = $user->confirmUser($email,$key);
	
	if($confirmed) {
		$pegasus->assign('title','Registration confirmed');
		$pegasus->assign('registerconfirmed',1);
	}
}

// ***** CONTRADICT ***** //
elseif ($_GET['action'] == 'contradict') {
	$key = $_GET['key'];
	$email = $_GET['email'];
	$user = new PegasusUser;
	$contradicted = $user->contradictUser($email,$key);
	
	if($contradicted) {
		$pegasus->assign('title','Registration contradicted');
		$pegasus->assign('registercontradicted',1);
	}
}

// ***** REGISTRATION ***** //
else {
	if ($_POST['action'] == 'register') {
		
		$user = new PegasusUser;
		if ($_POST['password'] != $_POST['retypepassword']) {
				$registererror['username'] = 'passwords do not match';
				$pegasus->assign('title','Registration error');
				$pegasus->assign('registererror',$registererror);
		}
		else {
			$fieldsValid = $user->createUser($_POST['username'],$_POST['password'],$_POST['email'],$_POST['birthdate'],$_FILES['profilepicture']);	
		
			if ($fieldsValid !== true) {
				$pegasus->assign('title','Registration error');
				$pegasus->assign('registererror',$fieldsValid);
			}
			else {
				$pegasus->assign('title','Registration successful');
				$pegasus->assign('registersuccess',1);
			}
		}
	}
}

if (isset($_SESSION['loggedUser'])) {
	$pegasus->display('myprofile.tpl');
}
else {
	$pegasus->display('register.tpl');
}

?>
