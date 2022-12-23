<?php include "layout/header.php";

session_start();
//membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
        alert('Login dulu dong');
        document.location.href='../login/login.php';
        </script>";
        exit;
}

include 'config/app.php';

$data_akun = select("SELECT * FROM crud WHERE pendaftar='$_SESSION[nama]'");
//$data_akun2 = select("SELECT * FROM crud2");
//$data_akun = select("SELECT * FROM pendaftar");

//jika tombol tambah ditekan maka jalankan script berikut
if (isset ($_POST['tambah'])) {
  if (create_akun($_POST)>0) {
    echo "<script>
                alert('Data akun berhasil ditambahkan');
                document.location.href = 'index.php'
                </script>";
  }else {
    echo "<script>
                alert('Data akun tidak berhasil ditambahkan');
                document.location.href = 'index.php'
                </script>";
  }
}

//jika tombol ubah ditekan maka jalankan script berikut
if (isset ($_POST['ubah'])) {
  if (update_akun($_POST)>0) {
    echo "<script>
                alert('Data akun berhasil diubah');
                document.location.href = 'index.php'
                </script>";
  }else {
    echo "<script>
                alert('Data akun tidak berhasil diubah');
                document.location.href = 'index.php'
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
            <!-- Isi konten -->
        <h3><i class="fas fa-list"></i> Daftar Permintaan Anda</h3>
        <hr>
        <!--button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modaltambah"><i class="fas fa-plus-circle"></i>
        Tambah Berkas</button-->

        <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Pihak Pertama</th>
            <th scope="col">Pihak Ke-Dua</th>
            <th scope="col">Progress</th>
            <th scope="col">Pilih Tanggal Real</th>
            <!--th scope="col">Aksi</th-->
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
              <?php if ($akun['namap2'] == ""): ?>
                <p>Isi dulu data pihak ke -2</p>

              <?php elseif ($akun['namap2'] != "" && $akun['statusu'] == "pendaftaran pajak oleh notaris"): ?>
                <p>Tunggu Pendaftaran Pajak Selesai</p>
                
              <?php elseif ($akun['statusu'] == "isi tanggal real"): ?>
                <a href="daftar/datepicker.php?id_pendaftar=<?=$akun['idpendaftar']?>" class="btn btn-warning">Pilih Tanggal Real</a>
                
                <?php elseif ($akun['waktureal'] != ""): ?>
                    <?=$akun['waktureal']?>
                <?php endif;?>
              </td>


              <!--td class="text-center">
                <button type="button" class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#modalubah<?= $akun['idpendaftar'];?>"><i class="fas fa-edit"></i> Ubah</button>  
                <button type="button" class="btn btn-danger mb-1" data-bs-toggle="modal" data-bs-target="#modalhapus<?= $akun['idpendaftar'];?>"><i class="fas fa-trash-alt"></i> Hapus</button>  
              </td-->

            </tr>
          <?php endforeach?>
        </tbody>

        </table>

        </div>
    </div>





  <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary" style ="color:white">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="" method="post">

          <div class="mb-3">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" required>
          </div>

        <div class="mb-3">
          <label for="username">UserName</label>
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

        <div class="mb-3">
           <label for="level">Level</label>
           <select name="level" id="level" class="form-control" required>
            <option value="">-- Pilih Level --</option>
            <option value="1">Admin</option>
            <option value="2">User</option>
           </select>
          </div>

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
        
      </div>
      </form>

    </div>
  </div>
</div>

<?php foreach ($data_akun as $akun): ?>

  

    <!-- modal ubah-->
  <div class="modal fade" id="modalubah<?=$akun['id_akun'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style ="background-color:rgb(81, 192, 87); color:white">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <!--span aria-hidden="true">&times;</span-->
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <input type="hidden" name="id_akun" value="<?= $akun['id_akun'];?>">


          <div class="mb-3">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" value="<?=$akun['nama']?>" required>
          </div>

        <div class="mb-3">
          <label for="username">UserName</label>
          <input type="text" name="username" id="username" class="form-control" value="<?=$akun['username']?>" required>
        </div>

        <div class="mb-3">
           <label for="email">E-mail</label>
          <input type="email" name="email" id="email" class="form-control" value="<?=$akun['email']?>" required>
        </div>

        <div class="mb-3">
           <label for="password">Password<small>(Masukan Password Baru/Lama)</small></label>
          <input type="password" name="password" id="password" class="form-control" value="<?=$akun['nama']?>" required minlength='6'>
        </div>

        <div class="mb-3">
           <label for="level">Level</label>
           <select name="level" id="level" class="form-control" required>
            <?php $level = $akun['level'];?>
            <option value="1" <?= $level == '1' ? 'selected': null?>>Admin</option>
            <option value="2" <?= $level == '2' ? 'selected': null?>>User</option>
           </select>
          </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
      </div>
      </form>

    </div>
  </div>
</div>

  <?php endforeach;?>


<?php foreach ($data_akun as $akun): ?>
  <!-- modal hapus-->
<div class="modal fade" id="modalhapus<?= $akun['id_akun'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style ="background-color:#cc1e1e; color:white">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <!--span aria-hidden="true">&times;</span-->
        </button>
      </div>
      <div class="modal-body">
        <p> Yakin ingin menghapus akun : <?= $akun['nama']?> ?</p>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <a href="btnphp/hapusakun.php?id_akun=<?= $akun['id_akun']; ?>"  class="btn btn-danger">Hapus</a>
      </div>

    </div>
  </div>
</div>
  <?php endforeach; ?>

</div>
</div>

<?php include "layout/footer.php";?>