<?php 

//get data from the form in index.html
$product_name = filter_input(INPUT_POST, 'product_name');
$price = filter_input(INPUT_POST, 'price');
$discount_percent = filter_input(INPUT_POST, 'discount_percent');

//calculate discount price
$discount = $price * $discount_percent * 0.01;
$discount_price = $price - $discount;

//apply currency and percent format
$price_formatted = "$" . number_format($price, 2);
$discount_percent_formatted = number_format($discount_percent, 1) . "%";
$discount_formatted = "$" . number_format($discount, 2);
$discount_price_formatted = "$" . number_format($discount_price, 2);

//escape the unformatted input to prevent JavaScript injection attack
$product_name_escaped = htmlspecialchars($product_name);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Discount Form</title>
</head>
<body>
    <h1>Discount</h1>

    <label>Product Name: </label>
    <span><?php echo $product_name_escaped ?></span>
    <br>

    <label>Price: </label>
    <span><?php echo $price_formatted ?></span>
    <br>

    <label>Discount: </label>
    <span><?php echo $discount_percent_formatted ?></span>
    <br>

    <label>Discount Amount: </label>
    <span><?php echo $discount_formatted ?></span>
    <br>

    <label>Discount Price: </label>
    <span><?php echo $discount_price_formatted ?></span>

    <!-- JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>