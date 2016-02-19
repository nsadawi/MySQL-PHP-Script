#!/usr/bin/php5
<?php
  $dbhost = 'localhost:3036';
  $dbuser = 'chris';
  $dbpass = 'chris2014';
  // mysql_connect function returns a MySQL link identifier on success 
  // or FALSE on failure
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  if(!$conn)
  {
    die('Could not connect: ' . mysql_error());
  }
  echo 'Connected successfully'.PHP_EOL;
  mysql_close($conn);
?>
