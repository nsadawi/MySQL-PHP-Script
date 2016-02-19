#!/usr/bin/php5
<?php
	$db_host = "localhost:3036";
	$db_user = "chris";
	$db_password = "chris2014";
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
	
	$sql = "SELECT host, user, password FROM user WHERE user = 'mike';";

	$return_value = mysql_query( $sql, $connection );
	if(! $return_value )
	{
	   die("Failed to select data from table: " . mysql_error());
	}
	echo "Data has been successfully selected from table\n";
	
	while($row = mysql_fetch_array($return_value, MYSQL_ASSOC))
	{
		echo "Host :{$row['host']} \n ".
		"Username: {$row['user']} \n ".
		"PW: {$row['password']} \n ".		
		"--------------------------------\n";
	}
	echo "Fetched data successfully\n";
	mysql_close($connection);
?>
