<?php

class Lampada {
    public $status = "desligada";

    public function ligar() {
        $this->status = "ligada";
    }

    public function desligar() {
        $this->status = "desligada";
    }
}

$l = new Lampada();

$l->ligar();
echo $l->status;

?>