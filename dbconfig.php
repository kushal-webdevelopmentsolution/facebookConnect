<?php
define('DB_SERVER', 'webdevelopmentsolution.me.mysql.service.one.com');
define('DB_USERNAME', 'webdevelopments');    // DB username
define('DB_PASSWORD', 'qesmgwH7');    // DB password
define('DB_DATABASE', 'webdevelopments');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>