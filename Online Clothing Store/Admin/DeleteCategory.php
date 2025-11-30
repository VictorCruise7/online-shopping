
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    require_once('../Connections/shop.php'); // Use centralized database connection

	$Id=$_GET['CatId'];

    try {
        // Use Prepared Statements for Security and PostgreSQL compatibility
        $sql = 'DELETE FROM "Category_Master" WHERE "CategoryId" = :id';
        
        $stmt = $shop->prepare($sql);
        $stmt->execute(['id' => $Id]);

        echo '<script type="text/javascript">alert("Category Deleted Succesfully");window.location=\'Category.php\';</script>';
        
    } catch (PDOException $e) {
        echo '<script type="text/javascript">alert("Error: ' . addslashes($e->getMessage()) . '");window.location=\'Category.php\';</script>';
    }
?>
</body>
</html>
