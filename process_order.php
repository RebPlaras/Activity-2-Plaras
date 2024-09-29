<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $food = $_POST['menu'];
    $quantity = (int)$_POST['quantity'];
    $cash = (float)$_POST['cash'];


    $price = $_SESSION['prices'][$food];


    $total = $price * $quantity;
    $change = $cash - $total;

    $timestamp = date("Y-m-d H:i:s");

    if ($cash < $total) {
        echo "<h1>Sorry, your payment is not enough :(</h1>";
    } else {
        // Display reciept 
        echo "<h1>Receipt</h1>";
        echo "<p><b>Food:</b> $food</p>";
        echo "<p><b>Quantity:</b> $quantity</p>";
        echo "<p><b>Total Price:</b> $total</p>";
        echo "<p><b>Cash Paid:</b> $cash</p>";
        echo "<p><b>Change:</b> $change</p>";
        echo "<p><b>Timestamp:</b> $timestamp</p>";
    }
} else {
    echo "Invalid request method.";
}
?>
