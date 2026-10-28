<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="register.css">
</head>
<body>
  <div class="container-regis">
    <form class="register-form" action="registerAction.php" method="post">

      <h2>Register</h2>
      <div class="form-group">
        <label for="full-name">Full Name</label>
        <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="job-title">Job Title</label>
        <input type="text" id="job-title" name="job-title" placeholder="Enter your job title" required>
      </div>
      <div class="form-group">
        <label for="company">Company</label>
        <input type="text" id="company" name="company" placeholder="Enter your company name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="product">Select Product</label>
        <select id="product" name="product" required>
          <option value="" disabled selected>Select a product</option>
   <option value="NETMONK">NETMONK</option>
          <option value="ANTARES">ANTARES</option>
          <option value="PIJAR">PIJAR</option>
          <option value="OCA">OCA</option>
          <option value="HSI">HSI</option>
          <option value="WMS">WMS</option>
          <option value="METRO">METRO</option>
          <option value="ASTINET">ASTINET</option>
          <option value="ASTINET">VPN</option>
        </select>
      </div>
      <button type="submit" class="submit-btn">SUBMIT</button>
    </form>
  </div>
</body>
</html>

