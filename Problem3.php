<?php
require_once 'Problem1.php';

class Bus extends Vehicle {
    public function __construct($name, $speed, $mileage) {
        parent::__construct($name, $speed, $mileage);
    }
}
?>
