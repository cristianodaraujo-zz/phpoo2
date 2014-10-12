<?php

require_once './bootstrap.php';

use \src\app\classes\Config\Crud;
use \src\app\classes\Config\Connect;
use \src\app\classes\Types\ClientesPessoaFisica;
use \src\app\classes\Types\ClientesPessoaJuridica;
/*
 * Função para criar um banco de dados no MySQL, que receberá todo o conteúdo do site.
 * Obs: Lembrando que o usuário é 'root' e o password é 'root'
 */
function startDatabase() {
    $dsn     = 'mysql:host=localhost;dbname=phpoo';
    $user    = 'root';
    $pass    = 'root';
    $dbname  = 'phpoo';
    $table   = 'clientes';

    try {
        $connection = new \PDO($dsn, $user, $pass);
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $connection->query("CREATE DATABASE IF NOT EXISTS $dbname");
        $connection->query("use $dbname");
        $sql ="CREATE table $table(
        id INT( 10 ) AUTO_INCREMENT NOT NULL PRIMARY KEY,
        nome VARCHAR( 250 ) NOT NULL,
        email VARCHAR( 250 ) NOT NULL,
        tipo VARCHAR( 250 ) NOT NULL,
        cpf VARCHAR( 250 ) NOT NULL,
        telefone VARCHAR( 250 ) NOT NULL,
        rua VARCHAR( 250 ) NOT NULL,
        numero VARCHAR( 250 ) NOT NULL,
        bairro VARCHAR( 250 ) NOT NULL,
        cep VARCHAR( 250 ) NOT NULL,
        complemento VARCHAR( 250 ) NOT NULL,
        grauimportance VARCHAR( 250 ) NOT NULL,
        cidade VARCHAR( 250 ) NOT NULL,
        uf VARCHAR( 250 ) NOT NULL,
        celular VARCHAR( 250 ) NOT NULL,
        fax VARCHAR( 250 ) NOT NULL,
        telcobr VARCHAR( 250 ) NOT NULL,
        ruacobr VARCHAR( 250 ) NOT NULL,
        numerocobr VARCHAR( 250 ) NOT NULL,
        complementocobr VARCHAR( 250 ) NOT NULL,
        bairrocobr VARCHAR( 250 ) NOT NULL,
        cepcobr VARCHAR( 250 ) NOT NULL,
        municipiocobr VARCHAR( 250 ) NOT NULL,
        ufcobr VARCHAR( 250 ) NOT NULL);";
        $connection->exec($sql);
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
    return $connection;
}
startDatabase();

$clientes = new ClientesPessoaFisica("Angelina Archibald", "angelina@email.com.br", "PF", 88888888888, 44435549, "Santos", 777, "Centro", 15500000, "casa", 5, "Maral", "SP");
$clientes
    ->setCelular(17977777777)
    ->setTelCobr(null)
    ->setRuaCobr(null)
    ->setNumeroCobr(null)
    ->setComplementoCobr(null)
    ->setBairroCobr(null)
    ->setCepCobr(null)
    ->setMunicipioCobr(null)
    ->setUfCobr(null)
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();


$clientes = new ClientesPessoaJuridica("Claudia Bertolin", "claudia@email.com.br", "PJ", 12345678912,  32435549, "Amazona", 1, "São Paulo",  "15500-000", "casa", 3, "São Paulo", "sp" );
$clientes
    ->setFax(5115151400)
    ->setTelCobr(32435339)
    ->setRuaCobr("João")
    ->setNumeroCobr(1515)
    ->setComplementoCobr("casa")
    ->setBairroCobr("Magalhães")
    ->setCepCobr(15500000)
    ->setMunicipioCobr("Passos")
    ->setUfCobr("DF")
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();


$clientes = new ClientesPessoaFisica("Felipe Marcio de Souza", "felipe@email.com.br", "PF", "12345678912", 32435549, "Pernanbuco", 100,  "São Paulo",  "15500-000", "casa", 2, "São Paulo", "sp" );
$clientes
    ->setCelular(1888848488)
    ->setTelCobr(null)
    ->setRuaCobr(null)
    ->setNumeroCobr(null)
    ->setComplementoCobr(null)
    ->setBairroCobr(null)
    ->setCepCobr(null)
    ->setMunicipioCobr(null)
    ->setUfCobr(null)
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();


$clientes = new ClientesPessoaJuridica("Maria Helena", "maria@email.com.br", "PJ", "12345678912", 32435549, "São Paulo", 481, "São Paulo", "15500-000", "Bloco 01 Sala 02", 5, "São Paulo", "sp" );
$clientes
    ->setFax(5115151400)
    ->setTelCobr(32435339)
    ->setRuaCobr("Marcio")
    ->setNumeroCobr(878)
    ->setComplementoCobr("casa")
    ->setBairroCobr("Magalhães")
    ->setCepCobr(15500000)
    ->setMunicipioCobr("Passos")
    ->setUfCobr("DF")
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();


$clientes = new ClientesPessoaFisica("Luciana Helena", "luci@email.com.br", "PF", "12345678912", 32435549, "Alagoas", 1, "São Paulo", "15500-000", "casa", 1, "São Paulo", "sp" );
$clientes
    ->setCelular(1748484845)
    ->setTelCobr(null)
    ->setRuaCobr(null)
    ->setNumeroCobr(null)
    ->setComplementoCobr(null)
    ->setBairroCobr(null)
    ->setCepCobr(null)
    ->setMunicipioCobr(null)
    ->setUfCobr(null)
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();