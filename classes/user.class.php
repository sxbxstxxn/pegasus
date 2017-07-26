<?php
require('config.php');
require('classes/helper.class.php');
require('classes/mail.class.php');

class PegasusUser {
	
	function __construct() {
		
	}
	
	function createUser($username, $password, $email, $birthdate, $picture) {
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);	
				
		$check['username'] = $this->usernameValid($username);
		$check['email'] = $this->emailValid($email);
		$check['password'] = $this->passwordValid($password);	
		$picturename = PegasusHelper::getPictureName($picture,$username);
		$check['picture'] = $this->pictureValid($picture, $picturename);
				
			//var_dump($check);die;
				
		$key = $username.$email.date('mY');
		$key = md5($key);	
		
		if ($check['username'] == 1 && $check['password'] == 1 && $check['email'] == 1 && $check['picture'] == 1) {	
			try {
				$pwsend = password_hash($password,PASSWORD_DEFAULT);
				
				$statement = $pdo->prepare("INSERT INTO `users` (`username`, `password`, `email`, `birthdate`, `picture`) VALUES (:username, :password, :email, :birthdate, :picture)");
				//var_dump($statement);die;
				$statement->bindParam(':username', $username);
				$statement->bindParam(':password', $pwsend);
				$statement->bindParam(':email', $email);
				$statement->bindParam(':birthdate', $birthdate);
				$statement->bindParam(':picture', $picturename);
				$statement->execute();
			}
			catch (PDOException $e) {
				return $e;
			}
			$userid = $pdo->lastInsertId();
			
			try {
				$confirmation = $pdo->prepare("INSERT INTO usersconfirm (`userid`, `key`, `email`) VALUES (:userid, :key, :email)");
				$confirmation->bindParam(':userid', $userid);
				$confirmation->bindParam(':key', $key);
				$confirmation->bindParam(':email', $email);
				$confirmation->execute();
			}
			catch (PDOException $e) {
				return $e;
			}
			
			$assignment['key'] = $key;
			$assignment['username'] = $username;
			
			//send mail
			$confirmationmail = new PegasusMail('confirmation',$email,$assignment);
			if($confirmationmail->send()) {
				return true;
			}
			else {
				return 'Error while trying to send email. Please contact your administrator.';
			}
			
		}
		else {
			if ($check['username'] == 1) {unset($check['username']);}
			if ($check['password'] == 1) {unset($check['password']);}
			if ($check['email'] == 1) {unset($check['email']);}
			if ($check['picture'] == 1) {unset($check['picture']);}
			return $check;
		}
	}
	
	function confirmUser($email, $key) {
		
		$id = $this->getUserIdByEmail($email);
		$userconfirm = $this->getUserConfirmationData($id);
		
		if ($id == $userconfirm['userid'] && $email == $userconfirm['email'] && $key == $userconfirm['key']) {			
			//$confirmUser = $this->confirmUser($id);
			$deleteUserConfirmation = $this->deleteUserConfirmation($userconfirm['id']);
			
			if ($deleteUserConfirmation == true) {								
				try {
					$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);		
					$statement = $pdo->prepare("UPDATE `users` SET `email_confirmed` = 1 WHERE id = :id");
					$statement->bindParam(':id',$id);
					$statement->execute();
				} catch (PDOException $e) {
					throw new Exception($e);
				}		
				return true;
			}			
		}
	}
	
	function contradictUser($email, $key) {
		$id = $this->getUserIdByEmail($email);
		$userconfirm = $this->getUserConfirmationData($id);
		
		if ($id == $userconfirm['userid'] && $email == $userconfirm['email'] && $key == $userconfirm['key']) {
			$deleteUser = $this->deleteUser($id);
			$deleteUserConfirmation = $this->deleteUserConfirmation($userconfirm['id']);
			if ($deleteUser == true && $deleteUserConfirmation == true) {
				return true;
			}	
		}
	}
	
	function deleteUser($id) {
		try {
			$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);		
			$statement = $pdo->prepare("DELETE FROM `users` WHERE id = :id");
			$statement->bindParam(':id',$id);
			$statement->execute();
		} catch (PDOException $e) {
			throw new Exception($e);
		}		
		return true;
	}
	
	
	function getUserById($id) {
		try {
			$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);

			$statement = $pdo->prepare("SELECT * FROM `users` WHERE id = :id");
			$statement->bindParam(':id',$id);
			$result = $statement->execute();
			$user = $statement->fetch(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			//throw new Exception($e);
			$user['error'] = 'Es ist ein Fehler aufgetreten. Bitte kontaktieren Sie den Administrator (FehlerCode UC0081)';			
		}				
		return $user;
	}
	
	function getUserlist() {
		
		try {
			$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);

			$statement = $pdo->prepare("SELECT * FROM users");
			$result = $statement->execute();
			$userlist = $statement->fetchAll(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			//throw new Exception($e);
			$user['error'] = 'Es ist ein Fehler aufgetreten. Bitte kontaktieren Sie den Administrator (FehlerCode UC0081)';
		}
		return $userlist;
	}
	
	function usernameValid($username) {
		$result = false;
		$length = strlen($username);
		$spaces = strpos($username,' ');
		if ($username == '') {
			$result = 'please enter a username';
		}
		else {
			if ($length < 5) {
				$result = 'username is too short (min 5 characters)';
			}
			elseif ($length > 20) {
				$result = 'username is too long (max 20 characters)';
			}
			else {				
				if ($spaces != false) {
					$result = 'username with spaces is not allowed';
				}
				else {				
					//already in use?
					$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);
					
					$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
					$statresult = $statement->execute(array('username' => $username));
					$user = $statement->fetch(PDO::FETCH_ASSOC);
					
					if ($user == true) {$result = 'username already exists';}
					else {$result = true;}
				}
			}
		}
		return $result;
	}
	
	function passwordValid($password) {
		$result = false;
		$length = strlen($password);
		if ($password == '') {
			$result = 'please enter a password';
		}
		else {
			if ($length < 5) {
				$result = 'password is too short (min 5 characters)';
			}
			elseif ($length > 20) {
				$result = 'password is too long (max 20 characters)';
			}
			else {	
				if(!preg_match("#[0-9]+#", $password)) {
					$result = 'password must include at least one number';
				}
				elseif(!preg_match("#[a-z]+#", $password)) {
					$result = 'password must include at least one letter';
				}
				else {
					$result = true;
				}
			}		
		}
		return $result;
	}	
	
	function emailValid($email) {
		$result = false;
		
		if ($email == '') {
			$result = 'please enter a e-mail adress';
		}
		else {
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$result = 'this is not a valid email adress';
			}
			else {
				$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);

				$statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
				$statresult = $statement->execute(array('email' => $email));
				$user = $statement->fetch(PDO::FETCH_ASSOC);
				
				if ($user == true) {$result = 'email adress already exists';}
				else {$result = true;}
			}
		}
		
		return $result;
	}
	
	function pictureValid($picture, $picturename) {
		
		switch ($picture['error']) {
			case 0:
				$isimage = getimagesize($picture['tmp_name']);
				if ($isimage == true) {			
					$uploads_dir = BASEDIR.'/uploads';			
					$result = move_uploaded_file($picture['tmp_name'],"$uploads_dir/$picturename");
				}
				else {
					$result = 'this is not an image';
				}
				break;
			case 4:
				$result = true;
				break;
			default:
				$result = 'unknown error with your picture. please contact your administrator.';
		}
		return $result;
	}

	protected function getUserIdByEmail($email) {
		try {
			$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);
			$statement = $pdo->prepare("SELECT * FROM usersconfirm WHERE email = :email");
			$result = $statement->execute(array('email' => $email));
			$userconfirm = $statement->fetch(PDO::FETCH_ASSOC);
			$id = $userconfirm['userid'];
		} catch (PDOException $e) {
			throw new Exception($e);
		}
		return $id;
	}
	
	protected function getUserConfirmationData($userid) {
		try {
			$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);		
			$statement = $pdo->prepare("SELECT * FROM usersconfirm WHERE userid = :userid");
			$result = $statement->execute(array('userid' => $userid));
			$userconfirm = $statement->fetch(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			throw new Exception($e);
		}
		return $userconfirm;
	}
	
	protected function deleteUserConfirmation($id) {
		try {
			$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);		
			$statement = $pdo->prepare("DELETE FROM `usersconfirm` WHERE `id` = :id");
			$statement->bindParam(':id',$id);
			$statement->execute();
		} catch (PDOException $e) {
			throw new Exception($e);
		}
		return true;
	}
	

	
	
}