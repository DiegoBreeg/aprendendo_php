<?php
//O tipo bool tem apenas dois valores e é usado para expressas um valor de verdade.
//pode ser true ou false.

//Para especificar um bool literal, use as palavras-chave true ou false.
//Ambas são case-insensitive.

$foo = TRUE;
$bar = FaLsE;

//Tipicamente, o resultado de um operador que retorne um valor bool,
//é passado para uma estrutura de controle.

$action = "mostrar_versão";
if($action == "mostrar_versao") {
    echo "A versão é 1.23";
}

//isto não é necessário...
$exibir_separadores = true;
if($exibir_separadores == true) {
    echo "<hr>\n";
}

//... porque você pode simplesmente escrever isso:
if($exibir_separadores) {
    echo "<hr>\n";
}