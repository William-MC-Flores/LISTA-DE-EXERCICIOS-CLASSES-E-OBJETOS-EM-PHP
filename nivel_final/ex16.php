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

    public function setPreco($preco) {
        if ($preco >= 0) {
            $this->preco = $preco;
        }
    }
}

class Cliente {
    private $nome;
    private $email;
    private $id;

    public function __construct($nome, $email, $id) {
        $this->nome = $nome;
        $this->email = $email;
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }
}

class Pedido {
    private $cliente;
    private $produtos = [];
    private $id;

    public function __construct(Cliente $cliente, $id) {
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

    public function resumo() {
        echo "<h2>🧾 Resumo do Pedido</h2>";

        echo "<strong>Cliente:</strong> " . $this->cliente->getNome() . "<br><br>";

        echo "<strong>Produtos:</strong><br>";

        foreach ($this->produtos as $produto) {
            echo "- " . $produto->getNome() . " (R$ " . $produto->getPreco() . ")<br>";
        }

        echo "<br><strong>Total: R$ " . $this->calcularTotal() . "</strong>";
    }
}

// Criando cliente
$cliente = new Cliente("Will", "will@email.com", 1);

// Criando produtos
$p1 = new Produto("Mouse", 50, 1);
$p2 = new Produto("Teclado", 120, 2);
$p3 = new Produto("Monitor", 800, 3);

// Criando pedido
$pedido = new Pedido($cliente, 1);

// Adicionando produtos
$pedido->adicionarProduto($p1);
$pedido->adicionarProduto($p2);
$pedido->adicionarProduto($p3);

// Exibindo resumo
$pedido->resumo();

?>