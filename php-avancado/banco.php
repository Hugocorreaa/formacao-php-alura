<?php

function sacar($conta, $valorASacar){
    if ($valorASacar > $conta['saldo']){
        exibeMensagem( $conta['titular'] . ", você não pode sacar este valor");
    }else{
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '011.206.458-21' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '012.206.458-21' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ], 
    '013.206.458-21' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


$contasCorrentes['011.206.458-21'] = sacar($contasCorrentes['011.206.458-21'], 500);

$contasCorrentes['012.206.458-21'] = sacar($contasCorrentes['012.206.458-21'], 500);





foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem(str_repeat("-=", 20) . PHP_EOL . "CPF: $cpf" . PHP_EOL . "Nome: " . $conta['titular'] . PHP_EOL . "Saldo: $" . $conta['saldo']);    
}
