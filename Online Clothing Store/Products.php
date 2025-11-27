<?php require_once('Connections/shop.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  $theValue = stripslashes($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Recordset1 = "-1";
if (isset($_GET['CategoryId'])) {
  $colname_Recordset1 = $_GET['CategoryId'];
}

$query_Recordset1 = sprintf("SELECT ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item_master WHERE CategoryId = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysqli_query($shop, $query_Recordset1) or die(mysqli_error($shop));
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);

$query_Recordset2 = "SELECT ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item_master";
$Recordset2 = mysqli_query($shop, $query_Recordset2) or die(mysqli_error($shop));
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Products - Online Clothing Store</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">

  <?php include "Header.php"; ?>

  <div id="content">
    <h2>Our Products</h2>
    
    <?php
    if(isset($_GET['CategoryId'])) {
      if($totalRows_Recordset1 > 0) {
        echo '<div class="product-grid">';
        do {
    ?>
          <div class="product-card fade-in">
            <?php if($row_Recordset1['Discount'] > 0) { ?>
              <span class="discount-badge">-<?php echo $row_Recordset1['Discount']; ?>%</span>
            <?php } ?>
            <img src="Products/<?php echo $row_Recordset1['Image']; ?>" alt="<?php echo $row_Recordset1['ItemName']; ?>" />
            <div class="product-info">
              <h3 class="product-title"><?php echo $row_Recordset1['ItemName']; ?></h3>
              <p class="product-description"><?php echo $row_Recordset1['Description']; ?></p>
              <p style="color: #718096; font-size: 0.9rem; margin-bottom: 1rem;">Size: <?php echo $row_Recordset1['Size']; ?></p>
              <div class="product-price">
                <span class="price-current">$<?php echo $row_Recordset1['Total']; ?></span>
                <?php if($row_Recordset1['Discount'] > 0) { ?>
                  <span class="price-original">$<?php echo $row_Recordset1['Price']; ?></span>
                <?php } ?>
              </div>
              <button class="btn-add-cart">Add to Cart</button>
            </div>
          </div>
    <?php 
        } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1));
        echo '</div>';
      } else {
        echo '<div style="text-align: center; padding: 3rem; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%); border-radius: 1rem; margin: 2rem 0;">';
        echo '<p style="font-size: 1.25rem; color: #718096;">No products found in this category.</p>';
        echo '<a href="Products.php" style="display: inline-block; margin-top: 1rem; padding: 0.75rem 1.5rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 0.5rem; font-weight: 600;">View All Products</a>';
        echo '</div>';
      }
    } else {
      if($totalRows_Recordset2 > 0) {
        echo '<div class="product-grid">';
        do {
    ?>
          <div class="product-card fade-in">
            <?php if($row_Recordset2['Discount'] > 0) { ?>
              <span class="discount-badge">-<?php echo $row_Recordset2['Discount']; ?>%</span>
            <?php } ?>
            <img src="Products/<?php echo $row_Recordset2['Image']; ?>" alt="<?php echo $row_Recordset2['ItemName']; ?>" />
            <div class="product-info">
              <h3 class="product-title"><?php echo $row_Recordset2['ItemName']; ?></h3>
              <p class="product-description"><?php echo $row_Recordset2['Description']; ?></p>
              <p style="color: #718096; font-size: 0.9rem; margin-bottom: 1rem;">Size: <?php echo $row_Recordset2['Size']; ?></p>
              <div class="product-price">
                <span class="price-current">$<?php echo $row_Recordset2['Total']; ?></span>
                <?php if($row_Recordset2['Discount'] > 0) { ?>
                  <span class="price-original">$<?php echo $row_Recordset2['Price']; ?></span>
                <?php } ?>
              </div>
              <button class="btn-add-cart">Add to Cart</button>
            </div>
          </div>
    <?php 
        } while ($row_Recordset2 = mysqli_fetch_assoc($Recordset2));
        echo '</div>';
      } else {
        echo '<div style="text-align: center; padding: 3rem; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%); border-radius: 1rem; margin: 2rem 0;">';
        echo '<div style="font-size: 4rem; margin-bottom: 1rem;">🛍️</div>';
        echo '<h3 style="color: #667eea; margin-bottom: 0.5rem;">No Products Available</h3>';
        echo '<p style="color: #718096;">Please check back later or contact us for more information.</p>';
        echo '</div>';
      }
    }
    ?>
  </div>

 <?php include "Right.php"; ?>
  <div style="clear:both;"></div>
   <?php include "Footer.php"; ?>
</div>
</body>
</html>
<?php
mysqli_free_result($Recordset1);
mysqli_free_result($Recordset2);
?>
