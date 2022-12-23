<?php 
include '../layout/header.php';
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

//jika tombol tambah ditekan maka jalankan script berikut
if (isset ($_POST['yakin'])) {
  if (update_real($_POST)>0) {
    echo "<script>
                alert('Data berhasil diperbaharui');
                document.location.href = 'menu_admin.php'
                </script>";
  }else {
    echo "<script>
                alert('Data akun tidak berhasil ditambahkan');
                document.location.href = 'menu_admin.php'
                </script>";
  }
}

//$data_akun = select("SELECT * FROM crud WHERE pendaftar='$_SESSION[nama]'");
$data_akun = select("SELECT * FROM crud WHERE waktureal !=''");
$data_barang = select("SELECT * FROM crud WHERE waktureal !='' ORDER BY waktureal ASC ");

    $get1 = mysqli_query($db, "select * from crud WHERE statusu='isi data pihak ke-2!'");
    $get2 = mysqli_query($db, "select * from crud WHERE statusu='pendaftaran pajak oleh notaris'");
    $get3 = mysqli_query($db, "select * from crud WHERE waktureal !='' ");
    $count1 = mysqli_num_rows($get1);
    $count2 = mysqli_num_rows($get2);
    $count3 = mysqli_num_rows($get3);
  



?>

<div><a class="navbar-brand" href="#"><?=$_SESSION['nama'] ?></a></div>
        
    </div>
    </nav>
    </div>

    <div class="container-fluid pt-5 pb-5 bg-light" >
        <div class="container text-center">
            <h2 class="display-2" id="real">Daftar List Agenda Real</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reiciendis ipsam, explicabo laboriosam fugiat id dolore quaerat adipisci beatae doloribus.</p>
            
            
            <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Pihak Pertama</th>
            <th scope="col">Pihak Ke-Dua</th>
            <th scope="col">Progress</th>
            <th scope="col">Pilih Tanggal Real</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
          <?php $no = 1;?>
          <!--?php foreach ($data_akun as $akun):?-->
          <?php foreach ($data_barang as $akun):?>
            <tr>
              <td><?=$no++;?></td>
              <td><?=$akun['namadir']?></td>


              <td>
              <?php if ($akun['namap2'] == ""): ?>
                <a href="daftar/daftaruser.php?id_pendaftar=<?=$akun['idpendaftar']?>" class="btn btn-danger">Tambahkan Data Pihak-2</a>
                <?php endif;?>
                <?php if ($akun['namap2'] != ""): ?>
                    <?=$akun['namap2']?>
                <?php endif;?>
              </td>


              <td>
              <?=$akun['statusu']?>
              </td>


              <td>
                <?=$akun['waktureal']?>
              </td>
              
              <td>
              <a href="detail.php?id_pendaftar=<?=$akun['idpendaftar']?>" class="btn btn-success">Detail</a>
              <!--a href="detail.php?id_pendaftar=<!?=$akun['idpendaftar']?>" class="btn btn-warning">Real Selesai</a-->
              <!--a data-bs-toggle="modal" data-bs-target="#modaltambah" href="#">Real Selesai</a-->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaltambah<?= $akun['idpendaftar'];?>">Real Selesai</button>
              </td>


              

            </tr>
          <?php endforeach?>
        </tbody>

        </table>


        </div>
    </div>
    </div>



      <div class="container mb-5">

      <h1 class="text-center">List Permintaan</h1>
            <a href="listinfdetail.php?menu=listpermintaan" class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
              <div class="fw-bold">Pendaftar Baru</div>
                Cras justo odio
              </div>
              <span class="badge bg-primary rounded-pill"><?php echo "$count1"; ?></span>
            </a>

            <a href="listinfdetail.php?menu=pendaftaranpajak" class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
              <div class="fw-bold">Permintaan Pendaftaran Pajak</div>
              Cras justo odio
            </div>
            <span class="badge bg-primary rounded-pill"><?php echo "$count2"; ?></span>
            </a>

            <a href="#real" class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
              <div class="fw-bold">Permintaan Real</div>
              Cras justo odio
              </div>
              <span class="badge bg-primary rounded-pill"><?php echo "$count3"; ?></span>
            </a>
        
      </div>



      <?php foreach ($data_akun as $akun): ?>
    <div class="modal fade" id="modaltambah<?= $akun['idpendaftar'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-dark" style ="color:white">
            <h5 class="modal-title">Pendaftaran User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            
          <p> Apakah anda yakin sudah melakukan real pada pihak terkait ?</p>
          <form action="" method="post">

          
          <label for="nama">id</label>
          <input type="text" name="id" id="id" class="form-control" value="<?= $akun['idpendaftar'];?>" required>
          
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" name="yakin" class="btn btn-warning">Yakin</button>
            
          </div>
          
          </form>

        </div>
      </div>
    </div>
    <?php endforeach;?>






<?php include '../layout/footer.php';?>