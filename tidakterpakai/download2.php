<!--?php
    if (!empty($_GET['foto'])) {
        $filename = basename($_GET['foto']);
        $filepath = 'assets/img/'.$filename;
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
    ?-->



    <?php
    if(!empty($_GET['foto'])){
    $fileName  = basename($_GET['foto']);
    $filePath  = "assets/img/".$fileName;

        
    if(!empty($fileName) && file_exists($filePath)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        echo "$fileName";
        echo "$filePath";
        //read file 
        readfile($filePath);
        exit;
    }
    else{
        echo "file not exit";
    }
    
    
}

    
