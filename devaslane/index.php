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

<!-- ================= Feedback Section ================= -->

<style>
/* ===== Feedback Section Styling ===== */

.feedback-section {
    background: #f9f7f5;
    padding: 80px 20px;
    display: flex;
    justify-content: center;
}

.feedback-container {
    background: #ffffff;
    padding: 50px 40px;
    width: 100%;
    max-width: 650px;
    border-radius: 14px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
}

.feedback-container h2 {
    text-align: center;
    margin-bottom: 35px;
    font-size: 30px;
    font-weight: 600;
    color: #111;
    letter-spacing: 1px;
}

.form-group {
    margin-bottom: 22px;
}

.form-group label {
    display: block;
    font-weight: 500;
    margin-bottom: 8px;
    color: #333;
    font-size: 14px;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 14px;
    border: 1px solid #ddd;
    border-radius: 10px;
    font-size: 14px;
    transition: 0.3s ease;
    background: #fafafa;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #c5a880;
    background: #fff;
    outline: none;
    box-shadow: 0 0 10px rgba(197, 168, 128, 0.3);
}

.feedback-btn {
    width: 100%;
    padding: 15px;
    background: #000;
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s ease;
    letter-spacing: 1px;
}

.feedback-btn:hover {
    background: #c5a880;
    color: #000;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
    .feedback-container {
        padding: 30px 20px;
    }

    .feedback-container h2 {
        font-size: 24px;
    }
}
</style>


<section class="feedback-section">
    <div class="feedback-container">
        <h2>We Appreciate Your Feedback</h2>

        <form action="feedback.php" method="POST">

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="user_name" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="user_email" required>
            </div>

            <div class="form-group">
                <label>Feedback Type</label>
                <select name="feedback_type">
                    <option value="compliment">Compliment</option>
                    <option value="suggestion">Suggestion</option>
                    <option value="bug">Bug Report</option>
                    <option value="complaint">Complaint</option>
                </select>
            </div>

            <div class="form-group">
                <label>Comments</label>
                <textarea name="user_review" rows="4" required></textarea>
            </div>

            <button type="submit" class="feedback-btn">
                Submit Feedback
            </button>

        </form>
    </div>
</section>


<?php include 'includes/footer.php'; ?>




