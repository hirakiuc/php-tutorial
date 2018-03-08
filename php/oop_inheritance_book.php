<?php
namespace phptutorial;

class Book
{
    private $price;
    private $title;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function setPrice($par)
    {
        $this->price = $par;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setTitle($par)
    {
        $this->title = $par;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
