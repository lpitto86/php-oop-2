<?php

require_once __DIR__ ."/category.php";

class Products {

    public $name;
    public $imgUrl;
    public $price;
    public $category;
    public $stock;
    public $description;
    public $rating;
    public $discount;

    public function __construct(
        string $name, 
        string $imgUrl, 
        $price, 
        int $category, 
        int $stock, 
        string $description = '', 
        int $rating = null,
        bool $discount = null,
    ) 
        {
            $this->name = $name;
            $this->imgUrl = $imgUrl;

            if(is_numeric($price)){

                $this->price = $price;

            }else{

                throw new Exception('Value is not a number');

            }
            $this->category = $category;
            $this->stock = $stock;
            $this->description = $description;
            $this->rating = $rating;
        }
}