<?php

function calcularSalarioAnual(float $salario): float {
    $mesesAno = 12;
    return $salario * $mesesAno;
}

function calcularAnosParaAposentar(string $sexo, int $idade): int {
    define("IDADE_APOSENTADORIA_HOMEM", 65);
    define("IDADE_APOSENTADORIA_MULHER", 62);

    if($sexo == 'M') {
        return IDADE_APOSENTADORIA_HOMEM - $idade;
    }else {
        return IDADE_APOSENTADORIA_MULHER - $idade;
    }
}

function formatarDinheiro(float $valor): string {
    return "R$ " . number_format($valor, 2, ",", ".");
}
