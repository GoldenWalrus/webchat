<?php
function dbConnect()
{
	$con = mysql_connect('root','','comm1');
	//use PDO to connect to database
	return $con;
}
?>
