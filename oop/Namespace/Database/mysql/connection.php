<?php
namespace Database\mysql;

class Connection {
    private string $databaseUrl = "mysql:database:4000";

    public function getdatabaseUrl():string{
        echo "Mysql database URL : ";
        return $this->databaseUrl .PHP_EOL;
    }
}
