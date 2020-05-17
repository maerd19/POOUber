<?php
require_once("Account.php");
require_once("Car.php");
require_once("UberX.php");
require_once("UberPool.php");

$uberX = new uberX("FAA123", new Account("Faustina Angeles", "INE"), "Mazda", "CX-5");
$uberX->printDataCar();

$uberPool = new uberPool("IHA123", new Account("Ivan Hernandez", "INE"), "Chevrolet", "Corsa");
$uberPool->printDataCar();