<?php

namespace src\app\classes\Config;
use src\app\classes\Abstracts\DataBaseAbstract;
use src\app\classes\Clientes;
use src\app\classes\Types\ClientesPessoaFisica;
use src\app\classes\Types\ClientesPessoaJuridica;

class Crud {

    private $connect;

    public function __construct(\PDO $connect) {
        $connect instanceof \PDO;
        $this->connect = $connect;
    }

    public function persist(Clientes $clientes) {

        try {
            $this->connect->beginTransaction();
            $cadastrar = "INSERT INTO clientes (nome, email, tipo, cpf, telefone, rua, numero, bairro, cep, complemento, grauimportance, cidade, uf, celular, telcobr, fax,  ruacobr, numerocobr, complementocobr, bairrocobr, cepcobr, municipiocobr, ufcobr)
                          VALUES (:nome, :email, :tipo, :cpf, :telefone, :rua, :numero, :bairro, :cep, :complemento, :grauimportance, :cidade, :uf, :celular, :telcobr, :fax, :ruacobr, :numerocobr,:complementocobr, :bairrocobr, :cepcobr, :municipiocobr, :ufcobr)";
            $dados = $this->connect->prepare($cadastrar);
            $dados->execute(array(
                "nome"              => $clientes->getNome(),
                "email"             => $clientes->getEmail(),
                "tipo"              => $clientes->getTipo(),
                "cpf"               => $clientes->getCnpj_Cpf(),
                "telefone"          => $clientes->getTelefone(),
                "rua"               => $clientes->getRua(),
                "numero"            => $clientes->getNumero(),
                "bairro"            => $clientes->getBairro(),
                "cep"               => $clientes->getCep(),
                "complemento"       => $clientes->getComplemento(),
                "grauimportance"    => $clientes->getGrauImportance(),
                "municipio"         => $clientes->getMunicipio(),
                "uf"                => $clientes->getUf(),
                "celular"           => $clientes->getCelular(),
                "telcobr"           => $clientes->getTelCobr(),
                "fax"               => $clientes->getFax(),
                "ruacobr"           => $clientes->getRuaCobr(),
                "numerocobr"        => $clientes->getNumeroCobr(),
                "complementocobr"   => $clientes->getComplementoCobr(),
                "bairrocobr"        => $clientes->getBairroCobr(),
                "cepcobr"           => $clientes->getCepCobr(),
                "municipiocobr"     => $clientes->getMunicipioCobr(),
                "ufcobr"            => $clientes->getUfCobr()
            ));
            $this->connect->lastInsertId();
        }
        catch (\PDOException $error) {
            die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
        }
    }

    public function flush() {

        try {
            $this->connect->commit();
        }
        catch (\PDOException $error) {
            die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
        }
        return true;
    }

    public function read() {

        try {
            $listar = $this->connect->prepare("SELECT * FROM  clientes");
            $listar->execute();
            $dados = $listar->fetchAll(\PDO::FETCH_ASSOC);
        }
        catch (\PDOException $error) {
            die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
        }
        return $dados;
    }
}