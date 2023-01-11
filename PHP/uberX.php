<?php
require_once('car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license,$driver);
        $this->brand = $brand;
        $this->model = $model;
    }
    public function PrintDataCar(){
        echo"
        License: $this->license
        driver: {$this->driver->name} 
        Modelo: $this->model
        Marca: $this->brand 
        ";
      }


}
?>