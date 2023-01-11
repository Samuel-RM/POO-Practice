<?php
require_once('account.php');
class Car {
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }
    public function printDataCar() {
        echo "<br>
            Licencia: $this->license 
            Driver: {$this->driver->name} 
            Número de pasajeros: $this->passenger
            
    
        ";
    }

    public function getpassenger() {
        return $this->passenger;
    }

    public function setpassenger($passenger) {
        if(passenger == 4){
            $this->passenger = $passenger;
        }else{
            echo "Nesecitas un 4 pasajeros";
        }
}
}
?>