<?php require_once('session_check.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Online Shop Fashion</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
