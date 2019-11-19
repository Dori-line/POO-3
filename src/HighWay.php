<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicle=[];
    /**
     * @var int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;

    public function __construct($nbLane,$maxSpeed)
    {
        $this->nbLane=$nbLane;
        $this->maxSpeed=$maxSpeed;
    }

    /**
     * @return array
     */
    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }

    /**
     * @param array $currentVehicle
     * @return HighWay
     */
    public function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle[] = $currentVehicle;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     * @return HighWay
     */
    public function setNbLane(int $nbLane): HighWay
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     * @return HighWay
     */
    public function setMaxSpeed(int $maxSpeed): HighWay
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}