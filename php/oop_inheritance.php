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

class Novel extends Book {
  var $publisher;

  function setPublisher($par) {
    $this->publisher = $par;
  }

  function getPublisher() {
    return $this->publisher;
  }
}

$novel = new Novel('My Novel', 100);
$novel->setPublisher('myself');

print($novel->getTitle());
print($novel->getPrice());
print($novel->getPublisher());
?>
