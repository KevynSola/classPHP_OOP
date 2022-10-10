<?php

require_once 'Vehicle.php';

class Objets extends Truck
{
    protected int $masse;

    public function __construct(int $masse)
    {
        $this->masse = $masse;
    }
    public function stock()
    {
       
    }
}