<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- calendar datepicker -->
    <link rel="stylesheet" href="kalender/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="kalender/stylekalender.css">

    <script src="kalender/jquery.min.js"></script>
    <script src="kalender/moment.js"></script>
    <script src="kalender/dist/fullcalendar.min.js"></script>
    <script src="kalender/script.js"></script>

    <title>E-Notaris</title>
  </head>
  <body>

  <!-- nav bar -->
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">User</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="../index.php">Home Page</a>
            </li>
            <li class="nav-item">
            <!--a class="nav-link active" aria-current="page" href="menu.php">Menu Layanan</a-->
            <a class="nav-link" href="../menu.php">Menu Layanan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Permintaan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Keluar</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    </div>



<?php 
//include '../layout/header.php';
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
if (isset($_POST['tambahsesi5'])) {
    if (sesi3($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'daftarpajak.php'
                </script>";
    }else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = 'daftaruser.php'
                </script>";
    }
}

?>


<!--h1 style="text-align: center;"> Kalender</h1>

    <div id="calendar"></div-->
    <div class="container mt-5">
    <h1>Pendaftaran Sesi 5 (Realisasi)</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus incidunt molestias nesciunt eos beatae fugiat perspiciatis quasi praesentium ut doloribus.</p>

    
<div class="col-6">


<form action="" method="post" style="" enctype="multipart/form-data">

    <h3 class="mb-3 mt-5">Pilih Tanggal yang ada</h3>
    
    <div class="form-group mt-2">
        <label for="inlineFormInput">Kode Billing</label>
        <input type="text" class="form-control mb-2" id="kodebillingid" name="kodebillingw" placeholder="Kode Billing" required>
    </div>
    
    <h3 class="mt-5">Pesan</h3>
    
    <div class="form-group">
        <label for="inputAddress">Pembuatan Akta</label>
        <input type="text" class="form-control" id="aktaid" name="aktaw" placeholder="akta">
    </div>





    <button name='tambahsesi5' type="submit" class="btn btn-primary mb-5" style="margin-top:25px">Simpan</button>
    </form>



</div>

</div>
</div>




<?php include '../layout/footer.php';?>