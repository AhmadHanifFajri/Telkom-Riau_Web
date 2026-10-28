<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        
/* Modern Footer Styles */
.detailed-footer {
    background: linear-gradient(135deg, #111, #222); /* Gradasi gelap modern */
    color: #ffffff;
    padding: 60px 0 40px 0;
    border-top: 5px solid #ff0000;
    font-family: 'Poppins', sans-serif;
}

.footer-content-grid {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    gap: 40px;
}

.footer-contact {
    flex: 1;
    min-width: 250px;
}

.footer-contact .footer-logo {
    max-width: 160px;
    height: auto;
    margin-bottom: 20px;
}

.footer-contact p {
    font-size: 0.95em;
    line-height: 1.7;
    margin: 8px 0;
    color: #ccc;
}

/* Navigation links */
.footer-nav {
    flex: 1;
    min-width: 200px;
}

.footer-nav h4 {
    font-size: 1.1em;
    margin-bottom: 15px;
    color: #fff;
}

.footer-nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-nav ul li {
    margin-bottom: 10px;
}

.footer-nav ul li a {
    color: #ddd;
    text-decoration: none;
    font-size: 0.95em;
    transition: color 0.3s ease;
}

.footer-nav ul li a:hover {
    color: #ff3b3b;
}

/* Social icons (optional enhancement) */
.footer-social {
    margin-top: 20px;
}

.footer-social a {
    display: inline-block;
    margin-right: 10px;
    color: #ccc;
    font-size: 1.2em;
    transition: color 0.3s ease;
}

.footer-social a:hover {
    color: #ff0000;
}

/* Copyright line */
.footer-bottom {
    text-align: center;
    margin-top: 40px;
    font-size: 0.85em;
    color: #888;
    border-top: 1px solid #444;
    padding-top: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .footer-content-grid {
        flex-direction: column;
        text-align: center;
        gap: 30px;
    }

    .footer-nav ul {
        text-align: center;
    }

    .footer-nav ul li {
        display: inline-block;
        margin: 5px 10px;
    }

    .footer-nav ul li a {
        font-size: 0.9em;
    }

    .footer-social a {
        font-size: 1.5em;
    }
}

    </style>
</head>

<body>
<footer class="detailed-footer">
    <div class="footer-content-grid">
        <div class="footer-contact">
            <img src="images/logoTelkomFooter.png" alt="Telkom Indonesia Footer Logo" class="footer-logo">
            <p>Graha Merah Putih Pekanbaru<br>
               Jl. Jend. Sudirman No.199, Pekanbaru, Riau 28111</p>
            <p>Email: witelridar@gmail.com</p>
            <p>Mon - Fri: 9:00 AM - 5:00 PM</p>
            <div class="footer-social">
                <a href="https://www.youtube.com/@IndibizRiauDaratan" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://x.com/Indibizridar" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/indibiz.riaudaratan?igsh=MWR5Z3U5bWtyODU4cA==" target="_blank"><i class="fab fa-instagram"></i></a>
                 <a href="mailto:witelridar@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
            </div>
        </div>

        <nav class="footer-nav">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="activity.php">Activity</a></li>
                <li><a href="solution.php">Total Solution</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </div>

    <div class="footer-bottom">
        © 2025 telkomriau.com — All rights reserved.
    </div>
</footer>

</body>
</html>