<?php
class MyClass {
  private $car = "skoda";
  var $driver = "SRK";

  function __constructor($par) {
  }

  function myPublicFunc() {
    return "I'm visible!";
  }

  private function myPrivateFunc() {
    return "I'm not visible outside.";
  }
}

$m = new MyClass();
$m->myPublicFunc();

try {
  $m->myPrivateFunc();
} catch (Error $e) {
  echo 'Uncaught exception : ' . $e->getMessage() . "\n";
}
?>
