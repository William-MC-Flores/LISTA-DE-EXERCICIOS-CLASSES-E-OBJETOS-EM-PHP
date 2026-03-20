<?php

class Usuario {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome) {
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;
    }

    public function login($email, $senha) {
        if ($this->email === $email && $this->senha === $senha) {
            return "Login realizado com sucesso!";
        } else {
            return "Email ou senha incorretos.";
        }
    }

    public function getNome() {
        return $this->nome;
    }
}

$usuario = new Usuario("will@email.com", "123456", "Will");

echo $usuario->login("will@email.com", "123456") . "<br>";
echo $usuario->login("will@email.com", "errado");

?>