<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Us - Online Clothing Store</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">

  <?php include "Header.php"; ?>

  <div id="content">
    <h2>Contact Us</h2>
    <p style="color: #718096; margin-bottom: 2rem;">We'd love to hear from you! Reach out to us at any of our locations.</p>

    <div class="product-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
      <!-- Head Office -->
      <div class="category-card fade-in">
        <div style="padding: 2rem; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);">
          <div style="text-align: center; font-size: 3rem; margin-bottom: 1rem;">🏢</div>
          <h3 class="category-title" style="text-align: center; margin-bottom: 1.5rem;">Head Office</h3>
          
          <div style="color: #718096; line-height: 2;">
            <p style="margin-bottom: 0.75rem;">
              <strong style="color: #667eea;">📍 Address:</strong><br/>
              ASAP Market<br/>
              Near Rock Road<br/>
              ASR
            </p>
            
            <p style="margin-bottom: 0.75rem;">
              <strong style="color: #667eea;">📞 Phone:</strong><br/>
              0123456789
            </p>
            
            <p style="margin-bottom: 0;">
              <strong style="color: #667eea;">📧 Email:</strong><br/>
              john@gmail.com
            </p>
          </div>
        </div>
      </div>

      <!-- Branch Office -->
      <div class="category-card fade-in" style="animation-delay: 0.1s;">
        <div style="padding: 2rem; background: linear-gradient(135deg, rgba(118, 75, 162, 0.05) 0%, rgba(102, 126, 234, 0.05) 100%);">
          <div style="text-align: center; font-size: 3rem; margin-bottom: 1rem;">🏪</div>
          <h3 class="category-title" style="text-align: center; margin-bottom: 1.5rem;">Branch Office</h3>
          
          <div style="color: #718096; line-height: 2;">
            <p style="margin-bottom: 0.75rem;">
              <strong style="color: #764ba2;">📍 Address:</strong><br/>
              ZZZ Shop<br/>
              Near KFC<br/>
              NIA
            </p>
            
            <p style="margin-bottom: 0.75rem;">
              <strong style="color: #764ba2;">📞 Phone:</strong><br/>
              0987654321
            </p>
            
            <p style="margin-bottom: 0;">
              <strong style="color: #764ba2;">📧 Email:</strong><br/>
              tony@gmail.com
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div style="margin-top: 3rem; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%); padding: 2rem; border-radius: 1rem;">
      <h3 style="color: #667eea; margin-bottom: 1.5rem; text-align: center;">Send Us a Message</h3>
      
      <form style="max-width: 600px; margin: 0 auto;">
        <div style="margin-bottom: 1.5rem;">
          <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Your Name</label>
          <input type="text" placeholder="Enter your name" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem;" />
        </div>
        
        <div style="margin-bottom: 1.5rem;">
          <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Email Address</label>
          <input type="email" placeholder="Enter your email" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem;" />
        </div>
        
        <div style="margin-bottom: 1.5rem;">
          <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Message</label>
          <textarea rows="5" placeholder="How can we help you?" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem; resize: vertical;"></textarea>
        </div>
        
        <button type="submit" class="btn-add-cart" style="width: 100%;">Send Message</button>
      </form>
    </div>
  </div>

 <?php include "Right.php"; ?>
  <div style="clear:both;"></div>
   <?php include "Footer.php"; ?>
</div>
</body>
</html>
