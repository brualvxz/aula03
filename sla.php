<?php

// importa as classes
require_once "conta.php";
require_once "administrador.php";

$conta = new Conta(1, "sla@gmail.com", "123456");
echo $conta->login("123456") ? "Login realizado\n" : "Senha incorreta\n";

$admin = new Administrador("Moderador");
$admin->banirJogador("sla");