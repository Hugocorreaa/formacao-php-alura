<?php

function sacar(array $conta, float $valorASacar)
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem( $conta['titular'] . ", você não pode sacar este valor!");
    }else{
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
};

function depositar(array $conta, float $valorADepositar)
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem($conta['titular'] . ", depósitos precisam ser positivos!");
    }
    
    return $conta;
};

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
};

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

$contasCorrentes['013.206.458-21'] = depositar($contasCorrentes['013.206.458-21'], 200);





foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem(str_repeat("-=", 20) . PHP_EOL . "CPF: $cpf" . PHP_EOL . "Nome: " . $conta['titular'] . PHP_EOL . "Saldo: $" . $conta['saldo']);    
}
