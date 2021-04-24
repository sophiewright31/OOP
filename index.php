<?php

require_once 'Car.php';

$carHandbrakeOn = new Car ('pink',2,'oil');
$car = new Car('green',5,'fuel');

try{
    $carHandbrakeOn->start();
} catch (Exception $e) {
    echo 'remove handbrake';
    $carHandbrakeOn->setHasParkBrake();
} finally {
    echo 'Ma voiture roule comme un donut';
}

$car->setHasParkBrake();

try{
    $car->start();
} catch (Exception $e) {
    echo 'remove handbrake';
    $car->setHasParkBrake();
} finally {
    echo 'Ma voiture roule comme un donut';
}
