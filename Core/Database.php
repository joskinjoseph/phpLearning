<?php
namespace Core;
use PDO;
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Database
{
    public $connection;

    public $statement;

    public function __construct($config, $username = 'oluwadamilare', $password = '12345@Oluwadamilare')
    {

        $dsn = "mysql:" . http_build_query($config, ' ', ';');

        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($query, $params = [])
    {

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function get() {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }
        return $result;
    }
}
