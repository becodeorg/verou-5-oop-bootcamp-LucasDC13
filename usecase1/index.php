<?php

declare(strict_types=1);

// // NO CLASSES
// $basket = [
//     ["category" => "Fruit", "name" => "banana", "price" => 1, "quantity" => 4, "tax" => 0.06],
//     ["category" => "Fruit", "name" => "apple", "price" => 1.5, "quantity" => 3, "tax" => 0.06],
//     ["category" => "Drinks", "name" => "bottle of wine", "price" => 10, "quantity" => 2, "tax" => 0.21]
// ];

// function generateCart($basket) {
//     $cartTotal = 0;
//     foreach ($basket as $item) {
//         echo "<p>" . $item['name'] . ' x' . $item['quantity'] . "</p>";
//         $itemTotal = $item['quantity']*$item['price'];
//         echo "<p>Item total = €" . $itemTotal . "</p>";
//         echo "<p>Tax = €" . $itemTotal*$item['tax'] . "</p>";
//         $cartTotal += $itemTotal;
//         echo "<hr>";
//     }
//     echo "<h1>Cart total: €" . $cartTotal . "</h1>";
// };

// generateCart($basket);

// WITH CLASSES
require_once "./classes/items.php";

$item1 = new Items("food", "banana", 1, 4);
$item2 = new Items("food", "apple", 1.5, 3);
$item3 = new Items("drinks", "bottle of wine", 10, 2);
$items = [$item1, $item2, $item3];
$cartTotal = 0;
$tax;
$priceMod;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks</title>
</head>
<body>
    <h1>Order:</h1>
    <?php foreach ($items as $item): ?>
        <?php if ($item->getCategory() === 'food') {
            $tax = 0.06;
            $priceMod = 0.5;
            echo "<p><strong>Fruit discount applied!</strong></p>";
        } else if ($item->getCategory() === 'drinks') {
            $tax = 0.21;
            $priceMod = 1;
        }
        $itemTotal = $item->getQuantity() * $item->getPrice() * $priceMod;
        echo "<p>" . $item->getQuantity() . "x " . $item->getName() . " totals: €" . $itemTotal . "</p>";
        echo "<p> Item tax = €" . $itemTotal*$tax . "</p>";
        $cartTotal += $itemTotal; ?>
        <hr>
    <?php endforeach; 
    echo "<h2> Total: €" . $cartTotal;
    ?>
</body>
</html>
