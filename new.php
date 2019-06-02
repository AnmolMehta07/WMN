<?php

$hostname = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "login_db";
//making the connection to mysql

$dbc = mysqli_connect($hostname, $username1, $password1 ,$dbname) OR die("could not connect to database,ERROR: ".mysqli_connect_error());

//set encoding

mysqli_set_charset($dbc,"utf8");
echo "you are connected to ".$dbname." database";

?>