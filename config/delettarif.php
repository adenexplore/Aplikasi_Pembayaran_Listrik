<?php
	include "koneksi.php";
	$id = $_GET['id'];

	mysqli_query($koneksi,"delete from tarif where id_tarif='$id'");
	echo "
    <script>
        alert('data berhasil di hapus');
        document.location.href = '../pln/tarif.php';
    </script>
    ";
						
						
	// header("location:../pln/tarif.php");

	?>