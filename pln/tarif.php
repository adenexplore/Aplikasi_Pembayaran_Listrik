<!DOCTYPE html>
<html>
<?php
	session_start();
	include '../config/koneksi.php';

	$role = $_SESSION['data_user']['role'];

	$data_untuk_edit = array();
	if (isset($_GET['edit'])) {
		$query_data = mysqli_query($koneksi, "select * from tarif where id_tarif = ".$_GET['edit']);


		while($d = mysqli_fetch_array($query_data)){
			// $data_sementara['id_tarif']
			array_push($data_untuk_edit, $d);
		}
	}	
?>
<head>
	<title>Halaman Tarif</title>
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
				<form  action="../funtion/tarifmasuk.php" method="POST">
                    <div class="form-grup-pel">
                        <h1 style="color:red;text-align:center;">INPUT TARIF</h1>
                        <hr>
                        <label class="text-pel">GOLONGAN</label>
						<select name="golongan" class="text-colom-pel">
							<option 
								value="R1" 
								selected="<?php if($data_untuk_edit[0][2] == "R1"){
									echo "selected";
								} ?>"
							>R1</option>
							<option 
								value="R2" 
								selected="<?php if($data_untuk_edit[0][2] == "R2") echo "selected"; ?>"
							>R2</option>
							<option 
								value="R3" 
								selected="<?php if($data_untuk_edit[0][2] == "R3") echo "selected"; ?>"
							>R3</option>
							<option 
								value="B1" 
								selected="<?php if($data_untuk_edit[0][2] == "B1") echo "selected"; ?>"
							>B1</option>
							<option 
								value="B2" 
								selected="<?php if($data_untuk_edit[0][2] == "B2") echo "selected"; ?>"
							>B2</option>
						</select>

                        <label class="text-pel">DAYA</label>
                        <input type="text-pel" name="daya" placeholder="Masukan daya"  class="text-colom-pel" value="<?php echo $data_untuk_edit[0][3] ?? "" ?>"><br>

                        <label class="text-pel">TARIF/KWH</label>
                        <input type="text-pel" name="tarif_perkwh" placeholder="Masukan tarif/kwh" class="text-colom-pel" value="<?php echo $data_untuk_edit[0][4] ?? "" ?>"><br>
						<?php
							if($data_untuk_edit){
								echo '<input type="submit" name="update" value="UPDATE" class="klik-pel"><br>';
							}else{
								echo '<input type="submit" name="simpan" value="SIMPAN" class="klik-pel"><br>';
							}
						
						?>                
						<!-- <a  href="tarif.php"  class="klik2-pel" style="padding-right:180px;padding-bottom:10px;text-decoration:none;">
							RESET
						</a>  -->
					</div>       					
				</form>
		</div>
	</section>
	<div class="panel-heading-pel-tarif">
		<div class="panel-body">
			<form  method="get">
				<h3 style="color:red;">DAFTAR TARIF</h3>
				<hr>
				<div class="output-grup-pel">
					<input type="text" name="tcari" class="form-control-pel-tarif"placeholder="Masukan Keyword Pencarian .." value="<?php echo $_GET['tcari'] ?? "" ?>">
						<button type="submit" class=" btn-primary-pel"><span ></span>&nbsp;CARI</button>
						<button type="button"  name="brefresh" class="btn-success-pel"><span></span>&nbsp;REFRESH</button>
					
					<table class="table-grup-pel" border="1">
						<thead>
						<th class="penggunaan-pel-tarif">No</th>
						<th class="penggunaan-pel-tarif">KODE TARIF</th>
						<th class="penggunaan-pel-tarif">GOLONGAN</th>
						<th class="penggunaan-pel-tarif">DAYA</th>
						<th class="penggunaan-pel-tarif">TARIF/KWH</th>
						<th class="penggunaan-pel-tarif"><center>AKSI</center></th>
						</thead>
						</tr>
						<?php  
						$no = 1;

						$id = $_GET['tcari'] ?? "";
						$query = "";
						if($id) {
							$query .= "select * from tarif where kode_tarif like '%".$id."%' or golongan LIKE '%".$id."%'";
						}else{
							$query .= "select * from tarif";
						}
						$data = mysqli_query($koneksi, $query);
						while($d = mysqli_fetch_array($data)){
							?>
							<center>
							<tr class="table-pel">
								<td><?php echo $no++; ?></td>
								<td class="penggunaan-pel-tarif"><?php echo $d['kode_tarif']; ?></td>
								<td class="penggunaan-pel-tarif"><?php echo $d['golongan'];?> </td>
								<td class="penggunaan-pel-tarif"><?php echo $d['daya']; ?></td>
								<td class="penggunaan-pel-tarif"><?php echo $d['tarif_perkwh']; ?></td>
							
								<td>
									<a href=../config/delettarif.php?id=<?php echo $d['id_tarif']; ?>" class="penggunaan-pel-cek-h">HAPUS</a>
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