<?php
require_once "./oop_private_members_definition.php";

use phptutorial\MyClass as MyClass;

$m = new MyClass();
$m->myPublicFunc();

try {
    $m->myPrivateFunc();
} catch (Error $e) {
    echo 'Uncaught exception : ' . $e->getMessage() . "\n";
}
