<!DOCTYPE html>
<html>
<head>

	<title>Halaman struk</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../images/listrik.png">


<?php
	session_start();
	include '../config/koneksi.php';
?>
	<title></title>
	<style type="text/css">
		body {
			margin-top: 20px;
		}
		b {
			font-size: 12px;
		}
		h4,h5 {
			margin-bottom: -10px;
		}
	</style>
</head>
<body>

	<?php  
	if (isset($_POST['submit'])) {
		$tgl = $_POST['tgl'];
		$jam = $_POST['jam'];
		$idpel = $_POST['id_pelanggan'];
		$meter_awal = $_POST['meter_awal'];
		$meter_akhir = $_POST['meter_akhir'];
		$jm = $_POST['jumlah_meter'];
		$tp= $_POST['jumlah_bayar'];
		$ba = $_POST['biaya_admin'];
		$total_bayar = $_POST['total_bayar'];
		$uang = $_POST['uang'];
		$km = $uang-$total_bayar;

		// mysqli_query($koneksi,"INSERT INTO tagihan VALUES('','$id_pelanggan','$meter_awal','$meter_akhir','$jumlah_meter','$jumlah_bayar','$biaya_admin','$total_bayar','$uang','$status')");
		
	}
	?>

	<center>
		<h4>** <font color="yellow">LISTRIK FAMILY</font><font color="red">@WWW.PLNFAMILY.COM </font>**</h4><br>
		<p>= = = = = = = = = = = = = = = = = = = = = =</p><br>
		<h5>STRUK PEMBAYARAN LISTRIK PRABAYAR</h5><br>
		
	</center>

	<center><table align="center" cellpadding="5">
                <tr>
				<td><b>IDPEL</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $idpel; ?></td>
			</tr>
			<tr>
				<td><b>Meter Awal</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $meter_awal; ?></td>
			</tr>
			<tr>
				<td><b>Meter Akhir</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $meter_akhir; ?></td>
			</tr>
			<tr>
				<td><b>Jumlah Meter</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $jm; ?></td>
			</tr>
			<tr>
				<td><b>Tagihan PLN</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $tp; ?></td>
			</tr>
			<tr>
				<td><b>Biaya Admin</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $ba; ?></td>
			</tr>
			<tr>
				<td><b>Total Bayar</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $total_bayar; ?></td>
			</tr>
            <tr>
				<td><b>Harga</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td><?php echo $uang; ?></td>
			</tr>
			<tr>
				<td style="color:red"><b>Kembalian</b></td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>:</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td style="color:red"><?php echo $km; ?></td>
			</tr>
	</table>
	</center>

	<center>
		<p>= = = = = = = = = = = = = = = = = = = = = =</p><br>	
		<h3>TERIMA KASIH </h4><br>
		<h5>Rincian Tagihan Dapat di akses di <font color="red">WWW.LISTRIK FAMILY.COM</font> , Informasi HHubungi Call Canter:123</h5><br>
		<h5>(Kode Area) 123</h5><br>
		<p><?php echo $tgl; ?> &nbsp; <?php echo $jam; ?></p>
	</center>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>
