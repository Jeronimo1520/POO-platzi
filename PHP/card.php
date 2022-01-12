<?php
require_once('payment.php');
class Card extends Payment {
    public $number;
    public $cvv;
    public $date;

    public function __construct($number, $cvv, $date, $id){
        parent::__construct($id);
        $this->number = $number;
        $this->cvv = $cvvv;
        $this->date = $date;
      }
}