<?php
$nome = "Luciano Correa";
$idade = 23;
$sexo = 'M';
$salarioMensal = 2210.30;
$salarioAnual = $salarioMensal * 12;
$estaEmpregado = true;
$empregadoMensagem = '';
$habilidades = ['PHP', 'Javascript', 'HTML', 'CSS'];
$idadeAposentar = 0;

$idadeAposentar = $sexo = 'M' ? APOSENTADORIA_HOMEM - $idade : APOESENTADORIA_MULHER - $idade;
$empregadoMensagem = $estaEmpregado ? "Empregado" : "Desempregado";