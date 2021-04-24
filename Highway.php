<?php
abstract class Highway
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    public function getCurrentVehicles():void
    {
        if(isset($this->currentVehicles)){
            var_dump($this->currentVehicles);
        }else{
            echo 'No Vehicle here';
        }

    }

    public function setCurrentVehicles(Vehicle $vehicle):void
    {
        $this->currentVehicles[]=$vehicle;
    }

    public function getNbLane():int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $number):void
    {
        $this->nbLane=$number;
    }

    public function getMaxSpeed():int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $speed):void
    {
        $this->maxSpeed=$speed;
    }

    abstract public function addVehicle(Vehicle $vehicle):string;
}