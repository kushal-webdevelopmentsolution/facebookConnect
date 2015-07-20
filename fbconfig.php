<?php
require 'src/facebook.php';  // Include facebook SDK file
//require 'functions.php';  // Include functions
$facebook = new Facebook(array(
  'appId'  => '1443889462573203',   // Facebook App ID 
  'secret' => 'c8d98bb268796e39a55f598d584e2a26',  // Facebook App Secret
  'cookie' => true,	
));
$user = $facebook->getUser();

if ($user) {
  try {
    $user_profile = $facebook->api('/me');
  	    $fbid = $user_profile['id'];                 // To Get Facebook ID
 	    $fbuname = $user_profile['username'];  // To Get Facebook Username
 	    $fbfullname = $user_profile['name']; // To Get Facebook full name
	      $femail = $user_profile['email'];    // To Get Facebook email ID
    //       checkuser($fbid,$fbuname,$fbfullname,$femail);    // To update local DB
  } catch (FacebookApiException $e) {
    error_log($e);
   $user = null;
  }
}
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl(array(
		 'next' => 'http://www.webdevelopmentsolution.me/facebook_connect/logout.php',  // Logout URL full path
		));
		
} else {
 $loginUrl = $facebook->getLoginUrl(array(
		'scope'		=> 'email', // Permissions to request from the user
		));
}
?>