<?php
include "db.php";
include "includes/header.php";

// Fetch products from DB
$result = mysqli_query($conn, "SELECT * FROM tblproduct");
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<style>
body {
    font-family: Arial;
}

h2 {
    text-align: center;
    margin: 40px 0 20px;
}

.slider-container {
    max-width: 1000px;
    margin: auto;
    overflow: hidden;
    position: relative;
}

.slider {
    display: flex;
    transition: transform 0.5s ease;
}

.product {
    min-width: 250px;
    margin: 10px;
    border: 1px solid #ddd;
    text-align: center;
    padding: 15px;
    border-radius: 10px;
    background: #fff;
}

.product img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
}

.product h4 {
    margin: 10px 0 5px;
}

.nav {
    position: absolute;
    top: 40%;
    background: black;
    color: white;
    border: none;
    padding: 12px;
    cursor: pointer;
    z-index: 10;
    border-radius: 50%;
}

.prev { left: -10px; }
.next { right: -10px; }

button {
    background: #000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #2b1a0e;
}
</style>

<h2>Our Bestsellers</h2>

<div class="slider-container">
    <button class="nav prev" onclick="moveLeft()">❮</button>

    <div class="slider" id="slider">
        <?php foreach ($products as $p): ?>
            <div class="product">
                <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>">
                <h4><?= $p['name'] ?></h4>
                <p>₹<?= $p['price'] ?></p>

                <form method="post" action="cart.php">
                    <input type="hidden" name="product_id" value="<?= $p['id'] ?>">
                    <input type="hidden" name="product_name" value="<?= $p['name'] ?>">
                    <input type="hidden" name="price" value="<?= $p['price'] ?>">
                    <input type="hidden" name="image" value="<?= $p['image'] ?>">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

    <button class="nav next" onclick="moveRight()">❯</button>
</div>

<script>
let position = 0;
const productWidth = 270;
const slider = document.getElementById("slider");
const maxScroll = slider.scrollWidth - slider.parentElement.offsetWidth;

function moveRight() {
    if (position < maxScroll) {
        position += productWidth;
        slider.style.transform = `translateX(-${position}px)`;
    }
}

function moveLeft() {
    if (position > 0) {
        position -= productWidth;
        slider.style.transform = `translateX(-${position}px)`;
    }
}
</script>
