<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("account.php");
require_once("uberVan.php");

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
// $uberX->setpassenger(4);
$uberX->printDataCar();

$uberPool = new UberPool(" TYU567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
// $uberPool->setpassenger(4);
// ALgo ocurre aqui que no imprime UberPool, alguna imcompatibilidad con prinDataCar
$uberPool->printDataCar();

$uberVan = new uberVan("ODOK", new Account("Andres ", "ANDRA"),"Nissan" , "Versa");
$uberVan->setpassenger(6);
$uberVan->printDataCar();   


?>
<!-- php -S localhost:8080 index.php -->


