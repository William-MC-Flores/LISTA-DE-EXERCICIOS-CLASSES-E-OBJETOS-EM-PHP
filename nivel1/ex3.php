<?php

class Conta {
    public $saldo;

    public function verSaldo() {
        echo "Saldo: R$ " . $this->saldo;
    }
}

$c = new Conta();
$c->saldo = 500;
$c->verSaldo();

?>