<?php

class Car {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    function __construct($license, $driver) {
        $this->license = $license;
        $this->driver = $driver;
    }

    function printDataCar() {
        echo '<p>License: '. $this->license.'</p>';
        echo '<p>Driver Name: '. $this->driver->name.'</p>';
        echo '<p>Driver Document: '. $this->driver->document.'</p>';
    }
}