<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	require_once('../Connections/shop.php'); // Use centralized database connection
	
	$Id=$_GET['Id'];

	// Use Prepared Statement for PostgreSQL to fetch item details
	$sql = 'SELECT * FROM "Item_Master" WHERE "ItemId" = :id';
	$stmt = $shop->prepare($sql);
	$stmt->execute(['id' => $Id]);

	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if($row) {
		$Id=$row['ItemId'];
		$Name=$row['ItemName'];
		$Description=$row['Description'];
		$Size=$row['Size'];
		$Price=$row['Price'];
		$Discount=$row['Discount'];
		$Total=$row['Total'];
		$Image=$row['Image'];
	}
	
	$Qty=$_POST['txtQty'];
	$CID=$_SESSION['ID'];
	$ODate= date('y/m/d');
	$Net=$Total*$Qty;
	
	try {
		// Use Prepared Statements for Security and PostgreSQL compatibility
		$sql = 'INSERT INTO "Shopping_Cart" ("CustomerId", "ItemName", "Quantity", "Price", "Total", "OrderDate") 
				VALUES (:customerId, :itemName, :quantity, :price, :total, :orderDate)';
		
		$stmt = $shop->prepare($sql);
		$stmt->execute([
			'customerId' => $CID,
			'itemName' => $Name,
			'quantity' => $Qty,
			'price' => $Total,
			'total' => $Net,
			'orderDate' => $ODate
		]);

		echo '<script type="text/javascript">alert("Item Added To the cart");window.location=\'Products.php\';</script>';
		
	} catch (PDOException $e) {
		echo '<script type="text/javascript">alert("Error: ' . addslashes($e->getMessage()) . '");window.location=\'Products.php\';</script>';
	}
?>
</body>
</html>
