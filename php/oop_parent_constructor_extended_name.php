<?php
namespace phptutorial;

class ExtendedName extends Name
{
    public $middleName;

    /**
     * This constructor definition is cause of Error
     *
     * PHP Warning:  Declaration of ExtendedName::__constructor($firstName, $middleName, $lastName)
     * should be compatible with Name::__constructor($firstName, $lastName) in
     * /Users/hirakiuc/repos/src/github.com/hirakiuc/php_tutorial/php/oop_parent_constructor.php on line 27
     *
     * Warning: Declaration of ExtendedName::__constructor($firstName, $middleName, $lastName)
     * should be compatible with Name::__constructor($firstName, $lastName) in
     * /Users/hirakiuc/repos/src/github.com/hirakiuc/php_tutorial/php/oop_parent_constructor.php on line 27
     */
    public function __constructor($firstName, $middleName, $lastName)
    {
        parent::__constructor($firstName, $lastName);
        $this->middleName = $middleName;
    }

    public function toString()
    {
        return (Name::toString() . " " . $this->middleName);
    }
}
