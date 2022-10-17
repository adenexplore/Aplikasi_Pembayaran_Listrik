<!DOCTYPE html>
<html>
<?php
	session_start();
	include '../config/koneksi.php';
	$role = $_SESSION['data_user']['role'];
?>
<head>
	<title>Halaman pembayaran 1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<div class="logoright"><a href="../../pln/profil.php"><i class="fa fa-user" arial-hidden="true"> <?php echo $_SESSION['data_user']['nama']; ?></a></i> </div>

		<?php
			require("../view/header.php")
		?>
	</div>

	<!-- penutup navbar -->
<center>
    <div class="panel-heading">
		<div class="panel-body">
			<form method="get">
				<h3 style="color:red;">INPUT PEMBAYARAN</h3>
				<hr>
				<div class="output-grup">
                  <h5>ID PELANGGAN</h5>
					<input type="text" name="tcari" class="form-control-tag"placeholder="Maukan ID PELANGGAN" value="<?php echo $_GET['tcari'] ?? "" ?>">
			    	<button type="submit" class=" btn-primary"><span></span>&nbsp;CARI</button><br><br>	
                </div>
				<center><table class="table-grup" border="1">
                    <thead>
						<th class="penggunaan"><center>No.</center></th>
						<th class="penggunaan">ID Pelanggan</th>
						<th class="penggunaan">Bulan</th>
						<th class="penggunaan">Tahun</th>
						<th class="penggunaan">Meter Awal</th>
						<th class="penggunaan">Meter Akhir</th>
						<th class="penggunaan">Jumlah Meter</th>
						<th class="penggunaan"> Jumlah Bayar</th>
						<th class="penggunaan">Biaya Admin</th>
						<th class="penggunaan">Total Bayar</th>
						<th class="penggunaan">Aksi</th>
					</thead>
						</tr>
						<?php  
						$no = 1;
						$id = $_GET['tcari'] ?? "";
						$query = "";
						if($id) {
							$query .= "select * from penggunaan where id_pelanggan like '%".$id."%' or bulan LIKE '%".$id."%'";
						}else{
							$query .= "select * from penggunaan";
						}
						$data =mysqli_query($koneksi, $query);
						while($r = mysqli_fetch_array($data)){
						?>
							<center>
							    <tr style="width:20%;">
								    <td class="penggunaan"><?php echo $no++; ?></td>
    								<td class="penggunaan"><?php echo $r['id_pelanggan']; ?></td>
									<td class="penggunaan"><?php echo $r['bulan']; ?></td>
								    <td class="penggunaan"><?php echo $r['tahun']; ?></td>
									<td class="penggunaan"><?php echo $r['meter_awal']; ?></td>
									<td class="penggunaan"><?php echo $r['meter_akhir']; ?></td>
									<td class="penggunaan"><?php echo $r['jumlah_meter'] ; ?></td>
									<td class="penggunaan"><?php echo $r['jumlah_bayar']; ?></td>
									<td class="penggunaan"><?php echo $r['biaya_admin'] ; ?></td>
									<td class="penggunaan"><?php echo $r['total_bayar'] ; ?></td>
									<td><a href="cetak.php?id=<?php echo $r['id_penggunaan']; ?>" style="text-decoration:none;background-color:green;color:white;padding:5px;"> BAYAR</a></td>
								</tr>
							</center>
							<?php 
						}
						?>
				</table>
				
            </form>
        </div>   
    </div>
</center>
    <br>		
	<!-- pembuka footer -->
	<section class="section-footer">
		<div class="box-footer">
			<small>copyright &copy; 2021-Listrik Family. All Rights Reserved</small>
		</div>

	</section>
	<!-- penutup footer -->

</body>

</html>