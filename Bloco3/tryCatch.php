<?php

$dividendo = 2;
$divisor = 0;

// Tratando erros com Try Catch

try {
    // Comando que você deseja executar, mas que pode falhar

    $quociente = $dividendo / $divisor;
}
catch (Throwable $t){
    // O que fazer em caso de falha
    echo "Um erro ocorreu ";

    // A variável $t da linha 13, armazena o log do erro. POdemos exibila com a função var_dump()
    var_dump($t);
}