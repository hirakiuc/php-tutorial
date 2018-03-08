<?php
namespace phptutorial;

class Name
{
    public $firstName;
    public $lastName;

    public function __constructor($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function toString()
    {
        return ($this->lastName . ", " . $this->firstName);
    }
}
