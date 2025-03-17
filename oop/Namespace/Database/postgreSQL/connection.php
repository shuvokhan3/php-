<?php
namespace Database\postgreSQL;

class Connection{
    private string $postgreDatabaseConnection = 'metaofblog:dbname:4000';

    public function getDatabaseUrl(): string{
        echo "Postgre Database Url : ";
        return $this -> postgreDatabaseConnection;
    }
}

