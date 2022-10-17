<!DOCTYPE html>
<html>
<?php
	session_start();
	include '../config/koneksi.php';
	
	$role = $_SESSION['data_user']['role'];
?>
<head>
	<title>Halaman Tagihan</title>
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
    
	<center>
	<div class="panel-heading">
		<div class="panel-body">
			<form method="get">
				<h3 style="color:red;">DAFTAR TAGIHAN</h3>
				<hr>
				<div class="output-grup">
                    <h5>Filter Dengan Pencarian</h5>
					<input type="text" name="bcari" class="form-control-tag"placeholder="Masukan Keyword Pencarian  id pelanggan,nama pelanggan" value="<?php echo $_GET['bcari'] ?? "" ?>">
						<button type="submit" class=" btn-primary"><span></span>&nbsp;CARI</button>
						<button type="submit"  name="trefresh" class="btn-success"><span></span>&nbsp;REFRESH</button>
					
					<table class="table-grup" border="1">
                    <thead>
						<th class="penggunaan"><center>No.</center></th>
						<th class="penggunaan">ID Pelanggan</th>
						<th class="penggunaan">Bulan</th>
						<th class="penggunaan">Jumlah Meter</th>
						<th class="penggunaan">Jumlah Bayar</th>
						<th class="penggunaan">Status</th>
					</thead>
						</tr>
						<?php  
						

						$no = 1;
						$id = $_GET['bcari'] ?? "";
						$query = "";
						if($id) {
							$query .= "select * from tagihan where id_pelanggan like '%".$id."%' or Nama_pelanggan LIKE '%".$id."%'";
						}else{
							$query .= "select * from tagihan";
						}
						$data =mysqli_query($koneksi, $query);
						while($r = mysqli_fetch_array($data)){
							?>
							<center>
							    <tr class="table-peng">
								    <td class="penggunaan"><?php echo $no++; ?></td>
    								<td class="penggunaan"><?php echo $r['id_pelanggan']; ?></td>
									<td class="penggunaan"><?php echo $r['tgl']; ?></td>
									<td class="penggunaan"><?php echo $r['jumlah_meter']; ?></td>
									<td class="penggunaan"><?php echo $r['jumlah_bayar']; ?></td>
									<td class="penggunaan"><?php echo $r['status']; ?></td>
								</tr>
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