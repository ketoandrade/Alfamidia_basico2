<?php
$valores = array("String", 1234, array('a','b','c', array('1','2','3')));
$valores2 = ["String", 1234,['a',2,'c',[1,2,3]]];


echo $valores [2][2];// aqui ele busca o segundo da lista e o segundo dentro do (a,b,c)

echo "<br/>";

echo $valores2 [2][1];

echo "<br/>";

echo $valores1 [2][1][3];

echo "<br/>";

echo $valores2 [2][1][0];

echo "<br/>";

echo $valores2 [2][1];