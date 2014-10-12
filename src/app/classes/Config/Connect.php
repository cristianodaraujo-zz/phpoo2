<?php

namespace src\app\classes\Config;

/**
 * Class Connection
 * Classe responsável por conectar ao banco de dados
 * @package src\app\classes\databases
 */
abstract class Connect {

    private static $dsn = 'mysql:host=localhost;dbname=phpoo';
    private static $user = 'root';
    private static $pass = 'root';

    private static function connection() {

        try {
            $connection = new \PDO(self::$dsn, self::$user, self::$pass);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $connection;
        }
        catch (\PDOException $error) {
            die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
        }
    }

    public static function getDb() {
        return self::connection();
    }
}