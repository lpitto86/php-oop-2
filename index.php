<?php
require_once __DIR__ . './models/products.php';
require_once __DIR__ . './models/toys.php';
require_once __DIR__ . './models/food.php';
require_once __DIR__ . './models/dogbed.php';
require_once __DIR__ . './models/user.php';
require_once __DIR__ . './models/creditCard.php';

$dateNow = new DateTime("2024-12-25");
$userCreditCard = new CreditCard('AB328947DS', 550 , $dateNow);
$user = new User('ciao', 'ciao', 'ciao', $userCreditCard);
$cart = [];

//var_dump($user);

try {
    $toysOne = new Toys('Gioco Rinfrescante ghiacciolo','./img/Karlie-Fill-N-Freeze-Gioco-Rinfrescante-ghiacciolo-per-Cane.jpg', 8 , 1 , 4 ,'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, nisi, doloremque assumenda ipsam officia possimus ipsa unde nulla architecto labore temporibus voluptate beatae id vel quod minima, nostrum eligendi porro.
    ', 3 ,'plastica', true);
    //var_dump($toysOne);

    $productsArray[] = $toysOne;
    $cart[] = $toysOne;

}
catch(Exception $e){
    echo $e->getMessage() .'<h4>Valore errato</h4>';
} 

try {
$foodOne = new Food('Vaschette Manzo','./img/vaschette_dog_300_manzo__1.jpg', 2 , 1 , 4 ,'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, nisi, doloremque assumenda ipsam officia possimus ipsa unde nulla architecto labore temporibus voluptate beatae id vel quod minima, nostrum eligendi porro.
', 3 ,'24/07/2024', 'manzo', 20);
//var_dump($foodOne);

$productsArray[] = $foodOne;
$cart[] = $foodOne;


}
catch(Exception $e){
    echo $e->getMessage() .'<h4>Valore errato</h4>';
} 


try{
$dogbedOne = new DogBed('Cuccia per gatti in plastica','./img/cuccia-per-cani-domus-in-plastica-da-esterno-ricovero-per-cani-trattato-con-impregnanti-ecologici.jpg', 25 , 0 , 4 ,'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, nisi, doloremque assumenda ipsam officia possimus ipsa unde nulla architecto labore temporibus voluptate beatae id vel quod minima, nostrum eligendi porro.
', 3 ,'stoffa', '20cm');
//var_dump($foodOne);

$productsArray[] = $dogbedOne;

}
catch(Exception $e){
    echo $e->getMessage() .'<h4>Valore errato</h4>';
} 




//var_dump($productsArray);

function payByCard($user)
{
    $today = new DateTime();

    if ($user->creditCard->expireDate < $today) {
        echo 'Carta di credito scaduta';
    } else {
        echo 'Pagamento riconosciuto';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Arca Planet</title>
</head>
<body>
    <header>
        <h1>
            Arca Planet
        </h1>
    </header>

    <main>
        <div class="container">
            <div class="d-flex flex-wrap">

            <?php
                if($user->nickname != null && $user->password != null && $user->email != null) {
                    foreach ($productsArray as $key => $singleProduct) {
                        $singleProduct->price = $singleProduct->price * 0.8;
                    };
                };
            ?>

            <?php
             foreach ($productsArray as $key => $singleProduct) { ?>

                <div class="card-product">
                    <div class="frame">
                        <img src="<?php echo $singleProduct->imgUrl ?>" alt="">
                    </div>
                    <div class="info">
                        <h3 class="m-0">
                            <?php echo $singleProduct->name ?>
                        </h3>
                        <h4>
                            <?php
                                if($singleProduct->category == 1){
                                    echo '<i class="fa-solid fa-dog m-3"></i>';
                                }else{
                                    echo '<i class="fa-solid fa-cat m-3"></i>';
                                }
                            ?>
                        </h4>
                        
                        <h3 class=" text-success ">
                            <?php echo $singleProduct->price.'€' ?>
                        </h3>
                        <div class="button-cart">
                            Add to Cart
                        </div>

                        <p>
                            <?php echo $singleProduct->description ?>
                        </p>
                    </div>
                </div>

            <?php } ?>              
            
            </div>
        </div>
    </main>
</body>
</html>