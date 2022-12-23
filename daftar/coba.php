<?php 

$con = mysqli_connect('localhost', 'root', '', 'datapendaftar');
//$sql = mysqli_query($con, "SELECT * FROM pendaftar");
//$sql = mysqli_query($con, "SELECT * FROM pendaftar");
$sql = mysqli_query($con, "SELECT * FROM crud");
$data = [];
while($res = mysqli_fetch_object($sql)){
    // memasukan data ke variable $data
    //array_push($data, ["username" => $res->username, "password" => $res->password]);
    //array_push($data, $res->waktudaftar);
    //array_push($data, $res->waktudaftar);
    array_push($data, $res->waktureal);
}
// mengubah array menjadi json
echo json_encode($data);

?>