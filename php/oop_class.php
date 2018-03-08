<?php
//require("./oop_class_definition.php");
use phptutorial\Book as Book;

$physics = new Book('Physics for High School', 10);
//$physics->setTitle('Physics for High School');
//$physics->setPrice(10);
print($physics->getTitle());
print($physics->getPrice());

$maths = new Book('Algebra', 15);
//$maths->setTitle('Algebra');
//$maths->setPrice(15);
print($maths->getTitle());
print($maths->getPrice());

$chemistry = new Book('Advanced Chemistry', 7);
//$chemistry->setTitle('Advanced Chemistry');
//$chemistry->setPrice(7);
print($chemistry->getTitle());
print($chemistry->getPrice());
