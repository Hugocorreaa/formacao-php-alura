<?php

$idade = 21;

// ** Diferença entre áspas simples e duplas

//== Áspas simples:
echo 'Olá mundo! Minha idade é $idade', PHP_EOL;

    // Concatenação
echo 'Olá mundo! Minha idade é ' . $idade, PHP_EOL;
echo 'Olá mundo! Minha idade é ' . $idade . ' anos', PHP_EOL;

//== Áspas duplas
echo "Olá mundo! Minha idade é $idade anos.\n";
echo "\n";
echo "\tOlá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos.";
