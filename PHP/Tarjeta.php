<?php
class Tarjeta extends Payment{
    public $number;
    public $cvv;
    public $date;

    function __construct($id, $number, $cvv, $date) {
        parent::__construct($id);
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }
}