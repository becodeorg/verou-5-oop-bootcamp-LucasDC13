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
    <?php $itemTotal = $item->getQuantity() * $item->getPrice(); ?>
    <p><?= $item->getQuantity() . "x " . $item->getName() . " totals: €" . $itemTotal; ?></p>
    <p><?php $tax;
        if ($item->getCategory() === 'food') {
            $tax = 0.06;
        } else if ($item->getCategory() === 'drinks') {
            $tax = 0.21;
        }
        echo "<p> Item tax = €" . $itemTotal*$tax . "</p>";
    $cartTotal += $itemTotal; ?>
    <hr>
    <?php endforeach; 
    echo "<h2> Total: €" . $cartTotal;
    ?>


</body>
</html>