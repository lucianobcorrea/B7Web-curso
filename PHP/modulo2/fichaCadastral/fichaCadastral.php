<?php
<<<<<<< HEAD
require('functions.php');

$nome = "Luciano Correa";
$idade = 23;
$sexo = 'M';
$salarioMensal = 2210.30;
$salarioAnual = calcularSalarioAnual($salarioMensal);
$estaEmpregado = true;
$empregadoMensagem = '';
$habilidades = ['PHP', 'Javascript', 'HTML', 'CSS'];
$idadeAposentar = calcularAnosParaAposentar($sexo, $idade);

$estaEmpregado ? $empregadoMensagem = "Empregado" : $empregadoMensagem = "Desempregado";
=======
require ('constants.php');
require ('data.php');
>>>>>>> 7a2b19750ad87b165ff33993bd46aa505ee2e345
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $nome ?></strong></p>
            <p>Idade: <strong><?= $idade ?></strong></p>
            <p>Sexo: <strong><?= $sexo ?></strong></p>
            <p>Salário Mensal: <strong><?= formatarDinheiro($salarioMensal) ?></strong></p>
            <p>Salário Anual: <strong><?= formatarDinheiro($salarioAnual) ?></strong></p>
            <p>Status de Emprego: <strong><?= $empregadoMensagem ?></strong></p>
            <p>Anos para Aposentadoria: <strong><?= $idadeAposentar ?></strong></p>
            <p>Habilidades: <strong><?php echo implode(", ", $habilidades) ?></strong></p>
        </div>
    </div>
</body>

</html>