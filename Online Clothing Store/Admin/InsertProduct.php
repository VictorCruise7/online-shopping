<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    require_once('../Connections/shop.php'); // Use centralized database connection

	$cmbCategory=$_GET['CategoryId'];
	$txtName=$_POST['txtName'];
	$txtDesc=$_POST['txtDesc'];
	$txtSize=$_POST['txtSize'];
	$txtPrice=$_POST['txtPrice'];
	$txtDiscount=$_POST['txtDiscount'];
	$txtFinal=$_POST['txtFinal'];
	
	$path1 = $_FILES["txtFile"]["name"];
	move_uploaded_file($_FILES["txtFile"]["tmp_name"],"../Products/"  .$_FILES["txtFile"]["name"]);
	
    try {
        // Use Prepared Statements for Security and PostgreSQL compatibility
        $sql = 'INSERT INTO "Item_Master" ("CategoryId", "ItemName", "Description", "Size", "Image", "Price", "Discount", "Total") 
                VALUES (:categoryId, :itemName, :description, :size, :image, :price, :discount, :total)';
        
        $stmt = $shop->prepare($sql);
        $stmt->execute([
            'categoryId' => $cmbCategory,
            'itemName' => $txtName,
            'description' => $txtDesc,
            'size' => $txtSize,
            'image' => $path1,
            'price' => $txtPrice,
            'discount' => $txtDiscount,
            'total' => $txtFinal
        ]);

        header("location:Products.php?CategoryId=".$cmbCategory."");
        
    } catch (PDOException $e) {
        echo '<script type="text/javascript">alert("Error: ' . addslashes($e->getMessage()) . '");window.location=\'Products.php?CategoryId='.$cmbCategory.'\';</script>';
    }
?>
</body>
</html>
