<?php

include '../config/app.php';
//menerima id akun yangdipilih pengguna

$id_akun = (int)$_GET['id_pendaftar'];

if (delete_akun($id_akun) > 0) {
    echo "<script>
    alert('Data akun telah berhasil dihapus');
    document.location.href = '../permintaan.php';
    </script>";
}else{
    echo "<script>
    alert('Data akun gagal dihapus');
    document.location.href = '../permintaan.php';
    </script>";
}


?>