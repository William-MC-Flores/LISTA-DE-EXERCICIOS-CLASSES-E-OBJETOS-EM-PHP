<?php

class Produto {
    private $nome;
    private $preco;
    private $categoria;

    public function __construct($nome, $preco, $categoria) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }

    // GETTERS
    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    // SETTERS
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        if ($preco < 0) {
            echo "Preço inválido<br>";
        } else {
            $this->preco = $preco;
        }
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    // MÉTODO PRINCIPAL DO EXERCÍCIO
    public function aplicarDesconto($percentual) {
        if ($percentual < 0 || $percentual > 100) {
            echo "Desconto inválido<br>";
            return;
        }

        $desconto = $this->preco * ($percentual / 100);
        $this->preco -= $desconto;
    }
}