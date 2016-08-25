<?php
define("MIN", 0);
define("MAX", getrandmax());
$x = rand(MIN,MAX);
$y = rand(MIN,MAX);
if (($x % 2 == 0) && ($y % 2 == 0)) {

    echo "a variável $x é par";
} elseif (($x % 2 == 0) && ($y % 2 == 1)) {

    echo "a variável $x é par é o valor $y é impar";
} elseif (($x % 2 == 1) && ($y % 2 == 0)) {

    echo "a variável $x é impar é o valor $y é par";
} else {

    echo "as variaveis $x e $y são impares";
}



