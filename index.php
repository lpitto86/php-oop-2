<?php
    require __DIR__.'/db/db.php';
    require_once __DIR__.'/classes/product.php';
    require_once __DIR__.'/classes/food.php';
    require_once __DIR__.'/classes/dogbed.php';
    require_once __DIR__.'/classes/toys.php';

    // echo 'PRODOTTO SINGOLO';

    $productOne = new product('Prodotto', 'https://www.my-personaltrainer.it/2023/11/28/gatto-tabby_900x760.jpeg', 20, 'Cane', 100, 'lorem ipsum', 3);
    $products[] = $productOne;
    // var_dump($productOne);

    try{
        $testProductCategory = new product('Prodotto', 'https://www.my-personaltrainer.it/2023/11/28/gatto-tabby_900x760.jpeg', 20, 'pappagallo', 100, 'lorem ipsum', 3);
    } catch(Exception $e){
        echo '<h3 class="fw-bold text-center my-3" style="color: red;">'.$e->getMessage().'</h3>';
    }

    try{
        $testProductPrice = new product('Prodotto', 'https://www.my-personaltrainer.it/2023/11/28/gatto-tabby_900x760.jpeg', 'ciao', 'gatto', 100, 'lorem ipsum', 3);
    } catch(Exception $e){
        echo '<h3 class="fw-bold text-center my-3" style="color: red;">'.$e->getMessage().'</h3>';
    }

    try{
        $testProductRating = new product('Prodotto', 'https://www.my-personaltrainer.it/2023/11/28/gatto-tabby_900x760.jpeg', 20, 'Cane', 100, 'lorem ipsum', -1);
    } catch(Exception $e){
        echo '<h3 class="fw-bold text-center my-3" style="color: red;">'.$e->getMessage().'</h3>';
    }

    // echo '<hr>';

    // echo 'PRODOTTO CIBO';
    $foodProductOne = new food('Cibo', 'https://www.ilpapaverorossoweb.it/sites/default/files/field/image/alimenti-per-cani.jpg', 30, 'Cane', 300, 'lorem ipsum', 2, '05/11/1999', 'lamponi', 36);
    $products[] = $foodProductOne;
    // var_dump($foodProductOne);
    
    // echo '<hr>';

    // echo 'PRODOTTO CUCCIA';
    $dogbedProcutOne = new dogbed('Cuccia', 'https://www.madaitalia.com/ecommerce/wp-content/uploads/2019/10/Vendita-Cuccia-Imbottita-Cani-Gatti-Sweet.jpg', 40, 'Gatto', 5000, 'lorem ipsum', 4, 'Micro pile', '30,5 X 21,7 cm');
    $products[] = $dogbedProcutOne;
    // var_dump($dogbedProcutOne);
    
    // echo '<hr>';

    // echo 'PRODOTTO GIOCATTOLO';
    $toyProcutOne = new toy('Giocattolo', 'https://www.biancheriaweb.it/wp-content/uploads/2024/02/GIOCO_OSSO_BLU.jpg', 15, 'Gatto', 372, 'lorem ipsum', 5, 'Plastica', 'false');
    $products[] = $toyProcutOne;
    // var_dump($toyProcutOne);

    // echo'<hr>';

    // echo 'ARRAY COMPLETO';
    // var_dump($products);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Animal Shop</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
       <div class="container">
            
        <h1 class="text-center text-white my-4">Prodotti</h1>
        
        <div class="row">
            <div class="col-12 d-flex">
                <?php
                    foreach($products as $singleProduct){
                ?>
                <div class="card col-3 mx-2" style="width: 18rem;">
                    <img src="<?php echo $singleProduct->image?>" class="card-img-top h-100 object-fit-cover" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $singleProduct->name?></h5>
                        <ul class="card-text list-unstyled p-0">
                            <li>Prezzo: <?php echo $singleProduct->price?>€</li>
                            <li>Categoria: <?php echo $singleProduct->category?></li>
                            <li>Quantità: <?php echo $singleProduct->stock?></li>
                            <li>Descrizione: <?php echo $singleProduct->description?></li>
                            <li>Voti: <?php echo $singleProduct->ratings?></li>
                            <li>Classe: <?php echo get_class($singleProduct)?></li>
                            <?php
                                if (get_class($singleProduct) == 'toy') {
                            ?>
                                <li>
                                    Materiale: <?php echo $singleProduct->material; ?>
                                </li>
                            <?php
                                }
                                else if (get_class($singleProduct) == 'food') {
                            ?>
                                <li>
                                    Data di scadenza: <?php echo $singleProduct->expireDate; ?>
                                </li>
                            <?php
                                }
                                else if (get_class($singleProduct) == 'dogbed'){
                            ?>
                                <li>
                                    Dimensioni: <?php echo $singleProduct->size; ?>
                                </li>
                            <?php
                                }
                            ?>
                        </ul>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            
        </div>
       </div> 
    </body>
</html>