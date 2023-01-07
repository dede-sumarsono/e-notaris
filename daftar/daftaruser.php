<?php include '../layout/header.php';
include '../config/app.php';


session_start();
//membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
          alert('Login dulu dong');
          document.location.href='../login/login';
          </script>";
          exit;
  }

//cek apakah tombol tambah ditekan
if (isset($_POST['tambahuser'])) {
    if (create_userpihak2($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href = '../permintaan'
                </script>";
    }else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = '../permintaan'
                </script>";
    }
}

?>

<div><a class="navbar-brand" href="#"><?=$_SESSION['nama'] ?></a></div>
        
    </div>
    </nav>
    </div>

<!--?php
$id_akun = (int)$_GET['id_pendaftar'];
echo $id_akun;

?-->
<div class="container mt-5">
    <h1>Pendaftaran Sesi 2 (Data User)</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus incidunt molestias nesciunt eos beatae fugiat perspiciatis quasi praesentium ut doloribus.</p>

<!--div class="col-6"-->


<div class="row pt-4 gx-4 gy-4">    
<div class="col-md-6">

<h4>Nomor ktp</h4>
<form action="" method="post" style="" enctype="multipart/form-data">

    

    <!--div class="form-group mt-4">        
        <label for="iddb">Id</label-->
        <input type="hidden" class="form-control mb-2" id="iddb" name="iddb" value="<?= $id_akun = (int)$_GET['id_pendaftar'];?>" required>
    <!--/div-->

    <div class="form-group mt-4">        
        <label for="inlineFormInput">Nomor KTP</label>
        <input type="number" class="form-control mb-2" id="noktpid" name="noktpw" placeholder="Nomor KTP" required>
    </div>

    <div class="form-group">
        <label for="inputAddress">Nama</label>
        <input type="text" class="form-control" id="namaid" name="namaw" placeholder="Nama">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Tempat Tanggal Lahir</label>
        <input type="text" class="form-control" id="ttlid" name="ttlw" placeholder="Tempat Tanggal Lahir">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Alamat</label>
        <input type="text" class="form-control" id="alamatid" name="alamatw" placeholder="Alamat">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">RT / RW</label>
        <input type="text" class="form-control" id="rtrwid" name="rtrww" placeholder="RT / RW">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kelurahan / Desa</label>
        <input type="text" class="form-control" id="kelurahanid" name="kelurahanw" placeholder="Kelurahan / Desa">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatanid" name="kecamatanw" placeholder="Kecamatan">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Status Perkawinan</label>
        <input type="text" class="form-control" id="statuskawinid" name="statuskawinw" placeholder="Status Perkawinan">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaanid" name="pekerjaanw" placeholder="Pekerjaan">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kewarganegaraan</label>
        <input type="text" class="form-control" id="kewarganegaraanid" name="kewarganegaraanw" placeholder="Kewarganegaraan">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Gol / Darah</label>
        <input type="text" class="form-control" id="goldarid" name="goldarw" placeholder="Golongan Darah">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Nomor Register Surat Keterangan</label>
        <input type="number" class="form-control" id="nomorregisterid" name="nomorregisterw" placeholder="Nomor Register">
    </div>
</div>



<div class="col-md-6">
    <div class=" mt-5">
        <label for="fotoktp" class="form-label">Pilih File FOTO KTP</label>
        <input type="file" class="form-control" id="fotoktpuserid" name="fotoktpuserw" >
    </div>

    <div class="mb-3 mt-3">
        <label for="fotokk" class="form-label">Pilih File FOTO KK</label>
        <input type="file" class="form-control" id="fotokkid" name="fotokkw">
    </div>

    <div class="mb-3">
        <label for="stiiskom" class="form-label">Surat Keterangan Belum Menikah / Buku Nikah</label>
        <input type="file" class="form-control" id="stiiskom" name="stiiskomw">
    </div>
</div>
</div>


    <button name='tambahuser' type="submit" class="btn btn-primary mb-5" style="margin-top:25px">Simpan</button>
    </form>



</div>

</div>
</div>


<!--script>
function previewImg($kode){
    const foto = document.querySelector($kode);//pakek id
    const imgPreview = document.querySelector('.img-preview');

    const fileFoto = new FileReader();
    fileFoto.readAsDataURL(foto.files[0]);

    fileFoto.onload = function(e){
        imgPreview.src = e.target.result;
    }
}
</script-->



<?php include '../layout/footer.php';?>