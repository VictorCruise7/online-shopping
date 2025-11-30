<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Online Shop Fashion</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #f8f9fa; color: #1a1a1a; }
        
        .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1.5rem 0; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .nav-container { max-width: 1400px; margin: 0 auto; padding: 0 2rem; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.8rem; font-weight: 800; }
        .nav-links { display: flex; gap: 2rem; list-style: none; }
        .nav-links a { color: white; text-decoration: none; font-weight: 500; }

        .container { max-width: 1200px; margin: 3rem auto; padding: 0 2rem; display: grid; grid-template-columns: 1.5fr 1fr; gap: 3rem; }
        
        .section-title { font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem; color: #343a40; }
        
        .form-card { background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
        
        .form-group { margin-bottom: 1.5rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; font-weight: 600; color: #495057; }
        .form-control { width: 100%; padding: 0.8rem; border: 2px solid #e9ecef; border-radius: 10px; font-family: inherit; transition: border-color 0.3s; }
        .form-control:focus { outline: none; border-color: #667eea; }
        
        .row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        
        .order-summary { background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); height: fit-content; }
        .summary-item { display: flex; justify-content: space-between; margin-bottom: 1rem; color: #495057; }
        .summary-total { display: flex; justify-content: space-between; margin-top: 1.5rem; padding-top: 1.5rem; border-top: 2px solid #f1f3f5; font-size: 1.2rem; font-weight: 800; color: #1a1a1a; }
        
        .place-order-btn { width: 100%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1rem; border: none; border-radius: 12px; font-weight: 700; font-size: 1.1rem; cursor: pointer; margin-top: 2rem; transition: transform 0.2s; }
        .place-order-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4); }

        @media (max-width: 768px) {
            .container { grid-template-columns: 1fr; }
            .order-summary { order: -1; }
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
                    <li><a href="Cart.php">Cart</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="checkout-form">
            <h2 class="section-title">Shipping Information</h2>
            <div class="form-card">
                <div class="row">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="John" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Doe" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" placeholder="john@example.com" required>
                </div>
                <div class="form-group">
                    <label>Street Address</label>
                    <input type="text" class="form-control" placeholder="123 Fashion St" required>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="New York" required>
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" class="form-control" placeholder="10001" required>
                    </div>
                </div>
            </div>

            <h2 class="section-title" style="margin-top: 2rem;">Payment Details</h2>
            <div class="form-card">
                <div class="form-group">
                    <label>Card Number</label>
                    <input type="text" class="form-control" placeholder="0000 0000 0000 0000" maxlength="19">
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Expiry Date</label>
                        <input type="text" class="form-control" placeholder="MM/YY" maxlength="5">
                    </div>
                    <div class="form-group">
                        <label>CVV</label>
                        <input type="text" class="form-control" placeholder="123" maxlength="3">
                    </div>
                </div>
            </div>
        </div>

        <div class="order-summary">
            <h2 class="section-title">Order Summary</h2>
            <div id="summary-items">
                <!-- Items injected via JS -->
            </div>
            <div class="summary-total">
                <span>Total</span>
                <span id="grand-total">$0.00</span>
            </div>
            <button class="place-order-btn" onclick="placeOrder()">Place Order</button>
        </div>
    </div>

    <script>
        // Load cart summary
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const summaryContainer = document.getElementById('summary-items');
        let total = 0;

        if (cart.length === 0) {
            window.location.href = 'Cart.php';
        }

        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;
            summaryContainer.innerHTML += `
                <div class="summary-item">
                    <span>${item.name} x ${item.quantity}</span>
                    <span>$${itemTotal.toFixed(2)}</span>
                </div>
            `;
        });

        document.getElementById('grand-total').innerText = '$' + total.toFixed(2);

        function placeOrder() {
            // Simulate processing
            const btn = document.querySelector('.place-order-btn');
            btn.innerText = 'Processing...';
            btn.disabled = true;
            btn.style.opacity = '0.7';

            setTimeout(() => {
                // Clear cart
                localStorage.removeItem('cart');
                // Redirect to confirmation
                window.location.href = 'OrderConfirmation.php';
            }, 2000);
        }
    </script>
</body>
</html>
