<?php
include_once 'config.php'; 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);

$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$result = $statement->execute(array('username' => $username));
$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($user !== false && password_verify($password, $user['password'])) {
	if ($user['email_confirmed']==0) {
		$_SESSION['errormessage'] = 'Please confirm your E-Mail Adress.';
	}
	else {
		session_regenerate_id();
		unset($user['password']);
		$_SESSION['user'] = $user
	}
}

else {
	$_SESSION['errormessage'] = 'Access denied!';
}

header('Location: '.BASEURL);

?>