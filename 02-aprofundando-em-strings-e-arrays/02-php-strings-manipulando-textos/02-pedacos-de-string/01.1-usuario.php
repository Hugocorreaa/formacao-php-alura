<?php 

$email = 'hugodemorais@live.com';

$posicaoDoArroba = strpos($email, '@');
$usuario = substr($email, 0, $posicaoDoArroba) . PHP_EOL;
$senha = '123';

echo substr($email, $posicaoDoArroba + 1 ) . PHP_EOL;
echo strlen($senha) . PHP_EOL;

if (strlen($senha) < 8){
    echo 'Senha insegura';
}


?>