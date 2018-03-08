<?php
namespace phptutorial;

class Novel extends Book
{
    private $publisher;

    public function setPublisher($par)
    {
        $this->publisher = $par;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }
}
