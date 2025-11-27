<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

// Database configuration
$hostname_shop = "localhost";
$database_shop = "shopping";
$username_shop = "root";
$password_shop = "bil(mysql)003"; // Add your MySQL password here if you set one during installation

// Attempt to connect to MySQL
try {
    $shop = mysqli_connect($hostname_shop, $username_shop, $password_shop, $database_shop);
    
    if (!$shop) {
        throw new Exception(mysqli_connect_error());
    }
    
    // Set charset to utf8mb4 for better character support
    mysqli_set_charset($shop, "utf8mb4");
    
} catch (Exception $e) {
    // Display user-friendly error message
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Database Connection Error</title>
        <style>
            body { font-family: Arial, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 2rem; }
            .error-box { background: white; padding: 3rem; border-radius: 1rem; max-width: 600px; box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15); }
            h1 { color: #f56565; margin-bottom: 1rem; }
            p { color: #2d3748; line-height: 1.6; margin-bottom: 1rem; }
            .code { background: #f7fafc; padding: 1rem; border-radius: 0.5rem; font-family: monospace; margin: 1rem 0; }
            .steps { background: #edf2f7; padding: 1.5rem; border-radius: 0.5rem; margin: 1rem 0; }
            .steps ol { margin-left: 1.5rem; }
            .steps li { margin-bottom: 0.5rem; }
            a { color: #667eea; text-decoration: none; font-weight: 600; }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <div class="error-box">
            <h1>⚠️ Database Connection Error</h1>
            <p><strong>Error:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>
            
            <div class="steps">
                <h3>🔧 Quick Fix:</h3>
                <ol>
                    <li><strong>Check MySQL is running</strong>
                        <ul>
                            <li>If using XAMPP: Open XAMPP Control Panel and start MySQL</li>
                            <li>If using standalone MySQL: Check MySQL service is running</li>
                        </ul>
                    </li>
                    <li><strong>Set MySQL Password</strong> (if you set a password during installation)
                        <ul>
                            <li>Open: <code>Connections/shop.php</code></li>
                            <li>Update line: <code>$password_shop = "your_password";</code></li>
                        </ul>
                    </li>
                    <li><strong>Create Database</strong>
                        <ul>
                            <li>Run the SQL script in <code>db/setup_database.sql</code></li>
                            <li>Or import it via phpMyAdmin</li>
                        </ul>
                    </li>
                </ol>
            </div>
            
            <p><strong>Need help?</strong> Check the database setup guide in <code>db/DATABASE_SETUP_GUIDE.md</code></p>
            
            <p style="text-align: center; margin-top: 2rem;">
                <a href="login.php">← Back to Login</a>
            </p>
        </div>
    </body>
    </html>';
    exit();
}
?>