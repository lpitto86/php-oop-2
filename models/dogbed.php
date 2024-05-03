<?php

require_once __DIR__ . '/products.php';
require_once __DIR__ . '/../traits/hasMaterial.php';


class DogBed extends Products {
    use HasMaterial;
    public $size;

    public function __construct(
        $name, 
        $imgUrl, 
        $price, 
        $category, 
        $stock, 
        $description, 
        $rating,
        string $material,
        string $size,
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

        $this->material = $material;
        $this->size = $size;
    }
}