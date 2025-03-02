<?php 
   require_once('../../_header.php');
   $data_cs = query('SELECT * FROM tb_cuci_satuan');
?>

<div id="pkt_cs" class="main-content">
		<div class="container">
			<div class="baris">
				<div class="selamat-datang">
					<div class="col-header">
						<h2 class="judul-md">Paket Cuci Satuan</h2>
               </div>
               
					<div class="col-header txt-right">
					<?php if ($_SESSION['level'] !== 'Karyawan') : ?>

						<a href="<?=url('paket/pkt_cs/tambah.php')?>" class="btn-lg bg-primary">+ Tambah Paket</a>
						<?php endif; ?>

					</div>	
				</div>
			</div>

			<div class="baris">
				<div class="col">
					<div class="card">
						<div class="card-title card-flex">
							<div class="card-col">
								<h2>Daftar Paket Tersedia</h2>	
							</div>

							<div class="card-col txt-right">
								<a href="<?=url('paket/paket.php')?>" class="btn-xs bg-primary">
								<i class="fas fa-chevron-left"></i>
								</a>
							</div>
						</div>

						<div class="card-body">
							<div class="tabel-kontainer">
								<table class="tabel-transaksi">
									<thead>
										<tr>
											<th class="sticky" style="text-align: center;">No</th>
											<th class="sticky" style="text-align: center;">Nama Paket</th>
											<th class="sticky" style="text-align: center;">Waktu Kerja</th>
											<th class="sticky" style="text-align: center;">Jumlah Min (Pcs)</th>
											<th class="sticky" style="text-align: center;">Tarif</th>
											<?php if ($_SESSION['level'] !== 'Karyawan') : ?>
											<th class="sticky" style="text-align: center;">Action</th>
											<?php endif; ?>
										</tr>
									</thead>

									<tbody>

										<?php $no = 1; ?>
										<?php foreach($data_cs as $cs) : ?>
											<tr>
												<td align="center"><?= $no ?></td>
												<td align="center"><?= $cs['nama_cs'] ?></td>
                                    			<td align="center"><?= $cs['waktu_kerja_cs'] ?></td>
                                    			<td align="center"><?= $cs['kuantitas_cs'] ?></td>
												<td align="center"><?= $cs['tarif_cs'] ?></td>
												<?php if ($_SESSION['level'] !== 'Karyawan') : ?>
												<td align="center">
													<a href="<?=url('paket/pkt_cs/edit.php')?>?id_cs=<?=$cs['id_cs']?>" class="btn btn-edit">
													<i class="fa-regular fa-pen-to-square"></i>
													</a>
													<a href="<?=url('paket/pkt_cs/hapus.php')?>?id_cs=<?=$cs['id_cs']?>" onclick="return confirm('Yakin akan menghapus?');"  class="btn btn-hapus">
													<i class="fa fa-trash"></i>

													</a>
													<?php endif; ?>
												</td>
											</tr>
											<?php $no++ ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require_once('../../_footer.php') ?>