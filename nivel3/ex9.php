<?php

class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        if ($preco < 0) {
            echo "Erro: preço não pode ser negativo";
        } else {
            $this->preco = $preco;
        }
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function getPreco() {
        return $this->preco;
    }
}

$p = new Produto();
$p->setNome("Mouse");
$p->setPreco(-10);
$p->setPreco(50);

echo $p->getPreco();

?>