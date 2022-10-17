<?php
	include "koneksi.php";
	$id = $_GET['id'];

	mysqli_query($koneksi,"delete from _pelanggan where id_pembayaran='$id'");
						
						
	header("location:../pln/datapelanggan.php");

	?>