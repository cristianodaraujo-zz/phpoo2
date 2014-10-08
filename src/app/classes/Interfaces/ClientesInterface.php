<?php

namespace src\app\classes\Interfaces;

interface ClientesInterface {

    public function getId();

    public function getNome();

    public function getCnpj_Cpf();

    public function getEmail();

    public function getTelefone();

    public function getRua();

    public function getNumero();

    public function getComplemento();

    public function getBairro();

    public function getCep();

    public function getMunicipio();

    public function getUf();

    public function getTipo();

    public function getGrauImportance();
}