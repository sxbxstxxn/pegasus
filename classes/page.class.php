<?php
require('config.php');
require('/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/lib/smarty-3.1.30/Smarty.class.php');

class PegasusPage extends Smarty {
	function __construct()	
	{
		parent::__construct();

		$this->template_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/';
		$this->compile_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates_c/';
		$this->config_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/configs/';
		$this->cache_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/cache/';	
		
		//var_dump($_SESSION['user']);
		
		if(isset($_SESSION['user'])) {
			//$userid = $_SESSION['loggedUser'];
			//getUserDataById
			//echo $userid;die;
			$this->assign('user', $_SESSION['user']);
		}
		else {
		
			if($_POST['action'] == 'login'){				
				$this->login($_POST['username'],$_POST['password']);	
				//header('Location: '.BASEURL.$_POST['currentPage']);
			}
		}

		if($_POST['action'] == 'logout') {
			$this->logout();
		}
		
		if($_GET['test'] == 1) {
			$this->logout();
		}
	}
	
	function logout() 
	{
		session_destroy();
		header('Location: '.BASEURL);
	}
	
	function login($username, $password) 
	{
		
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);

		$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
		$result = $statement->execute(array('username' => $username));
		$user = $statement->fetch(PDO::FETCH_ASSOC);
		//DB Abfrage in user class exportieren? checkUserLogin, dann return true oder errormeldung
		
		if ($user == false || password_verify($password, $user['password']) == false) {
			$loginerror = 'username or password wrong';
		}
		else {
			
			if ($user['email_confirmed']==0) {
				//$this->assign('error', 'Please confirm your e-mail adress.');
				$loginerror = 'please confirm your e-mail adress.';				
			}
			else {
				//$_SESSION['loggedUser'] = $user['id'];
				$_SESSION['user'] = $user;
				//return true;
				header('Location: '.BASEURL.$_POST['currentPage']);
			}
		}
		$this->assign('loginerror', $loginerror);
	}
}



?>