<?php
include 'config.php';

// Ambil data dari POST
$fullname = $_POST['full-name'];
$jobtitle = $_POST['job-title'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$product = $_POST['product'];

// Insert ke database
$query = "INSERT INTO register (fullname, jobtitle, company, email, phone, product) 
          VALUES ('$fullname', '$jobtitle', '$company', '$email', '$phone', '$product')";

if (mysqli_query($con, $query)) {
    echo "Data berhasil disimpan. <a href='index.php'>Kembali ke Home</a>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
