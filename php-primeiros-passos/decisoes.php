<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, porém está acompanhado(a), então pode entrar.";
} else{
    echo "Você tem $idade anos. Não pode entrar!";
}


