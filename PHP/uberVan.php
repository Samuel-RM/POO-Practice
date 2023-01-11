<?php
require_once('car.php');
class UberVan extends Car{
    public $typeCarAccepted;
    public $material;
    protected $passenger;

    public function __construct($license, $dirver, $typeCarAccepted ,$model){
        parent::__construct($license,$dirver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->model = $model;

        }

        public function setpassenger($passenger){
            if($passenger == 6 ){
                $this->passenger = $passenger;
            }else{
                echo "Asigne 6 pasejeros porfavor";
            }
        }
    }
?>
