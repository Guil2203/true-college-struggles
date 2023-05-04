<?php

/* q.6: escreva um código que receba o valor de um produto comprado por um cliente, 
faça a divisão desse valor em 12 vezes e adicione 1% do valor em cada parcela.
mostre o valor das parcelas e valor total que será pago (holy Shit) */

/* $valorPago = 1200;
$valorParcela = (($valorPago / 0.01) * 100 );
$valorTotal = ;
$divisao = ( ($valorPago / 12) + ( ($valorPago / 0.01) * 100 ) );
echo $divisao; */

/* yea idk this one */

$valor=1200;
$juros=$valor*0.12;
$valor_total=$valor+$juros;
$parcelas=$valor_total / 12;
echo $valor_total."<br>";
echo $parcelas;

?>