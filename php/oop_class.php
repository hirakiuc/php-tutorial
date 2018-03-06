<?php
class Book {
  var $price;
  var $title;

  function __construct($title, $price) {
    $this->title = $title;
    $this->price = $price;
  }

  function setPrice($par) {
    $this->price = $par;
  }

  function getPrice() {
    return $this->price;
  }

  function setTitle($par) {
    $this->title = $par;
  }

  function getTitle() {
    return $this->title;
  }
}

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
?>
