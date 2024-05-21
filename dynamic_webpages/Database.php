<?php
class Database {
    public $connection;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=blogpost_db;user=root";

        $this->connection = new PDO($dsn);
    }

    public function query($query) {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}