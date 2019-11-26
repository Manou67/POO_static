<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Bike extends Vehicle implements LightableInterface
{
    public function __construct(string $color)
    {
        $this->color = $color;
    }


    public function switchOn()
    {
        if ($this->currentSpeed > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff()
    {
        return false;
    }
}