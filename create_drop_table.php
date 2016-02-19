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
	//To create a table
	$sql = "CREATE TABLE my_table( ".
	      "student_id INT NOT NULL AUTO_INCREMENT, ".
	       "student_fname VARCHAR(30) NOT NULL, ".
	      "student_lname VARCHAR(30) NOT NULL, ".
	      "student_dob DATE, ".
	       "PRIMARY KEY ( student_id )); ";
	//To delete a table
	//$sql = "DROP TABLE my_table";
	$return_value = mysql_query( $sql, $connection );
	if(! $return_value )
	{
	   die("Failed to create table: " . mysql_error());
	}
	echo "Table has been successfully created\n";

	mysql_close($connection);
?>
