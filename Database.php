<?php
class Database
{
    public $connection;
    public function __construct($config, $username = "oluwadamilare", $password = "12345@Oluwadamilare")
    {
        $dsn = "mysql:" . http_build_query($config, '', ';'); // "mysql:host=localhost;port=3306;dname=myproject;charset=utf8mb4"
       $this->connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
       ]);
    }
    public function query($query, $params = [])
    {
     
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }

}
