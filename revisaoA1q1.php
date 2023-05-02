<?php

/* q.1: escreva um código que receba um número inteiro e faça a soma de todos os valores anteriores a ele*/

/*
ex:
$valor=5
1+2+3+4+5=15
*/

$valor=5;
$i=1;

for ($i=1;$i<=$valor;$i++) {
    $soma=$i;
    echo "result:".$soma."<br>";
}

?>