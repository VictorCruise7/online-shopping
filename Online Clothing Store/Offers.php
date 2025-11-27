<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Special Offers - Online Clothing Store</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">

  <?php include "Header.php"; ?>

  <div id="content">
    <h2>Special Offers</h2>
    <p style="color: #718096; margin-bottom: 2rem;">Don't miss out on our exclusive deals and limited-time offers!</p>

    <?php
    $con = mysqli_connect("localhost","root", "", "shopping");
    
    if (!$con) {
      echo '<div style="text-align: center; padding: 3rem; background: linear-gradient(135deg, rgba(245, 101, 101, 0.1) 0%, rgba(237, 137, 54, 0.1) 100%); border-radius: 1rem; margin: 2rem 0;">';
      echo '<p style="color: #f56565; font-size: 1.25rem;">Database connection failed. Please try again later.</p>';
      echo '</div>';
    } else {
      $sql = "select * from Offer_Master";
      $result = mysqli_query($con, $sql);
      
      if(mysqli_num_rows($result) > 0) {
        echo '<div class="product-grid">';
        
        while($row = mysqli_fetch_array($result)) {
          $Id = $row['OfferId'];
          $Offer = $row['Offer'];
          $Detail = $row['Detail'];
          $Valid = $row['Valid'];
    ?>
          <div class="category-card fade-in" style="background: linear-gradient(135deg, rgba(245, 101, 101, 0.1) 0%, rgba(237, 137, 54, 0.1) 100%);">
            <div style="padding: 2rem; text-align: center;">
              <div style="font-size: 3rem; margin-bottom: 1rem;">🎉</div>
              <h3 class="category-title" style="color: #f56565;"><?php echo $Offer; ?></h3>
              <p class="category-description" style="font-size: 1.1rem; margin: 1.5rem 0;"><?php echo $Detail; ?></p>
              <div style="display: inline-block; padding: 0.5rem 1rem; background: rgba(245, 101, 101, 0.2); border-radius: 2rem; color: #f56565; font-weight: 600; font-size: 0.9rem;">
                ⏰ Valid until: <?php echo $Valid; ?>
              </div>
              <a href="Products.php" class="btn-add-cart" style="margin-top: 1.5rem; display: block;">Shop Now</a>
            </div>
          </div>
    <?php
        }
        echo '</div>';
      } else {
        echo '<div style="text-align: center; padding: 3rem; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%); border-radius: 1rem; margin: 2rem 0;">';
        echo '<div style="font-size: 4rem; margin-bottom: 1rem;">🎁</div>';
        echo '<h3 style="color: #667eea; margin-bottom: 0.5rem;">No Active Offers</h3>';
        echo '<p style="color: #718096;">Check back soon for amazing deals and discounts!</p>';
        echo '<a href="Products.php" style="display: inline-block; margin-top: 1.5rem; padding: 0.75rem 1.5rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 0.5rem; font-weight: 600;">Browse Products</a>';
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
