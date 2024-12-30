<?php
    echo "Hey there!<br>";
    echo "It's a good day!<br>";

    //Single Line comment

    /* Multi Line
       comment
    */

    $name = "Shah Sayem";
    echo "My name is $name<br>";

    $age = 24;
    echo "My age is $age<br>";

    $price = 20.5;
    echo "T-shirt price is \$$price<br>";

    $is_valid = true;
    $is_good = false;

    echo "Is Valid: $is_valid<br>"; //true => 1
    echo "Is good: $is_good<br>"; //false => "" (blank)

    $toal = null;
    $quantity = 5;
    $total = $price * $quantity;
    echo "You have ordered $quantity T-shirts. Total price is \$$total<br>";

    $a = 5;
    $b = 2;
    $c = null;

    //+, -, *, /, %, **
    //++, --, +=, -=, *=, /=, %=
                              //H  
    echo "The time is " . date("h:i:sa")."<br>"; 
    echo "The date is " . date("Y.m.d.l")."<br>"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <br>
    <button>Order Pizza</button>
</body>
</html>