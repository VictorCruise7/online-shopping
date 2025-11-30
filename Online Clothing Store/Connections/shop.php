<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_shop = "127.0.0.1";
$database_shop = "shopping";
$username_shop = "root";
$password_shop = "";

try {
    $shop = new PDO("mysql:host=$hostname_shop;dbname=$database_shop;charset=utf8mb4", $username_shop, $password_shop, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET sql_mode='ANSI_QUOTES'"
    ]);
} catch (PDOException $e) {
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
        </style>
    </head>
    <body>
        <div class="error-box">
            <h1>⚠️ Database Connection Error</h1>
            <p><strong>Error:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>
            <p>Please check your database credentials in <code>Connections/shop.php</code>.</p>
        </div>
    </body>
    </html>';
    exit();
}

// Legacy MySQLi connection for older scripts
$con = mysqli_connect($hostname_shop, $username_shop, $password_shop, $database_shop);
if (mysqli_connect_errno()) {
    trigger_error("Failed to connect to MySQL: " . mysqli_connect_error(), E_USER_ERROR);
}
?>