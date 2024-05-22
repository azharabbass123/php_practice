<?php
class Database {
    public $connection;

    public function __construct() {

        $config = [
            'host'=> 'localhost',
            'dbname'=> 'blogpost_db',
        ];
        $dsn = "mysql:host={$config['host']};port='5500';dbname={$config['dbname']}";

        $this->connection = new PDO($dsn, 'root');
    }

    public function query($query) {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}