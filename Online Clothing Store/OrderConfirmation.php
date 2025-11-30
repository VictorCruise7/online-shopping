<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed - Online Shop Fashion</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #f8f9fa; color: #1a1a1a; display: flex; align-items: center; justify-content: center; min-height: 100vh; text-align: center; }
        
        .confirmation-card { background: white; padding: 4rem 2rem; border-radius: 30px; box-shadow: 0 20px 60px rgba(0,0,0,0.1); max-width: 600px; width: 90%; animation: popIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        
        .success-icon { width: 100px; height: 100px; background: #d4edda; color: #28a745; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 3rem; margin: 0 auto 2rem; }
        
        h1 { font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem; color: #343a40; }
        p { color: #6c757d; font-size: 1.1rem; margin-bottom: 2.5rem; line-height: 1.6; }
        
        .order-id { background: #f1f3f5; padding: 0.5rem 1.5rem; border-radius: 50px; font-family: monospace; font-size: 1.2rem; color: #495057; margin-bottom: 2rem; display: inline-block; }
        
        .btn { display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 1rem 2.5rem; border-radius: 50px; text-decoration: none; font-weight: 700; transition: transform 0.2s; }
        .btn:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3); }

        @keyframes popIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="confirmation-card">
        <div class="success-icon">✓</div>
        <h1>Order Confirmed!</h1>
        <p>Thank you for your purchase. Your order has been received and is being processed. You will receive an email confirmation shortly.</p>
        
        <div class="order-id">Order #<span id="order-num"></span></div>
        <br>
        
        <a href="index.php" class="btn">Continue Shopping</a>
    </div>

    <script>
        // Generate random order number
        document.getElementById('order-num').innerText = Math.floor(100000 + Math.random() * 900000);
    </script>
</body>
</html>
