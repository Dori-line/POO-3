<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = ['electric', 'diesel'];

    private $stockCap;
    private $charged;
    private $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCap)
    {
        parent::__construct($color, $nbSeats);
        $this->stockCap= $stockCap;
        $this->energy = $energy;

    }

    public function isFull(){
        if ($this->charged >=$this->stockCap){
            $this->charged = $this->stockCap;
            return "full";
        } else {
            return "in filling";
        }
    }

    public function setCharged(int $charged): void
    {
        $this->charged = $charged;
    }

    public function getCharged(int $int): int
    {
        return $this->charged;

    }


}