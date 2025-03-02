<div class="card">
   <div class="card-title card-flex">
      <div class="card-col">
         <h2>Daftar Transaksi - Dry Clean</h2>	
      </div>
   </div>
   
   <div class="card-body">
      <div class="tabel-kontainer">
         <table class="tabel-transaksi">
            <thead>
               <tr>
                  <th class="sticky" style="text-align: center;">No</th>
                  <th class="sticky" style="text-align: center;">No. Order</th>
                  <th class="sticky" width="10%">Nama</th>
                  <th class="sticky" style="text-align: center;">Jenis Paket</th>
                  <th class="sticky" style="text-align: center;">Jumlah</th>
                  <th class="sticky" style="text-align: center;">Total</th>
                  <th class="sticky" style="text-align: center;">Uang Bayar</th>
                  <th class="sticky" style="text-align: center;">Kembalian</th>
                  <th class="sticky" style="text-align: center;">Status</th>
                  <th class="sticky" style="text-align: center">Action</th>
               </tr>
            </thead>

            <tbody>
               <?php if (!empty($query_dc)) : ?>
                  <?php $i = 1; 
                     foreach($query_dc as $data_dc) : ?>
                     <tr>
                        <td align="center"><?=$i?></td>
                        <td align="center"><?=$data_dc['or_number']?></td>
                        <td style="max-width: 150px; overflow:hidden;"><?=$data_dc['pelanggan']?></td>
                        <td align="center"><?=$data_dc['j_paket']?></td>
                        <td align="center"><?=$data_dc['berat'] . " Kg"?></td>
                        <td align="center"><?="Rp. " . $data_dc['total']?></td>
                        <td align="center"><?="Rp. " . $data_dc['nominal_byr']?></td>
                        <td align="center"><?="Rp. " . $data_dc['kembalian']?></td>
                        <td align="center"><span class="success"><?=$data_dc['status']?></span></td>
                        <td align="center">
                        <div class="btn-group">
                           <a href="<?=url('riwayat_transaksi/riwayat_dc/detail_dc.php')?>?id_dc=<?=$data_dc['id_dc']?>" class="btn btn-detail">
                           <i class="fas fa-eye"></i>
                           </a>
                           <a href="<?=url('riwayat_transaksi/riwayat_dc/cetak_info.php')?>?id_dc=<?=$data_dc['id_dc']?>" class="btn btn-print">
                           <i class="fas fa-print"></i>
                           </a>
                           <a href="<?=url('riwayat_transaksi/riwayat_dc/hapus.php')?>?id_dc=<?=$data_dc['id_dc']?>" 
                                 onclick="return confirm('Yakin akan menghapus data ini?');" 
                                 class="btn btn-hapus">
                                 <i class="fa fa-trash"></i>
                              </a> 
                           </div>
                        </td>
                     </tr>
                     <?php $i++?>
                  <?php endforeach ?>

                  <?php else : ?>
                     <tr>
                        <td colspan="10" class="txt-center">Data tidak tersedia</td>
                     </tr>
               <?php endif ?>
            </tbody>
         </table>
      </div>
   </div>
</div>