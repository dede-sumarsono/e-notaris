<?php include 'layout/header.php';


session_start();
//membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
  echo "<script>
        alert('Login dulu dong');
        document.location.href='../login/login.php';
        </script>";
        exit;
}

?>

<div><a class="navbar-brand" href="#"><?=$_SESSION['nama'] ?></a></div>
        
    </div>
    </nav>
    </div>


    <div class="container-fluid pt-5 pb-5 bg-light" >
        <div class="container text-center">
            <h2 class="display-2" id="portofolio">Menu Pelayanan</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reiciendis ipsam, explicabo laboriosam fugiat id dolore quaerat adipisci beatae doloribus.</p>
            
            
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                <div class="card crop-img">
                    <img src="https://bikin.website/wp-content/themes/twentynineteen-child/img/feature-page/img_responsive.png" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Perlihan Hak</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ea accusantium in veniam aut. Hic.</p>
                    </div>
                </div>
                </div>
            


            
                <div class="col-md-4">
                <div class="card crop-img">
                    <img src="https://media.suara.com/pictures/480x260/2020/04/18/15789-cara-membuat-website.jpg" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Layanan Hak Tanggungan</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ea accusantium in veniam aut. Hic.</p>
                    </div>
                </div>
                </div>
            

            
                <div class="col-md-4">
                <div class="card crop-img">
                    <img src="https://www.elsevier.com/__data/assets/image/0004/823261/information-system-supporting-science.jpg" class="card-img-top" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Layanan Notaris</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ea accusantium in veniam aut. Hic.</p>
                    </div>
                </div>
                </div>
            </div>


        </div>
    </div>
    </div>







<!-- content Peralihan Hak -->
    <div class="container mt-5">
    <h1>Peralihan Hak</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus incidunt molestias nesciunt eos beatae fugiat perspiciatis quasi praesentium ut doloribus.</p>

<!-- content peralihan hak baris 1 -->
<div class="row mt-5">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Jual Beli</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <!--a href="daftar/daftar.php" class="btn btn-primary">Daftar</a-->
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Waris</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hibah</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
</div>

<div class="row mt-2">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tukar Menukar</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pemasukan ke dalam Perusahaan</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Merger</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
</div>

<div class="row mt-2">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Penetapan / Putusan Pengadilan</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lelang</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pembagian Hak Bersama</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
</div>

<div class="row mt-2 mb-5">
<div class="col-sm-6 text-end mt-2 mb-4">
<a href="daftar/daftar.php" class="btn btn-danger">Daftar Sekarang ! (Untuk PT)  </a>
</div>
<div class="col-sm-6 text-start mt-2 mb-4">
<a href="daftar/daftar.php" class="btn btn-success">Daftar Sekarang ! (Perorangan)</a>
</div>
</div>


<!-- tutup content peralihan hak-->


<!-- content layanan Hak tanggungan -->
<div class="container mt-5">
    <h1>Layanan Hak Tanggungan</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus incidunt molestias nesciunt eos beatae fugiat perspiciatis quasi praesentium ut doloribus.</p>

<!-- content layanan hak tanggungan -->
<div class="row mt-5">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cessie</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Subrogasi</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Roya</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
</div>

<div class="row mt-2">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Merger Hak Tanggungan</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
</div>

<div class="row mt-2 mb-5">
<div class="col-sm-6 text-end mt-2 mb-4">
<a href="daftar/daftar.php" class="btn btn-danger">Daftar Sekarang ! (Untuk PT)  </a>
</div>
<div class="col-sm-6 text-start mt-2 mb-4">
<a href="daftar/daftar.php" class="btn btn-success">Daftar Sekarang ! (Perorangan)</a>
</div>
</div>




<!-- tutup content layanan hak tanggungan-->



<!-- content Layanan Notaris -->
<div class="container mt-5">
    <h1>Layanan Notaris</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus incidunt molestias nesciunt eos beatae fugiat perspiciatis quasi praesentium ut doloribus.</p>

<!-- content Layanan Notaris baris 1 -->
<div class="row mt-5">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Akta Perjanjian Kawin</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <!-- <a href="#" class="btn btn-primary">Daftar</a>-->
        
        <form action="daftar.php" method="post">
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pendirian CV</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pendirian PT</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
</div>

<div class="row mt-2 mb-5">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hibah Merk</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
</div>

<!--div class="row mt-2 mb-5">
<div class="col-sm-6 text-end mt-2 mb-4">
<a href="daftar/daftar.php" class="btn btn-danger">Daftar Sekarang ! (Untuk PT)  </a>
</div>
<div class="col-sm-6 text-start mt-2 mb-4">
<a href="daftar/daftar.php" class="btn btn-success">Daftar Sekarang ! (Perorangan)</a>
</div>
</div-->

<div class="container text-center mt-3 mb-5">
<a href="daftar/daftar.php" class="btn btn-success">Daftar Sekarang ! (Perorangan)</a>
</div>

<!-- tutup content Layanan Notaris-->


<?php include 'layout/footer.php';?>