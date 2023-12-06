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

//Convertendo para booleano
//para converter explicitamente um valor em bool, use a conversão (bool).
//Geralmente isso não é necessário porque quando um valor é usado em um contexto lógico
// ele será automaticamente interpretado como um valor do tipo bool.

//Ao converter para bool, os seguintes valores são considerados false:
//o próprio booleano false
//o inteiro 0
//os pontos flutuantes 0.0 e -0.0
//uma string vazia "", e a string "0"
//um array sem elementos
//o tipo especial NULL (incluindo variáveis não definidas)
//Objetos internos que sobrecarregam seu comportamento de conversão para bool...
//... Por exemplo: Objetos SimplesXML criados a partir de elementos vazios sem atributos.

//Todos os outros valores são considerados true (incluindo resource e NAN)

var_dump((bool) "");
var_dump((bool) "0");
var_dump((bool) 1);
var_dump((bool) -2);
var_dump((bool) "foo");
var_dump((bool) 2.3e5);
var_dump((bool) array(12));
var_dump((bool) array());
var_dump((bool) "false");