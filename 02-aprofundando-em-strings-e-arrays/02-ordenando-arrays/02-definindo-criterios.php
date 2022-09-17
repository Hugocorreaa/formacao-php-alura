<?php

$notas = array(
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
);


function ordenaNotas(array $nota1, array $nota2){
    if ($nota1['nota'] > $nota2['nota']){
        return -1;
    }
    if ($nota2['nota'] > $nota1['nota']){
        return 1;
    }

    return 0;
    
};

usort($notas, "ordenaNotas");
var_dump($notas);


?>