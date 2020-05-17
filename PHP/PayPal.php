<?php
class PayPal extends Payment{
    public $email;

    function __construct($id, $email) {
        parent::__construct($id);
        $this->email = $email;
    }
}