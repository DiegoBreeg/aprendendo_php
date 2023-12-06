<?php
$a_bool = true; // um valor boleano
$a_string = "foo"; //um texto
$a_string2 = 'foo'; //um texto
$an_inteiro = 12; //um inteiro

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_string), "\n";

//se essa variável conter um inteiro, aumente o número por quatro
if(is_int($an_inteiro)) {
    $an_inteiro += 4;
}
var_dump($an_inteiro);

//se $a_bool for um texto, imprima
if(is_string($an_inteiro)) {
    echo "String: $a_bool";
}
