<?php

namespace src\app\classes;

use src\app\classes\Interfaces\ClientesInterface;
use src\app\classes\Abstracts\EnderecoAbstract;

class Clientes extends EnderecoAbstract implements ClientesInterface {

    protected $id;
    protected $nome;
    protected $cnpj_cpf;
    protected $email;
    protected $telefone;
    protected $rua;
    protected $numero;
    protected $complemento;
    protected $bairro;
    protected $cep;
    protected $municipio;
    protected $uf;
    protected $tipo;
    protected $grauImportance;

    function __construct($id, $nome, $email,  $tipo, $cnpj_cpf,  $telefone, $rua, $numero, $bairro, $cep, $complemento,  $grauImportance, $municipio, $uf)
    {
        $this->municipio        = $municipio;
        $this->nome             = $nome;
        $this->numero           = $numero;
        $this->rua              = $rua;
        $this->telefone         = $telefone;
        $this->tipo             = $tipo;
        $this->uf               = $uf;
        $this->bairro           = $bairro;
        $this->cep              = $cep;
        $this->cnpj_cpf         = $cnpj_cpf;
        $this->complemento      = $complemento;
        $this->email            = $email;
        $this->grauImportance   = $grauImportance;
        $this->id               = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }


    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }
    public function getBairro() {
        return $this->bairro;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }
    public function getCep() {
        return $this->cep;
    }

    public function setCnpj_Cpf($cnpj_cpf) {
        $this->cnpj_cpf = $cnpj_cpf;
    }
    public function getCnpj_Cpf() {
        return $this->cnpj_cpf;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }
    public function getComplemento() {
        return $this->complemento;
    }


    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setGrauImportance($grauImportance) {
        $this->grauImportance = $grauImportance;
    }
    public function getGrauImportance() {
        return $this->grauImportance;
    }

    public function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }
    public function getMunicipio() {
        return $this->municipio;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }
    public function getNumero() {
        return $this->numero;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }
    public function getRua() {
        return $this->rua;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function getTipo() {
        return $this->tipo;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }
    public function getUf() {
        return $this->uf;
    }
}
