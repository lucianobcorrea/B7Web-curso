<?php
$usuarioCorreto = "admin";
$senhaCorreta = "123456";

$usuario = "admin";
$senha = "123456";

if($usuarioCorreto == $usuario && $senhaCorreta == $usuario) {
    echo "Bem-vindo! $usuarioCorreto";
}else if($usuarioCorreto == $usuario && $senhaCorreta != $senha) {
    echo "Senha incorreta!";
}else if($usuarioCorreto != $usuario && $senhaCorreta == $senhas) {
    echo "Usuario incorreto!";
}else {
    echo "Erro ao logar! Verifique o usuario ou senha";
}