<?php

$altura = str_replace(',','.',(string)readline("Digite sua altura: "));
$altura = (float)$altura;


$peso = readline("Digite seu peso: ");

$imc = number_format($peso/$altura**2,2); 

if ($imc < 18.5){
    echo str_repeat("-=", 20) . PHP_EOL;
    echo "Seu IMC é: $imc" . PHP_EOL . "Você está abaixo do peso!" . PHP_EOL;
    echo str_repeat("-=", 20) . PHP_EOL;
}else if ($imc <= 24.9 && $imc >= 18.5){
    echo str_repeat("-=", 20) . PHP_EOL;
    echo "Seu IMC é: $imc" . PHP_EOL . "Você está com peso normal!" . PHP_EOL;
    echo str_repeat("-=", 20) . PHP_EOL;
}else if ($imc <= 29.9 && $imc >= 25){
    echo str_repeat("-=", 20) . PHP_EOL;
    echo "Seu IMC é: $imc" . PHP_EOL . "Você está acima do peso (sobrepeso)!" . PHP_EOL;
    echo str_repeat("-=", 20) . PHP_EOL;
}else if ($imc <= 34.9 && $imc >= 30){
    echo str_repeat("-=", 20) . PHP_EOL;
    echo "Seu IMC é: $imc" . PHP_EOL . "Você está com Obesidade I!" . PHP_EOL;
    echo str_repeat("-=", 20) . PHP_EOL;
}else if ($imc <= 39.9 && $imc >= 35){
    echo str_repeat("-=", 20) . PHP_EOL;
    echo "Seu IMC é: $imc" . PHP_EOL . "Você está com Obesidade II!" . PHP_EOL;
    echo str_repeat("-=", 20) . PHP_EOL;
}else if ($imc >= 40){
    echo str_repeat("-=", 20) . PHP_EOL;
    echo "Seu IMC é: $imc" . PHP_EOL . "Você está com Obesidade III!" . PHP_EOL;
    echo str_repeat("-=", 20) . PHP_EOL;
}