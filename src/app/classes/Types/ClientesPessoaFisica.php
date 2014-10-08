<?php

namespace src\app\classes\Types;

use src\app\classes\Clientes;

class ClientesPessoaFisica extends Clientes {

    protected $celular;

    public function setCelular($celular) {
        $this->celular = $celular;
        return $this;
    }
    public function getCelular() {
        return $this->celular;
    }
} 