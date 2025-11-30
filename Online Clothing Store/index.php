<?php require_once('session_check.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VictorCruise Fashion - Premium Online Clothing Store</title>
    <meta name="description" content="Discover the latest fashion trends. Shop premium jeans, blazers, and t-shirts at unbeatable prices.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <div class="logo">Online Shop Fashion</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Products.php">Shop</a></li>
                    <li><a href="Cart.php">Cart <span id="cart-count">(0)</span></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Fashion That Defines You</h1>
            <p>Discover premium clothing that combines style, comfort, and affordability. Your perfect outfit is just a click away.</p>
            <a href="Products.php" class="cta-button">Shop Now →</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Why Choose Us</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🚚</div>
                    <h3>Free Shipping</h3>
                    <p>Enjoy free shipping on all orders above $50. Fast and reliable delivery to your doorstep.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💎</div>
                    <h3>Premium Quality</h3>
                    <p>Handpicked collection of high-quality fabrics and materials. Style that lasts.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3>Secure Payment</h3>
                    <p>Shop with confidence. Your transactions are protected with industry-standard encryption.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">↩️</div>
                    <h3>Easy Returns</h3>
                    <p>Not satisfied? Return within 30 days for a full refund. No questions asked.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <h2 class="section-title">Shop By Category</h2>
            <div class="category-grid">
                <div class="category-card">
                    <img src="img/Jeans.jpg" alt="Jeans Collection" class="category-image">
                    <div class="category-overlay">
                        <h3>Jeans</h3>
                        <p>Premium denim collection with latest styles</p>
                        <a href="Products.php?category=jeans" class="category-link">Explore →</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="img/asd.jpg" alt="Blazers Collection" class="category-image">
                    <div class="category-overlay">
                        <h3>Blazers</h3>
                        <p>Professional blazers for every occasion</p>
                        <a href="Products.php?category=blazers" class="category-link">Explore →</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="img/images.jpg" alt="T-Shirts Collection" class="category-image">
                    <div class="category-overlay">
                        <h3>T-Shirts</h3>
                        <p>Comfortable and trendy casual wear</p>
                        <a href="Products.php?category=tshirts" class="category-link">Explore →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Online Shop Fashion. All rights reserved.</p>
            <p style="margin-top: 1rem; opacity: 0.6;">Premium Online Clothing Store</p>
        </div>
    </footer>
    <script>
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const count = cart.reduce((acc, item) => acc + item.quantity, 0);
            document.getElementById('cart-count').innerText = `(${count})`;
        }
        updateCartCount();
    </script>
</body>
</html>
