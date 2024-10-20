<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>products</title>
</head>

<body>

    <?php
    $test = "My name is {$_GET['name']} and age is {$_GET['age']}";
    echo $test;
    echo '<br>';

    function text_func()
    {
        return $GLOBALS['test'];
    };

    echo "This is from funtction " . text_func();



    ?>






    <ul>
        <li><a href="product.php?category=electronics">Electronics</a></li>
        <li><a href="product.php?category=furniture">Furniture</a></li>
        <li><a href="product.php?category=food">Food</a></li>
        <li><a href="product.php?category=mobile">Mobile</a></li>
    </ul>

</body>

</html>