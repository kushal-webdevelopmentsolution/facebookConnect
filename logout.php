<?php 
require 'fbconfig.php';

$facebook->destroySession();  // to destroy facebook sesssion
header("Location: " ."http://www.webdevelopmentsolution.me/facebook_connect/");        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
?>