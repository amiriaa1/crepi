<?php

require_once('config.php');


include_once('include/class.database.php');
include_once('include/class.fee.php');
$db_connection = new dbConnection();

if(!$db_connection->connect())
{
	header('Location: install'); exit();
}







?>