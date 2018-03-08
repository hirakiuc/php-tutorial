<?php
namespace phptutorial;

function getImagePath($num, $basePath = "./images/")
{
    switch ($num) {
        case 1:
            return $basePath . "dummy_100x100.png";
            break;
        case 2:
            return $basePath . "dummy_200x200.png";
            break;
        case 3:
            return $basePath . "dummy_300x300.png";
            break;
        case 4:
            return $basePath . "dummy_600x600.png";
            break;
        default:
            return $basePath . "dummy_100x100.png";
    }
}
