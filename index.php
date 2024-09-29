<?php

session_start();

//hashmap (menuitems:price)
$_SESSION['prices'] = [
    'ice_cream' => 150,
    'brownies' => 100,
    'donuts' => 120,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order System</title>
    <style>
        table {
            width: 10%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Food Ordering System</h1>

    <h3>Menu</h3>
    <table>
        <thead>
            <tr>
                <th>Food</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ice Cream</td>
                <td>150</td>
            </tr>
            <tr>
                <td>Brownies</td>
                <td>100</td>
            </tr>
            <tr>
                <td>Donuts</td>
                <td>120</td>
            </tr>
        </tbody>
    </table>
    <br>

    <form action="process_order.php" method="POST">
        <label for="menu">Select Food:</label>
        <select name="menu" id="menu">
            <option value="ice_cream">Ice Cream</option>
            <option value="brownies">Brownies</option>
            <option value="donuts">Donuts</option>
        </select><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required><br><br>

        <label for="cash">Cash Amount:</label>
        <input type="number" name="cash" id="cash" required><br><br>

        <input type="submit" value="Place Order">
    </form>
</body>
</html>
