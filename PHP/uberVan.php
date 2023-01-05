<?php
require_once('car.php');
class UberVan extends Car{
    public $typeCarAccepted;
    public $material;

    public function __construct($license, $dirver, $typeCarAccepted ,$model){
        parent::__construct($license,$dirver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->model = $model;

        }
    }
?>
