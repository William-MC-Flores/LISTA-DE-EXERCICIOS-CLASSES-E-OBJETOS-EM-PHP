<?php

class Aluno {
    private $nome;
    private $nota;
    private $curso;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNota() {
        return $this->nota;
    }

    public function verificarAprovacao() {
        if ($this->nota >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}