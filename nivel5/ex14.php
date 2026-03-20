<?php

class Produto {
    private $nome;
    private $preco;
    private $id;

    public function __construct($nome, $preco, $id) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}

class Carrinho {
    private $produtos = [];
    private $cliente;
    private $id;

    public function __construct($cliente, $id) {
        $this->cliente = $cliente;
        $this->id = $id;
    }

    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function calcularTotal() {
        $total = 0;

        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }

        return $total;
    }

    public function listarProdutos() {
        foreach ($this->produtos as $produto) {
            echo $produto->getNome() . " - R$ " . $produto->getPreco() . "<br>";
        }
    }
}

$p1 = new Produto("Mouse", 50, 1);
$p2 = new Produto("Teclado", 120, 2);

$carrinho = new Carrinho("Will", 1);

$carrinho->adicionarProduto($p1);
$carrinho->adicionarProduto($p2);

echo "<h3>🛒 Carrinho:</h3>";
$carrinho->listarProdutos();

echo "<br><strong>Total: R$ " . $carrinho->calcularTotal() . "</strong>";

?>