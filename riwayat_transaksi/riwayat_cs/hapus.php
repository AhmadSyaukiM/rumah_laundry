<?php
include '../../_functions.php'; // Pastikan path benar ke _functions.php
include '../../_header.php'; 
if (isset($_GET['id_cs'])) {
    $id_cs = $_GET['id_cs'];

    if (del_riwayat_cs($id_cs) > 0) {
        // Jika berhasil dihapus, tampilkan alert sukses
        echo '
        <div class="alert">
            <div class="box">
                <img src="' . url('_assets/img/berhasil.png') . '" height="68" alt="alert sukses">
                <p>Transaksi Berhasil Di Hapus</p>
                <button onclick="window.location=\'http://localhost/rumah_laundry/riwayat_transaksi\'" class="btn-alert">Ok</button>
            </div>
        </div>';
    } else {
        // Jika gagal dihapus, tampilkan alert gagal
        echo '
        <div class="alert">
            <div class="box">
                <img src="' . url('_assets/img/gagal.png') . '" height="68" alt="alert gagal">
                <p>Transaksi Gagal Di Hapus</p>
                <button onclick="window.location=\'http://localhost/rumah_laundry/riwayat_transaksi\'" class="btn-alert">Ok</button>
            </div>
        </div>';
    }
} else {
    // Jika ID tidak ditemukan, tampilkan pesan error
    echo '
    <div class="alert">
        <div class="box">
            <img src="' . url('_assets/img/gagal.png') . '" height="68" alt="alert gagal">
            <p>ID Tidak Ditemukan</p>
            <button onclick="window.location=\'http://localhost/rumah_laundry/riwayat_transaksi\'" class="btn-alert">Ok</button>
        </div>
    </div>';
}
?>
