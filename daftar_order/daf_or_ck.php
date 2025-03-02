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


<div class="col">
   <div class="card">
      <div class="card-title card-flex">
         <div class="card-col">
            <h2>Order Cuci Komplit</h2>	
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
                  $cuci_komplit = query('SELECT * FROM tb_order_ck ORDER BY id_order_ck DESC'); 
                  if (!empty($cuci_komplit)) : 
                  ?>
                     <?php 
                     $no_ck = 1;
                     foreach ($cuci_komplit as $ck) : 
                     ?>
                        <tr>
                           <td align="center"><?= $no_ck; ?></td>
                           <td align="center"><?= $ck['or_ck_number']; ?></td>
                           <td align="center"><?= $ck['tgl_masuk_ck']; ?></td>
                           <td align="center"><?= $ck['nama_pel_ck']; ?></td>
                           <td align="center"><?= $ck['jenis_paket_ck']; ?></td>
                           <td align="center"><?= $ck['wkt_krj_ck']; ?></td>
                           <td align="center"><?= $ck['berat_qty_ck'] . ' Kg'; ?></td>
                           <td align="center">
                              <a href="<?= url('detail_order/detail_ck/detail_order_ck.php?or_ck_number=') . $ck['or_ck_number']; ?>" class="btn btn-detail">
                                 <i class="fas fa-eye"></i>
                              </a>
                              <a href="<?= url('daftar_order/hapus_ck.php?or_ck_number=') . $ck['or_ck_number']; ?>" 
                                 onclick="return confirm('Yakin akan menghapus?');" 
                                 class="btn btn-hapus">
                                 <i class="fas fa-trash"></i>
                              </a>
                           </td>
                        </tr>
                        <?php $no_ck++; ?>
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
