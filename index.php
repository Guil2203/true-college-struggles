<?php
/*localhost/guirib/index.php*/
$variavel = 10;
$variavel2 = "hey :)";

echo $variavel."<br>";
echo $variavel2."<br>";

if ($variavel < 20){
    echo "less than 20";
} else {
    echo "bigger than 20";
}

echo "<br><br>";
echo "using For:<br>";
for($i=0; $i<=10; $i++) {
    echo $i." ";
}

echo "<br><br>";
echo "using While:<br>";

$j = 0;
while($j <= 10) {
    echo $j." ";
    $j++;
}
echo "<br><br>";
echo "usando do While<br>";
$k = 0;
do {
    echo "hey ";
    $k++;
} while($k <= 10);

echo "<br><br>";
echo "usando switch case<br>";

$switch = 1;
switch ($switch) {
    case 1: echo "number 1"
        break;
    
    default:
        echo "not the informed value"
        break;
}

?>