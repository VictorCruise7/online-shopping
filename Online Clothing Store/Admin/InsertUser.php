
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    require_once('../Connections/shop.php'); // Use centralized database connection

	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	
    try {
        // Use Prepared Statements for Security and PostgreSQL compatibility
        $sql = 'INSERT INTO "Admin_Master" ("UserName", "Password") VALUES (:username, :password)';
        
        $stmt = $shop->prepare($sql);
        $stmt->execute([
            'username' => $UserName,
            'password' => $Password
        ]);

        echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'User.php\';</script>';
        
    } catch (PDOException $e) {
        // Handle duplicate entry error
        if ($e->getCode() == '23505') {
             echo '<script type="text/javascript">alert("Username already exists!");window.location=\'User.php\';</script>';
        } else {
             echo '<script type="text/javascript">alert("Error: ' . addslashes($e->getMessage()) . '");window.location=\'User.php\';</script>';
        }
    }
?>
</body>
</html>
