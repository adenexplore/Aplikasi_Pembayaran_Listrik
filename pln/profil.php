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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../images/listrik.png">
	<title>profil</title>
</head>
<body>
	<section class="header">
		<div class="container">
			<div class="panel-body-profile">
				<h1>DATA ANDA</h1>
				 <form method="post">
				  	<div class="form-grup" style="border:1px solid;">
							<label>Nama</label>
							<input type="text"  class="form-control" value=" <?php echo $_SESSION['data_user']['nama']; ?>" readonly><Br><br>
						
						
							<label>USERNAME</label>
							<input type="text" name="username" class="form-control" value="<?php echo $_SESSION['data_user']['username']; ?>"readonly><br><br>
						
						
							<label>PASSWORD</label>
							<input type="text"  class="form-control" value="<?php echo $_SESSION['data_user']['password']; ?>"readonly><br><br>
						
						
							<label>ID PETUGAS</label>
							<input type="number"  class="form-control" value="<?php echo $_SESSION['data_user']['id_petugas']; ?>" readonly><br><br>
						
						
							<label>NO TELPON</label>
							<input type="number"  class="form-control" value="<?php echo $_SESSION['data_user']['no_telp']; ?>" readonly><br><br>
						
						
							<label>JENIS KELAMIN</label>
							<input type="number"  class="form-control" value="<?php echo $_SESSION['data_user']['jenis_kelamin']; ?>" readonly><br><br>
						
					</div>
				</form>		
			</div>
		</div>
	</section>
</body>
</html>