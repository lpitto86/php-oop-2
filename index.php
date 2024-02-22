<?php
require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/product_subclasses/food.php";
require_once __DIR__ . "/product_subclasses/game.php";
require_once __DIR__ . "/product_subclasses/kennel.php";
require_once __DIR__ . "/products.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP OOP 2</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css" />

  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <div class="container">
      <h1>
        DOG CAT WORLD
      </h1>
    </div>
  </header>
  <main>
    <div class="container d-flex">
      <?php
      foreach ($all_products as $product) {
        ?>
        <div class="card ms-2 me-2" style="width: 18rem;">
          <?php
          if ($product->category->name == "dogs") {
            ?>
            <h3 class="text-end"><i class="fa-solid fa-dog"></i></h3>
            <?php
          } else if ($product->category->name == "cats") {
            ?>
              <h3 class="text-end"><i class="fa-solid fa-cat"></i></h3>
          <?php } ?>
          <img src=<?php echo $product->img ?> class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $product->name ?>
            </h5>
            <p class="card-text">
              <?php echo $product->description ?>
            </p>
            <h5>€
              <?php echo $product->price ?>
            </h5>
            <?php
            if (get_class($product) == "Food") {
              ?>
              <p>Ingredients:
                <?php echo $product->ingredients ?>
              </p>
              <p>Proteins:
                <?php echo $product->proteins ?>
              </p>
              <p>Fats:
                <?php echo $product->fats ?>
              </p>
              <p>Calcium:
                <?php echo $product->calcium ?>
              </p>
              <p>Phosphorus:
                <?php echo $product->phosphorus ?>
              </p>
              <p>Magnesium:
                <?php echo $product->magnesium ?>
              </p>
              <p>Humidity:
                <?php echo $product->humidity ?>
              </p>
              <?php
            }
            ?>
            <?php
            if (get_class($product) == "Game") {
              ?>
              <p>Shape:
                <?php echo $product->shape ?>
              </p>
              <p>Material:
                <?php echo $product->material ?>
              </p>
            <?php } ?>
            <?php
            if (get_class($product) == "Kennel") {
              ?>
              <p>Size:
                <?php echo $product->size ?>
              </p>
              <p>Softness:
                <?php echo $product->softness ?>
              </p>
            <?php } ?>
          </div>
        </div>
        <?php
      } ?>
    </div>
  </main>
  <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>

</html>