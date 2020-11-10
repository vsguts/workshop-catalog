<?php

namespace App\Database;

use App\Config;

class Query
{
    static private $connection;

    public function __construct()
    {
        if (empty(self::$connection)) {
            $config = Config::get('db');

            $host = $config['host'];
            $port = $config['port'];
            $dbname = $config['database'];
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname";

            self::$connection = new \PDO($dsn, $config['user'], $config['password']);
        }
    }

    public function fetchAll(string $sql, array $params = [])
    {
        $pdoQuery = $this->_exec($sql, $params);
        return $pdoQuery->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetchRow(string $sql, array $params = [])
    {
        $pdoQuery = $this->_exec($sql, $params);
        return $pdoQuery->fetch(\PDO::FETCH_ASSOC);
    }

    public function execute(string $sql, array $params = [])
    {
        $this->_exec($sql, $params);
    }

    public function lastInsertId()
    {
        return self::$connection->lastInsertId();
    }

    private function _exec(string $sql, array $params = [])
    {
        $pdoQuery = self::$connection->prepare($sql);
        $pdoQuery->execute($params);
        return $pdoQuery;
    }
}
