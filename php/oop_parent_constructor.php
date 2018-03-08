<?php
// FIXME: This code does not works yet...
require_once "./oop_parent_constructor_name.php";
require_once "./oop_parent_constructor_extended_name.php";

use phptutorial\ExtendedName as ExtendedName;

$m = new ExtendedName('my', 'mid', 'name');
print($m->toString());
