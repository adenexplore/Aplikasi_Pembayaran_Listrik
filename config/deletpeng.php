<?php
	include "koneksi.php";
	$id = $_GET['id'];

	mysqli_query($koneksi,"delete from penggunaan where id_penggunaan='$id'");
						
						
	header("location:../pln/penggunaan.php");

	?>