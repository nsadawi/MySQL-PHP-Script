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
	
	//To select a database	
	$result = mysql_select_db( "mysql", $connection );
	if(!$result )
	{
	   die("Error!: " . mysql_error());
	}
	echo "Database mysql has been selected successfully\n";
	//To insert data into a table
	$sql =  "INSERT INTO user ".
		" (host, user, password, ".
		" select_priv, insert_priv, update_priv) ".
		" VALUES (".
		" 'localhost', 'mike',  PASSWORD('mike9031')," .
		" 'Y', 'Y', 'Y');";		
	
	$return_value = mysql_query( $sql, $connection );
	if(! $return_value )
	{
	   die("Failed to create new user: " . mysql_error());
	}
	echo "New user has been successfully created\n";
	//To reload the grant tables
	//Otherwise we have to restart mySQL server!
	$sql = "FLUSH PRIVILEGES;";
	$return_value = mysql_query( $sql, $connection );
	if(! $return_value )
	{
	   die("Failed to flush priviliges: " . mysql_error());
	}
	echo "Priviliges have been successfully flushed\n";

	mysql_close($connection);
?>
