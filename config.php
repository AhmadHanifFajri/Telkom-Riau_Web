<?php
$con = mysqli_connect("localhost", "root", "", "registertelkom");

// cek koneksi
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
