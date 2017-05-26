<?php
include_once 'config.php'; 
session_start();

require('/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/lib/smarty-3.1.30/Smarty.class.php');
$smarty = new Smarty;

$smarty->template_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/';
$smarty->compile_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates_c/';
$smarty->config_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/configs/';
$smarty->cache_dir = '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/cache/';

$key = $_GET['key'];
$email = $email;


$smarty->assign('message','Registration successfully confirmed.');

$smarty->display('message.tpl');


?>