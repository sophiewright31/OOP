<?php
require_once ('HighWay.php');

final class PedestrianWay extends HighWay
{

    public function __construct()
    {
        $this->nbLane=1;
        $this->maxSpeed=10;
    }


    public const ALLOWED_VEHICLES = [
        'Bicycle',
        'Skateboard',
    ];

    public function addVehicle(Vehicle $vehicle):string
    {

        foreach (self::ALLOWED_VEHICLES as $type){
            if ($vehicle instanceof $type) {
                $this->setCurrentVehicles($vehicle);
                return("Vehicle added");
            }
        }
        return("Vehicle not added");

    }
}