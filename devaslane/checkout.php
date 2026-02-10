<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
<title>Checkout | DevasLane</title>
<link rel="stylesheet" href="css/checkout.css">
</head>
<body>

<h2>Your Cart</h2>

<?php if (empty($cart)) { ?>
    <p>Your cart is empty 🛒</p>
<?php } else { ?>

<table border="1" cellpadding="10">
<tr>
    <th>Product</th>
    <th>Price</th>
    <th>Qty</th>
    <th>Total</th>
</tr>

<?php foreach ($cart as $item) {
    $itemTotal = $item['price'] * $item['qty'];
    $total += $itemTotal;
?>
<tr>
    <td><?= $item['name'] ?></td>
    <td>₹<?= $item['price'] ?></td>
    <td><?= $item['qty'] ?></td>
    <td>₹<?= $itemTotal ?></td>
</tr>
<?php } ?>

<tr>
    <td colspan="3"><strong>Grand Total</strong></td>
    <td><strong>₹<?= $total ?></strong></td>
</tr>
</table>

<br>
<a href="place_order.php">Place Order</a>

<?php } ?>

</body>
</html>
