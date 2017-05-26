<?php
require('config.php');
require('classes/user.class.php');

class PegasusRegistration {
	
	function __construct()
	{		

	}	
	
	function createRegistration($username,$password,$email,$birthdate,$picture) {
		$pegasusUser = new PegasusUser;
		$result = $pegasusUser->createUser($username,$password,$email,$birthdate,$picture);
		return $result;
	}
	
	function confirmRegistration($email,$key) {
		
		$pegasusUser = new PegasusUser;
		$result = $pegasusUser->confirmUserData($email,$key);
		return $result;		
	}
}