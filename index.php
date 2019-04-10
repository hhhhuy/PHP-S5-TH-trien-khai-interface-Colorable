<?php

include_once "Square.php";
include_once "Rectangle.php";
$shapes[1] = new Rectangle('Rectangle 1', 6, 3);
$shapes[2] = new Square('Square 1',7,7,7);
foreach ($shapes as $shape) {
    echo $shape->name . "<br>" . "Area: " . $shape->calculateArea()  . "<br>";
    if ($shape instanceof Square) {
        echo $shape->howToColor();
    }
}