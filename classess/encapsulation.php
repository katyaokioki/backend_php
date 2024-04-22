<?php

class Cat {
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHello() {
        echo "Всем привет, котятки! Меня зовут {$this->name}, мой окрас - {$this->color}". "<BR>";
    }

    public function getColor() {
        return $this->color."<BR>";
    }
}

$cat1 = new Cat("Дымка", "серый");
$cat2 = new Cat("Инесса", "белый");

$cat1->sayHello();
$cat2->sayHello();

echo $cat1->getColor();
echo $cat2->getColor();
?>
