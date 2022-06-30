<?php 

// # Listas/Array

$idadeList = [21, 33, 19, 25, 30, 41, 18];
$cidadeList = array("Macapá", "Belém", "Manaus");



list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
echo $idadeMaria . PHP_EOL;


unset($idadeList[2]);


// - Acessar valores da lista/array

$primeiraIdade = $idadeList[0];

echo $primeiraIdade . PHP_EOL;
