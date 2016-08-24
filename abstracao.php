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
