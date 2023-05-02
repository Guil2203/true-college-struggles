<?php

/* q.2: escreva um código que receba um valor inteiro e exiba a palavra "FPB" em order crescente de linhas e colunas*/
/*
ex:
$valor=5,
FPB
FPBFPB
FPBFPBFPB
FPBFPBFPBFPB
FPBFPBFPBFPBFPB
*/

$valor=5;
$nome="<br>FPB";
for ($i=0;$i<=$valor;$i++) {
    echo $nome;
    $nome.="FPB";
}


?>