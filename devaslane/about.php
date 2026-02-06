<?php
include 'includes/header.php';
$pageTitle = "About Us | DevasLane";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $pageTitle ?></title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/about.css">
</head>

<body>

<!-- HERO -->
<section class="about-hero">
  <h1>About DevasLane</h1>
  <p>Where tradition meets modern fashion</p>
</section>

<!-- ABOUT CONTENT -->
<section class="about-content">
  <div class="about-text">
    <h2>Our Story</h2>
    <p>
      DevasLane was founded with a vision to bring together elegance, culture,
      and modern fashion under one roof. We believe fashion is not just about
      clothing — it’s about expressing identity, confidence, and style.
    </p>

    <p>
      From contemporary outfits to timeless ethnic designs, DevasLane curates
      collections that celebrate individuality and craftsmanship.
    </p>
  </div>

  <div class="about-image">
    <img src="images/about-fashion.jpg" alt="DevasLane Fashion">
  </div>
</section>

<!-- MISSION & VISION -->
<section class="mission">
  <div class="mission-box">
    <h3>Our Mission</h3>
    <p>
      To empower people through fashion by delivering high-quality,
      affordable, and trend-driven apparel.
    </p>
  </div>

  <div class="mission-box">
    <h3>Our Vision</h3>
    <p>
      To become a globally loved fashion brand that blends tradition,
      innovation, and sustainability.
    </p>
  </div>
</section>

<!-- VALUES -->
<section class="values">
  <h2>Why Choose DevasLane?</h2>

  <div class="value-grid">
    <div class="value-card">Premium Quality</div>
    <div class="value-card">Timeless Designs</div>
    <div class="value-card">Affordable Luxury</div>
    <div class="value-card">Customer First</div>
  </div>
</section>

</body>
</html>
