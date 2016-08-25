<?php

Class Televisor  {
    
    public $voltagem;
    public $marca;
    public $tamanho;
    
    function ligar() {
        echo "A televisão $this->marca está ligada em voltagem $this->voltagem volts."
        . "<br/>Ela tem $this->tamanho polegadas<br/><br/><br/>";
        
    }
}

$obj1 = new Televisor;
$obj2 = new Televisor;
$obj3 = new Televisor;

$obj1->voltagem = "220v";
$obj1->marca = "LG";
$obj1->tamanho = "42";
$obj1->ligar();

$obj2->voltagem = "220v";
$obj2->marca = "samsung";
$obj2->tamanho = "38";
$obj2->ligar();

$obj3->voltagem = "220v";
$obj3->marca = "cce";
$obj3->tamanho = "40";
$obj3->ligar();
?>
