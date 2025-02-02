<?php
$nomes = ['Luciano', 'Gustavo'];
// $nomes = array("Luciano", "Gustavo");
echo $nomes[0];
echo "<br><br>";
foreach ($nomes as $nome) {
    echo $nome;
    echo "<br>";
}

echo "<br><br>";
$pessoa = [
    "nome" => "Luciano",
    "idade" => 23
];
echo $pessoa['idade'];
echo "<br><br>";
echo "<pre>";
var_dump($pessoa);
echo "</pre>";