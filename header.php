<?php
include 'config.php';
?>


<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <style>
    /* General Body Styles */
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #f4f4f4;
        color: #333;
        overflow-x: hidden;
            padding-top: 110px; /* kira-kira setinggi header (80px + padding) */
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Header Section */
  .main-header {
    background-color: #ffffff;
    padding: 15px 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    position: fixed; /* ubah dari relative ke fixed */
    top: 0; /* tempel di atas layar */
    left: 0;
    width: 100%; /* pastikan full width */
    z-index: 9999; /* agar selalu di atas elemen lain */
}

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo img {
        height: 80px;
    }

    .main-nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .main-nav ul li {
        margin-left: 30px;
    }

    .main-nav ul li a {
        text-decoration: none;
        color: #555;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .main-nav ul li a:hover,
    .main-nav ul li a.active {
        color: #007bff;
    }

    .register-button {
        background-color: #000000;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .register-button:hover {
        background-color: #333333;
    }

    .main-nav a.active {
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
        transition: 0.3s ease;
    }

    /* Close Button */
    .close {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        top: 5px;
        right: 15px;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    </style>
</head>
<body>
<header class="main-header">
    <div class="container header-content">
        <div class="logo">
            <img src="images/logoTelkom.png" alt="Logo Telkom Indonesia">
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="product.php" class="<?= $current_page == 'product.php' ? 'active' : '' ?>">Product</a></li>
                <li><a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About Us</a></li>
                <li><a href="activity.php" class="<?= $current_page == 'activity.php' ? 'active' : '' ?>">Activity</a></li>
                <li><a href="solution.php" class="<?= $current_page == 'solution.php' ? 'active' : '' ?>">Total Solution</a></li>
                <li><a href="program.php" class="<?= $current_page == 'program.php' ? 'active' : '' ?>">Program</a></li>
            </ul>
        </nav>

              <a href="register.php" class="register-button">Register</a>
    </div>
</header>


</script>

</body>
</html>
