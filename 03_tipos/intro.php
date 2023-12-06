<?php
$a_bool = true;
$a_string = "foo";
$a_string2 = 'foo';
$an_inteiro = 12;

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_string), "\n";

if(is_int($an_inteiro)) {
    $an_inteiro += 4;
}
var_dump($an_inteiro);