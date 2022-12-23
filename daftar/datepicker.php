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
if (isset($_POST['tetapkan'])) {
    if (create_tanggalreal($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href = '../permintaan.php'
                </script>";
    }else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = '../permintaan.php'
                </script>";
    }
}

?>

<div><a class="navbar-brand" href="#"><?=$_SESSION['nama'] ?></a></div>
        
    </div>
    </nav>
    </div>
<!DOCTYPE html>
<html>
<head>
<title>date</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header bg-info  text-center">
                        <h4><b class="text-white">Pilih Tanggal Realisasi</b></h4>
                        <!--p id='demo'></p>
                        <p><!?= $id_akun = (int)$_GET['id_pendaftar'];?></p-->

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p> Bila tanggal tidak dapat dipilih berarti sudah ada yang memesan tanggal tersebut</p>
                                        
                                        <!--div class="form-group mt-4">        
                                        <label for="iddb">Id</label-->
                                        <input type="hidden" class="form-control mb-2" id="iddb" name="iddb" value="<?= $id_akun = (int)$_GET['id_pendaftar'];?>" required>
                                        <!--/div-->

                                        <label>Date:</label>
                                        <input type="text"  name="date"  class="datepicker form-control" autocomplete="off" placeholder="Pilih tanggal" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button name='tetapkan' class="btn btn-success btn-sm" type="submit">Tetapkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.load = getdatabase();
        function getdatabase(){
        let xhr = new XMLHttpRequest;
        xhr.open('GET','coba.php');
        xhr.onload = function(){
            if(xhr.readyState == 4 && xhr.status ==200){
                console.log(xhr.responseText);                
                //document.getElementById("demo").innerHTML = xhr.responseText;
                var disableDates2 = xhr.responseText;
                //console.log(typeof m)

                $(function() {
                var enableDays = ['2022-11-30'];
                //var disabledDays = ['2022-11-28', '2022-11-29'];
                var disabledDays = disableDates2;

                function formatDate(d) {
                var day = String(d.getDate())
                //add leading zero if day is is single digit

                if (day.length == 1)
                day = '0' + day
                var month = String((d.getMonth()+1))
                //add leading zero if month is is single digit
                if (month.length == 1)
                month = '0' + month
                return d.getFullYear() + '-' + month + "-" + day;
                }

                $('.datepicker').datepicker({
                format: 'mm/dd/yyyy',
                beforeShowDay: function(date){
                var dayNr = date.getDay();
                    if (dayNr==0  ||  dayNr==6){
                if (enableDays.indexOf(formatDate(date)) >= 0) {
                    return true;
                }
                return false;
                }
                    if (disabledDays.indexOf(formatDate(date)) >= 0) {
               return false;
                }
                    return true;
                }
                });
                });

               // $('.datepicker').datepicker({
               // //format: 'dd/mm/yyyy',
               // format: 'yyyy/mm/dd',
               // beforeShowDay: function(date){
                // //dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
               // dmy = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
               // if(disableDates.indexOf(dmy) != -1){
               //     return false;
               // }
               // else{
               //     return true;
               // }
                //    }
                //});
        
                



            }
        }
        xhr.send();
        }

        //console.log(typeof getdatabase())


        
        
        //var disableDates = ["9-11-2022", "14-11-2022", "15-11-2022","28-12-2022"];
        //var disableDates = ["2022-12-9", "2022-12-14", "2022-12-15","2022-12-28"];
        //var disableDates = getdatabase();
        ////////var disableDates = as;
        //var disableDates = xhr.responseText;
        //console.log(xhr.responseText);


 //       $('.datepicker').datepicker({
            //format: 'dd/mm/yyyy',
 //           format: 'yyyy/mm/dd',
 //           beforeShowDay: function(date){
                //dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
 //               dmy = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
  //              if(disableDates.indexOf(dmy) != -1){
  //                  return false;
  //              }
 //               else{
  //                  return true;
  //              }
  //          }
  //      });

        
        

    </script>

    
</body>
</html>