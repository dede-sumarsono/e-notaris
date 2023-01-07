<?php 

session_start();
//membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
        alert('Login dulu dong');
        document.location.href='../login/login';
        </script>";
        exit;
}

include '../config/app.php';
include '../layout/headeradmin.php';

//$data_akun = select("SELECT * FROM crud WHERE pendaftar='$_SESSION[nama]'");
//$data_akun = select("SELECT * FROM crud WHERE statusu='isi data pihak ke-2!'");
$id_akun = $_GET['menu'];
if ($_GET['menu']=='pendaftarbaru') {
    //$data_akun = select("SELECT * FROM crud WHERE statusu='isi data pihak ke-2!'");
    $data_akun = select("SELECT * FROM crud INNER JOIN akun ON iduser = id_akun WHERE statusu='isi data pihak ke-2!'");
}elseif($_GET['menu']=='pendaftaranpajak'){
    //$data_akun = select("SELECT * FROM crud INNER JOIN akun ON iduser = id_akun WHERE statusu='pendaftaran pajak oleh notaris'");
    $data_akun = select("SELECT * FROM crud INNER JOIN akun ON iduser = id_akun WHERE statusu='pendaftaran pajak oleh notaris'");
    //$data_akun = select("SELECT * FROM crud INNER JOIN akun ON pendaftar = nama WHERE statusu='isi data pihak ke-2!'");
    //$data_akun = select("SELECT * FROM crud WHERE statusu='pendaftaran pajak oleh notaris'");
} elseif ($_GET['menu'] == 'pascareal') {
  //$data_akun = select("SELECT * FROM crud INNER JOIN akun ON iduser = id_akun WHERE statusu='pendaftaran pajak oleh notaris'");
  $data_akun = select("SELECT * FROM crud INNER JOIN akun ON iduser = id_akun WHERE statusu='Real Selesai!'");
}
//$data_akun = select("SELECT * FROM crud WHERE statusu='pendaftaran pajak oleh notaris'");
$data_no = select("SELECT * FROM akun");

//jika tombol tambah ditekan maka jalankan script berikut
/*
if (isset ($_POST['tambah'])) {
  if (create_akun($_POST)>0) {
    echo "<script>
                alert('Data akun berhasil ditambahkan');
                document.location.href = 'index'
                </script>";
  }else {
    echo "<script>
                alert('Data akun tidak berhasil ditambahkan');
                document.location.href = 'index'
                </script>";
  }*/

  if (isset ($_POST['yakinstatus'])) {
    if (pasca_real($_POST)>0) {
      echo "<script>
                  alert('Data berhasil diperbaharui');
                  document.location.href = 'listinfdetail?menu=pascareal'
                  </script>";
    }else {
      echo "<script>
                  alert('Data akun tidak berhasil ditambahkan');
                  document.location.href = 'listinfdetail?menu=pascareal'
                  </script>";
    }
  }


//jika tombol tambah ditekan maka jalankan script berikut
if (isset ($_POST['yakin'])) {
  if (update_status_pajak($_POST)>0) {
    echo "<script>
                alert('Data berhasil diperbaharui');
                document.location.href = 'menu_admin'
                </script>";
  }else {
    echo "<script>
                alert('Data akun tidak berhasil ditambahkan');
                document.location.href = 'menu_admin'
                </script>";
  }
}

?>

<div><a class="navbar-brand" href="#"><?=$_SESSION['nama'] ?></a></div>
        
    </div>
    </nav>
    </div>


<div class="container-fluid pt-5 pb-5 bg-light" >


<div class="container">


<?php if ($_GET['menu']=='pendaftarbaru'): ?>
            <!-- Isi konten -->
        <h3><i class="fas fa-list"></i> Daftar Pendaftar Yang Belum Selesai</h3>
        <hr>


        <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Pihak Pertama</th>
            <th scope="col">Pihak Ke-Dua</th>
            <th scope="col">No telp</th>
            <th scope="col">Aksi </th>
            
            </tr>
        </thead>

        <tbody>
          <?php $no = 1;?>
          <?php foreach ($data_akun as $akun):?>
            <tr>
              <td><?=$no++;?></td>

              <td><?=$akun['namadir']?></td>

              <td>
              <?php if ($akun['namap2'] == ""): ?>
                <p style="display: inline;width: 100px;height: 100px;padding: 5px;background-color: red;color:white;">User belum menginput data pihak ke-2</p>
                <?php endif;?>
                <?php if ($akun['namap2'] != ""): ?>
                    <?=$akun['namap2']?>
                <?php endif;?>
              </td>

              <td>
              <?=$akun['notelepon']?>
              </td>

              <td>
              <a href="detail?id_pendaftar=<?=$akun['idpendaftar']?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach?>
        </tbody>
        </table>
<?php endif;?>



<?php if ($_GET['menu']=='pendaftaranpajak'): ?>
            <!-- Isi konten -->
        <h3><i class="fas fa-list"></i>Permintaan Pendaftaran Pajak</h3>
        <hr>


        <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Pihak Pertama</th>
            <th scope="col">Pihak Ke-Dua</th>
            <th scope="col">No telp</th>
            <th scope="col">Aksi </th>
            
            </tr>
        </thead>

        <tbody>
          <?php $no = 1;?>
          <?php foreach ($data_akun as $akun):?>
            <tr>
              <td><?=$no++;?></td>

              <td><?=$akun['namadir']?></td>

              <td>
              <?php if ($akun['namap2'] == ""): ?>
                <p style="display: inline;width: 100px;height: 100px;padding: 5px;background-color: red;color:white;">User belum menginput data pihak ke-2</p>
                <?php endif;?>
                <?php if ($akun['namap2'] != ""): ?>
                    <?=$akun['namap2']?>
                <?php endif;?>
              </td>

              <td>
              <?=$akun['notelepon']?>
              </td>

              <td>
              <a href="detail?id_pendaftar=<?=$akun['idpendaftar']?>" class="btn btn-success">Detail</a>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalpajak<?= $akun['idpendaftar'];?>">Pajak Sudah Selesai</button>
              </td>
            </tr>
          <?php endforeach?>
        </tbody>
        </table>
<?php endif;?>


<?php if ($_GET['menu']=='pascareal'): ?>
            <!-- Isi konten -->
        <h3><i class="fas fa-list"></i>Data Pasca Real</h3>
        <hr>


        <table class="table table-bordered table-striped mt-3 text-center" id="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Pihak Pertama</th>
            <th scope="col">Pihak Ke-Dua</th>
            <th scope="col">Status Pasca Real</th>
            <th scope="col">No telp</th>
            <th scope="col">Aksi </th>
            
            </tr>
        </thead>

        <tbody>
          <?php $no = 1;?>
          <?php foreach ($data_akun as $akun):?>
            <tr>
              <td><?=$no++;?></td>

              <td><?=$akun['namadir']?></td>

              <td>
              <?php if ($akun['namap2'] == ""): ?>
                <p style="display: inline;width: 100px;height: 100px;padding: 5px;background-color: red;color:white;">User belum menginput data pihak ke-2</p>
                <?php endif;?>
                <?php if ($akun['namap2'] != ""): ?>
                    <?=$akun['namap2']?>
                <?php endif;?>
              </td>

              <td><?=$akun['statuspascareal']?></td>

              <td>
              <?=$akun['notelepon']?>
              </td>

              <td>
              <a href="detail?id_pendaftar=<?=$akun['idpendaftar']?>" class="btn btn-success">Detail</a>
              <!--button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalpajak<!?= $akun['idpendaftar'];?>">Pajak Sudah Selesai</button-->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalrubahstatus<?= $akun['idpendaftar'];?>">Rubah Status</button>
              </td>
            </tr>
          <?php endforeach?>
        </tbody>
        </table>
<?php endif;?>








        </div>
    </div>





    <?php foreach ($data_akun as $akun): ?>
    <div class="modal fade" id="modalpajak<?= $akun['idpendaftar'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-dark" style ="color:white">
            <h5 class="modal-title">Pendaftaran User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            
          <p> Rubah Status Pajak Pendaftar Menjadi Oke?</p>
          <form action="" method="post">

          
          <!--label for="nama">id</label-->
          <input type="hidden" name="id" id="id" class="form-control" value="<?= $akun['idpendaftar'];?>" required>


          
          
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" name="yakin" class="btn btn-danger">Yakin</button>
            
          </div>
          
          </form>

        </div>
      </div>
    </div>
    <?php endforeach;?>



</div>
</div>


<?php foreach ($data_akun as $akun): ?>
    <div class="modal fade" id="modalrubahstatus<?= $akun['idpendaftar'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-dark" style ="color:white">
            <h5 class="modal-title">Pendaftaran User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            
          <p> Rubah Status Pendaftar</p>
          <form action="" method="post">

          
          <!--label for="nama">id</label-->
          <input type="text" name="id" id="id" class="form-control" value="<?= $akun['idpendaftar'];?>" required>


          <div class="mb-3">
           <label for="level">Status</label>
           <select name="status" id="status" class="form-control" required>
            <?php $status = $akun['statusu'];?>
            <option value="Proses Pajak" <?= $status == 'Proses Pajak' ? 'selected': null?>>Proses Pajak</option>
            <option value="Proses Validasi" <?= $status == 'Proses Validasi' ? 'selected': null?>>Proses Validasi</option>
            <option value="Proses Checking" <?= $status == 'Proses Checking' ? 'selected': null?>>Proses Checking</option>
            <option value="Proses Balik Nama" <?= $status == 'Proses Balik Nama' ? 'selected': null?>>Proses Balik Nama</option>
            <option value="Proses Peningkatan" <?= $status == 'Proses Peningkatan' ? 'selected': null?>>Proses Peningkatan</option>
            <option value="Proses HT" <?= $status == 'Proses HT' ? 'selected': null?>>Proses HT</option>
           </select>
          </div>
          
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" name="yakinstatus" class="btn btn-danger">Yakin</button>
            
          </div>
          
          </form>

        </div>
      </div>
    </div>
    <?php endforeach;?>

<?php include "../layout/footer.php";?>