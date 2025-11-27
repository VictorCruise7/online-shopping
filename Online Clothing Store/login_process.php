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
  $sql = "select * from Admin_Master where UserName='".$UserName."' and Password='".$Password."'";
  $result = mysqli_query($shop, $sql);
  $records = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);
  
  if ($records==0)
  {
    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
  }
  else
  {
    $_SESSION['UserType'] = 'Admin';
    $_SESSION['UserName'] = $UserName;
    header("location:index.php");
  } 
}
else if($UserType=="Customer")
{
  $sql = "select * from Customer_Registration where UserName='".$UserName."' and Password='".$Password."' ";
  $result = mysqli_query($shop, $sql);
  $records = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);
  
  if ($records==0)
  {
    echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'login.php\';</script>';
  }
  else
  {
    $_SESSION['ID']=$row['CustomerId'];
    $_SESSION['Name']=$row['CustomerName'];
    $_SESSION['UserType'] = 'Customer';
    header("location:index.php");
  } 
}
mysqli_close($shop);
?>
</body>
</html>
