<?php
class Kennels extends Product
{
    public $materials;
    public $dimensions;
    public $weight;

    // Setter
    public function set_materials($materials)
    {
        $this->materials = $materials;
    }

    public function set_dimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

    public function set_weight($weight)
    {
        $this->weight = $weight;
    }

    // Getter
    public function get_materials()
    {
        return $this->materials;
    }

    public function get_dimensions()
    {
        return $this->dimensions;
    }

    public function get_weight()
    {
        return $this->weight;
    }
}
