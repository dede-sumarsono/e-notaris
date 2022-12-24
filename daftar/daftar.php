<?php include '../layout/header.php';
include '../config/app.php';


session_start();
//membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
          alert('Login dulu dong');
          document.location.href='../login/login.php';
          </script>";
          exit;
  }

//cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
//    if (create_barang($_POST) > 0) {
    if (create_pesanan($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href = '../permintaan.php'
                </script>";
    }else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = 'daftar.php'
                </script>";
    }
}

?>
<div><a class="navbar-brand" href="#"><?=$_SESSION['nama'] ?></a></div>
        
        </div>
        </nav>
        </div>

<div class="container mt-5">
    <h1>Pendaftaran</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus incidunt molestias nesciunt eos beatae fugiat perspiciatis quasi praesentium ut doloribus.</p>
    <h3>Upload Berkas Untuk Developer PT </h3>

<!--div class="col-6"-->


<form action="" method="post" style="" enctype="multipart/form-data">

<div class="row pt-4 gx-4 gy-4">    
<div class="col-md-6">

           
    <input type="hidden" class="form-control mb-2" id="namauser" name="namauser" value="<?=$_SESSION['nama'] ?>" required>
    <input type="hidden" class="form-control mb-2" id="userid" name="userid" value="<?=$_SESSION['id_akun'] ?>" required>
   

    <div class="form-group">
        <label for="inlineFormInput">Jenis Pelayanan</label>
        <select name="pelayanan" id="pelayanan" class="form-control mt-2" required>
            <option value="">-- Pilih Jenis Pelayanan</option>
            <option value="Jual Beli">Jual beli</option>
            <option value="Waris">Waris</option>
            <option value="Hibah">Hibah</option>
            <option value="Tukar Menukar">Tukar Menukar</option>
            <option value="Pemasukan ke dalam Perusahaan">Pemasukan ke dalam Perusahaan</option>
            <option value="Merger">Merger</option>
            <option value="Penetapan / Putusan Pengadilan">Penetapan / Putusan Pengadilan</option>
            <option value="Lelang">Lelang</option>
            <option value="Pembagian Hak Bersama">Pembagian Hak Bersama</option>
        </select>
    </div>

    <div class="form-group mt-2">
        <label for="inlineFormInput">Nomor SHGB (14 Digit)</label>
        <input type="number" class="form-control mb-2" id="shgbid" name="shgbw" placeholder="Masukan Nomor SHGB" required>
    </div>

    <div class="form-group">
        <label for="inputAddress">No.Seri (9 Digit)</label>
        <input type="number" class="form-control" id="seriid" name="seriw" placeholder="No.Seri">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Provinsi</label>
        <input type="text" class="form-control" id="provinsiid" name="provinsiw" placeholder="Provinsi">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kabupaten</label>
        <input type="text" class="form-control" id="kabupatenid" name="kabupatenw" placeholder="Kabupaten">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatanid" name="kecamatanw" placeholder="Kecamatan">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Tanggal SU</label>
        <input type="text" class="form-control" id="tanggalsuid" name="tanggalsuw" placeholder="Tanggal SU">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Luas Tanah</label>
        <input type="text" class="form-control" id="luastanahid" name="luastanahw" placeholder="Luas Tanah">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Luas Bangunan</label>
        <input type="text" class="form-control" id="luasbangunanid" name="luasbangunanw" placeholder="Luas Bangunan">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Harga Jual Beli</label>
        <input type="text" class="form-control" id="hargajualbeliid" name="hargajualbeliw" placeholder="Harga Jual Beli">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">NIK(Direktur)</label>
        <input type="number" class="form-control" id="nikdirid" name="nikdirw" placeholder="NIK">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Nama (Direktur)</label>
        <input type="text" class="form-control" id="namadirid" name="namadirw" placeholder="Nama Direktur">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Tempat Tanggal Lahir (Direktur)</label>
        <input type="text" class="form-control" id="ttlid" name="ttlw" placeholder="Tempat Tanggal Lahir">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Alamat (Direktur)</label>
        <input type="text" class="form-control" id="alamatdirid" name="alamatdirw" placeholder="Alamat">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">RT / RW (Direktur)</label>
        <input type="text" class="form-control" id="rtrwdirid" name="rtrww" placeholder="RT / RW">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kelurahan / Desa (Direktur)</label>
        <input type="text" class="form-control" id="kelurahanid" name="kelurahanw" placeholder="Kelurahan / Desa">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Status (Direktur)</label>
        <input type="text" class="form-control" id="statusdirid" name="statusdirw" placeholder="Status">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Pekerjaan(Direktur)</label>
        <input type="text" class="form-control" id="pekerjaandirid" name="pekerjaandirw" placeholder="Pekerjaan">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kewarga Negaraan (Direktur)</label>
        <input type="text" class="form-control" id="kewarganegaraanid" name="kewarganegaraanw" placeholder="Kewarga Negaraan">
    </div>
</div>



<div class="col-md-6">
    <div class=" mt-0">
        <label for="fotoktp" class="form-label">Pilih File FOTO KTP</label>
        <input type="file" class="form-control" id="fotoktp" name="fotoktpw" placeholder="Upload Foto KTP"
        onchange="previewImg('#fotoktp')">

        <!--img src="" alt="" class="img-thumbnail img-preview mt-2" width=100px-->
    </div>

    <div class="mb-3 mt-2">
        <label for="aktapendirian" class="form-label">Pilih File FOTO Akta Pendirian</label>
        <input type="file" class="form-control" id="aktapendirian" name="aktapendirianw"
        onchange="previewImg('#aktapendirian')">

        <!--img src="" alt="" class="img-thumbnail img-preview mt-2" width=100px-->
    </div>

    <div class="mb-3 mt-2">
        <label for="aktaterakhir" class="form-label">Pilih File FOTO Akta Terakhir</label>
        <input type="file" class="form-control" id="aktaterakhir" name="aktaterakhirw" placeholder="Upload Foto Akta Terakhir">
    </div>

    <div class="mb-3 mt-2">
        <label for="aktabbg" class="form-label">Pilih File FOTO Akta BBG</label>
        <input type="file" class="form-control" id="aktabbg" name="aktabbgw" placeholder="Upload Foto Akta BBG">
    </div>

    <div class="mb-3 mt-2">
        <label for="suratpersetujuandekom" class="form-label">Pilih File FOTO Surat Persetujuan Dekom</label>
        <input type="file" class="form-control" id="suratpersetujuandekom" name="suratpersetujuandekomw" placeholder="Upload Foto Surat Persetujuan Dekom">
    </div>

    <div class="mb-3">
        <label for="pbb" class="form-label">Pilih File FOTO PBB</label>
        <input type="file" class="form-control" id="pbb" name="pbbw" placeholder="Upload Foto PBB">
    </div>

    <div class="mb-3">
        <label for="imbpbg" class="form-label">Pilih File FOTO IMB/PBG</label>
        <input type="file" class="form-control" id="imbpbg" name="imbpbgw" placeholder="Upload Foto imbpgb">
    </div>

    <div class="mb-3">
        <label for="shgb" class="form-label">Pilih File FOTO SHGB</label>
        <input type="file" class="form-control" id="shgb" name="shgbw" placeholder="Upload Foto SHGB">
    </div>

    <div class="mb-3">
        <label for="ktppt" class="form-label">Pilih File FOTO KTP PT</label>
        <input type="file" class="form-control" id="ktppt" name="ktpptw" placeholder="Upload Foto KTP PT">
    </div>

    <div class="mb-3">
        <label for="npwppt" class="form-label">Pilih File FOTO NPWP PT</label>
        <input type="file" class="form-control" id="npwppt" name="npwpptw" placeholder="Upload Foto NPWP PT">
    </div>

    <div class="mb-3">
        <label for="brosur" class="form-label">Pilih File FOTO BROSUR</label>
        <input type="file" class="form-control" id="brosur" name="brosurw" placeholder="Upload Foto BROSUR">
    </div>

    <div class="mb-3">
        <label for="pricelist" class="form-label">Pilih File FOTO PRICE LIST</label>
        <input type="file" class="form-control" id="pricelist" name="pricelistw" placeholder="Upload Foto PRICE LIST">
    </div>

    <div class="mb-3">
        <label for="shepian" class="form-label">Pilih File SHEPIAN</label>
        <input type="file" class="form-control" id="shepian" name="shepianw" placeholder="Foto shepian..">
    </div>    

    <div class="mb-3">
        <label for="fotolokasi" class="form-label">Pilih FOTO LOKASI</label>
        <input type="file" class="form-control" id="fotolokasi" name="fotolokasiw" placeholder="Foto Lokasi..">            
    </div>
</div>
</div>
    <button name='tambah' type="submit" class="btn btn-primary mb-5" style="margin-top:25px">Kirim berkas</button>
    </form>



<!--/div-->

</div>
</div>


<script>
function previewImg($kode){
    const foto = document.querySelector($kode);//pakek id
    const imgPreview = document.querySelector('.img-preview');

    const fileFoto = new FileReader();
    fileFoto.readAsDataURL(foto.files[0]);

    fileFoto.onload = function(e){
        imgPreview.src = e.target.result;
    }
}
</script>



<?php include '../layout/footer.php';?>