        PDO::ATTR_EMULATE_PREPARES => false,
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
            <p>Please check your Supabase credentials in <code>Connections/shop.php</code>.</p>
            <p><strong>Common issues:</strong></p>
            <ul>
                <li>Incorrect database password</li>
                <li>Supabase project is paused (free tier)</li>
                <li>Database not created yet (run setup_supabase.sql first)</li>
                <li>PHP PostgreSQL extensions not enabled</li>
            </ul>
        </div>
    </body>
    </html>';
    exit();
}
?>