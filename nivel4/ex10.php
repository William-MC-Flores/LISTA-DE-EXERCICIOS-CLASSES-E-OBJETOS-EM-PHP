<?php

class Pessoa {
    private $nome;
    private $idade;
    private $cidade;

    public function __construct($nome, $idade, $cidade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
    }

    public function getDados() {
        return "{$this->nome}, {$this->idade} anos, {$this->cidade}";
    }
}

$p = new Pessoa("Will", 17, "SP");
echo $p->getDados();

?>