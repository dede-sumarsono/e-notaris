<?php
    if (!empty($_GET['file'])) {
        $filename = basename($_GET['file']);
        //$filename = '639b1d5415eaf.png';
        $filepath = '../assets/img/'.$filename;
        //$filepath = '../assets/img/639b1d5415eaf.png';
        if(!empty($filename) && file_exists($filepath)){

            //define headers
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$filename");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");

            readfile($filepath);
            exit;
        }else{
            echo "This File Does not Exist";
        }
    }
    ?>



    
