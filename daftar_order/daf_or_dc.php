<div class="col">
   <div class="card">
      <div class="card-title card-flex">
         <div class="card-col">
            <h2>Order Dry Clean (Cuci Kering)</h2>	
         </div>
      </div>

      <div class="card-body">
    <div class="tabel-kontainer">
        <table class="tabel-transaksi">
            <thead>
                <tr>
                    <th class="sticky" style="text-align: center;">No</th>
                    <th class="sticky" style="text-align: center;">No. Order</th>
                    <th class="sticky" style="text-align: center;">Tgl Order</th>
                    <th class="sticky" style="text-align: center;">Nama Pelanggan</th>
                    <th class="sticky" style="text-align: center;">Jenis Paket</th>
                    <th class="sticky" style="text-align: center;">Waktu Kerja</th>
                    <th class="sticky" style="text-align: center;">Berat (Kg)</th>
                    <th class="sticky" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $dry_clean = query('SELECT * FROM tb_order_dc ORDER BY id_order_dc DESC');
                if (!empty($dry_clean)) : 
                ?>
                    <?php 
                    $no_dc = 1;
                    foreach ($dry_clean as $dc) : 
                    ?>
                        <tr>
                            <td align="center"><?= $no_dc; ?></td>
                            <td align="center"><?= $dc['or_dc_number']; ?></td>
                            <td align="center"><?= $dc['tgl_masuk_dc']; ?></td>
                            <td align="center"><?= $dc['nama_pel_dc']; ?></td>
                            <td align="center"><?= $dc['jenis_paket_dc']; ?></td>
                            <td align="center"><?= $dc['wkt_krj_dc']; ?></td>
                            <td align="center"><?= $dc['berat_qty_dc'] . ' Kg'; ?></td>
                            <td align="center">
                                <a href="<?= url('detail_order/detail_dc/detail_order_dc.php?or_dc_number=') . $dc['or_dc_number']; ?>" class="btn btn-detail">
                                <i class="fas fa-eye"></i>
                              </a>
                                <a href="<?= url('daftar_order/hapus_dc.php?or_dc_number=') . $dc['or_dc_number']; ?>" 
                                   onclick="return confirm('Yakin akan menghapus?');" 
                                   class="btn btn-hapus">
                                   <i class="fas fa-trash"></i>
                                 </a>
                            </td>
                        </tr>
                        <?php $no_dc++; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="8" class="txt-center">Data Tidak Tersedia</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

   </div>
</div>