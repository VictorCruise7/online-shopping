<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login - Online Clothing Store</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>
<body style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 2rem;">

<div style="width: 100%; max-width: 500px;">
  <!-- Logo/Branding -->
  <div style="text-align: center; margin-bottom: 2rem;">
    <h1 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: white; margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 2px;">
      <span style="color: #f093fb;">ONLINE CLOTHING</span> STORE
    </h1>
    <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem;">Fashion at Your Fingertips</p>
  </div>

  <!-- Login Card -->
  <div style="background: white; padding: 3rem; border-radius: 1.5rem; box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15), 0 10px 10px rgba(0, 0, 0, 0.04);">
    <h2 style="text-align: center; color: #2d3748; margin-bottom: 0.5rem; font-size: 1.75rem;">Welcome Back</h2>
    <p style="text-align: center; color: #718096; margin-bottom: 2rem;">Please login to continue</p>

    <form name="form1" method="post" action="login_process.php">
      <div style="margin-bottom: 1.5rem;">
        <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Username</label>
        <span id="sprytextfield1">
          <input type="text" name="txtUserName" id="txtUserName" placeholder="Enter your username" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem;" />
          <span class="textfieldRequiredMsg" style="color: #f56565; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Username is required.</span>
        </span>
      </div>

      <div style="margin-bottom: 1.5rem;">
        <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Password</label>
        <span id="sprytextfield2">
          <input type="password" name="txtPassword" id="txtPassword" placeholder="Enter your password" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 1rem;" />
          <span class="textfieldRequiredMsg" style="color: #f56565; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Password is required.</span>
        </span>
      </div>

      <div style="margin-bottom: 1.5rem;">
        <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.75rem;">User Type</label>
        <div style="display: flex; gap: 2rem; justify-content: center;">
          <label style="display: flex; align-items: center; cursor: pointer;">
            <input type="radio" name="rdType" value="Admin" id="rdType_0" required style="margin-right: 0.5rem; accent-color: #667eea;" />
            <span style="color: #2d3748;">Admin</span>
          </label>
          <label style="display: flex; align-items: center; cursor: pointer;">
            <input type="radio" name="rdType" value="Customer" id="rdType_1" style="margin-right: 0.5rem; accent-color: #667eea;" />
            <span style="color: #2d3748;">Customer</span>
          </label>
        </div>
      </div>

      <button type="submit" style="width: 100%; padding: 1rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 0.5rem; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s; text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">Login</button>

      <div style="text-align: center; margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid #e2e8f0;">
        <p style="color: #718096; margin: 0;">Don't have an account? <a href="Register.php" style="color: #667eea; font-weight: 600; text-decoration: none;">Register here</a></p>
      </div>
    </form>
  </div>

  <!-- Footer Note -->
  <div style="text-align: center; margin-top: 2rem;">
    <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.9rem;">&copy; 2025 Online Clothing Store. All rights reserved.</p>
  </div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>
