<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Register - Online Clothing Store</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<script src="gen_validation.js"></script>
<script>
var arrFormValidation = [
  [["minlen=1", "Please Enter Name"], ["alpha", "Please Enter Valid Name"]],
  [["minlen=1", "Please Enter Address"]],
  [],
  [["minlen=1", "Please Enter Email"], ["email", "Please Enter valid email"]],
  [["num", "Please Enter valid Mobile"], ["minlen=10", "Please Enter valid Mobile"], ["maxlen=10", "Please Enter valid Mobile"]],
  [],
  [],
  [["minlen=1", "Please Enter UserName"]],
  [["minlen=1", "Please Enter Password"]]
];
</script>
</head>
<body style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 2rem 1rem;">

<div style="width: 100%; max-width: 600px; margin: 0 auto;">
  <!-- Logo/Branding -->
  <div style="text-align: center; margin-bottom: 2rem;">
    <h1 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: white; margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 2px;">
      <span style="color: #f093fb;">ONLINE CLOTHING</span> STORE
    </h1>
    <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem;">Fashion at Your Fingertips</p>
  </div>

  <!-- Registration Card -->
  <div style="background: white; padding: 3rem; border-radius: 1.5rem; box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15), 0 10px 10px rgba(0, 0, 0, 0.04);">
    <h2 style="text-align: center; color: #2d3748; margin-bottom: 0.5rem; font-size: 1.75rem;">Create Account</h2>
    <p style="text-align: center; color: #718096; margin-bottom: 2rem;">Join us and start shopping today!</p>

    <form action="insert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" name="form2" id="form2">
      
      <!-- Name -->
      <div style="margin-bottom: 1.25rem;">
        <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Full Name *</label>
        <span id="sprytextfield3">
          <input type="text" name="txtName" id="txtName" placeholder="Enter your full name" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 0.95rem;" />
          <span class="textfieldRequiredMsg" style="color: #f56565; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Name is required.</span>
        </span>
      </div>

      <!-- Address -->
      <div style="margin-bottom: 1.25rem;">
        <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Address *</label>
        <span id="sprytextarea1">
          <textarea name="txtAddress" id="txtAddress" rows="3" placeholder="Enter your address" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 0.95rem; resize: vertical;"></textarea>
          <span class="textareaRequiredMsg" style="color: #f56565; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Address is required.</span>
        </span>
      </div>

      <!-- City and Gender in a row -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.25rem;">
        <div>
          <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">City</label>
          <select name="cmbCity" id="cmbCity" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 0.95rem; background: white;">
            <option>New York</option>
            <option>Tokyo</option>
            <option>London</option>
            <option>Paris</option>
          </select>
        </div>

        <div>
          <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Gender</label>
          <select name="rdGender" id="rdGender" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 0.95rem; background: white;">
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
      </div>

      <!-- Email and Mobile in a row -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.25rem;">
        <div>
          <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Email *</label>
          <span id="sprytextfield4">
            <input type="email" name="txtEmail" id="txtEmail" placeholder="your@email.com" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 0.95rem;" />
            <span class="textfieldRequiredMsg" style="color: #f56565; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Valid email required.</span>
          </span>
        </div>

        <div>
          <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Mobile *</label>
          <span id="sprytextfield5">
            <input type="text" name="txtMobile" id="txtMobile" placeholder="1234567890" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 0.95rem;" />
            <span class="textfieldRequiredMsg" style="color: #f56565; font-size: 0.85rem; margin-top: 0.25rem; display: block;">10-digit mobile required.</span>
          </span>
        </div>
      </div>

      <!-- Birth Date -->
      <div style="margin-bottom: 1.25rem;">
        <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Birth Date</label>
        <span id="sprytextfield9">
          <input type="date" name="txtDate" id="txtDate" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 0.95rem;" />
          <span class="textfieldRequiredMsg" style="color: #f56565; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Birth date is required.</span>
        </span>
      </div>

      <!-- Username and Password in a row -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.25rem;">
        <div>
          <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Username *</label>
          <span id="sprytextfield6">
            <input type="text" name="txtUserName" id="txtUserName3" placeholder="Choose username" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 0.95rem;" />
            <span class="textfieldRequiredMsg" style="color: #f56565; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Username required.</span>
          </span>
        </div>

        <div>
          <label style="display: block; color: #2d3748; font-weight: 600; margin-bottom: 0.5rem;">Password *</label>
          <span id="sprytextfield7">
            <input type="password" name="txtPassword" id="txtPassword" placeholder="Create password" style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem; font-size: 0.95rem;" />
            <span class="textfieldRequiredMsg" style="color: #f56565; font-size: 0.85rem; margin-top: 0.25rem; display: block;">Password required.</span>
          </span>
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit" name="button2" id="button2" style="width: 100%; padding: 1rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 0.5rem; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s; text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-top: 0.5rem;">
        Create Account
      </button>

      <!-- Login Link -->
      <div style="text-align: center; margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid #e2e8f0;">
        <p style="color: #718096; margin: 0;">Already have an account? <a href="login.php" style="color: #667eea; font-weight: 600; text-decoration: none;">Login here</a></p>
      </div>
    </form>
  </div>

  <!-- Footer Note -->
  <div style="text-align: center; margin-top: 2rem;">
    <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.9rem;">&copy; 2025 Online Clothing Store. All rights reserved.</p>
  </div>
</div>

<script type="text/javascript">
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
</script>
</body>
</html>
