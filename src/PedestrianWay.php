<?php

require_once 'HighWay.php';
class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;


    public function addVehicle(Vehicle $notVehicle)
    {
        if ($notVehicle instanceof Bicycle) {
            $this->setCurrentVehicle($notVehicle);
            echo 'Vélo et skate autorisé';
        } else {
         echo 'Vehicule non autorisé!';
        }
    }


}