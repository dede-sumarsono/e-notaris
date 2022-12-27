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
if (isset($_POST['tambahsesi3'])) {
    if (sesi3($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'daftarpajak'
                </script>";
    }else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = 'daftaruser'
                </script>";
    }
}

?>
<div><a class="navbar-brand" href="#"><?=$_SESSION['nama'] ?></a></div>
        
        </div>
        </nav>
        </div>

<div class="container mt-5">
    <h1>Pendaftaran Sesi 3 (Pajak)</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus incidunt molestias nesciunt eos beatae fugiat perspiciatis quasi praesentium ut doloribus.</p>

<div class="col-6">


<form action="" method="post" style="" enctype="multipart/form-data">

    <h3 class="mb-3 mt-5">SSP</h3>
    
    <div class="form-group mt-2">
        <label for="inlineFormInput">Kode Billing</label>
        <input type="text" class="form-control mb-2" id="kodebillingid" name="kodebillingw" placeholder="Kode Billing" required>
    </div>
    
    <h3 class="mt-5">BPHTB</h3>
    
    <div class="form-group">
        <label for="inputAddress">Pembuatan Akta</label>
        <input type="text" class="form-control" id="aktaid" name="aktaw" placeholder="akta">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Input Kelengkapan</label>
        <input type="text" class="form-control" id="inputkelengkapanid" name="inputkelengkapanw" placeholder="Input kelengkapan">
    </div>

    <div class="form-group mt-2">
        <label for="inputAddress">Input ke Sistem BPHTP online</label>
        <input type="text" class="form-control" id="bphtponlineid" name="bphtponlinew" placeholder="Bphtp Online">
    </div>



    <div class=" mt-5">
        <label for="fotoakta" class="form-label">Pilih File FOTO Akta</label>
        <input type="file" class="form-control" id="fotoaktaid" name="fotoaktaw" >
    </div>



    <button name='tambahsesi3' type="submit" class="btn btn-primary mb-5" style="margin-top:25px">Simpan</button>
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