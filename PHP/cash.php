<?php
require_once('payment.php');
class Card extends Payment {

    public function __construct($id){
        parent::__construct($id);
        
      }
}