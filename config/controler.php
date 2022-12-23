<?php

include 'database2.php';
//function menampilkan data 

function select($query){
    //panggil koneksi db
    global $db;

    $result = mysqli_query($db,$query);
    $rows =[];

    while($row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }

    return $rows;
}

function sesi3($post){
    global $db;

    
}

//fungsi utama menambahkan data daftar user di daftar/daftaruser.php
function create_userpihak2($post)
{
    global $db;

    //$layanan = strip_tags($post['pelayanan']);
    $iddb = strip_tags($post['iddb']);
    $noktp = htmlspecialchars($post['noktpw']);
    $nama = strip_tags($post['namaw']);
    $ttl = strip_tags($post['ttlw']);
    $alamat = strip_tags($post['alamatw']);
    $rtrw = strip_tags($post['rtrww']);
    $kelurahan = strip_tags($post['kelurahanw']);
    $kecamatan = strip_tags($post['kecamatanw']);
    $statuskawin = strip_tags($post['statuskawinw']);
    $pekerjaan = strip_tags($post['pekerjaanw']);
    $kewarganegaraan = strip_tags($post['kewarganegaraanw']);
    $goldar = strip_tags($post['goldarw']);
    $nomorregister = strip_tags($post['nomorregisterw']);
    $fotoktp = strip_tags(upload_file3($_FILES['fotoktpuserw']));
    $fotokk = strip_tags(upload_file3($_FILES['fotokkw']));
    $stiiskom = strip_tags(upload_file3($_FILES['stiiskomw']));
    $statusu = "pendaftaran pajak oleh notaris";
    

    //check upload file
    //if (!$fotoktp||!$fotokk||!$stiiskom) {
    //    return false;
    //}

    //query tambah data
    $query = "UPDATE crud SET noktpp2='$noktp',namap2='$nama',ttlp2='$ttl',alamatp2='$alamat',rtrwp2='$rtrw',kelurahanp2='$kelurahan',kecamatanp2='$kecamatan',statuskawinp2='$statuskawin',pekerjaanp2='$pekerjaan',kewarganegaraanp2='$kewarganegaraan',goldarp2='$goldar',nomorregisterp2='$nomorregister',fotoktpuserp2='$fotoktp',fotokkp2='$fotokk',stiiskomp2='$stiiskom', statusu='$statusu' WHERE idpendaftar = $iddb";
    
    
    
    //$query = "UPDATE akun SET nama = '$nama', username = '$username', email = '$email', password = '$password', level = '$level' WHERE id_akun = $id_akun ";
    //$query = "INSERT INTO cruduser VALUES ($iddb,'$noktp','$nama','$ttl','$alamat','$rtrw','$kelurahan','$kecamatan','$statuskawin','$pekerjaan','$kewarganegaraan','$goldar','$nomorregister','$fotoktp','$fotokk','$stiiskom',CURRENT_TIMESTAMP()) WHERE idpendaftar = $iddb";
    
    //$query = "INSERT INTO tes VALUES(null,'$noktp','$nama','$ttl')";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

function upload_file3($filefoto2){
    $nama_file      = $filefoto2['name'];
    $ukuran_file    = $filefoto2['size'];
    $error          = $filefoto2['error'];
    $tmpName        = $filefoto2['tmp_name'];

    //check file yang diupload
    $extensi_file_valid = ['jpg','jpeg','png'];
    $extensi_file = explode('.', $nama_file);
    $extensi_file = strtolower(end($extensi_file));

    //check format / ekstensi file
    if (!in_array($extensi_file, $extensi_file_valid)) {
        //pesan gagal

        echo "<script>
              alert('Format file tidak valid, upload lah foto dengan format png atau jpg atau jpeg!');
            document.location.href = '../permintaan.php'
        </script>";
        die();
    }
    
    //check ukuran 2 mb
    if ($ukuran_file > 2048000) {
        echo "<script>
            alert('ukuran file max 2mb!');
            document.location.href = '../permintaan.php'
        </script>";
        die();
    }

    //generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $extensi_file;

    //pindahkan ke local folder
    move_uploaded_file($tmpName,'../assets/img/'. $nama_file_baru);
    return $nama_file_baru;

}


//fungsi menambahkan data pendaftar boleh dihapus kalau sudah jadi
/*function create_barang($post)
{
    global $db;

    $layanan = strip_tags($post['pelayanan']);
    $shgb = htmlspecialchars($post['shgbw']);
    $seri = strip_tags($post['seriw']);
    $provinsi = strip_tags($post['provinsiw']);
    $kabupaten = strip_tags($post['kabupatenw']);
    $kecamatan = strip_tags($post['kecamatanw']);
    $tanggalsu = strip_tags($post['tanggalsuw']);
    $luastanah = strip_tags($post['luastanahw']);
    $luasbangunan = strip_tags($post['luasbangunanw']);
    $hargajualbeli = strip_tags($post['hargajualbeliw']);
    $nikdir = strip_tags($post['nikdirw']);
    $namadir = strip_tags($post['namadirw']);
    $ttl = strip_tags($post['ttlw']);
    $alamatdir = strip_tags($post['alamatdirw']);
    $rtrw = strip_tags($post['rtrww']);
    $kelurahan = strip_tags($post['kelurahanw']);
    $statusdir = strip_tags($post['statusdirw']);
    $pekerjaandir = strip_tags($post['pekerjaandirw']);
    $kewarganegaraan = strip_tags($post['kewarganegaraanw']);
    $fotoktp = strip_tags(upload_file2($_FILES['fotoktpw']));
    $aktapendirian = strip_tags(upload_file2($_FILES['aktapendirianw']));
    $aktaterakhir = strip_tags(upload_file2($_FILES['aktaterakhirw']));
    $aktabbg = strip_tags(upload_file2($_FILES['aktabbgw']));
    $suratpersetujuandekom = strip_tags(upload_file2($_FILES['suratpersetujuandekomw']));
    $ppb = strip_tags(upload_file2($_FILES['pbbw']));
    $imbpbg = strip_tags(upload_file2($_FILES['imbpbgw']));
    $shgbp = strip_tags(upload_file2($_FILES['shgbw']));
    $ktppt = strip_tags(upload_file2($_FILES['ktpptw']));
    $npwppt = strip_tags(upload_file2($_FILES['npwpptw']));
    $brosur = strip_tags(upload_file2($_FILES['brosurw']));
    $pricelist = strip_tags(upload_file2($_FILES['pricelistw']));
    $shepian = strip_tags(upload_file2($_FILES['shepianw']));
    $fotolokasi = strip_tags(upload_file2($_FILES['fotolokasiw']));
    //$fotoktp = strip_tags(upload_file());

    //check upload file
    if (!$fotoktp) {
        return false;
    }

    //query tambah data
    $query = "INSERT INTO crud VALUES(null,'$layanan','$shgb','$seri','$provinsi','$kabupaten','$kecamatan','$tanggalsu','$luastanah','$luasbangunan','$hargajualbeli','$nikdir','$namadir','$ttl','$alamatdir','$rtrw','$kelurahan','$statusdir','$pekerjaandir','$kewarganegaraan','$fotoktp',
    '$aktapendirian','$aktaterakhir','$aktabbg','$suratpersetujuandekom','$ppb','$imbpbg','$shgbp','$ktppt','$npwppt','$brosur','$pricelist','$shepian','$fotolokasi',CURRENT_TIMESTAMP())";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}*/

//ini fungsi utama dari daftar.php
function create_pesanan($post)
{
    global $db;

    $namauser = strip_tags($post['namauser']);
    $iduser = strip_tags($post['iduser']);
    $layanan = strip_tags($post['pelayanan']);
    $shgb = htmlspecialchars($post['shgbw']);
    $seri = strip_tags($post['seriw']);
    $provinsi = strip_tags($post['provinsiw']);
    $kabupaten = strip_tags($post['kabupatenw']);
    $kecamatan = strip_tags($post['kecamatanw']);
    $tanggalsu = strip_tags($post['tanggalsuw']);
    $luastanah = strip_tags($post['luastanahw']);
    $luasbangunan = strip_tags($post['luasbangunanw']);
    $hargajualbeli = strip_tags($post['hargajualbeliw']);
    $nikdir = strip_tags($post['nikdirw']);
    $namadir = strip_tags($post['namadirw']);
    $ttl = strip_tags($post['ttlw']);
    $alamatdir = strip_tags($post['alamatdirw']);
    $rtrw = strip_tags($post['rtrww']);
    $kelurahan = strip_tags($post['kelurahanw']);
    $statusdir = strip_tags($post['statusdirw']);
    $pekerjaandir = strip_tags($post['pekerjaandirw']);
    $kewarganegaraan = strip_tags($post['kewarganegaraanw']);
    $fotoktp = strip_tags(upload_file2($_FILES['fotoktpw']));
    $aktapendirian = strip_tags(upload_file2($_FILES['aktapendirianw']));
    $aktaterakhir = strip_tags(upload_file2($_FILES['aktaterakhirw']));
    $aktabbg = strip_tags(upload_file2($_FILES['aktabbgw']));
    $suratpersetujuandekom = strip_tags(upload_file2($_FILES['suratpersetujuandekomw']));
    $ppb = strip_tags(upload_file2($_FILES['pbbw']));
    $imbpbg = strip_tags(upload_file2($_FILES['imbpbgw']));
    $shgbp = strip_tags(upload_file2($_FILES['shgbw']));
    $ktppt = strip_tags(upload_file2($_FILES['ktpptw']));
    $npwppt = strip_tags(upload_file2($_FILES['npwpptw']));
    $brosur = strip_tags(upload_file2($_FILES['brosurw']));
    $pricelist = strip_tags(upload_file2($_FILES['pricelistw']));
    $shepian = strip_tags(upload_file2($_FILES['shepianw']));
    $fotolokasi = strip_tags(upload_file2($_FILES['fotolokasiw']));
    $statusu = "isi data pihak ke-2!";
    //$fotoktp = strip_tags(upload_file());

    //check upload file
    if (!$fotoktp) {
        return false;
    }

    //query tambah data
    //$query = "INSERT INTO crud VALUES(null,'$layanan','$shgb','$seri','$provinsi','$kabupaten','$kecamatan','$tanggalsu','$luastanah','$luasbangunan','$hargajualbeli','$nikdir','$namadir','$ttl','$alamatdir','$rtrw','$kelurahan','$statusdir','$pekerjaandir','$kewarganegaraan','$fotoktp',
    //'$aktapendirian','$aktaterakhir','$aktabbg','$suratpersetujuandekom','$ppb','$imbpbg','$shgbp','$ktppt','$npwppt','$brosur','$pricelist','$shepian','$fotolokasi',CURRENT_TIMESTAMP())";

    $query = "INSERT INTO crud (idpendaftar,pendaftar,iduser,pelayanan,shgb,seri,provinsi,kabupaten,kecamatan,tanggalsu,luastanah,luasbangunan,hargajualbeli,nikdir,namadir,ttl,alamatdir,rtrw,kelurahan,statusdir,pekerjaandir,kewarganegaraan,foto,aktapendirian,aktaterakhir,aktabbg,suratpersetujuandekom,ppb,imbpbg,shgbp,ktppt,npwppt,brosur,pricelist,shepian,fotolokasi,tanggal,statusu) 
    VALUES(null,'$namauser','$iduser','$layanan','$shgb','$seri','$provinsi','$kabupaten','$kecamatan','$tanggalsu','$luastanah','$luasbangunan','$hargajualbeli','$nikdir','$namadir','$ttl','$alamatdir','$rtrw','$kelurahan','$statusdir','$pekerjaandir','$kewarganegaraan','$fotoktp','$aktapendirian','$aktaterakhir','$aktabbg','$suratpersetujuandekom','$ppb','$imbpbg','$shgbp','$ktppt','$npwppt','$brosur','$pricelist','$shepian','$fotolokasi',CURRENT_TIMESTAMP(),'$statusu')";

    
    //$query = "INSERT INTO akun (username) VALUES('$username')";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

function upload_file2($filefoto){
    $nama_file      = $filefoto['name'];
    $ukuran_file    = $filefoto['size'];
    $error          = $filefoto['error'];
    $tmpName        = $filefoto['tmp_name'];

    //check file yang diupload
    $extensi_file_valid = ['jpg','jpeg','png'];
    $extensi_file = explode('.', $nama_file);
    $extensi_file = strtolower(end($extensi_file));

    //check format / ekstensi file
    if (!in_array($extensi_file, $extensi_file_valid)) {
        //pesan gagal

        echo "<script>
              alert('Format file tidak valid, upload lah foto dengan format png atau jpg atau jpeg!');
            document.location.href = 'daftar.php'
        </script>";
        die();
    }
    
    //check ukuran 2 mb
    if ($ukuran_file > 2048000) {
        echo "<script>
            alert('ukuran file max 2mb!');
            document.location.href = 'daftar.php'
        </script>";
        die();
    }

    //generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $extensi_file;

    //pindahkan ke local folder
    move_uploaded_file($tmpName,'../assets/img/'. $nama_file_baru);
    return $nama_file_baru;

}

//fungsi mengubah data barang
function update_barang($post){
    global $db;

    $idpendaftar = strip_tags($post['idpendaftar']);
    $nama = strip_tags($post['shgbw2']);
    $seri = strip_tags($post['seriw']);
    $provinsi = strip_tags($post['provinsiw']);
    $fotoktplama = strip_tags($post['fotoktplama']);

    //check upload foto baru atau tidak
    if ($_FILES['fotoktpw']['error'] == 4) {
        $fotoktp = $fotoktplama;
    }else{
        $fotoktp = upload_file();
    }

    //query update
    $query = "UPDATE crud SET nama = '$nama',jenispendaftaran = '$seri',provinsi='$provinsi',foto = '$fotoktp'  WHERE idpendaftar=$idpendaftar";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);

}

//fungsi menghapus data barang
function delete_barang($idpendaftar){
    global $db;


    $foto = select("SELECT * FROM crud WHERE idpendaftar = $idpendaftar")[0];
    unlink("assets/img/". $foto['foto']);

    //query hapus data barang
    $query = "DELETE FROM crud WHERE idpendaftar=$idpendaftar";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

//fungsi menghapus akun
function delete_akun($id_akun){

    global $db;

    //query hapus data barang
    $query = "DELETE FROM akun WHERE id_akun = $id_akun";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

//fungsi upload file
function upload_file(){
    $nama_file      = $_FILES['fotoktpw']['name'];
    $ukuran_file    = $_FILES['fotoktpw']['size'];
    $error          = $_FILES['fotoktpw']['error'];
    $tmpName        = $_FILES['fotoktpw']['tmp_name'];

    //check file yang diupload
    $extensi_file_valid = ['jpg','jpeg','png'];
    $extensi_file = explode('.', $nama_file);
    $extensi_file = strtolower(end($extensi_file));

    //check format / ekstensi file
    if (!in_array($extensi_file, $extensi_file_valid)) {
        //pesan gagal

        echo "<script>
              alert('Format file tidak valid, upload lah foto dengan format png atau jpg atau jpeg!');
            document.location.href = 'daftar.php'
        </script>";
        die();
    }
    
    //check ukuran 2 mb
    if ($ukuran_file > 2048000) {
        echo "<script>
            alert('ukuran file max 2mb!');
            document.location.href = 'daftar.php'
        </script>";
        die();
    }

    //generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $extensi_file;

    //pindahkan ke local folder
    move_uploaded_file($tmpName,'../assets/img/'. $nama_file_baru);
    return $nama_file_baru;

}

//fungsi tambah akun untuk menambahkan akun ini penting
function create_akun($post)
{
    global $db;

    $nama       = strip_tags($post['nama']);
    $username   = strip_tags($post['username']);
    $email      = strip_tags($post['email']);
    $password   = strip_tags($post['password']);
    $level = "2";
    $notel      = strip_tags($post['notelepon']);

    //encripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);
    

    //query tambah data
     $query = "INSERT INTO akun VALUES(null,'$nama','$username','$email','$password','$level','$notel')";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

//fungsi tambah akun
function update_akun($post)
{
    global $db;

    $id_akun    = strip_tags($post['id_akun']);
    $nama       = strip_tags($post['nama']);
    $username   = strip_tags($post['username']);
    $email      = strip_tags($post['email']);
    $password   = strip_tags($post['password']);
    $level      = strip_tags($post['level']);

    //encripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);
    

    //query tambah data
     $query = "UPDATE akun SET nama = '$nama', username = '$username', email = '$email', password = '$password', level = '$level' WHERE id_akun = $id_akun ";
     
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//boleh dihapus nanti kalau sudah selesai
function coba($post)
{
    global $db;

    $nama       = strip_tags($post['nama']);
    $username   = strip_tags($post['username']);
    $email      = strip_tags($post['email']);
    $password   = strip_tags($post['password']);
    $level      = strip_tags($post['level']);
    //$pihak2     = strip_tags($post['namapihak2w']);

    //encripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);

    //$query = "INSERT INTO tb_users (username, password, ip, email, referer,joindate) VALUES('$username','$password','$laip','$email','$referer','$joindate')";

    //$query .= "INSERT INTO lastregister (username,ip,joindate) VALUES('$username','$laip','$joindate2')"; 
    

    //query tambah data
     //$query = "INSERT INTO akun VALUES(null,'$nama','$username','$email','$password','$level')";
     $query = "INSERT INTO akun (username) VALUES('$username')";
     //$query .= "INSERT INTO tes (1) VALUES($pihak2)";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}


//penetapan tanggal real
function create_tanggalreal($post)
{
    global $db;

    $iddb               = strip_tags($post['iddb']);
    $tanggalreal       = strip_tags(formatTanggal($post['date']));
    $statusu = "Pendaftaran Selesai";
    //$brosur = strip_tags(upload_file2($_FILES['brosurw']));
    
     $query = "UPDATE crud SET waktureal = '$tanggalreal', statusu = '$statusu' WHERE idpendaftar = $iddb";
     
     //$query .= "INSERT INTO tes (1) VALUES($pihak2)";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}
//ini penting untuk merubah format tanggal
function formatTanggal($date){
    // pisahkan tanda - dan jadikan array
    $pecah = explode('/', $date);
    //return $pecah[2].'-'.$pecah[1].'-'.$pecah[0];
    return $pecah[2].'-'.$pecah[0].'-'.$pecah[1];
  }


//ini penting untuk mengupdate status dari user
function update_real($post)
{
    global $db;

    $id = strip_tags($post['id']);
    $statusu = "Real Selesai!";
    

    //check upload file
    //if (!$fotoktp||!$fotokk||!$stiiskom) {
    //    return false;
    //}

    //query tambah data
    $query = "UPDATE crud SET statusu='$statusu' WHERE idpendaftar = $id";
    
    
    
    //$query = "UPDATE akun SET nama = '$nama', username = '$username', email = '$email', password = '$password', level = '$level' WHERE id_akun = $id_akun ";
    //$query = "INSERT INTO cruduser VALUES ($iddb,'$noktp','$nama','$ttl','$alamat','$rtrw','$kelurahan','$kecamatan','$statuskawin','$pekerjaan','$kewarganegaraan','$goldar','$nomorregister','$fotoktp','$fotokk','$stiiskom',CURRENT_TIMESTAMP()) WHERE idpendaftar = $iddb";
    
    //$query = "INSERT INTO tes VALUES(null,'$noktp','$nama','$ttl')";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

?>

