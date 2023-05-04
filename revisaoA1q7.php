<?php

/* q.7: escreva um código que receba um valor inteiro
o transforme em anos e diga sua idade e informe se é ou não maior de idade 
para anos = 365 dias
*/

$dias = 20000;
$idade = ($dias/365);
echo number_format($idade)."<br>";
if ($idade >= 18) {
    echo "maior de idade!";}
else
    echo "não maior de idade!";

/* did this one by myself too hehe */

?>