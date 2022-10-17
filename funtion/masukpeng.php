<?php
    include '../config/koneksi.php';

if(isset($_POST['submit'])){
	$id_pelanggan = $_POST['id_pelanggan'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$meter_awal = $_POST['meter_awal'];
	$meter_akhir = $_POST['meter_akhir'];
	$jumlah_meter = $meter_akhir-$meter_awal;
    $jumlah_bayar = $jumlah_meter * 10 ."00";
    $biaya_admin = "2000";
    $total_bayar = 2000 + $jumlah_bayar ;
	$tgl_cek = $_POST['tgl_cek'];
	$petugas = $_POST['petugas'];

	mysqli_query($koneksi,"INSERT INTO penggunaan VALUES('','$id_pelanggan', '$bulan','$tahun' ,'$meter_awal', '$meter_akhir','$jumlah_meter' ,'$tgl_cek','$petugas','$jumlah_bayar','$biaya_admin','$total_bayar')");
    echo "
    <script>
        alert('data berhasil di input');
        document.location.href = '../pln/penggunaan.php';
    </script>
    ";
} else {
echo "
    <script>
        alert('data gagal di input');
        document.location.href = '../pln/penggunaan.php';
    </script>
    ";
	// header("location:../pln/datapelanggan.php");
}
?>