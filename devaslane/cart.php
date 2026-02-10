<?php
session_start();

if (isset($_POST['add_to_cart'])) {

    $id = $_POST['product_id'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty'] += 1;
    } else {
        $_SESSION['cart'][$id] = [
            'name' => $_POST['product_name'],
            'price' => $_POST['price'],
            'image' => $_POST['image'],
            'qty' => 1
        ];
    }

    header("Location: checkout.php");
}
?>
