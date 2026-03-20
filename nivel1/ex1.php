<?php

class Pessoa {
    public $nome;

    public function apresentar() {
        echo "Olá, meu nome é " . $this->nome;
    }
}

$p = new Pessoa();
$p->nome = "Will";
$p->apresentar();

?>