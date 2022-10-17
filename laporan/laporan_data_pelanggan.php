<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "../config/koneksi.php";
	$role = $_SESSION['data_user']['role'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/listrik.png">
    
    <title>DATA PELANGGAN</title>
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
			<h3 style="color:red;">LAPORAN DATA PELANGGAN</h3>
			<hr>
			<div class="output-grup">
                <table class="table-grup" border="1">
                <thead>
                <tr>
                <th class="penggunaan">ID Pelanggan</th>
                <th class="penggunaan">No Meteran</th>
                <th class="penggunaan">Nama</th>
                <th class="penggunaan">Alamat</th>
                <th class="penggunaan">Tegangan</th>
                <th class="penggunaan">ID Tarif</th>
                <th class="penggunaan">ID Pembayaran</th>
				</tr>
                </thead>
        
        <?php
           
            $data = mysqli_query($koneksi,"select * from _pelanggan");
                while ($d = mysqli_fetch_array($data)) {
        ?>

                    <tr>
                        <td class="penggunaan"><?php echo $d['id_pelanggan']; ?></td>
                        <td class="penggunaan"><?php echo $d['no_meter']; ?></td>
                        <td class="penggunaan"><?php echo $d['nama']; ?></td>
                        <td class="penggunaan"><?php echo $d['alamat']; ?></td>
                        <td class="penggunaan"><?php echo $d['tenggang']; ?></td>
                        <td class="penggunaan"><?php echo $d['id_tarif']; ?></td>
                        <td class="penggunaan"><?php echo $d['id_pembayaran']; ?></td>
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
