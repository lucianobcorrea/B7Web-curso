<?php
$frutas = ["Laranja", "Limao"];
var_dump($frutas);
echo "<br><br>";
array_push($frutas, "Pera");
var_dump($frutas);
echo "<br><br>";
array_pop($frutas);
var_dump($frutas);
echo "<br><br>";
array_shift($frutas);
var_dump($frutas);

// in_array = verifica se um item existe no array
// count = conta quantidade de itens no array
// array_merge = junta dois arrays