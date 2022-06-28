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

titularComLetrasMaiusculas($contasCorrentes['011']);


foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem(
        str_repeat("-=", 20) . PHP_EOL . "CPF: $cpf" . PHP_EOL . "Nome: " . $conta['titular'] . PHP_EOL . "Saldo: $" . $conta['saldo']
    );    
}
