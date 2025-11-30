<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    require_once('Connections/shop.php'); // Use centralized database connection

	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['cmbCity'];
	
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Gender=$_POST['rdGender'];
	$BirthDate=$_POST['txtDate'];
	
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	
    try {
        // Use Prepared Statements for Security and PostgreSQL compatibility
        $sql = 'INSERT INTO "Customer_Registration" ("CustomerName", "Address", "City", "Email", "Mobile", "Gender", "BirthDate", "UserName", "Password") VALUES (:name, :address, :city, :email, :mobile, :gender, :birthdate, :username, :password)';
        
        $stmt = $shop->prepare($sql);
        $stmt->execute([
            'name' => $Name,
            'address' => $Address,
            'city' => $City,
            'email' => $Email,
            'mobile' => $Mobile,
            'gender' => $Gender,
            'birthdate' => $BirthDate,
            'username' => $UserName,
            'password' => $Password
        ]);

        echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
        
    } catch (PDOException $e) {
        // Handle duplicate entry error (PostgreSQL error code 23505)
        if ($e->getCode() == '23505') {
             echo '<script type="text/javascript">alert("Username or Email already exists!");window.location=\'Register.php\';</script>';
        } else {
             echo '<script type="text/javascript">alert("Error: ' . addslashes($e->getMessage()) . '");window.location=\'Register.php\';</script>';
        }
    }
?>
</body>
</html>
