<?php

class Produto {
    public $nome;
    public $preco;
}

$produto = new Produto();
$produto->nome = "Notebook";
$produto->preco = 3500;

echo "Produto: {$produto->nome} - R$ {$produto->preco}";
?>