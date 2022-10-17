<!DOCTYPE html>
<html lang="en">
<?php
session_start();
	$role = $_SESSION['data_user']['role'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../images/listrik.png">
    
    <title>DATA TUNGGAKAN</title>
</head>
<body>


	<div class="bglogo">
		<div class="logoleft"><img src="../images/listrik.png" alt="ini logo"></div>
		<div class="logoleft"><i><a href="#">
					<font color="red"> P</font>
					<font color="gray"> L</font>
					<font color="yellow"> N</font>
				</a></i></div>
		<div class="logoright"><a href="../pln/profil.php"><i class="fa fa-user" arial-hidden="true"> <?php echo $_SESSION['data_user']['nama']; ?></a></i> </div>

		<?php
			require("../view/header.php")
		?>
			</div>
		</header>
	</div>
    
<center>
<div class="panel-heading">
		<div class="panel-body">
				<h3 style="color:red;">LIST TUNGGAKAN</h3>
				<hr>
				<div class="output-grup">
					<table class="table-grup" border="1">
						<thead>
                        <th class="penggunaan">NO</th>
						<th class="penggunaan">ID Pelanggan</th>
						<th class="penggunaan">Bulan</th>
                        <th class="penggunaan">Tahun</th>
						<th class="penggunaan">Jumlah Meter</th>
						<th class="penggunaan">Tarif PerKWH</th>
						<th class="penggunaan">Jumlah Bayar</th>
						<th class="penggunaan">Status</th>
						<th class="penggunaan">Nama Pelanggan</th>
                        <th class="penggunaan">Nama Petugas</th>
						</thead>
						</tr>
						<?php  
						include '../config/koneksi.php';

						$no = 1;
						$data = mysqli_query($koneksi,"select * from tagihan");
						while($d = mysqli_fetch_array($data)){
							?>
							<center>
							<tr class="table-peng">
								<td class="penggunaan"><?php echo $no++; ?></td>
								<td class="penggunaan"><?php echo $d['id_pelanggan']; ?></td>
								<td class="penggunaan"><?php echo $d['bulan'];?> </td>
								<td class="penggunaan"><?php echo $d['tahun']; ?></td>
								<td class="penggunaan"><?php echo $d['jumlah_meter']; ?></td>
								<td class="penggunaan"><?php echo $d['tarif_perkwh']; ?></td>
								<td class="penggunaan"><?php echo $d['jumlah_bayar']; ?></td>
                                <td class="penggunaan"><?php echo $d['status']; ?></td>
                                <td class="penggunaan"><?php echo $d['Nama_Pelanggan']; ?></td>
                                <td class="penggunaan"><?php echo $d['Nama_Petugas']; ?></td>
							</tr>
							<?php 
						}
						?>
					</table>
					</div>		
				</div>
		
		</div>	
	</div>
	</center>
</body>
</html>