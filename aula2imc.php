<?php

/*
escreva um código que calcule o IMC
para isso, precisaremos de 2 variáveis, peso e altura
o cálculo do IMC é feito com a seguinte fórmula:
IMC = peso / altura*altura
informar o IMC e o seu resultado
para:
IMC < 18.5 (abaixo do peso)
IMC >= 18.5 e IMC < 25 (peso ideal)
IMC >= 25 e IMC <= 30 (sobrepeso)
IMC > 30 (obesidade)
*/

$peso = 30;
$altura = 5;

$imc = $peso / ($altura*$altura);

echo "peso: ".$peso."<br>";
echo "altura: ".$altura."<br>";
echo "IMC: ".$imc."<br>";

if($imc<18.5){
    echo "abaixo do peso";
}
elseif(($imc>=18.5)&&($imc<25)){
    echo "peso ideal";
}
elseif(($imc>=25)&&($imc<=30)){
    echo "sobrepeso";
}
elseif($imc>30){
    echo "obesidade";
}

/*
i did this one all by myself :D
*/

?>