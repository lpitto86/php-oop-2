<?php

class CreditCard {

    public $cardNumber;
    public $cardCode;
    public $expireDate;

    public function __construct(string $cardNumber,int $cardCode ,DateTime $expireDate) {
        
        $this->cardNumber = $cardNumber;

        if(is_numeric($cardCode)){
            $this->cardCode = $cardCode;    
        }else{
            throw new Exception('Value is not a number');
        }

        $this->expireDate = $expireDate;
    }
    
}