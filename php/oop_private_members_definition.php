<?php
namespace phptutorial;

class MyClass
{
    private $car = "skoda";
    private $driver = "SRK";

    public function __constructor($par)
    {
    }

    public function myPublicFunc()
    {
        return "I'm visible!";
    }

    private function myPrivateFunc()
    {
        return "I'm not visible outside.";
    }
}
