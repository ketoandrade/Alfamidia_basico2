<?php
$v1=10;
$v2=20;

compara ($v1, $v2);

function compara ($v1,$v2){
    
    if($v1 == $v2){
        
      echo "V1 é igual a V2<br/>";  
    }
    if($v1 === $v2){
        
      echo "V1 é idêntico em valor e tipo a V2<br/>";  
    }
    if($v1 != $v2){
        
      echo "V1 não é igual a V2<br/>";  
    }
    if($v1 !== $v2){
        
      echo "V1 não é idêntico a V2<br/>";  
    }
    if($v1 > $v2){
        
      echo "V1 é maior a V2<br/>";  
    }
    if($v1 < $v2){
        
      echo "V1 é menor a V2<br/>";  
    }
    if($v1 >= $v2){
        
      echo "V1 é MAIOR ou igual a V2<br/>";  
    }
    if($v1 <= $v2){
        
      echo "V1 é MENOR ou igual a V2<br/>";  
    }
    if($v1 == $v2){
        
      echo "V1 é igual a V2<br/>";  
    }
}

