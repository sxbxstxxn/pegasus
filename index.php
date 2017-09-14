<?php
session_start();

require('classes/page.class.php');
$pegasus = new PegasusPage;

//** Die folgende Zeile "einkommentieren" um die Debug-Konsole anzuzeigen
//$pegasus->debugging = true;

$pegasus->display('index.tpl');


//test for github
//test2

//git test


?>
