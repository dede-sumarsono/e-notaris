<?php 
//include '../layout/header.php';
include '../layout/headeradmin.php';
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

//$data_akun = select("SELECT * FROM crud WHERE pendaftar='$_SESSION[nama]'");
$id_akun = (int)$_GET['id_pendaftar'];
$data_akun = select("SELECT * FROM crud INNER JOIN akun ON iduser = id_akun WHERE idpendaftar='$id_akun'");
//$data_akun = select("SELECT * FROM crud INNER JOIN akun ON pendaftar = nama WHERE idpendaftar='$id_akun'");
//$data_akun = select("SELECT * FROM crud INNER JOIN akun ON pendaftar = nama WHERE statusu='isi data pihak ke-2!'");

    //$get1 = mysqli_query($db, "select * from crud WHERE statusu='isi data pihak ke-2!'");
    //$get2 = mysqli_query($db, "select * from crud WHERE statusu='pendaftaran pajak oleh notaris'");
    //$get3 = mysqli_query($db, "select * from crud WHERE waktureal !='' ");
    //$count1 = mysqli_num_rows($get1);
    //$count2 = mysqli_num_rows($get2);
    //$count3 = mysqli_num_rows($get3);
  

   
 
    

?>

<div><a class="navbar-brand" href="#"><?=$_SESSION['nama'] ?></a></div>
        
    </div>
    </nav>
    </div>


    <div class="container-fluid pt-5 pb-5 bg-light" >
        <div class="container text-center">
            <h2 class="display-2 mb-5" id="portofolio">Detail Pendaftaran</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reiciendis ipsam, explicabo laboriosam fugiat id dolore quaerat adipisci beatae doloribus.</p>
            
        </div>

        <div class="container">
        <?php foreach ($data_akun as $akun):?>
            <h3 class="mt-4">Data Pihak Pertama</h3>
                <div class="container" style="margin-left:20px">
                    <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                        <tbody>
                            <tr>
                                <td width="25%" valign="top" class="textt">Nama Pendaftar</td>
                                <td width="2%">:</td>
                                <td style="font-weight:bold"><?= $akun['pendaftar']?></td>
                            </tr>
                            <tr>
                                <td width="25%" valign="top" class="textt">Nomor Telepon</td>
                                <td width="2%">:</td>
                                <td style="font-weight:bold"><?= $akun['notelepon']?></td>
                            </tr>

                            <tr>
                                <td class="textt">Pelayanan yang dipilih</td>
                                <td>:</td>
                                <td><?= $akun['pelayanan']?></td>
                            </tr>

                            <tr>
                                <td class="textt">Jeni Pelayanan</td>
                                <td>:</td>
                                <td><?= $akun['jenislayanan']?></td>
                            </tr>

            <?php if ($akun['jenislayanan'] == 'pt'): ?>

                            <tr>
                                <td class="textt">Nama Direktur</td>
                                <td>:</td>
                                <td><?= $akun['namadir']?></td>
                            </tr>
                            <tr>
                                <td class="textt">Tempat Tanggal Lahir Direktur</td>
                                <td>:</td>
                                <td><?= $akun['ttl']?></td>
                            </tr>
                            <tr>
                                <td class="textt">Alamat Direktur</td>
                                <td>:</td>
                                <td><?= $akun['alamatdir']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Pekerjaan Direktur</td>
                                <td valign="top">:</td>
                                <td><?= $akun['pekerjaandir']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">RT / RW</td>
                                <td valign="top">:</td>
                                <td><?= $akun['rtrw']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kelurahan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kelurahan']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Status Direktur</td>
                                <td valign="top">:</td>
                                <td><?= $akun['statusdir']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Pekerjaan Direktur</td>
                                <td valign="top">:</td>
                                <td><?= $akun['pekerjaandir']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kewarganegaraan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kewarganegaraan']?></td>
                            </tr>


                            <tr>
                                <td valign="top" class="textt">Nomor SHGB</td>
                                <td valign="top">:</td>
                                <td><?= $akun['shgb']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Nomor Seri</td>
                                <td valign="top">:</td>
                                <td><?= $akun['seri']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Provinsi</td>
                                <td valign="top">:</td>
                                <td><?= $akun['provinsi']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kabupaten</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kabupaten']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kecamatan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kecamatan']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Tanggal SU</td>
                                <td valign="top">:</td>
                                <td><?= $akun['tanggalsu']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Luas Tanah</td>
                                <td valign="top">:</td>
                                <td><?= $akun['luastanah']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Luas Bangunan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['luasbangunan']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Harga Jual</td>
                                <td valign="top">:</td>
                                <td><?= $akun['hargajualbeli']?></td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Foto KTP</td>
                                <td valign="center">:</td>
                                <td>
                                <img src="../assets/img/<?= $akun['foto']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                <a href="download.php?file=<?= $akun['foto']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Akta Pendirian</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['aktapendirian']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['aktapendirian']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Akta Terakhir</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['aktaterakhir']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['aktaterakhir']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Akta BBG</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['aktabbg']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['aktabbg']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Sura Persetujuan Dekom</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['suratpersetujuandekom']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['suratpersetujuandekom']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Akta Akta BBG</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['aktabbg']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['aktabbg']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">PPB</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['ppb']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['ppb']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">IMB PBG</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['imbpbg']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['imbpbg']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">SHGB</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['shgbp']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['shgbp']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">KTP PT</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['ktppt']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['ktppt']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">NPWP PT</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['npwppt']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['npwppt']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Brosur</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['brosur']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['brosur']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Price List</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['pricelist']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['pricelist']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Shepian</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['shepian']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['shepian']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Foto Lokasi</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['fotolokasi']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['fotolokasi']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                
            <?php elseif ($akun['jenislayanan'] == 'perorangan'): ?>
                
                             
                            <h4>Pihak Pertama</h4>
                            <tr>
                                <td class="textt">Nama </td>
                                <td>:</td>
                                <td><?= $akun['namadir']?></td>
                            </tr>
                            <tr>
                                <td class="textt">Tempat Tanggal Lahir</td>
                                <td>:</td>
                                <td><?= $akun['ttl']?></td>
                            </tr>
                            <tr>
                                <td class="textt">Alamat</td>
                                <td>:</td>
                                <td><?= $akun['alamatdir']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Pekerjaan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['pekerjaandir']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">RT / RW</td>
                                <td valign="top">:</td>
                                <td><?= $akun['rtrw']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kelurahan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kelurahan']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Status</td>
                                <td valign="top">:</td>
                                <td><?= $akun['statusdir']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Pekerjaan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['pekerjaandir']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kewarganegaraan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kewarganegaraan']?></td>
                            </tr>

                            <tr><td><br></td></tr>
                            <tr><td><h4>Data Suami / Isteri Pihak Pertama</h4></td></tr>

                            <tr>
                                <td class="textt">Nama </td>
                                <td>:</td>
                                <td><?= $akun['namasi']?></td>
                            </tr>
                            <tr>
                                <td class="textt">Tempat Tanggal Lahir</td>
                                <td>:</td>
                                <td><?= $akun['ttlsi']?></td>
                            </tr>
                            <tr>
                                <td class="textt">Alamat</td>
                                <td>:</td>
                                <td><?= $akun['alamatsi']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Pekerjaan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['pekerjaansi']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">RT / RW</td>
                                <td valign="top">:</td>
                                <td><?= $akun['rtrwsi']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kelurahan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kelurahansi']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Status</td>
                                <td valign="top">:</td>
                                <td><?= $akun['statussi']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Pekerjaan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['pekerjaansi']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kewarganegaraan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kewarganegaraansi']?></td>
                            </tr>

                            <tr><td><br></td></tr>
                            <tr><td><h4>Data Yang Diurus</h4></td></tr>
                            <tr>
                                <td valign="top" class="textt">Nomor SHGB</td>
                                <td valign="top">:</td>
                                <td><?= $akun['shgb']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Nomor Seri</td>
                                <td valign="top">:</td>
                                <td><?= $akun['seri']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Provinsi</td>
                                <td valign="top">:</td>
                                <td><?= $akun['provinsi']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kabupaten</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kabupaten']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kecamatan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kecamatan']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Tanggal SU</td>
                                <td valign="top">:</td>
                                <td><?= $akun['tanggalsu']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Luas Tanah</td>
                                <td valign="top">:</td>
                                <td><?= $akun['luastanah']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Luas Bangunan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['luasbangunan']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Harga Jual</td>
                                <td valign="top">:</td>
                                <td><?= $akun['hargajualbeli']?></td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Foto KTP</td>
                                <td valign="center">:</td>
                                <td>
                                <img src="../assets/img/<?= $akun['foto']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                <a href="download.php?file=<?= $akun['foto']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>

                            <tr>
                                <td valign="center" class="textt">Foto KTP Isteri/Suami</td>
                                <td valign="center">:</td>
                                <td>
                                <img src="../assets/img/<?= $akun['fotoktpsi']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                <a href="download.php?file=<?= $akun['fotoktpsi']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td valign="center" class="textt">PPB</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['ppb']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['ppb']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">IMB PBG</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['imbpbg']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['imbpbg']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">SHGB</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['shgbp']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['shgbp']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td valign="center" class="textt">Denah Lokasi</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['denahlokasi']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['denahlokasi']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Foto Lokasi</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['fotolokasi']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['fotolokasi']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
            <?php endif;?>  

                        </tbody>
                    </table>
                </div>

            <h3 class="mt-4">Data Pihak Ke-dua</h3>
                <div class="container" style="margin-left:20px">
                    <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                        <tbody>
                            <tr>
                                <td width="25%" valign="top" class="textt">Nama</td>
                                <td width="2%">:</td>
                                <td style="font-weight:bold"><?= $akun['namap2']?></td>
                            </tr>
                            <tr>
                                <td class="textt">noktpp2</td>
                                    <td>:</td>
                                    <td><?= $akun['noktpp2']?></td>
                            </tr>
                            <tr>
                                <td class="textt">Tempat Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><?= $akun['ttlp2']?></td>
                            </tr>
                            <tr>
                                <td class="textt">Alamat</td>
                                    <td>:</td>
                                    <td><?= $akun['alamatp2']?></td>
                            </tr>
                            <tr>
                                <td class="textt">RT / RW</td>
                                    <td>:</td>
                                    <td><?= $akun['rtrwp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kelurahan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kelurahanp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kecamatan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kecamatanp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Status Kawin</td>
                                <td valign="top">:</td>
                                <td><?= $akun['statuskawinp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Pekerjaan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['pekerjaanp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Kewarganegaraan</td>
                                <td valign="top">:</td>
                                <td><?= $akun['kewarganegaraanp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Golongan Darah</td>
                                <td valign="top">:</td>
                                <td><?= $akun['goldarp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Nomor Register</td>
                                <td valign="top">:</td>
                                <td><?= $akun['nomorregisterp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Nomor Register</td>
                                <td valign="top">:</td>
                                <td><?= $akun['nomorregisterp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Nomor Register</td>
                                <td valign="top">:</td>
                                <td><?= $akun['nomorregisterp2']?></td>
                            </tr>
                            <tr>
                                <td valign="top" class="textt">Nomor Register</td>
                                <td valign="top">:</td>
                                <td><?= $akun['nomorregisterp2']?></td>
                            </tr>


                            <tr>
                                <td valign="center" class="textt">Foto KTP User</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['fotoktpuserp2']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['fotoktpuserp2']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">Foto KK</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['fotokkp2']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['fotokkp2']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="center" class="textt">STI ISKOM</td>
                                <td valign="center">:</td>
                                <td>
                                    <img src="../assets/img/<?= $akun['stiiskomp2']?>" alt="foto" width="50%" style="display: block; margin-right: auto; margin-left: auto;">
                                    <a href="download.php?file=<?= $akun['stiiskomp2']?>"><p style="text-align:center">Download</p></a>
                                </td>
                            </tr>
                            
                            

                        </tbody>
                    </table>


                    
                </div>


                <h3 class="mt-4">Lainnya</h3>
                <div class="container" style="margin-left:20px">
                    <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                        <tbody>
                            <tr>
                                <td width="25%" valign="top" class="textt">Waktu Real</td>
                                <td width="2%">:</td>
                                <td style="font-weight:bold"><?= $akun['waktureal']?></td>
                            </tr>
                            
                            

                        </tbody>
                    </table>


                    
                </div>
                    



        <?php endforeach?>  
        </div>
    </div>
    </div>



      










<?php include '../layout/footer.php';?>

