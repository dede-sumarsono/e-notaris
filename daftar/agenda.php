<?php
include '../config/app.php';

$json = array();
$show = mysqli_query($db,"SELECT * FROM pendaftar");

while($row = mysqli_fetch_assoc($show))
{
    if ($row['jenis'] == 'cuti') {
        $json[] = array(
            'backgroundColor' => 'rgb(255,0,0)',
            'borderColor' => 'rgb(255,0,0)',
            'title' => $row['nama'] . ":" . $row['jenis'],
            'start' => $row['waktudaftar'],
            'end' => $row['waktudaftar']

        );
    }else{
        $json[] = array(
            'title' => $row['nama'] . ":" . $row['jenis'],
            'start' => $row['waktudaftar'],
            'end' => $row['waktudaftar']
        );
    }
}
echo json_encode($json);

?>