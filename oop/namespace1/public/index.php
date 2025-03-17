<?php
use app\connection\MysqlConnection;

//connect to the MysqlConnection file useing require
require 'E:\web_development_php_laravel\php\php\oop\autoloading\app\connection\MysqlConnection.php';

$connection = new MysqlConnection();
echo "URL IS : " . $connection -> getValue();