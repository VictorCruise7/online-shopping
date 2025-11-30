<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - VictorCruise Fashion</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
            color: #1a1a1a;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.5rem 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }

        .nav-links a:hover {
            opacity: 0.8;
        }

        /* Main Content */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-align: center;
        }

        .page-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }

        /* Filter Bar */
        .filter-bar {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .filter-btn {
            padding: 0.7rem 1.5rem;
            border: 2px solid #667eea;
            background: white;
            color: #667eea;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
        }

        .filter-btn:hover, .filter-btn.active {
            background: #667eea;
            color: white;
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-category {
            color: #667eea;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #1a1a1a;
        }

        .product-description {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .product-size {
            background: #f0f0f0;
            padding: 0.4rem 0.8rem;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .product-stock {
            color: #28a745;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .product-pricing {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .product-price {
            font-size: 1.8rem;
            font-weight: 800;
            color: #667eea;
        }

        .product-original-price {
            font-size: 1.2rem;
            color: #999;
            text-decoration: line-through;
        }

        .product-discount {
            background: #ff6b6b;
            color: white;
            padding: 0.3rem 0.7rem;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 700;
        }

        .add-to-cart-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .add-to-cart-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: white;
            padding: 2rem;
            text-align: center;
            margin-top: 4rem;
        }

        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: 1fr;
            }
            
            .page-title {
                font-size: 2rem;
            }
        }
    </style>
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-align: center;
        }

        .page-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }

        /* Filter Bar */
        .filter-bar {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .filter-btn {
            padding: 0.7rem 1.5rem;
            border: 2px solid #667eea;
            background: white;
            color: #667eea;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
        }

        .filter-btn:hover, .filter-btn.active {
            background: #667eea;
            color: white;
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-category {
            color: #667eea;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #1a1a1a;
        }

        .product-description {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .product-size {
            background: #f0f0f0;
            padding: 0.4rem 0.8rem;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .product-stock {
            color: #28a745;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .product-pricing {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .product-price {
            font-size: 1.8rem;
            font-weight: 800;
            color: #667eea;
        }

        .product-original-price {
            font-size: 1.2rem;
            color: #999;
            text-decoration: line-through;
        }

        .product-discount {
            background: #ff6b6b;
            color: white;
            padding: 0.3rem 0.7rem;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 700;
        }

        .add-to-cart-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .add-to-cart-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: white;
            padding: 2rem;
            text-align: center;
            margin-top: 4rem;
        }

        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: 1fr;
            }
            
            .page-title {
                font-size: 2rem;
            }
        }
    </style>
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
