<?php
namespace phptutorial;

use phptutorial\BaseClass as BaseClass;

class ChildClass extends BaseClass
{
    public function moreTesting()
    {
        echo "ChildClass::moreTesting() called\n";
    }
}
