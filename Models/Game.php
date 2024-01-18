<?php

class Game extends Product
{
    public $materials;

    // Setter
    public function set_materials($materials)
    {
        $this->materials = $materials;
    }

    // Getter
    public function get_materials()
    {
        return $this->materials;
    }
}
