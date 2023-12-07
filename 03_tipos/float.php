<?php
/* Números de ponto flutuante (também conhecidos como "floats", "doubles"
    ou "números reais") podem ser especificados utilizando qualquer uma das
    seguintes sintaxes:
 */

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567;

/*  Se a string é numérica ou começa numérica então ela irá
    resolver para um valor float correspondente, do contrário ela é 
    convertida em zero.

    Para valores de outros tipos, a conversão é realizada convertendo
    o valor para int primeiro e em seguida para float.

    Como notado acima, testar números de ponto flutuante com igualdade
    é problemático, por causa da maneira como são representados internamente.
    Entretanto existem maneiras de fazer comparações com números de
    ponto flutuante que contornam essas limitações.

    Para testar números de ponto flutuante, utilize um "valor de erro
    máximo" na comparação utilizada. Esse valor é também chamado de
    epsilon, ou unidade de erro, e deve ser a diferença mínima aceitável
    no resultado dos cálculos.

    se $a e $b são considerados iguais até o 5° dígito de precisão.
 */

$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo "iguais";
}

