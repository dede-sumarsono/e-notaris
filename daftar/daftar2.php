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
if (isset($_POST['tambah'])) {
//    if (create_barang($_POST) > 0) {
    if (create_pesanan_perorangan($_POST) > 0) {
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

if (isset($_POST['tambahlayanannotaris'])) {
    //    if (create_barang($_POST) > 0) {
        if (create_pesanan_perorangan_layanannotaris($_POST) > 0) {
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

<div class="container mt-5">
    <h1>Pendaftaran</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus incidunt molestias nesciunt eos beatae fugiat perspiciatis quasi praesentium ut doloribus.</p>
    <!--h3>Upload Berkas Untuk Perorangan </h3-->

<!--div class="col-6"-->


<form action="" method="post" style="" enctype="multipart/form-data">

<div class="row pt-4 gx-4 gy-4">    
<div class="col-md-6">

           
    <input type="hidden" class="form-control mb-2" id="namauser" name="namauser" value="<?=$_SESSION['nama'] ?>" required>
    <input type="hidden" class="form-control mb-2" id="userid" name="userid" value="<?=$_SESSION['id_akun'] ?>" required>
   

    <div class="form-group">
        <h4 class="mt-4">Jenis Pelayanan</h4>
        <!--label for="inlineFormInput">Jenis Pelayanan</label-->
        <select name="pelayanan" id="pelayanan" class="form-control mt-2" required>
        <option value="">-- Pilih Jenis Pelayanan</option>    

            <?php if ($_GET['pilihan'] == 'peralihanhak'): ?>
                <option value="Jual Beli">Jual beli</option>
                <option value="Waris">Waris</option>
                <option value="Hibah">Hibah</option>
                <option value="Tukar Menukar">Tukar Menukar</option>
                <option value="Pemasukan ke dalam Perusahaan">Pemasukan ke dalam Perusahaan</option>
                <option value="Merger">Merger</option>
                <option value="Penetapan / Putusan Pengadilan">Penetapan / Putusan Pengadilan</option>
                <option value="Lelang">Lelang</option>
                <option value="Pembagian Hak Bersama">Pembagian Hak Bersama</option>
            <?php elseif ($_GET['pilihan'] == 'haktanggungan'): ?>
                <option value="Cessie">Cessie</option>
                <option value="Subrogasi">Subrogasi</option>
                <option value="Roya">Roya</option>
                <option value="Merger Hak Tanggungan">Merger Hak Tanggungan</option>
            <?php elseif ($_GET['pilihan'] == 'layanannotaris'): ?>
                <option value="Akta Perjanjian Kawin">Akta Perjanjian Kawin</option>
                <option value="Pendirian CV">Pendirian CV</option>
                <option value="Pendirian PT">Pendirian PT</option>
                <option value="Hibah Merk">Hibah Merk</option>
            <?php endif;?>   

        </select>
    </div>



    <?php if ($_GET['pilihan'] != 'layanannotaris'): ?>
                 
    <h4 class="mt-3">Data yang Dilimpahkan</h4>

    <div class="form-group mt-2">
        <label for="inlineFormInput">Nomor SHGB (14 Digit)</label>
        <input type="number" class="form-control mb-2" id="shgbid" name="shgbw" placeholder="Masukan Nomor SHGB" required>
    </div>

    <div class="form-group">
        <label for="inputAddress">No.Seri (9 Digit)</label>
        <input type="number" class="form-control" id="seriid" name="seriw" placeholder="No.Seri" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Provinsi</label>
        <input type="text" class="form-control" id="provinsiid" name="provinsiw" placeholder="Provinsi" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kabupaten</label>
        <input type="text" class="form-control" id="kabupatenid" name="kabupatenw" placeholder="Kabupaten" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatanid" name="kecamatanw" placeholder="Kecamatan" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Tanggal SU</label>
        <input type="text" class="form-control" id="tanggalsuid" name="tanggalsuw" placeholder="Tanggal SU" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Luas Tanah</label>
        <input type="text" class="form-control" id="luastanahid" name="luastanahw" placeholder="Luas Tanah"required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Luas Bangunan</label>
        <input type="text" class="form-control" id="luasbangunanid" name="luasbangunanw" placeholder="Luas Bangunan" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Harga Jual Beli</label>
        <input type="text" class="form-control" id="hargajualbeliid" name="hargajualbeliw" placeholder="Harga Jual Beli" required>
    </div>

    <h4 class="mt-4">Data Penjual (Pihak Pertama)</h4>

    <div class="form-group mt-2">
        <label for="inputAddress">NIK</label>
        <input type="number" class="form-control" id="nikdirid" name="nikdirw" placeholder="NIK" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Nama</label>
        <input type="text" class="form-control" id="namadirid" name="namadirw" placeholder="Nama" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Tempat Tanggal Lahir</label>
        <input type="text" class="form-control" id="ttlid" name="ttlw" placeholder="Tempat Tanggal Lahir" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Alamat</label>
        <input type="text" class="form-control" id="alamatdirid" name="alamatdirw" placeholder="Alamat" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">RT / RW</label>
        <input type="text" class="form-control" id="rtrwdirid" name="rtrww" placeholder="RT / RW" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kelurahan / Desa </label>
        <input type="text" class="form-control" id="kelurahanid" name="kelurahanw" placeholder="Kelurahan / Desa" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Status </label>
        <input type="text" class="form-control" id="statusdirid" name="statusdirw" placeholder="Status" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaandirid" name="pekerjaandirw" placeholder="Pekerjaan" required>
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kewarganegaraan </label>
        <input type="text" class="form-control" id="kewarganegaraanid" name="kewarganegaraanw" placeholder="Kewarganegaraan" required>
    </div>
</div>



<div class="col-md-6">

<!--h4 class="mt-4">Data Suami/Istri dari Pihak Pertama</h4-->
<h4 class="mt-4">Data Persetujuan</h4>

    <div class="form-group mt-2">
        <label for="inputAddress">NIK</label>
        <input type="number" class="form-control" id="nikdirid3" name="nikdirw3" placeholder="NIK">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Nama</label>
        <input type="text" class="form-control" id="namadirid3" name="namadirw3" placeholder="Nama">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Tempat Tanggal Lahir</label>
        <input type="text" class="form-control" id="ttlid3" name="ttlw3" placeholder="Tempat Tanggal Lahir">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Alamat</label>
        <input type="text" class="form-control" id="alamatdirid3" name="alamatdirw3" placeholder="Alamat">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">RT / RW</label>
        <input type="text" class="form-control" id="rtrwdirid3" name="rtrww3" placeholder="RT / RW">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kelurahan / Desa </label>
        <input type="text" class="form-control" id="kelurahanid3" name="kelurahanw3" placeholder="Kelurahan / Desa">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Status </label>
        <input type="text" class="form-control" id="statusdirid3" name="statusdirw3" placeholder="Status">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaandirid3" name="pekerjaandirw3" placeholder="Pekerjaan">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Kewarganegaraan </label>
        <input type="text" class="form-control" id="kewarganegaraanid3" name="kewarganegaraanw3" placeholder="Kewarganegaraan">
    </div>


    <h4 class="mt-5">Upload File</h4>
    <div class=" mt-3">
        <label for="fotoktp" class="form-label">Pilih File FOTO KTP Pihak Pertama</label>
        <input type="file" class="form-control" id="fotoktp" name="fotoktpw" placeholder="Upload Foto KTP">
        <!--input type="file" class="form-control" id="fotoktp" name="fotoktpw" placeholder="Upload Foto KTP" onchange="previewImg('#fotoktp')"-->

        <!--img src="" alt="" class="img-thumbnail img-preview mt-2" width=100px-->
    </div>

    <div class=" mt-3">
        <!--label for="fotoktpsi" class="form-label">Pilih File FOTO KTP Suami / Isteri</label-->
        <label for="fotoktpsi" class="form-label">Pilih File FOTO KTP Persetujuan</label>
        <input type="file" class="form-control" id="fotoktpsi" name="fotoktpsiw" placeholder="Upload Foto KTP">
        <!--input type="file" class="form-control" id="fotoktp" name="fotoktpw" placeholder="Upload Foto KTP" onchange="previewImg('#fotoktp')"-->

        <!--img src="" alt="" class="img-thumbnail img-preview mt-2" width=100px-->
    </div>

    <!--div class="mb-3 mt-2">                                                                  aktapendirian!!!
        <label for="aktapendirian" class="form-label">Pilih File FOTO Akta Pendirian</label>
        <input type="file" class="form-control" id="aktapendirian" name="aktapendirianw"
        onchange="previewImg('#aktapendirian')">

        <--img src="" alt="" class="img-thumbnail img-preview mt-2" width=100px>
    </div-->

    <!--div class="mb-3 mt-2">                                                                     Akta Terakhir
        <label for="aktaterakhir" class="form-label">Pilih File FOTO Akta Terakhir</label>
        <input type="file" class="form-control" id="aktaterakhir" name="aktaterakhirw" placeholder="Upload Foto Akta Terakhir">
    </div-->

    <!--div class="mb-3 mt-2">                                                                  Akta BBG
        <label for="aktabbg" class="form-label">Pilih File FOTO Akta BBG</label>
        <input type="file" class="form-control" id="aktabbg" name="aktabbgw" placeholder="Upload Foto Akta BBG">
    </div-->

    <!--div class="mb-3 mt-2">                                                                  Surat Persetujuan Dekom
        <label for="suratpersetujuandekom" class="form-label">Pilih File FOTO Surat Persetujuan Dekom</label>
        <input type="file" class="form-control" id="suratpersetujuandekom" name="suratpersetujuandekomw" placeholder="Upload Foto Surat Persetujuan Dekom">
    </div-->

    <div class="mb-3 mt-3">
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

    <!--div class="mb-3">                                                                                   KTP PT
        <label for="ktppt" class="form-label">Pilih File FOTO KTP PT</label>
        <input type="file" class="form-control" id="ktppt" name="ktpptw" placeholder="Upload Foto KTP PT">
    </div-->

    <!--div class="mb-3">                                                                                   NPWP PT
        <label for="npwppt" class="form-label">Pilih File FOTO NPWP PT</label>
        <input type="file" class="form-control" id="npwppt" name="npwpptw" placeholder="Upload Foto NPWP PT">
    </div-->

    <!--div class="mb-3">                                                                                   FOTO BROSUR
        <label for="brosur" class="form-label">Pilih File FOTO BROSUR</label>
        <input type="file" class="form-control" id="brosur" name="brosurw" placeholder="Upload Foto BROSUR">
    </div-->

    <!--div class="mb-3">                                                                                   FOTO PRICE LIST
        <label for="pricelist" class="form-label">Pilih File FOTO PRICE LIST</label>
        <input type="file" class="form-control" id="pricelist" name="pricelistw" placeholder="Upload Foto PRICE LIST">
    </div-->

    <!--div class="mb-3">                                                                                   SHEPIAN
        <label for="shepian" class="form-label">Pilih File SHEPIAN</label>
        <input type="file" class="form-control" id="shepian" name="shepianw" placeholder="Foto shepian..">
    </div-->
    
    <div class="mb-3"> <!-- tambah foto denah lokasi-->
        <label for="fotolokasi" class="form-label">Pilih FOTO Denah Lokasi</label>
        <input type="file" class="form-control" id="fotodenahlokasi" name="fotodenahlokasiw" placeholder="Foto Denah Lokasi..">            
    </div>

    <div class="mb-3">
        <label for="fotolokasi" class="form-label">Pilih FOTO LOKASI</label>
        <input type="file" class="form-control" id="fotolokasi" name="fotolokasiw" placeholder="Foto Lokasi..">            
    </div>
</div>
</div>

<button name='tambah' type="submit" class="btn btn-primary mb-5" style="margin-top:25px">Simpan</button>
    </form>

<?php elseif ($_GET['pilihan'] == 'layanannotaris'): ?>

        
        <h4 class="mt-4">Data Penjual (Pihak Pertama)</h4>

        <div class="form-group mt-2">
            <label for="inputAddress">NIK</label>
            <input type="number" class="form-control" id="nikdirid" name="nikdirw" placeholder="NIK" required>
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Nama</label>
            <input type="text" class="form-control" id="namadirid" name="namadirw" placeholder="Nama" required>
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Tempat Tanggal Lahir</label>
            <input type="text" class="form-control" id="ttlid" name="ttlw" placeholder="Tempat Tanggal Lahir" required>
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Alamat</label>
            <input type="text" class="form-control" id="alamatdirid" name="alamatdirw" placeholder="Alamat" required>
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">RT / RW</label>
            <input type="text" class="form-control" id="rtrwdirid" name="rtrww" placeholder="RT / RW" required>
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Kelurahan / Desa </label>
            <input type="text" class="form-control" id="kelurahanid" name="kelurahanw" placeholder="Kelurahan / Desa" required>
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Status </label>
            <input type="text" class="form-control" id="statusdirid" name="statusdirw" placeholder="Status" required>
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaandirid" name="pekerjaandirw" placeholder="Pekerjaan" required>
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Kewarganegaraan </label>
            <input type="text" class="form-control" id="kewarganegaraanid" name="kewarganegaraanw" placeholder="Kewarganegaraan" required>
        </div>

        <h4 class="mt-4">Data Persetujuan</h4>

        <div class="form-group mt-2">
            <label for="inputAddress">NIK</label>
            <input type="number" class="form-control" id="nikdirid3" name="nikdirw3" placeholder="NIK">
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Nama</label>
            <input type="text" class="form-control" id="namadirid3" name="namadirw3" placeholder="Nama">
        </div>

        
        </div>



        <div class="col-md-6 mt-5">

        <div class="form-group mt-2">
            <label for="inputAddress">Tempat Tanggal Lahir</label>
            <input type="text" class="form-control" id="ttlid3" name="ttlw3" placeholder="Tempat Tanggal Lahir">
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Alamat</label>
            <input type="text" class="form-control" id="alamatdirid3" name="alamatdirw3" placeholder="Alamat">
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">RT / RW</label>
            <input type="text" class="form-control" id="rtrwdirid3" name="rtrww3" placeholder="RT / RW">
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Kelurahan / Desa </label>
            <input type="text" class="form-control" id="kelurahanid3" name="kelurahanw3" placeholder="Kelurahan / Desa">
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Status </label>
            <input type="text" class="form-control" id="statusdirid3" name="statusdirw3" placeholder="Status">
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaandirid3" name="pekerjaandirw3" placeholder="Pekerjaan">
        </div>

        <div class="form-group mt-2">
            <label for="inputAddress">Kewarganegaraan </label>
            <input type="text" class="form-control" id="kewarganegaraanid3" name="kewarganegaraanw3" placeholder="Kewarganegaraan">
        </div>


        <h4 class="mt-5">Upload File</h4>
        <div class=" mt-3">
            <label for="fotoktp" class="form-label">Pilih File FOTO KTP Pihak Pertama</label>
            <input type="file" class="form-control" id="fotoktp" name="fotoktpw" placeholder="Upload Foto KTP">
            
        </div>

        <div class=" mt-3">
            <label for="fotoktpsi" class="form-label">Pilih File FOTO KTP Persetujuan</label>
            <input type="file" class="form-control" id="fotoktpsi" name="fotoktpsiw" placeholder="Upload Foto KTP">
            
        </div>

        <div class="mb-3 mt-3">
            <label for="kk" class="form-label">Pilih File FOTO KK</label>
            <input type="file" class="form-control" id="kk" name="kkw" placeholder="Upload Foto KK">
        </div>

        <div class="mb-3 mt-3">
            <label for="domisili" class="form-label">Surat Keterangan Domisili</label>
            <input type="file" class="form-control" id="domisili" name="domisiliw" placeholder="Upload Foto Surat Keterangan Domisili">
        </div>

        
        
        

        

        
        </div>
        </div>
        <button name='tambahlayanannotaris' type="submit" class="btn btn-primary mb-5" style="margin-top:25px">Simpan</button>
        </form>

<?php endif;?>



    



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