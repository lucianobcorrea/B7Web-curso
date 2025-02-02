<?php

//Exercicio 1
$cidades = ["Novo Hamburgo", "Sao Leopoldo", "Porto Alegre", "Canoas", "Tres Passos"];
echo $cidades[2];

//Exercicio 2
echo "<br><br>";
$alunos = [
    "Luciano" => 23,
    "Gustavo" => 20,
    "Pedro" => 22
];
echo $alunos["Gustavo"];

//Exercicio 3
echo "<br><br>";
$cores = ["Branco", "Preto", "Vermelho"];
array_push($cores, "Cinza");
array_shift($cores);
print_r($cores);

// Exercicio 4
echo "<br><br>";
$precos = [
    "Teclado" => 300,
    "Mouse" => 100,
    "Fone" => 60
];
print_r($precos);
echo "<br><br>";
$precos["Fone"] += 10;
$precos["Teclado"] -= 10;
print_r($precos);