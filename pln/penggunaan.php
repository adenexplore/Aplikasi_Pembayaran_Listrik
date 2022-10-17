<!DOCTYPE html>
<html>
<?php
	session_start();
	include '../config/koneksi.php';
	$role = $_SESSION['data_user']['role'];
?>
<head>
	<title>Halaman penggunaan</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../images/listrik.png">
</head>



<body>
	<!-- pembuka navbar -->

	<div class="bglogo">
		<div class="logoleft"><img src="../images/listrik.png" alt="ini logo"></div>
		<div class="logoleft"><i><a href="#">
					<font color="red"> P</font>
					<font color="gray"> L</font>
					<font color="yellow"> N</font>
				</a></i></div>
		<div class="logoright"><a href="profil.php"><i class="fa fa-user" arial-hidden="true"> <?php echo $_SESSION['data_user']['nama']; ?></a></i> </div>

		<?php
			require("../view/header.php")
		?>
	</div>

	<!-- penutup navbar -->
    <section class="section-page">
		<div class="panel-body">
				<center>
				<form action="../funtion/masukpeng.php"  method="POST">
                    <div class="form-grup">
                        <h1 style="color:red;text-align:center;">INPUT PENGGUNAAN</h1>
                        <hr>
                        <label class="text">ID PELANGGAN</label>&nbsp;&nbsp;<span style="color:blue;font-size: 10px;">[TEKAN TAB]</span><br>
						<select type="text" name="id_pelanggan"   class="text-colom" id="id_pembayaran" required > 
						<?php  $sql = mysqli_query($koneksi, "SELECT * FROM _pelanggan")?>
						<?php  foreach ($sql as $d) {?>
						 <option value="<?= $d['id_pelanggan']; ?>"><?= $d['id_pelanggan']; ?></option>
						 <?php } ?>">
						 <select>
						 <br>
                        <label class="text">BULAN PENGGUNAAN</label><br>
                        <input type="text" name="bulan" placeholder="Masukan Bulan Penggunaan" class="text-colom"><br>
                        <label class="text">TAHUN PENGGUNAAN</label><br>
                        <input type="number" name="tahun" placeholder="Masukan tahun Penggunaan" class="text-colom"><br>
                        <label class="text">METER AWAL</label><br>
                        <input type="text" name="meter_awal" placeholder="Meter Awal" class="text-colom"><br>
                        <label class="text">METER AKHIR</label><br>
                        <input type="text" name="meter_akhir"placeholder="Masukan Meter Akhir"  class="text-colom"><br>
                        <label class="text">TANGGAL PENGECEKAN</label><br>
						<input type="number" name="tgl_cek"placeholder="Masukan tanggal pengecekan"  class="text-colom"><br>
						<label class="text">PETUGAS</label><br>
						<input type="text" name="petugas"placeholder="Masukan nama"  class="text-colom"><br><br>
                        <input type="submit" name="submit" value="SIMPAN" class="klik" style="margin-bottom: 10px;"><br>
						<!-- <input type="submit" name="reset" value="RESET" class="klik2"><br> -->
						</div>
						
				</form>
				</center>
		</div>
	</section>
	<center>
	<div class="panel-heading">
		<div class="panel-body">
			<form  method="get">
				<h3 style="color:red;">DAFTAR PENGGUNAAN</h3>
				<hr>
				<div class="output-grup">
					<input type="text" name="bcari" class="form-control"placeholder="Masukan Keyword Pencarian (Kode Penggunaan, ID Pelanggan, Bulan " value="<?php echo $_GET['bcari'] ?? "" ?>">
						<button type="submit" class=" btn-primary"><span ></span>&nbsp;CARI</button>
						<button type="submit"  name="brefresh" class="btn-success"><span></span>&nbsp;REFRESH</button>
					
					<table class="table-grup" border="1">
						<thead>
						<th class="penggunaan">No</th>
						<th class="penggunaan">ID Pelanggan</th>
						<th class="penggunaan">Bulan</th>
						<th class="penggunaan">Tahun</th>
						<th class="penggunaan">Meter Awal</th>
						<th class="penggunaan">Meter Akhir</th>
						<th class="penggunaan">Tanggal Cek</th>
						<th class="penggunaan">Petugas</th>
						<th class="penggunaan"><center>AKSI</center></th>
						</thead>
						</tr>
						<?php  
						$no = 1;
						$id = $_GET['bcari'] ?? "";
						$query = "";
						if($id) {
							$query .= "select * from penggunaan where id_pelanggan like '%".$id."%' or bulan LIKE '%".$id."%'";
						}else{
							$query .= "select * from penggunaan";
						}
						$data = mysqli_query($koneksi, $query);
						while($d = mysqli_fetch_array($data)){
							?>
							<center>
							<tr class="table-peng">
								<td class="penggunaan"><?php echo $no++; ?></td>
								<td class="penggunaan"><?php echo $d['id_pelanggan']; ?></td>
								<td class="penggunaan"><?php echo $d['bulan'];?> </td>
								<td class="penggunaan"><?php echo $d['tahun'];?> </td>
								<td class="penggunaan"><?php echo $d['meter_awal']; ?></td>
								<td class="penggunaan"><?php echo $d['meter_akhir']; ?></td>
								<td class="penggunaan"><?php echo $d['tgl_cek']; ?></td>
								<td class="penggunaan"><?php echo $d['petugas']; ?></td>
								<td>
								<a href="../config/deletpeng.php?id=<?php echo $d['id_penggunaan']; ?>" class="penggunaan-peng-cek-h">HAPUS</a>
								</td>
							</tr>
							<?php 
						}
						?>
					</table>
					</div>		
				</div>
			</form>
		</div>	
	</div>
	</center>
		<!-- pembuka footer -->
	<section class="section-footer">
		<div class="box-footer">
			<small>copyright &copy; 2021-Listrik Family. All Rights Reserved</small>
		</div>

	</section>
	<!-- penutup footer -->

</body>

</html>