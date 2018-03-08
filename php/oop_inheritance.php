<?php
require_once("./oop_inheritance_book.php");
require_once("./oop_inheritance_novel.php");

use phptutorial\Novel as Novel;

$novel = new Novel('My Novel', 100);
$novel->setPublisher('myself');

print($novel->getTitle());
print($novel->getPrice());
print($novel->getPublisher());
