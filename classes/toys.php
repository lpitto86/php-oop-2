<?php
    class product{
        public $name;
        public $image;
        public $price;
        public $category;
        public $stock;
        public $description;
        public $ratings;

        function __construct(
            string $name, 
            string $image, 
            $price, 
            string $category,
            int $stock,
            string $description = 'Not found',
            $ratings = null
            )
        {
            $this->name = $name;
            $this->image = $image;
            if (is_numeric($price)){
                $this->price = $price;
            }else{
                throw new Exception('Errore! Inserisci un valore numerico.');
            }
            
            if(($category == 'Cane' || $category == 'cane') || ($category == 'Gatto' || $category == 'gatto')){
                $this->category = $category;
            }else{
                throw new Exception('Errore! Inserisci una categoria valida tra cane e gatto.');
            }
            
            $this->stock = $stock;
            $this->description = $description;
            
            if($ratings > -1 && $ratings <= 5 && is_numeric($ratings)){
                $this->ratings = $ratings;
            }else{
                throw new Exception('Errore! Inserisci un valore numerico tra 1 e 5.');
            }
        }
    }
?>