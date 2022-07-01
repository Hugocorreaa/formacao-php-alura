<?php

require 'banco-funcoes.php';

$contasCorrentes = [
    '011' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '012' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ], 
    '013' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];



$contasCorrentes['011'] = sacar($contasCorrentes['011'], 500);

$contasCorrentes['012'] = sacar($contasCorrentes['012'], 500);

$contasCorrentes['013'] = depositar($contasCorrentes['013'], 200);

//titularComLetrasMaiusculas($contasCorrentes['011']);

echo "<ul>";
foreach($contasCorrentes as $cpf => $conta){
    exibeConta($conta);
}
echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular'];?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: $<?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>