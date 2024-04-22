<?php

interface CalculateSquare {
    public function calculateArea();
}

class Rectangle implements CalculateSquare {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

class Other {
    private $item;

    public function __construct($item) {
        $this->item = $item;
    }
 
}

function printArea($object) {
    if ($object instanceof CalculateSquare) {
        echo "Площадь объекта класса " . get_class($object) . " равна " . $object->calculateArea() . "<BR>";
    } else {
        echo "Объект класса " . get_class($object) . " не реализует интерфейс CalculateSquare.<br>";
    }
}

$rectangle = new Rectangle(5, 3);
$other = new Other(7);

printArea($rectangle);
printArea($other);
?>
