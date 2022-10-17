<!DOCTYPE html>
<html>
<?php
	session_start();
	include '../config/koneksi.php';
	$role = $_SESSION['data_user']['role'];
	
?>
<head>
	<title>Halaman pelanggan</title>
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
				<form  action="../funtion/masuk.php" method="POST">
                    <div class="form-grup-pel">
                        <h1 style="color:red;text-align:center;">INPUT PELANGGAN</h1>
                        <hr>
                        <label class="text-pel">ID PELANGGAN</label>
                        <input type="number" name="id_pelanggan"  placeholder="Masukan ID Pelanggan"  class="text-colom-pel" value="<?php

							$karakter = '20210615';
							$shuffle  = substr(str_shuffle($karakter), 0, 12);
							echo $shuffle;

							?>" readonly><br>

                        <label class="text-pel">NO.METER</label>
                        <input type="number" name="no_meter" placeholder="Masukan No Meter"  class="text-colom-pel" value="<?php

							$karakter = '12345678910';
							$shuffle  = substr(str_shuffle($karakter), 0, 10);
							echo $shuffle;

							?>" readonly><br>

                        <label class="text-pel">NAMA</label>
                        <input type="text" name="nama" placeholder="Masukan Nama Anda"  class="text-colom-pel"><br>

                        <label class="text-pel">ALAMAT</label>
                        <input type="text" name="alamat" placeholder="Masukan Alamat Anda"  class="text-colom-pel"><br>

						<label class="text-pel">TANGGAL</label>
                        <input type="date" name="tenggang" placeholder="Masukan Tenggang"  class="text-colom-pel"><br>

						<label class="text-pel">KODE TARIF</label>
						<select type="text" name="id_tarif" class="text-colom-pel" id="id_tarif" required> 
						
						<?php  $sql = mysqli_query($koneksi, "SELECT * FROM tarif")?>
						<?php  foreach ($sql as $d) {?>
						 <option value="<?= $d['kode_tarif']; ?>"><?= $d['kode_tarif']; ?></option>
						 <?php } ?>
						</select> 

                        <input type="submit" name="submit" value="SIMPAN" class="klik-pel"><br>
						<!-- <input type="submit" name="reset" value="RESET" class="klik2-pel"><br> -->
					</div>
				</form>
		</div>
	</section>
	<div class="panel-heading-pel">
		<div class="panel-body">
			<form method="get">
				<h3 style="color:red;">DAFTAR PELANGGAN</h3>
				<hr>
				<div class="output-grup-pel">
					<input type="text" name="bcari" class="form-control-pel"placeholder="Masukan Keyword Pencarian (ID Pelanggan, no meter	).."  value="<?php echo $_GET['bcari'] ?? "" ?>">
						<button type="submit" class=" btn-primary-pel"><span ></span>&nbsp;CARI</button>
						<button type="submit"  name="brefresh" class="btn-success-pel"><span></span>&nbsp;REFRESH</button>
					
					<table class="table-grup-pel" border="1">
						<thead>
						<th class="penggunaan-pel">No</th>
						<th class="penggunaan-pel">ID Pelanggan</th>
						<th class="penggunaan-pel">NO METER</th>
						<th class="penggunaan-pel">NAMA</th>
						<th class="penggunaan-pel">ALAMAT</th>
						<th class="penggunaan-pel">TANGGAL</th>
						<th class="penggunaan-pel">KODE TARIF</th>
						<th class="penggunaan-pel"><center>AKSI</center></th>
						</thead>
						</tr>
						<?php  

						$no = 1;
						$id = $_GET['bcari'] ?? "";
						$query = "";
						if($id) {
							$query .= "select * from _pelanggan where id_pelanggan like '%".$id."%' or no_meter LIKE '%".$id."%'";
						}else{
							$query .= "select * from _pelanggan";
						}
						$data = mysqli_query($koneksi, $query);
						while($d = mysqli_fetch_array($data)){
							?>
							<center>
							<tr class="table-pel">
								<td><?php echo $no++; ?></td>
								<td class="penggunaan-pel"><?php echo $d['id_pelanggan']; ?></td>
								<td class="penggunaan-pel"><?php echo $d['no_meter'];?> </td>
								<td class="penggunaan-pel"><?php echo $d['nama']; ?></td>
								<td class="penggunaan-pel"><?php echo $d['alamat']; ?></td>
								<td class="penggunaan-pel"><?php echo $d['tenggang']; ?></td>
								<td class="penggunaan-pel"><?php echo $d['id_tarif']; ?></td>
								<td>
									<a href=../config/hapus.php?id=<?php echo $d['id_pembayaran']; ?>" class="penggunaan-pel-cek-h">HAPUS</a>
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
		<!-- pembuka footer -->
	<!-- <section class="section-footer">
		<div class="box-footer">
			<small>copyright &copy; 2021-Listrik Family. All Rights Reserved</small>
		</div>

	</section> -->
	<!-- penutup footer -->

</body>

</html>