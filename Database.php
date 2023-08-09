<?php

class Database
{
    public $connection;
    public function __construct($config, $username = 'oluwadamilare', $password = '12345@Oluwadamilare')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function querry($querry, $params = [])
    {

        $statement = $this->connection->prepare($querry);
        $statement->execute($params);

        return $statement;
    }
}
