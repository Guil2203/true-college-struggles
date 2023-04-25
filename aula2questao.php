<?php

/*
escreva um código que receba uma variável inteira, 
caso esse valor seja positivo, imprimir na tela todos os números anteriores a ele,
se o valor for ímpar, imprimir "o valor é ímpar"
*/

$valor = 21;

if ($valor % 2 == 0) {
    for ($i=0; $i < $valor; $i++) {

        echo $i."<br>";
    }
} else {
    echo "o valor é ímpar";
}

?>