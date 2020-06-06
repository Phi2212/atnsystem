<?php

define('DB_SERVER', 'ec2-34-200-72-77.compute-1.amazonaws.com');
define('DB_USERNAME', 'cdolvdoxpdpipq');
define('DB_PASSWORD', 'e594ed54edab33222eca584779d4a935ce8af9cdf66d0fee50fa1303d9c0fa92');
define('DB_NAME', 'd1rgct5of5gcog');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
