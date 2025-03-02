<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">
   <title>Document</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
   
</body>
</html>


<div class="card">
   <div class="card-title card-flex">
      <div class="card-col">
         <h2>Daftar Transaksi - Cuci Komplit</h2>	
      </div>
   </div>
   
   <div class="card-body">
      <div class="tabel-kontainer">
         <table class="tabel-transaksi">
            <thead>
               <tr>
                  <th class="sticky"  style="text-align: center;">No</th>
                  <th class="sticky"  style="text-align: center;">No. Order</th>
                  <th class="sticky" width="10%">Nama</th>
                  <th class="sticky"  style="text-align: center;">Jenis Paket</th>
                  <th class="sticky"  style="text-align: center;">Jumlah</th>
                  <th class="sticky"  style="text-align: center;">Total</th>
                  <th class="sticky"  style="text-align: center;">Uang Bayar</th>
                  <th class="sticky"  style="text-align: center;">Kembalian</th>
                  <th class="sticky"  style="text-align: center;">Status</th>
                  <th class="sticky" style="text-align: center">Action</th>
               </tr>
            </thead>

            <tbody>
               <?php if (!empty($query_ck)) : ?>               
                  <?php $i = 1; ?>
                  <?php foreach($query_ck as $data_ck) : ?>
                     <tr>
                        <td align="center"><?=$i?></td>
                        <td align="center"><?=$data_ck['or_number']?></td>
                        <td style="max-width: 150px; overflow:hidden;"><?=$data_ck['pelanggan']?></td>
                        <td align="center"><?=$data_ck['j_paket']?></td>
                        <td align="center"><?=$data_ck['berat'] . " Kg"?></td>
                        <td align="center"><?="Rp. " . $data_ck['total']?></td>
                        <td align="center"><?="Rp. " . $data_ck['nominal_byr']?></td>
                        <td align="center"><?="Rp. " . $data_ck['kembalian']?></td>
                        <td align="center"><span class="success"><?=$data_ck['status']?></span></td>
                        <td align="center">
                           <div class="btn-group">
                              <a href="<?=url('riwayat_transaksi/riwayat_ck/detail_ck.php')?>?id_ck=<?=$data_ck['id_ck']?>" class="btn btn-detail">
                                    <i class="fas fa-eye"></i>
                              </a>
                              <a href="<?=url('riwayat_transaksi/riwayat_ck/cetak_info.php')?>?id_ck=<?=$data_ck['id_ck']?>" class="btn btn-print">
                                    <i class="fas fa-print"></i>
                              </a>        
                              <a href="<?=url('riwayat_transaksi/riwayat_ck/hapus.php')?>?id_ck=<?=$data_ck['id_ck']?>" 
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
               <?php endif?>
            </tbody>
         </table>
      </div>
   </div>
</div>