<?php 

function DownloadAndConvert($url)
{

    echo "Hola xd";
    
    /* Gen Random number */
    function intCodeRandom($length)
    {
      $intMin = (10 ** $length) / 10; // 100...
      $intMax = (10 ** $length) - 1;  // 999...

      $codeRandom = mt_rand($intMin, $intMax);

      return $codeRandom;
    }

    $file = intCodeRandom(10) . "mp4";
    shell_exec('/usr/local/bin/ffmpeg -i ' . $url .' -bsf:a aac_adtstoasc -vcodec copy -c copy -crf 50 app/views/public/videoConvert/' . $file . '');

    $fileurl = 'app/views/public/videoConvert/' . $file;
    header("Content-type:video/mp4");
    header('Content-Disposition: attachment; filename=' . $fileurl);
    readfile( $fileurl );
}


?>