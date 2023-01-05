<?php
class card extends Payments{
    public $cvv;
    public $dateCard;
    public $numberCard;
  
    
    public function __construct($id, $cvv, $dateCard, $numberCard){
        parent::__construct($id);
        $this->cvv = $cvv;
        $this->dateCard = $dateCard;
        $this->numberCard = $numberCard;
    }
    
}
?>