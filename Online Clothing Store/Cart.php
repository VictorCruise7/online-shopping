<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Online Shop Fashion</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #f8f9fa; color: #1a1a1a; }
        
        /* Reuse Header Style */
        .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1.5rem 0; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .nav-container { max-width: 1400px; margin: 0 auto; padding: 0 2rem; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.8rem; font-weight: 800; }
        .nav-links { display: flex; gap: 2rem; list-style: none; }
        .nav-links a { color: white; text-decoration: none; font-weight: 500; }

        /* Cart Styles */
        .container { max-width: 1000px; margin: 3rem auto; padding: 0 2rem; }
        .page-title { font-size: 2.5rem; font-weight: 800; margin-bottom: 2rem; text-align: center; }
        
        .cart-container { background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); overflow: hidden; }
        .cart-header { display: grid; grid-template-columns: 3fr 1fr 1fr 1fr 0.5fr; padding: 1.5rem; background: #f1f3f5; font-weight: 600; color: #495057; }
        .cart-item { display: grid; grid-template-columns: 3fr 1fr 1fr 1fr 0.5fr; padding: 1.5rem; border-bottom: 1px solid #eee; align-items: center; }
        
        .item-info { display: flex; align-items: center; gap: 1rem; }
        .item-image { width: 80px; height: 80px; background: #eee; border-radius: 10px; object-fit: cover; display: flex; align-items: center; justify-content: center; font-size: 2rem; }
        .item-details h3 { font-size: 1.1rem; margin-bottom: 0.2rem; }
        .item-details p { color: #868e96; font-size: 0.9rem; }
        
        .quantity-controls { display: flex; align-items: center; gap: 0.5rem; }
        .qty-btn { width: 30px; height: 30px; border: 1px solid #dee2e6; background: white; border-radius: 5px; cursor: pointer; display: flex; align-items: center; justify-content: center; }
        .qty-btn:hover { background: #f8f9fa; }
        .qty-input { width: 40px; text-align: center; border: none; font-weight: 600; }
        
        .price { font-weight: 600; color: #495057; }
        .total { font-weight: 700; color: #667eea; }
        .remove-btn { color: #ff6b6b; cursor: pointer; border: none; background: none; font-size: 1.2rem; }
        .remove-btn:hover { color: #fa5252; }

        .cart-footer { padding: 2rem; display: flex; justify-content: space-between; align-items: center; background: #f8f9fa; }
        .cart-total { font-size: 1.5rem; font-weight: 800; }
        .checkout-btn { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1rem 2.5rem; border: none; border-radius: 50px; font-weight: 700; font-size: 1.1rem; cursor: pointer; text-decoration: none; transition: transform 0.2s; }
        .checkout-btn:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4); }
        
        .empty-cart { text-align: center; padding: 4rem; }
        .empty-cart h3 { margin-bottom: 1rem; color: #495057; }
        .continue-shopping { color: #667eea; text-decoration: none; font-weight: 600; }

        @media (max-width: 768px) {
            .cart-header { display: none; }
            .cart-item { grid-template-columns: 1fr; gap: 1rem; text-align: center; }
            .item-info { flex-direction: column; }
            .quantity-controls { justify-content: center; }
        }
    </style>
</head>
<body>
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

    <div class="container">
        <h1 class="page-title">Your Shopping Cart</h1>
        <div id="cart-content" class="cart-container">
            <!-- Cart items will be injected here -->
        </div>
    </div>

    <script>
        function loadCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartContainer = document.getElementById('cart-content');
            const cartCount = document.getElementById('cart-count');
            
            cartCount.innerText = `(${cart.reduce((acc, item) => acc + item.quantity, 0)})`;

            if (cart.length === 0) {
                cartContainer.innerHTML = `
                    <div class="empty-cart">
                        <h3>Your cart is empty</h3>
                        <a href="Products.php" class="continue-shopping">Continue Shopping →</a>
                    </div>
                `;
                return;
            }

            let html = `
                <div class="cart-header">
                    <div>Product</div>
                    <div>Price</div>
                    <div>Quantity</div>
                    <div>Total</div>
                    <div></div>
                </div>
            `;

            let grandTotal = 0;

            cart.forEach((item, index) => {
                const itemTotal = item.price * item.quantity;
                grandTotal += itemTotal;
                
                // Handle image display (emoji vs URL)
                let imageDisplay = '';
                if (item.image && (item.image.startsWith('http') || item.image.includes('/'))) {
                    imageDisplay = `<img src="${item.image}" alt="${item.name}" style="width:100%; height:100%; object-fit:cover; border-radius:10px;">`;
                } else {
                    imageDisplay = item.image || '📦';
                }

                html += `
                    <div class="cart-item">
                        <div class="item-info">
                            <div class="item-image">${imageDisplay}</div>
                            <div class="item-details">
                                <h3>${item.name}</h3>
                                <p>Size: ${item.size || 'M'}</p>
                            </div>
                        </div>
                        <div class="price">$${item.price.toFixed(2)}</div>
                        <div class="quantity-controls">
                            <button class="qty-btn" onclick="updateQty(${index}, -1)">-</button>
                            <input type="text" class="qty-input" value="${item.quantity}" readonly>
                            <button class="qty-btn" onclick="updateQty(${index}, 1)">+</button>
                        </div>
                        <div class="total">$${itemTotal.toFixed(2)}</div>
                        <button class="remove-btn" onclick="removeItem(${index})">×</button>
                    </div>
                `;
            });

            html += `
                <div class="cart-footer">
                    <div class="cart-total">Total: $${grandTotal.toFixed(2)}</div>
                    <a href="Checkout.php" class="checkout-btn">Proceed to Checkout</a>
                </div>
            `;

            cartContainer.innerHTML = html;
        }

        function updateQty(index, change) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart[index]) {
                cart[index].quantity += change;
                if (cart[index].quantity < 1) cart[index].quantity = 1;
                localStorage.setItem('cart', JSON.stringify(cart));
                loadCart();
            }
        }

        function removeItem(index) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }

        // Load cart on page load
        loadCart();
    </script>
</body>
</html>
