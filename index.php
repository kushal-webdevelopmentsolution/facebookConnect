<?php
require 'fbconfig.php';   // Include fbconfig.php file
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
<style type="text/css">
.hero-unit{background-color:#000; color:#FFF;}
body{ background-color:#000; color:#FFF}
.container{background-color:#202020;}

</style>
 </head>
  <body>
  
  <?php if ($user): ?>      <!--  After user login  -->
<div class="container" >
<div class="hero-unit">
  <h1>Hello <?php echo $fbuname; ?></h1>
  <p>Welcome to "facebook login" tutorial</p>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $user; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $fbid; ?></li>
<li class="nav-header">Facebook Username</li>
<li><?php echo $fbuname; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $fbfullname; ?></li>
<?php //echo $logoutUrl; ?>
<div><a href="http://www.webdevelopmentsolution.me/facebook_connect/logout.php">Logout</a></div>
</ul>
</div></div>
    <?php else: ?>     <!-- Before login --> 
<div class="container">
<h1>Login with Facebook</h1>
           Not Connected
<div>
      <a href="<?php echo $loginUrl; ?>">Login with Facebook</a></div>
      </div>
    <?php endif ?>
  </body>
</html>
