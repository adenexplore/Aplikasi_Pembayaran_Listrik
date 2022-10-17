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
					<li><a href="dashboard.php"><i class="fa fa-home" arial-hidden="true">HOME</i></a></li>
					<?php
						if($role == 0) {
					?>
					
					</li>
					<?php }?>
					<li class="dropdown"><a href="#"><i class="fa fa-address-book">TRANSAKSI</i></a>
						<ul class="isi-dropdown">
							<li><a href="riwayatpembayaran.php">RIWAYAT PEMBAYARAN</a></li>
							<li><a href="kelolapembayaran.php">KELOLA PEMBAYARAN</a></li>
						</ul>
					<li><a href="../index.php"><i class="fa fa-sign-out" arial-hidden="true">LOGOUT </i></a></li>
				</ul>
			</div>
		</header>