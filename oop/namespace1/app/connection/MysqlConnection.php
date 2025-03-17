<?php
namespace app\connection;

class MysqlConnection{
    public string $databaseUrl;
    public function __construct( $databaseUrl = "localhost/dashboard/my-portfolio/")
    {
        $this->databaseUrl = $databaseUrl;

    }
    public function getValue(){
        return $this->databaseUrl . PHP_EOL;
    }

}


