<?php
// FIXME: This code does not works yet...

class Name {
  var $firstName;
  var $lastName;

  function __constructor($firstName, $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  function toString() {
    return ($this->lastName . ", " . $this->firstName);
  }
}

class ExtendedName extends Name {
  var $middleName;

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
  function __constructor($firstName, $middleName, $lastName) {
    parent::__constructor($firstName, $lastName);
    $this->middleName = $middleName;
  }

  function toString() {
    return (Name::toString() . " " . $this->middleName);
  }
}

$m = new ExtendedName('my', 'mid', 'name');
print($m->toString());
?>
