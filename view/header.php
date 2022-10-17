<?php
    $role = $_SESSION['data_user']['role'];
?>
<style type="text/css">
			html,
			body {
				padding: 0;
				margin: 0;
				font-family: sans-serif;
			}

			.menu-down {
				background-color: #3141ff;
			}

			.menu-down ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
			}

			.menu-down>ul>li {
				float: left;
			}


			.menu-down li a {
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
				
			}

			.menu-down li a:hover {
				background-color: #2525ff;
				
			}

			li.dropdown {
				display: inline-block;
			}

			.dropdown:hover .isi-dropdown {
				display: block;
			}

			.isi-dropdown a:hover {
				color: #fff !important;
				
			}

			.isi-dropdown {
				position: absolute;
				display: none;
				box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
				z-index: 1;
				background-color: #f9f9f9;
			}

			.isi-dropdown a {
				color: #3c3c3c !important;
				
			}

			.isi-dropdown a:hover {
				color: #232323 !important;
				background: #f3f3f3 !important;
				
			}
			@media screen and (max-width: 780px) {
				.menu-down {
					width: auto;
					font-size: 15px;
				}
			}
		</style>
<header class="header">
    <div class="menu-down">

        <ul>
            <li><a href="/kumpulan%20projack/Tugas_Projek_Akhir/list/dashboard.php"><i class="fa fa-home" arial-hidden="true">Home</i></a></li>
            <?php
                if($role == 0) {
            ?>
            <li class="dropdown"><a href="#"><i class="fa fa-bars" arial-hidden="true">Data Dasar</i></a>
                <ul class="isi-dropdown">
                    <li><a href="../pln/tarif.php">Kelola Tarif</a></li>
                    <li><a href="../pln/datapelanggan.php">Kelola Planggan</a></li>
                </ul>
            </li>
            
            <li class="dropdown"><a href="#"><i class="fa fa-refresh" arial-hidden="true">Transaksi</i></a>
                <ul class="isi-dropdown">
                    <li><a href="../pln/daftar_tagihan.php">Daftar Tagihan</a></li>
                    <li><a href="../pln/penggunaan.php">kelola Penggunaan</a></li>
                </ul>
            </li>
			<li class="dropdown"><a href="#"><i class="fa fa-address-book">Laporan</i></a>
						<ul class="isi-dropdown">
							<li><a href="../laporan/laporan_data_tarif.php">Laporan Data Tarif</a></li>
							<li><a href="../laporan/laporan_data_pelanggan.php">Laporan Data Pelanggan</a></li>
							<li><a href="../laporan/laporan_data_tagihan.php">Laporan Tagihan (Perbulan)</a></li>
						</ul>
			</li>
            <?php }?>
    
            <li><a href="../index.php"><i class="fa fa-sign-out" arial-hidden="true">logout</i></a></li>
        </ul>
    </div>
</header>