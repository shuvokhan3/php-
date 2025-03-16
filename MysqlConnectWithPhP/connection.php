<?php

//connect mysql with database
/*
  1 - Driver(mysqli())
  2 - inside driver i need some information to connect with sql the information is :
    1 - hostname
    2 - username
    3 - password
    4 - database_name
    5 - port number
*/

$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'sql_lesson';
$port = '3306';

//connect to the driver
$mysqli = new mysqli($hostname,$username,$password,$databasename,$port);

echo "connected";
