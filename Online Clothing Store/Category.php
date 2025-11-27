<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Categories - Online Clothing Store</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">
  
  <?php include "Header.php"; ?>
  
  <div id="content">
    <h2>Product Categories</h2>
    <p style="color: #718096; margin-bottom: 2rem;">Browse our collection by category and find exactly what you're looking for.</p>
    
    <?php
    $con = mysqli_connect("localhost","root", "", "shopping");
    
    if (!$con) {
      echo '<div style="text-align: center; padding: 3rem; background: linear-gradient(135deg, rgba(245, 101, 101, 0.1) 0%, rgba(237, 137, 54, 0.1) 100%); border-radius: 1rem; margin: 2rem 0;">';
      echo '<p style="color: #f56565; font-size: 1.25rem;">Database connection failed. Please try again later.</p>';
      echo '</div>';
    } else {
      $sql = "select * from Category_Master";
      $result = mysqli_query($con, $sql);
      
      if(mysqli_num_rows($result) > 0) {
        echo '<div class="product-grid">';
        
        while($row = mysqli_fetch_array($result)) {
          $Id = $row['CategoryId'];
          $CategoryName = $row['CategoryName'];
          $Description = $row['Description'];
          $Image = $row['Image'];
    ?>
          <div class="category-card fade-in">
            <img src="Products/<?php echo $Image; ?>" alt="<?php echo $CategoryName; ?>" />
            <div class="category-info">
              <h3 class="category-title"><?php echo $CategoryName; ?></h3>
              <p class="category-description"><?php echo $Description; ?></p>
              <a href="Products.php?CategoryId=<?php echo $Id; ?>" class="btn-add-cart">View Products</a>
            </div>
          </div>
    <?php
        }
        echo '</div>';
      } else {
        echo '<div style="text-align: center; padding: 3rem; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%); border-radius: 1rem; margin: 2rem 0;">';
        echo '<div style="font-size: 4rem; margin-bottom: 1rem;">📂</div>';
        echo '<h3 style="color: #667eea; margin-bottom: 0.5rem;">No Categories Available</h3>';
        echo '<p style="color: #718096;">Categories will be added soon. Please check back later!</p>';
        echo '</div>';
      }
      
      mysqli_close($con);
    }
    ?>
  </div>

 <?php include "Right.php"; ?>
  <div style="clear:both;"></div>
   <?php include "Footer.php"; ?>
</div>
</body>
</html>
