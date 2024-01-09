<?php

declare(strict_types=1);

$basket = [
    ["category" => "Fruit", "name" => "banana", "price" => 1, "quantity" => 4],
    ["category" => "Fruit", "name" => "apple", "price" => 1.5, "quantity" => 3],
    ["category" => "Drinks", "name" => "bottle of wine", "price" => 10, "quantity" => 2]
];

function generateCart() {
    $cartTotal = 0;
    foreach ($basket as $item) {
        echo $item['name'] . ' x' . $item['quantity'];
        $itemTotal = $item['quantity']*$item['price'];
        echo "Item Total = €" . $itemTotal;
        $cartTotal += $itemTotal;
    }
};

generateCart($basket);


// require_once "./classes/fruits.php";

// $fruit1 = new Fruit("banana", 1);
// $fruit2 = new Fruit("apple", 1.5);
// $drink1 = new Drink("bottle of wine", 1O);

require "view.php";