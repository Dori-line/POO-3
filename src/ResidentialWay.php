<?php

require_once 'HighWay.php';
class ResidentialWay extends HighWay
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    public function addVehicle(Vehicle $all_vehicle)
    {
        if ($all_vehicle instanceof Vehicle) {

            $this->setCurrentVehicle($all_vehicle);
            echo 'Passez tous!';
        }
    }
}