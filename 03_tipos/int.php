<?php
//Um int é um número do conjunto z={..., -2, -,1, 0, 1, 2, ...}.

//Int pode ser especificado em notação decimal (base 10),
//Hexadecimal (base 16), octal (base 8) ou  binário (base 2).
//O operador de negação pode ser usado para indicar um int negativo.

//Para usar a notação octal, preceda o número com um 0.
//A partir do PHP 8.1.0, a notação octal tambpem pode ser precedida por 0o ou 0O.
//Para utilizar a notação hexadecimal, preceda o número com 0x.
//Para utilizar a notação binária, preceda o número com 0b.

//A partir do php 7.4.0, inteiros literais podem conter sublinhados (_)...
//... entre os dígitos, para melhorar sua leitura.
//Estes sublinhados serão removidos pelo scanner do PHP.

$a = 1234;
$a = 0123;
$a = 0o123;
$a = 0x1A;
$a = 0b11111111;
$a = 1_234_567;

/* Formalmente, a estrutura para literais int é a partir do PHP 8.1.0
(anteriormente, os prefixos octal e 0o ou 0O não eram permitidos,
e antes do PHP 7.4.0 os sublinhados não eram permitidos)
*/

/* O tamanho de um int depende da plataforma, embora um valor máximo
de cerca de dois bilhões seja o valor usual (são 32bits assinados).
As plataformas de 64 bits geralmente têm um valor máximo de cerca de 9E18.
O PHP não suporta int não assidados. O tamanho int pode ser determinado usando
a constante PHP_INT_SIZE, o valor máximo usando a constante PHP_INT_MAX
e o valor mínimo usando a constante PHP_INT_MIN.
*/

/* Overflow de inteiros
    Se o PHP encontrar um número além dos limites do tipo int, ele será
    interpretado como um float. Assim, uma operação que resulte em um número
    além dos limites do tipo int, retornará um float.
 */

 $large_number = 2147483647;
 var_dump( $large_number);

 $large_number = 2147483648;
 var_dump( $large_number);

 $million = 1000000;
 $large_number = 50000 * $million;
 var_dump($large_number);