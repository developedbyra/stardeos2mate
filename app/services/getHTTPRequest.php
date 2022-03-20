<?php  

function getHTTPResponseStatusCode($url)
{
    $status = null;

    $headers = @get_headers($url, 1);
    if (is_array($headers)) {
        $status = substr($headers[0], 9);
    }

    return $status;
}





?>