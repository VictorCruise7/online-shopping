
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    require_once('../Connections/shop.php'); // Use centralized database connection

	$Name=$_POST['txtName'];
	$Desc=$_POST['txtDesc'];
	$path1 = $_FILES["txtFile"]["name"];
	move_uploaded_file($_FILES["txtFile"]["tmp_name"],"../Products/"  .$_FILES["txtFile"]["name"]);
	
    try {
        // Use Prepared Statements for Security and PostgreSQL compatibility
        $sql = 'INSERT INTO "Category_Master" ("CategoryName", "Description", "Image") VALUES (:name, :desc, :image)';
        
        $stmt = $shop->prepare($sql);
        $stmt->execute([
            'name' => $Name,
            'desc' => $Desc,
            'image' => $path1
        ]);

        echo '<script type="text/javascript">alert("Category Inserted Succesfully");window.location=\'Category.php\';</script>';
        
    } catch (PDOException $e) {
        echo '<script type="text/javascript">alert("Error: ' . addslashes($e->getMessage()) . '");window.location=\'Category.php\';</script>';
    }
?>
</body>
</html>
