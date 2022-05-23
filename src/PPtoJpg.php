<?php
function PPtoJpg($fileDirectory,$filename)
{
    $powerpnt = new COM("powerpoint.application") or die("Unable to instantiate Powerpoint");
    $file = $fileDirectory;
    $presentation = $powerpnt->Presentations->Open(realpath($file), false, false, false) or die("Unable to open presentation");
    $uploadsFolder = $filename;
    
    foreach ($presentation->Slides as $slide) {
        $slideName = "Slide_" . $slide->SlideNumber;
        $exportFolder = realpath($uploadsFolder);
        $slide->Export($exportFolder . "//" . $slideName . ".jpg", "jpg", "1280", "720");
    }
    $presentation->Close();
    $powerpnt->Quit();
    $powerpnt = null;

    echo'<script type="text/javascript">
     alert("Done");
     window.location.href="index.php";
     </script>';
}
