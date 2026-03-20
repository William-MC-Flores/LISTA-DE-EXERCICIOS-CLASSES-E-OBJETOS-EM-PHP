<?php

class Calculadora {
    public function somar($a, $b) {
        return $a + $b;
    }
}

$calc = new Calculadora();
echo $calc->somar(5, 10);

?>