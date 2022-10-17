<?php
    include '../config/koneksi.php';

if(isset($_POST['submit'])){
	$id_pelanggan = $_POST['id_pelanggan'];
	$no_meter = $_POST['no_meter'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
    $tenggang = $_POST['tenggang'];
    $id_tarif = $_POST['id_tarif'];

	mysqli_query($koneksi,"INSERT INTO _pelanggan VALUES('$id_pelanggan', '$no_meter', '$nama', '$alamat','$tenggang','$id_tarif','')");
    echo "
    <script>
        alert('data berhasil di input');
        document.location.href = '../pln/datapelanggan.php';
    </script>
    ";
} else {
echo "
    <script>
        alert('data gagal di input');
        document.location.href = '../pln/datapelanggan.php';
    </script>
    ";
	// header("location:../pln/datapelanggan.php");
}
?>