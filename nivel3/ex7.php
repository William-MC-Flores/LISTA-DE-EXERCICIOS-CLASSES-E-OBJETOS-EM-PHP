<?php

class Aluno {
    private $nome;
    private $nota;
    private $idade;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNota() {
        return $this->nota;
    }

    public function getIdade() {
        return $this->idade;
    }
}