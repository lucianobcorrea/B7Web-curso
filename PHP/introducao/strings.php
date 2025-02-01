<?php
$nome = "Luciano";
$nomeCount = strlen($nome);
echo "Seu nome e: $nome, ele tem $nomeCount caracteres";
echo "<br><br>";

$texto = "Pera, uva, maca e salada mista";
$posicaoPalavraUva = strpos($texto, "uva");
$posicaoPalavraPera = strpos($texto, "Pera");
echo "A palavra uva comeca na posicao $posicaoPalavraUva, e pera na posicao $posicaoPalavraPera";
echo "<br><br>";

$parteDaString = substr($texto, 6);
echo $parteDaString;
echo "<br><br>";

$soPalavraPera = substr($texto, 0, 4);
echo $soPalavraPera . "<br>";
$countUva = strlen("uva");
$soPalavraUva = substr($texto, $posicaoPalavraUva, $countUva);
echo $soPalavraUva;
echo "<br><br>";