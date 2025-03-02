<?php 
	require_once('_header.php'); 
	if (isset($_SESSION['login']) == '') {
		header("Location: login.php");
		exit();
	}
	$jml_karyawan = count(query('SELECT * FROM master LIMIT 20 OFFSET 1'));
?>

	<div id="main" class="main-content">
		<div class="container">
			<div class="baris">
				<div class="selamat-datang">
					<div class="col-header">
						<p class="judul-sm">Selamat Datang <span><?= ucfirst($_SESSION['master']) ?></span></p>
						<h2 class="judul-md">Dashboard</h2>
					</div>

					<div class="col-header txt-right">
					<a href="<?=url('order/order.php')?>" class="btn-lg bg-primary btn-new-order">
						Order Baru
						<svg width="20" height="14" viewBox="0 0 39 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M37.83 9.75H31.2V3.12C31.2 1.95 30.42 1.95 29.25 1.95C28.08 1.95 27.3 1.95 27.3 3.12V9.75H20.67C19.5 9.75 19.5 10.53 19.5 11.7C19.5 12.87 19.5 13.65 20.67 13.65H27.3V20.28C27.3 21.45 28.08 21.45 29.25 21.45C30.42 21.45 31.2 21.45 31.2 20.28V13.65H37.83C39 13.65 39 12.87 39 11.7C39 10.53 39 9.75 37.83 9.75ZM14.43 9.75H1.17C0 9.75 0 10.53 0 11.7C0 12.87 0 13.65 1.17 13.65H14.43C15.6 13.65 15.6 12.87 15.6 11.7C15.6 10.53 15.6 9.75 14.43 9.75ZM14.43 19.5H1.17C0 19.5 0 20.28 0 21.45C0 22.62 0 23.4 1.17 23.4H14.43C15.6 23.4 15.6 22.62 15.6 21.45C15.6 20.28 15.6 19.5 14.43 19.5ZM14.43 0H1.17C0 0 0 0.78 0 1.95C0 3.12 0 3.9 1.17 3.9H14.43C15.6 3.9 15.6 3.12 15.6 1.95C15.6 0.78 15.6 0 14.43 0Z" fill="white"/>
						</svg>
					</a>
					</div>

				</div>
			</div>

			<div class="baris">
				<div class="col col-4">
					<div class="cards1">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Jumlah Karyawan</p>
									<h2><?= $jml_karyawan ?></h2>
								</div>
								<div class="panel-icon">
									<img src="<?=url('_assets/img/team.png')?>" alt="karyawan" height="55">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col col-4">
					<div class="cards2">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Total Order</p>
									<h2><?= jmlOrder(); ?></h2>
								</div>
								
								<div class="panel-icon">
									<img src="<?=url('_assets/img/total_order.png')?>" alt="order" height="55">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col col-4">
					<div class="cards3">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Jumlah Paket Tersedia</p>
									<h2><?= jmlPaket(); ?></h2>
								</div>

								<div class="panel-icon">
									<img src="<?=url('_assets/img/jumlah_paket.png')?>" alt="paket" height="55">
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<!-- Daftar Order Cuci Komplit -->
			<div class="baris">
				<?php require_once('daftar_order/daf_or_ck.php');?>
			</div>

			<!-- Daftar Order Cuci Kering/Dry Clean -->
			<div class="baris">
				<?php require_once('daftar_order/daf_or_dc.php');?>
			</div>

			<!-- Daftar Order Cuci Satuan -->
			<div class="baris">
				<?php require_once('daftar_order/daf_or_cs.php');?>
			</div>

		</div>
	</div>

<?php require_once('_footer.php'); ?>