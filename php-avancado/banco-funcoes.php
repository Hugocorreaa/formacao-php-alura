<?php


function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem( $conta['titular'] . ", você não pode sacar este valor!");
    }else{
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
};

function depositar($conta, $valorADepositar)
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem($conta['titular'] . ", depósitos precisam ser positivos!");
    }
    
    return $conta;
};

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
};

function titularComLetrasMaiusculas(&$conta)
{
   $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta($conta)
{
    echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
}