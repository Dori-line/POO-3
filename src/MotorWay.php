<?php

require_once 'HighWay.php';
class MotorWay extends HighWay
{
    public $nbLane = 4;
    public $maxSpeed = 130;

    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->setCurrentVehicle($vehicle);
            echo 'Accès permis';
        }else {
            echo 'Interdit!';
        }

    }


}