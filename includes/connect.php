<?php

error_reporting(E_ALL ^ E_NOTICE);

$db_host = 'external-db.s205128.gridserver.com';
$db_user = 'db205128_hippie';
$db_pass = 'Amm250681-';
$db_name = 'db205128_tfer';

@$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
	die('<h1>Could not connect to the database</h1><h2>Please try again after a few moments.</h2>');
}

$mysqli->set_charset("utf8");


?>