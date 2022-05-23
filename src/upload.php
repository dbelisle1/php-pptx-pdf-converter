<?php
require __DIR__ . '/PPtoJpg.php';
require __DIR__ . '/PDFtoJpg.php';
if (($_FILES['my_file']['name'] != "")) {
    $date = date('hisv');
    $date = str_replace(' ', '', $date);
    $target_dir = "upload/";
    $file = $_FILES['my_file']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $filename = str_replace(' ', '',$filename);
    $ext = $path['extension'];
    $temp_name = $_FILES['my_file']['tmp_name'];
    $path_filename_ext = $target_dir . $filename . $date . "." . $ext;

    

    if (!file_exists($path_filename_ext)) {
        move_uploaded_file($temp_name, $path_filename_ext);
    } 

    if (!file_exists($filename)) {
        mkdir($filename, 0777, true);
    }
    //Select function accordding to file extention
    if($ext === 'pdf' ){
        PDFtoJpg(realpath($path_filename_ext),  $filename);
    }else{
        PPtoJpg($path_filename_ext, $filename);
    }


    if (!unlink($path_filename_ext)) {
        echo ("$path_filename_ext cannot be deleted due to an error");
    } else {
        echo ("$path_filename_ext has been deleted");
    }
}
