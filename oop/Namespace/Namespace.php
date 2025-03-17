<?php

use Database\mysql\Connection as mysql;
use Database\postgreSQL\Connection as postsql;


require "Database/mysql/connection.php";
require "Database/postgreSQL/connection.php";


$mySqlConnection = new mysql();
echo $mySqlConnection -> getDatabaseUrl();

$postgreSQL = new postsql();
echo $postgreSQL -> getDatabaseUrl();

