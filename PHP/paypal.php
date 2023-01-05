<?php
class paypal extends Payments{
    public $email;

    public function __construct($id, $email){
        parent::__construct($id);
        $this->email = $email;
    }
}
?>