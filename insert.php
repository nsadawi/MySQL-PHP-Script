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
	$result = mysql_select_db( "MyDB", $connection );
	if(!$result )
	{
	   die("Error!: " . mysql_error());
	}
	echo "Database MyDB has been deleted successfully\n";
	//To insert data into a table
	// INSERT INTO table_name ( field1, field2,...fieldN )
	// VALUES
	// ( value1, value2,...valueN );
	$sql = "INSERT INTO my_table ".
	"(student_fname,student_lname, student_dob) ".
	"VALUES ".
	" (\"Mike\", \"Allen\",\"1991-12-06\")".
	", (\"Alex\", \"Danny\",\"1980-12-06\")".
	", (\"Ronnie\", \"Barton\",\"1987-12-06\")";		
	
	$return_value = mysql_query( $sql, $connection );
	if(! $return_value )
	{
	   die("Failed to insert data into table: " . mysql_error());
	}
	echo "Data has been successfully inserted into table\n";

	mysql_close($connection);
?>
