<?php

$db_host = 'localhost';
$db_user = 'php';
$db_password = 'secret';
$db_database = 'php';
 
$mysql = mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($db_database);
