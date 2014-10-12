<?php

namespace src\app\classes\Abstracts;

use  src\app\classes\Config\Connect;

class DataBaseAbstract extends Connect {

    protected static $tabela;

    public function read() {

        $pdo = parent::getDb();
        try {
            $listar = $pdo->prepare("SELECT * FROM " . self::$tabela);
            $listar->execute();
            $dados = $listar->fetchAll(\PDO::FETCH_ASSOC);
        }
        catch (\PDOException $error) {
            die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
        }
        return $dados;
    }
}