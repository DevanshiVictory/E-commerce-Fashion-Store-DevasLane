<?php
$pageTitle = "DevasLane – Elevate Your Style";
include 'includes/header.php';
?>

<section class="hero">
  <div class="hero-text">
    <h1>
      Elevate<br>
      Your Style,<br>
      Inspire<br>
      Your Soul
    </h1>

    <p>
      Discover minimalist designs that empower and uplift
      your wardrobe with effortless elegance and timeless comfort.
    </p>

    <a href="category.php" class="cta">Explore Collection</a>
  </div>

  <div class="hero-image">
    <img src="images/hero.jpg" alt="Fashion">
  </div>
</section>
<?php
$products = [
    ["name"=>"Satin Evening Gown", "price"=>820, "img"=>"images/p1.png"],
    ["name"=>"Minimal Saree Dress", "price"=>520, "img"=>"images/p2.png"],
    ["name"=>"Royal Yellow Dress", "price"=>740, "img"=>"images/p4.png"],
    ["name"=>"Champagne Silk Gown", "price"=>960, "img"=>"images/p5.png"],
    ["name"=>"Champagne Silk Gown", "price"=>960, "img"=>"images/p4.png"],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Product Slider</title>

    <style>
        body {
            font-family: Arial;
        }

        .slider-container {
            width: 100%;
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
            padding: 10px;
        }

        .product img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .nav {
            position: absolute;
            top: 40%;
            background: black;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
        }

        .prev { left: 0; }
        .next { right: 0; }
    </style>
</head>
<body>

<h2 style="text-align:center">Our BestSellers</h2>

<div class="slider-container">
    <button class="nav prev" onclick="moveLeft()">❮</button>

    <div class="slider" id="slider">
        <?php foreach($products as $p): ?>
            <div class="product">
                <img src="<?= $p['img'] ?>">
                <h4><?= $p['name'] ?></h4>
                <p>₹<?= $p['price'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <button class="nav next" onclick="moveRight()">❯</button>
</div>

<script>
let position = 0;

function moveRight() {
    const slider = document.getElementById("slider");
    position += 270;
    slider.style.transform = "translateX(-" + position + "px)";
}

function moveLeft() {
    const slider = document.getElementById("slider");
    position -= 270;
    if (position < 0) position = 0;
    slider.style.transform = "translateX(-" + position + "px)";
}
</script>

</body>
</html>


<?php include 'includes/footer.php'; ?>




