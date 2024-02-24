<?php

$dogs_category = new Category('dogs');
$cats_category = new Category('cats');

$all_products = array();

try {
    $dentastix = new Food(137, 'Dentastix', 17.99, 'Daily oral care', 'Pedigree', $dogs_category, './img/dogs_dentastix.jpg', 'snack', 'cereals, meat', '7%', '1.8%', '0.69%', '0.58%', '0.99%', '14%');
    $all_products[] = $dentastix;
} catch (Exception $e) {
    echo '' . $e->getMessage() . '';
}

try {
    $fruugo_bone = new Game(455, 'Chewing dog toy', 14.95, '
Two whistles are placed on both ends of the toy', 'Fruugo', $dogs_category, './img/dogs_game.jpg', 'A game to let off steam', 'every age', 'bone', 'plastic');
    $all_products[] = $fruugo_bone;
} catch (Exception $e) {
    echo '' . $e->getMessage() . '';
}

try {
    $zooplus_special_cats_kennel = new Kennel(13, 'Special cats kennel', 39.99, 'Cat kennel in soft synthetic fur externally covered with resistant fabric', 'Zooplus', $cats_category, './img/cats_kennel.jpg', 'crib', 'L 54 x P 48 x H 11 cm', 'high', '8kg');
    $all_products[] = $zooplus_special_cats_kennel;
} catch (Exception $e) {
    echo '' . $e->getMessage() . '';
}