<?php 
include 'config/app.php';

//$data_akun = select("SELECT * FROM akun");
//$data_akun2 = select("SELECT * FROM crud2");
//$data_akun = select("SELECT * FROM pendaftar");

//jika tombol tambah ditekan maka jalankan script berikut
if (isset ($_POST['tambah'])) {
  if (create_akun($_POST)>0) {
    echo "<script>
                alert('Data akun berhasil ditambahkan');
                document.location.href = 'login/login'
                </script>";
  }else {
    echo "<script>
                alert('Data akun tidak berhasil ditambahkan');
                document.location.href = 'index'
                </script>";
  }
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- load font awesome font cdn-->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css_style/style2.css"/>


    <title>E-Notaris</title>

    
  </head>
  <body>

<!-- navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">E-Notaris</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="index">Home</a>
                <a class="nav-link" href="#layanan">Layanan</a>
                <a class="nav-link" href="#portofolio">Portofolio</a>
                <a class="nav-link" href="#tentang">Tentang</a>
                <a class="nav-link" href="#owner">Owner</a>
            </div>
            </div>

            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="login/login">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modaltambah" href="#">Daftar</a>
                    
                    </li>
                </ul>
            </div>


        </nav>
    </div>
<!--banner -->
    <div class="container-fluid banner">
    <!--div class="container text-center"-->
    <div class="container text-center">
        <h4 class="display-6 text-center">Selamat Datang di Website Kami</h4>
        <h3 class="display-1 text-center">Hai! Halo!</h3>
        <a href="login/login">
            <button type="button" class="btn btn-danger btn-lg ">Login</button>
        </a>
        <p>atau</p>
        <a href="#">
            <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#modaltambah">Daftar</button>
        </a>

    </div>
    </div>
<!--layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-3" id="layanan">
                Layanan
            </h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, at?
            </p>

            <!--row dan collumn -->
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran">
                        <i class="fas fa-file-import fa-5x" style="margin-top:30px"></i>
                    </span>
                    <h3 class="mt-3">
                        Peralihan Hak
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, culpa?
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran">
                        <i class="fas fa-balance-scale-right fa-5x" style="margin-top:30px"></i>
                    </span>
                    <h3 class="mt-3">
                        Hak Tanggungan
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, culpa?
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran">
                        <i class="fas fa-gavel fa-5x" style="margin-top:30px"></i>
                    </span>
                    <h3 class="mt-3">
                        Layanan Notaris
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, culpa?
                    </p>
                </div>
            </div>
            
            

        </div>

        

    </div>
<!--portofolio -->
    <div class="container-fluid pt-5 pb-5 bg-light" >
        <div class="container text-center">
            <h2 class="display-3" id="portofolio">Portolio</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reiciendis ipsam, explicabo laboriosam fugiat id dolore quaerat adipisci beatae doloribus.</p>
            
            
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                <div class="card crop-img">
                    <img src="https://bikin.website/wp-content/themes/twentynineteen-child/img/feature-page/img_responsive.png" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ea accusantium in veniam aut. Hic.</p>
                    </div>
                </div>
                </div>
            


            
                <div class="col-md-4">
                <div class="card crop-img">
                    <img src="https://media.suara.com/pictures/480x260/2020/04/18/15789-cara-membuat-website.jpg" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ea accusantium in veniam aut. Hic.</p>
                    </div>
                </div>
                </div>
            

            
                <div class="col-md-4">
                <div class="card crop-img">
                    <img src="https://www.elsevier.com/__data/assets/image/0004/823261/information-system-supporting-science.jpg" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ea accusantium in veniam aut. Hic.</p>
                    </div>
                </div>
                </div>
            </div>


        </div>
    </div>
<!--tentang -->
<div class="container-fluid pt-5 pb-5">
    <div class="container">
        <h2 class="display-3 text-center" id="tentang">Tentang</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, deserunt.</p>
        <div class="clearfix pt-5">
            <img src="https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?size=626&ext=jpg" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" alt="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur, veritatis velit ab doloribus nostrum quod!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur, veritatis velit ab doloribus nostrum quod!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur, veritatis velit ab doloribus nostrum quod!</p>

        </div>
    </div>
</div>

<!--owner -->

    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3" id="owner">Pemilik</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati accusantium numquam cumque omnis at error sit sapiente veritatis. Unde, ullam.</p>
                <div class="row pt-4 gx-4 gy-4">
                    <div class="col-md-4 text-center tim">
                        <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png"
                        class="rounded-circle mb-3"
                        />
                        <h4>Dede Sumarsono</h4>
                        <p>Notaris</p>
                        <P>
                            <a href="" class="social"><i class="fab fa-twitter"></i></a>
                            <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </P>
                        
                    </div>
                </div>

            </h2>
        </div>
    </div>


<!--kontak -->
<div class="container-fluid pt-5 pb-5 kontak">
    <div class="container">
        <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, repellendus.</p>
        <div class="row pb-3">
            <div class="col-md-5">

                <input type="text" 
                class="form-control form-control-lg mb-3" 
                placeholder="nama"/>

                <input type="text" 
                class="form-control form-control-lg mb-3" 
                placeholder="email"/>

                <input type="text" 
                class="form-control form-control-lg mb-3" 
                placeholder="phone"/>
            </div>
            <div class="col-md-6">
                <textarea class="form-control form-control-lg" rows="6"></textarea>
            </div>
        </div>

        <div class="col-md-3 mx-auto text-center">
            <button type="button" class="btn btn-danger btn-lg">
                Kirim Pesan
            </button>
        </div>
    </div>
</div>

<div class="container text-center pt-5 pb-5">
    All Rights Reserved &copy; 2022
</div>


<!--?php foreach ($data_akun as $akun): ?-->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark" style ="color:white">
        <h5 class="modal-title">Pendaftaran User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" method="post">

          <div class="mb-3">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" required>
          </div>

        <div class="mb-3">
          <label for="username">User Name</label>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>

        <div class="mb-3">
           <label for="email">E-mail</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
           <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" required minlength='6'>
        </div>

        <!--div class="mb-3">
           <label for="level">Level</label>
           <select name="level" id="level" class="form-control" required>
            <option value="">-- Pilih Level --</option>
            <option value="1">Admin</option>
            <option value="2">User</option>
           </select>
          </div-->

          <div class="mb-3">
          <label for="notelepon">Nomor WhatsApp / Telepon</label>
          <input type="number" name="notelepon" id="notelepon" class="form-control" required>
        </div>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
        
      </div>
      <div class="container text-center"><p>Perhatian, Username tidak akan bisa diganti lagi nanti.
      <br>Namun hal ini tidak mempengaruhi data pendaftaran.</p></div>
      </form>

    </div>
  </div>
</div>
<!--?php endforeach;?-->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>