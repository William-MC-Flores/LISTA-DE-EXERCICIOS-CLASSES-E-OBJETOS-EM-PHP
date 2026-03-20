<?php

class ContaBancaria {
    private $titular;
    private $saldo;
    private $numero;

    public function __construct($titular, $saldo, $numero) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->numero = $numero;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente<br>";
        } else {
            $this->saldo -= $valor;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$c = new ContaBancaria("Will", 1000, 123);

$c->sacar(1500);
$c->depositar(500);

echo "Saldo: " . $c->getSaldo();

?>