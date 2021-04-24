<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function switchOn(bool $true): bool
    {
        if($this->setCurrentSpeed() >= 10){
            return true;
        }
    }
    public function switchOff(bool $false): bool
    {
        return false;
    }
}