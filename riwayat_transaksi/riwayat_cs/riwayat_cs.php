<div class="card">
   <div class="card-title card-flex">
      <div class="card-col">
         <h2>Daftar Transaksi - Cuci Satuan</h2>	
      </div>
   </div>
   
   <div class="card-body">
      <div class="tabel-kontainer">
         <table class="tabel-transaksi">
            <thead>
               <tr>
                  <th class="sticky" style="text-align: center;">No</th>
                  <th class="sticky" style="text-align: center;">No. Order</th>
                  <th class="sticky" style="text-align: center;">Nama</th>
                  <th class="sticky" style="text-align: center;">Jenis Paket</th>
                  <th class="sticky" style="text-align: center;">Jumlah</th>
                  <th class="sticky" style="text-align: center;">Total</th>
                  <th class="sticky" style="text-align: center;">Uang Bayar</th>
                  <th class="sticky" style="text-align: center;">Kembalian</th>
                  <th class="sticky" style="text-align: center;">Status</th>
                  <th class="sticky" style="text-align: center;">Action</th>
               </tr>
            </thead>

            <tbody>
            <?php if (!empty($query_cs)) : ?>  
                  <?php $i = 1; ?>
                  <?php foreach($query_cs as $data_cs) : ?>
                     <tr>
                        <td align="center"><?=$i?></td>
                        <td align="center"><?=$data_cs['or_number']?></td>
                        <td style="max-width: 150px; overflow:hidden;"><?=$data_cs['pelanggan']?></td>
                        <td align="center"><?=$data_cs['j_paket']?></td>
                        <td align="center"><?=$data_cs['jml_pcs'] . " (Pcs)"?></td>
                        <td align="center"><?="Rp. " . $data_cs['total']?></td>
                        <td align="center"><?="Rp. " . $data_cs['nominal_byr']?></td>
                        <td align="center"><?="Rp. " . $data_cs['kembalian']?></td>
                        <td align="center"><span class="success"><?=$data_cs['status']?></span></td>
                        <td align="center">
                           <div class="btn-group">
                           <a href="<?=url('riwayat_transaksi/riwayat_cs/detail_cs.php')?>?id_cs=<?=$data_cs['id_cs']?>" class="btn btn-detail">
                           <i class="fas fa-eye"></i>
                              </a>
                           <a href="<?=url('riwayat_transaksi/riwayat_cs/cetak_info.php')?>?id_cs=<?=$data_cs['id_cs']?>" class="btn btn-print">
                           <i class="fas fa-print"></i>
                              </a>
                              <a href="<?=url('riwayat_transaksi/riwayat_cs/hapus.php')?>?id_cs=<?=$data_cs['id_cs']?>" 
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