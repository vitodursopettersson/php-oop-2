<?php

class Food extends Product
{
    public $type = 'Food';
    public $expired_date;
    public $ingredients;
    public $quantity;


    // Setter
    public function set_type($type)
    {
        $this->type = $type;
    }

    public function set_expired_date($expired_date)
    {
        $this->expired_date = $expired_date;
    }

    public function set_ingredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function set_quantity($quantity)
    {
        $this->quantity = $quantity;
    }

    // Getter
    public function get_type()
    {
        return $this->type;
    }

    public function get_expired_date()
    {
        return $this->expired_date;
    }

    public function get_ingredients()
    {
        return $this->ingredients;
    }

    public function get_quantity()
    {
        return $this->quantity;
    }
}
