<?php

$contasCorrentes = [
    '025.206.458-21' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '025.203.458-21' => [
        'titular' => 'Maria',
        'saldo' => 100000
    ], 
    '025.206.578-21' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

//     para cada contacorrente com índice = cpf   valor = conta
foreach($contasCorrentes as $cpf => $conta){
    echo "CPF: " . $cpf . " de " . $conta['titular'] . PHP_EOL;
    
}
