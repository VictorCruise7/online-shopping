<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Clothing Store - Fashion at Your Fingertips</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Shop the latest fashion trends at our online clothing store. Quality clothing at affordable prices.">
</head>
<body>
<div id="wrapper">

  <?php
  include "Header.php";
  ?>

  <div id="content">
    <!-- Hero Section -->
    <div class="hero-section fade-in">
      <div class="hero-content">
        <h1 class="hero-title">Welcome To Fashion Paradise</h1>
        <p class="hero-subtitle">Discover the latest trends in clothing. Quality meets affordability.</p>
        <a href="Products.php" class="hero-cta">Shop Now</a>
      </div>
    </div>

    <h2>Featured Categories</h2>
    
    <!-- Category Grid -->
    <div class="product-grid">
      <div class="category-card slide-in">
        <img src="img/Jeans.jpg" alt="Jeans Collection" />
        <div class="category-info">
          <h3 class="category-title">Jeans</h3>
          <p class="category-description">Explore our premium denim collection with the latest styles and fits.</p>
          <a href="Products.php?CategoryId=1" class="btn-add-cart">View Collection</a>
        </div>
      </div>

      <div class="category-card slide-in" style="animation-delay: 0.1s;">
        <img src="img/asd.jpg" alt="Blazers Collection" />
        <div class="category-info">
          <h3 class="category-title">Blazers</h3>
          <p class="category-description">Professional and stylish blazers for every occasion.</p>
          <a href="Products.php?CategoryId=2" class="btn-add-cart">View Collection</a>
        </div>
      </div>

      <div class="category-card slide-in" style="animation-delay: 0.2s;">
        <img src="img/images.jpg" alt="T-Shirts Collection" />
        <div class="category-info">
          <h3 class="category-title">T-Shirts</h3>
          <p class="category-description">Comfortable and trendy t-shirts for casual wear.</p>
          <a href="Products.php?CategoryId=3" class="btn-add-cart">View Collection</a>
        </div>
      </div>
    </div>

    <!-- Features Section -->
    <div style="margin-top: 3rem;">
      <h2>Why Shop With Us?</h2>
      <div class="product-grid">
        <div style="text-align: center; padding: 2rem; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%); border-radius: 1rem;">
          <div style="font-size: 3rem; margin-bottom: 1rem;">🚚</div>
          <h3 style="color: #667eea; margin-bottom: 0.5rem;">Free Shipping</h3>
          <p style="color: #718096;">On orders over $50</p>
        </div>

        <div style="text-align: center; padding: 2rem; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%); border-radius: 1rem;">
          <div style="font-size: 3rem; margin-bottom: 1rem;">💯</div>
          <h3 style="color: #667eea; margin-bottom: 0.5rem;">Quality Guaranteed</h3>
          <p style="color: #718096;">Premium materials only</p>
        </div>

        <div style="text-align: center; padding: 2rem; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%); border-radius: 1rem;">
          <div style="font-size: 3rem; margin-bottom: 1rem;">🔄</div>
          <h3 style="color: #667eea; margin-bottom: 0.5rem;">Easy Returns</h3>
          <p style="color: #718096;">30-day return policy</p>
        </div>
      </div>
    </div>
  </div>

  <div style="clear:both;"></div>
   <?php
 include "Footer.php";
 ?>
</div>
</body>
</html>
