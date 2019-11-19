<?php
require_once '../src/Bicycle.php';
require_once '../src/Car.php';
require_once '../src/Truck.php';
require_once '../src/PedestrianWay.php';
require_once '../src/ResidentialWay.php';
require_once '../src/MotorWay.php';
require_once '../src/HighWay.php';

/*$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle); */

$car = new Car('green', 4, 'electric');
$tesla = new Car('blouge', 5, 'hybride');
$bike = new Bicycle('black', 2);




$cargo = new MotorWay(4,130);
$cargo->addVehicle($bike);
echo '<br>';
$cargo->addVehicle($tesla);



$road = new PedestrianWay(2, 20);
echo '<br>';
$road->addVehicle($bike);
echo '<br>';
$road->addVehicle($tesla);

$residence = new ResidentialWay(4, 30);
echo '<br>';
$residence->addVehicle($bike);
echo '<br>';
$residence->addVehicle($tesla);









/*
$truck = new Truck('yellow', 4, 'electric', 200);


echo $truck->forward();
echo $truck->brake();
echo "<br>";
$truck->setCharged(201);
echo $truck->isFull();
echo "<br>";

*/





















/*
$duster = new Car('red',4,'full');
// Moving duster
echo $duster->forward();
echo '<br> Vehicle speed : ' . $duster->getCurrentSpeed(). ' km/h' . '<br>';
echo $duster->brake();
echo '<br> Vehicle speed : ' . $duster->getCurrentSpeed(). ' km/h' . '<br>';
echo $duster->brake();













//----------------------------------------------------------------------------------------------------------------
$bike = new Bicycle();
var_dump($bike);
$bike->dump();

$bike->setColor('blue');
$bike->setCurrentSpeed(10);
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();

*/

