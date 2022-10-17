<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	include '../config/koneksi.php'; 
	
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from penggunaan where id_penggunaan='$id'");
	while($d = mysqli_fetch_array($data)){

		
?>
	<title>Halaman Pembayaran 2</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="../images/listrik.png">
	<style>
		button {
			width: 70%;
		}
	</style>
</head>
<body>
	<center>
	<div class="panel-heading">
		<div class="panel-body">
				<center><h3 style="color:red;">BAYAR SEKARANG</h3></center>
				<hr>
				<div class="output-grup">
					<center><form method="post" action="cekbayar.php">
						<table align="center" cellpadding="5" border="1" class="table-grup">
							<tr>
								<td>Tanggal Bayar</td>
								<td>:</td>
								<td><input type="date" name="tgl"></td>
							</tr>
							<tr>
								<td>Jam</td>
								<td>:</td>
								<td><input type="time" name="jam"></td>
							</tr>
							<tr>
								<td>ID Pelanggan</td>
								<td>:</td>
								<td><input type="hidden" name="id_penggunaan" value="<?php echo $d['id']; ?>">
								<input type="text" name="id_pelanggan" value="<?php echo $d['id_pelanggan']; ?>"></td>
							</tr>
							<tr>
								<td>Meter Awal</td>
								<td>:</td>
								<td><input type="hidden" name="id_penggunaan" value="<?php echo $d['id']; ?>">
								<input type="text" name="meter_awal" value="<?php echo $d['meter_awal']; ?>"></td></td>
							</tr>
							<tr>
								<td>Meter Akhir</td>
								<td>:</td>
								<td><input type="hidden" name="id_penggunaan" value="<?php echo $d['id']; ?>">
								<input type="text" name="meter_akhir" value="<?php echo $d['meter_akhir']; ?>"></td></td>
							</tr>
							<tr>
								<td>Jumlah Meter</td>
								<td>:</td>
								<td><input type="hidden" name="id_penggunaan" value="<?php echo $d['id']; ?>">
								<input type="text" name="jumlah_meter" value="<?php echo $d['jumlah_meter']; ?>"></td></td>
							</tr>
							<tr>
								<td>Tagihan PLN</td>
								<td>:</td>
								<td><input type="hidden" name="id_penggunaan" value="<?php echo $d['id']; ?>">
								<input type="text" name="jumlah_bayar" value="<?php echo $d['jumlah_bayar']; ?>"></td></td>
							</tr>
							<tr>
								<td>Biaya Admin</td>
								<td>:</td>
								<td><input type="hidden" name="id_penggunaan" value="<?php echo $d['id']; ?>">
								<input type="text" name="biaya_admin" value="<?php echo $d['biaya_admin']; ?>"></td></td>
							</tr>
							<tr>
								<td>Total akhir</td>
								<td>:</td>
								<td><input type="hidden" name="id_penggunaan" value="<?php echo $d['id']; ?>">
								<input type="text" name="total_bayar" value="<?php echo $d['total_bayar']; ?>"></td></td>
							</tr>
							<tr>
								<td>Uang</td>
								<td>:</td>
								<td><input type="text" name="uang"></td>
							</tr>
							<tr>
								<td>Status</td>
								<td>:</td>
								<td><select type="text" name="status">
								 <option value="Terbayar">Terbayar</option>
								</select></td>
							</tr>
							
							<tr>
								<td colspan="3" align="center"><button name="submit">bayar</button></td>
							</tr>
						</table>
					</form>
					</center>
				</div>
		</div>
	 </div>	
	 </center>
	 <?php 
	}
	?>
</body>
</html>