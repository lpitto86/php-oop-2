<?php
    require_once __DIR__.'/product.php';
    require_once __DIR__.'/../traits/HasMaterials.php';

    class dogbed extends product{
        use HasMaterial;
        public $size;
        
        function __construct
        (
            $name, 
            $image, 
            $price,
            $category, 
            $stock, 
            $description,
            $ratings,
            string $material, 
            string $size 
        )
        {
            parent::__construct
            (
                $name, 
                $image, 
                $price,
                $category, 
                $stock, 
                $description,
                $ratings
            );
            $this->material = $material;
            $this->size = $size;
        }
    }
?>