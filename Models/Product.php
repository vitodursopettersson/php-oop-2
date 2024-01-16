<?php

class Product
{
    public $name;
    public $animal;
    public $type;
    public $price;
    public $info;
    public $img;

    public function __construct($name, $animal, $type, $price, $info, $img)
    {
        $this->name = $name;
        $this->animal = $animal;
        $this->type = $type;
        $this->price = $price;
        $this->info = $info;
        $this->img = $img;
    }
}
