<?php require_once('session_check.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - VictorCruise Fashion</title>
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

    <!-- Main Content -->
    <div class="container">
        <h1 class="page-title">Our Collection</h1>
        <p class="page-subtitle">Discover premium clothing that defines your style</p>

        <!-- Filter Bar -->
        <div class="filter-bar">
            <button class="filter-btn active" onclick="filterProducts('all')">All Products</button>
            <button class="filter-btn" onclick="filterProducts('jeans')">Jeans</button>
            <button class="filter-btn" onclick="filterProducts('blazers')">Blazers</button>
            <button class="filter-btn" onclick="filterProducts('tshirts')">T-Shirts</button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid" id="productsGrid">
            <?php
            // Hardcoded products array
            $products = [
                [
                    'id' => 1,
                    'name' => 'Classic Blue Jeans',
                    'category' => 'jeans',
                    'description' => 'Comfortable slim-fit blue jeans made from premium denim. Perfect for casual and semi-formal occasions.',
                    'size' => 'M',
                    'price' => 53.99,
                    'original_price' => 59.99,
                    'discount' => '10% OFF',
                    'stock' => 'In Stock',
                    'image' => 'product/jeans.jpg'
                ],
                [
                    'id' => 2,
                    'name' => 'Black Denim Jeans',
                    'category' => 'jeans',
                    'description' => 'Stylish black denim with stretch fabric for maximum comfort and flexibility throughout the day.',
                    'size' => 'L',
                    'price' => 55.24,
                    'original_price' => 64.99,
                    'discount' => '15% OFF',
                    'stock' => 'In Stock',
                    'image' => 'https://www.freepik.com/premium-photo/stack-clothes-white-background-closeup_6547253.htm#fromView=search&page=1&position=10&uuid=eddcf3cc-0f06-4b89-ac37-84f87192eedd&query=jeans'
                ],
                [
                    'id' => 3,
                    'name' => 'Navy Business Blazer',
                    'category' => 'blazers',
                    'description' => 'Professional navy blazer perfect for office wear. Tailored fit with premium fabric for a sharp look.',
                    'size' => 'M',
                    'price' => 103.99,
                    'original_price' => 129.99,
                    'discount' => '20% OFF',
                    'stock' => 'In Stock',
                    'image' => '🧥'
                ],
                [
                    'id' => 4,
                    'name' => 'Gray Casual Blazer',
                    'category' => 'blazers',
                    'description' => 'Versatile gray blazer suitable for any occasion. Modern cut with comfortable fabric blend.',
                    'size' => 'L',
                    'price' => 107.99,
                    'original_price' => 119.99,
                    'discount' => '10% OFF',
                    'stock' => 'In Stock',
                    'image' => '🧥'
                ],
                [
                    'id' => 5,
                    'name' => 'White Cotton T-Shirt',
                    'category' => 'tshirts',
                    'description' => 'Premium 100% cotton basic tee. Soft, breathable, and perfect for everyday wear.',
                    'size' => 'M',
                    'price' => 24.99,
                    'original_price' => 24.99,
                    'discount' => '',
                    'stock' => 'In Stock',
                    'image' => '👕'
                ],
                [
                    'id' => 6,
                    'name' => 'Graphic Print T-Shirt',
                    'category' => 'tshirts',
                    'description' => 'Trendy graphic design tee with modern prints. Express your style with this statement piece.',
                    'size' => 'L',
                    'price' => 28.49,
                    'original_price' => 29.99,
                    'discount' => '5% OFF',
                    'stock' => 'In Stock',
                    'image' => '👕'
                ],
                [
                    'id' => 7,
                    'name' => 'Ripped Denim Jeans',
                    'category' => 'jeans',
                    'description' => 'Trendy ripped jeans with distressed details. Perfect for a casual, edgy look.',
                    'size' => 'M',
                    'price' => 62.99,
                    'original_price' => 69.99,
                    'discount' => '10% OFF',
                    'stock' => 'In Stock',
                    'image' => 'https://www.freepik.com/premium-photo/stack-clothes-white-background-closeup_6547253.htm#fromView=search&page=1&position=10&uuid=eddcf3cc-0f06-4b89-ac37-84f87192eedd&query=jeans'
                ],
                [
                    'id' => 8,
                    'name' => 'Burgundy Blazer',
                    'category' => 'blazers',
                    'description' => 'Stand out with this rich burgundy blazer. Perfect for special occasions and events.',
                    'size' => 'XL',
                    'price' => 134.99,
                    'original_price' => 149.99,
                    'discount' => '10% OFF',
                    'stock' => 'Limited Stock',
                    'image' => '🧥'
                ],
                [
                    'id' => 9,
                    'name' => 'V-Neck T-Shirt Pack',
                    'category' => 'tshirts',
                    'description' => 'Pack of 3 premium v-neck t-shirts in assorted colors. Essential wardrobe staples.',
                    'size' => 'M',
                    'price' => 44.99,
                    'original_price' => 54.99,
                    'discount' => '18% OFF',
                    'stock' => 'In Stock',
                    'image' => '👕'
                ]
            ];

            // Display products
            foreach ($products as $product) {
                // Handle image display (emoji vs URL)
                $imageDisplay = '';
                if (strpos($product['image'], 'http') === 0 || strpos($product['image'], '/') !== false) {
                    $imageDisplay = '<img src="' . $product['image'] . '" alt="' . $product['name'] . '" style="width:100%; height:100%; object-fit:cover;">';
                } else {
                    $imageDisplay = $product['image'];
                }

                echo '<div class="product-card" data-category="' . $product['category'] . '">';
                echo '  <div class="product-image">' . $imageDisplay . '</div>';
                echo '  <div class="product-info">';
                echo '    <div class="product-category">' . strtoupper($product['category']) . '</div>';
                echo '    <h3 class="product-name">' . $product['name'] . '</h3>';
                echo '    <p class="product-description">' . $product['description'] . '</p>';
                echo '    <div class="product-meta">';
                echo '      <span class="product-size">Size: ' . $product['size'] . '</span>';
                echo '      <span class="product-stock">' . $product['stock'] . '</span>';
                echo '    </div>';
                echo '    <div class="product-pricing">';
                echo '      <span class="product-price">$' . number_format($product['price'], 2) . '</span>';
                if ($product['original_price'] > $product['price']) {
                    echo '      <span class="product-original-price">$' . number_format($product['original_price'], 2) . '</span>';
                }
                if ($product['discount']) {
                    echo '      <span class="product-discount">' . $product['discount'] . '</span>';
                }
                echo '    </div>';
                // Pass all product data to JS
                $productJson = htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8');
                echo "    <button class='add-to-cart-btn' onclick='addToCart($productJson)'>Add to Cart</button>";
                echo '  </div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Online Shop Fashion. All rights reserved.</p>
    </footer>

    <script>
        function filterProducts(category) {
            const cards = document.querySelectorAll('.product-card');
            const buttons = document.querySelectorAll('.filter-btn');
            
            // Update active button
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            // Filter products
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function addToCart(product) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            
            // Check if item exists
            const existingItem = cart.find(item => item.id === product.id);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    image: product.image,
                    size: product.size,
                    quantity: 1
                });
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            
            // Visual feedback
            const btn = event.target;
            const originalText = btn.innerText;
            btn.innerText = 'Added ✓';
            btn.style.background = '#28a745';
            setTimeout(() => {
                btn.innerText = originalText;
                btn.style.background = '';
            }, 1500);
        }

        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const count = cart.reduce((acc, item) => acc + item.quantity, 0);
            document.getElementById('cart-count').innerText = `(${count})`;
        }

        // Initialize count
        updateCartCount();
    </script>
</body>
</html>
