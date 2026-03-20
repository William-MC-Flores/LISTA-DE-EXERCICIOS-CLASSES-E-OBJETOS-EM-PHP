<?php

class Carro {
    public $marca;
    public $velocidade = 0;

    public function acelerar() {
        $this->velocidade += 10;
    }
}

$carro = new Carro();
$carro->marca = "Toyota";

echo "Velocidade inicial: {$carro->velocidade}<br>";

$carro->acelerar();

echo "Velocidade depois: {$carro->velocidade}";
?>