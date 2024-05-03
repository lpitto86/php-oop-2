<?php

require_once __DIR__ . '/products.php';

class Food extends Products {
    public $expireDate;
    public $flavor;
    public $kg;

    public function __construct(
        $name, 
        $imgUrl, 
        $price, 
        $category, 
        $stock, 
        $description, 
        $rating,
        string $expireDate,
        string $flavor,
        int $kg,
    ) {
        parent::__construct(
            $name, 
            $imgUrl, 
            $price, 
            $category, 
            $stock, 
            $description, 
            $rating
        );

        $this->expireDate = $expireDate;
        $this->flavor = $flavor;
        $this->kg = $kg;
    }
}