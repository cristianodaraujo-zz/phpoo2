<?php

namespace src\app\classes\Abstracts;

use  src\app\classes\Config\Connect;

class DataBaseAbstract extends Connect {

    protected static $tabela;

    public function read() {

        $connection = parent::getDb();
        try {
            $listar = $connection->prepare("SELECT * FROM " . self::$tabela);
            $listar->execute();
            $dados = $listar->fetchAll(\PDO::FETCH_ASSOC);
        }
        catch (\PDOException $error) {
            die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
        }
        return $dados;
    }
}