<?php

namespace src\app\classes\Types;

use src\app\classes\Clientes;

class ClientesPessoaJuridica extends Clientes {

    protected $fax;

    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }
    public function getFax() {
        return $this->fax;
    }
} 