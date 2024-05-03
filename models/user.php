<?php

require_once __DIR__ . '/creditCard.php';

class User {
    public $nickname;
    public $password;
    public $email;
    public $creditCard;

    function setPass($password){
        $this->password = $password;
    }

    public function __construct(string $nickname = null, string $password = null, string $email = null, CreditCard $creditCard){
        $this->nickname = $nickname;
        $this->password = $password;
        $this->email = $email;
        $this->creditCard = $creditCard;
    }
}