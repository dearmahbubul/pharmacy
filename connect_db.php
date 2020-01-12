<?php

error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
global $con;
$con=mysqli_connect('localhost','root','1234','pharmacy')or die("cannot connect to server");
//mysql_select_db('pharmacy')or die("cannot connect to database");

?>