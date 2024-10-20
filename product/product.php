<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>SuperGlobals Practices</title>
</head>

<body>
    <?php

    $products = [
        "electronics" => "Product 1 details: A cool Product",
        "furniture" => "Product 2 details: Another cool Product",
        "food" => "Product 3 details: Again Another cool Product",
        "mobile" => "Product 4 details: This is moble Product"
    ];

    // var_dump($_GET);

    if (isset($_GET['category'])) {
        $productId = $_GET['category'];

        if (isset($products[$productId])) {
            echo "<h1>Product Details</h1>";
            echo "<h4>" . $products[$productId] . "</h4>";
        } else {
            echo "<h1>No Product found . </h1>";
        }
    } else {
        echo "<h1>No Product selected . </h1>";
    };

    ?>
</body>

</html>