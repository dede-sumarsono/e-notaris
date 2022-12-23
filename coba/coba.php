<?php include "../layout/header.php";
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



$data_akun = select("SELECT * FROM akun");
$data_akun2 = select("SELECT * FROM pendaftar");

//jika tombol tambah ditekan maka jalankan script berikut
if (isset ($_POST['tambah'])) {
  if (coba($_POST)>0) {
    echo "<script>
                alert('Data akun berhasil ditambahkan');
                document.location.href = 'coba.php'
                </script>";
  }else {
    echo "<script>
                alert('Data akun tidak berhasil ditambahkan');
                document.location.href = 'coba.php'
                </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
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

          <!--div class="mb-3">
          <label for="namapihak2">Nama Pihak Ke-dua</label>
          <input type="text" name="namapihak2" id="namapihak2w" class="form-control" required>
          </div-->

      </div>

      


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
        
      </div>
      </form>

      </div>

</body>
</html>

<?php include "../layout/footer.php";