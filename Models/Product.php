<?php

class Product
{
    public $name;
    public $animal;
    public $price;
    public $info;
    public $img;

    public function __construct($name, $animal, $price)
    {
        $this->name = $name;
        $this->animal = $animal;
        $this->price = $price;
    }

    // Setter
    function set_name($name)
    {
        $this->name = $name;
    }

    function set_animal($animal)
    {
        $this->animal = $animal;
    }

    function set_price($price)
    {
        $this->price = $price;
    }

    function set_info($info)
    {
        $this->info = $info;
    }

    function set_img($img)
    {
        $this->img = $img;
    }

    // Getter
    function get_name()
    {
        echo $this->name;
    }

    function get_animal()
    {
        echo $this->animal;
    }

    function get_price()
    {
        echo $this->price;
    }

    function get_info()
    {
        echo $this->info;
    }

    function get_img()
    {
        echo $this->img;
    }
}
