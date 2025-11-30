<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Processing Login...</title>
</head>

<body>
<?php
session_start();
require_once('Connections/shop.php'); // Use centralized database connection

$UserName=$_POST['txtUserName'];
$Password=$_POST['txtPassword'];
$UserType=$_POST['rdType'];

if($UserType=="Admin")
{
  // Use Prepared Statements for Security and PostgreSQL compatibility
  // Note: PostgreSQL table names are case-sensitive if created with quotes
  $sql = 'SELECT * FROM "Admin_Master" WHERE "UserName" = :username AND "Password" = :password';
  $stmt = $shop->prepare($sql);
  $stmt->execute(['username' => $UserName, 'password' => $Password]);
  
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if (!$row)
  {
    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
  }
  else
  {
    $_SESSION['UserType'] = 'Admin';
    $_SESSION['UserName'] = $UserName;
    $_SESSION['LAST_ACTIVITY'] = time(); // Initialize last activity
    header("location:index.php");
  } 
}
else if($UserType=="Customer")
{
  $sql = 'SELECT * FROM "Customer_Registration" WHERE "UserName" = :username AND "Password" = :password';
  $stmt = $shop->prepare($sql);
  $stmt->execute(['username' => $UserName, 'password' => $Password]);
  
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if (!$row)
  {
    echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'login.php\';</script>';
  }
  else
  {
    $_SESSION['ID']=$row['CustomerId'];
    $_SESSION['Name']=$row['CustomerName'];
    $_SESSION['UserType'] = 'Customer';
    $_SESSION['LAST_ACTIVITY'] = time(); // Initialize last activity
    header("location:index.php");
  } 
}
// PDO connection closes automatically when script ends
?>
</body>
</html>
