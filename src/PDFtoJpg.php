<?php
function PDFtoJpg($fileDirectory, $filename)
{
     try {
        
        $imagick = new imagick();
        $myurl = $fileDirectory;
        $imagick->readImage($myurl);
        $num_pages = $imagick->getNumberImages();
        $count = 0;
        while ($count < $num_pages) {
            $imagick->setResolution(96, 96); //96 equivale a 720p, 150 a 1080p
            $imagick->readImage($myurl.'['.$count.']');
            $imagick->setImageFormat("jpg");
            file_put_contents($filename . "/test_" . $count . ".jpg", $imagick);
            $count++;
        }
    } catch (Exception $e) {
        //Try catch para que termine en excepcion ya que no se como obtener las paginas totales del pdf
    }

    echo'<script type="text/javascript">
    alert("Done");
    window.location.href="index.php";
    </script>';
}
