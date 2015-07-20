<?php
include_once("inc/facebook.php"); //include facebook SDK
 
######### edit details ##########
$appId = '1443889462573203'; //Facebook App ID
$appSecret = 'c8d98bb268796e39a55f598d584e2a26'; // Facebook App Secret
$return_url = 'http://www.webdevelopmentsolution.me/facebook_connect/post-to-fb-wall/';  //return url (url to script)
$homeurl = 'http://www.webdevelopmentsolution.me/facebook_connect/post-to-fb-wall';  //return to home
$fbPermissions = 'read_stream,publish_actions,email';  //Required facebook permissions
##################################

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));

$fbuser = $facebook->getUser();


?>