<?php 
$koneksi = mysqli_connect("localhost","root","","pembayaran_listrik");

if (mysqli_connect_errno()) {
	echo "koneksi database gagal :". mysqli_connect_error();
}
?>