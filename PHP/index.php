<?php

include("Account.php");
include("Car.php");

echo 'Hola Mundo';

$car = new Car("FAA123", new Account("Faustina Angeles", "INE"));
$car->passenger = 4;
$car->printDataCar();

$car2 = new Car("RHA123", new Account("Rafael Hernandez", "INE"));
$car2->passenger = 3;
$car2->printDataCar();