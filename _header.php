<?php 
	require_once('_functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rumah Laundry | Dashboard</title>
	<link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?=url('_assets/img/logo/logofix.png')?>" type="image/x-icon">
</head>
<body>

	<header>
		<nav>
			<div class="logo">
				<a href="<?=url()?>">
					<img src="<?=url('_assets/img/logo/nav-logo.png')?>" alt="Rumah Laundry Logo">
				</a>
			</div>
			<ul class="nav-menu">
				<li>
					
				<div class="profile">
					<img class="prof" src="<?= url('_assets/img/logo/' . strtolower($_SESSION['level']) . '.png') ?>" alt="<?= $_SESSION['level'] ?>" height="30">
					<div class="circle"></div>
					<div class="profile-text">
						<span class="mast"><?= ucfirst($_SESSION['master']) ?></span>
						<small class="inf">- <?= ucfirst($_SESSION['level']) ?></small>
					</div>
				</div>

					
					<ul class="dropdown-menu">
						<li><a href="<?=url('about.php')?>">Tentang Kami</a></li>
						<li><a href="<?=url('logout.php')?>">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="nav-mini">
			<a href="<?=url('index.php')?>" class="link-nav">Dashboard</a>
				<a href="<?=url('riwayat_transaksi/riwayat.php')?>" class="link-nav">Riwayat Transaksi</a>
			<?php if ($_SESSION['level'] !== 'Karyawan') : ?>
			<a href="<?=url('karyawan/karyawan.php')?>" class="link-nav">Manage Karyawan</a>
			<?php endif; ?>
			<a href="<?=url('paket/paket.php')?>" class="link-nav">Daftar Paket</a>		
		</div>
	</header>
</body>
</html>

