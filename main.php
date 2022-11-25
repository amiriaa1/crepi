<?php

require_once('config.php');


include_once('include/class.database.php');

$db_connection = new dbConnection();

if(!$db_connection->connect())
{
	header('Location: install'); exit();
}



include_once('include/class.fee.php');



?>