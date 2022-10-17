<?php
session_start();
include '../config/koneksi.php';
	$role = $_SESSION['data_user']['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../images/listrik.png">
    <title>DATA TARIF</title>
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
			<form action="" method="POST">
				<h3 style="color:red;">LAPORAN DATA TARIF</h3>
				<hr>
				<div class="output-grup">
					<table class="table-grup" border="1" style="width:1100px;">
						<thead>
						<tr>
						<th class="penggunaan">ID Tarif</th>
						<th class="penggunaan">Golongan</th>
						<th class="penggunaan">Daya</th>
						<th class="penggunaan">Tarif PerKWH</th>
						</thead>
						</tr>
						<?php  
						

						$no = 1;
						$data = mysqli_query($koneksi,"select * from tarif");
						while($d = mysqli_fetch_array($data)){
							?>
							<center>
							<tr>
							<td class="penggunaan"><?php echo $d['id_tarif']; ?></td>
							<td class="penggunaan"><?php echo $d['golongan']; ?></td>
							<td class="penggunaan"><?php echo $d['daya']; ?></td>
							<td class="penggunaan"><?php echo $d['tarif_perkwh']; ?></td>
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
</body>
</html>
