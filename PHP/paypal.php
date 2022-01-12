<?php
require_once('payment.php');
class Card extends Payment {
    public $email;


    public function __construct($email,$id){
        parent::__construct($id);
        $this->email = $email;
        
      }
}