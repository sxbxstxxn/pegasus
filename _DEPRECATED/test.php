<?php

require('classes/user.class.php');

$user = new PegasusUser;
echo $user->createUser('manoftheday2','##-#-#','test2@test.de','222','333');


?>