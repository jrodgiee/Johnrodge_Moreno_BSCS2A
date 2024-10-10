<?php
require_once 'Problem1.php';

class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

    public function fare() {
        return 0;
    }
}

class Bus extends Vehicle {
    public function fare() {
        $capacity = $this->seating_capacity();
        $totalFare = $capacity * 100;
        $maintenanceCharge = $totalFare * 0.10;
        return $totalFare + $maintenanceCharge;
    }

    public function seating_capacity($capacity = 50) {
        return $capacity;
    }
}

$bus = new Bus("City Bus", 80, 15);
echo "The total fare for the bus is: " . $bus->fare();
?>
