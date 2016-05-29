<?php

  //--------------------------------------------------------------------------
  // Connect to mysql database
  //--------------------------------------------------------------------------

  $host = "localhost";
  $user = "root";
  $pass = "";

  $databaseName = "demo";
  $tableName = "mahasiswa";
  
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);


?>
