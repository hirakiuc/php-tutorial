<?php
require_once "./oop_static_keyword_definition.php";

use phptutorial\Foo as Foo;

print Foo::$my_static . "\n";
$foo = new Foo();
print $foo->staticValue() . "\n";
