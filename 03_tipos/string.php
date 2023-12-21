<?php
$s = "pensamentos não autorizados";
echo "os sonhos são como $s";

class Pessoa {
    public $john = "João Silva";
    public $jane = "Jane Smith";
}

$pessoa = new pessoa();

echo $pessoa->john;

class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->bar}\n";
echo "{$foo->{$baz[1]}}";