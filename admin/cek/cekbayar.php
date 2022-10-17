                
                
                <?php 
                include '../config/koneksi.php';
					  if (isset($_POST['submit'])) {
						$tgl = $_POST['tgl'];
						$jam = $_POST['jam'];
						$id_pelanggan = $_POST['id_pelanggan'];
						$meter_awal = $_POST['meter_awal'];
						$meter_akhir = $_POST['meter_akhir'];
						$jumlah_meter = $_POST['jumlah_meter'];
						$jumlah_bayar= $_POST['jumlah_bayar'];
						$biaya_admin = $_POST['biaya_admin'];
						$total_bayar = $_POST['total_bayar'];
						$uang = $_POST['uang'];
						$kembali = $uang-$total_bayar;
						$status =$_POST['status'];
				
						mysqli_query($koneksi,"INSERT INTO tagihan VALUES('','$meter_awal','$meter_akhir','$jumlah_meter','$jumlah_bayar','$biaya_admin','$total_bayar','$uang','$status','$id_pelanggan','$tgl','$jam','$kembali')");
						echo "
					<script>
						alert('berhasil membayar');
						document.location.href = 'bayar.php';
					</script>
					";
				} else {
				echo "
					<script>
						alert('gagal membayar');
						document.location.href = 'cetak.php';
					</script>
					";
					}
					  ?>