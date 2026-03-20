<?php

class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome, $n1, $n2) {
        $this->nome = $nome;
        $this->nota1 = $n1;
        $this->nota2 = $n2;
    }

    public function media() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function situacao() {
        return $this->media() >= 7 ? "Aprovado" : "Reprovado";
    }
}

$a = new Aluno("Will", 8, 6);

echo $a->media() . " - " . $a->situacao();

?>