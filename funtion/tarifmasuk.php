<?php
    include '../config/koneksi.php';

if(isset($_POST['simpan'])){
	$golongan = $_POST['golongan'];
	$daya = $_POST['daya'];
	$kode_tarif = $golongan."/".$daya;
    $tarif_perkwh = $_POST['tarif_perkwh'];

	mysqli_query($koneksi,"INSERT INTO tarif VALUES('','$kode_tarif', '$golongan', '$daya', '$tarif_perkwh')");
    echo "
    <script>
        alert('data berhasil di input');
        document.location.href = '../pln/tarif.php';
    </script>
    ";
} else {
echo "
    <script>
        alert('data gagal di input');
        document.location.href = '../pln/tarif.php';
    </script>
    ";
	// header("location:../pln/datapelanggan.php");
}
?>