<?php
$str="<br/>STRING";

echo "<br/>STRING";

echo $str;

echo strMinusculo($str);
echo $str;

function strMinusculo($str){
	
	$s = $str;
	
	$s = strtolower($s);
	
	return $s ;
}



//nunca esquecer de declarar o valor da variável exemplo: $str="string";
