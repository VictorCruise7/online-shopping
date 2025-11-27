<?php
$hostname = "localhost";
$username = "root";
$database = "shopping";
$passwords_to_try = [
    "" => "(Empty Password)",
    "root" => "root",
    "mysql" => "mysql",
    "123456" => "123456",
    "1234" => "1234",
    "password" => "password",
    "admin" => "admin",
    "admin123" => "admin123"
];

echo "Testing MySQL connections...\n";
echo "----------------------------\n";

$success = false;

foreach ($passwords_to_try as $password => $label) {
    try {
        // Suppress warnings for failed connections
        $con = @mysqli_connect($hostname, $username, $password);
        
        if ($con) {
            echo "[SUCCESS] Connected successfully with password: '$label'\n";
            $success = true;
            mysqli_close($con);
            break;
        } else {
            echo "[FAILED] Password '$label' did not work.\n";
        }
    } catch (Exception $e) {
        echo "[FAILED] Password '$label' did not work.\n";
    }
}

if (!$success) {
    echo "\n----------------------------\n";
    echo "❌ None of the common passwords worked.\n";
    echo "Please check your MySQL installation to find the root password.\n";
} else {
    echo "\n----------------------------\n";
    echo "✅ FOUND IT! Please update Connections/shop.php with the successful password.\n";
}
?>
