#!/usr/bin/php5
<?php
	$db_host = "localhost:3036";
	$db_user = "root";
	$db_password = "root_password";
	// mysql_connect function returns a MySQL link identifier on success 
	// or FALSE on failure
	$connection = mysql_connect($db_host, $db_user, $db_password);
	if(!$connection )
	{
	   die("Could not connect to MySQL Server: " . mysql_error());
	}
	echo "Connected successfully\n";
	//To create a database
	$sql = "CREATE DATABASE MyDB";
	
	//To delete a database
	//$sql = "DROP DATABASE MyDB";
	
	//To select a database
	//syntax: bool mysql_select_db( db_name, connection );
	//$result = mysql_select_db( 'MyDB', $connection );
	
	//syntax: bool mysql_query( sql, connection );
	$result = mysql_query($sql, $connection );
	if(!$result )
	{
	   die("Error!: " . mysql_error());
	}
	echo "Database MyDB has been created successfully\n";
	mysql_close($connection);
?>
